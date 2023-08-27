module.exports = {
    proxy: "localhost/", // 예: "localhost/your-wordpress-site"
    files: [
        '**/*.php',
        '**/*.css',
        '**/*.js',
        '!node_modules/**/*',
        '**/*.html'
    ],
    watchOptions: {
        debounceDelay: 1
    }
};