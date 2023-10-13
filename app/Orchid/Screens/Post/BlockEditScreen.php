<?php

namespace App\Orchid\Screens\Post;
use App\Models\Block;
use App\Models\Post;
use Orchid\Screen\Screen;
use App\Orchid\Layouts\Post\BlockEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class BlockEditScreen extends Screen
{
    /**
     * @var Block
     */
    public $block;
    
    /**
     * @var Post
     */
    public $post;


    /**
     * Fetch data to be displayed on the screen.
     *
     * @param Block $block
     *
     * @return array
     */
    public function query(Post $post,Block $block): iterable
    {
        return [
            'block'       => $block,
            'post'       => $post
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'BlockEditScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Save'))
            ->icon('check')
            ->method('save')
        ];
    }


    
    /**
     * @param Request $request
     * @param Block    $block
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request, Block $block)
    {

        $block->fill($request->get('block'));
        $block->save();

        Toast::info(__('Block was saved'));
        return redirect()->route('platform.posts.edit.blocks',$block->post_id);
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [BlockEditLayout::class];
    }
}
