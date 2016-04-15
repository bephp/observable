# observable
[![Build Status](https://travis-ci.org/bephp/observable.svg?branch=master)](https://travis-ci.org/bephp/observable)
[![Coverage Status](https://coveralls.io/repos/bephp/observable/badge.svg?branch=master&service=github)](https://coveralls.io/github/bephp/observable?branch=master)
[![Latest Stable Version](https://poser.pugx.org/bephp/observable/v/stable)](https://packagist.org/packages/bephp/observable)
[![Total Downloads](https://poser.pugx.org/bephp/observable/downloads)](https://packagist.org/packages/bephp/observable)
[![Latest Unstable Version](https://poser.pugx.org/bephp/observable/v/unstable)](https://packagist.org/packages/bephp/observable)
[![License](https://poser.pugx.org/bephp/observable/license)](https://packagist.org/packages/bephp/observable)

*A observable triat for PHP.*


## Installation

    composer require bephp/observable

## API Reference

### on($event, $cb)
add event

### off($event)
remove event

### trigger()

trigger event

## Example

    class A{
        use Observable;
    }
    $a = new A();
    $a->on('hello', function($name){
        echo 'hello ', $name, '!';
    });
    $a->trigger('hello', 'lloyd');

this demo will get result:

    hello lloyd!


