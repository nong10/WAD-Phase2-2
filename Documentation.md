# Documentation of WAD Phase2-2
## todos
- [ ]
implement dynamic header bar
- [ ]
merge profile page with modify profile page
- [ ]
update the site map

## Implementation of Javascript
#### 1. header bar 
control show/hide of links based on **pages** and **login status**

## Design of header bar
#### all components:
1. link to `index.php`
2. link to `favorite.php`
3. link to `my_recipes.php`
4. link to `login.php`
5. link to `signup.php`
6. link to `profile.php`
7. search box

#### behavior 
profile link

* profile link should be displayed as username  

links **show** only after login:  

* favorite
* my_recipes
* profile  

links **hide** after login:

* signup
* login