$(document).ready(function () {
  var products = JSON.parse(localStorage.getItem("productData"));
  console.log(products);
  console.log(typeof products);
  // Check if there are any stored product HTMLs

  if (products && products.length > 0) {
    // Append each product HTML to the "cart_grid" section

    /* reference to the parent element */

    for (var i = 0; i < products.length; i++) {
      $(document).on("mouseover", ".product-item", function () {
        $(this)
          .find("img")
          .attr("src", function (index, attr) {
            return attr.replace("-active-active.jpg", "-active.jpg");
          });
      });

      $(document).on("mouseout", ".product-item", function () {
        $(this)
          .find("img")
          .attr("src", function (index, attr) {
            return attr.replace("-active.jpg", ".jpg");
          });
      });
      $("#cart_grid").append(products[i]);
      $(".add-to-cart").text("Remove from cart");

    }
  }

  $(document).on("click", ".add-to-cart", function() {
    var $productItem = $(this).closest(".product-item");
  
    // Find the index of the product item
    var itemIndex = $productItem.index();
  
    // Remove the closest parent element with class "product-item"
    $productItem.remove();
  
    // Remove the corresponding item from the products array
    products.splice(itemIndex, 1);
  
    // Update the modified products array in the localStorage
    localStorage.setItem("productData", JSON.stringify(products));
  });
});
