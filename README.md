# Yireo_ExtensionCheckerTests module

<!-- badges.specs.start -->
<div class="github-specs-badges">

![Magento version](https://img.shields.io/badge/Magento-2.4.6%20%7C%202.4.9-orange)
![PHP version](https://img.shields.io/badge/PHP-8.2%E2%80%938.5-777BB4)
![License](https://img.shields.io/badge/License-OSL--3.0-blue)
![Latest Version](https://img.shields.io/packagist/v/yireo/module-extension-checker-tests)

</div>
<!-- badges.specs.end -->


**This is a development-only package.** It contains integration tests and test fixture modules for `Yireo_ExtensionChecker`. Install it with `composer require --dev` and never enable it in production.

<font color='red'>**The following example is a complete README for a module Magento_Default:** </font>
# Magento_Default module
The Magento_Default module enables you to add the Configurable Product updates to the existing store campaigns.

The Magento_Default module is a part of the staging functionality in Magento EE. The module adds the “Configurations” tab and the configuration wizard to the Schedule Update form of a product. You can change the Configurable Product attributes in campaigns. These updates are shown on the campaign dashboard.

## Installation details

The Magento_Default module makes irreversible changes in a database during installation. You cannot disable or uninstall this module.

For information about a module installation in Magento 2, see [Enable or disable modules](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-enable.html).

## Extensibility

Extension developers can interact with the Magento_Default module. For more information about the Magento extension mechanism, see [Magento plug-ins](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/plugins.html).

[The Magento dependency injection mechanism](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/depend-inj.html) enables you to override the functionality of the Magento_Default module.

### Layouts

The module introduces layout handles in the `view/adminhtml/layout` directory.

For more information about a layout in Magento 2, see the [Layout documentation](https://devdocs.magento.com/guides/v2.4/frontend-dev-guide/layouts/layout-overview.html).

### UI components

You can extend product and category updates using the UI components located in the `view/adminhtml/ui_component` directory.

For information about a UI component in Magento 2, see [Overview of UI components](https://devdocs.magento.com/guides/v2.4/ui_comp_guide/bk-ui_comps.html).

## Additional information

For information about significant changes in patch releases, see [Release information](https://devdocs.magento.com/guides/v2.4/release-notes/bk-release-notes.html).

## Current status

<!-- badges.test.start -->
<div class="github-pipeline-badges">

![Static Tests](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_ExtensionCheckerTests/static-tests.yml?label=static-tests)
![Unit Tests](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_ExtensionCheckerTests/unit-tests.yml?label=unit-tests)
![Integration Tests](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_ExtensionCheckerTests/integration-tests.yml?label=integration-tests)
![Playwright](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_ExtensionCheckerTests/playwright.yml?label=playwright)
![DI Compilation](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_ExtensionCheckerTests/compile.yml?label=compile)

</div>
<!-- badges.test.end -->
