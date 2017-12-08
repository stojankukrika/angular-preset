module.exports = {
    entry: 'resources/assets/js/main.ts',
    output: {
        filename: 'bundle.js',
        path: 'public/js'
    },
    module: {
        rules: [
            {
                test: /\.tsx?$/,
                loader: 'ts-loader',
                exclude: /node_modules/
            }
        ]
    },
    resolve: {
        extensions: [".tsx", ".ts", ".js"]
    }
};