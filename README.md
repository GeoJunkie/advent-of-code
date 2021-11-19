# advent-of-code
A WordPress plugin for the Advent of Code puzzles

This plugin is for two purposes:
- For me to practice the concepts taught in [Professional WordPress Plugin Development, 2nd Edition](https://www.wiley.com/en-us/Professional+WordPress+Plugin+Development%2C+2nd+Edition-p-9781119666936).
- To create a framework for the [Advent of Code](https://adventofcode.com/) challenges. I'll use this framework for the 2021 challenges (and beyond if it works out).

## Development

Uses [@wordpress/env](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/)

* Checkout repo
* `npm install`
* `composer install`
* `npm start`

This README will evolve as the implementation procceeds. The plan is to create a React component and/or Gutenberg block that can be extended for each puzzle.