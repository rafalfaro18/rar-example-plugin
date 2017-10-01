This plugin can be installed manually in worpress by downloading the zip file  [here](../../archive/master.zip "Plugin Zip File Download Link") , renaming the folder to "rar-example-plugin" because github concatenates the branch name and installing it as any other plugin is installed manually.

Or you can also install it using composer (Tested with bedrock). You have to add a package repository to composer with the following information:

```json
    {
      "type": "package",
      "package": {
        "name": "rafalfaro18/rar-example-plugin",
        "version": "1.0",
        "type": "wordpress-plugin",
        "dist": {
          "type": "zip",
          "url": "https://github.com/rafalfaro18/rar-example-plugin/archive/master.zip"
        },
        "require" : {
          "composer/installers": "^1.4"
        }
      }
    }
```
