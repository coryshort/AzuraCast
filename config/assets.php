<?php
/**
 * Static assets referenced in AzuraCast.
 * Stored here to easily resolve dependencies on individual pages.
 */

return [
    /*
     * Core libraries
     */
    [
        'name' => 'jquery',
        'order' => 0,
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js',
                    'integrity' => 'sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=',
                ],
            ],
        ],
    ],
    [
        'name' => 'vue',
        'order' => 1,
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/' . (APP_IN_PRODUCTION ? 'vue.min.js' : 'vue.js'),
                    'integrity' => (APP_IN_PRODUCTION)
                        ? 'sha256-1Q2q5hg2YXp9fYlM++sIEXOcUb8BRSDUsQ1zXvLBqmA='
                        : 'sha256-pU9euBaEcVl8Gtg+FRYCtin2vKLN8sx5/4npZDmY2VA=',
                ],
            ],
        ],
    ],

    /*
     * Main per-layout dependencies
     */
    [
        'name' => 'minimal_header',
        'order' => 2,
        'require' => ['jquery'],
        'files' => [
            'css' => [
                [
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css',
                    'integrity' => 'sha256-j+P6EZJVrbXgwSR5Mx+eCS6FvP9Wq27MBRC/ogVriY0=',
                ],
                [
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css',
                    'integrity' => 'sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=',
                ],
            ],
            'js' => [
                [
                    'src' => 'vendor/bootstrap/dist/js/bootstrap.min.js',
                ],
            ]
        ],

    ],
    [
        'name' => 'minimal_body',
        'order' => 50,
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.5/waves.min.js',
                    'integrity' => 'sha256-ICvFZLf7gslwfpvdxzQ8w8oZt0brzoFr8v2dXBecuLY=',
                    'defer' => true,
                ],
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js',
                    'integrity' => 'sha256-LlN0a0J3hMkDLO1mhcMwy+GIMbIRV7kvKHx4oCxNoxI=',
                    'defer' => true,
                ],
                [
                    'src' => 'dist/app.min.js',
                    'defer' => true,
                ],
            ],
        ],
    ],
    [
        'name' => 'main_header',
        'order' => 3,
        'require' => ['minimal_header'],
        'files' => [
            'css' => [
                [
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css',
                    'integrity' => 'sha256-zuyRv+YsWwh1XR5tsrZ7VCfGqUmmPmqBjIvJgQWoSDo=',
                ],
                [
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css',
                    'integrity' => 'sha256-JHGEmB629pipTkMag9aMaw32I8zle24p3FpsEeI6oZU=',
                ]
            ],
        ],
    ],
    [
        'name' => 'main_body',
        'order' => 49,
        'require' => ['minimal_body'],
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js',
                    'integrity' => 'sha256-/YAntTqXy9V4LoXFkI5WPDl3ZwP/knn1BljmMJJ7QWc=',
                    'defer' => true,
                ],
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js',
                    'integrity' => 'sha256-JirYRqbf+qzfqVtEE4GETyHlAbiCpC005yBTa4rj6xg=',
                    'defer' => true,
                ],
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.0/autosize.min.js',
                    'integrity' => 'sha256-F7Bbc+3hGv34D+obsHHsSm3ZKRBudWR7e2H0fS0beok=',
                    'defer' => true,
                ],
            ],
        ],
    ],

    /*
     * Themes
     */
    [
        'name' => 'theme_dark',
        'order' => 50,
        'files' => [
            'css' => [
                [
                    'href' => 'dist/dark.css',
                ],
            ],
        ]
    ],
    [
        'name' => 'theme_light',
        'order' => 50,
        'files' => [
            'css' => [
                [
                    'href' => 'dist/light.css',
                ],
            ],
        ]
    ],

    /*
     * Individual libraries
     */
    [
        'name' => 'bootgrid',
        'order' => 8,
        'require' => ['jquery'],
        'files' => [
            'css' => [
                [
                    'href' => 'js/bootgrid/jquery.bootgrid.min.css',
                ],
            ],
            'js' => [
                [
                    'src' => 'js/bootgrid/jquery.bootgrid.updated.js',
                    'defer' => true,
                ],
            ],
        ],
    ],
    [
        'name' => 'radio',
        'order' => 20,
        'require' => ['jquery'],
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/store.js/1.3.20/store.min.js',
                    'integrity' => 'sha256-0jgHNEQo7sIScbcI/Pc5GYJ+VosKM1mJ+fI0iuQ1a9E=',
                    'defer' => true,
                ],
                [
                    'src' => 'js/radio.js',
                    'defer' => true,
                ],
            ],
        ],

    ],
    [
        'name' => 'highcharts',
        'order' => 20,
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.4/highcharts.js',
                    'integrity' => 'sha256-jLlwSowwSPJ9ukSEWxfqld2rgZTzBcTJhfotyvtdOSk=',
                    'defer' => true,
                ],
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.4/highcharts-more.js',
                    'integrity' => 'sha256-QnoLQZe7BYRVTl3AY8Lsw6mn60HfHZNpcZBEndybfBk=',
                    'defer' => true,
                ],
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.4/modules/exporting.js',
                    'integrity' => 'sha256-t0WPpPvL2cZgET8RU2pdgP8SdZue1Ni+IhYh7AkDIo4=',
                    'defer' => true,
                ],
            ]
        ]
    ],
    [
        'name' => 'highmaps',
        'order' => 22,
        'require' => ['jquery', 'highcharts'],
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.4.4/proj4.js',
                    'integrity' => 'sha256-ROS+XfN+WVpU3giGt7Fwy92u3h4at1gN7Z5xQ2Ke1lw=',
                    'defer' => true,
                ],
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/highmaps/6.0.3/js/modules/map.js',
                    'integrity' => 'sha256-Vkj0+DtwVRfvzGIXKu03YG4ax8JLZSi0V8bDgCTUjkw=',
                    'defer' => true,
                ],
                [
                    'src' => 'js/highmaps/world.js',
                    'defer' => true,
                ],
            ]
        ],
    ],
    [
        'name' => 'highcharts_theme_dark',
        'order' => 21,
        'files' => [
            'js' => [
                [
                    'src' => 'js/highcharts/dark-blue.js',
                    'defer' => true,
                ],
            ]
        ]
    ],
    [
        'name' => 'highcharts_theme_light',
        // empty
    ],
    [
        'name' => 'zxcvbn',
        'order' => 10,
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js',
                    'integrity' => 'sha256-Znf8FdJF85f1LV0JmPOob5qudSrns8pLPZ6qkd/+F0o=',
                    'defer' => true,
                ],
            ],
        ],
    ],
    [
        'name' => 'chosen',
        'order' => 10,
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.2/chosen.jquery.min.js',
                    'integrity' => 'sha256-j9yXOqKOlGKkAerTz/6KCllekmWP3Kt3a7sBvMK8IGI=',
                    'defer' => true,
                ],
            ],
            'css' => [
                [
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.2/chosen.min.css',
                    'integrity' => 'sha256-mmiAhiWsn5EjME5u13M5klIesdx2mQQnvwSDFWwAW4E=',
                ],
            ]
        ],
    ],
    [
        'name' => 'moment',
        'order' => 8,
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js',
                    'integrity' => 'sha256-ABVkpwb9K9PxubvRrHMkk6wmWcIHUE9eBxNZLXYQ84k=',
                    'defer' => true,
                ],
            ]
        ],
    ],
    [
        'name' => 'daterangepicker',
        'order' => 9,
        'require' => ['moment'],
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.27/daterangepicker.min.js',
                    'integrity' => 'sha256-fuPJ7xvV6OPcIGSJd2Xj7s/+2aWsVGapv+Uj/cuVOzk=',
                    'defer' => true,
                ],
            ],
            'css' => [
                [
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.27/daterangepicker.min.css',
                    'integrity' => 'sha256-m4uCSkjNdbrhPh2GPVsyB8nuDl5uiF/DpAhSGdqujrc=',
                ],
            ],
        ],
    ],
    [
        'name' => 'codemirror_css',
        'order' => 10,
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.33.0/codemirror.min.js',
                    'integrity' => 'sha256-ag7KgA1S7cuuU2FCC2G7/L8IpaijDSPqzcLLLeJv5Iw=',
                    'defer' => true,
                ],
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.33.0/mode/css/css.min.js',
                    'integrity' => 'sha256-EPuuMaFXpkGuc1TQeBblqQDxuPiTFgd8K+l/vGIC5EQ=',
                    'defer' => true,
                ],
            ],
            'css' => [
                [
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.33.0/codemirror.min.css',
                    'integrity' => 'sha256-I8NyGs4wjbMuBSUE40o55W6k6P7tu/7G28/JGUUYCIs=',
                ],
                [
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.33.0/theme/material.min.css',
                    'integrity' => 'sha256-UyTiM5wwtuGiISIGyvkdYa9kgCRJmBQ+OYU72oexofc=',
                ],
            ],
        ],
    ],
    [
        'name' => 'clipboard',
        'order' => 10,
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js',
                    'integrity' => 'sha256-Daf8GuI2eLKHJlOWLRR/zRy9Clqcj4TUSumbxYH9kGI=',
                    'defer' => true,
                ],
            ],
        ],
        'inline' => [
            'js' => [
                "new Clipboard('.btn-copy');",
            ],
        ],
    ],
    [
        'name' => 'fancybox',
        'order' => 10,
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js',
                    'integrity' => 'sha256-X5PoE3KU5l+JcX+w09p/wHl9AzK333C4hJ2I9S5mD4M=',
                    'defer' => true,
                ],
            ],
            'css' => [
                [
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css',
                    'integrity' => 'sha256-ygkqlh3CYSUri3LhQxzdcm0n1EQvH2Y+U5S2idbLtxs=',
                ]
            ],
        ],
    ],
    [
        'name' => 'fullcalendar',
        'order' => 10,
        'require' => ['moment'],
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js',
                    'integrity' => 'sha256-QvhPq+evNjd8JyxSOU5KL3jPYTD7+gWVev1OH763SL0=',
                    'defer' => true,
                ],
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale-all.js',
                    'integrity' => 'sha256-EmG1dya2dF5fANGOBHzCYtmTXO++8RJQ96jzEx/SfgY=',
                    'defer' => true,
                ],
            ],
            'css' => [
                [
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css',
                    'integrity' => 'sha256-Tu3DN+5kwrhzlzhNUMuGht2h7cR6ARgKcYemB9u5SzA=',
                ]
            ]
        ],
    ],
    [
        'name' => 'jquery-sortable',
        'order' => 10,
        'require' => ['jquery'],
        'files' => [
            'js' => [
                [
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery-sortable/0.9.13/jquery-sortable-min.js',
                    'integrity' => 'sha256-wWIfHlrIpCbyDbt+VSBUsc54ApQZWKqBmF38yUKLGeY=',
                    'defer' => true,
                ],
            ],
        ],
    ],
];
