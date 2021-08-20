# ImagesLoader

<!--version-->

[ImagesLoader](https://github.com/itformat/imagesloader/) is a modular money picker plugin for Bootstrap.

## Live Demo
See live at https://www.format.it/demo/imagesloader

## Screen shots
<a href="https://www.format.it/demo/imagesloader">
  <img alt="ImagesLoader" src="https://www.format.it/demo/imagesloader/screenshots/0001.png" />
</a>

## Install
- Cloning using Git: `git clone https://github.com/ITformat/imagesloader.git`

## Versions

First release 1.0.0

Dependecies:
  - Jquery v3.5.1
  - Bootstrap v.4.5.2

## Example

```html

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Format MoneyPicker</title>
  <meta charset="UTF-8">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous" />

  <!-- Format MoneyPicker CSS -->
  <link rel="stylesheet" href="./jquery.moneypicker.css">

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <!-- Font awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" crossorigin="anonymous"></script>

  <!-- Format MoneyPicker  -->
  <script type="text/javascript" src="./jquery.moneypicker-1.0.0.js"></script>
</head>

<body>

  <div class="container col-4 pt-5" >
    <label for="Price" class="col-form-label text-nowrap"><strong>Money picker</strong></label>
    <div class="input-group">
      <div class="input-group-prepend" data-toggle="popover" data-type="moneypicker" data-input="inputPrice" data-sign="1">
        <span class="input-group-text"><span class="fa fa-euro-sign"></span></span>
      </div>
      <input type="text" id="inputPrice" name="price" class="form-control" value="7" pattern="^(\d{1,6})(,\d{1,2})*(\.\d{1,2})?$" required autofocus>
    </div>
  </div>

</body>
</html>
```
## Contributions
* [Issues](https://github.com/ITformat/ImagesLoader/issues)
* [Pull Requests](https://github.com/ITformat/ImagesLoader/pulls)
* [Milestones](https://github.com/ITformat/ImagesLoader/milestones)

This project exists thanks to all the [people who contribute](https://github.com/ITformat/ImagesLoader/graphs/contributors).

## License
The MIT License (MIT).
Please see the [License File](https://github.com/ITformat/ImagesLoader/blob/main/LICENSE) for more information.

## Credits

Written and maintained by [Marco Montagnani](https://www.format.it/#team) and all other contributors.

<a class="readme-logo" href="https://www.format.it/">
  <img alt="Format" src="https://www.format.it/img/logo-format.png" width="300px" />
</a>

*Thanks to all everybody that will support this project.*

[![Paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif)](https://www.paypal.com/donate?hosted_button_id=FDL9PF2E2MGF8)

