# Getting Started with Create laravel vuejs project

This project was bootstrapped with [Create React App](



## Install Laravel using Composer if you haven't already:

composer global require laravel/installer


## Create a new Laravel project:

laravel new laravel-vuejs-project


## Change directory to your newly created project:

cd laravel-vuejs-project


## Install Inertia.js and Vue.js :

npm install inertia @inertiajs/inertia-vue vue@next


## Update your resources/js/app.js file to use Inertia.js and Vue.js:

```
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue';

createInertiaApp({
  resolve: (name) => require(`./Pages/${name}`),
  setup({ el, app, props }) {
    createApp({ render: () => h(app, props) }).mount(el);
  },
});

```

## Install Syncfusion components using npm:

```
npm install @syncfusion/ej2-vue-charts @syncfusion/ej2-vue-grids

```

## Configure Laravel Routes and Controllers

```
use App\Http\Controllers\ClimateMetricsController;
use App\Http\Controllers\ClimateEventsController;

Route::get('/climate-metrics', [ClimateMetricsController::class, 'index'])->name('climate-metrics');
Route::get('/climate-events', [ClimateEventsController::class, 'index'])->name('climate-events');

```

## Configure laravel Models

`php artisan make:model ClimateEvents`

`php artisan make:seeder ClimateEventsSeeder`


## Create Blade Layout

```
<!DOCTYPE html>
<html>
<head>
    <!-- Your head content goes here -->
</head>
<body>
    @inertia
    <!-- Your script tags go here -->
</body>
</html>

```

## Start Development Server

`Start Development Server`

## Run the following command to build your Vue.js components and make them available to your Laravel application:

`npm run dev`