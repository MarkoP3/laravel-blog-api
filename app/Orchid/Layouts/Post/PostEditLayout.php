<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Post;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use App\Models\User;

class PostEditLayout extends Rows
{
    /**
     * The screen's layout elements.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('post.title')
                ->title('Title')
                ->placeholder('Attractive but mysterious title'),

            Cropper::make('post.cover_image_uri')
                ->title('Large web banner image, generally in the front and center')
                ->width(1000)
                ->height(500),
            Select::make('post.user_id')
                ->fromModel(User::class, 'name')
                ->empty('No select'),
            Quill::make('post.description')
        ];
    }
}
