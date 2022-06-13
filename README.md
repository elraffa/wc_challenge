# WC Challenge

# Solution for White Canvas Challenge

## Instructions

    Crear un repositorio en Github o Gitlab o Bitbucket y agregarme como colaborador
    Crear una nueva instancia de Wordpress
    Dentro del wordpress agregar un theme custom
    Se use SCSS para los estilos
    Se use la metodología BEM para el nombre de las clases. Link a BEM
    Se use Slick para el Slider.  Link a Slick
    Dinamizar todo lo posible del template (navbar, post loop, etc.) utilizando Advanced Custom Fields plugin.
    Crear un dump de la base de datos
    Tener un acceso web (alguna manera de ver el proyecto en "vivo")
    
## Solution

This was a fun and entertaining challenge. Firstly I ran a fresh install of Wordpress using Local. As a wp starter I am using [Underscores](https://underscores.me/) with Sassify option. I am using BEM for classes and Slick for the slider. 

## Sections

I created a page template for the about section following best practices according to Wordpress Codex, using page-[slug].php. In this case the file is page-about.php. That way the page with the *about* slug will by default load the solution. 

On the templates folder you can find the content-about.php file where all the content for the About page is found. 

The solution was to create two sections (Members and Call to Action or CTA). In wordpress Dashboard, both sections are targeted with Advanced Custom Fields using CPTUI to create a new element in the Dashboard Menu. 

For the **Members** section you can use the Title for the name of the person, the Featured Image for the profile Image and the Position field for the person's role. 

As for the **CTA** you can use the Featured Image for the Icon or image to show. I included a WYSIWYG field for the Title since the last two words have to be bold according to the design. 

## Design

The design makes an effort to be pixel perfect and was developed in a Mobile First approach, designing first the mobile version of each component and adding a media query for the desktop version with a min-width attribute of 900px. Variables can be used to target different media queries if required. 

---

Please feel free to contact me at federicoruffa@gmail.com if you have any questions or need further explanations on the approach.
