<?php

namespace App\Orchid\Screens\Post;

use Orchid\Screen\Screen;
use App\Models\PostBlock;
use App\Models\Post;
use App\Orchid\Layouts\Post\BlockListLayout;
use Orchid\Screen\Actions\Link;

class BlockListScreen extends Screen
{
        /**
     * @var Post
     */
    public $post;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @param Post $post
     *
     * @return array
     */
    public function query(Post $post): iterable
    {
        return [
            'blocks' => PostBlock::filters()
            ->defaultSort('created_at', 'desc')
            ->paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'BlockListScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            BlockListLayout::class
        ];
    }
}
