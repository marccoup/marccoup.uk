import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import autoprefixer from 'autoprefixer';
import postcssJitProps from 'postcss-jit-props';
import postcssCustomMedia from "postcss-custom-media";


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/js/site.js',
            ],
            refresh: true,
        }),
    ],

    css: {
        postcss: {
            plugins: [
                autoprefixer(),
                postcssJitProps({
                    files: ['node_modules/open-props/open-props.min.css']
                }),
                postcssCustomMedia()
            ]
        }
    }
});
