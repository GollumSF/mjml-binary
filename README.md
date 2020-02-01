# MJML Binary

MJML compiled binary in composer for php without nodejs for [MjmlBundle](https://github.com/notFloran/mjml-bundle)

[![Build Status](https://travis-ci.com/GollumSF/mjml-binary.svg?branch=master)](https://travis-ci.com/GollumSF/mjml-binary)
[![License](https://poser.pugx.org/gollumsf/mjml-binary/license)](https://packagist.org/packages/gollumsf/mjml-binary)
[![Latest Stable Version](https://poser.pugx.org/gollumsf/mjml-binary/v/stable)](https://packagist.org/packages/gollumsf/mjml-binary)
[![Latest Unstable Version](https://poser.pugx.org/gollumsf/mjml-binary/v/unstable)](https://packagist.org/packages/gollumsf/mjml-binary)
[![Discord](https://img.shields.io/discord/671741944149573687?color=purple&label=discord)](https://discord.gg/xMBc5SQ)


## Installation:

```shell
composer require gollumsf/mjml-binary
```

## Usage

In configuration of `notfloran/mjml-bundle` 

### config/packages/mjml.yaml
```yaml
mjml:
    # Other confifuration
    options:
        # Other confifuration
        binary: '%kernel.project_dir%/gollumsf/mjml-binary/dist/mjml-linux' # You can use mjml-linux, mjml-win, mjml-alpine, mjml-macos 
```


## Build library

```
npm install
npm run build
```