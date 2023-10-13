<?php

namespace App\Orchid\Screens\Post;
use App\Models\Post;
use Orchid\Screen\Screen;
use App\Orchid\Layouts\Post\PostEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class PostEditScreen extends Screen
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
        return 'PostEditScreen';
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
     * @param Post    $post
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request, Post $post)
    {

        $post->fill($request->get('post'));
        $post->save();

        Toast::info(__('Post was saved'));
        return redirect()->route('platform.posts.edit.blocks',$post->id);
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [PostEditLayout::class];
    }
}
