<?php

namespace App\Orchid\Screens\Post;

use Orchid\Screen\Screen;
use App\Models\Block;
use App\Models\Post;
use App\Orchid\Layouts\Post\BlockListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Toast;

class BlockListScreen extends Screen
{ /**
    * @var Post
    */
   public $post;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Post $post): iterable
    {
        return [
            'blocks' =>  Block::where('post_id', $post->id)->get(),
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
        
        $post = Post::find(1);
        return [
        Link::make(__('Add'))
            ->icon('plus')
            ->href(route('platform.posts.blocks.create',$post))];
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
