module.exports = {
    proxy: "127.0.0.1:8000",
    files: [
        "resources/**/*.blade.php",
        "resources/css/**/*.css",
        "resources/js/**/*.js",
        "app/**/*.php",
        "routes/**/*.php"
    ],
    port: 3000,
    open: true,
    notify: false,
    reloadDelay: 500,
    reloadDebounce: 500
};