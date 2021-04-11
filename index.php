<!DOCTYPE html>

<html>
    <head>
        <title> Jaiden Chicote - Online Grocery Store </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <?php include('php/product_search.php');?>
        <div class="grid-container">

            <!-- Left Component Frame -->
            <div class="left-component">
              <div class="header-cell">
                  <h1 class="header-title"> This is the Market </h1>
              </div>
              <div class="market-graphic">
                  <!-- Primary Categories -->
                <ul id="primecategory" class="display-row">
                    <li data-value="frozen" class="category-cell" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Frozen Food</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li data-value="fresh" class="category-cell" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Fresh Food</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li data-value="beverages" class="category-cell" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Beverages</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li data-value="home" class="category-cell" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Home Health</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li data-value="pet" class="category-cell" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Pet Food</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                </ul>

                <!-- Sub Item Display Rows -->
                <ul id="frozen" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" data-value="seafood" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Sea Food</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li class="category-cell" data-value="milkproducts" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Milk Products</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li class="category-cell" data-value="other" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Other</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                </ul>
                <ul id="fresh" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" data-value="meats" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Meats</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li class="category-cell" data-value="dairy" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Dairy</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li class="category-cell" data-value="fruits" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Fruits</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                </ul>
                <ul id="beverages" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" data-value="coffee" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Coffee</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li class="category-cell" data-value="tea" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Tea</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li class="category-cell" data-value="chocolate" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Chocolate</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                </ul>
                <ul id="home" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" data-value="medicine" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Medicine</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li class="category-cell" data-value="bathroom" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Bathroom</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li class="category-cell" data-value="plasticbags" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Plastic Bags</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li class="category-cell" data-value="laundry" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Laundry</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                </ul>
                <ul id="pet" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" data-value="dogfood" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Dog Food</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li class="category-cell" data-value="birdfood" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Bird Food</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                    <li class="category-cell" data-value="catfood" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Cat Food</p>
                        <i class="material-icons">expand_more</i>
                        </li>
                    <li class="category-cell" data-value="fishfood" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <p>Fish Food</p>
                        <i class="material-icons">expand_more</i>
                    </li>
                </ul>

                <!-- Frozen Items Nodes -->
                <ul id="seafood" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Fish Fingers (large)</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Fish Fingers (small)</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Shelled Prawns</li>
                </ul>
                <ul id="milkproducts" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Tub Ice Cream (1L)</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Tub Ice Cream (2L)</li>
                </ul>
                <ul id="other" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Hamburger Patties</li>
                </ul>

                <!-- Fresh Items Nodes -->
                <ul id="meats" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">T-Bone Steak</li>
                </ul>
                <ul id="dairy" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Cheddar Cheese (500g)</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Cheddar Cheese (1000g)</li>
                </ul>
                <ul id="fruits" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Navel Oranges</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Bananas</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Grapes</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Apples</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Peaches</li>
                </ul>

                <!-- Beverages Items Nodes -->
                <ul id="coffee" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Instant Coffee (200g)</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Instant Coffee (500g)</li>
                </ul>
                <ul id="tea" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Earl Grey TeaBags (25 pack)</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Earl Grey TeaBags (100 pack)</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Earl Grey TeaBags (200 pack)</li>
                </ul>
                <ul id="chocolate" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Chocolate Bar</li>
                </ul>

                <!-- Home Health Items Nodes -->
                <ul id="medicine" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Panadol (24 pack)</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Panadol (Bottle 50)</li>
                </ul>
                <ul id="bathroom" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Bath Soap</li>
                </ul>
                <ul id="plasticbags" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Garbage Bags Small</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Garbage Bags Large</li>
                </ul>
                <ul id="laundry" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Washing Powder</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Laundry Bleach</li>
                </ul>

                <!-- Pet Food Nodes -->
                <ul id="dogfood" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Dry Dog Food (5kg)</li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Dry Dog Food (1kg)</li>
                </ul>
                <ul id="birdfood" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Bird Food</li>
                </ul>
                <ul id="catfood" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Cat Food</li>
                </ul>
                <ul id="fishfood" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)">Fish Food</li>
                </ul>

              </div>
            </div>

            <!-- Reight Component Frame -->
            <div class="right-component">
              <div class="product-display">
                  <div class="product-information-window"></div>
                  <button class="add-to-cart-btn">
                      <h3 class="btn-label"> Add To Cart </h3>
                  </button>
              </div>
              <div class="shopping-cart-display">
                  <div class="shopping-cart-window"></div>
                  <div class="cart-action-row">
                      <button class="clear-btn">
                          <h3 class="btn-label"> Clear </h3>
                      </button>
                      <button class="checkout-btn">
                          <h3 class="btn-label"> Checkout </h3>
                      </button>
                  </div>
              </div>
            </div>
        </div>

        <script type="text/javascript" src="js/graphic_display.js"></script>
    <body>
</html>
