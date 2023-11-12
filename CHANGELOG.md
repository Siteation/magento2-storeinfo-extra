# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- Store Notice option to show a sale or other messages,
  this renderd by default before the header same as message global
- Extra Phone number option, this allow land line, fax or other phone based options
- Separator for the General → General → Store Extra Information options, to show the split between socials and other

### Changed
- Update whatsapp url in ui templates to new url format
- Social option: Twitter updated to the to _X (Twitter)_ brand,
  only for the label and the icon, internal name is the same
  the old icon is available as `twitter-bird`
- Minimal dependencies to Magento 2.4, dropping support for Magento 2.3
- Socials template updates to now only show the socials when set
- Socials now loads by default in the footer

## [2.1.2] - 2023-05-16
### Fixed
- False empty for twitter

## [2.1.1] - 2023-04-28
### Fixed
- Dependency issues

## [2.1.0] - 2023-04-28
### Added
- Dedicated menu item for config
- Mastodon social option

### Changed
- Sample for rending each social icon

## [2.0.1] - 2022-12-17
### Fixed
- Dependency version

## [2.0.0] - 2022-12-17
### Changed
- Renamed composer name from `siteation/magento2-module-storeinfo-extra` to `siteation/magento2-storeinfo-extra`

## [1.1.0] - 2022-02-03
### Added
- CoC number as option

### Changed
- Whatsapp number order to top with CoC,
  splitting socials from these fields

## [1.0.2] - 2021-11-15
### Changed
- Add `use` to Luma samples

### Fixes
- phtml sample socials for hyva missing `use`

## [1.0.1] - 2021-10-04
### Fixes
- svg sprite viewbox position

## [1.0.0] - 2021-03-11
Initial release 🎉
