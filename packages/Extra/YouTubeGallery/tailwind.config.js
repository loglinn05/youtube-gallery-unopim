/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/Resources/**/*.{php,blade.php,js,vue}",
        "./resources/**/*.{php,blade.php,js,vue}"
    ],
    darkMode: ['class', '[class~="dark"]'],
    corePlugins: {
        preflight: false
    },
    prefix: 'yg-',
    theme: {
        extend: {}
    },
    plugins: [],
}
