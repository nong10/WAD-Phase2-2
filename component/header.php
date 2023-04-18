
<div id="index-header" class="header">
    <a href="./index.php">Da-Recipes</a>
    <a href="./pages/profile/favorite.php">Favorite</a>
    <a href="./pages/profile/profile.php">Profile </a>
    <a href="./pages/account/login.php">Login</a>
    <input type="text" placeholder="Search for recipes ...">
</div>

<div id="other-header" class="header">
        <a href="../../index.php">Da-Recipes</a>
        <a id="link2favorite" href="../pages/profile/favorite.php">Favorite</a>
        <a href="../pages/recipes/my_recipes.php">My Recipes</a>
        <a href="../pages/account/login.php">Login</a>
        <a href="../pages/account/signup.php">Sign Up</a>
        <a href="../pages/profile/profile.php">Profile </a>
        <input id="searchbox" type="text" placeholder="Search for recipes ...">
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

</script> 