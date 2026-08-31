/* =====================================================
   STEPX SHOP JAVASCRIPT
===================================================== */


/* =====================================================
   CART
===================================================== */

let cartCount = 0;


/* Add Product To Cart */

function addShopCart(productName) {

    cartCount++;

    const cartCountElement =
        document.getElementById("cartCount");

    if (cartCountElement) {
        cartCountElement.textContent = cartCount;
    }

    showNotification(productName + " added to cart");
}


/* =====================================================
   NOTIFICATION
===================================================== */

function showNotification(message) {

    const notification =
        document.getElementById("shopNotification");

    if (!notification) {
        return;
    }

    const text =
        notification.querySelector("span");

    if (text) {
        text.textContent = message;
    }

    notification.classList.add("show");


    setTimeout(function () {

        notification.classList.remove("show");

    }, 2500);

}


/* =====================================================
   CART
===================================================== */

function openCart() {

    window.location.href = "/cart";

}


/* =====================================================
   MOBILE MENU
===================================================== */

function toggleShopMenu() {

    const navbar =
        document.querySelector(".shop-navbar");

    if (navbar) {

        navbar.classList.toggle("show");

    }

}


/* =====================================================
   WISHLIST
===================================================== */

const wishlistButtons =
    document.querySelectorAll(
        ".wishlist-btn, .small-wishlist"
    );


wishlistButtons.forEach(function(button) {

    button.addEventListener("click", function() {

        const icon =
            button.querySelector("i");

        if (icon) {

            icon.classList.toggle("fa-regular");
            icon.classList.toggle("fa-solid");

        }

    });

});


/* =====================================================
   CATEGORY FILTER
===================================================== */

const categoryFilters =
    document.querySelectorAll(
        ".category-filter"
    );


categoryFilters.forEach(function(filter) {

    filter.addEventListener("change", function() {

        filterProducts();

    });

});


/* =====================================================
   AGE GROUP FILTER
===================================================== */

const ageFilters =
    document.querySelectorAll(
        ".age-filter"
    );


ageFilters.forEach(function(filter) {

    filter.addEventListener("change", function() {

        filterProducts();

    });

});


/* =====================================================
   PRICE FILTER
===================================================== */

const priceRange =
    document.getElementById("priceRange");

const maxPrice =
    document.getElementById("maxPrice");


if (priceRange) {

    priceRange.addEventListener("input", function() {

        const price =
            Number(priceRange.value);


        if (maxPrice) {

            maxPrice.textContent =
                "Rs. " + price.toLocaleString();

        }


        filterProducts();

    });

}


/* =====================================================
   FILTER PRODUCTS
===================================================== */

function filterProducts() {

    const products =
        document.querySelectorAll(
            ".shop-product-card"
        );


    /* -------------------------------------------------
       SELECTED CATEGORIES
    ------------------------------------------------- */

    const selectedCategories =
        Array.from(categoryFilters)

        .filter(function(filter) {

            return filter.checked;

        })

        .map(function(filter) {

            return filter.value;

        });


    /* -------------------------------------------------
       SELECTED AGE GROUP
    ------------------------------------------------- */

    const selectedAgeFilter =
        Array.from(ageFilters)

        .find(function(filter) {

            return filter.checked;

        });


    const selectedAge =
        selectedAgeFilter
            ? selectedAgeFilter.value
            : "";


    /* -------------------------------------------------
       MAXIMUM PRICE
    ------------------------------------------------- */

    const maximumPrice =
        priceRange
            ? Number(priceRange.value)
            : Infinity;


    /* -------------------------------------------------
       FILTER EACH PRODUCT
    ------------------------------------------------- */

    products.forEach(function(product) {


        const category =
            product.dataset.category || "";


        const ageGroup =
            product.dataset.ageGroup || "";


        const price =
            Number(product.dataset.price) || 0;


        /* ---------------------------------------------
           CATEGORY MATCH
        --------------------------------------------- */

        let categoryMatch = true;


        if (selectedCategories.length > 0) {

            categoryMatch =
                selectedCategories.includes(category);

        }


        /* ---------------------------------------------
           AGE GROUP MATCH
        --------------------------------------------- */

        let ageMatch = true;


        if (selectedAge !== "") {

            ageMatch =
                ageGroup === selectedAge;

        }


        /* ---------------------------------------------
           PRICE MATCH
        --------------------------------------------- */

        const priceMatch =
            price <= maximumPrice;


        /* ---------------------------------------------
           FINAL RESULT
        --------------------------------------------- */

        if (
            categoryMatch &&
            ageMatch &&
            priceMatch
        ) {

            product.style.display = "";

        }

        else {

            product.style.display = "none";

        }

    });

}


/* =====================================================
   SORT PRODUCTS
===================================================== */

const sortSelect =
    document.getElementById("sortProducts");


if (sortSelect) {

    sortSelect.addEventListener("change", function() {


        const grid =
            document.getElementById("productGrid");


        if (!grid) {
            return;
        }


        const products =
            Array.from(
                grid.querySelectorAll(
                    ".shop-product-card"
                )
            );


        const sortValue =
            sortSelect.value;


        /* ---------------------------------------------
           PRICE LOW TO HIGH
        --------------------------------------------- */

        if (sortValue === "low") {

            products.sort(function(a, b) {

                return Number(a.dataset.price) -
                       Number(b.dataset.price);

            });

        }


        /* ---------------------------------------------
           PRICE HIGH TO LOW
        --------------------------------------------- */

        else if (sortValue === "high") {

            products.sort(function(a, b) {

                return Number(b.dataset.price) -
                       Number(a.dataset.price);

            });

        }


        /* ---------------------------------------------
           NAME A - Z
        --------------------------------------------- */

        else if (sortValue === "name") {

            products.sort(function(a, b) {

                return (
                    a.dataset.name || ""
                ).localeCompare(
                    b.dataset.name || ""
                );

            });

        }


        /* ---------------------------------------------
           PUT PRODUCTS BACK INTO GRID
        --------------------------------------------- */

        products.forEach(function(product) {

            grid.appendChild(product);

        });


        /* Re-apply active filters */

        filterProducts();

    });

}


/* =====================================================
   INITIAL FILTER
===================================================== */

document.addEventListener(
    "DOMContentLoaded",
    function() {

        filterProducts();

    }
);