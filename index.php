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
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(1000)">
                        <h3 class="cell-label cell-header-label">Fish Fingers</h3>
                        <p class="cell-label">(large)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(1001)">
                        <h3 class="cell-label cell-header-label">Fish Fingers</h3>
                        <p class="cell-label">(small)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(1003)">
                        <h3 class="cell-label cell-header-label">Shelled Prawns</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                </ul>
                <ul id="milkproducts" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(1004)">
                        <h3 class="cell-label cell-header-label">Tub Ice Cream</h3>
                        <p class="cell-label">(1L)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(1005)">
                        <h3 class="cell-label cell-header-label">Tub Ice Cream</h3>
                        <p class="cell-label">(2L)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                </ul>
                <ul id="other" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(1002)">
                        <h3 class="cell-label cell-header-label">Hamburger Patties</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                </ul>

                <!-- Fresh Items Nodes -->
                <ul id="meats" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3002)">
                        <h3 class="cell-label cell-header-label">T-Bone Steak</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                </ul>
                <ul id="dairy" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3000)">
                        <h3 class="cell-label cell-header-label">Cheddar Cheese</h3>
                        <p class="cell-label">(500g)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3001)">
                        <h3 class="cell-label cell-header-label">Cheddar Cheese</h3>
                        <p class="cell-label">(1000g)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                </ul>
                <ul id="fruits" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)"  onclick="display_product(3003)">
                        <h3 class="cell-label cell-header-label">Navel Oranges</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3004)">
                        <h3 class="cell-label cell-header-label">Bananas</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3006)">
                        <h3 class="cell-label cell-header-label">Grapes</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3007)">
                        <h3 class="cell-label cell-header-label">Apples</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3005)">
                        <h3 class="cell-label cell-header-label">Peaches</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                </ul>

                <!-- Beverages Items Nodes -->
                <ul id="coffee" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(4003)">
                        <h3 class="cell-label cell-header-label">Instant Coffee</h3>
                        <p class="cell-label">(200g)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(4004)">
                        <h3 class="cell-label cell-header-label">Instant Coffee</h3>
                        <p class="cell-label">(500g)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                </ul>
                <ul id="tea" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(4000)">
                        <h3 class="cell-label cell-header-label">Earl Grey TeaBags</h3>
                        <p class="cell-label">(25 pack)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(4001)">
                        <h3 class="cell-label cell-header-label">Earl Grey TeaBags</h3>
                        <p class="cell-label">(100 pack)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(4002)">
                        <h3 class="cell-label cell-header-label">Earl Grey TeaBags</h3>
                        <p class="cell-label">(200 pack)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                </ul>
                <ul id="chocolate" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(4005)">
                        <h3 class="cell-label cell-header-label">Chocolate Bar</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                </ul>

                <!-- Home Health Items Nodes -->
                <ul id="medicine" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2000)">
                        <h3 class="cell-label cell-header-label">Panadol</h3>
                        <p class="cell-label">(24 pack)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2001)">
                        <h3 class="cell-label cell-header-label">Panadol</h3>
                        <p class="cell-label">(Bottle 50)</p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                </ul>
                <ul id="bathroom" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2002)">
                        <h3 class="cell-label cell-header-label">Bath Soap</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                </ul>
                <ul id="plasticbags" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2003)">
                        <h3 class="cell-label cell-header-label">Garbage Bags Small</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2004)">
                        <h3 class="cell-label cell-header-label">Garbage Bags Large</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                </ul>
                <ul id="laundry" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2005)">
                        <h3 class="cell-label cell-header-label">Washing Powder</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
                    <li class="category-cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2006)">
                        <h3 class="cell-label cell-header-label">Laundry Bleach</h3>
                        <p class="cell-label"></p>
                        <p class="cell-label fade-in-label"> See More
                            <i class="material-icons icon-navigate-next">navigate_next</i>
                        </p>
                    </li>
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
                  <div class="product-information-window">
                      <p id="product_title"> Example Text </p>
                      <p id="unit_price"> Example Text </p>
                      <p id="unit_quantity"> Example Text </p>
                      <p id="product_stock"> Example Text </p>
                  </div>
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
        <script type="text/javascript" src="js/product_loader.js"></script>
    <body>
</html>
