<?php

namespace Extra\YouTubeGallery\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreYouTubeVideoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'url' => [
                'required',
                'url:https',
                'regex:/^(https?:\/\/)?(www\.)?(youtube\.com|youtu\.?be)\/.+$/',
                'max:255',
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'url.regex' => trans('youtube-gallery::app.youtube-gallery-page.youtube-url-invalid-message'),
        ];
    }
}
