{
    // appDir: "../js",
    baseUrl: "../js",
    dir: "../dist",
    optimize: "uglify",
    optimizeCss: "standard.keepLines",
    mainConfigFile: "../js/main.js",
    removeCombined: true,
    fileExclusionRegExp: /^\./,
    modules: [
        {
            name: "app/dispatcher",
        },
        {
            name: 'app/login',
            exclude: [
                "jquery",
                "app/common"
            ]
        },
        {
            name: 'app/register',
            exclude: [
                "jquery",
                "app/common",
                "json"
            ]
        },
        {
            name: 'app/doctor-diagnose',
            exclude: [
                "jquery",
                "app/common",
                "json"
            ]
        },
        {
            name: 'app/clinic-drugstore',
            exclude: [
                "jquery",
                "app/common",
                "json"
            ]
        },
        {
            name: 'app/clinic-charge',
            exclude: [
                "jquery",
                "app/common",
                "json"
            ]
        },
        {
            name: 'app/clinic-bill',
            exclude: [
                "jquery",
                "app/common",
                "json"
            ]
        },
        {
            name: 'app/admin',
            exclude: [
                "jquery",
                "app/common",
                "json"
            ]
        },
        {
            name: "app/adjuvant-therapy",
            exclude: [
                "jquery",
                "app/common",
                "json"
            ]
        }
    ]
}
