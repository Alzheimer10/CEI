toggle.css <sub>Bootstrap-style checkbox hack by <a href="https://twitter.com/qbicfeet">@qbicfeet</a></sub>
===========================================================================================================

### Interactive demo
Refer to <a href="http://swords.dance/toggle">swords.dance/toggle</a> for a live interactive demo.

### Basic usage
To use the toggle switch-style checkboxes, simply add `.tgl` to a checkbox `<input>` element which has its `id` attribute set to a unique identifier and is followed by a `<label>` element which has its `for` attribute set to the same identifier.
```html
<input type="checkbox" class="tgl tgl-default" id="basic-1" />
<label for="basic-1">Toggle me!</label>
```
### Stacked checkboxes
Just like regular Bootstrap checkboxes, toggle switch-style checkboxes can be stacked vertically by wrapping them in `<div>` elements that use the `.checkbox` class. The checkboxes can also optionally be wrapped inside `<label>` elements with no adverse effects.
```html
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-default" id="stacked-1" />
    <label for="stacked-1">Vertical stacking!</label>
</div>
<div class="checkbox">
    <label>
        <input type="checkbox" class="tgl tgl-default" id="stacked-2" />
        <label for="stacked-2">I'm inside a label!</label>
    </label>
</div>
```
### Colors
Like most things Bootstrap, these checkboxes can use any of the default contextual colors.
```html
<div class="checkbox">
    <input type="checkbox" class="tgl" id="colors-1" />
    <label for="colors-1"><mark>default</mark></label>
</div>
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-default" id="colors-2" />
    <label for="colors-2"><code>.tgl-default</code></label>
</div>
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-primary" id="colors-3" />
    <label for="colors-3"><code>.tgl-primary</code></label>
</div>
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-success" id="colors-4" />
    <label for="colors-4"><code>.tgl-success</code></label>
</div>
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-info" id="colors-5" />
    <label for="colors-5"><code>.tgl-info</code></label>
</div>
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-warning" id="colors-6" />
    <label for="colors-6"><code>.tgl-warning</code></label>
</div>
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-danger" id="colors-7" />
    <label for="colors-7"><code>.tgl-success</code></label>
</div>
```
### Mixed colors
Toggle switch-style checkboxes can be set to use different colors for their checked state by adding `.tgl-on-*` (replace the asterisk with any of the contextual colors names).
```html
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-default tgl-on-primary" id="mixed-1" />
    <label for="mixed-1"><code>.tgl-default .tgl-on-primary</code></label>
</div>
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-warning tgl-on-info" id="mixed-2" />
    <label for="mixed-2"><code>.tgl-warning .tgl-on-info</code></label>
</div>
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-danger tgl-on-success" id="mixed-3" />
    <label for="mixed-3"><code>.tgl-danger .tgl-on-success</code></label>
</div>
```
### Sizes
To be entirely honest these larger sizes make the checkboxes look clumsy and awkward and I'm not entirely sure why anyone would ever use them willingly, but for the sake of completion, the optional classes `.tgl-sm`, `.tgl-md` and `.tgl-lg` have been included. These sizes correspond to `.btn-sm`, the default button size and `.btn-lg` (the default checkbox size is approximately the same size as `.btn-xs`).
```html
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-primary" id="sizes-1" />
    <label for="sizes-1"><mark>default</mark></label>
</div>
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-primary tgl-sm" id="sizes-2" />
    <label for="sizes-2"><code>.tgl-sm</code></label>
</div>
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-primary tgl-md" id="sizes-3" />
    <label for="sizes-3"><code>.tgl-md</code></label>
</div>
<div class="checkbox">
    <input type="checkbox" class="tgl tgl-primary tgl-lg" id="sizes-4" />
    <label for="sizes-4"><code>.tgl-lg</code></label>
</div>
```
### Form example
The toggle switch-style checkboxes integrate seamlessly with regular Bootstrap form controls.
```html
<form>
    <div class="form-group">
        <label for="txt-email">Email address</label>
        <input type="email" class="form-control" id="txt-email" placeholder="Email" />
    </div>
    <div class="checkbox">
        <input type="checkbox" class="tgl tgl-default tgl-on-success" id="form-1" checked disabled />
        <label for="form-1">I agree to the terms and conditions</label>
    </div>
    <div class="checkbox">
        <input type="checkbox" class="tgl tgl-default tgl-on-success" id="form-2" />
        <label for="form-2">Sign me up for the monthly newsletter</label>
    </div>
    <div class="checkbox">
        <input type="checkbox" class="tgl tgl-default tgl-on-danger" id="form-3" />
        <label for="form-3">Add me to the FBI watchlist</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
```
