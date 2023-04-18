<div id="header-container">
    <div id="index-header" class="header">
        <a href="./index.php">Da-Recipes</a>
        <a href="./pages/profile/favorite.php">Favorite</a>
        <a href="./pages/profile/profile.php">Profile </a>
        <a href="./pages/account/login.php">Login</a>
        <input type="text" placeholder="Search for recipes ...">
    </div>

    <div id="other-header" class="header">
            <a href="../../index.php">Da-Recipes</a>
            <a id="link2favorite" href="../../pages/profile/favorite.php">Favorite</a>
            <a href="../../pages/recipes/my_recipes.php">My Recipes</a>
            <a href="../../pages/account/login.php">Login</a>
            <a href="../../pages/account/signup.php">Sign Up</a>
            <a id="link2profile" href="../../pages/profile/profile.php">Profile </a>
            <input id="searchbox" type="text" placeholder="Search for recipes ...">
    </div>

     <div id="category-menu">
        <select id="category-select" onchange="showCategories()">
            <option value="">All Categories</option>
            <option value="vegetarian">Vegetarian</option>
            <option value="pasta">Pasta</option>
            <option value="dessert">Dessert</option>
        </select>
    </div>

    <div id="category-selected" >
        <ul>
            <!-- Wrap li elements with a span and add a button with an onclick event -->
            <li style="display: none;"><span>Vegetarian</span> <button onclick="clearCategory(this)">&times;</button></li>
            <li style="display: none;"><span>Pasta</span> <button onclick="clearCategory(this)">&times;</button></li>
            <li style="display: none;"><span>Dessert</span> <button onclick="clearCategory(this)">&times;</button></li>
        </ul>
    </div>

</div>


<script>
    // get the current URL
	var url = window.location.pathname;


    if(url.includes('index')) {
        document.getElementById('other-header').style.display = 'none';
    } else {
        document.getElementById('index-header').style.display = 'none';
    }

	
	// hide or show the component based on the URL
	if(url.includes('favorite')) {
		document.getElementById('searchbox').style.display = 'none';
	}

    if(url.includes('login')) {
        document.getElementById('link2profile').innerText = "nong10";
    }

 function showCategories() {
        const categorySelect = document.getElementById('category-select');
        const selectedCategory = categorySelect.value;
        const categoryLis = document.querySelectorAll('#category-selected li');

        // Hide all categories
        categoryLis.forEach((li) => {
            li.style.display = 'none';
        });

        if (selectedCategory) {
            const selectedCategoryLi = document.querySelector(
                `#category-selected li span:contains('${selectedCategory}')`
            );

            if (selectedCategoryLi) {
                selectedCategoryLi.parentElement.style.display = 'block';
            }
        }
    }

    // Function to handle the clear button click event
    function clearCategory(button) {
        const categorySelect = document.getElementById('category-select');
        const categoryText = button.previousElementSibling.innerText;

        // Clear dropdown selection
        categorySelect.value = '';

        button.parentElement.style.display = 'none';
    }

</script>