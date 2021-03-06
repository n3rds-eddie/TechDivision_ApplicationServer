# Version 0.9.10

## Bugfixes

* Bugfix in StandardProvisioner for regex to parse WEB-INF/META-INF directory for provision.xml files to make that work on Windows systems
* Bugfix in StandardProvisionerget::AbsolutPathToPhpExecutable() to also return correct absolute path to php.exe on Windows systems

## Features

* None

# Version 0.9.9

## Bugfixes

* None

## Features

* Switch to new ClassLoader + ManagerInterface
* Add configuration parameters to manager configuration

# Version 0.9.8

## Bugfixes

* Set encryption key length when generating a SSL certificate to 2048 on Unix based operating systems

## Features

* None

# Version 0.9.7

## Bugfixes

* Bugfix for missing parameters when generating server.pem on Windows in AbstractService::createSslCertificate on system startup

## Features

* None

# Version 0.9.6

## Bugfixes

* Refactor container startup process to make sure all server sockets has been established before init user permissions and proceed with provision

## Features

* None

# Version 0.9.5

## Bugfixes

* Bugfix invalid parameter dir when calling AbstractService::cleanUpDir() method from AbstractExtractor::removeDir() method

## Features

* None

# Version 0.9.4

## Bugfixes

* Bugfix invalid path concatenation in AbstractService::getBaseDirectory() when directory with OS specific directory separator has been passed
* Move copyDir() method from AbstractExctractor to AbstractService class
* Use AbstractService::cleanUpDir() method in AbstractExtractor when delete a directory with removeDir()

## Features

* None

# Version 0.9.3

## Bugfixes

* Add missing variable type cast when initializing API node types from configuration in AbstractNode::getValueForReflectionProperty() method
* Do not overwrite preinitialized API node configuration variables with empty values in AbstractNode::getValueForReflectionProperty()
* Bugfix invalid argument initialization in AbstractArgsNode:getArg() method

## Features

* Issue #191 - initially add functionality to create certificate on system startup
* Add a programmatical default configuration for initial context, loggers, extractors + provisioners (makes configuration in appserver.xml optionally)
* Make extractors + provisioners configurable in appserver.xml
* Add composer dependency to techdivision/lang package >= 0.1

# Version 0.9.2

## Bugfixes

* None

## Features

* Clean applications cache directory when application server restarts
* Add DeploymentService::cleanUpFolders() method to clean up directories

# Version 0.9.1

## Bugfixes

* None

## Features

* Refactoring ANT PHPUnit execution process
* Composer integration by optimizing folder structure (move bootstrap.php + phpunit.xml.dist => phpunit.xml)
* Switch to new appserver-io/build build- and deployment environment

# Version 0.9.0

## Bugfixes

* Add missing %s placeholder for successfully deployed application log message

## Features

* [Issue #178](https://github.com/techdivision/TechDivision_ApplicationServer/issues/178) App-based context configuration
* Add directory keys for configuration folders etc/appserver + etc/appserver/conf.d to DirectoryKeys
* Add path to be appended as parameter for methods to return directories in AbstractService
* Move method to create temporary directories for applications from AbstractDeployment to DeploymentService

# Version 0.8.2

## Bugfixes

* Bugfix invalid manager + class loader initialization in ContextNode::merge() method

## Features

* Bugfix ComposerClassLoader to allow the usage of autoload_files.php also
* Replace type hint from InitialContext with ContextInterface in SplClassLoader::__construct()
* Add SplClassLoader::get() factory method to allow declarative initialization in application context
* Refactoring SplClassLoader::getIncludePath() to allow pass additional include paths to constructor