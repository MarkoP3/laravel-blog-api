<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Post;

use App\Models\Block;
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
    public $target = 'blocks';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('type', __('type'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn (Block $block) => $block->type),

            TD::make('created_at', __('Created'))
                ->sort()
                ->render(fn (Block $block) => $block->updated_at->toDateTimeString()),
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Block $block) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $block->id,
                            ]),
                    ])),
        ];
    }
}
