<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Laravel Livewire Boostrap Modal Dialog Example

Minimalistic example showing how to deal with Boostrap Modals in Livewire.
In a nutshell:

- the modal dialog contains a form with two input bound to properties of the `ModalDemo` class (name, email);
- when clicking on the save button, the `ModalDemo::onSave()` method is invoked;
- the `onSave()` method shows how to close the modal dialog after saving;
 
Highlights:

- `wire:ignore.self` is needed for div.modal;
- `.prevent` must be used when binding the click event with the server-side method: `wire:click.prevent="onSave"`
- the following snippet must be added to the main page, after `<livewire:scripts/>`:

```
<script type="text/javascript">
    window.livewire.on('onCloseModal', (selector) => {
        $(selector).modal('hide');
    });
</script>
```

## Running the example

```
composer install
npm install
npm run dev
```

Set the `.env` file according to your environment. In particular, if your `/public` directory is not mapped under root,
set `LIVEWIRE_ASSET_URL=/<path>` with the relative path of your public directory. 

## License

This code is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
