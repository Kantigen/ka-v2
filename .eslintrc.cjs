module.exports = {
  root: true,
  parser: '@typescript-eslint/parser',
  parserOptions: {
    project: './tsconfig.json',
  },
  plugins: ['@typescript-eslint'],
  extends: [
    'eslint:recommended',
    'plugin:@typescript-eslint/recommended',
    'airbnb',
    'airbnb-typescript',
    'prettier',
  ],
  globals: {
    YAHOO: true,
    jQuery: true,
    $: true,
  },
  env: {
    browser: true,
    node: true,
    es6: true,
  },
};
