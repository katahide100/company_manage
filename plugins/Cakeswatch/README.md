# Cakeswatch
Cakeswatch is adaptation of Bootswatch for CakePHP 3.x themes

## Installation using git

```
cd my_app_name
git clone git://github.com/sherwinrobles/Cakeswatch plugins/Cakeswatch
```

## Manual installation

Download and extract file inside my_app_name/plugins/


## Load plugin and use the theme

In your config/bootstrap.php in the bottom of the file add

```
Plugin::load('Cakeswatch');

```

In your src/Controller/AppControler.php add

```
public function initialize()
{
    $this->viewBuilder()->theme('Cakeswatch');
}
```

To use the different bootswatch themes. In your plugins/Cakeswatch/src/Template/Layout/default.ctp change the css name of bootswatch theme you want to use.

```
echo $this->Html->css('flatly.css');

```

When running bake use the --theme option to specify the bake-theme you want to use.

```
bin/cake bake template model_name --theme Cakeswatch

```
