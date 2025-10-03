<?php

namespace Extra\YouTubeGallery\Http\Controllers;

use Extra\YouTubeGallery\DataGrids\YouTubeVideosDataGrid;
use Extra\YouTubeGallery\Http\Requests\StoreYouTubeVideoRequest;
use Extra\YouTubeGallery\Repository\YoutubeVideoRepository;
use Illuminate\Http\Request;

class YoutubeVideoController extends Controller
{
    /**
     * Create a controller instance.
     *
     * @return void
     */
    public function __construct(protected YoutubeVideoRepository $youtubeVideoRepository)
    {
    }

    /**
     * Index.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(YouTubeVideosDataGrid::class)->toJson();
        }

        return view('youtube-gallery::youtube-gallery.index');
    }

    /**
     * Store a video.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreYouTubeVideoRequest $request)
    {
        try {
            $this->youtubeVideoRepository->create($request->validated());

            session()->flash('success', trans('youtube-gallery::app.youtube-gallery-page.video-addition-succeeded-message'));
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', trans('youtube-gallery::app.youtube-gallery-page.video-addition-failed-message'));
            return redirect()->back();
        }
    }

    /**
     * Remove a video.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $id)
    {
        try {
            $this->youtubeVideoRepository->delete($id);

            if (request()->wantsJson()) {
                return response()->json([
                    'message' => trans('youtube-gallery::app.youtube-gallery-page.video-deletion-succeeded-message'),
                ], 200);
            }
        } catch (\Exception $e) {
            if (request()->wantsJson()) {
                return response()->json([
                    'message' => trans('youtube-gallery::app.youtube-gallery-page.video-deletion-failed-message'),
                ], 500);
            }
        }
    }
}
