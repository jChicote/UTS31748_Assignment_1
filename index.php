<!DOCTYPE html>

<html>
    <head>
        <title> Jaiden Chicote - Online Grocery Store </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <?php include('php/product_search.php');?>
        <?php include('order-form.php');?>

        <!-- Preceeds document structure for function declarations of graphic interface -->
        <script type="text/javascript" src="js/graphic_display.js"></script>

        <div class="grid-container">

            <!-- Left Component Frame -->
            <div class="left-component">
              <div class="header-cell">
                  <h1 class="header-title">
                      <span> Welcome To </span>
                      <span style="color: #ff5100"> GoMart </span>
                  </h1>
              </div>
              <div class="market-graphic">
                  <!-- Primary Categories -->
                <ul id="primecategory" class="display-row">
                    <li data-value="frozen" class="category-cell" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <i class="material-icons category-icons">ac_unit</i>
                            <p class="category-heading">Frozen Food</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li data-value="fresh" class="category-cell" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <i class="material-icons category-icons">food_bank</i>
                            <p class="category-heading">Fresh Food</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li data-value="beverages" class="category-cell" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <i class="material-icons category-icons">local_drink</i>
                            <p class="category-heading">Beverages</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li data-value="home" class="category-cell" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <i class="material-icons category-icons">holiday_village</i>
                            <p class="category-heading">Home Health</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li data-value="pet" class="category-cell" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <i class="material-icons category-icons">pets</i>
                            <p class="category-heading">Pet Food</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                </ul>

                <!-- Sub Item Display Rows -->
                <ul id="frozen" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" data-value="seafood" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Sea Food</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li class="category-cell" data-value="milkproducts" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Milk Products</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li class="category-cell" data-value="other" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Other</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                </ul>
                <ul id="fresh" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" data-value="meats" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Meats</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li class="category-cell" data-value="dairy" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Dairy</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li class="category-cell" data-value="fruits" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Fruits</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                </ul>
                <ul id="beverages" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" data-value="coffee" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Coffee</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li class="category-cell" data-value="tea" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Tea</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li class="category-cell" data-value="chocolate" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Chocolate</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                </ul>
                <ul id="home" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" data-value="medicine" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Medicine</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li class="category-cell" data-value="bathroom" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Bathroom</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li class="category-cell" data-value="plasticbags" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Plastic Bags</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li class="category-cell" data-value="laundry" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Laundry</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                </ul>
                <ul id="pet" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell" data-value="dogfood" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Dog Food</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li class="category-cell" data-value="birdfood" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Bird Food</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                    <li class="category-cell" data-value="catfood" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Cat Food</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                        </li>
                    <li class="category-cell" data-value="fishfood" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="category-header">
                            <p class="category-heading">Fish Food</p>
                        </div>
                        <div class="category-footer">
                            <i class="material-icons down_icon">expand_more</i>
                        </div>
                    </li>
                </ul>

                <!-- Frozen Items Nodes -->
                <ul id="seafood" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(1000)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Fish Fingers</h3>
                            <p class="cell-label">(large)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell  product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(1001)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Fish Fingers</h3>
                            <p class="cell-label">(small)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>

                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(1003)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Shelled Prawns</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
                <ul id="milkproducts" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(1004)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Tub Ice Cream</h3>
                            <p class="cell-label">(1L)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(1005)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Tub Ice Cream</h3>
                            <p class="cell-label">(2L)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
                <ul id="other" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(1002)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Hamburger Patties</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>

                <!-- Fresh Items Nodes -->
                <ul id="meats" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3002)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">T-Bone Steak</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
                <ul id="dairy" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3000)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Cheddar Cheese</h3>
                            <p class="cell-label">(500g)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3001)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Cheddar Cheese</h3>
                            <p class="cell-label">(1000g)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
                <ul id="fruits" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)"  onclick="display_product(3003)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Navel Oranges</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3004)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Bananas</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3006)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Grapes</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3007)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Apples</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(3005)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Peaches</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>

                <!-- Beverages Items Nodes -->
                <ul id="coffee" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(4003)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Instant Coffee</h3>
                            <p class="cell-label">(200g)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(4004)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Instant Coffee</h3>
                            <p class="cell-label">(500g)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
                <ul id="tea" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(4000)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Earl Grey TeaBags</h3>
                            <p class="cell-label">(25 pack)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(4001)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Earl Grey TeaBags</h3>
                            <p class="cell-label">(100 pack)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(4002)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Earl Grey TeaBags</h3>
                            <p class="cell-label">(200 pack)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
                <ul id="chocolate" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(4005)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Chocolate Bar</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>

                <!-- Home Health Items Nodes -->
                <ul id="medicine" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2000)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Panadol</h3>
                            <p class="cell-label">(24 pack)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2001)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Panadol</h3>
                            <p class="cell-label">(Bottle 50)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
                <ul id="bathroom" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2002)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Bath Soap</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
                <ul id="plasticbags" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2003)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Garbage Bags Small</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2004)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Garbage Bags Large</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
                <ul id="laundry" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2005)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Washing Powder</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(2006)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Laundry Bleach</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>

                <!-- Pet Food Nodes -->
                <ul id="dogfood" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(5000)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Dry Dog Food</h3>
                            <p class="cell-label">(5kg)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(5001)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Dry Dog Food</h3>
                            <p class="cell-label">(1kg)</p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
                <ul id="birdfood" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(5002)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Bird Food</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
                <ul id="catfood" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(5003)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Cat Food</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
                <ul id="fishfood" class="display-row sub-display-items" style="display: none;">
                    <li class="category-cell product_cell" onmouseover="onMouseOverProduct(this)" onmouseout="onMouseOut(this)" onclick="display_product(5004)">
                        <div class="category-header">
                            <h3 class="cell-label cell-header-label">Fish Food</h3>
                            <p class="cell-label"></p>
                        </div>
                        <i class="material-icons icon-navigate-next add-product-icon">add</i>
                    </li>
                </ul>
              </div>
            </div>

            <!-- Reight Component Frame -->
            <div class="right-component">
              <div class="product-display">
                  <div class="product-information-window">
                      <div class="preview-thumbnail" style="background: blue;"></div>
                      <div class="product-info">
                          <div class="title-block">
                              <h3 id="product_title"> Product Title </h3>
                          </div>
                          <div class="price-block">
                              <p id="unit_price" style="font-size: 30px;"> $0.00 </p>
                          </div>
                          <div class="sub-product-info">
                              <hr class="dividing-line">
                              <p id="unit_quantity"> Quantity: </p>
                              <p id="product_stock"> Stock: </p>
                          </div>
                          <div class="plus-minus-input">
                              <button type="button" class="plus-minus-button" onclick="minus_quantity()">
                                  <i class="material-icons">remove</i>
                              </button>
                              <input id="input-quantity-field" class="quantity-input-field" type="number" name="quantity" value="1">
                              <button type="button" class="plus-minus-button" onclick="add_quantity()">
                                  <i class="material-icons">add</i>
                              </button>
                          </div>
                      </div>
                  </div>
                  <div class="total-price-label">
                      <h3 style="margin-left: 1rem; float: left; margin-top: 0; margin-bottom: 0; font-family: "Poppins-Medium500";">Total:</h3>
                      <p id="total-price" style="text-align: right; margin-right: 1rem; font-family: "Poppins-Medium500";"> $0:00 </p>
                  </div>
                  <button class="add-to-cart-btn" onclick="add_to_cart()">
                      <h3 class="btn-label"> Add To Cart </h3>
                  </button>
              </div>
              <div class="shopping-cart-display">
                  <div class="shopping-cart-window">
                    <ul id="cart-list" class="cart-display" style="padding: 0; margin: 0;">
                        <li class="cart-list-item" style="margin-top: 0.5rem;">
                            <p style="font-family: "Poppins-Bold700";">Name</p>
                            <p style="font-family: "Poppins-Bold700";">Unit</p>
                            <p style="font-family: "Poppins-Bold700";">Quantity</p>
                            <p style="font-family: "Poppins-Bold700";">Cost</p>
                        </li>
                    </ul>
                  </div>
                  <div class="total-price-label">
                      <h3 style="margin-left: 1rem; float: left; margin-top: 0; margin-bottom: 0;">Total:</h3>
                      <p id="order-total" style="text-align: right; margin-right: 1rem;"> $0:00 </p>
                  </div>
                  <div class="cart-action-row">
                      <button class="clear-btn" onclick="clearCart()">
                          <h3 class="btn-label"> Clear </h3>
                      </button>
                      <button class="checkout-btn" onclick="checkoutCart()">
                          <h3 class="btn-label"> Checkout </h3>
                      </button>
                  </div>
              </div>
            </div>
        </div>

        <!-- transparent darkened window -->
        <div id="dark-background-overlay" class="dark-background"></div>

        <!-- Modal Window -->
        <div id="modal-window" class="modal-window">

            <!-- Modal Content Form -->
            <div id="checkoutContent" class="modal-order-content">
                <div class="modal-order-list">
                    <ul id="checkout-list" class="cart-display" style="padding: 0; margin: 0;">
                        <li class="cart-list-item" style="margin-top: 0.5rem;">
                            <p>Name</p>
                            <p>Unit</p>
                            <p>Quantity</p>
                            <p>Cost</p>
                        </li>
                    </ul>
                </div>
                <div class="final-total-label">
                    <h3 style="margin-left: 1rem; float: left; margin-top: 0; margin-bottom: 0;">Total:</h3>
                    <p id="checkout-total" style="text-align: right; margin-right: 1rem;"> $0:00 </p>
                </div>
                <div class="modal-action-row">
                    <button class="finalise-btn" onclick="finalisePurchase()">
                        <h3 class="btn-label"> Finalise </h3>
                    </button>
                </div>
            </div>

            <div id="checkoutForm" class="modal-form-content">
                <h1 class="form-title">Purchase Form</h3>
                <form>
                    <table style="margin-left: auto; margin-right: auto;">
                        <tr>
                            <td style="padding-right: 1rem;">
                                <h4 class="form-subheader">First Name:</h4>
                                <input id="firstname" class="form-input-bar" type="text" name="firstname" required>
                            </td>
                            <td>
                                <h4 class="form-subheader">Last Name:</h4>
                                <input id="lastname"class="form-input-bar" type="text" name="lastname" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <h4 class="form-subheader">Address:</h4>
                                <input id="address" class="form-input-bar" type="text" name="address" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <h4 class="form-subheader">Suburb:</h4>
                                <input id="suburb" class="form-input-bar" type="text" name="suburb" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="form-subheader">State:</h4>
                            </td>
                            <td>
                                <select id="state" name="states">
                                  <option value="nsw">New South Wales</option>
                                  <option value="act">Australian Capital Territory</option>
                                  <option value="mel">Melbourne</option>
                                  <option value="qns">Queensland</option>
                                  <option value="sa">South Australia</option>
                                  <option value="wa">Western Australia</option>
                                  <option value="nt">Northern Territory</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="form-subheader">Country:</h4>
                            </td>
                            <td>
                                <input id="country" class="form-input-bar" type="text" name="country" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <h4 class="form-subheader">Email:</h4>
                                <input id="email"class="form-input-bar" type="text" name="email" required>
                            </td>
                        </tr>
                    </table>
                    <div style="text-align: center; margin-top: 1rem;">
                        <input id="formSubmitBtn" class="finalise-btn" type="button" name="submit" value="Purchase" onclick="validateFormDetails()">
                    </div>
                </form>
            </div>
        </div>


        <script type="text/javascript" src="js/product_loader.js"></script>
        <script type="text/javascript" src="js/product_display.js"></script>
        <script type="text/javascript" src="js/virtual_cart.js"></script>
        <script type="text/javascript" src="js/modal_finalise_display.js"></script>
        <script type="text/javascript" src="js/order_form_validation.js"></script>
    <body>
</html>
