<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Post;

use App\Models\Post;
use App\Models\PostBlock;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class BlockListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'post_blocks';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('type', __('type'))
                ->render(fn (PostBlock $block) => $block->type)
        ];
    }
}
