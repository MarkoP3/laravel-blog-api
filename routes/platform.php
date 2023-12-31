<?php

declare(strict_types=1);

use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use App\Orchid\Screens\Post\PostListScreen;
use App\Orchid\Screens\Post\PostEditScreen;
use App\Orchid\Screens\Post\BlockListScreen;
use App\Orchid\Screens\Post\BlockEditScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Platform > Posts
Route::screen('posts', PostListScreen::class)
    ->name('platform.posts')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Posts'), route('platform.posts')));

// Platform > Posts > Create
Route::screen('posts/create', PostEditScreen::class)
->name('platform.posts.create')
->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.posts')
    ->push(__('Create'), route('platform.posts.create')));

    Route::screen('posts/{post}/blocks', BlockListScreen::class)
    ->name('platform.posts.edit.blocks')
    ->breadcrumbs(fn (Trail $trail, $post) => $trail
        ->parent('platform.posts.edit',$post)
        ->push("blocks", route('platform.posts.edit.blocks', $post)));



    Route::screen('posts/{post}/blocks/{block}', BlockEditScreen::class)
        ->name('platform.posts.edit.blocks.edit')
        ->breadcrumbs(fn (Trail $trail, $block, $post) => $trail
            ->parent('platform.posts.edit.blocks',$post->id)
            ->push($block->id, route('platform.posts.edit.blocks.edit', $block, $post)));
Route::screen('posts/{post}/blocks/create', BlockEditScreen::class)
->name('platform.posts.blocks.create')
->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.posts')
    ->push(__('Create'), route('platform.posts.blocks.create')));
    Route::screen('posts/{post}/edit', PostEditScreen::class)
    ->name('platform.posts.edit')
    ->breadcrumbs(fn (Trail $trail, $post) => $trail
        ->parent('platform.posts')
        ->push($post->id, route('platform.posts.edit', $post)));