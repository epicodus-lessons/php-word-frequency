# _Word Frequency_

#### _Silex application that will count the occurrences of a word within another string, 02/17/2017_

#### By _**Philip Putnam**_

## Description

_This application will take in user input of a word as a string, and a phrase as a string. It will then search the phrase for the word given, counting how many occurrences of that word are within the phrase. Partial matches within words will not count, only exact matches._

## Setup/Installation Requirements

### Method 1:
* _Using a web browser or terminal, clone the repository at https://github.com/philip-putnam/php-word-frequency __
* _Navigate to the project directory, at the top level in a terminal and type > composer install --prefer-source --no-interaction OR simply > composer install_
* _After composer has finished installation, navigate to the 'web' folder within the project directory using a terminal. Begin a local server in this folder and navigate to the appropriate address. Example: inside the 'web' folder type, > php -S localhost:8000 , then in a web browser, navigate to 'localhost:8000_
* _Fill in the form on the webpage and hit submit!_

## Specifications

| Expected Behavior | Input | Output |
| ----------------- | ----- | ------ |
| does not match if word is not within phrase | word: "a" phrase: "the" | "0" |
| does not match partial words | word: "the" phrase: "theater" | "0" |
| matches single letter words in single-letter word phrase | word: "the" phrase: "the" | "1" |
| matches case-insensitive words in phrase | word: "tHe" phrase: "The" | "1" |
| matches word in multiple word phrase | word: "the" phrase: "The man went to the park" | "2" |

## Known Bugs

_No known bugs at this time_

## Support and contact details

_Please e-mail Philip Putnam, at staplehead989@gmail.com for support with the webpage_

## Technologies Used

_HTML_
_CSS_
_PHP_
_Bootstrap_
_Atom_
_Git_
_GitHub_

### License

*This webpage is licensed under the MIT license*

Copyright (c) 2017 **_Philip Putnam_**
