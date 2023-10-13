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
use App\Models\Block;
use App\Models\Post;

class BlockEditLayout extends Rows
{
    /**
     * The screen's layout elements.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('block.type')
                ->title('Type'),

            Select::make('block.post_id')
                ->fromModel(Post::class, 'title')
                ->empty('No select'),
        ];
    }
}
