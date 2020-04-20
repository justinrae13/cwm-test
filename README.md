# Chemicals and Waste Platform

## Main dependencies
- Processwire 3.x

## Learning Modules
The learning modules exported from Articulated Storyline are located the learning_modules
folder. They are displayed as iframes in various pages in the platform.

## Apache
An alias to /learning_modules should be put in the virtualhost file pointing to the
folder where all the Storyline exports are stored. It should appear as the following:

~~~~
Alias "/learning_modules" "{path_to_cwmsynergies}/learning_modules"
~~~~