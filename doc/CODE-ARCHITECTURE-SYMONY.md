.
├── LICENSE
├── README.md
├── app
│   ├── AppCache.php
│   ├── AppKernel.php
│   ├── Resources
│   │   └── views
│   │       ├── base.html.twig
│   │       └── default
│   │           └── index.html.twig
│   ├── autoload.php
│   └── config
│       ├── config.yml
│       ├── config_dev.yml
│       ├── config_prod.yml
│       ├── config_test.yml
│       ├── fos_rest.yml
│       ├── jms_serializer.yml
│       ├── mongo.yml
│       ├── nelmio_cors.yml
│       ├── parameters.yml
│       ├── parameters.yml.dist
│       ├── routing.yml
│       ├── routing_dev.yml
│       ├── security.yml
│       ├── services.yml
│       └── telosys.yml
├── bin
│   ├── behat -> ../vendor/behat/behat/bin/behat
│   ├── console
│   ├── doctrine -> ../vendor/doctrine/orm/bin/doctrine
│   ├── doctrine-dbal -> ../vendor/doctrine/dbal/bin/doctrine-dbal
│   ├── doctrine.php -> ../vendor/doctrine/orm/bin/doctrine.php
│   ├── pdepend -> ../vendor/pdepend/pdepend/src/bin/pdepend
│   ├── phing -> ../vendor/phing/phing/bin/phing
│   ├── phpcbf -> ../vendor/squizlabs/php_codesniffer/scripts/phpcbf
│   ├── phpcpd -> ../vendor/sebastian/phpcpd/phpcpd
│   ├── phpcs -> ../vendor/squizlabs/php_codesniffer/scripts/phpcs
│   ├── phploc -> ../vendor/phploc/phploc/phploc
│   ├── phpmd -> ../vendor/phpmd/phpmd/src/bin/phpmd
│   ├── phpunit -> ../vendor/phpunit/phpunit/phpunit
│   ├── security-checker -> ../vendor/sensiolabs/security-checker/security-checker
│   ├── simple-phpunit -> ../vendor/symfony/phpunit-bridge/bin/simple-phpunit
│   ├── symfony_requirements
│   └── validate-json -> ../vendor/justinrainbow/json-schema/bin/validate-json
├── composer.json
├── composer.lock
├── data
│   ├── parcours-des-lignes-de-bus-du-reseau-star.geojson
│   └── parcours-des-lignes-de-bus-du-reseau-star.json
├── doc
│   ├── code-architecture-symfony.md
│   └── mysql-schema.md
├── phpunit.xml.dist
├── postman
│   └── telosys-postman-collection.json
├── src
│   ├── AppBundle
│   │   ├── AppBundle.php
│   │   ├── Command
│   │   │   └── PullBusLineCommand.php
│   │   ├── Controller
│   │   │   ├── DefaultController.php
│   │   │   └── Telosys
│   │   │       └── Project
│   │   │           ├── BusLineController.php
│   │   │           └── CheckController.php
│   │   ├── Document
│   │   │   └── BusStopsCoordinates.php
│   │   ├── Entity
│   │   │   └── BusLine.php
│   │   ├── Exception
│   │   │   └── Printable
│   │   │       └── PrintableException.php
│   │   ├── Repository
│   │   │   ├── BusLineRepository.php
│   │   │   └── RennesMetropoleOpenDataRepository.php
│   │   ├── Resources
│   │   │   └── config
│   │   │       ├── doctrine
│   │   │       │   └── BusLine.orm.yml
│   │   │       ├── routing
│   │   │       │   └── routing_telosys.yml
│   │   │       └── serializer
│   │   │           └── Entity.BusLine.yml
│   │   └── Service
│   ├── Component
│   │   └── ApiComponent
│   │       └── RennesMetropoleApiRequest.php
│   └── Telosys
│       └── Domain
│           ├── Entity
│           │   └── BusLine.php
│           ├── Repository
│           │   ├── BusLineRepository.php
│           │   └── RennesMetropoleOpenDataRepository.php
│           └── Service
│               └── BusLineService.php
├── tests
│   └── AppBundle
│       └── Controller
│           └── DefaultControllerTest.php
├── var
│   ├── SymfonyRequirements.php
│   ├── bootstrap.php.cache
│   ├── cache
│   │   └── prod
│   │       ├── annotations.map
│   │       ├── appProdProjectContainer.php
│   │       ├── appProdProjectContainer.php.meta
│   │       ├── appProdProjectContainerUrlMatcher.php
│   │       ├── appProdProjectContainerUrlMatcher.php.meta
│   │       ├── classes.map
│   │       ├── classes.php
│   │       ├── doctrine
│   │       │   ├── odm
│   │       │   │   └── mongodb
│   │       │   │       ├── Hydrators
│   │       │   │       ├── PersistentCollections
│   │       │   │       └── Proxies
│   │       │   └── orm
│   │       │       └── Proxies
│   │       │           └── __CG__AppBundleEntityBusLine.php
│   │       ├── jms_serializer
│   │       │   ├── AppBundle-Entity-BusLine.cache.php
│   │       │   └── Telosys-Domain-Entity-BusLine.cache.php
│   │       └── pools
│   │           ├── hFyt6k3WeO
│   │           └── wvC4b4xcu4
│   │               ├── +
│   │               │   └── L
│   │               │       └── khwAYGtiMAGs-DZ+XR8L
│   │               ├── 5
│   │               │   └── 2
│   │               │       └── bdHQhT5FHyMS2-xmXf0F
│   │               ├── 6
│   │               │   ├── H
│   │               │   │   └── fGgozXyxao-6Mg9FhBDB
│   │               │   └── K
│   │               │       └── lc66I-9Xk0SXJuygYl4h
│   │               ├── 8
│   │               │   └── 0
│   │               │       └── 0xcAKQIFzRAI4dcL6dcB
│   │               ├── A
│   │               │   └── 4
│   │               │       └── hqkLTX9Z4TjZa3CN6wtl
│   │               ├── B
│   │               │   ├── L
│   │               │   │   └── +ATJNV9EQvvcF3Bc17W3
│   │               │   └── Q
│   │               │       └── FuEMPEveCRCbCu0Jfihp
│   │               ├── F
│   │               │   └── P
│   │               │       └── In3-L9IBZZxCZ90y30Z0
│   │               ├── G
│   │               │   └── Z
│   │               │       └── moJlVxJCQqTBZxkfXmO9
│   │               ├── K
│   │               │   ├── G
│   │               │   │   └── bB4PgXkw53J-PpeafSVn
│   │               │   └── Y
│   │               │       └── tB+MMNpMc1G+sNJvH+Pe
│   │               ├── L
│   │               │   └── C
│   │               │       └── BUi4+yf1fTnGnevqO4jF
│   │               ├── M
│   │               │   └── B
│   │               │       └── YgiyPa8ZC230RfVvKJjG
│   │               ├── O
│   │               │   ├── K
│   │               │   │   └── xo5HrL0pfE3u-YGPtyAb
│   │               │   └── Z
│   │               │       └── Jm68hWluqsrVTVJfMPAX
│   │               ├── P
│   │               │   └── 5
│   │               │       └── 0J3aKCat0pVfaxmyBHYB
│   │               ├── Q
│   │               │   ├── 4
│   │               │   │   └── dYGUNWHZcvfMnApoYTzi
│   │               │   ├── L
│   │               │   │   └── P6ZQzjA98KAcgCpGa8rk
│   │               │   └── U
│   │               │       └── N6mW+MKsU2mvPAV-pohF
│   │               ├── R
│   │               │   ├── N
│   │               │   │   └── Ldhe5YpyRNO1qmgK9Gk9
│   │               │   └── X
│   │               │       └── wlJgWMhLzekXXF8Tt89n
│   │               ├── S
│   │               │   ├── E
│   │               │   │   └── vyR9HGjl8WRP+UlZHGvN
│   │               │   ├── G
│   │               │   │   └── n2gRg-7YjjyGn+VUT7Xy
│   │               │   ├── V
│   │               │   │   └── cxtmB2Cf4gxfEUoHe6IT
│   │               │   └── Y
│   │               │       └── hApSrv8aW6WdIy5zVKHD
│   │               ├── V
│   │               │   └── L
│   │               │       └── vCTpfoqHmFhsQfaCUkR5
│   │               ├── W
│   │               │   ├── G
│   │               │   │   └── djc9ApAsFcdxu-8qdrDv
│   │               │   ├── J
│   │               │   │   └── At3M7sJ5kdhUvHy6kbW+
│   │               │   └── X
│   │               │       └── SYc56eqNjYFfDgxm9E3m
│   │               └── X
│   │                   └── T
│   │                       └── Lb6f4hXvzeH80Gha+HG+
│   ├── logs
│   │   ├── dev.log
│   │   └── prod.log
│   └── sessions
│       └── prod
├── vendor
│   ├── alcaeus
│   │   └── mongo-php-adapter
│   │       ├── CHANGELOG-1.0.md
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── composer.json
│   │       ├── lib
│   │       │   ├── Alcaeus
│   │       │   │   └── MongoDbAdapter
│   │       │   │       ├── AbstractCursor.php
│   │       │   │       ├── ExceptionConverter.php
│   │       │   │       ├── Helper
│   │       │   │       │   ├── ReadPreference.php
│   │       │   │       │   ├── SlaveOkay.php
│   │       │   │       │   ├── WriteConcern.php
│   │       │   │       │   └── WriteConcernConverter.php
│   │       │   │       ├── TypeConverter.php
│   │       │   │       └── TypeInterface.php
│   │       │   └── Mongo
│   │       │       ├── Mongo.php
│   │       │       ├── MongoBinData.php
│   │       │       ├── MongoClient.php
│   │       │       ├── MongoCode.php
│   │       │       ├── MongoCollection.php
│   │       │       ├── MongoCommandCursor.php
│   │       │       ├── MongoConnectionException.php
│   │       │       ├── MongoCursor.php
│   │       │       ├── MongoCursorException.php
│   │       │       ├── MongoCursorInterface.php
│   │       │       ├── MongoCursorTimeoutException.php
│   │       │       ├── MongoDB.php
│   │       │       ├── MongoDBRef.php
│   │       │       ├── MongoDate.php
│   │       │       ├── MongoDeleteBatch.php
│   │       │       ├── MongoDuplicateKeyException.php
│   │       │       ├── MongoException.php
│   │       │       ├── MongoExecutionTimeoutException.php
│   │       │       ├── MongoGridFS.php
│   │       │       ├── MongoGridFSCursor.php
│   │       │       ├── MongoGridFSException.php
│   │       │       ├── MongoGridFSFile.php
│   │       │       ├── MongoId.php
│   │       │       ├── MongoInsertBatch.php
│   │       │       ├── MongoInt32.php
│   │       │       ├── MongoInt64.php
│   │       │       ├── MongoLog.php
│   │       │       ├── MongoMaxKey.php
│   │       │       ├── MongoMinKey.php
│   │       │       ├── MongoPool.php
│   │       │       ├── MongoProtocolException.php
│   │       │       ├── MongoRegex.php
│   │       │       ├── MongoResultException.php
│   │       │       ├── MongoTimestamp.php
│   │       │       ├── MongoUpdateBatch.php
│   │       │       ├── MongoWriteBatch.php
│   │       │       ├── MongoWriteConcernException.php
│   │       │       └── functions.php
│   │       ├── phpunit.xml.dist
│   │       └── tests
│   │           ├── Alcaeus
│   │           │   └── MongoDbAdapter
│   │           │       ├── ExceptionConverterTest.php
│   │           │       ├── Mongo
│   │           │       │   ├── FunctionsTest.php
│   │           │       │   ├── MongoBinDataTest.php
│   │           │       │   ├── MongoClientTest.php
│   │           │       │   ├── MongoCodeTest.php
│   │           │       │   ├── MongoCollectionTest.php
│   │           │       │   ├── MongoCommandCursorTest.php
│   │           │       │   ├── MongoCursorTest.php
│   │           │       │   ├── MongoDBRefTest.php
│   │           │       │   ├── MongoDBTest.php
│   │           │       │   ├── MongoDateTest.php
│   │           │       │   ├── MongoDeleteBatchTest.php
│   │           │       │   ├── MongoGridFSCursorTest.php
│   │           │       │   ├── MongoGridFSFileTest.php
│   │           │       │   ├── MongoGridFSTest.php
│   │           │       │   ├── MongoIdTest.php
│   │           │       │   ├── MongoInsertBatchTest.php
│   │           │       │   ├── MongoLogTest.php
│   │           │       │   ├── MongoMaxKeyTest.php
│   │           │       │   ├── MongoMinKeyTest.php
│   │           │       │   ├── MongoRegexTest.php
│   │           │       │   ├── MongoTimestampTest.php
│   │           │       │   └── MongoUpdateBatchTest.php
│   │           │       ├── TestCase.php
│   │           │       └── TypeConverterTest.php
│   │           └── native
│   │               ├── cfg.inc
│   │               └── helper.sh
│   ├── autoload.php
│   ├── behat
│   │   ├── behat
│   │   │   ├── CHANGELOG.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── bin
│   │   │   │   └── behat
│   │   │   ├── composer.json
│   │   │   ├── i18n.php
│   │   │   └── src
│   │   │       └── Behat
│   │   │           ├── Behat
│   │   │           │   ├── ApplicationFactory.php
│   │   │           │   ├── Context
│   │   │           │   │   ├── Annotation
│   │   │           │   │   │   └── AnnotationReader.php
│   │   │           │   │   ├── Argument
│   │   │           │   │   │   ├── ArgumentResolver.php
│   │   │           │   │   │   ├── CompositeFactory.php
│   │   │           │   │   │   ├── NullFactory.php
│   │   │           │   │   │   └── SuiteScopedResolverFactory.php
│   │   │           │   │   ├── Cli
│   │   │           │   │   │   ├── ContextSnippetsController.php
│   │   │           │   │   │   └── InteractiveContextIdentifier.php
│   │   │           │   │   ├── Context.php
│   │   │           │   │   ├── ContextClass
│   │   │           │   │   │   ├── ClassGenerator.php
│   │   │           │   │   │   ├── ClassResolver.php
│   │   │           │   │   │   └── SimpleClassGenerator.php
│   │   │           │   │   ├── ContextFactory.php
│   │   │           │   │   ├── CustomSnippetAcceptingContext.php
│   │   │           │   │   ├── Environment
│   │   │           │   │   │   ├── ContextEnvironment.php
│   │   │           │   │   │   ├── Handler
│   │   │           │   │   │   │   └── ContextEnvironmentHandler.php
│   │   │           │   │   │   ├── InitializedContextEnvironment.php
│   │   │           │   │   │   ├── Reader
│   │   │           │   │   │   │   └── ContextEnvironmentReader.php
│   │   │           │   │   │   └── UninitializedContextEnvironment.php
│   │   │           │   │   ├── Exception
│   │   │           │   │   │   ├── ContextException.php
│   │   │           │   │   │   ├── ContextNotFoundException.php
│   │   │           │   │   │   ├── UnknownTranslationResourceException.php
│   │   │           │   │   │   └── WrongContextClassException.php
│   │   │           │   │   ├── Initializer
│   │   │           │   │   │   └── ContextInitializer.php
│   │   │           │   │   ├── Reader
│   │   │           │   │   │   ├── AnnotatedContextReader.php
│   │   │           │   │   │   ├── ContextReader.php
│   │   │           │   │   │   ├── ContextReaderCachedPerContext.php
│   │   │           │   │   │   ├── ContextReaderCachedPerSuite.php
│   │   │           │   │   │   └── TranslatableContextReader.php
│   │   │           │   │   ├── ServiceContainer
│   │   │           │   │   │   └── ContextExtension.php
│   │   │           │   │   ├── Snippet
│   │   │           │   │   │   ├── Appender
│   │   │           │   │   │   │   └── ContextSnippetAppender.php
│   │   │           │   │   │   ├── ContextSnippet.php
│   │   │           │   │   │   └── Generator
│   │   │           │   │   │       ├── AggregateContextIdentifier.php
│   │   │           │   │   │       ├── AggregatePatternIdentifier.php
│   │   │           │   │   │       ├── CachedContextIdentifier.php
│   │   │           │   │   │       ├── ContextInterfaceBasedContextIdentifier.php
│   │   │           │   │   │       ├── ContextInterfaceBasedPatternIdentifier.php
│   │   │           │   │   │       ├── ContextSnippetGenerator.php
│   │   │           │   │   │       ├── FixedContextIdentifier.php
│   │   │           │   │   │       ├── FixedPatternIdentifier.php
│   │   │           │   │   │       ├── PatternIdentifier.php
│   │   │           │   │   │       └── TargetContextIdentifier.php
│   │   │           │   │   ├── SnippetAcceptingContext.php
│   │   │           │   │   ├── Suite
│   │   │           │   │   │   └── Setup
│   │   │           │   │   │       └── SuiteWithContextsSetup.php
│   │   │           │   │   └── TranslatableContext.php
│   │   │           │   ├── Definition
│   │   │           │   │   ├── Call
│   │   │           │   │   │   ├── DefinitionCall.php
│   │   │           │   │   │   ├── Given.php
│   │   │           │   │   │   ├── RuntimeDefinition.php
│   │   │           │   │   │   ├── Then.php
│   │   │           │   │   │   └── When.php
│   │   │           │   │   ├── Cli
│   │   │           │   │   │   └── AvailableDefinitionsController.php
│   │   │           │   │   ├── Context
│   │   │           │   │   │   └── Annotation
│   │   │           │   │   │       └── DefinitionAnnotationReader.php
│   │   │           │   │   ├── Definition.php
│   │   │           │   │   ├── DefinitionFinder.php
│   │   │           │   │   ├── DefinitionRepository.php
│   │   │           │   │   ├── DefinitionWriter.php
│   │   │           │   │   ├── Exception
│   │   │           │   │   │   ├── AmbiguousMatchException.php
│   │   │           │   │   │   ├── DefinitionException.php
│   │   │           │   │   │   ├── InvalidPatternException.php
│   │   │           │   │   │   ├── RedundantStepException.php
│   │   │           │   │   │   ├── SearchException.php
│   │   │           │   │   │   ├── UnknownPatternException.php
│   │   │           │   │   │   └── UnsupportedPatternTypeException.php
│   │   │           │   │   ├── Pattern
│   │   │           │   │   │   ├── Pattern.php
│   │   │           │   │   │   ├── PatternTransformer.php
│   │   │           │   │   │   └── Policy
│   │   │           │   │   │       ├── PatternPolicy.php
│   │   │           │   │   │       ├── RegexPatternPolicy.php
│   │   │           │   │   │       └── TurnipPatternPolicy.php
│   │   │           │   │   ├── Printer
│   │   │           │   │   │   ├── ConsoleDefinitionInformationPrinter.php
│   │   │           │   │   │   ├── ConsoleDefinitionListPrinter.php
│   │   │           │   │   │   ├── ConsoleDefinitionPrinter.php
│   │   │           │   │   │   └── DefinitionPrinter.php
│   │   │           │   │   ├── Search
│   │   │           │   │   │   ├── RepositorySearchEngine.php
│   │   │           │   │   │   └── SearchEngine.php
│   │   │           │   │   ├── SearchResult.php
│   │   │           │   │   ├── ServiceContainer
│   │   │           │   │   │   └── DefinitionExtension.php
│   │   │           │   │   └── Translator
│   │   │           │   │       ├── DefinitionTranslator.php
│   │   │           │   │       └── TranslatedDefinition.php
│   │   │           │   ├── EventDispatcher
│   │   │           │   │   ├── Cli
│   │   │           │   │   │   └── StopOnFailureController.php
│   │   │           │   │   ├── Event
│   │   │           │   │   │   ├── AfterBackgroundSetup.php
│   │   │           │   │   │   ├── AfterBackgroundTested.php
│   │   │           │   │   │   ├── AfterFeatureSetup.php
│   │   │           │   │   │   ├── AfterFeatureTested.php
│   │   │           │   │   │   ├── AfterOutlineSetup.php
│   │   │           │   │   │   ├── AfterOutlineTested.php
│   │   │           │   │   │   ├── AfterScenarioSetup.php
│   │   │           │   │   │   ├── AfterScenarioTested.php
│   │   │           │   │   │   ├── AfterStepSetup.php
│   │   │           │   │   │   ├── AfterStepTested.php
│   │   │           │   │   │   ├── BackgroundTested.php
│   │   │           │   │   │   ├── BeforeBackgroundTeardown.php
│   │   │           │   │   │   ├── BeforeBackgroundTested.php
│   │   │           │   │   │   ├── BeforeFeatureTeardown.php
│   │   │           │   │   │   ├── BeforeFeatureTested.php
│   │   │           │   │   │   ├── BeforeOutlineTeardown.php
│   │   │           │   │   │   ├── BeforeOutlineTested.php
│   │   │           │   │   │   ├── BeforeScenarioTeardown.php
│   │   │           │   │   │   ├── BeforeScenarioTested.php
│   │   │           │   │   │   ├── BeforeStepTeardown.php
│   │   │           │   │   │   ├── BeforeStepTested.php
│   │   │           │   │   │   ├── ExampleTested.php
│   │   │           │   │   │   ├── FeatureTested.php
│   │   │           │   │   │   ├── GherkinNodeTested.php
│   │   │           │   │   │   ├── OutlineTested.php
│   │   │           │   │   │   ├── ScenarioLikeTested.php
│   │   │           │   │   │   ├── ScenarioTested.php
│   │   │           │   │   │   └── StepTested.php
│   │   │           │   │   ├── ServiceContainer
│   │   │           │   │   │   └── EventDispatcherExtension.php
│   │   │           │   │   └── Tester
│   │   │           │   │       ├── EventDispatchingBackgroundTester.php
│   │   │           │   │       ├── EventDispatchingFeatureTester.php
│   │   │           │   │       ├── EventDispatchingOutlineTester.php
│   │   │           │   │       ├── EventDispatchingScenarioTester.php
│   │   │           │   │       ├── EventDispatchingStepTester.php
│   │   │           │   │       └── TickingStepTester.php
│   │   │           │   ├── Gherkin
│   │   │           │   │   ├── Cli
│   │   │           │   │   │   ├── FilterController.php
│   │   │           │   │   │   └── SyntaxController.php
│   │   │           │   │   ├── ServiceContainer
│   │   │           │   │   │   └── GherkinExtension.php
│   │   │           │   │   ├── Specification
│   │   │           │   │   │   ├── LazyFeatureIterator.php
│   │   │           │   │   │   └── Locator
│   │   │           │   │   │       ├── FilesystemFeatureLocator.php
│   │   │           │   │   │       ├── FilesystemRerunScenariosListLocator.php
│   │   │           │   │   │       └── FilesystemScenariosListLocator.php
│   │   │           │   │   └── Suite
│   │   │           │   │       └── Setup
│   │   │           │   │           └── SuiteWithPathsSetup.php
│   │   │           │   ├── HelperContainer
│   │   │           │   │   ├── Argument
│   │   │           │   │   │   ├── ServicesResolver.php
│   │   │           │   │   │   └── ServicesResolverFactory.php
│   │   │           │   │   ├── BuiltInServiceContainer.php
│   │   │           │   │   ├── Exception
│   │   │           │   │   │   ├── HelperContainerException.php
│   │   │           │   │   │   ├── ServiceNotFoundException.php
│   │   │           │   │   │   ├── WrongContainerClassException.php
│   │   │           │   │   │   └── WrongServicesConfigurationException.php
│   │   │           │   │   └── ServiceContainer
│   │   │           │   │       └── HelperContainerExtension.php
│   │   │           │   ├── Hook
│   │   │           │   │   ├── Call
│   │   │           │   │   │   ├── AfterFeature.php
│   │   │           │   │   │   ├── AfterScenario.php
│   │   │           │   │   │   ├── AfterStep.php
│   │   │           │   │   │   ├── BeforeFeature.php
│   │   │           │   │   │   ├── BeforeScenario.php
│   │   │           │   │   │   ├── BeforeStep.php
│   │   │           │   │   │   ├── RuntimeFeatureHook.php
│   │   │           │   │   │   ├── RuntimeScenarioHook.php
│   │   │           │   │   │   └── RuntimeStepHook.php
│   │   │           │   │   ├── Context
│   │   │           │   │   │   └── Annotation
│   │   │           │   │   │       └── HookAnnotationReader.php
│   │   │           │   │   ├── Scope
│   │   │           │   │   │   ├── AfterFeatureScope.php
│   │   │           │   │   │   ├── AfterScenarioScope.php
│   │   │           │   │   │   ├── AfterStepScope.php
│   │   │           │   │   │   ├── BeforeFeatureScope.php
│   │   │           │   │   │   ├── BeforeScenarioScope.php
│   │   │           │   │   │   ├── BeforeStepScope.php
│   │   │           │   │   │   ├── FeatureScope.php
│   │   │           │   │   │   ├── ScenarioScope.php
│   │   │           │   │   │   └── StepScope.php
│   │   │           │   │   ├── ServiceContainer
│   │   │           │   │   │   └── HookExtension.php
│   │   │           │   │   └── Tester
│   │   │           │   │       ├── HookableFeatureTester.php
│   │   │           │   │       ├── HookableScenarioTester.php
│   │   │           │   │       └── HookableStepTester.php
│   │   │           │   ├── Output
│   │   │           │   │   ├── Exception
│   │   │           │   │   │   └── NodeVisitorNotFoundException.php
│   │   │           │   │   ├── Node
│   │   │           │   │   │   ├── EventListener
│   │   │           │   │   │   │   ├── AST
│   │   │           │   │   │   │   │   ├── FeatureListener.php
│   │   │           │   │   │   │   │   ├── OutlineListener.php
│   │   │           │   │   │   │   │   ├── OutlineTableListener.php
│   │   │           │   │   │   │   │   ├── ScenarioNodeListener.php
│   │   │           │   │   │   │   │   ├── StepListener.php
│   │   │           │   │   │   │   │   └── SuiteListener.php
│   │   │           │   │   │   │   ├── Flow
│   │   │           │   │   │   │   │   ├── FireOnlySiblingsListener.php
│   │   │           │   │   │   │   │   ├── FirstBackgroundFiresFirstListener.php
│   │   │           │   │   │   │   │   └── OnlyFirstBackgroundFiresListener.php
│   │   │           │   │   │   │   ├── JUnit
│   │   │           │   │   │   │   │   ├── JUnitFeatureElementListener.php
│   │   │           │   │   │   │   │   └── JUnitOutlineStoreListener.php
│   │   │           │   │   │   │   └── Statistics
│   │   │           │   │   │   │       ├── HookStatsListener.php
│   │   │           │   │   │   │       ├── ScenarioStatsListener.php
│   │   │           │   │   │   │       ├── StatisticsListener.php
│   │   │           │   │   │   │       └── StepStatsListener.php
│   │   │           │   │   │   └── Printer
│   │   │           │   │   │       ├── CounterPrinter.php
│   │   │           │   │   │       ├── ExamplePrinter.php
│   │   │           │   │   │       ├── ExampleRowPrinter.php
│   │   │           │   │   │       ├── FeaturePrinter.php
│   │   │           │   │   │       ├── Helper
│   │   │           │   │   │       │   ├── ResultToStringConverter.php
│   │   │           │   │   │       │   ├── StepTextPainter.php
│   │   │           │   │   │       │   └── WidthCalculator.php
│   │   │           │   │   │       ├── JUnit
│   │   │           │   │   │       │   ├── JUnitFeaturePrinter.php
│   │   │           │   │   │       │   ├── JUnitScenarioPrinter.php
│   │   │           │   │   │       │   ├── JUnitSetupPrinter.php
│   │   │           │   │   │       │   ├── JUnitStepPrinter.php
│   │   │           │   │   │       │   └── JUnitSuitePrinter.php
│   │   │           │   │   │       ├── ListPrinter.php
│   │   │           │   │   │       ├── OutlinePrinter.php
│   │   │           │   │   │       ├── OutlineTablePrinter.php
│   │   │           │   │   │       ├── Pretty
│   │   │           │   │   │       │   ├── PrettyExamplePrinter.php
│   │   │           │   │   │       │   ├── PrettyExampleRowPrinter.php
│   │   │           │   │   │       │   ├── PrettyFeaturePrinter.php
│   │   │           │   │   │       │   ├── PrettyOutlinePrinter.php
│   │   │           │   │   │       │   ├── PrettyOutlineTablePrinter.php
│   │   │           │   │   │       │   ├── PrettyPathPrinter.php
│   │   │           │   │   │       │   ├── PrettyScenarioPrinter.php
│   │   │           │   │   │       │   ├── PrettySetupPrinter.php
│   │   │           │   │   │       │   ├── PrettySkippedStepPrinter.php
│   │   │           │   │   │       │   ├── PrettyStatisticsPrinter.php
│   │   │           │   │   │       │   └── PrettyStepPrinter.php
│   │   │           │   │   │       ├── Progress
│   │   │           │   │   │       │   ├── ProgressStatisticsPrinter.php
│   │   │           │   │   │       │   └── ProgressStepPrinter.php
│   │   │           │   │   │       ├── ScenarioPrinter.php
│   │   │           │   │   │       ├── SetupPrinter.php
│   │   │           │   │   │       ├── StatisticsPrinter.php
│   │   │           │   │   │       ├── StepPrinter.php
│   │   │           │   │   │       └── SuitePrinter.php
│   │   │           │   │   ├── Printer
│   │   │           │   │   │   ├── ConsoleOutputFactory.php
│   │   │           │   │   │   └── Formatter
│   │   │           │   │   │       └── ConsoleFormatter.php
│   │   │           │   │   ├── ServiceContainer
│   │   │           │   │   │   └── Formatter
│   │   │           │   │   │       ├── JUnitFormatterFactory.php
│   │   │           │   │   │       ├── PrettyFormatterFactory.php
│   │   │           │   │   │       └── ProgressFormatterFactory.php
│   │   │           │   │   └── Statistics
│   │   │           │   │       ├── HookStat.php
│   │   │           │   │       ├── PhaseStatistics.php
│   │   │           │   │       ├── ScenarioStat.php
│   │   │           │   │       ├── Statistics.php
│   │   │           │   │       ├── StepStat.php
│   │   │           │   │       ├── StepStatV2.php
│   │   │           │   │       └── TotalStatistics.php
│   │   │           │   ├── Snippet
│   │   │           │   │   ├── AggregateSnippet.php
│   │   │           │   │   ├── Appender
│   │   │           │   │   │   └── SnippetAppender.php
│   │   │           │   │   ├── Cli
│   │   │           │   │   │   └── SnippetsController.php
│   │   │           │   │   ├── Exception
│   │   │           │   │   │   ├── EnvironmentSnippetGenerationException.php
│   │   │           │   │   │   └── SnippetException.php
│   │   │           │   │   ├── Generator
│   │   │           │   │   │   └── SnippetGenerator.php
│   │   │           │   │   ├── Printer
│   │   │           │   │   │   ├── ConsoleSnippetPrinter.php
│   │   │           │   │   │   └── SnippetPrinter.php
│   │   │           │   │   ├── ServiceContainer
│   │   │           │   │   │   └── SnippetExtension.php
│   │   │           │   │   ├── Snippet.php
│   │   │           │   │   ├── SnippetRegistry.php
│   │   │           │   │   ├── SnippetRepository.php
│   │   │           │   │   ├── SnippetWriter.php
│   │   │           │   │   └── UndefinedStep.php
│   │   │           │   ├── Tester
│   │   │           │   │   ├── BackgroundTester.php
│   │   │           │   │   ├── Cli
│   │   │           │   │   │   └── RerunController.php
│   │   │           │   │   ├── Exception
│   │   │           │   │   │   ├── FeatureHasNoBackgroundException.php
│   │   │           │   │   │   ├── PendingException.php
│   │   │           │   │   │   └── Stringer
│   │   │           │   │   │       └── PendingExceptionStringer.php
│   │   │           │   │   ├── OutlineTester.php
│   │   │           │   │   ├── Result
│   │   │           │   │   │   ├── DefinedStepResult.php
│   │   │           │   │   │   ├── ExecutedStepResult.php
│   │   │           │   │   │   ├── FailedStepSearchResult.php
│   │   │           │   │   │   ├── SkippedStepResult.php
│   │   │           │   │   │   ├── StepResult.php
│   │   │           │   │   │   └── UndefinedStepResult.php
│   │   │           │   │   ├── Runtime
│   │   │           │   │   │   ├── IsolatingScenarioTester.php
│   │   │           │   │   │   ├── RuntimeBackgroundTester.php
│   │   │           │   │   │   ├── RuntimeFeatureTester.php
│   │   │           │   │   │   ├── RuntimeOutlineTester.php
│   │   │           │   │   │   ├── RuntimeScenarioTester.php
│   │   │           │   │   │   └── RuntimeStepTester.php
│   │   │           │   │   ├── ScenarioTester.php
│   │   │           │   │   ├── ServiceContainer
│   │   │           │   │   │   └── TesterExtension.php
│   │   │           │   │   ├── StepContainerTester.php
│   │   │           │   │   └── StepTester.php
│   │   │           │   ├── Transformation
│   │   │           │   │   ├── Call
│   │   │           │   │   │   ├── Filter
│   │   │           │   │   │   │   └── DefinitionArgumentsTransformer.php
│   │   │           │   │   │   ├── RuntimeTransformation.php
│   │   │           │   │   │   └── TransformationCall.php
│   │   │           │   │   ├── Context
│   │   │           │   │   │   └── Annotation
│   │   │           │   │   │       └── TransformationAnnotationReader.php
│   │   │           │   │   ├── Exception
│   │   │           │   │   │   ├── TransformationException.php
│   │   │           │   │   │   └── UnsupportedCallException.php
│   │   │           │   │   ├── RegexGenerator.php
│   │   │           │   │   ├── ServiceContainer
│   │   │           │   │   │   └── TransformationExtension.php
│   │   │           │   │   ├── SimpleArgumentTransformation.php
│   │   │           │   │   ├── Transformation
│   │   │           │   │   │   ├── ColumnBasedTableTransformation.php
│   │   │           │   │   │   ├── PatternTransformation.php
│   │   │           │   │   │   ├── ReturnTypeTransformation.php
│   │   │           │   │   │   ├── RowBasedTableTransformation.php
│   │   │           │   │   │   ├── TableRowTransformation.php
│   │   │           │   │   │   ├── TokenNameAndReturnTypeTransformation.php
│   │   │           │   │   │   └── TokenNameTransformation.php
│   │   │           │   │   ├── Transformation.php
│   │   │           │   │   ├── TransformationRepository.php
│   │   │           │   │   └── Transformer
│   │   │           │   │       ├── ArgumentTransformer.php
│   │   │           │   │       └── RepositoryArgumentTransformer.php
│   │   │           │   └── Translator
│   │   │           │       ├── Cli
│   │   │           │       │   └── GherkinTranslationsController.php
│   │   │           │       └── ServiceContainer
│   │   │           │           └── GherkinTranslationsExtension.php
│   │   │           └── Testwork
│   │   │               ├── ApplicationFactory.php
│   │   │               ├── Argument
│   │   │               │   ├── ArgumentOrganiser.php
│   │   │               │   ├── ConstructorArgumentOrganiser.php
│   │   │               │   ├── Exception
│   │   │               │   │   ├── ArgumentException.php
│   │   │               │   │   ├── UnknownParameterValueException.php
│   │   │               │   │   └── UnsupportedFunctionException.php
│   │   │               │   ├── MixedArgumentOrganiser.php
│   │   │               │   ├── PregMatchArgumentOrganiser.php
│   │   │               │   └── ServiceContainer
│   │   │               │       └── ArgumentExtension.php
│   │   │               ├── Autoloader
│   │   │               │   ├── Cli
│   │   │               │   │   └── AutoloaderController.php
│   │   │               │   └── ServiceContainer
│   │   │               │       └── AutoloaderExtension.php
│   │   │               ├── Call
│   │   │               │   ├── Call.php
│   │   │               │   ├── CallCenter.php
│   │   │               │   ├── CallResult.php
│   │   │               │   ├── CallResults.php
│   │   │               │   ├── Callee.php
│   │   │               │   ├── Exception
│   │   │               │   │   ├── BadCallbackException.php
│   │   │               │   │   ├── CallErrorException.php
│   │   │               │   │   ├── CallException.php
│   │   │               │   │   ├── CallHandlingException.php
│   │   │               │   │   └── FatalThrowableError.php
│   │   │               │   ├── Filter
│   │   │               │   │   ├── CallFilter.php
│   │   │               │   │   └── ResultFilter.php
│   │   │               │   ├── Handler
│   │   │               │   │   ├── CallHandler.php
│   │   │               │   │   ├── Exception
│   │   │               │   │   │   ├── ClassNotFoundHandler.php
│   │   │               │   │   │   └── MethodNotFoundHandler.php
│   │   │               │   │   ├── ExceptionHandler.php
│   │   │               │   │   └── RuntimeCallHandler.php
│   │   │               │   ├── RuntimeCallee.php
│   │   │               │   └── ServiceContainer
│   │   │               │       └── CallExtension.php
│   │   │               ├── Cli
│   │   │               │   ├── Application.php
│   │   │               │   ├── Command.php
│   │   │               │   ├── Controller.php
│   │   │               │   ├── DebugCommand.php
│   │   │               │   ├── DumpReferenceCommand.php
│   │   │               │   └── ServiceContainer
│   │   │               │       └── CliExtension.php
│   │   │               ├── Counter
│   │   │               │   ├── Exception
│   │   │               │   │   └── TimerException.php
│   │   │               │   ├── Memory.php
│   │   │               │   └── Timer.php
│   │   │               ├── Environment
│   │   │               │   ├── Call
│   │   │               │   │   └── EnvironmentCall.php
│   │   │               │   ├── Environment.php
│   │   │               │   ├── EnvironmentManager.php
│   │   │               │   ├── Exception
│   │   │               │   │   ├── EnvironmentBuildException.php
│   │   │               │   │   ├── EnvironmentException.php
│   │   │               │   │   ├── EnvironmentIsolationException.php
│   │   │               │   │   └── EnvironmentReadException.php
│   │   │               │   ├── Handler
│   │   │               │   │   ├── EnvironmentHandler.php
│   │   │               │   │   └── StaticEnvironmentHandler.php
│   │   │               │   ├── Reader
│   │   │               │   │   └── EnvironmentReader.php
│   │   │               │   ├── ServiceContainer
│   │   │               │   │   └── EnvironmentExtension.php
│   │   │               │   └── StaticEnvironment.php
│   │   │               ├── EventDispatcher
│   │   │               │   ├── Cli
│   │   │               │   │   └── SigintController.php
│   │   │               │   ├── Event
│   │   │               │   │   ├── AfterExerciseAborted.php
│   │   │               │   │   ├── AfterExerciseCompleted.php
│   │   │               │   │   ├── AfterExerciseSetup.php
│   │   │               │   │   ├── AfterSetup.php
│   │   │               │   │   ├── AfterSuiteAborted.php
│   │   │               │   │   ├── AfterSuiteSetup.php
│   │   │               │   │   ├── AfterSuiteTested.php
│   │   │               │   │   ├── AfterTested.php
│   │   │               │   │   ├── BeforeExerciseCompleted.php
│   │   │               │   │   ├── BeforeExerciseTeardown.php
│   │   │               │   │   ├── BeforeSuiteTeardown.php
│   │   │               │   │   ├── BeforeSuiteTested.php
│   │   │               │   │   ├── BeforeTeardown.php
│   │   │               │   │   ├── BeforeTested.php
│   │   │               │   │   ├── ExerciseCompleted.php
│   │   │               │   │   ├── LifecycleEvent.php
│   │   │               │   │   └── SuiteTested.php
│   │   │               │   ├── ServiceContainer
│   │   │               │   │   └── EventDispatcherExtension.php
│   │   │               │   ├── Tester
│   │   │               │   │   ├── EventDispatchingExercise.php
│   │   │               │   │   └── EventDispatchingSuiteTester.php
│   │   │               │   └── TestworkEventDispatcher.php
│   │   │               ├── Exception
│   │   │               │   ├── Cli
│   │   │               │   │   └── VerbosityController.php
│   │   │               │   ├── ExceptionPresenter.php
│   │   │               │   ├── ServiceContainer
│   │   │               │   │   └── ExceptionExtension.php
│   │   │               │   ├── Stringer
│   │   │               │   │   ├── ExceptionStringer.php
│   │   │               │   │   ├── PHPUnitExceptionStringer.php
│   │   │               │   │   └── TestworkExceptionStringer.php
│   │   │               │   └── TestworkException.php
│   │   │               ├── Filesystem
│   │   │               │   ├── ConsoleFilesystemLogger.php
│   │   │               │   ├── FilesystemLogger.php
│   │   │               │   └── ServiceContainer
│   │   │               │       └── FilesystemExtension.php
│   │   │               ├── Hook
│   │   │               │   ├── Call
│   │   │               │   │   ├── AfterSuite.php
│   │   │               │   │   ├── BeforeSuite.php
│   │   │               │   │   ├── HookCall.php
│   │   │               │   │   ├── RuntimeFilterableHook.php
│   │   │               │   │   ├── RuntimeHook.php
│   │   │               │   │   └── RuntimeSuiteHook.php
│   │   │               │   ├── FilterableHook.php
│   │   │               │   ├── Hook.php
│   │   │               │   ├── HookDispatcher.php
│   │   │               │   ├── HookRepository.php
│   │   │               │   ├── Scope
│   │   │               │   │   ├── AfterSuiteScope.php
│   │   │               │   │   ├── AfterTestScope.php
│   │   │               │   │   ├── BeforeSuiteScope.php
│   │   │               │   │   ├── HookScope.php
│   │   │               │   │   └── SuiteScope.php
│   │   │               │   ├── ServiceContainer
│   │   │               │   │   └── HookExtension.php
│   │   │               │   └── Tester
│   │   │               │       ├── HookableSuiteTester.php
│   │   │               │       └── Setup
│   │   │               │           ├── HookedSetup.php
│   │   │               │           └── HookedTeardown.php
│   │   │               ├── Ordering
│   │   │               │   ├── Cli
│   │   │               │   │   └── OrderController.php
│   │   │               │   ├── Exception
│   │   │               │   │   └── InvalidOrderException.php
│   │   │               │   ├── OrderedExercise.php
│   │   │               │   ├── Orderer
│   │   │               │   │   ├── NoopOrderer.php
│   │   │               │   │   ├── Orderer.php
│   │   │               │   │   ├── RandomOrderer.php
│   │   │               │   │   └── ReverseOrderer.php
│   │   │               │   └── ServiceContainer
│   │   │               │       └── OrderingExtension.php
│   │   │               ├── Output
│   │   │               │   ├── Cli
│   │   │               │   │   └── OutputController.php
│   │   │               │   ├── Exception
│   │   │               │   │   ├── BadOutputPathException.php
│   │   │               │   │   ├── FormatterNotFoundException.php
│   │   │               │   │   ├── OutputException.php
│   │   │               │   │   └── PrinterException.php
│   │   │               │   ├── Formatter.php
│   │   │               │   ├── Node
│   │   │               │   │   └── EventListener
│   │   │               │   │       ├── ChainEventListener.php
│   │   │               │   │       ├── EventListener.php
│   │   │               │   │       └── Flow
│   │   │               │   │           └── FireOnlyIfFormatterParameterListener.php
│   │   │               │   ├── NodeEventListeningFormatter.php
│   │   │               │   ├── OutputManager.php
│   │   │               │   ├── Printer
│   │   │               │   │   ├── Factory
│   │   │               │   │   │   ├── ConsoleOutputFactory.php
│   │   │               │   │   │   ├── FilesystemOutputFactory.php
│   │   │               │   │   │   └── OutputFactory.php
│   │   │               │   │   ├── JUnitOutputPrinter.php
│   │   │               │   │   ├── OutputPrinter.php
│   │   │               │   │   └── StreamOutputPrinter.php
│   │   │               │   └── ServiceContainer
│   │   │               │       ├── Formatter
│   │   │               │       │   └── FormatterFactory.php
│   │   │               │       └── OutputExtension.php
│   │   │               ├── ServiceContainer
│   │   │               │   ├── Configuration
│   │   │               │   │   ├── ConfigurationLoader.php
│   │   │               │   │   └── ConfigurationTree.php
│   │   │               │   ├── ContainerLoader.php
│   │   │               │   ├── Exception
│   │   │               │   │   ├── ConfigurationLoadingException.php
│   │   │               │   │   ├── ExtensionException.php
│   │   │               │   │   ├── ExtensionInitializationException.php
│   │   │               │   │   ├── ProcessingException.php
│   │   │               │   │   └── ServiceContainerException.php
│   │   │               │   ├── Extension.php
│   │   │               │   ├── ExtensionManager.php
│   │   │               │   └── ServiceProcessor.php
│   │   │               ├── Specification
│   │   │               │   ├── GroupedSpecificationIterator.php
│   │   │               │   ├── Locator
│   │   │               │   │   └── SpecificationLocator.php
│   │   │               │   ├── NoSpecificationsIterator.php
│   │   │               │   ├── ServiceContainer
│   │   │               │   │   └── SpecificationExtension.php
│   │   │               │   ├── SpecificationArrayIterator.php
│   │   │               │   ├── SpecificationFinder.php
│   │   │               │   └── SpecificationIterator.php
│   │   │               ├── Suite
│   │   │               │   ├── Cli
│   │   │               │   │   ├── InitializationController.php
│   │   │               │   │   └── SuiteController.php
│   │   │               │   ├── Exception
│   │   │               │   │   ├── ParameterNotFoundException.php
│   │   │               │   │   ├── SuiteConfigurationException.php
│   │   │               │   │   ├── SuiteException.php
│   │   │               │   │   ├── SuiteGenerationException.php
│   │   │               │   │   ├── SuiteNotFoundException.php
│   │   │               │   │   └── SuiteSetupException.php
│   │   │               │   ├── Generator
│   │   │               │   │   ├── GenericSuiteGenerator.php
│   │   │               │   │   └── SuiteGenerator.php
│   │   │               │   ├── GenericSuite.php
│   │   │               │   ├── ServiceContainer
│   │   │               │   │   └── SuiteExtension.php
│   │   │               │   ├── Setup
│   │   │               │   │   └── SuiteSetup.php
│   │   │               │   ├── Suite.php
│   │   │               │   ├── SuiteBootstrapper.php
│   │   │               │   ├── SuiteRegistry.php
│   │   │               │   └── SuiteRepository.php
│   │   │               ├── Tester
│   │   │               │   ├── Cli
│   │   │               │   │   ├── ExerciseController.php
│   │   │               │   │   └── StrictController.php
│   │   │               │   ├── Exception
│   │   │               │   │   ├── TesterException.php
│   │   │               │   │   └── WrongPathsException.php
│   │   │               │   ├── Exercise.php
│   │   │               │   ├── Result
│   │   │               │   │   ├── ExceptionResult.php
│   │   │               │   │   ├── IntegerTestResult.php
│   │   │               │   │   ├── Interpretation
│   │   │               │   │   │   ├── ResultInterpretation.php
│   │   │               │   │   │   ├── SoftInterpretation.php
│   │   │               │   │   │   └── StrictInterpretation.php
│   │   │               │   │   ├── ResultInterpreter.php
│   │   │               │   │   ├── TestResult.php
│   │   │               │   │   ├── TestResults.php
│   │   │               │   │   └── TestWithSetupResult.php
│   │   │               │   ├── Runtime
│   │   │               │   │   ├── RuntimeExercise.php
│   │   │               │   │   └── RuntimeSuiteTester.php
│   │   │               │   ├── ServiceContainer
│   │   │               │   │   └── TesterExtension.php
│   │   │               │   ├── Setup
│   │   │               │   │   ├── FailedSetup.php
│   │   │               │   │   ├── FailedTeardown.php
│   │   │               │   │   ├── Setup.php
│   │   │               │   │   ├── SuccessfulSetup.php
│   │   │               │   │   ├── SuccessfulTeardown.php
│   │   │               │   │   └── Teardown.php
│   │   │               │   ├── SpecificationTester.php
│   │   │               │   └── SuiteTester.php
│   │   │               └── Translator
│   │   │                   ├── Cli
│   │   │                   │   └── LanguageController.php
│   │   │                   └── ServiceContainer
│   │   │                       └── TranslatorExtension.php
│   │   ├── gherkin
│   │   │   ├── CHANGES.md
│   │   │   ├── CONTRIBUTING.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── bin
│   │   │   │   └── update_i18n
│   │   │   ├── composer.json
│   │   │   ├── i18n.php
│   │   │   ├── libpath.php
│   │   │   ├── package.xml.tpl
│   │   │   ├── phpdoc.ini.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   └── Behat
│   │   │   │       └── Gherkin
│   │   │   │           ├── Cache
│   │   │   │           │   ├── CacheInterface.php
│   │   │   │           │   ├── FileCache.php
│   │   │   │           │   └── MemoryCache.php
│   │   │   │           ├── Exception
│   │   │   │           │   ├── CacheException.php
│   │   │   │           │   ├── Exception.php
│   │   │   │           │   ├── LexerException.php
│   │   │   │           │   ├── NodeException.php
│   │   │   │           │   └── ParserException.php
│   │   │   │           ├── Filter
│   │   │   │           │   ├── ComplexFilter.php
│   │   │   │           │   ├── ComplexFilterInterface.php
│   │   │   │           │   ├── FeatureFilterInterface.php
│   │   │   │           │   ├── FilterInterface.php
│   │   │   │           │   ├── LineFilter.php
│   │   │   │           │   ├── LineRangeFilter.php
│   │   │   │           │   ├── NameFilter.php
│   │   │   │           │   ├── NarrativeFilter.php
│   │   │   │           │   ├── PathsFilter.php
│   │   │   │           │   ├── RoleFilter.php
│   │   │   │           │   ├── SimpleFilter.php
│   │   │   │           │   └── TagFilter.php
│   │   │   │           ├── Gherkin.php
│   │   │   │           ├── Keywords
│   │   │   │           │   ├── ArrayKeywords.php
│   │   │   │           │   ├── CachedArrayKeywords.php
│   │   │   │           │   ├── CucumberKeywords.php
│   │   │   │           │   ├── KeywordsDumper.php
│   │   │   │           │   └── KeywordsInterface.php
│   │   │   │           ├── Lexer.php
│   │   │   │           ├── Loader
│   │   │   │           │   ├── AbstractFileLoader.php
│   │   │   │           │   ├── ArrayLoader.php
│   │   │   │           │   ├── DirectoryLoader.php
│   │   │   │           │   ├── FileLoaderInterface.php
│   │   │   │           │   ├── GherkinFileLoader.php
│   │   │   │           │   ├── LoaderInterface.php
│   │   │   │           │   └── YamlFileLoader.php
│   │   │   │           ├── Node
│   │   │   │           │   ├── ArgumentInterface.php
│   │   │   │           │   ├── BackgroundNode.php
│   │   │   │           │   ├── ExampleNode.php
│   │   │   │           │   ├── ExampleTableNode.php
│   │   │   │           │   ├── FeatureNode.php
│   │   │   │           │   ├── KeywordNodeInterface.php
│   │   │   │           │   ├── NodeInterface.php
│   │   │   │           │   ├── OutlineNode.php
│   │   │   │           │   ├── PyStringNode.php
│   │   │   │           │   ├── ScenarioInterface.php
│   │   │   │           │   ├── ScenarioLikeInterface.php
│   │   │   │           │   ├── ScenarioNode.php
│   │   │   │           │   ├── StepContainerInterface.php
│   │   │   │           │   ├── StepNode.php
│   │   │   │           │   ├── TableNode.php
│   │   │   │           │   └── TaggedNodeInterface.php
│   │   │   │           └── Parser.php
│   │   │   └── tests
│   │   │       └── Behat
│   │   │           └── Gherkin
│   │   │               ├── Cache
│   │   │               │   ├── FileCacheTest.php
│   │   │               │   └── MemoryCacheTest.php
│   │   │               ├── Filter
│   │   │               │   ├── FilterTest.php
│   │   │               │   ├── Fixtures
│   │   │               │   │   ├── full
│   │   │               │   │   │   └── file2
│   │   │               │   │   └── full_path
│   │   │               │   │       └── file1
│   │   │               │   ├── LineFilterTest.php
│   │   │               │   ├── LineRangeFilterTest.php
│   │   │               │   ├── NameFilterTest.php
│   │   │               │   ├── NarrativeFilterTest.php
│   │   │               │   ├── PathsFilterTest.php
│   │   │               │   ├── RoleFilterTest.php
│   │   │               │   └── TagFilterTest.php
│   │   │               ├── Fixtures
│   │   │               │   ├── directories
│   │   │               │   │   └── phps
│   │   │               │   │       └── some_file.php
│   │   │               │   ├── etalons
│   │   │               │   │   ├── addition.yml
│   │   │               │   │   ├── background.yml
│   │   │               │   │   ├── background_title.yml
│   │   │               │   │   ├── big_pystring.yml
│   │   │               │   │   ├── clean_tags.yml
│   │   │               │   │   ├── commented_out.yml
│   │   │               │   │   ├── comments.yml
│   │   │               │   │   ├── complex_descriptions.yml
│   │   │               │   │   ├── empty.yml
│   │   │               │   │   ├── empty_scenario.yml
│   │   │               │   │   ├── empty_scenario_without_linefeed.yml
│   │   │               │   │   ├── empty_scenarios.yml
│   │   │               │   │   ├── fibonacci.yml
│   │   │               │   │   ├── hashes_in_quotes.yml
│   │   │               │   │   ├── issue_13.yml
│   │   │               │   │   ├── ja_addition.yml
│   │   │               │   │   ├── long_title_feature.yml
│   │   │               │   │   ├── multiline_name.yml
│   │   │               │   │   ├── multiline_name_with_newlines.yml
│   │   │               │   │   ├── multiplepystrings.yml
│   │   │               │   │   ├── outline_with_spaces.yml
│   │   │               │   │   ├── outline_with_step_table.yml
│   │   │               │   │   ├── pystring.yml
│   │   │               │   │   ├── ru_addition.yml
│   │   │               │   │   ├── ru_commented.yml
│   │   │               │   │   ├── ru_consecutive_calculations.yml
│   │   │               │   │   ├── ru_division.yml
│   │   │               │   │   ├── start_comments.yml
│   │   │               │   │   ├── tables.yml
│   │   │               │   │   ├── tags_sample.yml
│   │   │               │   │   ├── test_unit.yml
│   │   │               │   │   ├── trimpystring.yml
│   │   │               │   │   └── undefined_multiline_args.yml
│   │   │               │   ├── features
│   │   │               │   │   ├── addition.feature
│   │   │               │   │   ├── background.feature
│   │   │               │   │   ├── background_title.feature
│   │   │               │   │   ├── big_pystring.feature
│   │   │               │   │   ├── clean_tags.feature
│   │   │               │   │   ├── commented_out.feature
│   │   │               │   │   ├── comments.feature
│   │   │               │   │   ├── complex_descriptions.feature
│   │   │               │   │   ├── empty.feature
│   │   │               │   │   ├── empty_scenario.feature
│   │   │               │   │   ├── empty_scenario_without_linefeed.feature
│   │   │               │   │   ├── empty_scenarios.feature
│   │   │               │   │   ├── fibonacci.feature
│   │   │               │   │   ├── hashes_in_quotes.feature
│   │   │               │   │   ├── issue_13.feature
│   │   │               │   │   ├── ja_addition.feature
│   │   │               │   │   ├── long_title_feature.feature
│   │   │               │   │   ├── multiline_name.feature
│   │   │               │   │   ├── multiline_name_with_newlines.feature
│   │   │               │   │   ├── multiplepystrings.feature
│   │   │               │   │   ├── outline_with_spaces.feature
│   │   │               │   │   ├── outline_with_step_table.feature
│   │   │               │   │   ├── pystring.feature
│   │   │               │   │   ├── ru_addition.feature
│   │   │               │   │   ├── ru_commented.feature
│   │   │               │   │   ├── ru_consecutive_calculations.feature
│   │   │               │   │   ├── ru_division.feature
│   │   │               │   │   ├── start_comments.feature
│   │   │               │   │   ├── tables.feature
│   │   │               │   │   ├── tags_sample.feature
│   │   │               │   │   ├── test_unit.feature
│   │   │               │   │   ├── trimpystring.feature
│   │   │               │   │   └── undefined_multiline_args.feature
│   │   │               │   └── i18n.yml
│   │   │               ├── GherkinTest.php
│   │   │               ├── Keywords
│   │   │               │   ├── ArrayKeywordsTest.php
│   │   │               │   ├── CachedArrayKeywordsTest.php
│   │   │               │   ├── CucumberKeywordsTest.php
│   │   │               │   ├── KeywordsDumperTest.php
│   │   │               │   └── KeywordsTest.php
│   │   │               ├── Loader
│   │   │               │   ├── ArrayLoaderTest.php
│   │   │               │   ├── DirectoryLoaderTest.php
│   │   │               │   ├── GherkinFileLoaderTest.php
│   │   │               │   └── YamlFileLoaderTest.php
│   │   │               ├── Node
│   │   │               │   ├── ExampleNodeTest.php
│   │   │               │   ├── OutlineNodeTest.php
│   │   │               │   ├── PyStringNodeTest.php
│   │   │               │   ├── StepNodeTest.php
│   │   │               │   └── TableNodeTest.php
│   │   │               ├── ParserExceptionsTest.php
│   │   │               └── ParserTest.php
│   │   ├── mink
│   │   │   ├── CHANGES.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   ├── driver-testsuite
│   │   │   │   ├── README.md
│   │   │   │   ├── bootstrap.php
│   │   │   │   ├── tests
│   │   │   │   │   ├── AbstractConfig.php
│   │   │   │   │   ├── Basic
│   │   │   │   │   │   ├── BasicAuthTest.php
│   │   │   │   │   │   ├── BestPracticesTest.php
│   │   │   │   │   │   ├── ContentTest.php
│   │   │   │   │   │   ├── CookieTest.php
│   │   │   │   │   │   ├── ErrorHandlingTest.php
│   │   │   │   │   │   ├── HeaderTest.php
│   │   │   │   │   │   ├── IFrameTest.php
│   │   │   │   │   │   ├── NavigationTest.php
│   │   │   │   │   │   ├── ScreenshotTest.php
│   │   │   │   │   │   ├── StatusCodeTest.php
│   │   │   │   │   │   ├── TraversingTest.php
│   │   │   │   │   │   └── VisibilityTest.php
│   │   │   │   │   ├── Css
│   │   │   │   │   │   └── HoverTest.php
│   │   │   │   │   ├── Form
│   │   │   │   │   │   ├── CheckboxTest.php
│   │   │   │   │   │   ├── GeneralTest.php
│   │   │   │   │   │   ├── Html5Test.php
│   │   │   │   │   │   ├── RadioTest.php
│   │   │   │   │   │   └── SelectTest.php
│   │   │   │   │   ├── Js
│   │   │   │   │   │   ├── ChangeEventTest.php
│   │   │   │   │   │   ├── EventsTest.php
│   │   │   │   │   │   ├── JavascriptEvaluationTest.php
│   │   │   │   │   │   ├── JavascriptTest.php
│   │   │   │   │   │   └── WindowTest.php
│   │   │   │   │   ├── SkippingUnsupportedTestCase.php
│   │   │   │   │   └── TestCase.php
│   │   │   │   └── web-fixtures
│   │   │   │       ├── 404.php
│   │   │   │       ├── 500.php
│   │   │   │       ├── advanced_form.html
│   │   │   │       ├── advanced_form_post.php
│   │   │   │       ├── aria_roles.html
│   │   │   │       ├── basic_auth.php
│   │   │   │       ├── basic_form.html
│   │   │   │       ├── basic_form_post.php
│   │   │   │       ├── basic_get_form.php
│   │   │   │       ├── cookie_page1.php
│   │   │   │       ├── cookie_page2.php
│   │   │   │       ├── cookie_page3.php
│   │   │   │       ├── css_mouse_events.html
│   │   │   │       ├── element_change_detector.html
│   │   │   │       ├── empty_textarea.html
│   │   │   │       ├── form_without_button.html
│   │   │   │       ├── headers.php
│   │   │   │       ├── html5_form.html
│   │   │   │       ├── html5_radio.html
│   │   │   │       ├── html5_types.html
│   │   │   │       ├── html_decoding.html
│   │   │   │       ├── iframe.html
│   │   │   │       ├── iframe_inner.html
│   │   │   │       ├── index.html
│   │   │   │       ├── issue130.php
│   │   │   │       ├── issue131.html
│   │   │   │       ├── issue140.php
│   │   │   │       ├── issue178.html
│   │   │   │       ├── issue193.html
│   │   │   │       ├── issue211.html
│   │   │   │       ├── issue212.html
│   │   │   │       ├── issue215.html
│   │   │   │       ├── issue225.html
│   │   │   │       ├── issue255.html
│   │   │   │       ├── js
│   │   │   │       │   ├── jquery-1.6.2-min.js
│   │   │   │       │   └── jquery-ui-1.8.14.custom.min.js
│   │   │   │       ├── js_test.html
│   │   │   │       ├── json.php
│   │   │   │       ├── links.html
│   │   │   │       ├── multi_input_form.html
│   │   │   │       ├── multicheckbox_form.html
│   │   │   │       ├── multiselect_form.html
│   │   │   │       ├── popup1.html
│   │   │   │       ├── popup2.html
│   │   │   │       ├── print_cookies.php
│   │   │   │       ├── radio.html
│   │   │   │       ├── randomizer.php
│   │   │   │       ├── redirect_destination.html
│   │   │   │       ├── redirector.php
│   │   │   │       ├── response_headers.php
│   │   │   │       ├── session_test.php
│   │   │   │       ├── some_file.txt
│   │   │   │       ├── sub-folder
│   │   │   │       │   ├── cookie_page1.php
│   │   │   │       │   └── cookie_page2.php
│   │   │   │       ├── utils.php
│   │   │   │       └── window.html
│   │   │   └── src
│   │   │       ├── Driver
│   │   │       │   ├── CoreDriver.php
│   │   │       │   └── DriverInterface.php
│   │   │       ├── Element
│   │   │       │   ├── DocumentElement.php
│   │   │       │   ├── Element.php
│   │   │       │   ├── ElementInterface.php
│   │   │       │   ├── NodeElement.php
│   │   │       │   └── TraversableElement.php
│   │   │       ├── Exception
│   │   │       │   ├── DriverException.php
│   │   │       │   ├── ElementException.php
│   │   │       │   ├── ElementHtmlException.php
│   │   │       │   ├── ElementNotFoundException.php
│   │   │       │   ├── ElementTextException.php
│   │   │       │   ├── Exception.php
│   │   │       │   ├── ExpectationException.php
│   │   │       │   ├── ResponseTextException.php
│   │   │       │   └── UnsupportedDriverActionException.php
│   │   │       ├── Mink.php
│   │   │       ├── Selector
│   │   │       │   ├── CssSelector.php
│   │   │       │   ├── ExactNamedSelector.php
│   │   │       │   ├── NamedSelector.php
│   │   │       │   ├── PartialNamedSelector.php
│   │   │       │   ├── SelectorInterface.php
│   │   │       │   ├── SelectorsHandler.php
│   │   │       │   └── Xpath
│   │   │       │       ├── Escaper.php
│   │   │       │       └── Manipulator.php
│   │   │       ├── Session.php
│   │   │       └── WebAssert.php
│   │   ├── mink-extension
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── behat.yml.dist
│   │   │   ├── build.php
│   │   │   ├── composer.json
│   │   │   ├── doc
│   │   │   │   └── index.rst
│   │   │   ├── features
│   │   │   │   └── search.feature
│   │   │   ├── i18n
│   │   │   │   ├── cs.xliff
│   │   │   │   ├── da.xliff
│   │   │   │   ├── de.xliff
│   │   │   │   ├── es.xliff
│   │   │   │   ├── fr.xliff
│   │   │   │   ├── hu.xliff
│   │   │   │   ├── id.xliff
│   │   │   │   ├── it.xliff
│   │   │   │   ├── ja.xliff
│   │   │   │   ├── nl.xliff
│   │   │   │   ├── pl.xliff
│   │   │   │   ├── pt-br.xliff
│   │   │   │   ├── pt.xliff
│   │   │   │   ├── ro.xliff
│   │   │   │   ├── ru.xliff
│   │   │   │   ├── sk.xliff
│   │   │   │   ├── sv.xliff
│   │   │   │   └── zh-CN.xliff
│   │   │   ├── init.php
│   │   │   ├── spec
│   │   │   │   └── Behat
│   │   │   │       └── MinkExtension
│   │   │   │           ├── Context
│   │   │   │           │   └── Initializer
│   │   │   │           │       └── MinkAwareInitializerSpec.php
│   │   │   │           ├── Listener
│   │   │   │           │   └── SessionsListenerSpec.php
│   │   │   │           └── ServiceContainer
│   │   │   │               ├── Driver
│   │   │   │               │   ├── BrowserStackFactorySpec.php
│   │   │   │               │   ├── GoutteFactorySpec.php
│   │   │   │               │   ├── SahiFactorySpec.php
│   │   │   │               │   ├── SauceLabsFactorySpec.php
│   │   │   │               │   ├── Selenium2FactorySpec.php
│   │   │   │               │   ├── SeleniumFactorySpec.php
│   │   │   │               │   └── ZombieFactorySpec.php
│   │   │   │               └── MinkExtensionSpec.php
│   │   │   └── src
│   │   │       └── Behat
│   │   │           └── MinkExtension
│   │   │               ├── Context
│   │   │               │   ├── Initializer
│   │   │               │   │   └── MinkAwareInitializer.php
│   │   │               │   ├── MinkAwareContext.php
│   │   │               │   ├── MinkContext.php
│   │   │               │   └── RawMinkContext.php
│   │   │               ├── Listener
│   │   │               │   ├── FailureShowListener.php
│   │   │               │   └── SessionsListener.php
│   │   │               └── ServiceContainer
│   │   │                   ├── Driver
│   │   │                   │   ├── BrowserStackFactory.php
│   │   │                   │   ├── DriverFactory.php
│   │   │                   │   ├── GoutteFactory.php
│   │   │                   │   ├── SahiFactory.php
│   │   │                   │   ├── SauceLabsFactory.php
│   │   │                   │   ├── Selenium2Factory.php
│   │   │                   │   ├── SeleniumFactory.php
│   │   │                   │   └── ZombieFactory.php
│   │   │                   └── MinkExtension.php
│   │   └── transliterator
│   │       ├── CHANGELOG.md
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── composer.json
│   │       ├── phpunit.xml.dist
│   │       ├── src
│   │       │   └── Behat
│   │       │       └── Transliterator
│   │       │           ├── Transliterator.php
│   │       │           └── data
│   │       │               ├── x00.php
│   │       │               ├── x01.php
│   │       │               ├── x02.php
│   │       │               ├── x03.php
│   │       │               ├── x04.php
│   │       │               ├── x05.php
│   │       │               ├── x06.php
│   │       │               ├── x07.php
│   │       │               ├── x09.php
│   │       │               ├── x0a.php
│   │       │               ├── x0b.php
│   │       │               ├── x0c.php
│   │       │               ├── x0d.php
│   │       │               ├── x0e.php
│   │       │               ├── x0f.php
│   │       │               ├── x10.php
│   │       │               ├── x11.php
│   │       │               ├── x12.php
│   │       │               ├── x13.php
│   │       │               ├── x14.php
│   │       │               ├── x15.php
│   │       │               ├── x16.php
│   │       │               ├── x17.php
│   │       │               ├── x18.php
│   │       │               ├── x1e.php
│   │       │               ├── x1f.php
│   │       │               ├── x20.php
│   │       │               ├── x21.php
│   │       │               ├── x22.php
│   │       │               ├── x23.php
│   │       │               ├── x24.php
│   │       │               ├── x25.php
│   │       │               ├── x26.php
│   │       │               ├── x27.php
│   │       │               ├── x28.php
│   │       │               ├── x2e.php
│   │       │               ├── x2f.php
│   │       │               ├── x30.php
│   │       │               ├── x31.php
│   │       │               ├── x32.php
│   │       │               ├── x33.php
│   │       │               ├── x4d.php
│   │       │               ├── x4e.php
│   │       │               ├── x4f.php
│   │       │               ├── x50.php
│   │       │               ├── x51.php
│   │       │               ├── x52.php
│   │       │               ├── x53.php
│   │       │               ├── x54.php
│   │       │               ├── x55.php
│   │       │               ├── x56.php
│   │       │               ├── x57.php
│   │       │               ├── x58.php
│   │       │               ├── x59.php
│   │       │               ├── x5a.php
│   │       │               ├── x5b.php
│   │       │               ├── x5c.php
│   │       │               ├── x5d.php
│   │       │               ├── x5e.php
│   │       │               ├── x5f.php
│   │       │               ├── x60.php
│   │       │               ├── x61.php
│   │       │               ├── x62.php
│   │       │               ├── x63.php
│   │       │               ├── x64.php
│   │       │               ├── x65.php
│   │       │               ├── x66.php
│   │       │               ├── x67.php
│   │       │               ├── x68.php
│   │       │               ├── x69.php
│   │       │               ├── x6a.php
│   │       │               ├── x6b.php
│   │       │               ├── x6c.php
│   │       │               ├── x6d.php
│   │       │               ├── x6e.php
│   │       │               ├── x6f.php
│   │       │               ├── x70.php
│   │       │               ├── x71.php
│   │       │               ├── x72.php
│   │       │               ├── x73.php
│   │       │               ├── x74.php
│   │       │               ├── x75.php
│   │       │               ├── x76.php
│   │       │               ├── x77.php
│   │       │               ├── x78.php
│   │       │               ├── x79.php
│   │       │               ├── x7a.php
│   │       │               ├── x7b.php
│   │       │               ├── x7c.php
│   │       │               ├── x7d.php
│   │       │               ├── x7e.php
│   │       │               ├── x7f.php
│   │       │               ├── x80.php
│   │       │               ├── x81.php
│   │       │               ├── x82.php
│   │       │               ├── x83.php
│   │       │               ├── x84.php
│   │       │               ├── x85.php
│   │       │               ├── x86.php
│   │       │               ├── x87.php
│   │       │               ├── x88.php
│   │       │               ├── x89.php
│   │       │               ├── x8a.php
│   │       │               ├── x8b.php
│   │       │               ├── x8c.php
│   │       │               ├── x8d.php
│   │       │               ├── x8e.php
│   │       │               ├── x8f.php
│   │       │               ├── x90.php
│   │       │               ├── x91.php
│   │       │               ├── x92.php
│   │       │               ├── x93.php
│   │       │               ├── x94.php
│   │       │               ├── x95.php
│   │       │               ├── x96.php
│   │       │               ├── x97.php
│   │       │               ├── x98.php
│   │       │               ├── x99.php
│   │       │               ├── x9a.php
│   │       │               ├── x9b.php
│   │       │               ├── x9c.php
│   │       │               ├── x9d.php
│   │       │               ├── x9e.php
│   │       │               ├── x9f.php
│   │       │               ├── xa0.php
│   │       │               ├── xa1.php
│   │       │               ├── xa2.php
│   │       │               ├── xa3.php
│   │       │               ├── xa4.php
│   │       │               ├── xac.php
│   │       │               ├── xad.php
│   │       │               ├── xae.php
│   │       │               ├── xaf.php
│   │       │               ├── xb0.php
│   │       │               ├── xb1.php
│   │       │               ├── xb2.php
│   │       │               ├── xb3.php
│   │       │               ├── xb4.php
│   │       │               ├── xb5.php
│   │       │               ├── xb6.php
│   │       │               ├── xb7.php
│   │       │               ├── xb8.php
│   │       │               ├── xb9.php
│   │       │               ├── xba.php
│   │       │               ├── xbb.php
│   │       │               ├── xbc.php
│   │       │               ├── xbd.php
│   │       │               ├── xbe.php
│   │       │               ├── xbf.php
│   │       │               ├── xc0.php
│   │       │               ├── xc1.php
│   │       │               ├── xc2.php
│   │       │               ├── xc3.php
│   │       │               ├── xc4.php
│   │       │               ├── xc5.php
│   │       │               ├── xc6.php
│   │       │               ├── xc7.php
│   │       │               ├── xc8.php
│   │       │               ├── xc9.php
│   │       │               ├── xca.php
│   │       │               ├── xcb.php
│   │       │               ├── xcc.php
│   │       │               ├── xcd.php
│   │       │               ├── xce.php
│   │       │               ├── xcf.php
│   │       │               ├── xd0.php
│   │       │               ├── xd1.php
│   │       │               ├── xd2.php
│   │       │               ├── xd3.php
│   │       │               ├── xd4.php
│   │       │               ├── xd5.php
│   │       │               ├── xd6.php
│   │       │               ├── xd7.php
│   │       │               ├── xf9.php
│   │       │               ├── xfa.php
│   │       │               ├── xfb.php
│   │       │               ├── xfc.php
│   │       │               ├── xfd.php
│   │       │               ├── xfe.php
│   │       │               └── xff.php
│   │       └── tests
│   │           ├── DataTest.php
│   │           └── TransliteratorTest.php
│   ├── composer
│   │   ├── ClassLoader.php
│   │   ├── LICENSE
│   │   ├── autoload_classmap.php
│   │   ├── autoload_files.php
│   │   ├── autoload_namespaces.php
│   │   ├── autoload_psr4.php
│   │   ├── autoload_real.php
│   │   ├── autoload_static.php
│   │   ├── include_paths.php
│   │   └── installed.json
│   ├── container-interop
│   │   └── container-interop
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── composer.json
│   │       ├── docs
│   │       │   ├── ContainerInterface-meta.md
│   │       │   ├── ContainerInterface.md
│   │       │   ├── Delegate-lookup-meta.md
│   │       │   ├── Delegate-lookup.md
│   │       │   └── images
│   │       │       ├── interoperating_containers.png
│   │       │       ├── priority.png
│   │       │       └── side_by_side_containers.png
│   │       └── src
│   │           └── Interop
│   │               └── Container
│   │                   ├── ContainerInterface.php
│   │                   └── Exception
│   │                       ├── ContainerException.php
│   │                       └── NotFoundException.php
│   ├── doctrine
│   │   ├── annotations
│   │   │   ├── CHANGELOG.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   └── lib
│   │   │       └── Doctrine
│   │   │           └── Common
│   │   │               └── Annotations
│   │   │                   ├── Annotation
│   │   │                   │   ├── Attribute.php
│   │   │                   │   ├── Attributes.php
│   │   │                   │   ├── Enum.php
│   │   │                   │   ├── IgnoreAnnotation.php
│   │   │                   │   ├── Required.php
│   │   │                   │   └── Target.php
│   │   │                   ├── Annotation.php
│   │   │                   ├── AnnotationException.php
│   │   │                   ├── AnnotationReader.php
│   │   │                   ├── AnnotationRegistry.php
│   │   │                   ├── CachedReader.php
│   │   │                   ├── DocLexer.php
│   │   │                   ├── DocParser.php
│   │   │                   ├── FileCacheReader.php
│   │   │                   ├── IndexedReader.php
│   │   │                   ├── PhpParser.php
│   │   │                   ├── Reader.php
│   │   │                   ├── SimpleAnnotationReader.php
│   │   │                   └── TokenParser.php
│   │   ├── cache
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── UPGRADE.md
│   │   │   ├── build.properties
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── lib
│   │   │   │   └── Doctrine
│   │   │   │       └── Common
│   │   │   │           └── Cache
│   │   │   │               ├── ApcCache.php
│   │   │   │               ├── ApcuCache.php
│   │   │   │               ├── ArrayCache.php
│   │   │   │               ├── Cache.php
│   │   │   │               ├── CacheProvider.php
│   │   │   │               ├── ChainCache.php
│   │   │   │               ├── ClearableCache.php
│   │   │   │               ├── CouchbaseCache.php
│   │   │   │               ├── FileCache.php
│   │   │   │               ├── FilesystemCache.php
│   │   │   │               ├── FlushableCache.php
│   │   │   │               ├── MemcacheCache.php
│   │   │   │               ├── MemcachedCache.php
│   │   │   │               ├── MongoDBCache.php
│   │   │   │               ├── MultiGetCache.php
│   │   │   │               ├── MultiPutCache.php
│   │   │   │               ├── PhpFileCache.php
│   │   │   │               ├── PredisCache.php
│   │   │   │               ├── RedisCache.php
│   │   │   │               ├── RiakCache.php
│   │   │   │               ├── SQLite3Cache.php
│   │   │   │               ├── Version.php
│   │   │   │               ├── VoidCache.php
│   │   │   │               ├── WinCacheCache.php
│   │   │   │               ├── XcacheCache.php
│   │   │   │               └── ZendDataCache.php
│   │   │   ├── phpunit.xml.dist
│   │   │   └── tests
│   │   │       ├── Doctrine
│   │   │       │   └── Tests
│   │   │       │       ├── Common
│   │   │       │       │   └── Cache
│   │   │       │       │       ├── ApcCacheTest.php
│   │   │       │       │       ├── ApcuCacheTest.php
│   │   │       │       │       ├── ArrayCacheTest.php
│   │   │       │       │       ├── BaseFileCacheTest.php
│   │   │       │       │       ├── CacheProviderTest.php
│   │   │       │       │       ├── CacheTest.php
│   │   │       │       │       ├── ChainCacheTest.php
│   │   │       │       │       ├── CouchbaseCacheTest.php
│   │   │       │       │       ├── FileCacheTest.php
│   │   │       │       │       ├── FilesystemCacheTest.php
│   │   │       │       │       ├── MemcacheCacheTest.php
│   │   │       │       │       ├── MemcachedCacheTest.php
│   │   │       │       │       ├── MongoDBCacheTest.php
│   │   │       │       │       ├── PhpFileCacheTest.php
│   │   │       │       │       ├── PredisCacheTest.php
│   │   │       │       │       ├── RedisCacheTest.php
│   │   │       │       │       ├── RiakCacheTest.php
│   │   │       │       │       ├── SQLite3CacheTest.php
│   │   │       │       │       ├── VoidCacheTest.php
│   │   │       │       │       ├── WinCacheCacheTest.php
│   │   │       │       │       ├── XcacheCacheTest.php
│   │   │       │       │       └── ZendDataCacheTest.php
│   │   │       │       └── DoctrineTestCase.php
│   │   │       └── travis
│   │   │           ├── php.ini
│   │   │           └── phpunit.travis.xml
│   │   ├── collections
│   │   │   ├── CONTRIBUTING.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   └── lib
│   │   │       └── Doctrine
│   │   │           └── Common
│   │   │               └── Collections
│   │   │                   ├── AbstractLazyCollection.php
│   │   │                   ├── ArrayCollection.php
│   │   │                   ├── Collection.php
│   │   │                   ├── Criteria.php
│   │   │                   ├── Expr
│   │   │                   │   ├── ClosureExpressionVisitor.php
│   │   │                   │   ├── Comparison.php
│   │   │                   │   ├── CompositeExpression.php
│   │   │                   │   ├── Expression.php
│   │   │                   │   ├── ExpressionVisitor.php
│   │   │                   │   └── Value.php
│   │   │                   ├── ExpressionBuilder.php
│   │   │                   └── Selectable.php
│   │   ├── common
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── UPGRADE_TO_2_1
│   │   │   ├── UPGRADE_TO_2_2
│   │   │   ├── composer.json
│   │   │   ├── humbug.json.dist
│   │   │   └── lib
│   │   │       ├── Doctrine
│   │   │       │   └── Common
│   │   │       │       ├── ClassLoader.php
│   │   │       │       ├── CommonException.php
│   │   │       │       ├── Comparable.php
│   │   │       │       ├── EventArgs.php
│   │   │       │       ├── EventManager.php
│   │   │       │       ├── EventSubscriber.php
│   │   │       │       ├── Lexer.php
│   │   │       │       ├── NotifyPropertyChanged.php
│   │   │       │       ├── Persistence
│   │   │       │       │   ├── AbstractManagerRegistry.php
│   │   │       │       │   ├── ConnectionRegistry.php
│   │   │       │       │   ├── Event
│   │   │       │       │   │   ├── LifecycleEventArgs.php
│   │   │       │       │   │   ├── LoadClassMetadataEventArgs.php
│   │   │       │       │   │   ├── ManagerEventArgs.php
│   │   │       │       │   │   ├── OnClearEventArgs.php
│   │   │       │       │   │   └── PreUpdateEventArgs.php
│   │   │       │       │   ├── ManagerRegistry.php
│   │   │       │       │   ├── Mapping
│   │   │       │       │   │   ├── AbstractClassMetadataFactory.php
│   │   │       │       │   │   ├── ClassMetadata.php
│   │   │       │       │   │   ├── ClassMetadataFactory.php
│   │   │       │       │   │   ├── Driver
│   │   │       │       │   │   │   ├── AnnotationDriver.php
│   │   │       │       │   │   │   ├── DefaultFileLocator.php
│   │   │       │       │   │   │   ├── FileDriver.php
│   │   │       │       │   │   │   ├── FileLocator.php
│   │   │       │       │   │   │   ├── MappingDriver.php
│   │   │       │       │   │   │   ├── MappingDriverChain.php
│   │   │       │       │   │   │   ├── PHPDriver.php
│   │   │       │       │   │   │   ├── StaticPHPDriver.php
│   │   │       │       │   │   │   └── SymfonyFileLocator.php
│   │   │       │       │   │   ├── MappingException.php
│   │   │       │       │   │   ├── ReflectionService.php
│   │   │       │       │   │   ├── RuntimeReflectionService.php
│   │   │       │       │   │   └── StaticReflectionService.php
│   │   │       │       │   ├── ObjectManager.php
│   │   │       │       │   ├── ObjectManagerAware.php
│   │   │       │       │   ├── ObjectManagerDecorator.php
│   │   │       │       │   ├── ObjectRepository.php
│   │   │       │       │   ├── PersistentObject.php
│   │   │       │       │   └── Proxy.php
│   │   │       │       ├── PropertyChangedListener.php
│   │   │       │       ├── Proxy
│   │   │       │       │   ├── AbstractProxyFactory.php
│   │   │       │       │   ├── Autoloader.php
│   │   │       │       │   ├── Exception
│   │   │       │       │   │   ├── InvalidArgumentException.php
│   │   │       │       │   │   ├── OutOfBoundsException.php
│   │   │       │       │   │   ├── ProxyException.php
│   │   │       │       │   │   └── UnexpectedValueException.php
│   │   │       │       │   ├── Proxy.php
│   │   │       │       │   ├── ProxyDefinition.php
│   │   │       │       │   └── ProxyGenerator.php
│   │   │       │       ├── Reflection
│   │   │       │       │   ├── ClassFinderInterface.php
│   │   │       │       │   ├── Psr0FindFile.php
│   │   │       │       │   ├── ReflectionProviderInterface.php
│   │   │       │       │   ├── RuntimePublicReflectionProperty.php
│   │   │       │       │   ├── StaticReflectionClass.php
│   │   │       │       │   ├── StaticReflectionMethod.php
│   │   │       │       │   ├── StaticReflectionParser.php
│   │   │       │       │   └── StaticReflectionProperty.php
│   │   │       │       ├── Util
│   │   │       │       │   ├── ClassUtils.php
│   │   │       │       │   ├── Debug.php
│   │   │       │       │   └── Inflector.php
│   │   │       │       └── Version.php
│   │   │       └── vendor
│   │   │           └── doctrine-build-common
│   │   ├── dbal
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   ├── UPGRADE.md
│   │   │   ├── bin
│   │   │   │   ├── doctrine-dbal
│   │   │   │   └── doctrine-dbal.php
│   │   │   ├── composer.json
│   │   │   └── lib
│   │   │       ├── Doctrine
│   │   │       │   └── DBAL
│   │   │       │       ├── Cache
│   │   │       │       │   ├── ArrayStatement.php
│   │   │       │       │   ├── CacheException.php
│   │   │       │       │   ├── QueryCacheProfile.php
│   │   │       │       │   └── ResultCacheStatement.php
│   │   │       │       ├── Configuration.php
│   │   │       │       ├── Connection.php
│   │   │       │       ├── ConnectionException.php
│   │   │       │       ├── Connections
│   │   │       │       │   └── MasterSlaveConnection.php
│   │   │       │       ├── DBALException.php
│   │   │       │       ├── Driver
│   │   │       │       │   ├── AbstractDB2Driver.php
│   │   │       │       │   ├── AbstractDriverException.php
│   │   │       │       │   ├── AbstractMySQLDriver.php
│   │   │       │       │   ├── AbstractOracleDriver.php
│   │   │       │       │   ├── AbstractPostgreSQLDriver.php
│   │   │       │       │   ├── AbstractSQLAnywhereDriver.php
│   │   │       │       │   ├── AbstractSQLServerDriver.php
│   │   │       │       │   ├── AbstractSQLiteDriver.php
│   │   │       │       │   ├── Connection.php
│   │   │       │       │   ├── DriverException.php
│   │   │       │       │   ├── DrizzlePDOMySql
│   │   │       │       │   │   ├── Connection.php
│   │   │       │       │   │   └── Driver.php
│   │   │       │       │   ├── ExceptionConverterDriver.php
│   │   │       │       │   ├── IBMDB2
│   │   │       │       │   │   ├── DB2Connection.php
│   │   │       │       │   │   ├── DB2Driver.php
│   │   │       │       │   │   ├── DB2Exception.php
│   │   │       │       │   │   └── DB2Statement.php
│   │   │       │       │   ├── Mysqli
│   │   │       │       │   │   ├── Driver.php
│   │   │       │       │   │   ├── MysqliConnection.php
│   │   │       │       │   │   ├── MysqliException.php
│   │   │       │       │   │   └── MysqliStatement.php
│   │   │       │       │   ├── OCI8
│   │   │       │       │   │   ├── Driver.php
│   │   │       │       │   │   ├── OCI8Connection.php
│   │   │       │       │   │   ├── OCI8Exception.php
│   │   │       │       │   │   └── OCI8Statement.php
│   │   │       │       │   ├── PDOConnection.php
│   │   │       │       │   ├── PDOException.php
│   │   │       │       │   ├── PDOIbm
│   │   │       │       │   │   └── Driver.php
│   │   │       │       │   ├── PDOMySql
│   │   │       │       │   │   └── Driver.php
│   │   │       │       │   ├── PDOOracle
│   │   │       │       │   │   └── Driver.php
│   │   │       │       │   ├── PDOPgSql
│   │   │       │       │   │   └── Driver.php
│   │   │       │       │   ├── PDOSqlite
│   │   │       │       │   │   └── Driver.php
│   │   │       │       │   ├── PDOSqlsrv
│   │   │       │       │   │   ├── Connection.php
│   │   │       │       │   │   └── Driver.php
│   │   │       │       │   ├── PDOStatement.php
│   │   │       │       │   ├── PingableConnection.php
│   │   │       │       │   ├── ResultStatement.php
│   │   │       │       │   ├── SQLAnywhere
│   │   │       │       │   │   ├── Driver.php
│   │   │       │       │   │   ├── SQLAnywhereConnection.php
│   │   │       │       │   │   ├── SQLAnywhereException.php
│   │   │       │       │   │   └── SQLAnywhereStatement.php
│   │   │       │       │   ├── SQLSrv
│   │   │       │       │   │   ├── Driver.php
│   │   │       │       │   │   ├── LastInsertId.php
│   │   │       │       │   │   ├── SQLSrvConnection.php
│   │   │       │       │   │   ├── SQLSrvException.php
│   │   │       │       │   │   └── SQLSrvStatement.php
│   │   │       │       │   ├── ServerInfoAwareConnection.php
│   │   │       │       │   └── Statement.php
│   │   │       │       ├── Driver.php
│   │   │       │       ├── DriverManager.php
│   │   │       │       ├── Event
│   │   │       │       │   ├── ConnectionEventArgs.php
│   │   │       │       │   ├── Listeners
│   │   │       │       │   │   ├── MysqlSessionInit.php
│   │   │       │       │   │   ├── OracleSessionInit.php
│   │   │       │       │   │   └── SQLSessionInit.php
│   │   │       │       │   ├── SchemaAlterTableAddColumnEventArgs.php
│   │   │       │       │   ├── SchemaAlterTableChangeColumnEventArgs.php
│   │   │       │       │   ├── SchemaAlterTableEventArgs.php
│   │   │       │       │   ├── SchemaAlterTableRemoveColumnEventArgs.php
│   │   │       │       │   ├── SchemaAlterTableRenameColumnEventArgs.php
│   │   │       │       │   ├── SchemaColumnDefinitionEventArgs.php
│   │   │       │       │   ├── SchemaCreateTableColumnEventArgs.php
│   │   │       │       │   ├── SchemaCreateTableEventArgs.php
│   │   │       │       │   ├── SchemaDropTableEventArgs.php
│   │   │       │       │   ├── SchemaEventArgs.php
│   │   │       │       │   └── SchemaIndexDefinitionEventArgs.php
│   │   │       │       ├── Events.php
│   │   │       │       ├── Exception
│   │   │       │       │   ├── ConnectionException.php
│   │   │       │       │   ├── ConstraintViolationException.php
│   │   │       │       │   ├── DatabaseObjectExistsException.php
│   │   │       │       │   ├── DatabaseObjectNotFoundException.php
│   │   │       │       │   ├── DriverException.php
│   │   │       │       │   ├── ForeignKeyConstraintViolationException.php
│   │   │       │       │   ├── InvalidArgumentException.php
│   │   │       │       │   ├── InvalidFieldNameException.php
│   │   │       │       │   ├── NonUniqueFieldNameException.php
│   │   │       │       │   ├── NotNullConstraintViolationException.php
│   │   │       │       │   ├── ReadOnlyException.php
│   │   │       │       │   ├── ServerException.php
│   │   │       │       │   ├── SyntaxErrorException.php
│   │   │       │       │   ├── TableExistsException.php
│   │   │       │       │   ├── TableNotFoundException.php
│   │   │       │       │   └── UniqueConstraintViolationException.php
│   │   │       │       ├── Id
│   │   │       │       │   ├── TableGenerator.php
│   │   │       │       │   └── TableGeneratorSchemaVisitor.php
│   │   │       │       ├── LockMode.php
│   │   │       │       ├── Logging
│   │   │       │       │   ├── DebugStack.php
│   │   │       │       │   ├── EchoSQLLogger.php
│   │   │       │       │   ├── LoggerChain.php
│   │   │       │       │   └── SQLLogger.php
│   │   │       │       ├── Platforms
│   │   │       │       │   ├── AbstractPlatform.php
│   │   │       │       │   ├── DB2Platform.php
│   │   │       │       │   ├── DrizzlePlatform.php
│   │   │       │       │   ├── Keywords
│   │   │       │       │   │   ├── DB2Keywords.php
│   │   │       │       │   │   ├── DrizzleKeywords.php
│   │   │       │       │   │   ├── KeywordList.php
│   │   │       │       │   │   ├── MsSQLKeywords.php
│   │   │       │       │   │   ├── MySQL57Keywords.php
│   │   │       │       │   │   ├── MySQLKeywords.php
│   │   │       │       │   │   ├── OracleKeywords.php
│   │   │       │       │   │   ├── PostgreSQL91Keywords.php
│   │   │       │       │   │   ├── PostgreSQL92Keywords.php
│   │   │       │       │   │   ├── PostgreSQLKeywords.php
│   │   │       │       │   │   ├── ReservedKeywordsValidator.php
│   │   │       │       │   │   ├── SQLAnywhere11Keywords.php
│   │   │       │       │   │   ├── SQLAnywhere12Keywords.php
│   │   │       │       │   │   ├── SQLAnywhere16Keywords.php
│   │   │       │       │   │   ├── SQLAnywhereKeywords.php
│   │   │       │       │   │   ├── SQLServer2005Keywords.php
│   │   │       │       │   │   ├── SQLServer2008Keywords.php
│   │   │       │       │   │   ├── SQLServer2012Keywords.php
│   │   │       │       │   │   ├── SQLServerKeywords.php
│   │   │       │       │   │   └── SQLiteKeywords.php
│   │   │       │       │   ├── MySQL57Platform.php
│   │   │       │       │   ├── MySqlPlatform.php
│   │   │       │       │   ├── OraclePlatform.php
│   │   │       │       │   ├── PostgreSQL91Platform.php
│   │   │       │       │   ├── PostgreSQL92Platform.php
│   │   │       │       │   ├── PostgreSqlPlatform.php
│   │   │       │       │   ├── SQLAnywhere11Platform.php
│   │   │       │       │   ├── SQLAnywhere12Platform.php
│   │   │       │       │   ├── SQLAnywhere16Platform.php
│   │   │       │       │   ├── SQLAnywherePlatform.php
│   │   │       │       │   ├── SQLAzurePlatform.php
│   │   │       │       │   ├── SQLServer2005Platform.php
│   │   │       │       │   ├── SQLServer2008Platform.php
│   │   │       │       │   ├── SQLServer2012Platform.php
│   │   │       │       │   ├── SQLServerPlatform.php
│   │   │       │       │   └── SqlitePlatform.php
│   │   │       │       ├── Portability
│   │   │       │       │   ├── Connection.php
│   │   │       │       │   └── Statement.php
│   │   │       │       ├── Query
│   │   │       │       │   ├── Expression
│   │   │       │       │   │   ├── CompositeExpression.php
│   │   │       │       │   │   └── ExpressionBuilder.php
│   │   │       │       │   ├── QueryBuilder.php
│   │   │       │       │   └── QueryException.php
│   │   │       │       ├── README.markdown
│   │   │       │       ├── SQLParserUtils.php
│   │   │       │       ├── SQLParserUtilsException.php
│   │   │       │       ├── Schema
│   │   │       │       │   ├── AbstractAsset.php
│   │   │       │       │   ├── AbstractSchemaManager.php
│   │   │       │       │   ├── Column.php
│   │   │       │       │   ├── ColumnDiff.php
│   │   │       │       │   ├── Comparator.php
│   │   │       │       │   ├── Constraint.php
│   │   │       │       │   ├── DB2SchemaManager.php
│   │   │       │       │   ├── DrizzleSchemaManager.php
│   │   │       │       │   ├── ForeignKeyConstraint.php
│   │   │       │       │   ├── Identifier.php
│   │   │       │       │   ├── Index.php
│   │   │       │       │   ├── MySqlSchemaManager.php
│   │   │       │       │   ├── OracleSchemaManager.php
│   │   │       │       │   ├── PostgreSqlSchemaManager.php
│   │   │       │       │   ├── SQLAnywhereSchemaManager.php
│   │   │       │       │   ├── SQLServerSchemaManager.php
│   │   │       │       │   ├── Schema.php
│   │   │       │       │   ├── SchemaConfig.php
│   │   │       │       │   ├── SchemaDiff.php
│   │   │       │       │   ├── SchemaException.php
│   │   │       │       │   ├── Sequence.php
│   │   │       │       │   ├── SqliteSchemaManager.php
│   │   │       │       │   ├── Synchronizer
│   │   │       │       │   │   ├── AbstractSchemaSynchronizer.php
│   │   │       │       │   │   ├── SchemaSynchronizer.php
│   │   │       │       │   │   └── SingleDatabaseSynchronizer.php
│   │   │       │       │   ├── Table.php
│   │   │       │       │   ├── TableDiff.php
│   │   │       │       │   ├── View.php
│   │   │       │       │   └── Visitor
│   │   │       │       │       ├── AbstractVisitor.php
│   │   │       │       │       ├── CreateSchemaSqlCollector.php
│   │   │       │       │       ├── DropSchemaSqlCollector.php
│   │   │       │       │       ├── Graphviz.php
│   │   │       │       │       ├── NamespaceVisitor.php
│   │   │       │       │       ├── RemoveNamespacedAssets.php
│   │   │       │       │       ├── SchemaDiffVisitor.php
│   │   │       │       │       └── Visitor.php
│   │   │       │       ├── Sharding
│   │   │       │       │   ├── PoolingShardConnection.php
│   │   │       │       │   ├── PoolingShardManager.php
│   │   │       │       │   ├── SQLAzure
│   │   │       │       │   │   ├── SQLAzureFederationsSynchronizer.php
│   │   │       │       │   │   ├── SQLAzureShardManager.php
│   │   │       │       │   │   └── Schema
│   │   │       │       │   │       └── MultiTenantVisitor.php
│   │   │       │       │   ├── ShardChoser
│   │   │       │       │   │   ├── MultiTenantShardChoser.php
│   │   │       │       │   │   └── ShardChoser.php
│   │   │       │       │   ├── ShardManager.php
│   │   │       │       │   └── ShardingException.php
│   │   │       │       ├── Statement.php
│   │   │       │       ├── Tools
│   │   │       │       │   └── Console
│   │   │       │       │       ├── Command
│   │   │       │       │       │   ├── ImportCommand.php
│   │   │       │       │       │   ├── ReservedWordsCommand.php
│   │   │       │       │       │   └── RunSqlCommand.php
│   │   │       │       │       ├── ConsoleRunner.php
│   │   │       │       │       └── Helper
│   │   │       │       │           └── ConnectionHelper.php
│   │   │       │       ├── Types
│   │   │       │       │   ├── ArrayType.php
│   │   │       │       │   ├── BigIntType.php
│   │   │       │       │   ├── BinaryType.php
│   │   │       │       │   ├── BlobType.php
│   │   │       │       │   ├── BooleanType.php
│   │   │       │       │   ├── ConversionException.php
│   │   │       │       │   ├── DateTimeType.php
│   │   │       │       │   ├── DateTimeTzType.php
│   │   │       │       │   ├── DateType.php
│   │   │       │       │   ├── DecimalType.php
│   │   │       │       │   ├── FloatType.php
│   │   │       │       │   ├── GuidType.php
│   │   │       │       │   ├── IntegerType.php
│   │   │       │       │   ├── JsonArrayType.php
│   │   │       │       │   ├── ObjectType.php
│   │   │       │       │   ├── SimpleArrayType.php
│   │   │       │       │   ├── SmallIntType.php
│   │   │       │       │   ├── StringType.php
│   │   │       │       │   ├── TextType.php
│   │   │       │       │   ├── TimeType.php
│   │   │       │       │   ├── Type.php
│   │   │       │       │   └── VarDateTimeType.php
│   │   │       │       ├── Version.php
│   │   │       │       └── VersionAwarePlatformDriver.php
│   │   │       └── vendor
│   │   │           ├── Symfony
│   │   │           │   └── Component
│   │   │           │       └── Console
│   │   │           ├── doctrine-build-common
│   │   │           └── doctrine-common
│   │   ├── doctrine-bundle
│   │   │   ├── Changelog.md
│   │   │   ├── Command
│   │   │   │   ├── CreateDatabaseDoctrineCommand.php
│   │   │   │   ├── DoctrineCommand.php
│   │   │   │   ├── DropDatabaseDoctrineCommand.php
│   │   │   │   ├── GenerateEntitiesDoctrineCommand.php
│   │   │   │   ├── ImportMappingDoctrineCommand.php
│   │   │   │   └── Proxy
│   │   │   │       ├── ClearMetadataCacheDoctrineCommand.php
│   │   │   │       ├── ClearQueryCacheDoctrineCommand.php
│   │   │   │       ├── ClearResultCacheDoctrineCommand.php
│   │   │   │       ├── CollectionRegionDoctrineCommand.php
│   │   │   │       ├── ConvertMappingDoctrineCommand.php
│   │   │   │       ├── CreateSchemaDoctrineCommand.php
│   │   │   │       ├── DelegateCommand.php
│   │   │   │       ├── DoctrineCommandHelper.php
│   │   │   │       ├── DropSchemaDoctrineCommand.php
│   │   │   │       ├── EnsureProductionSettingsDoctrineCommand.php
│   │   │   │       ├── EntityRegionCacheDoctrineCommand.php
│   │   │   │       ├── ImportDoctrineCommand.php
│   │   │   │       ├── InfoDoctrineCommand.php
│   │   │   │       ├── QueryRegionCacheDoctrineCommand.php
│   │   │   │       ├── RunDqlDoctrineCommand.php
│   │   │   │       ├── RunSqlDoctrineCommand.php
│   │   │   │       ├── UpdateSchemaDoctrineCommand.php
│   │   │   │       └── ValidateSchemaCommand.php
│   │   │   ├── ConnectionFactory.php
│   │   │   ├── Controller
│   │   │   │   └── ProfilerController.php
│   │   │   ├── DataCollector
│   │   │   │   └── DoctrineDataCollector.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── Compiler
│   │   │   │   │   ├── DoctrineOrmMappingsPass.php
│   │   │   │   │   └── EntityListenerPass.php
│   │   │   │   ├── Configuration.php
│   │   │   │   └── DoctrineExtension.php
│   │   │   ├── DoctrineBundle.php
│   │   │   ├── LICENSE
│   │   │   ├── ManagerConfigurator.php
│   │   │   ├── Mapping
│   │   │   │   ├── ClassMetadataCollection.php
│   │   │   │   ├── ContainerAwareEntityListenerResolver.php
│   │   │   │   ├── DisconnectedMetadataFactory.php
│   │   │   │   └── EntityListenerServiceResolver.php
│   │   │   ├── README.md
│   │   │   ├── Registry.php
│   │   │   ├── Resources
│   │   │   │   ├── config
│   │   │   │   │   ├── dbal.xml
│   │   │   │   │   ├── orm.xml
│   │   │   │   │   └── schema
│   │   │   │   │       └── doctrine-1.0.xsd
│   │   │   │   ├── doc
│   │   │   │   │   ├── configuration.rst
│   │   │   │   │   ├── entity-listeners.rst
│   │   │   │   │   ├── index.rst
│   │   │   │   │   └── installation.rst
│   │   │   │   └── views
│   │   │   │       └── Collector
│   │   │   │           ├── db.html.twig
│   │   │   │           ├── explain.html.twig
│   │   │   │           └── icon.svg
│   │   │   ├── Tests
│   │   │   │   ├── Builder
│   │   │   │   │   └── BundleConfigurationBuilder.php
│   │   │   │   ├── BundleTest.php
│   │   │   │   ├── Command
│   │   │   │   │   └── CreateDatabaseDoctrineTest.php
│   │   │   │   ├── ContainerTest.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   └── DoctrineDataCollectorTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── AbstractDoctrineExtensionTest.php
│   │   │   │   │   ├── DoctrineExtensionTest.php
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── Bundles
│   │   │   │   │   │   │   ├── AnnotationsBundle
│   │   │   │   │   │   │   │   ├── AnnotationsBundle.php
│   │   │   │   │   │   │   │   └── Entity
│   │   │   │   │   │   │   │       └── Test.php
│   │   │   │   │   │   │   ├── Vendor
│   │   │   │   │   │   │   │   └── AnnotationsBundle
│   │   │   │   │   │   │   │       ├── AnnotationsBundle.php
│   │   │   │   │   │   │   │       └── Entity
│   │   │   │   │   │   │   │           └── Test.php
│   │   │   │   │   │   │   ├── XmlBundle
│   │   │   │   │   │   │   │   ├── Entity
│   │   │   │   │   │   │   │   │   └── Test.php
│   │   │   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   │   │   └── config
│   │   │   │   │   │   │   │   │       └── doctrine
│   │   │   │   │   │   │   │   │           └── Test.orm.xml
│   │   │   │   │   │   │   │   └── XmlBundle.php
│   │   │   │   │   │   │   └── YamlBundle
│   │   │   │   │   │   │       ├── Entity
│   │   │   │   │   │   │       │   └── Test.php
│   │   │   │   │   │   │       ├── Resources
│   │   │   │   │   │   │       │   └── config
│   │   │   │   │   │   │       │       └── doctrine
│   │   │   │   │   │   │       │           └── Test.orm.yml
│   │   │   │   │   │   │       └── YamlBundle.php
│   │   │   │   │   │   └── config
│   │   │   │   │   │       ├── xml
│   │   │   │   │   │       │   ├── dbal_auto_commit.xml
│   │   │   │   │   │       │   ├── dbal_logging.xml
│   │   │   │   │   │       │   ├── dbal_oracle_connectstring.xml
│   │   │   │   │   │       │   ├── dbal_oracle_instancename.xml
│   │   │   │   │   │       │   ├── dbal_savepoints.xml
│   │   │   │   │   │       │   ├── dbal_schema_filter.xml
│   │   │   │   │   │       │   ├── dbal_service_multiple_connections.xml
│   │   │   │   │   │       │   ├── dbal_service_pool_sharding_connection.xml
│   │   │   │   │   │       │   ├── dbal_service_single_connection.xml
│   │   │   │   │   │       │   ├── dbal_service_single_master_slave_connection.xml
│   │   │   │   │   │       │   ├── dbal_types.xml
│   │   │   │   │   │       │   ├── orm_attach_entity_listener.xml
│   │   │   │   │   │       │   ├── orm_attach_entity_listener_tag.xml
│   │   │   │   │   │       │   ├── orm_attach_entity_listeners_two_connections.xml
│   │   │   │   │   │       │   ├── orm_attach_lazy_entity_listener.xml
│   │   │   │   │   │       │   ├── orm_entity_listener_lazy_abstract.xml
│   │   │   │   │   │       │   ├── orm_entity_listener_lazy_private.xml
│   │   │   │   │   │       │   ├── orm_entity_listener_lazy_resolver_without_interface.xml
│   │   │   │   │   │       │   ├── orm_entity_listener_resolver.xml
│   │   │   │   │   │       │   ├── orm_filters.xml
│   │   │   │   │   │       │   ├── orm_functions.xml
│   │   │   │   │   │       │   ├── orm_hydration_mode.xml
│   │   │   │   │   │       │   ├── orm_imports.xml
│   │   │   │   │   │       │   ├── orm_imports_import.xml
│   │   │   │   │   │       │   ├── orm_multiple_em_bundle_mappings.xml
│   │   │   │   │   │       │   ├── orm_namingstrategy.xml
│   │   │   │   │   │       │   ├── orm_proxy.xml
│   │   │   │   │   │       │   ├── orm_quotestrategy.xml
│   │   │   │   │   │       │   ├── orm_repository_factory.xml
│   │   │   │   │   │       │   ├── orm_resolve_target_entity.xml
│   │   │   │   │   │       │   ├── orm_second_level_cache.xml
│   │   │   │   │   │       │   ├── orm_service_multiple_entity_managers.xml
│   │   │   │   │   │       │   ├── orm_service_simple_single_entity_manager.xml
│   │   │   │   │   │       │   ├── orm_service_simple_single_entity_manager_without_dbname.xml
│   │   │   │   │   │       │   ├── orm_service_single_entity_manager.xml
│   │   │   │   │   │       │   ├── orm_single_em_bundle_mappings.xml
│   │   │   │   │   │       │   ├── orm_single_em_default_table_options.xml
│   │   │   │   │   │       │   └── orm_single_em_dql_functions.xml
│   │   │   │   │   │       └── yml
│   │   │   │   │   │           ├── dbal_auto_commit.yml
│   │   │   │   │   │           ├── dbal_logging.yml
│   │   │   │   │   │           ├── dbal_oracle_connectstring.yml
│   │   │   │   │   │           ├── dbal_oracle_instancename.yml
│   │   │   │   │   │           ├── dbal_savepoints.yml
│   │   │   │   │   │           ├── dbal_schema_filter.yml
│   │   │   │   │   │           ├── dbal_service_multiple_connections.yml
│   │   │   │   │   │           ├── dbal_service_pool_sharding_connection.yml
│   │   │   │   │   │           ├── dbal_service_single_connection.yml
│   │   │   │   │   │           ├── dbal_service_single_master_slave_connection.yml
│   │   │   │   │   │           ├── dbal_types.yml
│   │   │   │   │   │           ├── orm_attach_entity_listener.yml
│   │   │   │   │   │           ├── orm_attach_entity_listener_tag.yml
│   │   │   │   │   │           ├── orm_attach_entity_listeners_two_connections.yml
│   │   │   │   │   │           ├── orm_attach_lazy_entity_listener.yml
│   │   │   │   │   │           ├── orm_entity_listener_lazy_abstract.yml
│   │   │   │   │   │           ├── orm_entity_listener_lazy_private.yml
│   │   │   │   │   │           ├── orm_entity_listener_lazy_resolver_without_interface.yml
│   │   │   │   │   │           ├── orm_entity_listener_resolver.yml
│   │   │   │   │   │           ├── orm_filters.yml
│   │   │   │   │   │           ├── orm_functions.yml
│   │   │   │   │   │           ├── orm_hydration_mode.yml
│   │   │   │   │   │           ├── orm_imports.yml
│   │   │   │   │   │           ├── orm_imports_import.yml
│   │   │   │   │   │           ├── orm_multiple_em_bundle_mappings.yml
│   │   │   │   │   │           ├── orm_namingstrategy.yml
│   │   │   │   │   │           ├── orm_quotestrategy.yml
│   │   │   │   │   │           ├── orm_repository_factory.yml
│   │   │   │   │   │           ├── orm_resolve_target_entity.yml
│   │   │   │   │   │           ├── orm_second_level_cache.yml
│   │   │   │   │   │           ├── orm_service_multiple_entity_managers.yml
│   │   │   │   │   │           ├── orm_service_simple_single_entity_manager.yml
│   │   │   │   │   │           ├── orm_service_simple_single_entity_manager_without_dbname.yml
│   │   │   │   │   │           ├── orm_service_single_entity_manager.yml
│   │   │   │   │   │           ├── orm_single_em_bundle_mappings.yml
│   │   │   │   │   │           ├── orm_single_em_default_table_options.yml
│   │   │   │   │   │           └── orm_single_em_dql_functions.yml
│   │   │   │   │   ├── TestDatetimeFunction.php
│   │   │   │   │   ├── TestFilter.php
│   │   │   │   │   ├── TestNumericFunction.php
│   │   │   │   │   ├── TestStringFunction.php
│   │   │   │   │   ├── TestType.php
│   │   │   │   │   ├── XMLSchemaTest.php
│   │   │   │   │   ├── XmlDoctrineExtensionTest.php
│   │   │   │   │   └── YamlDoctrineExtensionTest.php
│   │   │   │   ├── Mapping
│   │   │   │   │   ├── ContainerAwareEntityListenerResolverTest.php
│   │   │   │   │   └── DisconnectedMetadataFactoryTest.php
│   │   │   │   ├── RegistryTest.php
│   │   │   │   ├── TestCase.php
│   │   │   │   └── Twig
│   │   │   │       └── DoctrineExtensionTest.php
│   │   │   ├── Twig
│   │   │   │   └── DoctrineExtension.php
│   │   │   ├── composer.json
│   │   │   └── phpunit.xml.dist
│   │   ├── doctrine-cache-bundle
│   │   │   ├── Acl
│   │   │   │   └── Model
│   │   │   │       └── AclCache.php
│   │   │   ├── Command
│   │   │   │   ├── CacheCommand.php
│   │   │   │   ├── ContainsCommand.php
│   │   │   │   ├── DeleteCommand.php
│   │   │   │   ├── FlushCommand.php
│   │   │   │   └── StatsCommand.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── CacheProviderLoader.php
│   │   │   │   ├── Configuration.php
│   │   │   │   ├── Definition
│   │   │   │   │   ├── CacheDefinition.php
│   │   │   │   │   ├── ChainDefinition.php
│   │   │   │   │   ├── CouchbaseDefinition.php
│   │   │   │   │   ├── FileSystemDefinition.php
│   │   │   │   │   ├── MemcacheDefinition.php
│   │   │   │   │   ├── MemcachedDefinition.php
│   │   │   │   │   ├── MongodbDefinition.php
│   │   │   │   │   ├── PhpFileDefinition.php
│   │   │   │   │   ├── PredisDefinition.php
│   │   │   │   │   ├── RedisDefinition.php
│   │   │   │   │   ├── RiakDefinition.php
│   │   │   │   │   └── Sqlite3Definition.php
│   │   │   │   ├── DoctrineCacheExtension.php
│   │   │   │   └── SymfonyBridgeAdapter.php
│   │   │   ├── DoctrineCacheBundle.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── Resources
│   │   │   │   ├── config
│   │   │   │   │   ├── schema
│   │   │   │   │   │   └── doctrine_cache-1.0.xsd
│   │   │   │   │   └── services.xml
│   │   │   │   └── doc
│   │   │   │       ├── acl_cache.rst
│   │   │   │       ├── custom_providers.rst
│   │   │   │       ├── index.rst
│   │   │   │       ├── installation.rst
│   │   │   │       ├── reference.rst
│   │   │   │       ├── service_parameter.rst
│   │   │   │       └── usage.rst
│   │   │   ├── Tests
│   │   │   │   ├── Acl
│   │   │   │   │   └── Model
│   │   │   │   │       └── AclCacheTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── AbstractDoctrineCacheExtensionTest.php
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── Bundles
│   │   │   │   │   │   │   ├── XmlBundle
│   │   │   │   │   │   │   │   └── XmlBundle.php
│   │   │   │   │   │   │   └── YamlBundle
│   │   │   │   │   │   │       └── YamlBundle.php
│   │   │   │   │   │   ├── Cache
│   │   │   │   │   │   │   └── MyCustomType.php
│   │   │   │   │   │   ├── Definition
│   │   │   │   │   │   │   └── MyCustomTypeDefinition.php
│   │   │   │   │   │   └── config
│   │   │   │   │   │       ├── xml
│   │   │   │   │   │       │   ├── acl.xml
│   │   │   │   │   │       │   ├── aliased.xml
│   │   │   │   │   │       │   ├── basic.xml
│   │   │   │   │   │       │   ├── configurable.xml
│   │   │   │   │   │       │   ├── configurable_defaults.xml
│   │   │   │   │   │       │   ├── custom_providers.xml
│   │   │   │   │   │       │   ├── namespaced.xml
│   │   │   │   │   │       │   ├── service_parameter.xml
│   │   │   │   │   │       │   └── unrecognized.xml
│   │   │   │   │   │       └── yml
│   │   │   │   │   │           ├── acl.yml
│   │   │   │   │   │           ├── aliased.yml
│   │   │   │   │   │           ├── basic.yml
│   │   │   │   │   │           ├── configurable.yml
│   │   │   │   │   │           ├── configurable_defaults.yml
│   │   │   │   │   │           ├── custom_providers.yml
│   │   │   │   │   │           ├── namespaced.yml
│   │   │   │   │   │           ├── service_parameter.yml
│   │   │   │   │   │           └── unrecognized.yml
│   │   │   │   │   ├── SymfonyBridgeAdapterTest.php
│   │   │   │   │   ├── XmlDoctrineCacheExtensionTest.php
│   │   │   │   │   └── YmlDoctrineCacheExtensionTest.php
│   │   │   │   ├── Functional
│   │   │   │   │   ├── ArrayCacheTest.php
│   │   │   │   │   ├── BaseCacheTest.php
│   │   │   │   │   ├── ChainCacheTest.php
│   │   │   │   │   ├── Command
│   │   │   │   │   │   ├── CommandTestCase.php
│   │   │   │   │   │   ├── ContainsCommandTest.php
│   │   │   │   │   │   ├── DeleteCommandTest.php
│   │   │   │   │   │   ├── FlushCommandTest.php
│   │   │   │   │   │   └── StatsCommandTest.php
│   │   │   │   │   ├── FileSystemCacheTest.php
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── Memcached.php
│   │   │   │   │   │   └── config
│   │   │   │   │   │       ├── array.xml
│   │   │   │   │   │       ├── chain.xml
│   │   │   │   │   │       ├── file_system.xml
│   │   │   │   │   │       ├── memcache.xml
│   │   │   │   │   │       ├── memcached.xml
│   │   │   │   │   │       ├── mongodb.xml
│   │   │   │   │   │       ├── php_file.xml
│   │   │   │   │   │       ├── predis.xml
│   │   │   │   │   │       ├── riak.xml
│   │   │   │   │   │       ├── sqlite3.xml
│   │   │   │   │   │       └── void.xml
│   │   │   │   │   ├── MemcacheCacheTest.php
│   │   │   │   │   ├── MemcachedCacheTest.php
│   │   │   │   │   ├── MongoDBCacheTest.php
│   │   │   │   │   ├── PhpFileCacheTest.php
│   │   │   │   │   ├── PredisCacheTest.php
│   │   │   │   │   ├── RiakCacheTest.php
│   │   │   │   │   ├── Sqlite3CacheTest.php
│   │   │   │   │   └── VoidCacheTest.php
│   │   │   │   ├── FunctionalTestCase.php
│   │   │   │   ├── TestCase.php
│   │   │   │   ├── bootstrap.php
│   │   │   │   └── travis
│   │   │   │       ├── install-deps.sh
│   │   │   │       └── php.ini
│   │   │   ├── composer.json
│   │   │   ├── phpunit.xml.dist
│   │   │   └── ruleset.xml
│   │   ├── inflector
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   ├── lib
│   │   │   │   └── Doctrine
│   │   │   │       └── Common
│   │   │   │           └── Inflector
│   │   │   │               └── Inflector.php
│   │   │   ├── phpunit.xml.dist
│   │   │   └── tests
│   │   │       └── Doctrine
│   │   │           └── Tests
│   │   │               ├── Common
│   │   │               │   └── Inflector
│   │   │               │       └── InflectorTest.php
│   │   │               ├── DoctrineTestCase.php
│   │   │               └── TestInit.php
│   │   ├── instantiator
│   │   │   ├── CONTRIBUTING.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   ├── phpmd.xml.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   └── Doctrine
│   │   │   │       └── Instantiator
│   │   │   │           ├── Exception
│   │   │   │           │   ├── ExceptionInterface.php
│   │   │   │           │   ├── InvalidArgumentException.php
│   │   │   │           │   └── UnexpectedValueException.php
│   │   │   │           ├── Instantiator.php
│   │   │   │           └── InstantiatorInterface.php
│   │   │   └── tests
│   │   │       └── DoctrineTest
│   │   │           ├── InstantiatorPerformance
│   │   │           │   └── InstantiatorPerformanceEvent.php
│   │   │           ├── InstantiatorTest
│   │   │           │   ├── Exception
│   │   │           │   │   ├── InvalidArgumentExceptionTest.php
│   │   │           │   │   └── UnexpectedValueExceptionTest.php
│   │   │           │   └── InstantiatorTest.php
│   │   │           └── InstantiatorTestAsset
│   │   │               ├── AbstractClassAsset.php
│   │   │               ├── ArrayObjectAsset.php
│   │   │               ├── ExceptionAsset.php
│   │   │               ├── FinalExceptionAsset.php
│   │   │               ├── PharAsset.php
│   │   │               ├── PharExceptionAsset.php
│   │   │               ├── SerializableArrayObjectAsset.php
│   │   │               ├── SimpleSerializableAsset.php
│   │   │               ├── SimpleTraitAsset.php
│   │   │               ├── UnCloneableAsset.php
│   │   │               ├── UnserializeExceptionArrayObjectAsset.php
│   │   │               ├── WakeUpNoticesAsset.php
│   │   │               └── XMLReaderAsset.php
│   │   ├── lexer
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   └── lib
│   │   │       └── Doctrine
│   │   │           └── Common
│   │   │               └── Lexer
│   │   │                   └── AbstractLexer.php
│   │   ├── mongodb
│   │   │   ├── CHANGELOG-1.0.md
│   │   │   ├── CHANGELOG-1.1.md
│   │   │   ├── CHANGELOG-1.2.md
│   │   │   ├── CHANGELOG-1.3.md
│   │   │   ├── CHANGELOG-1.4.md
│   │   │   ├── LICENSE
│   │   │   ├── README.markdown
│   │   │   ├── UPGRADE-1.4.md
│   │   │   ├── composer.json
│   │   │   ├── lib
│   │   │   │   └── Doctrine
│   │   │   │       └── MongoDB
│   │   │   │           ├── Aggregation
│   │   │   │           │   ├── Builder.php
│   │   │   │           │   ├── Expr.php
│   │   │   │           │   ├── Stage
│   │   │   │           │   │   ├── GeoNear.php
│   │   │   │           │   │   ├── Group.php
│   │   │   │           │   │   ├── IndexStats.php
│   │   │   │           │   │   ├── Limit.php
│   │   │   │           │   │   ├── Lookup.php
│   │   │   │           │   │   ├── Match.php
│   │   │   │           │   │   ├── Operator.php
│   │   │   │           │   │   ├── Out.php
│   │   │   │           │   │   ├── Project.php
│   │   │   │           │   │   ├── Redact.php
│   │   │   │           │   │   ├── Sample.php
│   │   │   │           │   │   ├── Skip.php
│   │   │   │           │   │   ├── Sort.php
│   │   │   │           │   │   └── Unwind.php
│   │   │   │           │   └── Stage.php
│   │   │   │           ├── ArrayIterator.php
│   │   │   │           ├── Collection.php
│   │   │   │           ├── CommandCursor.php
│   │   │   │           ├── Configuration.php
│   │   │   │           ├── Connection.php
│   │   │   │           ├── Cursor.php
│   │   │   │           ├── CursorInterface.php
│   │   │   │           ├── Database.php
│   │   │   │           ├── EagerCursor.php
│   │   │   │           ├── Event
│   │   │   │           │   ├── AggregateEventArgs.php
│   │   │   │           │   ├── CreateCollectionEventArgs.php
│   │   │   │           │   ├── DistinctEventArgs.php
│   │   │   │           │   ├── EventArgs.php
│   │   │   │           │   ├── FindEventArgs.php
│   │   │   │           │   ├── GroupEventArgs.php
│   │   │   │           │   ├── MapReduceEventArgs.php
│   │   │   │           │   ├── MutableEventArgs.php
│   │   │   │           │   ├── NearEventArgs.php
│   │   │   │           │   └── UpdateEventArgs.php
│   │   │   │           ├── Events.php
│   │   │   │           ├── Exception
│   │   │   │           │   └── ResultException.php
│   │   │   │           ├── GridFS.php
│   │   │   │           ├── GridFSFile.php
│   │   │   │           ├── Iterator.php
│   │   │   │           ├── IteratorAggregate.php
│   │   │   │           ├── Loggable.php
│   │   │   │           ├── LoggableCollection.php
│   │   │   │           ├── LoggableCursor.php
│   │   │   │           ├── LoggableDatabase.php
│   │   │   │           ├── LoggableGridFS.php
│   │   │   │           ├── Query
│   │   │   │           │   ├── Builder.php
│   │   │   │           │   ├── Expr.php
│   │   │   │           │   └── Query.php
│   │   │   │           ├── Traits
│   │   │   │           │   └── LoggableCollectionTrait.php
│   │   │   │           └── Util
│   │   │   │               └── ReadPreference.php
│   │   │   ├── phpunit.xml.dist
│   │   │   └── tests
│   │   │       └── Doctrine
│   │   │           └── MongoDB
│   │   │               └── Tests
│   │   │                   ├── Aggregation
│   │   │                   │   ├── AggregationTestCase.php
│   │   │                   │   ├── BuilderTest.php
│   │   │                   │   ├── ExprTest.php
│   │   │                   │   └── Stage
│   │   │                   │       ├── GeoNearTest.php
│   │   │                   │       ├── GroupStub.php
│   │   │                   │       ├── GroupTest.php
│   │   │                   │       ├── IndexStatsTest.php
│   │   │                   │       ├── LimitTest.php
│   │   │                   │       ├── LookupTest.php
│   │   │                   │       ├── MatchStub.php
│   │   │                   │       ├── MatchTest.php
│   │   │                   │       ├── OperatorStub.php
│   │   │                   │       ├── OperatorTest.php
│   │   │                   │       ├── OutTest.php
│   │   │                   │       ├── ProjectTest.php
│   │   │                   │       ├── RedactTest.php
│   │   │                   │       ├── SampleTest.php
│   │   │                   │       ├── SkipTest.php
│   │   │                   │       ├── SortTest.php
│   │   │                   │       └── UnwindTest.php
│   │   │                   ├── ArrayIteratorTest.php
│   │   │                   ├── BaseTest.php
│   │   │                   ├── CollectionEventsChangingContextTest.php
│   │   │                   ├── CollectionEventsTest.php
│   │   │                   ├── CollectionTest.php
│   │   │                   ├── CommandCursorFunctionalTest.php
│   │   │                   ├── CommandCursorTest.php
│   │   │                   ├── ConnectionFunctionalTest.php
│   │   │                   ├── ConnectionTest.php
│   │   │                   ├── Constraint
│   │   │                   │   └── ArrayHasKeyAndValue.php
│   │   │                   ├── CursorFunctionalTest.php
│   │   │                   ├── CursorTest.php
│   │   │                   ├── DatabaseEventsTest.php
│   │   │                   ├── DatabaseTest.php
│   │   │                   ├── EagerCursorTest.php
│   │   │                   ├── Event
│   │   │                   │   ├── AggregateEventArgsTest.php
│   │   │                   │   ├── CreateCollectionEventArgsTest.php
│   │   │                   │   ├── DistinctEventArgsTest.php
│   │   │                   │   ├── EventArgsTest.php
│   │   │                   │   ├── FindEventArgsTest.php
│   │   │                   │   ├── GroupEventArgsTest.php
│   │   │                   │   ├── MapReduceEventArgsTest.php
│   │   │                   │   ├── MutableEventArgsTest.php
│   │   │                   │   ├── NearEventArgsTest.php
│   │   │                   │   └── UpdateEventArgsTest.php
│   │   │                   ├── EventTest.php
│   │   │                   ├── FunctionalTest.php
│   │   │                   ├── GridFSFileTest.php
│   │   │                   ├── GridFSTest.php
│   │   │                   ├── LoggableCollectionTest.php
│   │   │                   ├── LoggableCursorTest.php
│   │   │                   ├── LoggableDatabaseTest.php
│   │   │                   ├── LoggableGridFSTest.php
│   │   │                   ├── Query
│   │   │                   │   ├── BuilderStub.php
│   │   │                   │   ├── BuilderTest.php
│   │   │                   │   ├── ExprTest.php
│   │   │                   │   ├── FunctionalTest.php
│   │   │                   │   └── QueryTest.php
│   │   │                   ├── RetryTest.php
│   │   │                   ├── Util
│   │   │                   │   └── ReadPreferenceTest.php
│   │   │                   └── file.txt
│   │   ├── mongodb-odm
│   │   │   ├── CHANGELOG-1.0.md
│   │   │   ├── CHANGELOG-1.1.md
│   │   │   ├── LICENSE
│   │   │   ├── README.markdown
│   │   │   ├── composer.json
│   │   │   ├── docs
│   │   │   │   ├── convert.sh
│   │   │   │   ├── en
│   │   │   │   │   ├── Makefile
│   │   │   │   │   ├── _exts
│   │   │   │   │   │   └── configurationblock.py
│   │   │   │   │   ├── _theme
│   │   │   │   │   ├── conf.py
│   │   │   │   │   ├── cookbook
│   │   │   │   │   │   ├── blending-orm-and-mongodb-odm.rst
│   │   │   │   │   │   ├── implementing-array-access-for-domain-objects.rst
│   │   │   │   │   │   ├── implementing-the-notify-changetracking-policy.rst
│   │   │   │   │   │   ├── implementing-wakeup-or-clone.rst
│   │   │   │   │   │   ├── mapping-classes-to-orm-and-odm.rst
│   │   │   │   │   │   ├── resolve-target-document-listener.rst
│   │   │   │   │   │   ├── simple-search-engine.rst
│   │   │   │   │   │   ├── soft-delete-extension.rst
│   │   │   │   │   │   └── validation-of-documents.rst
│   │   │   │   │   ├── index.rst
│   │   │   │   │   ├── make.bat
│   │   │   │   │   ├── reference
│   │   │   │   │   │   ├── annotations-reference.rst
│   │   │   │   │   │   ├── architecture.rst
│   │   │   │   │   │   ├── basic-mapping.rst
│   │   │   │   │   │   ├── best-practices.rst
│   │   │   │   │   │   ├── bidirectional-references.rst
│   │   │   │   │   │   ├── capped-collections.rst
│   │   │   │   │   │   ├── change-tracking-policies.rst
│   │   │   │   │   │   ├── complex-references.rst
│   │   │   │   │   │   ├── console-commands.rst
│   │   │   │   │   │   ├── custom-collections.rst
│   │   │   │   │   │   ├── eager-cursors.rst
│   │   │   │   │   │   ├── embedded-mapping.rst
│   │   │   │   │   │   ├── events.rst
│   │   │   │   │   │   ├── filters.rst
│   │   │   │   │   │   ├── find-and-update.rst
│   │   │   │   │   │   ├── geospatial-queries.rst
│   │   │   │   │   │   ├── indexes.rst
│   │   │   │   │   │   ├── inheritance-mapping.rst
│   │   │   │   │   │   ├── introduction.rst
│   │   │   │   │   │   ├── logging.rst
│   │   │   │   │   │   ├── map-reduce.rst
│   │   │   │   │   │   ├── metadata-drivers.rst
│   │   │   │   │   │   ├── migrating-schemas.rst
│   │   │   │   │   │   ├── priming-references.rst
│   │   │   │   │   │   ├── query-builder-api.rst
│   │   │   │   │   │   ├── reference-mapping.rst
│   │   │   │   │   │   ├── sharding.rst
│   │   │   │   │   │   ├── slave-okay-queries.rst
│   │   │   │   │   │   ├── storage-strategies.rst
│   │   │   │   │   │   ├── storing-files-with-mongogridfs.rst
│   │   │   │   │   │   ├── trees.rst
│   │   │   │   │   │   ├── upserting-documents.rst
│   │   │   │   │   │   ├── working-with-objects.rst
│   │   │   │   │   │   ├── xml-mapping.rst
│   │   │   │   │   │   └── yml-mapping.rst
│   │   │   │   │   └── tutorials
│   │   │   │   │       └── getting-started.rst
│   │   │   │   └── generate-docs.sh
│   │   │   ├── doctrine-mongo-mapping.xsd
│   │   │   ├── lib
│   │   │   │   └── Doctrine
│   │   │   │       └── ODM
│   │   │   │           └── MongoDB
│   │   │   │               ├── Configuration.php
│   │   │   │               ├── Cursor.php
│   │   │   │               ├── DocumentManager.php
│   │   │   │               ├── DocumentNotFoundException.php
│   │   │   │               ├── DocumentRepository.php
│   │   │   │               ├── EagerCursor.php
│   │   │   │               ├── Event
│   │   │   │               │   ├── DocumentNotFoundEventArgs.php
│   │   │   │               │   ├── LifecycleEventArgs.php
│   │   │   │               │   ├── LoadClassMetadataEventArgs.php
│   │   │   │               │   ├── ManagerEventArgs.php
│   │   │   │               │   ├── OnClearEventArgs.php
│   │   │   │               │   ├── OnFlushEventArgs.php
│   │   │   │               │   ├── PostCollectionLoadEventArgs.php
│   │   │   │               │   ├── PostFlushEventArgs.php
│   │   │   │               │   ├── PreFlushEventArgs.php
│   │   │   │               │   ├── PreLoadEventArgs.php
│   │   │   │               │   └── PreUpdateEventArgs.php
│   │   │   │               ├── Events.php
│   │   │   │               ├── Hydrator
│   │   │   │               │   ├── HydratorException.php
│   │   │   │               │   ├── HydratorFactory.php
│   │   │   │               │   └── HydratorInterface.php
│   │   │   │               ├── Id
│   │   │   │               │   ├── AbstractIdGenerator.php
│   │   │   │               │   ├── AlnumGenerator.php
│   │   │   │               │   ├── AutoGenerator.php
│   │   │   │               │   ├── IncrementGenerator.php
│   │   │   │               │   └── UuidGenerator.php
│   │   │   │               ├── LockException.php
│   │   │   │               ├── LockMode.php
│   │   │   │               ├── Mapping
│   │   │   │               │   ├── Annotations
│   │   │   │               │   │   ├── AbstractDocument.php
│   │   │   │               │   │   ├── AbstractField.php
│   │   │   │               │   │   ├── AbstractIndex.php
│   │   │   │               │   │   ├── AlsoLoad.php
│   │   │   │               │   │   ├── Bin.php
│   │   │   │               │   │   ├── BinCustom.php
│   │   │   │               │   │   ├── BinFunc.php
│   │   │   │               │   │   ├── BinMD5.php
│   │   │   │               │   │   ├── BinUUID.php
│   │   │   │               │   │   ├── BinUUIDRFC4122.php
│   │   │   │               │   │   ├── Bool.php
│   │   │   │               │   │   ├── Boolean.php
│   │   │   │               │   │   ├── ChangeTrackingPolicy.php
│   │   │   │               │   │   ├── Collection.php
│   │   │   │               │   │   ├── Date.php
│   │   │   │               │   │   ├── DefaultDiscriminatorValue.php
│   │   │   │               │   │   ├── DiscriminatorField.php
│   │   │   │               │   │   ├── DiscriminatorMap.php
│   │   │   │               │   │   ├── DiscriminatorValue.php
│   │   │   │               │   │   ├── Distance.php
│   │   │   │               │   │   ├── DoctrineAnnotations.php
│   │   │   │               │   │   ├── Document.php
│   │   │   │               │   │   ├── EmbedMany.php
│   │   │   │               │   │   ├── EmbedOne.php
│   │   │   │               │   │   ├── EmbeddedDocument.php
│   │   │   │               │   │   ├── Field.php
│   │   │   │               │   │   ├── File.php
│   │   │   │               │   │   ├── Float.php
│   │   │   │               │   │   ├── HasLifecycleCallbacks.php
│   │   │   │               │   │   ├── Hash.php
│   │   │   │               │   │   ├── Id.php
│   │   │   │               │   │   ├── Increment.php
│   │   │   │               │   │   ├── Index.php
│   │   │   │               │   │   ├── Indexes.php
│   │   │   │               │   │   ├── Inheritance.php
│   │   │   │               │   │   ├── InheritanceType.php
│   │   │   │               │   │   ├── Int.php
│   │   │   │               │   │   ├── Integer.php
│   │   │   │               │   │   ├── Key.php
│   │   │   │               │   │   ├── Lock.php
│   │   │   │               │   │   ├── MappedSuperclass.php
│   │   │   │               │   │   ├── NotSaved.php
│   │   │   │               │   │   ├── ObjectId.php
│   │   │   │               │   │   ├── PostLoad.php
│   │   │   │               │   │   ├── PostPersist.php
│   │   │   │               │   │   ├── PostRemove.php
│   │   │   │               │   │   ├── PostUpdate.php
│   │   │   │               │   │   ├── PreFlush.php
│   │   │   │               │   │   ├── PreLoad.php
│   │   │   │               │   │   ├── PrePersist.php
│   │   │   │               │   │   ├── PreRemove.php
│   │   │   │               │   │   ├── PreUpdate.php
│   │   │   │               │   │   ├── Raw.php
│   │   │   │               │   │   ├── ReferenceMany.php
│   │   │   │               │   │   ├── ReferenceOne.php
│   │   │   │               │   │   ├── ShardKey.php
│   │   │   │               │   │   ├── String.php
│   │   │   │               │   │   ├── Timestamp.php
│   │   │   │               │   │   ├── UniqueIndex.php
│   │   │   │               │   │   └── Version.php
│   │   │   │               │   ├── ClassMetadata.php
│   │   │   │               │   ├── ClassMetadataFactory.php
│   │   │   │               │   ├── ClassMetadataInfo.php
│   │   │   │               │   ├── Driver
│   │   │   │               │   │   ├── AnnotationDriver.php
│   │   │   │               │   │   ├── SimplifiedXmlDriver.php
│   │   │   │               │   │   ├── SimplifiedYamlDriver.php
│   │   │   │               │   │   ├── XmlDriver.php
│   │   │   │               │   │   └── YamlDriver.php
│   │   │   │               │   └── MappingException.php
│   │   │   │               ├── MongoDBException.php
│   │   │   │               ├── PersistentCollection
│   │   │   │               │   ├── AbstractPersistentCollectionFactory.php
│   │   │   │               │   ├── DefaultPersistentCollectionFactory.php
│   │   │   │               │   ├── DefaultPersistentCollectionGenerator.php
│   │   │   │               │   ├── PersistentCollectionException.php
│   │   │   │               │   ├── PersistentCollectionFactory.php
│   │   │   │               │   ├── PersistentCollectionGenerator.php
│   │   │   │               │   ├── PersistentCollectionInterface.php
│   │   │   │               │   └── PersistentCollectionTrait.php
│   │   │   │               ├── PersistentCollection.php
│   │   │   │               ├── Persisters
│   │   │   │               │   ├── CollectionPersister.php
│   │   │   │               │   ├── DocumentPersister.php
│   │   │   │               │   └── PersistenceBuilder.php
│   │   │   │               ├── Proxy
│   │   │   │               │   ├── Proxy.php
│   │   │   │               │   └── ProxyFactory.php
│   │   │   │               ├── Query
│   │   │   │               │   ├── Builder.php
│   │   │   │               │   ├── CriteriaMerger.php
│   │   │   │               │   ├── Expr.php
│   │   │   │               │   ├── FieldExtractor.php
│   │   │   │               │   ├── Filter
│   │   │   │               │   │   └── BsonFilter.php
│   │   │   │               │   ├── FilterCollection.php
│   │   │   │               │   ├── Query.php
│   │   │   │               │   ├── QueryExpressionVisitor.php
│   │   │   │               │   └── ReferencePrimer.php
│   │   │   │               ├── Repository
│   │   │   │               │   ├── DefaultRepositoryFactory.php
│   │   │   │               │   └── RepositoryFactory.php
│   │   │   │               ├── SchemaManager.php
│   │   │   │               ├── Tools
│   │   │   │               │   ├── Console
│   │   │   │               │   │   ├── Command
│   │   │   │               │   │   │   ├── ClearCache
│   │   │   │               │   │   │   │   └── MetadataCommand.php
│   │   │   │               │   │   │   ├── GenerateDocumentsCommand.php
│   │   │   │               │   │   │   ├── GenerateHydratorsCommand.php
│   │   │   │               │   │   │   ├── GeneratePersistentCollectionsCommand.php
│   │   │   │               │   │   │   ├── GenerateProxiesCommand.php
│   │   │   │               │   │   │   ├── GenerateRepositoriesCommand.php
│   │   │   │               │   │   │   ├── QueryCommand.php
│   │   │   │               │   │   │   └── Schema
│   │   │   │               │   │   │       ├── AbstractCommand.php
│   │   │   │               │   │   │       ├── CreateCommand.php
│   │   │   │               │   │   │       ├── DropCommand.php
│   │   │   │               │   │   │       ├── ShardCommand.php
│   │   │   │               │   │   │       └── UpdateCommand.php
│   │   │   │               │   │   ├── Helper
│   │   │   │               │   │   │   └── DocumentManagerHelper.php
│   │   │   │               │   │   └── MetadataFilter.php
│   │   │   │               │   ├── DisconnectedClassMetadataFactory.php
│   │   │   │               │   ├── DocumentGenerator.php
│   │   │   │               │   ├── DocumentRepositoryGenerator.php
│   │   │   │               │   └── ResolveTargetDocumentListener.php
│   │   │   │               ├── Types
│   │   │   │               │   ├── BinDataByteArrayType.php
│   │   │   │               │   ├── BinDataCustomType.php
│   │   │   │               │   ├── BinDataFuncType.php
│   │   │   │               │   ├── BinDataMD5Type.php
│   │   │   │               │   ├── BinDataType.php
│   │   │   │               │   ├── BinDataUUIDRFC4122Type.php
│   │   │   │               │   ├── BinDataUUIDType.php
│   │   │   │               │   ├── BooleanType.php
│   │   │   │               │   ├── CollectionType.php
│   │   │   │               │   ├── CustomIdType.php
│   │   │   │               │   ├── DateType.php
│   │   │   │               │   ├── FileType.php
│   │   │   │               │   ├── FloatType.php
│   │   │   │               │   ├── HashType.php
│   │   │   │               │   ├── IdType.php
│   │   │   │               │   ├── IncrementType.php
│   │   │   │               │   ├── IntIdType.php
│   │   │   │               │   ├── IntType.php
│   │   │   │               │   ├── KeyType.php
│   │   │   │               │   ├── ObjectIdType.php
│   │   │   │               │   ├── RawType.php
│   │   │   │               │   ├── StringType.php
│   │   │   │               │   ├── TimestampType.php
│   │   │   │               │   └── Type.php
│   │   │   │               ├── UnitOfWork.php
│   │   │   │               └── Utility
│   │   │   │                   ├── CollectionHelper.php
│   │   │   │                   └── LifecycleEventManager.php
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── tests
│   │   │   │   ├── Doctrine
│   │   │   │   │   └── ODM
│   │   │   │   │       └── MongoDB
│   │   │   │   │           └── Tests
│   │   │   │   │               ├── BaseTest.php
│   │   │   │   │               ├── ConfigurationTest.php
│   │   │   │   │               ├── DocumentManagerTest.php
│   │   │   │   │               ├── DocumentRepositoryTest.php
│   │   │   │   │               ├── Events
│   │   │   │   │               │   ├── LifecycleCallbacksTest.php
│   │   │   │   │               │   ├── LifecycleListenersTest.php
│   │   │   │   │               │   ├── PreLoadEventArgsTest.php
│   │   │   │   │               │   └── PreUpdateEventArgsTest.php
│   │   │   │   │               ├── Functional
│   │   │   │   │               │   ├── AlsoLoadTest.php
│   │   │   │   │               │   ├── AtomicSetTest.php
│   │   │   │   │               │   ├── BidirectionalInheritanceTest.php
│   │   │   │   │               │   ├── BinDataTest.php
│   │   │   │   │               │   ├── CollectionPersisterTest.php
│   │   │   │   │               │   ├── CollectionsTest.php
│   │   │   │   │               │   ├── CommitImprovementTest.php
│   │   │   │   │               │   ├── CursorTest.php
│   │   │   │   │               │   ├── CustomCollectionsTest.php
│   │   │   │   │               │   ├── CustomFieldNameTest.php
│   │   │   │   │               │   ├── CustomIdTest.php
│   │   │   │   │               │   ├── CustomTypeTest.php
│   │   │   │   │               │   ├── DatabasesTest.php
│   │   │   │   │               │   ├── DateTest.php
│   │   │   │   │               │   ├── DetachedDocumentTest.php
│   │   │   │   │               │   ├── DiscriminatorsDefaultValueTest.php
│   │   │   │   │               │   ├── DocumentPersisterTest.php
│   │   │   │   │               │   ├── EcommerceTest.php
│   │   │   │   │               │   ├── EmbeddedIdTest.php
│   │   │   │   │               │   ├── EmbeddedReferenceTest.php
│   │   │   │   │               │   ├── EmbeddedTest.php
│   │   │   │   │               │   ├── EnsureShardingTest.php
│   │   │   │   │               │   ├── FilesTest.php
│   │   │   │   │               │   ├── FilterTest.php
│   │   │   │   │               │   ├── FindAndModifyTest.php
│   │   │   │   │               │   ├── FlushOptionsTest.php
│   │   │   │   │               │   ├── FlushTest.php
│   │   │   │   │               │   ├── FunctionalTest.php
│   │   │   │   │               │   ├── GeoSpatialTest.php
│   │   │   │   │               │   ├── HasLifecycleCallbacksTest.php
│   │   │   │   │               │   ├── IdTest.php
│   │   │   │   │               │   ├── IdentifiersTest.php
│   │   │   │   │               │   ├── IndexesTest.php
│   │   │   │   │               │   ├── InheritanceTest.php
│   │   │   │   │               │   ├── LifecycleTest.php
│   │   │   │   │               │   ├── LockTest.php
│   │   │   │   │               │   ├── MapReduceTest.php
│   │   │   │   │               │   ├── MappedSuperclassTest.php
│   │   │   │   │               │   ├── MemoryUsageTest.php
│   │   │   │   │               │   ├── NestedCollectionsTest.php
│   │   │   │   │               │   ├── NestedDocumentsTest.php
│   │   │   │   │               │   ├── OrphanRemovalEmbedTest.php
│   │   │   │   │               │   ├── OrphanRemovalTest.php
│   │   │   │   │               │   ├── OwningAndInverseReferencesTest.php
│   │   │   │   │               │   ├── PersistentCollectionCloneTest.php
│   │   │   │   │               │   ├── PersistingTest.php
│   │   │   │   │               │   ├── PrePersistTest.php
│   │   │   │   │               │   ├── QueryTest.php
│   │   │   │   │               │   ├── RawTypeTest.php
│   │   │   │   │               │   ├── ReadPreferenceTest.php
│   │   │   │   │               │   ├── ReferenceDiscriminatorsTest.php
│   │   │   │   │               │   ├── ReferenceEmbeddedDocumentsTest.php
│   │   │   │   │               │   ├── ReferencePrimerTest.php
│   │   │   │   │               │   ├── ReferenceRepositoryMethodTest.php
│   │   │   │   │               │   ├── ReferencesTest.php
│   │   │   │   │               │   ├── RemoveTest.php
│   │   │   │   │               │   ├── RepositoriesTest.php
│   │   │   │   │               │   ├── RequireIndexesTest.php
│   │   │   │   │               │   ├── ShardKeyTest.php
│   │   │   │   │               │   ├── SimpleReferencesTest.php
│   │   │   │   │               │   ├── SimpleTest.php
│   │   │   │   │               │   ├── SlaveOkayTest.php
│   │   │   │   │               │   ├── SplObjectHashCollisionsTest.php
│   │   │   │   │               │   ├── TestTargetDocument.php
│   │   │   │   │               │   ├── Ticket
│   │   │   │   │               │   │   ├── GH1011Test.php
│   │   │   │   │               │   │   ├── GH1017Test.php
│   │   │   │   │               │   │   ├── GH1058Test.php
│   │   │   │   │               │   │   ├── GH1107Test.php
│   │   │   │   │               │   │   ├── GH1117Test.php
│   │   │   │   │               │   │   ├── GH1132Test.php
│   │   │   │   │               │   │   ├── GH1138Test.php
│   │   │   │   │               │   │   ├── GH1152Test.php
│   │   │   │   │               │   │   ├── GH1225Test.php
│   │   │   │   │               │   │   ├── GH1229Test.php
│   │   │   │   │               │   │   ├── GH1232Test.php
│   │   │   │   │               │   │   ├── GH1275Test.php
│   │   │   │   │               │   │   ├── GH1294Test.php
│   │   │   │   │               │   │   ├── GH1346Test.php
│   │   │   │   │               │   │   ├── GH1418Test.php
│   │   │   │   │               │   │   ├── GH1428Test.php
│   │   │   │   │               │   │   ├── GH1435
│   │   │   │   │               │   │   │   ├── Doctrine.ODM.MongoDB.Tests.GH1435Document.dcm.yml
│   │   │   │   │               │   │   │   └── Doctrine.ODM.MongoDB.Tests.GH1435DocumentIncrement.dcm.yml
│   │   │   │   │               │   │   ├── GH1435Test.php
│   │   │   │   │               │   │   ├── GH1468Test.php
│   │   │   │   │               │   │   ├── GH1525Test.php
│   │   │   │   │               │   │   ├── GH232Test.php
│   │   │   │   │               │   │   ├── GH245Test.php
│   │   │   │   │               │   │   ├── GH267Test.php
│   │   │   │   │               │   │   ├── GH301Test.php
│   │   │   │   │               │   │   ├── GH385Test.php
│   │   │   │   │               │   │   ├── GH389Test.php
│   │   │   │   │               │   │   ├── GH426Test.php
│   │   │   │   │               │   │   ├── GH435Test.php
│   │   │   │   │               │   │   ├── GH453Test.php
│   │   │   │   │               │   │   ├── GH467Test.php
│   │   │   │   │               │   │   ├── GH499Test.php
│   │   │   │   │               │   │   ├── GH520Test.php
│   │   │   │   │               │   │   ├── GH529Test.php
│   │   │   │   │               │   │   ├── GH560Test.php
│   │   │   │   │               │   │   ├── GH561Test.php
│   │   │   │   │               │   │   ├── GH566Test.php
│   │   │   │   │               │   │   ├── GH567Test.php
│   │   │   │   │               │   │   ├── GH580Test.php
│   │   │   │   │               │   │   ├── GH593Test.php
│   │   │   │   │               │   │   ├── GH596Test.php
│   │   │   │   │               │   │   ├── GH597Test.php
│   │   │   │   │               │   │   ├── GH602Test.php
│   │   │   │   │               │   │   ├── GH611Test.php
│   │   │   │   │               │   │   ├── GH628Test.php
│   │   │   │   │               │   │   ├── GH665Test.php
│   │   │   │   │               │   │   ├── GH683Test.php
│   │   │   │   │               │   │   ├── GH774
│   │   │   │   │               │   │   │   ├── Doctrine.ODM.MongoDB.Tests.GH774AbstractThread.dcm.xml
│   │   │   │   │               │   │   │   └── Doctrine.ODM.MongoDB.Tests.GH774Thread.dcm.xml
│   │   │   │   │               │   │   ├── GH774Test.php
│   │   │   │   │               │   │   ├── GH788Test.php
│   │   │   │   │               │   │   ├── GH816Test.php
│   │   │   │   │               │   │   ├── GH832Test.php
│   │   │   │   │               │   │   ├── GH850Test.php
│   │   │   │   │               │   │   ├── GH852Test.php
│   │   │   │   │               │   │   ├── GH878Test.php
│   │   │   │   │               │   │   ├── GH880Test.php
│   │   │   │   │               │   │   ├── GH897Test.php
│   │   │   │   │               │   │   ├── GH909Test.php
│   │   │   │   │               │   │   ├── GH921Test.php
│   │   │   │   │               │   │   ├── GH927Test.php
│   │   │   │   │               │   │   ├── GH928Test.php
│   │   │   │   │               │   │   ├── GH936Test.php
│   │   │   │   │               │   │   ├── GH942Test.php
│   │   │   │   │               │   │   ├── GH944Test.php
│   │   │   │   │               │   │   ├── GH971Test.php
│   │   │   │   │               │   │   ├── GH977Test.php
│   │   │   │   │               │   │   ├── GH978Test.php
│   │   │   │   │               │   │   ├── GH999Test.php
│   │   │   │   │               │   │   ├── MODM116Test.php
│   │   │   │   │               │   │   ├── MODM117Test.php
│   │   │   │   │               │   │   ├── MODM140Test.php
│   │   │   │   │               │   │   ├── MODM160Test.php
│   │   │   │   │               │   │   ├── MODM166Test.php
│   │   │   │   │               │   │   ├── MODM167Test.php
│   │   │   │   │               │   │   ├── MODM29Test.php
│   │   │   │   │               │   │   ├── MODM42
│   │   │   │   │               │   │   │   ├── test1.txt
│   │   │   │   │               │   │   │   └── test2.txt
│   │   │   │   │               │   │   ├── MODM42Test.php
│   │   │   │   │               │   │   ├── MODM43Test.php
│   │   │   │   │               │   │   ├── MODM45Test.php
│   │   │   │   │               │   │   ├── MODM46Test.php
│   │   │   │   │               │   │   ├── MODM47Test.php
│   │   │   │   │               │   │   ├── MODM48Test.php
│   │   │   │   │               │   │   ├── MODM50
│   │   │   │   │               │   │   │   └── test.txt
│   │   │   │   │               │   │   ├── MODM50Test.php
│   │   │   │   │               │   │   ├── MODM52Test.php
│   │   │   │   │               │   │   ├── MODM56Test.php
│   │   │   │   │               │   │   ├── MODM62Test.php
│   │   │   │   │               │   │   ├── MODM65Test.php
│   │   │   │   │               │   │   ├── MODM66Test.php
│   │   │   │   │               │   │   ├── MODM67Test.php
│   │   │   │   │               │   │   ├── MODM70Test.php
│   │   │   │   │               │   │   ├── MODM72Test.php
│   │   │   │   │               │   │   ├── MODM76Test.php
│   │   │   │   │               │   │   ├── MODM81Test.php
│   │   │   │   │               │   │   ├── MODM83Test.php
│   │   │   │   │               │   │   ├── MODM88Test.php
│   │   │   │   │               │   │   ├── MODM90Test.php
│   │   │   │   │               │   │   ├── MODM91Test.php
│   │   │   │   │               │   │   ├── MODM92Test.php
│   │   │   │   │               │   │   └── MODM95Test.php
│   │   │   │   │               │   ├── UpsertTest.php
│   │   │   │   │               │   ├── VersionTest.php
│   │   │   │   │               │   └── file.txt
│   │   │   │   │               ├── HydratorTest.php
│   │   │   │   │               ├── Mapping
│   │   │   │   │               │   ├── AbstractMappingDriverTest.php
│   │   │   │   │               │   ├── AnnotationDriverTest.php
│   │   │   │   │               │   ├── BasicInheritanceMappingTest.php
│   │   │   │   │               │   ├── ClassMetadataFactoryTest.php
│   │   │   │   │               │   ├── ClassMetadataInfoTest.php
│   │   │   │   │               │   ├── ClassMetadataLoadEventTest.php
│   │   │   │   │               │   ├── ClassMetadataTest.php
│   │   │   │   │               │   ├── Documents
│   │   │   │   │               │   │   └── GlobalNamespaceDocument.php
│   │   │   │   │               │   ├── Driver
│   │   │   │   │               │   │   ├── AbstractDriverTest.php
│   │   │   │   │               │   │   ├── XmlDriverTest.php
│   │   │   │   │               │   │   ├── YamlDriverTest.php
│   │   │   │   │               │   │   └── fixtures
│   │   │   │   │               │   │       ├── EmbeddedDocument.php
│   │   │   │   │               │   │       ├── InvalidPartialFilterDocument.php
│   │   │   │   │               │   │       ├── PartialFilterDocument.php
│   │   │   │   │               │   │       ├── User.php
│   │   │   │   │               │   │       ├── xml
│   │   │   │   │               │   │       │   ├── TestDocuments.EmbeddedDocument.dcm.xml
│   │   │   │   │               │   │       │   ├── TestDocuments.InvalidPartialFilterDocument.dcm.xml
│   │   │   │   │               │   │       │   ├── TestDocuments.PartialFilterDocument.dcm.xml
│   │   │   │   │               │   │       │   ├── TestDocuments.User.dcm.xml
│   │   │   │   │               │   │       │   ├── TestDocuments.UserCustomIdGenerator.dcm.xml
│   │   │   │   │               │   │       │   └── TestDocuments.UserNonStringOptions.dcm.xml
│   │   │   │   │               │   │       └── yaml
│   │   │   │   │               │   │           ├── TestDocuments.EmbeddedDocument.dcm.yml
│   │   │   │   │               │   │           ├── TestDocuments.PartialFilterDocument.dcm.yml
│   │   │   │   │               │   │           └── TestDocuments.User.dcm.yml
│   │   │   │   │               │   ├── ShardKeyInheritanceMappingTest.php
│   │   │   │   │               │   ├── Symfony
│   │   │   │   │               │   │   ├── AbstractDriverTest.php
│   │   │   │   │               │   │   ├── XmlDriverTest.php
│   │   │   │   │               │   │   └── YamlDriverTest.php
│   │   │   │   │               │   ├── XmlMappingDriverTest.php
│   │   │   │   │               │   ├── YamlMappingDriverTest.php
│   │   │   │   │               │   ├── xml
│   │   │   │   │               │   │   └── Doctrine.ODM.MongoDB.Tests.Mapping.AbstractMappingDriverUser.dcm.xml
│   │   │   │   │               │   └── yaml
│   │   │   │   │               │       ├── Doctrine.ODM.MongoDB.Tests.Mapping.AbstractMappingDriverAlternateUser.dcm.yml
│   │   │   │   │               │       └── Doctrine.ODM.MongoDB.Tests.Mapping.AbstractMappingDriverUser.dcm.yml
│   │   │   │   │               ├── Mocks
│   │   │   │   │               │   ├── ClassMetadataMock.php
│   │   │   │   │               │   ├── ConnectionMock.php
│   │   │   │   │               │   ├── DocumentManagerMock.php
│   │   │   │   │               │   ├── DocumentPersisterMock.php
│   │   │   │   │               │   ├── MetadataDriverMock.php
│   │   │   │   │               │   ├── PreUpdateListenerMock.php
│   │   │   │   │               │   └── UnitOfWorkMock.php
│   │   │   │   │               ├── MongoCollectionTest.php
│   │   │   │   │               ├── Performance
│   │   │   │   │               │   ├── HydrationPerformanceTest.php
│   │   │   │   │               │   ├── InsertPerformanceTest.php
│   │   │   │   │               │   ├── MemoryUsageTest.php
│   │   │   │   │               │   └── UnitOfWorkPerformanceTest.php
│   │   │   │   │               ├── PersistentCollection
│   │   │   │   │               │   ├── CollNoReturnType.php
│   │   │   │   │               │   ├── CollWithNullableReturnType.php
│   │   │   │   │               │   ├── CollWithReturnType.php
│   │   │   │   │               │   └── DefaultPersistentCollectionGeneratorTest.php
│   │   │   │   │               ├── PersistentCollectionTest.php
│   │   │   │   │               ├── Persisters
│   │   │   │   │               │   ├── DereferenceTest.php
│   │   │   │   │               │   ├── DocumentPersisterFilterTest.php
│   │   │   │   │               │   ├── DocumentPersisterGetShardKeyQueryTest.php
│   │   │   │   │               │   └── PersistenceBuilderTest.php
│   │   │   │   │               ├── Query
│   │   │   │   │               │   ├── BuilderTest.php
│   │   │   │   │               │   ├── CriteriaMergerTest.php
│   │   │   │   │               │   ├── ExprTest.php
│   │   │   │   │               │   ├── FieldExtractorTest.php
│   │   │   │   │               │   ├── Filter
│   │   │   │   │               │   │   ├── BsonFilterTest.php
│   │   │   │   │               │   │   └── Filter.php
│   │   │   │   │               │   ├── FilterCollectionTest.php
│   │   │   │   │               │   └── QueryExpressionVisitorTest.php
│   │   │   │   │               ├── QueryLogger.php
│   │   │   │   │               ├── QueryTest.php
│   │   │   │   │               ├── SchemaManagerTest.php
│   │   │   │   │               ├── Tools
│   │   │   │   │               │   ├── DocumentGeneratorTest.php
│   │   │   │   │               │   ├── DocumentRepositoryGeneratorTest.php
│   │   │   │   │               │   ├── GH1299
│   │   │   │   │               │   │   ├── BaseUser.php
│   │   │   │   │               │   │   └── GH1299User.php
│   │   │   │   │               │   ├── GH297
│   │   │   │   │               │   │   ├── Address.php
│   │   │   │   │               │   │   ├── AddressTrait.php
│   │   │   │   │               │   │   ├── Admin.php
│   │   │   │   │               │   │   └── User.php
│   │   │   │   │               │   └── ResolveTargetDocumentListenerTest.php
│   │   │   │   │               ├── Types
│   │   │   │   │               │   ├── DateTypeTest.php
│   │   │   │   │               │   ├── IdTypeTest.php
│   │   │   │   │               │   ├── InvalidValueExceptionTest.php
│   │   │   │   │               │   └── TypeTest.php
│   │   │   │   │               └── UnitOfWorkTest.php
│   │   │   │   ├── Documents
│   │   │   │   │   ├── Account.php
│   │   │   │   │   ├── Address.php
│   │   │   │   │   ├── Agent.php
│   │   │   │   │   ├── Album.php
│   │   │   │   │   ├── Article.php
│   │   │   │   │   ├── Bars
│   │   │   │   │   │   ├── Bar.php
│   │   │   │   │   │   └── Location.php
│   │   │   │   │   ├── BaseCategory.php
│   │   │   │   │   ├── BaseCategoryRepository.php
│   │   │   │   │   ├── BaseDocument.php
│   │   │   │   │   ├── BaseEmployee.php
│   │   │   │   │   ├── BlogPost.php
│   │   │   │   │   ├── Book.php
│   │   │   │   │   ├── BrowseNode.php
│   │   │   │   │   ├── Cart.php
│   │   │   │   │   ├── Category.php
│   │   │   │   │   ├── Chapter.php
│   │   │   │   │   ├── CmsAddress.php
│   │   │   │   │   ├── CmsArticle.php
│   │   │   │   │   ├── CmsComment.php
│   │   │   │   │   ├── CmsContent.php
│   │   │   │   │   ├── CmsGroup.php
│   │   │   │   │   ├── CmsPage.php
│   │   │   │   │   ├── CmsPhonenumber.php
│   │   │   │   │   ├── CmsProduct.php
│   │   │   │   │   ├── CmsUser.php
│   │   │   │   │   ├── Comment.php
│   │   │   │   │   ├── CommentRepository.php
│   │   │   │   │   ├── CustomRepository
│   │   │   │   │   │   ├── Document.php
│   │   │   │   │   │   └── Repository.php
│   │   │   │   │   ├── CustomUser.php
│   │   │   │   │   ├── Customer.php
│   │   │   │   │   ├── Developer.php
│   │   │   │   │   ├── Ecommerce
│   │   │   │   │   │   ├── ConfigurableProduct.php
│   │   │   │   │   │   ├── Currency.php
│   │   │   │   │   │   ├── Money.php
│   │   │   │   │   │   ├── Option.php
│   │   │   │   │   │   └── StockItem.php
│   │   │   │   │   ├── Employee.php
│   │   │   │   │   ├── Event.php
│   │   │   │   │   ├── Feature.php
│   │   │   │   │   ├── File.php
│   │   │   │   │   ├── ForumAvatar.php
│   │   │   │   │   ├── ForumUser.php
│   │   │   │   │   ├── FriendUser.php
│   │   │   │   │   ├── Functional
│   │   │   │   │   │   ├── EmbedNamed.php
│   │   │   │   │   │   ├── Embedded.php
│   │   │   │   │   │   ├── EmbeddedTestLevel0.php
│   │   │   │   │   │   ├── EmbeddedTestLevel0b.php
│   │   │   │   │   │   ├── EmbeddedTestLevel1.php
│   │   │   │   │   │   ├── EmbeddedTestLevel2.php
│   │   │   │   │   │   ├── EmbeddedWhichReferences.php
│   │   │   │   │   │   ├── FavoritesUser.php
│   │   │   │   │   │   ├── NotAnnotatedDocument.php
│   │   │   │   │   │   ├── NotSaved.php
│   │   │   │   │   │   ├── NotSavedEmbedded.php
│   │   │   │   │   │   ├── NullFieldValues.php
│   │   │   │   │   │   ├── PreUpdateTestProduct.php
│   │   │   │   │   │   ├── PreUpdateTestSellable.php
│   │   │   │   │   │   ├── PreUpdateTestSeller.php
│   │   │   │   │   │   ├── Reference.php
│   │   │   │   │   │   ├── SameCollection1.php
│   │   │   │   │   │   ├── SameCollection2.php
│   │   │   │   │   │   ├── SameCollection3.php
│   │   │   │   │   │   ├── SimpleEmbedAndReference.php
│   │   │   │   │   │   ├── Ticket
│   │   │   │   │   │   │   ├── GH683
│   │   │   │   │   │   │   │   ├── AbstractEmbedded.php
│   │   │   │   │   │   │   │   ├── EmbeddedSubDocument1.php
│   │   │   │   │   │   │   │   ├── EmbeddedSubDocument2.php
│   │   │   │   │   │   │   │   └── ParentDocument.php
│   │   │   │   │   │   │   └── MODM160
│   │   │   │   │   │   │       ├── EmbedManyInArrayCollectionLevel0.php
│   │   │   │   │   │   │       ├── EmbedManyInArrayCollectionLevel1.php
│   │   │   │   │   │   │       ├── EmbedManyInArrayLevel0.php
│   │   │   │   │   │   │       ├── EmbedManyInArrayLevel1.php
│   │   │   │   │   │   │       ├── EmbedOneLevel0.php
│   │   │   │   │   │   │       ├── EmbedOneLevel1.php
│   │   │   │   │   │   │       └── MODM160Level2.php
│   │   │   │   │   │   ├── VirtualHost.php
│   │   │   │   │   │   └── VirtualHostDirective.php
│   │   │   │   │   ├── Group.php
│   │   │   │   │   ├── GuestServer.php
│   │   │   │   │   ├── IdentifiedChapter.php
│   │   │   │   │   ├── Issue.php
│   │   │   │   │   ├── Manager.php
│   │   │   │   │   ├── Message.php
│   │   │   │   │   ├── OtherSubProject.php
│   │   │   │   │   ├── Page.php
│   │   │   │   │   ├── Phonebook.php
│   │   │   │   │   ├── Phonenumber.php
│   │   │   │   │   ├── Product.php
│   │   │   │   │   ├── Profile.php
│   │   │   │   │   ├── ProfileNotify.php
│   │   │   │   │   ├── Project.php
│   │   │   │   │   ├── ReferenceUser.php
│   │   │   │   │   ├── Server.php
│   │   │   │   │   ├── Sharded
│   │   │   │   │   │   ├── ShardedOne.php
│   │   │   │   │   │   ├── ShardedOneWithDifferentKey.php
│   │   │   │   │   │   └── ShardedUser.php
│   │   │   │   │   ├── SimpleReferenceUser.php
│   │   │   │   │   ├── Song.php
│   │   │   │   │   ├── SpecialUser.php
│   │   │   │   │   ├── Strategy.php
│   │   │   │   │   ├── SubCategory.php
│   │   │   │   │   ├── SubProject.php
│   │   │   │   │   ├── Tag.php
│   │   │   │   │   ├── Task.php
│   │   │   │   │   ├── Tournament
│   │   │   │   │   │   ├── Participant.php
│   │   │   │   │   │   ├── ParticipantSolo.php
│   │   │   │   │   │   ├── ParticipantTeam.php
│   │   │   │   │   │   ├── Tournament.php
│   │   │   │   │   │   ├── TournamentFootball.php
│   │   │   │   │   │   └── TournamentTennis.php
│   │   │   │   │   ├── User.php
│   │   │   │   │   ├── UserUpsert.php
│   │   │   │   │   ├── UserUpsertChild.php
│   │   │   │   │   ├── UserUpsertIdStrategyNone.php
│   │   │   │   │   ├── VersionedDocument.php
│   │   │   │   │   └── VersionedUser.php
│   │   │   │   ├── Hydrators
│   │   │   │   ├── NativePhpunitTask.php
│   │   │   │   ├── Proxies
│   │   │   │   ├── Stubs
│   │   │   │   │   └── DocumentManager.php
│   │   │   │   ├── bootstrap.php
│   │   │   │   └── sharded.json
│   │   │   └── tools
│   │   │       └── sandbox
│   │   │           ├── Documents
│   │   │           │   ├── Account.php
│   │   │           │   ├── Address.php
│   │   │           │   ├── Phonenumber.php
│   │   │           │   ├── User.php
│   │   │           │   └── UserRepository.php
│   │   │           ├── cli-config.php
│   │   │           ├── config.php
│   │   │           ├── index.php
│   │   │           ├── mongodb
│   │   │           └── mongodb.php
│   │   ├── mongodb-odm-bundle
│   │   │   ├── CHANGELOG-3.0.md
│   │   │   ├── CHANGELOG-3.1.md
│   │   │   ├── CHANGELOG-3.2.md
│   │   │   ├── CacheWarmer
│   │   │   │   ├── HydratorCacheWarmer.php
│   │   │   │   ├── PersistentCollectionCacheWarmer.php
│   │   │   │   └── ProxyCacheWarmer.php
│   │   │   ├── Command
│   │   │   │   ├── ClearMetadataCacheDoctrineODMCommand.php
│   │   │   │   ├── CreateSchemaDoctrineODMCommand.php
│   │   │   │   ├── DoctrineODMCommand.php
│   │   │   │   ├── DropSchemaDoctrineODMCommand.php
│   │   │   │   ├── GenerateDocumentsDoctrineODMCommand.php
│   │   │   │   ├── GenerateHydratorsDoctrineODMCommand.php
│   │   │   │   ├── GenerateProxiesDoctrineODMCommand.php
│   │   │   │   ├── GenerateRepositoriesDoctrineODMCommand.php
│   │   │   │   ├── InfoDoctrineODMCommand.php
│   │   │   │   ├── LoadDataFixturesDoctrineODMCommand.php
│   │   │   │   ├── QueryDoctrineODMCommand.php
│   │   │   │   ├── TailCursorDoctrineODMCommand.php
│   │   │   │   └── UpdateSchemaDoctrineODMCommand.php
│   │   │   ├── Cursor
│   │   │   │   └── TailableCursorProcessorInterface.php
│   │   │   ├── DataCollector
│   │   │   │   ├── PrettyDataCollector.php
│   │   │   │   └── StandardDataCollector.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── Compiler
│   │   │   │   │   ├── CreateHydratorDirectoryPass.php
│   │   │   │   │   ├── CreateProxyDirectoryPass.php
│   │   │   │   │   └── DoctrineMongoDBMappingsPass.php
│   │   │   │   ├── Configuration.php
│   │   │   │   └── DoctrineMongoDBExtension.php
│   │   │   ├── DoctrineMongoDBBundle.php
│   │   │   ├── Form
│   │   │   │   ├── ChoiceList
│   │   │   │   │   └── MongoDBQueryBuilderLoader.php
│   │   │   │   ├── DoctrineMongoDBExtension.php
│   │   │   │   ├── DoctrineMongoDBTypeGuesser.php
│   │   │   │   └── Type
│   │   │   │       └── DocumentType.php
│   │   │   ├── LICENSE
│   │   │   ├── Logger
│   │   │   │   ├── AggregateLogger.php
│   │   │   │   ├── Logger.php
│   │   │   │   └── LoggerInterface.php
│   │   │   ├── ManagerConfigurator.php
│   │   │   ├── ManagerRegistry.php
│   │   │   ├── Mapping
│   │   │   │   └── Driver
│   │   │   │       ├── XmlDriver.php
│   │   │   │       └── YamlDriver.php
│   │   │   ├── README.markdown
│   │   │   ├── Resources
│   │   │   │   ├── config
│   │   │   │   │   ├── mongodb.xml
│   │   │   │   │   └── schema
│   │   │   │   │       └── mongodb-1.0.xsd
│   │   │   │   ├── doc
│   │   │   │   │   ├── config.rst
│   │   │   │   │   ├── form.rst
│   │   │   │   │   └── index.rst
│   │   │   │   └── views
│   │   │   │       └── Collector
│   │   │   │           ├── icon.svg
│   │   │   │           └── mongodb.html.twig
│   │   │   ├── Tests
│   │   │   │   ├── CacheWarmer
│   │   │   │   │   ├── HydratorCacheWarmerTest.php
│   │   │   │   │   ├── PersistentCollectionCacheWarmerTest.php
│   │   │   │   │   └── ProxyCacheWarmerTest.php
│   │   │   │   ├── Command
│   │   │   │   │   └── LoadDataFixturesDoctrineODMCommandTest.php
│   │   │   │   ├── ContainerTest.php
│   │   │   │   ├── DataCollector
│   │   │   │   │   ├── PrettyDataCollectorTest.php
│   │   │   │   │   └── StandardDataCollectorTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   ├── AbstractMongoDBExtensionTest.php
│   │   │   │   │   ├── ConfigurationTest.php
│   │   │   │   │   ├── DoctrineMongoDBExtensionTest.php
│   │   │   │   │   ├── Fixtures
│   │   │   │   │   │   ├── Bundles
│   │   │   │   │   │   │   ├── AnnotationsBundle
│   │   │   │   │   │   │   │   ├── AnnotationsBundle.php
│   │   │   │   │   │   │   │   └── Document
│   │   │   │   │   │   │   │       └── Test.php
│   │   │   │   │   │   │   ├── XmlBundle
│   │   │   │   │   │   │   │   ├── Document
│   │   │   │   │   │   │   │   │   └── Test.php
│   │   │   │   │   │   │   │   ├── Resources
│   │   │   │   │   │   │   │   │   └── config
│   │   │   │   │   │   │   │   │       └── doctrine
│   │   │   │   │   │   │   │   │           └── mapping.mongodb.xml
│   │   │   │   │   │   │   │   └── XmlBundle.php
│   │   │   │   │   │   │   └── YamlBundle
│   │   │   │   │   │   │       ├── Document
│   │   │   │   │   │   │       │   └── Test.php
│   │   │   │   │   │   │       ├── Resources
│   │   │   │   │   │   │       │   └── config
│   │   │   │   │   │   │       │       └── doctrine
│   │   │   │   │   │   │       │           └── mapping.mongodb.yml
│   │   │   │   │   │   │       └── YamlBundle.php
│   │   │   │   │   │   └── config
│   │   │   │   │   │       ├── xml
│   │   │   │   │   │       │   ├── exception.xml
│   │   │   │   │   │       │   ├── full.xml
│   │   │   │   │   │       │   ├── mongodb_service_multiple_connections.xml
│   │   │   │   │   │       │   ├── mongodb_service_simple_single_connection.xml
│   │   │   │   │   │       │   ├── mongodb_service_single_connection.xml
│   │   │   │   │   │       │   ├── odm_filters.xml
│   │   │   │   │   │       │   ├── odm_imports.xml
│   │   │   │   │   │       │   ├── odm_imports_import.xml
│   │   │   │   │   │       │   └── odm_resolve_target_document.xml
│   │   │   │   │   │       └── yml
│   │   │   │   │   │           ├── exception.yml
│   │   │   │   │   │           ├── full.yml
│   │   │   │   │   │           ├── mongodb_service_multiple_connections.yml
│   │   │   │   │   │           ├── mongodb_service_simple_single_connection.yml
│   │   │   │   │   │           ├── mongodb_service_single_connection.yml
│   │   │   │   │   │           ├── odm_filters.yml
│   │   │   │   │   │           ├── odm_imports.yml
│   │   │   │   │   │           ├── odm_imports_import.yml
│   │   │   │   │   │           └── odm_resolve_target_document.yml
│   │   │   │   │   ├── XmlMongoDBExtensionTest.php
│   │   │   │   │   └── YamlMongoDBExtensionTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── Cache
│   │   │   │   │   │   └── Collections.php
│   │   │   │   │   ├── Form
│   │   │   │   │   │   ├── Category.php
│   │   │   │   │   │   ├── Document.php
│   │   │   │   │   │   └── Guesser.php
│   │   │   │   │   ├── Security
│   │   │   │   │   │   └── User.php
│   │   │   │   │   └── Validator
│   │   │   │   │       └── Document.php
│   │   │   │   ├── Form
│   │   │   │   │   └── Type
│   │   │   │   │       ├── DocumentTypeTest.php
│   │   │   │   │       ├── GuesserTestType.php
│   │   │   │   │       └── TypeGuesserTest.php
│   │   │   │   ├── Logger
│   │   │   │   │   └── LoggerTest.php
│   │   │   │   ├── Mapping
│   │   │   │   │   └── Driver
│   │   │   │   │       ├── AbstractDriverTest.php
│   │   │   │   │       ├── Fixtures
│   │   │   │   │       │   ├── xml
│   │   │   │   │       │   │   ├── Foo.Bar.mongodb.xml
│   │   │   │   │       │   │   └── Foo.mongodb.xml
│   │   │   │   │       │   └── yml
│   │   │   │   │       │       ├── Foo.Bar.mongodb.yml
│   │   │   │   │       │       └── Foo.mongodb.yml
│   │   │   │   │       ├── XmlDriverTest.php
│   │   │   │   │       └── YamlDriverTest.php
│   │   │   │   ├── TestCase.php
│   │   │   │   └── bootstrap.php
│   │   │   ├── Validator
│   │   │   │   └── Constraints
│   │   │   │       └── Unique.php
│   │   │   ├── composer.json
│   │   │   └── phpunit.xml.dist
│   │   └── orm
│   │       ├── LICENSE
│   │       ├── README.markdown
│   │       ├── SECURITY.md
│   │       ├── UPGRADE.md
│   │       ├── bin
│   │       │   ├── doctrine
│   │       │   ├── doctrine-pear.php
│   │       │   ├── doctrine.bat
│   │       │   └── doctrine.php
│   │       ├── composer.json
│   │       ├── docs
│   │       │   ├── LICENSE.md
│   │       │   ├── README.md
│   │       │   ├── bin
│   │       │   │   ├── generate-docs.sh
│   │       │   │   └── install-dependencies.sh
│   │       │   └── en
│   │       │       ├── Makefile
│   │       │       ├── _exts
│   │       │       │   └── configurationblock.py
│   │       │       ├── _theme
│   │       │       ├── changelog
│   │       │       │   └── migration_2_5.rst
│   │       │       ├── conf.py
│   │       │       ├── cookbook
│   │       │       │   ├── advanced-field-value-conversion-using-custom-mapping-types.rst
│   │       │       │   ├── aggregate-fields.rst
│   │       │       │   ├── custom-mapping-types.rst
│   │       │       │   ├── decorator-pattern.rst
│   │       │       │   ├── dql-custom-walkers.rst
│   │       │       │   ├── dql-user-defined-functions.rst
│   │       │       │   ├── entities-in-session.rst
│   │       │       │   ├── implementing-arrayaccess-for-domain-objects.rst
│   │       │       │   ├── implementing-the-notify-changetracking-policy.rst
│   │       │       │   ├── implementing-wakeup-or-clone.rst
│   │       │       │   ├── integrating-with-codeigniter.rst
│   │       │       │   ├── mysql-enums.rst
│   │       │       │   ├── resolve-target-entity-listener.rst
│   │       │       │   ├── sql-table-prefixes.rst
│   │       │       │   ├── strategy-cookbook-introduction.rst
│   │       │       │   ├── validation-of-entities.rst
│   │       │       │   └── working-with-datetime.rst
│   │       │       ├── index.rst
│   │       │       ├── make.bat
│   │       │       ├── reference
│   │       │       │   ├── advanced-configuration.rst
│   │       │       │   ├── annotations-reference.rst
│   │       │       │   ├── architecture.rst
│   │       │       │   ├── association-mapping.rst
│   │       │       │   ├── basic-mapping.rst
│   │       │       │   ├── batch-processing.rst
│   │       │       │   ├── best-practices.rst
│   │       │       │   ├── caching.rst
│   │       │       │   ├── change-tracking-policies.rst
│   │       │       │   ├── configuration.rst
│   │       │       │   ├── dql-doctrine-query-language.rst
│   │       │       │   ├── events.rst
│   │       │       │   ├── faq.rst
│   │       │       │   ├── filters.rst
│   │       │       │   ├── improving-performance.rst
│   │       │       │   ├── inheritance-mapping.rst
│   │       │       │   ├── installation.rst
│   │       │       │   ├── limitations-and-known-issues.rst
│   │       │       │   ├── metadata-drivers.rst
│   │       │       │   ├── namingstrategy.rst
│   │       │       │   ├── native-sql.rst
│   │       │       │   ├── partial-objects.rst
│   │       │       │   ├── php-mapping.rst
│   │       │       │   ├── query-builder.rst
│   │       │       │   ├── second-level-cache.rst
│   │       │       │   ├── security.rst
│   │       │       │   ├── tools.rst
│   │       │       │   ├── transactions-and-concurrency.rst
│   │       │       │   ├── unitofwork-associations.rst
│   │       │       │   ├── unitofwork.rst
│   │       │       │   ├── working-with-associations.rst
│   │       │       │   ├── working-with-objects.rst
│   │       │       │   ├── xml-mapping.rst
│   │       │       │   └── yaml-mapping.rst
│   │       │       ├── toc.rst
│   │       │       └── tutorials
│   │       │           ├── composite-primary-keys.rst
│   │       │           ├── embeddables.rst
│   │       │           ├── extra-lazy-associations.rst
│   │       │           ├── getting-started-database.rst
│   │       │           ├── getting-started-models.rst
│   │       │           ├── getting-started.rst
│   │       │           ├── ordered-associations.rst
│   │       │           ├── override-field-association-mappings-in-subclasses.rst
│   │       │           ├── pagination.rst
│   │       │           └── working-with-indexed-associations.rst
│   │       ├── doctrine-mapping.xsd
│   │       └── lib
│   │           ├── Doctrine
│   │           │   └── ORM
│   │           │       ├── AbstractQuery.php
│   │           │       ├── Cache
│   │           │       │   ├── AssociationCacheEntry.php
│   │           │       │   ├── CacheConfiguration.php
│   │           │       │   ├── CacheEntry.php
│   │           │       │   ├── CacheException.php
│   │           │       │   ├── CacheFactory.php
│   │           │       │   ├── CacheKey.php
│   │           │       │   ├── CollectionCacheEntry.php
│   │           │       │   ├── CollectionCacheKey.php
│   │           │       │   ├── CollectionHydrator.php
│   │           │       │   ├── ConcurrentRegion.php
│   │           │       │   ├── DefaultCache.php
│   │           │       │   ├── DefaultCacheFactory.php
│   │           │       │   ├── DefaultCollectionHydrator.php
│   │           │       │   ├── DefaultEntityHydrator.php
│   │           │       │   ├── DefaultQueryCache.php
│   │           │       │   ├── EntityCacheEntry.php
│   │           │       │   ├── EntityCacheKey.php
│   │           │       │   ├── EntityHydrator.php
│   │           │       │   ├── Lock.php
│   │           │       │   ├── LockException.php
│   │           │       │   ├── Logging
│   │           │       │   │   ├── CacheLogger.php
│   │           │       │   │   ├── CacheLoggerChain.php
│   │           │       │   │   └── StatisticsCacheLogger.php
│   │           │       │   ├── MultiGetRegion.php
│   │           │       │   ├── Persister
│   │           │       │   │   ├── CachedPersister.php
│   │           │       │   │   ├── Collection
│   │           │       │   │   │   ├── AbstractCollectionPersister.php
│   │           │       │   │   │   ├── CachedCollectionPersister.php
│   │           │       │   │   │   ├── NonStrictReadWriteCachedCollectionPersister.php
│   │           │       │   │   │   ├── ReadOnlyCachedCollectionPersister.php
│   │           │       │   │   │   └── ReadWriteCachedCollectionPersister.php
│   │           │       │   │   └── Entity
│   │           │       │   │       ├── AbstractEntityPersister.php
│   │           │       │   │       ├── CachedEntityPersister.php
│   │           │       │   │       ├── NonStrictReadWriteCachedEntityPersister.php
│   │           │       │   │       ├── ReadOnlyCachedEntityPersister.php
│   │           │       │   │       └── ReadWriteCachedEntityPersister.php
│   │           │       │   ├── QueryCache.php
│   │           │       │   ├── QueryCacheEntry.php
│   │           │       │   ├── QueryCacheKey.php
│   │           │       │   ├── QueryCacheValidator.php
│   │           │       │   ├── Region
│   │           │       │   │   ├── DefaultMultiGetRegion.php
│   │           │       │   │   ├── DefaultRegion.php
│   │           │       │   │   ├── FileLockRegion.php
│   │           │       │   │   └── UpdateTimestampCache.php
│   │           │       │   ├── Region.php
│   │           │       │   ├── RegionsConfiguration.php
│   │           │       │   ├── TimestampCacheEntry.php
│   │           │       │   ├── TimestampCacheKey.php
│   │           │       │   ├── TimestampQueryCacheValidator.php
│   │           │       │   └── TimestampRegion.php
│   │           │       ├── Cache.php
│   │           │       ├── Configuration.php
│   │           │       ├── Decorator
│   │           │       │   └── EntityManagerDecorator.php
│   │           │       ├── EntityManager.php
│   │           │       ├── EntityManagerInterface.php
│   │           │       ├── EntityNotFoundException.php
│   │           │       ├── EntityRepository.php
│   │           │       ├── Event
│   │           │       │   ├── LifecycleEventArgs.php
│   │           │       │   ├── ListenersInvoker.php
│   │           │       │   ├── LoadClassMetadataEventArgs.php
│   │           │       │   ├── OnClassMetadataNotFoundEventArgs.php
│   │           │       │   ├── OnClearEventArgs.php
│   │           │       │   ├── OnFlushEventArgs.php
│   │           │       │   ├── PostFlushEventArgs.php
│   │           │       │   ├── PreFlushEventArgs.php
│   │           │       │   └── PreUpdateEventArgs.php
│   │           │       ├── Events.php
│   │           │       ├── Id
│   │           │       │   ├── AbstractIdGenerator.php
│   │           │       │   ├── AssignedGenerator.php
│   │           │       │   ├── BigIntegerIdentityGenerator.php
│   │           │       │   ├── IdentityGenerator.php
│   │           │       │   ├── SequenceGenerator.php
│   │           │       │   ├── TableGenerator.php
│   │           │       │   └── UuidGenerator.php
│   │           │       ├── Internal
│   │           │       │   ├── CommitOrderCalculator.php
│   │           │       │   ├── Hydration
│   │           │       │   │   ├── AbstractHydrator.php
│   │           │       │   │   ├── ArrayHydrator.php
│   │           │       │   │   ├── HydrationException.php
│   │           │       │   │   ├── IterableResult.php
│   │           │       │   │   ├── ObjectHydrator.php
│   │           │       │   │   ├── ScalarHydrator.php
│   │           │       │   │   ├── SimpleObjectHydrator.php
│   │           │       │   │   └── SingleScalarHydrator.php
│   │           │       │   └── HydrationCompleteHandler.php
│   │           │       ├── LazyCriteriaCollection.php
│   │           │       ├── Mapping
│   │           │       │   ├── Annotation.php
│   │           │       │   ├── AnsiQuoteStrategy.php
│   │           │       │   ├── AssociationOverride.php
│   │           │       │   ├── AssociationOverrides.php
│   │           │       │   ├── AttributeOverride.php
│   │           │       │   ├── AttributeOverrides.php
│   │           │       │   ├── Builder
│   │           │       │   │   ├── AssociationBuilder.php
│   │           │       │   │   ├── ClassMetadataBuilder.php
│   │           │       │   │   ├── EmbeddedBuilder.php
│   │           │       │   │   ├── EntityListenerBuilder.php
│   │           │       │   │   ├── FieldBuilder.php
│   │           │       │   │   ├── ManyToManyAssociationBuilder.php
│   │           │       │   │   └── OneToManyAssociationBuilder.php
│   │           │       │   ├── Cache.php
│   │           │       │   ├── ChangeTrackingPolicy.php
│   │           │       │   ├── ClassMetadata.php
│   │           │       │   ├── ClassMetadataFactory.php
│   │           │       │   ├── ClassMetadataInfo.php
│   │           │       │   ├── Column.php
│   │           │       │   ├── ColumnResult.php
│   │           │       │   ├── CustomIdGenerator.php
│   │           │       │   ├── DefaultEntityListenerResolver.php
│   │           │       │   ├── DefaultNamingStrategy.php
│   │           │       │   ├── DefaultQuoteStrategy.php
│   │           │       │   ├── DiscriminatorColumn.php
│   │           │       │   ├── DiscriminatorMap.php
│   │           │       │   ├── Driver
│   │           │       │   │   ├── AnnotationDriver.php
│   │           │       │   │   ├── DatabaseDriver.php
│   │           │       │   │   ├── DoctrineAnnotations.php
│   │           │       │   │   ├── DriverChain.php
│   │           │       │   │   ├── PHPDriver.php
│   │           │       │   │   ├── SimplifiedXmlDriver.php
│   │           │       │   │   ├── SimplifiedYamlDriver.php
│   │           │       │   │   ├── StaticPHPDriver.php
│   │           │       │   │   ├── XmlDriver.php
│   │           │       │   │   └── YamlDriver.php
│   │           │       │   ├── Embeddable.php
│   │           │       │   ├── Embedded.php
│   │           │       │   ├── Entity.php
│   │           │       │   ├── EntityListenerResolver.php
│   │           │       │   ├── EntityListeners.php
│   │           │       │   ├── EntityResult.php
│   │           │       │   ├── FieldResult.php
│   │           │       │   ├── GeneratedValue.php
│   │           │       │   ├── HasLifecycleCallbacks.php
│   │           │       │   ├── Id.php
│   │           │       │   ├── Index.php
│   │           │       │   ├── InheritanceType.php
│   │           │       │   ├── JoinColumn.php
│   │           │       │   ├── JoinColumns.php
│   │           │       │   ├── JoinTable.php
│   │           │       │   ├── ManyToMany.php
│   │           │       │   ├── ManyToOne.php
│   │           │       │   ├── MappedSuperclass.php
│   │           │       │   ├── MappingException.php
│   │           │       │   ├── NamedNativeQueries.php
│   │           │       │   ├── NamedNativeQuery.php
│   │           │       │   ├── NamedQueries.php
│   │           │       │   ├── NamedQuery.php
│   │           │       │   ├── NamingStrategy.php
│   │           │       │   ├── OneToMany.php
│   │           │       │   ├── OneToOne.php
│   │           │       │   ├── OrderBy.php
│   │           │       │   ├── PostLoad.php
│   │           │       │   ├── PostPersist.php
│   │           │       │   ├── PostRemove.php
│   │           │       │   ├── PostUpdate.php
│   │           │       │   ├── PreFlush.php
│   │           │       │   ├── PrePersist.php
│   │           │       │   ├── PreRemove.php
│   │           │       │   ├── PreUpdate.php
│   │           │       │   ├── QuoteStrategy.php
│   │           │       │   ├── Reflection
│   │           │       │   │   └── ReflectionPropertiesGetter.php
│   │           │       │   ├── ReflectionEmbeddedProperty.php
│   │           │       │   ├── SequenceGenerator.php
│   │           │       │   ├── SqlResultSetMapping.php
│   │           │       │   ├── SqlResultSetMappings.php
│   │           │       │   ├── Table.php
│   │           │       │   ├── UnderscoreNamingStrategy.php
│   │           │       │   ├── UniqueConstraint.php
│   │           │       │   └── Version.php
│   │           │       ├── NativeQuery.php
│   │           │       ├── NoResultException.php
│   │           │       ├── NonUniqueResultException.php
│   │           │       ├── ORMException.php
│   │           │       ├── ORMInvalidArgumentException.php
│   │           │       ├── OptimisticLockException.php
│   │           │       ├── PersistentCollection.php
│   │           │       ├── Persisters
│   │           │       │   ├── Collection
│   │           │       │   │   ├── AbstractCollectionPersister.php
│   │           │       │   │   ├── CollectionPersister.php
│   │           │       │   │   ├── ManyToManyPersister.php
│   │           │       │   │   └── OneToManyPersister.php
│   │           │       │   ├── Entity
│   │           │       │   │   ├── AbstractEntityInheritancePersister.php
│   │           │       │   │   ├── BasicEntityPersister.php
│   │           │       │   │   ├── CachedPersisterContext.php
│   │           │       │   │   ├── EntityPersister.php
│   │           │       │   │   ├── JoinedSubclassPersister.php
│   │           │       │   │   └── SingleTablePersister.php
│   │           │       │   ├── PersisterException.php
│   │           │       │   ├── SqlExpressionVisitor.php
│   │           │       │   └── SqlValueVisitor.php
│   │           │       ├── PessimisticLockException.php
│   │           │       ├── Proxy
│   │           │       │   ├── Autoloader.php
│   │           │       │   ├── Proxy.php
│   │           │       │   └── ProxyFactory.php
│   │           │       ├── Query
│   │           │       │   ├── AST
│   │           │       │   │   ├── ASTException.php
│   │           │       │   │   ├── AggregateExpression.php
│   │           │       │   │   ├── ArithmeticExpression.php
│   │           │       │   │   ├── ArithmeticFactor.php
│   │           │       │   │   ├── ArithmeticTerm.php
│   │           │       │   │   ├── BetweenExpression.php
│   │           │       │   │   ├── CoalesceExpression.php
│   │           │       │   │   ├── CollectionMemberExpression.php
│   │           │       │   │   ├── ComparisonExpression.php
│   │           │       │   │   ├── ConditionalExpression.php
│   │           │       │   │   ├── ConditionalFactor.php
│   │           │       │   │   ├── ConditionalPrimary.php
│   │           │       │   │   ├── ConditionalTerm.php
│   │           │       │   │   ├── DeleteClause.php
│   │           │       │   │   ├── DeleteStatement.php
│   │           │       │   │   ├── EmptyCollectionComparisonExpression.php
│   │           │       │   │   ├── ExistsExpression.php
│   │           │       │   │   ├── FromClause.php
│   │           │       │   │   ├── Functions
│   │           │       │   │   │   ├── AbsFunction.php
│   │           │       │   │   │   ├── BitAndFunction.php
│   │           │       │   │   │   ├── BitOrFunction.php
│   │           │       │   │   │   ├── ConcatFunction.php
│   │           │       │   │   │   ├── CurrentDateFunction.php
│   │           │       │   │   │   ├── CurrentTimeFunction.php
│   │           │       │   │   │   ├── CurrentTimestampFunction.php
│   │           │       │   │   │   ├── DateAddFunction.php
│   │           │       │   │   │   ├── DateDiffFunction.php
│   │           │       │   │   │   ├── DateSubFunction.php
│   │           │       │   │   │   ├── FunctionNode.php
│   │           │       │   │   │   ├── IdentityFunction.php
│   │           │       │   │   │   ├── LengthFunction.php
│   │           │       │   │   │   ├── LocateFunction.php
│   │           │       │   │   │   ├── LowerFunction.php
│   │           │       │   │   │   ├── ModFunction.php
│   │           │       │   │   │   ├── SizeFunction.php
│   │           │       │   │   │   ├── SqrtFunction.php
│   │           │       │   │   │   ├── SubstringFunction.php
│   │           │       │   │   │   ├── TrimFunction.php
│   │           │       │   │   │   └── UpperFunction.php
│   │           │       │   │   ├── GeneralCaseExpression.php
│   │           │       │   │   ├── GroupByClause.php
│   │           │       │   │   ├── HavingClause.php
│   │           │       │   │   ├── IdentificationVariableDeclaration.php
│   │           │       │   │   ├── InExpression.php
│   │           │       │   │   ├── IndexBy.php
│   │           │       │   │   ├── InputParameter.php
│   │           │       │   │   ├── InstanceOfExpression.php
│   │           │       │   │   ├── Join.php
│   │           │       │   │   ├── JoinAssociationDeclaration.php
│   │           │       │   │   ├── JoinAssociationPathExpression.php
│   │           │       │   │   ├── JoinClassPathExpression.php
│   │           │       │   │   ├── JoinVariableDeclaration.php
│   │           │       │   │   ├── LikeExpression.php
│   │           │       │   │   ├── Literal.php
│   │           │       │   │   ├── NewObjectExpression.php
│   │           │       │   │   ├── Node.php
│   │           │       │   │   ├── NullComparisonExpression.php
│   │           │       │   │   ├── NullIfExpression.php
│   │           │       │   │   ├── OrderByClause.php
│   │           │       │   │   ├── OrderByItem.php
│   │           │       │   │   ├── ParenthesisExpression.php
│   │           │       │   │   ├── PartialObjectExpression.php
│   │           │       │   │   ├── PathExpression.php
│   │           │       │   │   ├── QuantifiedExpression.php
│   │           │       │   │   ├── RangeVariableDeclaration.php
│   │           │       │   │   ├── SelectClause.php
│   │           │       │   │   ├── SelectExpression.php
│   │           │       │   │   ├── SelectStatement.php
│   │           │       │   │   ├── SimpleArithmeticExpression.php
│   │           │       │   │   ├── SimpleCaseExpression.php
│   │           │       │   │   ├── SimpleSelectClause.php
│   │           │       │   │   ├── SimpleSelectExpression.php
│   │           │       │   │   ├── SimpleWhenClause.php
│   │           │       │   │   ├── Subselect.php
│   │           │       │   │   ├── SubselectFromClause.php
│   │           │       │   │   ├── SubselectIdentificationVariableDeclaration.php
│   │           │       │   │   ├── UpdateClause.php
│   │           │       │   │   ├── UpdateItem.php
│   │           │       │   │   ├── UpdateStatement.php
│   │           │       │   │   ├── WhenClause.php
│   │           │       │   │   └── WhereClause.php
│   │           │       │   ├── Exec
│   │           │       │   │   ├── AbstractSqlExecutor.php
│   │           │       │   │   ├── MultiTableDeleteExecutor.php
│   │           │       │   │   ├── MultiTableUpdateExecutor.php
│   │           │       │   │   ├── SingleSelectExecutor.php
│   │           │       │   │   └── SingleTableDeleteUpdateExecutor.php
│   │           │       │   ├── Expr
│   │           │       │   │   ├── Andx.php
│   │           │       │   │   ├── Base.php
│   │           │       │   │   ├── Comparison.php
│   │           │       │   │   ├── Composite.php
│   │           │       │   │   ├── From.php
│   │           │       │   │   ├── Func.php
│   │           │       │   │   ├── GroupBy.php
│   │           │       │   │   ├── Join.php
│   │           │       │   │   ├── Literal.php
│   │           │       │   │   ├── Math.php
│   │           │       │   │   ├── OrderBy.php
│   │           │       │   │   ├── Orx.php
│   │           │       │   │   └── Select.php
│   │           │       │   ├── Expr.php
│   │           │       │   ├── Filter
│   │           │       │   │   └── SQLFilter.php
│   │           │       │   ├── FilterCollection.php
│   │           │       │   ├── Lexer.php
│   │           │       │   ├── Parameter.php
│   │           │       │   ├── ParameterTypeInferer.php
│   │           │       │   ├── Parser.php
│   │           │       │   ├── ParserResult.php
│   │           │       │   ├── Printer.php
│   │           │       │   ├── QueryException.php
│   │           │       │   ├── QueryExpressionVisitor.php
│   │           │       │   ├── ResultSetMapping.php
│   │           │       │   ├── ResultSetMappingBuilder.php
│   │           │       │   ├── SqlWalker.php
│   │           │       │   ├── TreeWalker.php
│   │           │       │   ├── TreeWalkerAdapter.php
│   │           │       │   ├── TreeWalkerChain.php
│   │           │       │   └── TreeWalkerChainIterator.php
│   │           │       ├── Query.php
│   │           │       ├── QueryBuilder.php
│   │           │       ├── README.markdown
│   │           │       ├── Repository
│   │           │       │   ├── DefaultRepositoryFactory.php
│   │           │       │   └── RepositoryFactory.php
│   │           │       ├── Tools
│   │           │       │   ├── AttachEntityListenersListener.php
│   │           │       │   ├── Console
│   │           │       │   │   ├── Command
│   │           │       │   │   │   ├── ClearCache
│   │           │       │   │   │   │   ├── CollectionRegionCommand.php
│   │           │       │   │   │   │   ├── EntityRegionCommand.php
│   │           │       │   │   │   │   ├── MetadataCommand.php
│   │           │       │   │   │   │   ├── QueryCommand.php
│   │           │       │   │   │   │   ├── QueryRegionCommand.php
│   │           │       │   │   │   │   └── ResultCommand.php
│   │           │       │   │   │   ├── ConvertDoctrine1SchemaCommand.php
│   │           │       │   │   │   ├── ConvertMappingCommand.php
│   │           │       │   │   │   ├── EnsureProductionSettingsCommand.php
│   │           │       │   │   │   ├── GenerateEntitiesCommand.php
│   │           │       │   │   │   ├── GenerateProxiesCommand.php
│   │           │       │   │   │   ├── GenerateRepositoriesCommand.php
│   │           │       │   │   │   ├── InfoCommand.php
│   │           │       │   │   │   ├── MappingDescribeCommand.php
│   │           │       │   │   │   ├── RunDqlCommand.php
│   │           │       │   │   │   ├── SchemaTool
│   │           │       │   │   │   │   ├── AbstractCommand.php
│   │           │       │   │   │   │   ├── CreateCommand.php
│   │           │       │   │   │   │   ├── DropCommand.php
│   │           │       │   │   │   │   └── UpdateCommand.php
│   │           │       │   │   │   └── ValidateSchemaCommand.php
│   │           │       │   │   ├── ConsoleRunner.php
│   │           │       │   │   ├── Helper
│   │           │       │   │   │   └── EntityManagerHelper.php
│   │           │       │   │   └── MetadataFilter.php
│   │           │       │   ├── ConvertDoctrine1Schema.php
│   │           │       │   ├── DebugUnitOfWorkListener.php
│   │           │       │   ├── DisconnectedClassMetadataFactory.php
│   │           │       │   ├── EntityGenerator.php
│   │           │       │   ├── EntityRepositoryGenerator.php
│   │           │       │   ├── Event
│   │           │       │   │   ├── GenerateSchemaEventArgs.php
│   │           │       │   │   └── GenerateSchemaTableEventArgs.php
│   │           │       │   ├── Export
│   │           │       │   │   ├── ClassMetadataExporter.php
│   │           │       │   │   ├── Driver
│   │           │       │   │   │   ├── AbstractExporter.php
│   │           │       │   │   │   ├── AnnotationExporter.php
│   │           │       │   │   │   ├── PhpExporter.php
│   │           │       │   │   │   ├── XmlExporter.php
│   │           │       │   │   │   └── YamlExporter.php
│   │           │       │   │   └── ExportException.php
│   │           │       │   ├── Pagination
│   │           │       │   │   ├── CountOutputWalker.php
│   │           │       │   │   ├── CountWalker.php
│   │           │       │   │   ├── LimitSubqueryOutputWalker.php
│   │           │       │   │   ├── LimitSubqueryWalker.php
│   │           │       │   │   ├── Paginator.php
│   │           │       │   │   ├── RowNumberOverFunction.php
│   │           │       │   │   └── WhereInWalker.php
│   │           │       │   ├── ResolveTargetEntityListener.php
│   │           │       │   ├── SchemaTool.php
│   │           │       │   ├── SchemaValidator.php
│   │           │       │   ├── Setup.php
│   │           │       │   ├── ToolEvents.php
│   │           │       │   └── ToolsException.php
│   │           │       ├── TransactionRequiredException.php
│   │           │       ├── UnexpectedResultException.php
│   │           │       ├── UnitOfWork.php
│   │           │       ├── Utility
│   │           │       │   ├── IdentifierFlattener.php
│   │           │       │   └── PersisterHelper.php
│   │           │       └── Version.php
│   │           └── vendor
│   │               └── doctrine-build-common
│   ├── doesntmattr
│   │   ├── mongodb-migrations
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── bin
│   │   │   │   ├── install.sh
│   │   │   │   └── pre-commit.sh
│   │   │   ├── composer.json
│   │   │   ├── demo
│   │   │   │   └── ConsoleApplication
│   │   │   │       ├── Example
│   │   │   │       │   └── Migrations
│   │   │   │       │       └── TestAntiMattr
│   │   │   │       │           └── MongoDB
│   │   │   │       │               ├── Version20140822185742.php
│   │   │   │       │               ├── Version20140822185743.php
│   │   │   │       │               └── Version20140822185744.php
│   │   │   │       ├── config
│   │   │   │       │   ├── test_antimattr_mongodb.php
│   │   │   │       │   └── test_antimattr_mongodb.yml
│   │   │   │       ├── console
│   │   │   │       └── scripts
│   │   │   │           └── test_script.js
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   └── AntiMattr
│   │   │   │       └── MongoDB
│   │   │   │           └── Migrations
│   │   │   │               ├── AbstractMigration.php
│   │   │   │               ├── Collection
│   │   │   │               │   └── Statistics.php
│   │   │   │               ├── Configuration
│   │   │   │               │   ├── AbstractFileConfiguration.php
│   │   │   │               │   ├── Configuration.php
│   │   │   │               │   ├── XmlConfiguration.php
│   │   │   │               │   └── YamlConfiguration.php
│   │   │   │               ├── Exception
│   │   │   │               │   ├── AbortException.php
│   │   │   │               │   ├── AbstractMigrationsException.php
│   │   │   │               │   ├── ConfigurationFileAlreadyLoadedException.php
│   │   │   │               │   ├── ConfigurationValidationException.php
│   │   │   │               │   ├── DuplicateVersionException.php
│   │   │   │               │   ├── IrreversibleException.php
│   │   │   │               │   ├── NoMigrationsToExecuteException.php
│   │   │   │               │   ├── SkipException.php
│   │   │   │               │   └── UnknownVersionException.php
│   │   │   │               ├── Migration.php
│   │   │   │               ├── OutputWriter.php
│   │   │   │               ├── Tools
│   │   │   │               │   └── Console
│   │   │   │               │       └── Command
│   │   │   │               │           ├── AbstractCommand.php
│   │   │   │               │           ├── ExecuteCommand.php
│   │   │   │               │           ├── GenerateCommand.php
│   │   │   │               │           ├── MigrateCommand.php
│   │   │   │               │           ├── StatusCommand.php
│   │   │   │               │           └── VersionCommand.php
│   │   │   │               └── Version.php
│   │   │   └── tests
│   │   │       └── AntiMattr
│   │   │           └── Tests
│   │   │               └── MongoDB
│   │   │                   └── Migrations
│   │   │                       ├── Collection
│   │   │                       │   └── StatisticsTest.php
│   │   │                       ├── Configuration
│   │   │                       │   ├── AbstractConfigurationTest.php
│   │   │                       │   ├── ConfigurationTest.php
│   │   │                       │   ├── XmlConfigurationTest.php
│   │   │                       │   └── YamlConfigurationTest.php
│   │   │                       ├── Exception
│   │   │                       │   ├── AbortExceptionTest.php
│   │   │                       │   ├── AbstractMigrationsExceptionTest.php
│   │   │                       │   ├── ConfigurationFileAlreadyLoadedExceptionTest.php
│   │   │                       │   ├── ConfigurationValidationExceptionTest.php
│   │   │                       │   ├── DuplicateVersionExceptionTest.php
│   │   │                       │   ├── IrreversibleExceptionTest.php
│   │   │                       │   ├── NoMigrationsToExecuteExceptionTest.php
│   │   │                       │   ├── SkipExceptionTest.php
│   │   │                       │   └── UnknownVersionExceptionTest.php
│   │   │                       ├── MigrationTest.php
│   │   │                       ├── OutputWriterTest.php
│   │   │                       ├── Resources
│   │   │                       │   ├── Migrations
│   │   │                       │   │   ├── Version20140822185742.php
│   │   │                       │   │   ├── Version20140822185743.php
│   │   │                       │   │   └── Version20140822185744.php
│   │   │                       │   └── fixtures
│   │   │                       │       ├── config.xml
│   │   │                       │       └── config.yml
│   │   │                       ├── Tools
│   │   │                       │   └── Console
│   │   │                       │       └── Command
│   │   │                       │           ├── ExecuteCommandTest.php
│   │   │                       │           ├── GenerateCommandTest.php
│   │   │                       │           ├── MigrateCommandTest.php
│   │   │                       │           ├── StatusCommandTest.php
│   │   │                       │           └── VersionCommandTest.php
│   │   │                       └── VersionTest.php
│   │   └── mongodb-migrations-bundle
│   │       └── AntiMattr
│   │           └── Bundle
│   │               └── MongoDBMigrationsBundle
│   │                   ├── Command
│   │                   │   ├── AntiMattrCommand.php
│   │                   │   ├── MigrationsExecuteCommand.php
│   │                   │   ├── MigrationsExecuteDoctrineCommand.php
│   │                   │   ├── MigrationsGenerateCommand.php
│   │                   │   ├── MigrationsGenerateDoctrineCommand.php
│   │                   │   ├── MigrationsMigrateCommand.php
│   │                   │   ├── MigrationsMigrateDoctrineCommand.php
│   │                   │   ├── MigrationsStatusCommand.php
│   │                   │   ├── MigrationsStatusDoctrineCommand.php
│   │                   │   ├── MigrationsVersionCommand.php
│   │                   │   └── MigrationsVersionDoctrineCommand.php
│   │                   ├── DependencyInjection
│   │                   │   ├── Configuration.php
│   │                   │   └── MongoDBMigrationsExtension.php
│   │                   ├── LICENSE
│   │                   ├── MongoDBMigrationsBundle.php
│   │                   ├── README.md
│   │                   └── composer.json
│   ├── friendsofsymfony
│   │   └── rest-bundle
│   │       ├── CHANGELOG.md
│   │       ├── Context
│   │       │   └── Context.php
│   │       ├── Controller
│   │       │   ├── Annotations
│   │       │   │   ├── AbstractParam.php
│   │       │   │   ├── AbstractScalarParam.php
│   │       │   │   ├── Copy.php
│   │       │   │   ├── Delete.php
│   │       │   │   ├── FileParam.php
│   │       │   │   ├── Get.php
│   │       │   │   ├── Head.php
│   │       │   │   ├── Link.php
│   │       │   │   ├── Lock.php
│   │       │   │   ├── Mkcol.php
│   │       │   │   ├── Move.php
│   │       │   │   ├── NamePrefix.php
│   │       │   │   ├── NoRoute.php
│   │       │   │   ├── Options.php
│   │       │   │   ├── ParamInterface.php
│   │       │   │   ├── Patch.php
│   │       │   │   ├── Post.php
│   │       │   │   ├── Prefix.php
│   │       │   │   ├── PropFind.php
│   │       │   │   ├── PropPatch.php
│   │       │   │   ├── Put.php
│   │       │   │   ├── QueryParam.php
│   │       │   │   ├── RequestParam.php
│   │       │   │   ├── Route.php
│   │       │   │   ├── RouteResource.php
│   │       │   │   ├── Unlink.php
│   │       │   │   ├── Unlock.php
│   │       │   │   ├── Version.php
│   │       │   │   └── View.php
│   │       │   ├── ControllerTrait.php
│   │       │   ├── ExceptionController.php
│   │       │   ├── FOSRestController.php
│   │       │   ├── TemplatingExceptionController.php
│   │       │   └── TwigExceptionController.php
│   │       ├── Decoder
│   │       │   ├── ContainerDecoderProvider.php
│   │       │   ├── DecoderInterface.php
│   │       │   ├── DecoderProviderInterface.php
│   │       │   ├── JsonDecoder.php
│   │       │   ├── JsonToFormDecoder.php
│   │       │   └── XmlDecoder.php
│   │       ├── DependencyInjection
│   │       │   ├── Compiler
│   │       │   │   ├── ConfigurationCheckPass.php
│   │       │   │   ├── FormatListenerRulesPass.php
│   │       │   │   ├── JMSHandlersPass.php
│   │       │   │   ├── SerializerConfigurationPass.php
│   │       │   │   └── TwigExceptionPass.php
│   │       │   ├── Configuration.php
│   │       │   └── FOSRestExtension.php
│   │       ├── EventListener
│   │       │   ├── AccessDeniedListener.php
│   │       │   ├── AllowedMethodsListener.php
│   │       │   ├── BodyListener.php
│   │       │   ├── ExceptionListener.php
│   │       │   ├── FormatListener.php
│   │       │   ├── MimeTypeListener.php
│   │       │   ├── ParamFetcherListener.php
│   │       │   ├── VersionListener.php
│   │       │   ├── ViewResponseListener.php
│   │       │   └── ZoneMatcherListener.php
│   │       ├── Exception
│   │       │   └── InvalidParameterException.php
│   │       ├── FOSRestBundle.php
│   │       ├── Form
│   │       │   ├── Extension
│   │       │   │   └── DisableCSRFExtension.php
│   │       │   └── Transformer
│   │       │       └── EntityToIdObjectTransformer.php
│   │       ├── Inflector
│   │       │   ├── DoctrineInflector.php
│   │       │   └── InflectorInterface.php
│   │       ├── Negotiation
│   │       │   └── FormatNegotiator.php
│   │       ├── Normalizer
│   │       │   ├── ArrayNormalizerInterface.php
│   │       │   ├── CamelKeysNormalizer.php
│   │       │   ├── CamelKeysNormalizerWithLeadingUnderscore.php
│   │       │   └── Exception
│   │       │       └── NormalizationException.php
│   │       ├── README.md
│   │       ├── Request
│   │       │   ├── ParamFetcher.php
│   │       │   ├── ParamFetcherInterface.php
│   │       │   ├── ParamReader.php
│   │       │   ├── ParamReaderInterface.php
│   │       │   ├── ParameterBag.php
│   │       │   └── RequestBodyParamConverter.php
│   │       ├── Resources
│   │       │   ├── config
│   │       │   │   ├── access_denied_listener.xml
│   │       │   │   ├── allowed_methods_listener.xml
│   │       │   │   ├── body_listener.xml
│   │       │   │   ├── exception_listener.xml
│   │       │   │   ├── format_listener.xml
│   │       │   │   ├── forms.xml
│   │       │   │   ├── mime_type_listener.xml
│   │       │   │   ├── param_fetcher_listener.xml
│   │       │   │   ├── request.xml
│   │       │   │   ├── request_body_param_converter.xml
│   │       │   │   ├── routing.xml
│   │       │   │   ├── schema
│   │       │   │   │   ├── routing
│   │       │   │   │   │   └── rest_routing-1.0.xsd
│   │       │   │   │   └── routing-1.0.xsd
│   │       │   │   ├── serializer.xml
│   │       │   │   ├── versioning.xml
│   │       │   │   ├── view.xml
│   │       │   │   ├── view_response_listener.xml
│   │       │   │   └── zone_matcher_listener.xml
│   │       │   ├── doc
│   │       │   │   ├── 1-setting_up_the_bundle.rst
│   │       │   │   ├── 2-the-view-layer.rst
│   │       │   │   ├── 3-listener-support.rst
│   │       │   │   ├── 4-exception-controller-support.rst
│   │       │   │   ├── 5-automatic-route-generation_single-restful-controller.rst
│   │       │   │   ├── 6-automatic-route-generation_multiple-restful-controllers.rst
│   │       │   │   ├── 7-manual-route-definition.rst
│   │       │   │   ├── annotations-reference.rst
│   │       │   │   ├── body_listener.rst
│   │       │   │   ├── configuration-reference.rst
│   │       │   │   ├── empty-content-status-code.rst
│   │       │   │   ├── examples
│   │       │   │   │   ├── RssHandler.php
│   │       │   │   │   └── chaplin_backbone.md
│   │       │   │   ├── format_listener.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── param_fetcher_listener.rst
│   │       │   │   ├── request_body_converter_listener.rst
│   │       │   │   ├── versioning.rst
│   │       │   │   └── view_response_listener.rst
│   │       │   └── meta
│   │       │       └── LICENSE
│   │       ├── Response
│   │       │   └── AllowedMethodsLoader
│   │       │       ├── AllowedMethodsLoaderInterface.php
│   │       │       └── AllowedMethodsRouterLoader.php
│   │       ├── Routing
│   │       │   ├── ClassResourceInterface.php
│   │       │   ├── Loader
│   │       │   │   ├── ClassUtils.php
│   │       │   │   ├── DirectoryRouteLoader.php
│   │       │   │   ├── Reader
│   │       │   │   │   ├── RestActionReader.php
│   │       │   │   │   └── RestControllerReader.php
│   │       │   │   ├── RestRouteLoader.php
│   │       │   │   ├── RestRouteProcessor.php
│   │       │   │   ├── RestXmlCollectionLoader.php
│   │       │   │   └── RestYamlCollectionLoader.php
│   │       │   └── RestRouteCollection.php
│   │       ├── Serializer
│   │       │   ├── JMSHandlerRegistry.php
│   │       │   ├── JMSSerializerAdapter.php
│   │       │   ├── Normalizer
│   │       │   │   ├── AbstractExceptionNormalizer.php
│   │       │   │   ├── ExceptionHandler.php
│   │       │   │   ├── ExceptionNormalizer.php
│   │       │   │   ├── FormErrorHandler.php
│   │       │   │   └── FormErrorNormalizer.php
│   │       │   ├── Serializer.php
│   │       │   └── SymfonySerializerAdapter.php
│   │       ├── Tests
│   │       │   ├── Context
│   │       │   │   └── ContextTest.php
│   │       │   ├── Controller
│   │       │   │   └── Annotations
│   │       │   │       ├── AbstractParamTest.php
│   │       │   │       ├── AbstractScalarParamTest.php
│   │       │   │       ├── FileParamTest.php
│   │       │   │       ├── QueryParamTest.php
│   │       │   │       └── RequestParamTest.php
│   │       │   ├── Decoder
│   │       │   │   └── JsonToFormDecoderTest.php
│   │       │   ├── DependencyInjection
│   │       │   │   ├── Compiler
│   │       │   │   │   ├── ConfigurationCheckPassTest.php
│   │       │   │   │   ├── FormatListenerRulesPassTest.php
│   │       │   │   │   └── SerializerConfigurationPassTest.php
│   │       │   │   └── FOSRestExtensionTest.php
│   │       │   ├── EventListener
│   │       │   │   ├── AccessDeniedListenerTest.php
│   │       │   │   ├── BodyListenerTest.php
│   │       │   │   ├── FormatListenerTest.php
│   │       │   │   ├── MimeTypeListenerTest.php
│   │       │   │   ├── ParamFetcherListenerTest.php
│   │       │   │   ├── VersionListenerTest.php
│   │       │   │   ├── ViewResponseListenerTest.php
│   │       │   │   └── ZoneMatcherListenerTest.php
│   │       │   ├── FOSRestBundleTest.php
│   │       │   ├── Fixtures
│   │       │   │   ├── Asset
│   │       │   │   │   ├── bar.txt
│   │       │   │   │   └── cat.jpeg
│   │       │   │   ├── Context
│   │       │   │   │   └── Adapter
│   │       │   │   │       └── SerializerAwareAdapter.php
│   │       │   │   ├── Controller
│   │       │   │   │   ├── AnnotatedConditionalUsersController.php
│   │       │   │   │   ├── AnnotatedNonPluralizedArticleController.php
│   │       │   │   │   ├── AnnotatedPrefixedController.php
│   │       │   │   │   ├── AnnotatedUsersController.php
│   │       │   │   │   ├── AnnotatedVersionUserController.php
│   │       │   │   │   ├── ArticleController.php
│   │       │   │   │   ├── Directory
│   │       │   │   │   │   ├── NoClass.php
│   │       │   │   │   │   ├── UserTopicCommentsController.php
│   │       │   │   │   │   ├── UserTopicsController.php
│   │       │   │   │   │   └── UsersController.php
│   │       │   │   │   ├── InformationController.php
│   │       │   │   │   ├── MediaController.php
│   │       │   │   │   ├── OrdersController.php
│   │       │   │   │   ├── ParamFetcherController.php
│   │       │   │   │   ├── ParamsAnnotatedController.php
│   │       │   │   │   ├── ReportController.php
│   │       │   │   │   ├── TypeHintedController.php
│   │       │   │   │   ├── UserTopicCommentsController.php
│   │       │   │   │   ├── UserTopicsController.php
│   │       │   │   │   └── UsersController.php
│   │       │   │   ├── Etalon
│   │       │   │   │   ├── annotated_conditional_controller.yml
│   │       │   │   │   ├── annotated_users_controller.yml
│   │       │   │   │   ├── annotated_version_controller.yml
│   │       │   │   │   ├── base_named_prefixed_reports_collection.yml
│   │       │   │   │   ├── named_prefixed_reports_collection.yml
│   │       │   │   │   ├── prefixed_users_collection.yml
│   │       │   │   │   ├── resource_controller.yml
│   │       │   │   │   ├── users_collection.yml
│   │       │   │   │   └── users_controller.yml
│   │       │   │   ├── Files
│   │       │   │   │   ├── big_file.txt
│   │       │   │   │   └── valid_file.txt
│   │       │   │   ├── Routes
│   │       │   │   │   ├── bad_format.yml
│   │       │   │   │   ├── base_named_prefixed_reports_collection.yml
│   │       │   │   │   ├── empty.yml
│   │       │   │   │   ├── invalid_route_parent.xml
│   │       │   │   │   ├── invalid_route_parent.yml
│   │       │   │   │   ├── invalid_tag.xml
│   │       │   │   │   ├── named_prefixed_reports_collection.yml
│   │       │   │   │   ├── nonvalid.yml
│   │       │   │   │   ├── prefixed_users_collection.xml
│   │       │   │   │   ├── prefixed_users_collection.yml
│   │       │   │   │   ├── routes.xml
│   │       │   │   │   ├── routes.yml
│   │       │   │   │   ├── routes_with_options_requirements_and_defaults.xml
│   │       │   │   │   ├── routes_with_options_requirements_and_defaults.yml
│   │       │   │   │   ├── routes_with_pattern.yml
│   │       │   │   │   ├── users_collection.xml
│   │       │   │   │   └── users_collection.yml
│   │       │   │   └── User.php
│   │       │   ├── Functional
│   │       │   │   ├── AllowedMethodsTest.php
│   │       │   │   ├── Bundle
│   │       │   │   │   └── TestBundle
│   │       │   │   │       ├── Controller
│   │       │   │   │       │   ├── AllowedMethodsController.php
│   │       │   │   │       │   ├── Api
│   │       │   │   │       │   │   ├── CommentController.php
│   │       │   │   │       │   │   └── PostController.php
│   │       │   │   │       │   ├── ArticleController.php
│   │       │   │   │       │   ├── ParamFetcherController.php
│   │       │   │   │       │   ├── RequestBodyParamConverterController.php
│   │       │   │   │       │   ├── SerializerErrorController.php
│   │       │   │   │       │   ├── Version2Controller.php
│   │       │   │   │       │   └── VersionController.php
│   │       │   │   │       ├── Resources
│   │       │   │   │       │   ├── config
│   │       │   │   │       │   │   └── routing.yml
│   │       │   │   │       │   └── views
│   │       │   │   │       │       ├── Article
│   │       │   │   │       │       │   └── foo.html.twig
│   │       │   │   │       │       └── Version
│   │       │   │   │       │           └── version.html.twig
│   │       │   │   │       └── TestBundle.php
│   │       │   │   ├── ConfigurationTest.php
│   │       │   │   ├── ErrorWithTemplatingFormatTest.php
│   │       │   │   ├── ExceptionListenerTest.php
│   │       │   │   ├── ParamFetcherTest.php
│   │       │   │   ├── RequestBodyParamConverterTest.php
│   │       │   │   ├── RoutingTest.php
│   │       │   │   ├── SerializerErrorTest.php
│   │       │   │   ├── VersionTest.php
│   │       │   │   ├── ViewResponseListenerTest.php
│   │       │   │   ├── WebTestCase.php
│   │       │   │   └── app
│   │       │   │       ├── AllowedMethodsListener
│   │       │   │       │   ├── bundles.php
│   │       │   │       │   └── config.yml
│   │       │   │       ├── AppKernel.php
│   │       │   │       ├── Configuration
│   │       │   │       │   ├── bundles.php
│   │       │   │       │   ├── config.yml
│   │       │   │       │   └── routing.yml
│   │       │   │       ├── Debug
│   │       │   │       │   ├── bundles.php
│   │       │   │       │   └── config.yml
│   │       │   │       ├── ExceptionListener
│   │       │   │       │   ├── bundles.php
│   │       │   │       │   └── config.yml
│   │       │   │       ├── JMSSerializer
│   │       │   │       │   ├── bundles.php
│   │       │   │       │   └── config.yml
│   │       │   │       ├── ParamFetcher
│   │       │   │       │   ├── bundles.php
│   │       │   │       │   └── config.yml
│   │       │   │       ├── RequestBodyParamConverter
│   │       │   │       │   ├── bundles.php
│   │       │   │       │   ├── config.yml
│   │       │   │       │   └── routing.yml
│   │       │   │       ├── Routing
│   │       │   │       │   ├── bundles.php
│   │       │   │       │   ├── config.yml
│   │       │   │       │   └── routing.yml
│   │       │   │       ├── Serializer
│   │       │   │       │   ├── bundles.php
│   │       │   │       │   └── config.yml
│   │       │   │       ├── Version
│   │       │   │       │   ├── bundles.php
│   │       │   │       │   └── config.yml
│   │       │   │       ├── ViewResponseListener
│   │       │   │       │   ├── bundles.php
│   │       │   │       │   └── config.yml
│   │       │   │       └── config
│   │       │   │           ├── default.yml
│   │       │   │           ├── exception_listener.yml
│   │       │   │           ├── framework.yml
│   │       │   │           └── routing.yml
│   │       │   ├── Negotiation
│   │       │   │   └── FormatNegotiatorTest.php
│   │       │   ├── Normalizer
│   │       │   │   └── CamelKeysNormalizerTest.php
│   │       │   ├── Request
│   │       │   │   ├── ParamFetcherTest.php
│   │       │   │   ├── ParamReaderTest.php
│   │       │   │   └── RequestBodyParamConverterTest.php
│   │       │   ├── Routing
│   │       │   │   └── Loader
│   │       │   │       ├── DirectoryRouteLoaderTest.php
│   │       │   │       ├── LoaderTest.php
│   │       │   │       ├── RestRouteLoaderTest.php
│   │       │   │       ├── RestXmlCollectionLoaderTest.php
│   │       │   │       └── RestYamlCollectionLoaderTest.php
│   │       │   ├── Util
│   │       │   │   └── ExceptionValueMapTest.php
│   │       │   └── View
│   │       │       ├── JsonpHandlerTest.php
│   │       │       ├── ViewHandlerTest.php
│   │       │       └── ViewTest.php
│   │       ├── UPGRADING-2.0.md
│   │       ├── UPGRADING-2.1.md
│   │       ├── UPGRADING-3.0.md
│   │       ├── Util
│   │       │   ├── ExceptionValueMap.php
│   │       │   ├── ResolverTrait.php
│   │       │   └── StopFormatListenerException.php
│   │       ├── Validator
│   │       │   └── Constraints
│   │       │       ├── Regex.php
│   │       │       └── ResolvableConstraintInterface.php
│   │       ├── Version
│   │       │   ├── ChainVersionResolver.php
│   │       │   ├── Resolver
│   │       │   │   ├── HeaderVersionResolver.php
│   │       │   │   ├── MediaTypeVersionResolver.php
│   │       │   │   └── QueryParameterVersionResolver.php
│   │       │   └── VersionResolverInterface.php
│   │       ├── View
│   │       │   ├── ConfigurableViewHandlerInterface.php
│   │       │   ├── JsonpHandler.php
│   │       │   ├── View.php
│   │       │   ├── ViewHandler.php
│   │       │   └── ViewHandlerInterface.php
│   │       ├── composer.json
│   │       └── phpunit.xml.dist
│   ├── guzzlehttp
│   │   ├── guzzle
│   │   │   ├── CHANGELOG.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── UPGRADING.md
│   │   │   ├── build
│   │   │   ├── composer.json
│   │   │   ├── docs
│   │   │   ├── src
│   │   │   │   ├── Client.php
│   │   │   │   ├── ClientInterface.php
│   │   │   │   ├── Cookie
│   │   │   │   │   ├── CookieJar.php
│   │   │   │   │   ├── CookieJarInterface.php
│   │   │   │   │   ├── FileCookieJar.php
│   │   │   │   │   ├── SessionCookieJar.php
│   │   │   │   │   └── SetCookie.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── BadResponseException.php
│   │   │   │   │   ├── ClientException.php
│   │   │   │   │   ├── ConnectException.php
│   │   │   │   │   ├── GuzzleException.php
│   │   │   │   │   ├── RequestException.php
│   │   │   │   │   ├── SeekException.php
│   │   │   │   │   ├── ServerException.php
│   │   │   │   │   ├── TooManyRedirectsException.php
│   │   │   │   │   └── TransferException.php
│   │   │   │   ├── Handler
│   │   │   │   │   ├── CurlFactory.php
│   │   │   │   │   ├── CurlFactoryInterface.php
│   │   │   │   │   ├── CurlHandler.php
│   │   │   │   │   ├── CurlMultiHandler.php
│   │   │   │   │   ├── EasyHandle.php
│   │   │   │   │   ├── MockHandler.php
│   │   │   │   │   ├── Proxy.php
│   │   │   │   │   └── StreamHandler.php
│   │   │   │   ├── HandlerStack.php
│   │   │   │   ├── MessageFormatter.php
│   │   │   │   ├── Middleware.php
│   │   │   │   ├── Pool.php
│   │   │   │   ├── PrepareBodyMiddleware.php
│   │   │   │   ├── RedirectMiddleware.php
│   │   │   │   ├── RequestOptions.php
│   │   │   │   ├── RetryMiddleware.php
│   │   │   │   ├── TransferStats.php
│   │   │   │   ├── UriTemplate.php
│   │   │   │   ├── functions.php
│   │   │   │   └── functions_include.php
│   │   │   └── tests
│   │   ├── promises
│   │   │   ├── CHANGELOG.md
│   │   │   ├── LICENSE
│   │   │   ├── Makefile
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   └── src
│   │   │       ├── AggregateException.php
│   │   │       ├── CancellationException.php
│   │   │       ├── Coroutine.php
│   │   │       ├── EachPromise.php
│   │   │       ├── FulfilledPromise.php
│   │   │       ├── Promise.php
│   │   │       ├── PromiseInterface.php
│   │   │       ├── PromisorInterface.php
│   │   │       ├── RejectedPromise.php
│   │   │       ├── RejectionException.php
│   │   │       ├── TaskQueue.php
│   │   │       ├── TaskQueueInterface.php
│   │   │       ├── functions.php
│   │   │       └── functions_include.php
│   │   └── psr7
│   │       ├── CHANGELOG.md
│   │       ├── LICENSE
│   │       ├── Makefile
│   │       ├── README.md
│   │       ├── composer.json
│   │       ├── phpunit.xml.dist
│   │       ├── src
│   │       │   ├── AppendStream.php
│   │       │   ├── BufferStream.php
│   │       │   ├── CachingStream.php
│   │       │   ├── DroppingStream.php
│   │       │   ├── FnStream.php
│   │       │   ├── InflateStream.php
│   │       │   ├── LazyOpenStream.php
│   │       │   ├── LimitStream.php
│   │       │   ├── MessageTrait.php
│   │       │   ├── MultipartStream.php
│   │       │   ├── NoSeekStream.php
│   │       │   ├── PumpStream.php
│   │       │   ├── Request.php
│   │       │   ├── Response.php
│   │       │   ├── ServerRequest.php
│   │       │   ├── Stream.php
│   │       │   ├── StreamDecoratorTrait.php
│   │       │   ├── StreamWrapper.php
│   │       │   ├── UploadedFile.php
│   │       │   ├── Uri.php
│   │       │   ├── functions.php
│   │       │   └── functions_include.php
│   │       └── tests
│   │           ├── AppendStreamTest.php
│   │           ├── BufferStreamTest.php
│   │           ├── CachingStreamTest.php
│   │           ├── DroppingStreamTest.php
│   │           ├── FnStreamTest.php
│   │           ├── FunctionsTest.php
│   │           ├── InflateStreamTest.php
│   │           ├── LazyOpenStreamTest.php
│   │           ├── LimitStreamTest.php
│   │           ├── MultipartStreamTest.php
│   │           ├── NoSeekStreamTest.php
│   │           ├── PumpStreamTest.php
│   │           ├── RequestTest.php
│   │           ├── ResponseTest.php
│   │           ├── ServerRequestTest.php
│   │           ├── StreamDecoratorTraitTest.php
│   │           ├── StreamTest.php
│   │           ├── StreamWrapperTest.php
│   │           ├── UploadedFileTest.php
│   │           ├── UriTest.php
│   │           └── bootstrap.php
│   ├── incenteev
│   │   └── composer-parameter-handler
│   │       ├── CHANGELOG.md
│   │       ├── LICENSE
│   │       ├── Processor.php
│   │       ├── README.md
│   │       ├── ScriptHandler.php
│   │       ├── Tests
│   │       │   ├── ProcessorTest.php
│   │       │   ├── ScriptHandlerTest.php
│   │       │   └── fixtures
│   │       │       ├── invalid
│   │       │       │   ├── invalid_existing_values.yml
│   │       │       │   ├── invalid_existing_values.yml.dist
│   │       │       │   └── missing_top_level.yml.dist
│   │       │       └── testcases
│   │       │           ├── custom_dist_file
│   │       │           │   ├── dist.yml
│   │       │           │   ├── existing.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── custom_key
│   │       │           │   ├── dist.yml
│   │       │           │   ├── existing.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── existent
│   │       │           │   ├── dist.yml
│   │       │           │   ├── existing.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── existent_empty
│   │       │           │   ├── dist.yml
│   │       │           │   ├── existing.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── existent_without_key
│   │       │           │   ├── dist.yml
│   │       │           │   ├── existing.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── extra_keys
│   │       │           │   ├── dist.yml
│   │       │           │   ├── existing.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── interaction_existent
│   │       │           │   ├── dist.yml
│   │       │           │   ├── existing.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── interaction_non_existent
│   │       │           │   ├── dist.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── interaction_with_environment
│   │       │           │   ├── dist.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── keep_outdated
│   │       │           │   ├── dist.yml
│   │       │           │   ├── existing.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── non_existent
│   │       │           │   ├── dist.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── non_existent_with_environment
│   │       │           │   ├── dist.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── remove_outdated
│   │       │           │   ├── dist.yml
│   │       │           │   ├── existing.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── renamed
│   │       │           │   ├── dist.yml
│   │       │           │   ├── existing.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── renamed_and_environment
│   │       │           │   ├── dist.yml
│   │       │           │   ├── existing.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           ├── subfolder
│   │       │           │   ├── dist.yml
│   │       │           │   ├── existing.yml
│   │       │           │   ├── expected.yml
│   │       │           │   └── setup.yml
│   │       │           └── subfolder_created
│   │       │               ├── dist.yml
│   │       │               ├── expected.yml
│   │       │               └── setup.yml
│   │       ├── composer.json
│   │       └── phpunit.xml.dist
│   ├── jdorn
│   │   └── sql-formatter
│   │       ├── LICENSE.txt
│   │       ├── README.md
│   │       ├── composer.json
│   │       ├── composer.lock
│   │       ├── examples
│   │       │   ├── cli.php
│   │       │   └── examples.php
│   │       ├── lib
│   │       │   └── SqlFormatter.php
│   │       ├── phpunit.xml.dist
│   │       └── tests
│   │           ├── SqlFormatterTest.php
│   │           ├── clihighlight.html
│   │           ├── compress.html
│   │           ├── format-highlight.html
│   │           ├── format.html
│   │           ├── highlight.html
│   │           ├── performance.php
│   │           └── sql.sql
│   ├── jms
│   │   ├── metadata
│   │   │   ├── CHANGELOG.md
│   │   │   ├── LICENSE
│   │   │   ├── README.rst
│   │   │   ├── composer.json
│   │   │   ├── composer.lock
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   └── Metadata
│   │   │   │       ├── AdvancedMetadataFactoryInterface.php
│   │   │   │       ├── Cache
│   │   │   │       │   ├── CacheInterface.php
│   │   │   │       │   ├── DoctrineCacheAdapter.php
│   │   │   │       │   ├── FileCache.php
│   │   │   │       │   └── PsrCacheAdapter.php
│   │   │   │       ├── ClassHierarchyMetadata.php
│   │   │   │       ├── ClassMetadata.php
│   │   │   │       ├── Driver
│   │   │   │       │   ├── AbstractFileDriver.php
│   │   │   │       │   ├── AdvancedDriverInterface.php
│   │   │   │       │   ├── AdvancedFileLocatorInterface.php
│   │   │   │       │   ├── DriverChain.php
│   │   │   │       │   ├── DriverInterface.php
│   │   │   │       │   ├── FileLocator.php
│   │   │   │       │   ├── FileLocatorInterface.php
│   │   │   │       │   └── LazyLoadingDriver.php
│   │   │   │       ├── MergeableClassMetadata.php
│   │   │   │       ├── MergeableInterface.php
│   │   │   │       ├── MetadataFactory.php
│   │   │   │       ├── MetadataFactoryInterface.php
│   │   │   │       ├── MethodMetadata.php
│   │   │   │       ├── NullMetadata.php
│   │   │   │       ├── PropertyMetadata.php
│   │   │   │       └── Version.php
│   │   │   └── tests
│   │   │       ├── Metadata
│   │   │       │   └── Tests
│   │   │       │       ├── Cache
│   │   │       │       │   ├── DoctrineCacheAdapterTest.php
│   │   │       │       │   ├── FileCacheTest.php
│   │   │       │       │   └── PsrCacheAdapterTest.php
│   │   │       │       ├── ClassMetadataTest.php
│   │   │       │       ├── Driver
│   │   │       │       │   ├── AbstractFileDriverTest.php
│   │   │       │       │   ├── DriverChainTest.php
│   │   │       │       │   ├── FileLocatorTest.php
│   │   │       │       │   └── Fixture
│   │   │       │       │       ├── A
│   │   │       │       │       │   ├── A.php
│   │   │       │       │       │   └── A.xml
│   │   │       │       │       ├── B
│   │   │       │       │       │   ├── B.php
│   │   │       │       │       │   └── B.yml
│   │   │       │       │       ├── C
│   │   │       │       │       │   ├── SubDir
│   │   │       │       │       │   │   └── C.php
│   │   │       │       │       │   └── SubDir.C.yml
│   │   │       │       │       ├── D
│   │   │       │       │       │   ├── D.php
│   │   │       │       │       │   └── D.yml
│   │   │       │       │       └── T
│   │   │       │       │           ├── T.php
│   │   │       │       │           └── T.xml
│   │   │       │       ├── Fixtures
│   │   │       │       │   ├── ComplexHierarchy
│   │   │       │       │   │   ├── BaseClass.php
│   │   │       │       │   │   ├── InterfaceA.php
│   │   │       │       │   │   ├── InterfaceB.php
│   │   │       │       │   │   ├── SubClassA.php
│   │   │       │       │   │   └── SubClassB.php
│   │   │       │       │   ├── TestObject.php
│   │   │       │       │   └── TestParent.php
│   │   │       │       ├── MergeableClassMetadataTest.php
│   │   │       │       ├── MetadataFactoryTest.php
│   │   │       │       ├── MethodMetadataTest.php
│   │   │       │       └── PropertyMetadataTest.php
│   │   │       └── bootstrap.php
│   │   ├── parser-lib
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   ├── composer.lock
│   │   │   ├── doc
│   │   │   │   ├── LICENSE
│   │   │   │   └── index.rst
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   └── JMS
│   │   │   │       └── Parser
│   │   │   │           ├── AbstractLexer.php
│   │   │   │           ├── AbstractParser.php
│   │   │   │           ├── SimpleLexer.php
│   │   │   │           └── SyntaxErrorException.php
│   │   │   └── tests
│   │   │       ├── JMS
│   │   │       │   └── Parser
│   │   │       │       └── Tests
│   │   │       │           ├── AbstractLexerTest.php
│   │   │       │           └── AbstractParserTest.php
│   │   │       └── bootstrap.php
│   │   ├── serializer
│   │   │   ├── CHANGELOG.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── UPGRADING.md
│   │   │   ├── composer.json
│   │   │   ├── doc
│   │   │   │   ├── LICENSE
│   │   │   │   ├── configuration.rst
│   │   │   │   ├── cookbook
│   │   │   │   │   └── exclusion_strategies.rst
│   │   │   │   ├── cookbook.rst
│   │   │   │   ├── event_system.rst
│   │   │   │   ├── handlers.rst
│   │   │   │   ├── index.rst
│   │   │   │   ├── reference
│   │   │   │   │   ├── annotations.rst
│   │   │   │   │   ├── xml_reference.rst
│   │   │   │   │   └── yml_reference.rst
│   │   │   │   ├── reference.rst
│   │   │   │   └── usage.rst
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   └── JMS
│   │   │   │       └── Serializer
│   │   │   │           ├── AbstractVisitor.php
│   │   │   │           ├── Annotation
│   │   │   │           │   ├── AccessType.php
│   │   │   │           │   ├── Accessor.php
│   │   │   │           │   ├── AccessorOrder.php
│   │   │   │           │   ├── Discriminator.php
│   │   │   │           │   ├── Exclude.php
│   │   │   │           │   ├── ExclusionPolicy.php
│   │   │   │           │   ├── Expose.php
│   │   │   │           │   ├── Groups.php
│   │   │   │           │   ├── HandlerCallback.php
│   │   │   │           │   ├── Inline.php
│   │   │   │           │   ├── MaxDepth.php
│   │   │   │           │   ├── PostDeserialize.php
│   │   │   │           │   ├── PostSerialize.php
│   │   │   │           │   ├── PreSerialize.php
│   │   │   │           │   ├── ReadOnly.php
│   │   │   │           │   ├── SerializedName.php
│   │   │   │           │   ├── Since.php
│   │   │   │           │   ├── Type.php
│   │   │   │           │   ├── Until.php
│   │   │   │           │   ├── Version.php
│   │   │   │           │   ├── VirtualProperty.php
│   │   │   │           │   ├── XmlAttribute.php
│   │   │   │           │   ├── XmlAttributeMap.php
│   │   │   │           │   ├── XmlCollection.php
│   │   │   │           │   ├── XmlElement.php
│   │   │   │           │   ├── XmlKeyValuePairs.php
│   │   │   │           │   ├── XmlList.php
│   │   │   │           │   ├── XmlMap.php
│   │   │   │           │   ├── XmlNamespace.php
│   │   │   │           │   ├── XmlRoot.php
│   │   │   │           │   └── XmlValue.php
│   │   │   │           ├── ArrayTransformerInterface.php
│   │   │   │           ├── Builder
│   │   │   │           │   ├── CallbackDriverFactory.php
│   │   │   │           │   ├── DefaultDriverFactory.php
│   │   │   │           │   └── DriverFactoryInterface.php
│   │   │   │           ├── Construction
│   │   │   │           │   ├── DoctrineObjectConstructor.php
│   │   │   │           │   ├── ObjectConstructorInterface.php
│   │   │   │           │   └── UnserializeObjectConstructor.php
│   │   │   │           ├── Context.php
│   │   │   │           ├── ContextFactory
│   │   │   │           │   ├── CallableContextFactory.php
│   │   │   │           │   ├── CallableDeserializationContextFactory.php
│   │   │   │           │   ├── CallableSerializationContextFactory.php
│   │   │   │           │   ├── DefaultDeserializationContextFactory.php
│   │   │   │           │   ├── DefaultSerializationContextFactory.php
│   │   │   │           │   ├── DeserializationContextFactoryInterface.php
│   │   │   │           │   └── SerializationContextFactoryInterface.php
│   │   │   │           ├── DeserializationContext.php
│   │   │   │           ├── EventDispatcher
│   │   │   │           │   ├── Event.php
│   │   │   │           │   ├── EventDispatcher.php
│   │   │   │           │   ├── EventDispatcherInterface.php
│   │   │   │           │   ├── EventSubscriberInterface.php
│   │   │   │           │   ├── Events.php
│   │   │   │           │   ├── LazyEventDispatcher.php
│   │   │   │           │   ├── ObjectEvent.php
│   │   │   │           │   ├── PreDeserializeEvent.php
│   │   │   │           │   ├── PreSerializeEvent.php
│   │   │   │           │   └── Subscriber
│   │   │   │           │       ├── DoctrineProxySubscriber.php
│   │   │   │           │       └── SymfonyValidatorSubscriber.php
│   │   │   │           ├── Exception
│   │   │   │           │   ├── Exception.php
│   │   │   │           │   ├── InvalidArgumentException.php
│   │   │   │           │   ├── LogicException.php
│   │   │   │           │   ├── RuntimeException.php
│   │   │   │           │   ├── UnsupportedFormatException.php
│   │   │   │           │   ├── ValidationFailedException.php
│   │   │   │           │   └── XmlErrorException.php
│   │   │   │           ├── Exclusion
│   │   │   │           │   ├── DepthExclusionStrategy.php
│   │   │   │           │   ├── DisjunctExclusionStrategy.php
│   │   │   │           │   ├── ExclusionStrategyInterface.php
│   │   │   │           │   ├── GroupsExclusionStrategy.php
│   │   │   │           │   └── VersionExclusionStrategy.php
│   │   │   │           ├── GenericDeserializationVisitor.php
│   │   │   │           ├── GenericSerializationVisitor.php
│   │   │   │           ├── GraphNavigator.php
│   │   │   │           ├── Handler
│   │   │   │           │   ├── ArrayCollectionHandler.php
│   │   │   │           │   ├── ConstraintViolationHandler.php
│   │   │   │           │   ├── DateHandler.php
│   │   │   │           │   ├── FormErrorHandler.php
│   │   │   │           │   ├── HandlerRegistry.php
│   │   │   │           │   ├── HandlerRegistryInterface.php
│   │   │   │           │   ├── LazyHandlerRegistry.php
│   │   │   │           │   ├── PhpCollectionHandler.php
│   │   │   │           │   ├── PropelCollectionHandler.php
│   │   │   │           │   └── SubscribingHandlerInterface.php
│   │   │   │           ├── JsonDeserializationVisitor.php
│   │   │   │           ├── JsonSerializationVisitor.php
│   │   │   │           ├── Metadata
│   │   │   │           │   ├── ClassMetadata.php
│   │   │   │           │   ├── Driver
│   │   │   │           │   │   ├── AbstractDoctrineTypeDriver.php
│   │   │   │           │   │   ├── AnnotationDriver.php
│   │   │   │           │   │   ├── DoctrinePHPCRTypeDriver.php
│   │   │   │           │   │   ├── DoctrineTypeDriver.php
│   │   │   │           │   │   ├── PhpDriver.php
│   │   │   │           │   │   ├── XmlDriver.php
│   │   │   │           │   │   └── YamlDriver.php
│   │   │   │           │   ├── PropertyMetadata.php
│   │   │   │           │   ├── StaticPropertyMetadata.php
│   │   │   │           │   └── VirtualPropertyMetadata.php
│   │   │   │           ├── Naming
│   │   │   │           │   ├── CacheNamingStrategy.php
│   │   │   │           │   ├── CamelCaseNamingStrategy.php
│   │   │   │           │   ├── IdenticalPropertyNamingStrategy.php
│   │   │   │           │   ├── PropertyNamingStrategyInterface.php
│   │   │   │           │   └── SerializedNameAnnotationStrategy.php
│   │   │   │           ├── SerializationContext.php
│   │   │   │           ├── Serializer.php
│   │   │   │           ├── SerializerBuilder.php
│   │   │   │           ├── SerializerInterface.php
│   │   │   │           ├── Twig
│   │   │   │           │   └── SerializerExtension.php
│   │   │   │           ├── TypeParser.php
│   │   │   │           ├── Util
│   │   │   │           │   └── Writer.php
│   │   │   │           ├── VisitorInterface.php
│   │   │   │           ├── XmlDeserializationVisitor.php
│   │   │   │           ├── XmlSerializationVisitor.php
│   │   │   │           └── YamlSerializationVisitor.php
│   │   │   └── tests
│   │   │       ├── JMS
│   │   │       │   └── Serializer
│   │   │       │       └── Tests
│   │   │       │           ├── Exclusion
│   │   │       │           │   ├── DisjunctExclusionStrategyTest.php
│   │   │       │           │   └── GroupsExclusionStrategyTest.php
│   │   │       │           ├── Fixtures
│   │   │       │           │   ├── AccessorOrderChild.php
│   │   │       │           │   ├── AccessorOrderMethod.php
│   │   │       │           │   ├── AccessorOrderParent.php
│   │   │       │           │   ├── AccessorSetter.php
│   │   │       │           │   ├── AllExcludedObject.php
│   │   │       │           │   ├── Article.php
│   │   │       │           │   ├── Author.php
│   │   │       │           │   ├── AuthorList.php
│   │   │       │           │   ├── AuthorReadOnly.php
│   │   │       │           │   ├── AuthorReadOnlyPerClass.php
│   │   │       │           │   ├── BlogPost.php
│   │   │       │           │   ├── CircularReferenceChild.php
│   │   │       │           │   ├── CircularReferenceParent.php
│   │   │       │           │   ├── Comment.php
│   │   │       │           │   ├── CurrencyAwareOrder.php
│   │   │       │           │   ├── CurrencyAwarePrice.php
│   │   │       │           │   ├── CustomDeserializationObject.php
│   │   │       │           │   ├── DateTimeArraysObject.php
│   │   │       │           │   ├── Discriminator
│   │   │       │           │   │   ├── Car.php
│   │   │       │           │   │   ├── Moped.php
│   │   │       │           │   │   ├── Vehicle.php
│   │   │       │           │   │   └── VehicleInterface.php
│   │   │       │           │   ├── Doctrine
│   │   │       │           │   │   ├── Author.php
│   │   │       │           │   │   ├── BlogPost.php
│   │   │       │           │   │   ├── Comment.php
│   │   │       │           │   │   └── SingleTableInheritance
│   │   │       │           │   │       ├── AbstractModel.php
│   │   │       │           │   │       ├── Clazz.php
│   │   │       │           │   │       ├── Organization.php
│   │   │       │           │   │       ├── Person.php
│   │   │       │           │   │       ├── School.php
│   │   │       │           │   │       ├── Student.php
│   │   │       │           │   │       └── Teacher.php
│   │   │       │           │   ├── DoctrinePHPCR
│   │   │       │           │   │   ├── Author.php
│   │   │       │           │   │   ├── BlogPost.php
│   │   │       │           │   │   └── Comment.php
│   │   │       │           │   ├── Garage.php
│   │   │       │           │   ├── GetSetObject.php
│   │   │       │           │   ├── GroupsObject.php
│   │   │       │           │   ├── GroupsUser.php
│   │   │       │           │   ├── IndexedCommentsBlogPost.php
│   │   │       │           │   ├── InitializedBlogPostConstructor.php
│   │   │       │           │   ├── InitializedObjectConstructor.php
│   │   │       │           │   ├── InlineChild.php
│   │   │       │           │   ├── InlineChildEmpty.php
│   │   │       │           │   ├── InlineParent.php
│   │   │       │           │   ├── Input.php
│   │   │       │           │   ├── InvalidGroupsObject.php
│   │   │       │           │   ├── InvalidUsageOfXmlValue.php
│   │   │       │           │   ├── Log.php
│   │   │       │           │   ├── NamedDateTimeArraysObject.php
│   │   │       │           │   ├── Node.php
│   │   │       │           │   ├── ObjectWithAbsentXmlListNode.php
│   │   │       │           │   ├── ObjectWithEmptyHash.php
│   │   │       │           │   ├── ObjectWithEmptyNullableAndEmptyArrays.php
│   │   │       │           │   ├── ObjectWithHandlerCallbacks.php
│   │   │       │           │   ├── ObjectWithIntListAndIntMap.php
│   │   │       │           │   ├── ObjectWithLifecycleCallbacks.php
│   │   │       │           │   ├── ObjectWithNamespacesAndList.php
│   │   │       │           │   ├── ObjectWithNullProperty.php
│   │   │       │           │   ├── ObjectWithObjectProperty.php
│   │   │       │           │   ├── ObjectWithVersionedVirtualProperties.php
│   │   │       │           │   ├── ObjectWithVirtualProperties.php
│   │   │       │           │   ├── ObjectWithVirtualPropertiesAndExcludeAll.php
│   │   │       │           │   ├── ObjectWithVirtualXmlProperties.php
│   │   │       │           │   ├── ObjectWithXmlKeyValuePairs.php
│   │   │       │           │   ├── ObjectWithXmlNamespaces.php
│   │   │       │           │   ├── ObjectWithXmlRootNamespace.php
│   │   │       │           │   ├── Order.php
│   │   │       │           │   ├── Person.php
│   │   │       │           │   ├── PersonCollection.php
│   │   │       │           │   ├── PersonLocation.php
│   │   │       │           │   ├── Price.php
│   │   │       │           │   ├── Publisher.php
│   │   │       │           │   ├── SimpleClassObject.php
│   │   │       │           │   ├── SimpleObject.php
│   │   │       │           │   ├── SimpleObjectProxy.php
│   │   │       │           │   ├── SimpleSubClassObject.php
│   │   │       │           │   ├── Tag.php
│   │   │       │           │   ├── Timestamp.php
│   │   │       │           │   ├── Tree.php
│   │   │       │           │   ├── VehicleInterfaceGarage.php
│   │   │       │           │   └── VersionedObject.php
│   │   │       │           ├── Handler
│   │   │       │           │   ├── FormErrorHandlerTest.php
│   │   │       │           │   └── PropelCollectionHandlerTest.php
│   │   │       │           ├── Metadata
│   │   │       │           │   ├── ClassMetadataTest.php
│   │   │       │           │   └── Driver
│   │   │       │           │       ├── AnnotationDriverTest.php
│   │   │       │           │       ├── BaseDriverTest.php
│   │   │       │           │       ├── DoctrineDriverTest.php
│   │   │       │           │       ├── DoctrinePHPCRDriverTest.php
│   │   │       │           │       ├── PhpDriverTest.php
│   │   │       │           │       ├── XmlDriverTest.php
│   │   │       │           │       ├── YamlDriverTest.php
│   │   │       │           │       ├── php
│   │   │       │           │       │   ├── AuthorReadOnly.php
│   │   │       │           │       │   ├── AuthorReadOnlyPerClass.php
│   │   │       │           │       │   ├── BlogPost.php
│   │   │       │           │       │   ├── Discriminator.Car.php
│   │   │       │           │       │   ├── Discriminator.Moped.php
│   │   │       │           │       │   ├── Discriminator.Vehicle.php
│   │   │       │           │       │   ├── Node.php
│   │   │       │           │       │   ├── ObjectWithAbsentXmlListNode.php
│   │   │       │           │       │   ├── ObjectWithHandlerCallbacks.php
│   │   │       │           │       │   ├── ObjectWithVirtualProperties.php
│   │   │       │           │       │   ├── ObjectWithVirtualPropertiesAndExcludeAll.php
│   │   │       │           │       │   ├── ObjectWithXmlKeyValuePairs.php
│   │   │       │           │       │   ├── ObjectWithXmlNamespaces.php
│   │   │       │           │       │   ├── Person.php
│   │   │       │           │       │   ├── Price.php
│   │   │       │           │       │   ├── SimpleClassObject.php
│   │   │       │           │       │   └── SimpleSubClassObject.php
│   │   │       │           │       ├── xml
│   │   │       │           │       │   ├── AuthorReadOnly.xml
│   │   │       │           │       │   ├── AuthorReadOnlyPerClass.xml
│   │   │       │           │       │   ├── BlogPost.xml
│   │   │       │           │       │   ├── Discriminator.Car.xml
│   │   │       │           │       │   ├── Discriminator.Moped.xml
│   │   │       │           │       │   ├── Discriminator.Vehicle.xml
│   │   │       │           │       │   ├── GetSetObject.xml
│   │   │       │           │       │   ├── Node.xml
│   │   │       │           │       │   ├── ObjectWithAbsentXmlListNode.xml
│   │   │       │           │       │   ├── ObjectWithHandlerCallbacks.xml
│   │   │       │           │       │   ├── ObjectWithVirtualProperties.xml
│   │   │       │           │       │   ├── ObjectWithVirtualPropertiesAndExcludeAll.xml
│   │   │       │           │       │   ├── ObjectWithXmlKeyValuePairs.xml
│   │   │       │           │       │   ├── ObjectWithXmlNamespaces.xml
│   │   │       │           │       │   ├── Person.xml
│   │   │       │           │       │   ├── Price.xml
│   │   │       │           │       │   ├── SimpleClassObject.xml
│   │   │       │           │       │   ├── SimpleSubClassObject.xml
│   │   │       │           │       │   ├── case
│   │   │       │           │       │   │   └── BlogPost.xml
│   │   │       │           │       │   ├── exclude_all
│   │   │       │           │       │   │   └── BlogPost.xml
│   │   │       │           │       │   ├── exclude_none
│   │   │       │           │       │   │   └── BlogPost.xml
│   │   │       │           │       │   └── invalid.xml
│   │   │       │           │       └── yml
│   │   │       │           │           ├── AuthorReadOnly.yml
│   │   │       │           │           ├── AuthorReadOnlyPerClass.yml
│   │   │       │           │           ├── BlogPost.yml
│   │   │       │           │           ├── Discriminator.Car.yml
│   │   │       │           │           ├── Discriminator.Moped.yml
│   │   │       │           │           ├── Discriminator.Vehicle.yml
│   │   │       │           │           ├── Node.yml
│   │   │       │           │           ├── ObjectWithAbsentXmlListNode.yml
│   │   │       │           │           ├── ObjectWithHandlerCallbacks.yml
│   │   │       │           │           ├── ObjectWithVirtualProperties.yml
│   │   │       │           │           ├── ObjectWithVirtualPropertiesAndExcludeAll.yml
│   │   │       │           │           ├── ObjectWithXmlKeyValuePairs.yml
│   │   │       │           │           ├── ObjectWithXmlNamespaces.yml
│   │   │       │           │           ├── Person.yml
│   │   │       │           │           ├── Price.yml
│   │   │       │           │           ├── SimpleClassObject.yml
│   │   │       │           │           ├── SimpleSubClassObject.yml
│   │   │       │           │           ├── accessor
│   │   │       │           │           │   └── BlogPost.yml
│   │   │       │           │           ├── accessor_inferred
│   │   │       │           │           │   └── Person.yml
│   │   │       │           │           ├── case
│   │   │       │           │           │   └── BlogPost.yml
│   │   │       │           │           ├── exclude_all
│   │   │       │           │           │   └── BlogPost.yml
│   │   │       │           │           ├── exclude_none
│   │   │       │           │           │   └── BlogPost.yml
│   │   │       │           │           └── short_expose
│   │   │       │           │               └── Person.yml
│   │   │       │           ├── Serializer
│   │   │       │           │   ├── ArrayTest.php
│   │   │       │           │   ├── BaseSerializationTest.php
│   │   │       │           │   ├── ContextTest.php
│   │   │       │           │   ├── DateIntervalFormatTest.php
│   │   │       │           │   ├── Doctrine
│   │   │       │           │   │   └── IntegrationTest.php
│   │   │       │           │   ├── EventDispatcher
│   │   │       │           │   │   ├── EventDispatcherTest.php
│   │   │       │           │   │   └── Subscriber
│   │   │       │           │   │       ├── DoctrineProxySubscriberTest.php
│   │   │       │           │   │       └── SymfonyValidatorSubscriberTest.php
│   │   │       │           │   ├── GraphNavigatorTest.php
│   │   │       │           │   ├── JsonSerializationTest.php
│   │   │       │           │   ├── Naming
│   │   │       │           │   │   └── IdenticalPropertyNamingStrategyTest.php
│   │   │       │           │   ├── SerializationContextFactoryTest.php
│   │   │       │           │   ├── TypeParserTest.php
│   │   │       │           │   ├── XmlSerializationTest.php
│   │   │       │           │   ├── YamlSerializationTest.php
│   │   │       │           │   ├── xml
│   │   │       │           │   │   ├── accessor_order_child.xml
│   │   │       │           │   │   ├── accessor_order_methods.xml
│   │   │       │           │   │   ├── accessor_order_parent.xml
│   │   │       │           │   │   ├── array_booleans.xml
│   │   │       │           │   │   ├── array_datetimes_object.xml
│   │   │       │           │   │   ├── array_floats.xml
│   │   │       │           │   │   ├── array_integers.xml
│   │   │       │           │   │   ├── array_key_values.xml
│   │   │       │           │   │   ├── array_list_and_map_difference.xml
│   │   │       │           │   │   ├── array_mixed.xml
│   │   │       │           │   │   ├── array_named_datetimes_object.xml
│   │   │       │           │   │   ├── array_objects.xml
│   │   │       │           │   │   ├── array_strings.xml
│   │   │       │           │   │   ├── article.xml
│   │   │       │           │   │   ├── blog_post.xml
│   │   │       │           │   │   ├── blog_post_unauthored.xml
│   │   │       │           │   │   ├── boolean_false.xml
│   │   │       │           │   │   ├── boolean_true.xml
│   │   │       │           │   │   ├── car.xml
│   │   │       │           │   │   ├── car_without_type.xml
│   │   │       │           │   │   ├── circular_reference.xml
│   │   │       │           │   │   ├── constraint_violation.xml
│   │   │       │           │   │   ├── constraint_violation_list.xml
│   │   │       │           │   │   ├── currency_aware_price.xml
│   │   │       │           │   │   ├── custom_accessor.xml
│   │   │       │           │   │   ├── date_interval.xml
│   │   │       │           │   │   ├── date_time.xml
│   │   │       │           │   │   ├── date_time_no_cdata.xml
│   │   │       │           │   │   ├── float.xml
│   │   │       │           │   │   ├── float_trailing_zero.xml
│   │   │       │           │   │   ├── form_errors.xml
│   │   │       │           │   │   ├── garage.xml
│   │   │       │           │   │   ├── groups_advanced.xml
│   │   │       │           │   │   ├── groups_all.xml
│   │   │       │           │   │   ├── groups_default.xml
│   │   │       │           │   │   ├── groups_foo.xml
│   │   │       │           │   │   ├── groups_foobar.xml
│   │   │       │           │   │   ├── hash_empty.xml
│   │   │       │           │   │   ├── inline.xml
│   │   │       │           │   │   ├── inline_child_empty.xml
│   │   │       │           │   │   ├── input.xml
│   │   │       │           │   │   ├── integer.xml
│   │   │       │           │   │   ├── lifecycle_callbacks.xml
│   │   │       │           │   │   ├── log.xml
│   │   │       │           │   │   ├── mixed_access_types.xml
│   │   │       │           │   │   ├── nested_form_errors.xml
│   │   │       │           │   │   ├── null.xml
│   │   │       │           │   │   ├── nullable.xml
│   │   │       │           │   │   ├── nullable_arrays.xml
│   │   │       │           │   │   ├── nullable_skip.xml
│   │   │       │           │   │   ├── object_when_null.xml
│   │   │       │           │   │   ├── object_when_null_and_serialized.xml
│   │   │       │           │   │   ├── object_with_namespaces_and_list.xml
│   │   │       │           │   │   ├── object_with_xml_namespaces.xml
│   │   │       │           │   │   ├── object_with_xml_namespacesalias.xml
│   │   │       │           │   │   ├── object_with_xml_root_namespace.xml
│   │   │       │           │   │   ├── order.xml
│   │   │       │           │   │   ├── order_with_currency_aware_price.xml
│   │   │       │           │   │   ├── orm_proxy.xml
│   │   │       │           │   │   ├── person_collection.xml
│   │   │       │           │   │   ├── person_location.xml
│   │   │       │           │   │   ├── price.xml
│   │   │       │           │   │   ├── readonly.xml
│   │   │       │           │   │   ├── simple_class_object.xml
│   │   │       │           │   │   ├── simple_class_object_minified.xml
│   │   │       │           │   │   ├── simple_object.xml
│   │   │       │           │   │   ├── simple_object_nullable.xml
│   │   │       │           │   │   ├── simple_subclass_object.xml
│   │   │       │           │   │   ├── string.xml
│   │   │       │           │   │   ├── timestamp.xml
│   │   │       │           │   │   ├── timestamp_prev.xml
│   │   │       │           │   │   ├── tree.xml
│   │   │       │           │   │   ├── virtual_attributes.xml
│   │   │       │           │   │   ├── virtual_properties.xml
│   │   │       │           │   │   ├── virtual_properties_all.xml
│   │   │       │           │   │   ├── virtual_properties_high.xml
│   │   │       │           │   │   ├── virtual_properties_list.xml
│   │   │       │           │   │   ├── virtual_properties_low.xml
│   │   │       │           │   │   ├── virtual_properties_map.xml
│   │   │       │           │   │   └── virtual_values.xml
│   │   │       │           │   └── yml
│   │   │       │           │       ├── accessor_order_child.yml
│   │   │       │           │       ├── accessor_order_methods.yml
│   │   │       │           │       ├── accessor_order_parent.yml
│   │   │       │           │       ├── array_booleans.yml
│   │   │       │           │       ├── array_datetimes_object.yml
│   │   │       │           │       ├── array_empty.yml
│   │   │       │           │       ├── array_floats.yml
│   │   │       │           │       ├── array_integers.yml
│   │   │       │           │       ├── array_list_and_map_difference.yml
│   │   │       │           │       ├── array_mixed.yml
│   │   │       │           │       ├── array_named_datetimes_object.yml
│   │   │       │           │       ├── array_objects.yml
│   │   │       │           │       ├── array_strings.yml
│   │   │       │           │       ├── article.yml
│   │   │       │           │       ├── blog_post.yml
│   │   │       │           │       ├── blog_post_unauthored.yml
│   │   │       │           │       ├── boolean_false.yml
│   │   │       │           │       ├── boolean_true.yml
│   │   │       │           │       ├── car.yml
│   │   │       │           │       ├── car_without_type.yml
│   │   │       │           │       ├── circular_reference.yml
│   │   │       │           │       ├── currency_aware_price.yml
│   │   │       │           │       ├── custom_accessor.yml
│   │   │       │           │       ├── date_interval.yml
│   │   │       │           │       ├── date_time.yml
│   │   │       │           │       ├── float.yml
│   │   │       │           │       ├── float_trailing_zero.yml
│   │   │       │           │       ├── garage.yml
│   │   │       │           │       ├── groups_advanced.yml
│   │   │       │           │       ├── groups_all.yml
│   │   │       │           │       ├── groups_default.yml
│   │   │       │           │       ├── groups_foo.yml
│   │   │       │           │       ├── groups_foobar.yml
│   │   │       │           │       ├── hash_empty.yml
│   │   │       │           │       ├── inline.yml
│   │   │       │           │       ├── inline_child_empty.yml
│   │   │       │           │       ├── input.yml
│   │   │       │           │       ├── integer.yml
│   │   │       │           │       ├── lifecycle_callbacks.yml
│   │   │       │           │       ├── log.yml
│   │   │       │           │       ├── mixed_access_types.yml
│   │   │       │           │       ├── null.yml
│   │   │       │           │       ├── nullable.yml
│   │   │       │           │       ├── nullable_arrays.yml
│   │   │       │           │       ├── nullable_skip.yml
│   │   │       │           │       ├── object_when_null.yml
│   │   │       │           │       ├── object_when_null_and_serialized.yml
│   │   │       │           │       ├── order.yml
│   │   │       │           │       ├── order_with_currency_aware_price.yml
│   │   │       │           │       ├── orm_proxy.yml
│   │   │       │           │       ├── price.yml
│   │   │       │           │       ├── readonly.yml
│   │   │       │           │       ├── simple_object.yml
│   │   │       │           │       ├── simple_object_nullable.yml
│   │   │       │           │       ├── string.yml
│   │   │       │           │       ├── timestamp.yml
│   │   │       │           │       ├── timestamp_prev.yml
│   │   │       │           │       ├── tree.yml
│   │   │       │           │       ├── virtual_properties.yml
│   │   │       │           │       ├── virtual_properties_all.yml
│   │   │       │           │       ├── virtual_properties_high.yml
│   │   │       │           │       └── virtual_properties_low.yml
│   │   │       │           ├── SerializerBuilderTest.php
│   │   │       │           └── Twig
│   │   │       │               └── SerializerExtensionTest.php
│   │   │       ├── benchmark.php
│   │   │       └── bootstrap.php
│   │   └── serializer-bundle
│   │       └── JMS
│   │           └── SerializerBundle
│   │               ├── DependencyInjection
│   │               │   ├── Compiler
│   │               │   │   ├── CustomHandlersPass.php
│   │               │   │   ├── DoctrinePass.php
│   │               │   │   ├── RegisterEventListenersAndSubscribersPass.php
│   │               │   │   └── ServiceMapPass.php
│   │               │   ├── Configuration.php
│   │               │   └── JMSSerializerExtension.php
│   │               ├── JMSSerializerBundle.php
│   │               ├── README.md
│   │               ├── Resources
│   │               │   ├── config
│   │               │   │   └── services.xml
│   │               │   ├── doc
│   │               │   │   ├── LICENSE
│   │               │   │   ├── configuration.rst
│   │               │   │   ├── cookbook
│   │               │   │   │   └── exclusion_strategies.rst
│   │               │   │   ├── cookbook.rst
│   │               │   │   ├── event_system.rst
│   │               │   │   ├── handlers.rst
│   │               │   │   ├── index.rst
│   │               │   │   ├── installation.rst
│   │               │   │   ├── reference
│   │               │   │   │   ├── annotations.rst
│   │               │   │   │   ├── xml_reference.rst
│   │               │   │   │   └── yml_reference.rst
│   │               │   │   ├── reference.rst
│   │               │   │   └── usage.rst
│   │               │   └── meta
│   │               │       └── LICENSE
│   │               ├── Serializer
│   │               │   └── StopwatchEventSubscriber.php
│   │               ├── Templating
│   │               │   └── SerializerHelper.php
│   │               ├── Tests
│   │               │   ├── DependencyInjection
│   │               │   │   ├── Fixture
│   │               │   │   │   ├── SimpleObject.php
│   │               │   │   │   └── VersionedObject.php
│   │               │   │   └── JMSSerializerExtensionTest.php
│   │               │   └── bootstrap.php
│   │               ├── UPGRADING.md
│   │               ├── composer.json
│   │               └── phpunit.xml.dist
│   ├── justinrainbow
│   │   └── json-schema
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── bin
│   │       │   └── validate-json
│   │       ├── composer.json
│   │       ├── phpunit.xml.dist
│   │       └── src
│   │           └── JsonSchema
│   │               ├── Constraints
│   │               │   ├── CollectionConstraint.php
│   │               │   ├── Constraint.php
│   │               │   ├── ConstraintInterface.php
│   │               │   ├── EnumConstraint.php
│   │               │   ├── Factory.php
│   │               │   ├── FormatConstraint.php
│   │               │   ├── NumberConstraint.php
│   │               │   ├── ObjectConstraint.php
│   │               │   ├── SchemaConstraint.php
│   │               │   ├── StringConstraint.php
│   │               │   ├── TypeConstraint.php
│   │               │   └── UndefinedConstraint.php
│   │               ├── Exception
│   │               │   ├── InvalidArgumentException.php
│   │               │   ├── InvalidSchemaMediaTypeException.php
│   │               │   ├── InvalidSourceUriException.php
│   │               │   ├── JsonDecodingException.php
│   │               │   ├── ResourceNotFoundException.php
│   │               │   └── UriResolverException.php
│   │               ├── RefResolver.php
│   │               ├── Uri
│   │               │   ├── Retrievers
│   │               │   │   ├── AbstractRetriever.php
│   │               │   │   ├── Curl.php
│   │               │   │   ├── FileGetContents.php
│   │               │   │   ├── PredefinedArray.php
│   │               │   │   └── UriRetrieverInterface.php
│   │               │   ├── UriResolver.php
│   │               │   └── UriRetriever.php
│   │               └── Validator.php
│   ├── mongodb
│   │   └── mongodb
│   │       ├── CONTRIBUTING.md
│   │       ├── LICENSE
│   │       ├── Makefile
│   │       ├── README.md
│   │       ├── composer.json
│   │       ├── docs
│   │       │   ├── images
│   │       │   │   └── save-flowchart.png
│   │       │   ├── includes
│   │       │   │   ├── apiargs-MongoDBClient-method-construct-driverOptions.yaml
│   │       │   │   ├── apiargs-MongoDBClient-method-construct-param.yaml
│   │       │   │   ├── apiargs-MongoDBClient-method-dropDatabase-option.yaml
│   │       │   │   ├── apiargs-MongoDBClient-method-dropDatabase-param.yaml
│   │       │   │   ├── apiargs-MongoDBClient-method-get-param.yaml
│   │       │   │   ├── apiargs-MongoDBClient-method-listDatabases-option.yaml
│   │       │   │   ├── apiargs-MongoDBClient-method-listDatabases-param.yaml
│   │       │   │   ├── apiargs-MongoDBClient-method-selectCollection-option.yaml
│   │       │   │   ├── apiargs-MongoDBClient-method-selectCollection-param.yaml
│   │       │   │   ├── apiargs-MongoDBClient-method-selectDatabase-option.yaml
│   │       │   │   ├── apiargs-MongoDBClient-method-selectDatabase-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-common-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-common-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-aggregate-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-aggregate-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-bulkWrite-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-bulkWrite-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-construct-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-construct-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-count-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-count-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-createIndex-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-createIndex-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-createIndexes-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-createIndexes-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-deleteMany-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-deleteMany-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-deleteOne-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-deleteOne-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-distinct-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-distinct-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-drop-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-drop-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-dropIndex-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-dropIndex-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-dropIndexes-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-dropIndexes-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-find-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-find-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-findOne-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-findOne-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-findOneAndDelete-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-findOneAndDelete-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-findOneAndReplace-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-findOneAndReplace-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-findOneAndUpdate-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-findOneAndUpdate-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-insertMany-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-insertMany-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-insertOne-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-insertOne-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-listIndexes-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-listIndexes-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-replaceOne-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-replaceOne-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-updateMany-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-updateMany-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-updateOne-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-updateOne-param.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-withOptions-option.yaml
│   │       │   │   ├── apiargs-MongoDBCollection-method-withOptions-param.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-common-option.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-command-option.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-command-param.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-construct-option.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-construct-param.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-createCollection-option.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-createCollection-param.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-drop-option.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-drop-param.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-dropCollection-option.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-dropCollection-param.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-get-param.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-listCollections-option.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-listCollections-param.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-selectCollection-option.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-selectCollection-param.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-selectGridFSBucket-option.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-selectGridFSBucket-param.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-withOptions-option.yaml
│   │       │   │   ├── apiargs-MongoDBDatabase-method-withOptions-param.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-common-option.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-common-param.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-construct-option.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-construct-param.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-delete-param.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-downloadToStream-param.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-downloadToStreamByName-option.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-downloadToStreamByName-param.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-find-option.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-findOne-option.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-getFileDocumentForStream-param.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-getFileIdForStream-param.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-openDownloadStream-param.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-openDownloadStreamByName-option.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-openDownloadStreamByName-param.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-openUploadStream-option.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-openUploadStream-param.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-rename-param.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-uploadFromStream-option.yaml
│   │       │   │   ├── apiargs-MongoDBGridFSBucket-method-uploadFromStream-param.yaml
│   │       │   │   ├── apiargs-common-option.yaml
│   │       │   │   ├── apiargs-common-param.yaml
│   │       │   │   └── extracts-error.yaml
│   │       │   ├── index.txt
│   │       │   ├── pretty.js
│   │       │   ├── reference
│   │       │   │   ├── bson.txt
│   │       │   │   ├── class
│   │       │   │   │   ├── MongoDBClient.txt
│   │       │   │   │   ├── MongoDBCollection.txt
│   │       │   │   │   ├── MongoDBDatabase.txt
│   │       │   │   │   └── MongoDBGridFSBucket.txt
│   │       │   │   ├── enumeration-classes.txt
│   │       │   │   ├── exception-classes.txt
│   │       │   │   ├── method
│   │       │   │   │   ├── MongoDBBulkWriteResult-getDeletedCount.txt
│   │       │   │   │   ├── MongoDBBulkWriteResult-getInsertedCount.txt
│   │       │   │   │   ├── MongoDBBulkWriteResult-getInsertedIds.txt
│   │       │   │   │   ├── MongoDBBulkWriteResult-getMatchedCount.txt
│   │       │   │   │   ├── MongoDBBulkWriteResult-getModifiedCount.txt
│   │       │   │   │   ├── MongoDBBulkWriteResult-getUpsertedCount.txt
│   │       │   │   │   ├── MongoDBBulkWriteResult-getUpsertedIds.txt
│   │       │   │   │   ├── MongoDBBulkWriteResult-isAcknowledged.txt
│   │       │   │   │   ├── MongoDBClient-dropDatabase.txt
│   │       │   │   │   ├── MongoDBClient-getManager.txt
│   │       │   │   │   ├── MongoDBClient-listDatabases.txt
│   │       │   │   │   ├── MongoDBClient-selectCollection.txt
│   │       │   │   │   ├── MongoDBClient-selectDatabase.txt
│   │       │   │   │   ├── MongoDBClient__construct.txt
│   │       │   │   │   ├── MongoDBClient__get.txt
│   │       │   │   │   ├── MongoDBCollection-aggregate.txt
│   │       │   │   │   ├── MongoDBCollection-bulkWrite.txt
│   │       │   │   │   ├── MongoDBCollection-count.txt
│   │       │   │   │   ├── MongoDBCollection-createIndex.txt
│   │       │   │   │   ├── MongoDBCollection-createIndexes.txt
│   │       │   │   │   ├── MongoDBCollection-deleteMany.txt
│   │       │   │   │   ├── MongoDBCollection-deleteOne.txt
│   │       │   │   │   ├── MongoDBCollection-distinct.txt
│   │       │   │   │   ├── MongoDBCollection-drop.txt
│   │       │   │   │   ├── MongoDBCollection-dropIndex.txt
│   │       │   │   │   ├── MongoDBCollection-dropIndexes.txt
│   │       │   │   │   ├── MongoDBCollection-find.txt
│   │       │   │   │   ├── MongoDBCollection-findOne.txt
│   │       │   │   │   ├── MongoDBCollection-findOneAndDelete.txt
│   │       │   │   │   ├── MongoDBCollection-findOneAndReplace.txt
│   │       │   │   │   ├── MongoDBCollection-findOneAndUpdate.txt
│   │       │   │   │   ├── MongoDBCollection-getCollectionName.txt
│   │       │   │   │   ├── MongoDBCollection-getDatabaseName.txt
│   │       │   │   │   ├── MongoDBCollection-getManager.txt
│   │       │   │   │   ├── MongoDBCollection-getNamespace.txt
│   │       │   │   │   ├── MongoDBCollection-insertMany.txt
│   │       │   │   │   ├── MongoDBCollection-insertOne.txt
│   │       │   │   │   ├── MongoDBCollection-listIndexes.txt
│   │       │   │   │   ├── MongoDBCollection-replaceOne.txt
│   │       │   │   │   ├── MongoDBCollection-updateMany.txt
│   │       │   │   │   ├── MongoDBCollection-updateOne.txt
│   │       │   │   │   ├── MongoDBCollection-withOptions.txt
│   │       │   │   │   ├── MongoDBCollection__construct.txt
│   │       │   │   │   ├── MongoDBDatabase-command.txt
│   │       │   │   │   ├── MongoDBDatabase-createCollection.txt
│   │       │   │   │   ├── MongoDBDatabase-drop.txt
│   │       │   │   │   ├── MongoDBDatabase-dropCollection.txt
│   │       │   │   │   ├── MongoDBDatabase-getDatabaseName.txt
│   │       │   │   │   ├── MongoDBDatabase-getManager.txt
│   │       │   │   │   ├── MongoDBDatabase-listCollections.txt
│   │       │   │   │   ├── MongoDBDatabase-selectCollection.txt
│   │       │   │   │   ├── MongoDBDatabase-selectGridFSBucket.txt
│   │       │   │   │   ├── MongoDBDatabase-withOptions.txt
│   │       │   │   │   ├── MongoDBDatabase__construct.txt
│   │       │   │   │   ├── MongoDBDatabase__get.txt
│   │       │   │   │   ├── MongoDBDeleteResult-getDeletedCount.txt
│   │       │   │   │   ├── MongoDBDeleteResult-isAcknowledged.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-delete.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-downloadToStream.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-downloadToStreamByName.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-drop.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-find.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-findOne.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-getBucketName.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-getDatabaseName.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-getFileDocumentForStream.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-getFileIdForStream.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-openDownloadStream.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-openDownloadStreamByName.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-openUploadStream.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-rename.txt
│   │       │   │   │   ├── MongoDBGridFSBucket-uploadFromStream.txt
│   │       │   │   │   ├── MongoDBGridFSBucket__construct.txt
│   │       │   │   │   ├── MongoDBInsertManyResult-getInsertedCount.txt
│   │       │   │   │   ├── MongoDBInsertManyResult-getInsertedIds.txt
│   │       │   │   │   ├── MongoDBInsertManyResult-isAcknowledged.txt
│   │       │   │   │   ├── MongoDBInsertOneResult-getInsertedCount.txt
│   │       │   │   │   ├── MongoDBInsertOneResult-getInsertedId.txt
│   │       │   │   │   ├── MongoDBInsertOneResult-isAcknowledged.txt
│   │       │   │   │   ├── MongoDBModelCollectionInfo-getCappedMax.txt
│   │       │   │   │   ├── MongoDBModelCollectionInfo-getCappedSize.txt
│   │       │   │   │   ├── MongoDBModelCollectionInfo-getName.txt
│   │       │   │   │   ├── MongoDBModelCollectionInfo-getOptions.txt
│   │       │   │   │   ├── MongoDBModelCollectionInfo-isCapped.txt
│   │       │   │   │   ├── MongoDBModelDatabaseInfo-getName.txt
│   │       │   │   │   ├── MongoDBModelDatabaseInfo-getSizeOnDisk.txt
│   │       │   │   │   ├── MongoDBModelDatabaseInfo-isEmpty.txt
│   │       │   │   │   ├── MongoDBModelIndexInfo-getKey.txt
│   │       │   │   │   ├── MongoDBModelIndexInfo-getName.txt
│   │       │   │   │   ├── MongoDBModelIndexInfo-getNamespace.txt
│   │       │   │   │   ├── MongoDBModelIndexInfo-getVersion.txt
│   │       │   │   │   ├── MongoDBModelIndexInfo-isSparse.txt
│   │       │   │   │   ├── MongoDBModelIndexInfo-isTtl.txt
│   │       │   │   │   ├── MongoDBModelIndexInfo-isUnique.txt
│   │       │   │   │   ├── MongoDBUpdateResult-getMatchedCount.txt
│   │       │   │   │   ├── MongoDBUpdateResult-getModifiedCount.txt
│   │       │   │   │   ├── MongoDBUpdateResult-getUpsertedCount.txt
│   │       │   │   │   ├── MongoDBUpdateResult-getUpsertedId.txt
│   │       │   │   │   └── MongoDBUpdateResult-isAcknowledged.txt
│   │       │   │   └── write-result-classes.txt
│   │       │   ├── reference.txt
│   │       │   ├── tutorial
│   │       │   │   ├── commands.txt
│   │       │   │   ├── crud.txt
│   │       │   │   ├── example-data.txt
│   │       │   │   ├── gridfs.txt
│   │       │   │   ├── indexes.txt
│   │       │   │   └── install-php-library.txt
│   │       │   ├── tutorial.txt
│   │       │   └── upgrade.txt
│   │       ├── phpunit.xml.dist
│   │       ├── src
│   │       │   ├── BulkWriteResult.php
│   │       │   ├── Client.php
│   │       │   ├── Collection.php
│   │       │   ├── Database.php
│   │       │   ├── DeleteResult.php
│   │       │   ├── Exception
│   │       │   │   ├── BadMethodCallException.php
│   │       │   │   ├── Exception.php
│   │       │   │   ├── InvalidArgumentException.php
│   │       │   │   ├── RuntimeException.php
│   │       │   │   ├── UnexpectedValueException.php
│   │       │   │   └── UnsupportedException.php
│   │       │   ├── GridFS
│   │       │   │   ├── Bucket.php
│   │       │   │   ├── CollectionWrapper.php
│   │       │   │   ├── Exception
│   │       │   │   │   ├── CorruptFileException.php
│   │       │   │   │   └── FileNotFoundException.php
│   │       │   │   ├── ReadableStream.php
│   │       │   │   ├── StreamWrapper.php
│   │       │   │   └── WritableStream.php
│   │       │   ├── InsertManyResult.php
│   │       │   ├── InsertOneResult.php
│   │       │   ├── Model
│   │       │   │   ├── BSONArray.php
│   │       │   │   ├── BSONDocument.php
│   │       │   │   ├── CollectionInfo.php
│   │       │   │   ├── CollectionInfoCommandIterator.php
│   │       │   │   ├── CollectionInfoIterator.php
│   │       │   │   ├── CollectionInfoLegacyIterator.php
│   │       │   │   ├── DatabaseInfo.php
│   │       │   │   ├── DatabaseInfoIterator.php
│   │       │   │   ├── DatabaseInfoLegacyIterator.php
│   │       │   │   ├── IndexInfo.php
│   │       │   │   ├── IndexInfoIterator.php
│   │       │   │   ├── IndexInfoIteratorIterator.php
│   │       │   │   ├── IndexInput.php
│   │       │   │   └── TypeMapArrayIterator.php
│   │       │   ├── Operation
│   │       │   │   ├── Aggregate.php
│   │       │   │   ├── BulkWrite.php
│   │       │   │   ├── Count.php
│   │       │   │   ├── CreateCollection.php
│   │       │   │   ├── CreateIndexes.php
│   │       │   │   ├── DatabaseCommand.php
│   │       │   │   ├── Delete.php
│   │       │   │   ├── DeleteMany.php
│   │       │   │   ├── DeleteOne.php
│   │       │   │   ├── Distinct.php
│   │       │   │   ├── DropCollection.php
│   │       │   │   ├── DropDatabase.php
│   │       │   │   ├── DropIndexes.php
│   │       │   │   ├── Executable.php
│   │       │   │   ├── Find.php
│   │       │   │   ├── FindAndModify.php
│   │       │   │   ├── FindOne.php
│   │       │   │   ├── FindOneAndDelete.php
│   │       │   │   ├── FindOneAndReplace.php
│   │       │   │   ├── FindOneAndUpdate.php
│   │       │   │   ├── InsertMany.php
│   │       │   │   ├── InsertOne.php
│   │       │   │   ├── ListCollections.php
│   │       │   │   ├── ListDatabases.php
│   │       │   │   ├── ListIndexes.php
│   │       │   │   ├── ReplaceOne.php
│   │       │   │   ├── Update.php
│   │       │   │   ├── UpdateMany.php
│   │       │   │   └── UpdateOne.php
│   │       │   ├── UpdateResult.php
│   │       │   └── functions.php
│   │       └── tests
│   │           ├── ClientFunctionalTest.php
│   │           ├── ClientTest.php
│   │           ├── Collection
│   │           │   ├── CollectionFunctionalTest.php
│   │           │   ├── CrudSpecFunctionalTest.php
│   │           │   ├── FunctionalTestCase.php
│   │           │   └── spec-tests
│   │           │       ├── read
│   │           │       │   ├── aggregate-collation.json
│   │           │       │   ├── aggregate-out.json
│   │           │       │   ├── aggregate.json
│   │           │       │   ├── count-collation.json
│   │           │       │   ├── count.json
│   │           │       │   ├── distinct-collation.json
│   │           │       │   ├── distinct.json
│   │           │       │   ├── find-collation.json
│   │           │       │   └── find.json
│   │           │       └── write
│   │           │           ├── deleteMany-collation.json
│   │           │           ├── deleteMany.json
│   │           │           ├── deleteOne-collation.json
│   │           │           ├── deleteOne.json
│   │           │           ├── findOneAndDelete-collation.json
│   │           │           ├── findOneAndDelete.json
│   │           │           ├── findOneAndReplace-collation.json
│   │           │           ├── findOneAndReplace-upsert.json
│   │           │           ├── findOneAndReplace-upsert_pre_2.6.json
│   │           │           ├── findOneAndReplace.json
│   │           │           ├── findOneAndUpdate-collation.json
│   │           │           ├── findOneAndUpdate.json
│   │           │           ├── insertMany.json
│   │           │           ├── insertOne.json
│   │           │           ├── replaceOne-collation.json
│   │           │           ├── replaceOne-pre_2.6.json
│   │           │           ├── replaceOne-upsert.json
│   │           │           ├── replaceOne.json
│   │           │           ├── updateMany-collation.json
│   │           │           ├── updateMany-pre_2.6.json
│   │           │           ├── updateMany.json
│   │           │           ├── updateOne-collation.json
│   │           │           ├── updateOne-pre_2.6.json
│   │           │           └── updateOne.json
│   │           ├── Database
│   │           │   ├── CollectionManagementFunctionalTest.php
│   │           │   ├── DatabaseFunctionalTest.php
│   │           │   └── FunctionalTestCase.php
│   │           ├── FunctionalTestCase.php
│   │           ├── FunctionsTest.php
│   │           ├── GridFS
│   │           │   ├── BucketFunctionalTest.php
│   │           │   ├── FunctionalTestCase.php
│   │           │   ├── ReadableStreamFunctionalTest.php
│   │           │   ├── SpecFunctionalTest.php
│   │           │   ├── StreamWrapperFunctionalTest.php
│   │           │   ├── WritableStreamFunctionalTest.php
│   │           │   └── spec-tests
│   │           │       ├── delete.json
│   │           │       ├── download.json
│   │           │       ├── download_by_name.json
│   │           │       └── upload.json
│   │           ├── Model
│   │           │   ├── BSONArrayTest.php
│   │           │   ├── BSONDocumentTest.php
│   │           │   ├── CollectionInfoTest.php
│   │           │   ├── DatabaseInfoTest.php
│   │           │   ├── IndexInfoTest.php
│   │           │   └── IndexInputTest.php
│   │           ├── Operation
│   │           │   ├── AggregateFunctionalTest.php
│   │           │   ├── AggregateTest.php
│   │           │   ├── BulkWriteFunctionalTest.php
│   │           │   ├── BulkWriteTest.php
│   │           │   ├── CountTest.php
│   │           │   ├── CreateCollectionTest.php
│   │           │   ├── CreateIndexesFunctionalTest.php
│   │           │   ├── CreateIndexesTest.php
│   │           │   ├── DatabaseCommandTest.php
│   │           │   ├── DeleteFunctionalTest.php
│   │           │   ├── DeleteTest.php
│   │           │   ├── DistinctTest.php
│   │           │   ├── DropCollectionFunctionalTest.php
│   │           │   ├── DropCollectionTest.php
│   │           │   ├── DropDatabaseFunctionalTest.php
│   │           │   ├── DropDatabaseTest.php
│   │           │   ├── DropIndexesFunctionalTest.php
│   │           │   ├── DropIndexesTest.php
│   │           │   ├── FindAndModifyFunctionalTest.php
│   │           │   ├── FindAndModifyTest.php
│   │           │   ├── FindFunctionalTest.php
│   │           │   ├── FindOneAndDeleteTest.php
│   │           │   ├── FindOneAndReplaceTest.php
│   │           │   ├── FindOneAndUpdateTest.php
│   │           │   ├── FindOneFunctionalTest.php
│   │           │   ├── FindTest.php
│   │           │   ├── FunctionalTestCase.php
│   │           │   ├── InsertManyFunctionalTest.php
│   │           │   ├── InsertManyTest.php
│   │           │   ├── InsertOneFunctionalTest.php
│   │           │   ├── InsertOneTest.php
│   │           │   ├── ListCollectionsFunctionalTest.php
│   │           │   ├── ListDatabasesTest.php
│   │           │   ├── ListIndexesFunctionalTest.php
│   │           │   ├── ListIndexesTest.php
│   │           │   ├── ReplaceOneTest.php
│   │           │   ├── TestCase.php
│   │           │   ├── UpdateFunctionalTest.php
│   │           │   ├── UpdateManyTest.php
│   │           │   ├── UpdateOneTest.php
│   │           │   └── UpdateTest.php
│   │           ├── PedantryTest.php
│   │           ├── TestCase.php
│   │           └── bootstrap.php
│   ├── monolog
│   │   └── monolog
│   │       ├── CHANGELOG.mdown
│   │       ├── LICENSE
│   │       ├── README.mdown
│   │       ├── composer.json
│   │       ├── doc
│   │       │   ├── 01-usage.md
│   │       │   ├── 02-handlers-formatters-processors.md
│   │       │   ├── 03-utilities.md
│   │       │   ├── 04-extending.md
│   │       │   └── sockets.md
│   │       ├── phpunit.xml.dist
│   │       ├── src
│   │       │   └── Monolog
│   │       │       ├── ErrorHandler.php
│   │       │       ├── Formatter
│   │       │       │   ├── ChromePHPFormatter.php
│   │       │       │   ├── ElasticaFormatter.php
│   │       │       │   ├── FlowdockFormatter.php
│   │       │       │   ├── FluentdFormatter.php
│   │       │       │   ├── FormatterInterface.php
│   │       │       │   ├── GelfMessageFormatter.php
│   │       │       │   ├── HtmlFormatter.php
│   │       │       │   ├── JsonFormatter.php
│   │       │       │   ├── LineFormatter.php
│   │       │       │   ├── LogglyFormatter.php
│   │       │       │   ├── LogstashFormatter.php
│   │       │       │   ├── MongoDBFormatter.php
│   │       │       │   ├── NormalizerFormatter.php
│   │       │       │   ├── ScalarFormatter.php
│   │       │       │   └── WildfireFormatter.php
│   │       │       ├── Handler
│   │       │       │   ├── AbstractHandler.php
│   │       │       │   ├── AbstractProcessingHandler.php
│   │       │       │   ├── AbstractSyslogHandler.php
│   │       │       │   ├── AmqpHandler.php
│   │       │       │   ├── BrowserConsoleHandler.php
│   │       │       │   ├── BufferHandler.php
│   │       │       │   ├── ChromePHPHandler.php
│   │       │       │   ├── CouchDBHandler.php
│   │       │       │   ├── CubeHandler.php
│   │       │       │   ├── Curl
│   │       │       │   │   └── Util.php
│   │       │       │   ├── DeduplicationHandler.php
│   │       │       │   ├── DoctrineCouchDBHandler.php
│   │       │       │   ├── DynamoDbHandler.php
│   │       │       │   ├── ElasticSearchHandler.php
│   │       │       │   ├── ErrorLogHandler.php
│   │       │       │   ├── FilterHandler.php
│   │       │       │   ├── FingersCrossed
│   │       │       │   │   ├── ActivationStrategyInterface.php
│   │       │       │   │   ├── ChannelLevelActivationStrategy.php
│   │       │       │   │   └── ErrorLevelActivationStrategy.php
│   │       │       │   ├── FingersCrossedHandler.php
│   │       │       │   ├── FirePHPHandler.php
│   │       │       │   ├── FleepHookHandler.php
│   │       │       │   ├── FlowdockHandler.php
│   │       │       │   ├── GelfHandler.php
│   │       │       │   ├── GroupHandler.php
│   │       │       │   ├── HandlerInterface.php
│   │       │       │   ├── HandlerWrapper.php
│   │       │       │   ├── HipChatHandler.php
│   │       │       │   ├── IFTTTHandler.php
│   │       │       │   ├── LogEntriesHandler.php
│   │       │       │   ├── LogglyHandler.php
│   │       │       │   ├── MailHandler.php
│   │       │       │   ├── MandrillHandler.php
│   │       │       │   ├── MissingExtensionException.php
│   │       │       │   ├── MongoDBHandler.php
│   │       │       │   ├── NativeMailerHandler.php
│   │       │       │   ├── NewRelicHandler.php
│   │       │       │   ├── NullHandler.php
│   │       │       │   ├── PHPConsoleHandler.php
│   │       │       │   ├── PsrHandler.php
│   │       │       │   ├── PushoverHandler.php
│   │       │       │   ├── RavenHandler.php
│   │       │       │   ├── RedisHandler.php
│   │       │       │   ├── RollbarHandler.php
│   │       │       │   ├── RotatingFileHandler.php
│   │       │       │   ├── SamplingHandler.php
│   │       │       │   ├── Slack
│   │       │       │   │   └── SlackRecord.php
│   │       │       │   ├── SlackHandler.php
│   │       │       │   ├── SlackWebhookHandler.php
│   │       │       │   ├── SlackbotHandler.php
│   │       │       │   ├── SocketHandler.php
│   │       │       │   ├── StreamHandler.php
│   │       │       │   ├── SwiftMailerHandler.php
│   │       │       │   ├── SyslogHandler.php
│   │       │       │   ├── SyslogUdp
│   │       │       │   │   └── UdpSocket.php
│   │       │       │   ├── SyslogUdpHandler.php
│   │       │       │   ├── TestHandler.php
│   │       │       │   ├── WhatFailureGroupHandler.php
│   │       │       │   └── ZendMonitorHandler.php
│   │       │       ├── Logger.php
│   │       │       ├── Processor
│   │       │       │   ├── GitProcessor.php
│   │       │       │   ├── IntrospectionProcessor.php
│   │       │       │   ├── MemoryPeakUsageProcessor.php
│   │       │       │   ├── MemoryProcessor.php
│   │       │       │   ├── MemoryUsageProcessor.php
│   │       │       │   ├── MercurialProcessor.php
│   │       │       │   ├── ProcessIdProcessor.php
│   │       │       │   ├── PsrLogMessageProcessor.php
│   │       │       │   ├── TagProcessor.php
│   │       │       │   ├── UidProcessor.php
│   │       │       │   └── WebProcessor.php
│   │       │       └── Registry.php
│   │       └── tests
│   │           └── Monolog
│   │               ├── ErrorHandlerTest.php
│   │               ├── Formatter
│   │               │   ├── ChromePHPFormatterTest.php
│   │               │   ├── ElasticaFormatterTest.php
│   │               │   ├── FlowdockFormatterTest.php
│   │               │   ├── FluentdFormatterTest.php
│   │               │   ├── GelfMessageFormatterTest.php
│   │               │   ├── JsonFormatterTest.php
│   │               │   ├── LineFormatterTest.php
│   │               │   ├── LogglyFormatterTest.php
│   │               │   ├── LogstashFormatterTest.php
│   │               │   ├── MongoDBFormatterTest.php
│   │               │   ├── NormalizerFormatterTest.php
│   │               │   ├── ScalarFormatterTest.php
│   │               │   └── WildfireFormatterTest.php
│   │               ├── Handler
│   │               │   ├── AbstractHandlerTest.php
│   │               │   ├── AbstractProcessingHandlerTest.php
│   │               │   ├── AmqpHandlerTest.php
│   │               │   ├── BrowserConsoleHandlerTest.php
│   │               │   ├── BufferHandlerTest.php
│   │               │   ├── ChromePHPHandlerTest.php
│   │               │   ├── CouchDBHandlerTest.php
│   │               │   ├── DeduplicationHandlerTest.php
│   │               │   ├── DoctrineCouchDBHandlerTest.php
│   │               │   ├── DynamoDbHandlerTest.php
│   │               │   ├── ElasticSearchHandlerTest.php
│   │               │   ├── ErrorLogHandlerTest.php
│   │               │   ├── FilterHandlerTest.php
│   │               │   ├── FingersCrossedHandlerTest.php
│   │               │   ├── FirePHPHandlerTest.php
│   │               │   ├── Fixtures
│   │               │   ├── FleepHookHandlerTest.php
│   │               │   ├── FlowdockHandlerTest.php
│   │               │   ├── GelfHandlerLegacyTest.php
│   │               │   ├── GelfHandlerTest.php
│   │               │   ├── GelfMockMessagePublisher.php
│   │               │   ├── GroupHandlerTest.php
│   │               │   ├── HandlerWrapperTest.php
│   │               │   ├── HipChatHandlerTest.php
│   │               │   ├── LogEntriesHandlerTest.php
│   │               │   ├── MailHandlerTest.php
│   │               │   ├── MockRavenClient.php
│   │               │   ├── MongoDBHandlerTest.php
│   │               │   ├── NativeMailerHandlerTest.php
│   │               │   ├── NewRelicHandlerTest.php
│   │               │   ├── NullHandlerTest.php
│   │               │   ├── PHPConsoleHandlerTest.php
│   │               │   ├── PsrHandlerTest.php
│   │               │   ├── PushoverHandlerTest.php
│   │               │   ├── RavenHandlerTest.php
│   │               │   ├── RedisHandlerTest.php
│   │               │   ├── RotatingFileHandlerTest.php
│   │               │   ├── SamplingHandlerTest.php
│   │               │   ├── Slack
│   │               │   │   └── SlackRecordTest.php
│   │               │   ├── SlackHandlerTest.php
│   │               │   ├── SlackWebhookHandlerTest.php
│   │               │   ├── SlackbotHandlerTest.php
│   │               │   ├── SocketHandlerTest.php
│   │               │   ├── StreamHandlerTest.php
│   │               │   ├── SwiftMailerHandlerTest.php
│   │               │   ├── SyslogHandlerTest.php
│   │               │   ├── SyslogUdpHandlerTest.php
│   │               │   ├── TestHandlerTest.php
│   │               │   ├── UdpSocketTest.php
│   │               │   ├── WhatFailureGroupHandlerTest.php
│   │               │   └── ZendMonitorHandlerTest.php
│   │               ├── LoggerTest.php
│   │               ├── Processor
│   │               │   ├── GitProcessorTest.php
│   │               │   ├── IntrospectionProcessorTest.php
│   │               │   ├── MemoryPeakUsageProcessorTest.php
│   │               │   ├── MemoryUsageProcessorTest.php
│   │               │   ├── MercurialProcessorTest.php
│   │               │   ├── ProcessIdProcessorTest.php
│   │               │   ├── PsrLogMessageProcessorTest.php
│   │               │   ├── TagProcessorTest.php
│   │               │   ├── UidProcessorTest.php
│   │               │   └── WebProcessorTest.php
│   │               ├── PsrLogCompatTest.php
│   │               ├── RegistryTest.php
│   │               └── TestCase.php
│   ├── myclabs
│   │   └── deep-copy
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── composer.json
│   │       ├── doc
│   │       │   ├── clone.png
│   │       │   ├── deep-clone.png
│   │       │   ├── deep-copy.png
│   │       │   └── graph.png
│   │       └── src
│   │           └── DeepCopy
│   │               ├── DeepCopy.php
│   │               ├── Exception
│   │               │   └── CloneException.php
│   │               ├── Filter
│   │               │   ├── Doctrine
│   │               │   │   ├── DoctrineCollectionFilter.php
│   │               │   │   ├── DoctrineEmptyCollectionFilter.php
│   │               │   │   └── DoctrineProxyFilter.php
│   │               │   ├── Filter.php
│   │               │   ├── KeepFilter.php
│   │               │   ├── ReplaceFilter.php
│   │               │   └── SetNullFilter.php
│   │               ├── Matcher
│   │               │   ├── Doctrine
│   │               │   │   └── DoctrineProxyMatcher.php
│   │               │   ├── Matcher.php
│   │               │   ├── PropertyMatcher.php
│   │               │   ├── PropertyNameMatcher.php
│   │               │   └── PropertyTypeMatcher.php
│   │               ├── Reflection
│   │               │   └── ReflectionHelper.php
│   │               ├── TypeFilter
│   │               │   ├── ReplaceFilter.php
│   │               │   ├── ShallowCopyFilter.php
│   │               │   ├── Spl
│   │               │   │   └── SplDoublyLinkedList.php
│   │               │   └── TypeFilter.php
│   │               └── TypeMatcher
│   │                   └── TypeMatcher.php
│   ├── nelmio
│   │   └── cors-bundle
│   │       ├── CHANGELOG.md
│   │       ├── DependencyInjection
│   │       │   ├── Compiler
│   │       │   │   └── CorsConfigurationProviderPass.php
│   │       │   ├── Configuration.php
│   │       │   └── NelmioCorsExtension.php
│   │       ├── EventListener
│   │       │   └── CorsListener.php
│   │       ├── LICENSE
│   │       ├── NelmioCorsBundle.php
│   │       ├── Options
│   │       │   ├── ConfigProvider.php
│   │       │   ├── ProviderInterface.php
│   │       │   ├── Resolver.php
│   │       │   └── ResolverInterface.php
│   │       ├── README.md
│   │       ├── Resources
│   │       │   └── config
│   │       │       └── services.xml
│   │       ├── Tests
│   │       │   ├── CorsListenerTest.php
│   │       │   ├── DependencyInjection
│   │       │   │   └── CorsConfigurationProviderPassTest.php
│   │       │   ├── Options
│   │       │   │   ├── ConfigProviderTest.php
│   │       │   │   └── ResolverTest.php
│   │       │   └── bootstrap.php
│   │       ├── composer.json
│   │       └── phpunit.xml.dist
│   ├── paragonie
│   │   └── random_compat
│   │       ├── LICENSE
│   │       ├── build-phar.sh
│   │       ├── composer.json
│   │       ├── dist
│   │       │   ├── random_compat.phar.pubkey
│   │       │   └── random_compat.phar.pubkey.asc
│   │       ├── lib
│   │       │   ├── byte_safe_strings.php
│   │       │   ├── cast_to_int.php
│   │       │   ├── error_polyfill.php
│   │       │   ├── random.php
│   │       │   ├── random_bytes_com_dotnet.php
│   │       │   ├── random_bytes_dev_urandom.php
│   │       │   ├── random_bytes_libsodium.php
│   │       │   ├── random_bytes_libsodium_legacy.php
│   │       │   ├── random_bytes_mcrypt.php
│   │       │   └── random_int.php
│   │       └── other
│   │           └── build_phar.php
│   ├── pdepend
│   │   └── pdepend
│   │       ├── CHANGELOG
│   │       ├── LICENSE
│   │       ├── Vagrantfile
│   │       ├── build.properties
│   │       ├── composer.json
│   │       ├── scripts
│   │       │   ├── compare.sh
│   │       │   ├── php-keywords.php
│   │       │   └── update-version.php
│   │       ├── setup
│   │       └── src
│   │           ├── bin
│   │           │   ├── pdepend
│   │           │   ├── pdepend.bat
│   │           │   └── pdepend.php
│   │           ├── conf
│   │           │   └── phar_bootstrap.stub
│   │           └── main
│   │               ├── php
│   │               │   └── PDepend
│   │               │       ├── Application.php
│   │               │       ├── DbusUI
│   │               │       │   └── ResultPrinter.php
│   │               │       ├── DependencyInjection
│   │               │       │   ├── Compiler
│   │               │       │   │   └── ProcessListenerPass.php
│   │               │       │   ├── Configuration.php
│   │               │       │   ├── Extension.php
│   │               │       │   ├── ExtensionManager.php
│   │               │       │   └── PdependExtension.php
│   │               │       ├── Engine.php
│   │               │       ├── Input
│   │               │       │   ├── CompositeFilter.php
│   │               │       │   ├── ExcludePathFilter.php
│   │               │       │   ├── ExtensionFilter.php
│   │               │       │   ├── Filter.php
│   │               │       │   └── Iterator.php
│   │               │       ├── Metrics
│   │               │       │   ├── AbstractAnalyzer.php
│   │               │       │   ├── AbstractCachingAnalyzer.php
│   │               │       │   ├── AggregateAnalyzer.php
│   │               │       │   ├── Analyzer
│   │               │       │   │   ├── ClassDependencyAnalyzer.php
│   │               │       │   │   ├── ClassLevelAnalyzer.php
│   │               │       │   │   ├── CodeRankAnalyzer
│   │               │       │   │   │   ├── CodeRankStrategyI.php
│   │               │       │   │   │   ├── InheritanceStrategy.php
│   │               │       │   │   │   ├── MethodStrategy.php
│   │               │       │   │   │   ├── PropertyStrategy.php
│   │               │       │   │   │   └── StrategyFactory.php
│   │               │       │   │   ├── CodeRankAnalyzer.php
│   │               │       │   │   ├── CohesionAnalyzer.php
│   │               │       │   │   ├── CouplingAnalyzer.php
│   │               │       │   │   ├── CrapIndexAnalyzer.php
│   │               │       │   │   ├── CyclomaticComplexityAnalyzer.php
│   │               │       │   │   ├── DependencyAnalyzer.php
│   │               │       │   │   ├── HalsteadAnalyzer.php
│   │               │       │   │   ├── HierarchyAnalyzer.php
│   │               │       │   │   ├── InheritanceAnalyzer.php
│   │               │       │   │   ├── MaintainabilityIndexAnalyzer.php
│   │               │       │   │   ├── NPathComplexityAnalyzer.php
│   │               │       │   │   ├── NodeCountAnalyzer.php
│   │               │       │   │   └── NodeLocAnalyzer.php
│   │               │       │   ├── Analyzer.php
│   │               │       │   ├── AnalyzerCacheAware.php
│   │               │       │   ├── AnalyzerFactory.php
│   │               │       │   ├── AnalyzerFilterAware.php
│   │               │       │   ├── AnalyzerIterator.php
│   │               │       │   ├── AnalyzerListener.php
│   │               │       │   ├── AnalyzerNodeAware.php
│   │               │       │   └── AnalyzerProjectAware.php
│   │               │       ├── ProcessListener.php
│   │               │       ├── Report
│   │               │       │   ├── CodeAwareGenerator.php
│   │               │       │   ├── Dependencies
│   │               │       │   │   └── Xml.php
│   │               │       │   ├── FileAwareGenerator.php
│   │               │       │   ├── Jdepend
│   │               │       │   │   ├── Chart.php
│   │               │       │   │   ├── Xml.php
│   │               │       │   │   └── chart.svg
│   │               │       │   ├── NoLogOutputException.php
│   │               │       │   ├── Overview
│   │               │       │   │   ├── Pyramid.php
│   │               │       │   │   └── pyramid.svg
│   │               │       │   ├── ReportGenerator.php
│   │               │       │   ├── ReportGeneratorFactory.php
│   │               │       │   └── Summary
│   │               │       │       └── Xml.php
│   │               │       ├── Source
│   │               │       │   ├── AST
│   │               │       │   │   ├── ASTAllocationExpression.php
│   │               │       │   │   ├── ASTAnonymousClass.php
│   │               │       │   │   ├── ASTArguments.php
│   │               │       │   │   ├── ASTArray.php
│   │               │       │   │   ├── ASTArrayElement.php
│   │               │       │   │   ├── ASTArrayIndexExpression.php
│   │               │       │   │   ├── ASTArtifact.php
│   │               │       │   │   ├── ASTArtifactList
│   │               │       │   │   │   ├── ArtifactFilter.php
│   │               │       │   │   │   ├── CollectionArtifactFilter.php
│   │               │       │   │   │   ├── NullArtifactFilter.php
│   │               │       │   │   │   └── PackageArtifactFilter.php
│   │               │       │   │   ├── ASTArtifactList.php
│   │               │       │   │   ├── ASTAssignmentExpression.php
│   │               │       │   │   ├── ASTBooleanAndExpression.php
│   │               │       │   │   ├── ASTBooleanOrExpression.php
│   │               │       │   │   ├── ASTBreakStatement.php
│   │               │       │   │   ├── ASTCallable.php
│   │               │       │   │   ├── ASTCastExpression.php
│   │               │       │   │   ├── ASTCatchStatement.php
│   │               │       │   │   ├── ASTClass.php
│   │               │       │   │   ├── ASTClassFqnPostfix.php
│   │               │       │   │   ├── ASTClassOrInterfaceRecursiveInheritanceException.php
│   │               │       │   │   ├── ASTClassOrInterfaceReference.php
│   │               │       │   │   ├── ASTClassOrInterfaceReferenceIterator.php
│   │               │       │   │   ├── ASTClassReference.php
│   │               │       │   │   ├── ASTCloneExpression.php
│   │               │       │   │   ├── ASTClosure.php
│   │               │       │   │   ├── ASTComment.php
│   │               │       │   │   ├── ASTCompilationUnit.php
│   │               │       │   │   ├── ASTCompilationUnitNotFoundException.php
│   │               │       │   │   ├── ASTCompoundExpression.php
│   │               │       │   │   ├── ASTCompoundVariable.php
│   │               │       │   │   ├── ASTConditionalExpression.php
│   │               │       │   │   ├── ASTConstant.php
│   │               │       │   │   ├── ASTConstantDeclarator.php
│   │               │       │   │   ├── ASTConstantDefinition.php
│   │               │       │   │   ├── ASTConstantPostfix.php
│   │               │       │   │   ├── ASTContinueStatement.php
│   │               │       │   │   ├── ASTDeclareStatement.php
│   │               │       │   │   ├── ASTDoWhileStatement.php
│   │               │       │   │   ├── ASTEchoStatement.php
│   │               │       │   │   ├── ASTElseIfStatement.php
│   │               │       │   │   ├── ASTEvalExpression.php
│   │               │       │   │   ├── ASTExitExpression.php
│   │               │       │   │   ├── ASTExpression.php
│   │               │       │   │   ├── ASTFieldDeclaration.php
│   │               │       │   │   ├── ASTFinallyStatement.php
│   │               │       │   │   ├── ASTForInit.php
│   │               │       │   │   ├── ASTForStatement.php
│   │               │       │   │   ├── ASTForUpdate.php
│   │               │       │   │   ├── ASTForeachStatement.php
│   │               │       │   │   ├── ASTFormalParameter.php
│   │               │       │   │   ├── ASTFormalParameters.php
│   │               │       │   │   ├── ASTFunction.php
│   │               │       │   │   ├── ASTFunctionPostfix.php
│   │               │       │   │   ├── ASTGlobalStatement.php
│   │               │       │   │   ├── ASTGotoStatement.php
│   │               │       │   │   ├── ASTHeredoc.php
│   │               │       │   │   ├── ASTIdentifier.php
│   │               │       │   │   ├── ASTIfStatement.php
│   │               │       │   │   ├── ASTIncludeExpression.php
│   │               │       │   │   ├── ASTIndexExpression.php
│   │               │       │   │   ├── ASTInstanceOfExpression.php
│   │               │       │   │   ├── ASTInterface.php
│   │               │       │   │   ├── ASTInvocation.php
│   │               │       │   │   ├── ASTIssetExpression.php
│   │               │       │   │   ├── ASTLabelStatement.php
│   │               │       │   │   ├── ASTListExpression.php
│   │               │       │   │   ├── ASTLiteral.php
│   │               │       │   │   ├── ASTLogicalAndExpression.php
│   │               │       │   │   ├── ASTLogicalOrExpression.php
│   │               │       │   │   ├── ASTLogicalXorExpression.php
│   │               │       │   │   ├── ASTMemberPrimaryPrefix.php
│   │               │       │   │   ├── ASTMethod.php
│   │               │       │   │   ├── ASTMethodPostfix.php
│   │               │       │   │   ├── ASTNamespace.php
│   │               │       │   │   ├── ASTNode.php
│   │               │       │   │   ├── ASTParameter.php
│   │               │       │   │   ├── ASTParentReference.php
│   │               │       │   │   ├── ASTPostfixExpression.php
│   │               │       │   │   ├── ASTPreDecrementExpression.php
│   │               │       │   │   ├── ASTPreIncrementExpression.php
│   │               │       │   │   ├── ASTPrintExpression.php
│   │               │       │   │   ├── ASTProperty.php
│   │               │       │   │   ├── ASTPropertyPostfix.php
│   │               │       │   │   ├── ASTRequireExpression.php
│   │               │       │   │   ├── ASTReturnStatement.php
│   │               │       │   │   ├── ASTScalarType.php
│   │               │       │   │   ├── ASTScope.php
│   │               │       │   │   ├── ASTScopeStatement.php
│   │               │       │   │   ├── ASTSelfReference.php
│   │               │       │   │   ├── ASTShiftLeftExpression.php
│   │               │       │   │   ├── ASTShiftRightExpression.php
│   │               │       │   │   ├── ASTStatement.php
│   │               │       │   │   ├── ASTStaticReference.php
│   │               │       │   │   ├── ASTStaticVariableDeclaration.php
│   │               │       │   │   ├── ASTString.php
│   │               │       │   │   ├── ASTStringIndexExpression.php
│   │               │       │   │   ├── ASTSwitchLabel.php
│   │               │       │   │   ├── ASTSwitchStatement.php
│   │               │       │   │   ├── ASTThrowStatement.php
│   │               │       │   │   ├── ASTTrait.php
│   │               │       │   │   ├── ASTTraitAdaptation.php
│   │               │       │   │   ├── ASTTraitAdaptationAlias.php
│   │               │       │   │   ├── ASTTraitAdaptationPrecedence.php
│   │               │       │   │   ├── ASTTraitMethodCollisionException.php
│   │               │       │   │   ├── ASTTraitReference.php
│   │               │       │   │   ├── ASTTraitUseStatement.php
│   │               │       │   │   ├── ASTTryStatement.php
│   │               │       │   │   ├── ASTType.php
│   │               │       │   │   ├── ASTTypeArray.php
│   │               │       │   │   ├── ASTTypeCallable.php
│   │               │       │   │   ├── ASTUnaryExpression.php
│   │               │       │   │   ├── ASTUnsetStatement.php
│   │               │       │   │   ├── ASTValue.php
│   │               │       │   │   ├── ASTVariable.php
│   │               │       │   │   ├── ASTVariableDeclarator.php
│   │               │       │   │   ├── ASTVariableVariable.php
│   │               │       │   │   ├── ASTWhileStatement.php
│   │               │       │   │   ├── ASTYieldStatement.php
│   │               │       │   │   ├── AbstractASTArtifact.php
│   │               │       │   │   ├── AbstractASTCallable.php
│   │               │       │   │   ├── AbstractASTClassOrInterface.php
│   │               │       │   │   ├── AbstractASTNode.php
│   │               │       │   │   ├── AbstractASTType.php
│   │               │       │   │   └── State.php
│   │               │       │   ├── ASTVisitor
│   │               │       │   │   ├── ASTVisitListener.php
│   │               │       │   │   ├── ASTVisitor.php
│   │               │       │   │   ├── AbstractASTVisitListener.php
│   │               │       │   │   └── AbstractASTVisitor.php
│   │               │       │   ├── Builder
│   │               │       │   │   ├── Builder.php
│   │               │       │   │   ├── BuilderContext
│   │               │       │   │   │   └── GlobalBuilderContext.php
│   │               │       │   │   └── BuilderContext.php
│   │               │       │   ├── Language
│   │               │       │   │   └── PHP
│   │               │       │   │       ├── AbstractPHPParser.php
│   │               │       │   │       ├── PHPBuilder.php
│   │               │       │   │       ├── PHPParserGeneric.php
│   │               │       │   │       ├── PHPParserVersion53.php
│   │               │       │   │       ├── PHPParserVersion54.php
│   │               │       │   │       ├── PHPParserVersion55.php
│   │               │       │   │       ├── PHPParserVersion56.php
│   │               │       │   │       ├── PHPParserVersion70.php
│   │               │       │   │       ├── PHPParserVersion71.php
│   │               │       │   │       ├── PHPTokenizerHelperVersion52.php
│   │               │       │   │       └── PHPTokenizerInternal.php
│   │               │       │   ├── Parser
│   │               │       │   │   ├── InvalidStateException.php
│   │               │       │   │   ├── MissingValueException.php
│   │               │       │   │   ├── NoActiveScopeException.php
│   │               │       │   │   ├── ParserException.php
│   │               │       │   │   ├── SymbolTable.php
│   │               │       │   │   ├── TokenException.php
│   │               │       │   │   ├── TokenStack.php
│   │               │       │   │   ├── TokenStreamEndException.php
│   │               │       │   │   └── UnexpectedTokenException.php
│   │               │       │   └── Tokenizer
│   │               │       │       ├── Token.php
│   │               │       │       ├── Tokenizer.php
│   │               │       │       └── Tokens.php
│   │               │       ├── TextUI
│   │               │       │   ├── Command.php
│   │               │       │   ├── ResultPrinter.php
│   │               │       │   └── Runner.php
│   │               │       └── Util
│   │               │           ├── Cache
│   │               │           │   ├── CacheDriver.php
│   │               │           │   ├── CacheFactory.php
│   │               │           │   └── Driver
│   │               │           │       ├── File
│   │               │           │       │   ├── FileCacheDirectory.php
│   │               │           │       │   └── FileCacheGarbageCollector.php
│   │               │           │       ├── FileCacheDriver.php
│   │               │           │       └── MemoryCacheDriver.php
│   │               │           ├── Configuration.php
│   │               │           ├── ConfigurationInstance.php
│   │               │           ├── Coverage
│   │               │           │   ├── CloverReport.php
│   │               │           │   ├── Factory.php
│   │               │           │   └── Report.php
│   │               │           ├── FileUtil.php
│   │               │           ├── IdBuilder.php
│   │               │           ├── ImageConvert.php
│   │               │           ├── Log.php
│   │               │           ├── MathUtil.php
│   │               │           ├── Type.php
│   │               │           ├── Utf8Util.php
│   │               │           └── Workarounds.php
│   │               └── resources
│   │                   ├── schema
│   │                   │   └── configuration.xsd
│   │                   └── services.xml
│   ├── phing
│   │   └── phing
│   │       ├── CHANGELOG.md
│   │       ├── CREDITS.md
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── bin
│   │       │   ├── pear-phing
│   │       │   ├── pear-phing.bat
│   │       │   ├── phing
│   │       │   ├── phing.bat
│   │       │   └── phing.php
│   │       ├── build
│   │       │   ├── BuildPhingPEARPackageTask.php
│   │       │   ├── build.xml
│   │       │   └── phing-stub.php
│   │       ├── classes
│   │       │   └── phing
│   │       │       ├── BuildEvent.php
│   │       │       ├── BuildException.php
│   │       │       ├── BuildListener.php
│   │       │       ├── BuildLogger.php
│   │       │       ├── BuildTimeoutException.php
│   │       │       ├── ConfigurationException.php
│   │       │       ├── Diagnostics.php
│   │       │       ├── ExitStatusException.php
│   │       │       ├── IntrospectionHelper.php
│   │       │       ├── Phing.php
│   │       │       ├── Project.php
│   │       │       ├── ProjectComponent.php
│   │       │       ├── RuntimeConfigurable.php
│   │       │       ├── SubBuildListener.php
│   │       │       ├── Target.php
│   │       │       ├── Task.php
│   │       │       ├── TaskAdapter.php
│   │       │       ├── TaskContainer.php
│   │       │       ├── UnknownElement.php
│   │       │       ├── contrib
│   │       │       │   └── DocBlox
│   │       │       │       └── Parallel
│   │       │       │           ├── Manager.php
│   │       │       │           ├── Worker.php
│   │       │       │           └── WorkerPipe.php
│   │       │       ├── filters
│   │       │       │   ├── BaseFilterReader.php
│   │       │       │   ├── BaseParamFilterReader.php
│   │       │       │   ├── ChainableReader.php
│   │       │       │   ├── ConcatFilter.php
│   │       │       │   ├── EscapeUnicode.php
│   │       │       │   ├── ExpandProperties.php
│   │       │       │   ├── HeadFilter.php
│   │       │       │   ├── IconvFilter.php
│   │       │       │   ├── LineContains.php
│   │       │       │   ├── LineContainsRegexp.php
│   │       │       │   ├── PhpArrayMapLines.php
│   │       │       │   ├── PrefixLines.php
│   │       │       │   ├── ReplaceRegexp.php
│   │       │       │   ├── ReplaceTokens.php
│   │       │       │   ├── ReplaceTokensWithFile.php
│   │       │       │   ├── SortFilter.php
│   │       │       │   ├── StripLineBreaks.php
│   │       │       │   ├── StripLineComments.php
│   │       │       │   ├── StripPhpComments.php
│   │       │       │   ├── StripWhitespace.php
│   │       │       │   ├── SuffixLines.php
│   │       │       │   ├── TabToSpaces.php
│   │       │       │   ├── TailFilter.php
│   │       │       │   ├── TidyFilter.php
│   │       │       │   ├── TranslateGettext.php
│   │       │       │   ├── XincludeFilter.php
│   │       │       │   ├── XsltFilter.php
│   │       │       │   └── util
│   │       │       │       ├── ChainReaderHelper.php
│   │       │       │       └── IniFileTokenReader.php
│   │       │       ├── input
│   │       │       │   ├── DefaultInputHandler.php
│   │       │       │   ├── InputHandler.php
│   │       │       │   ├── InputRequest.php
│   │       │       │   ├── MultipleChoiceInputRequest.php
│   │       │       │   └── YesNoInputRequest.php
│   │       │       ├── lib
│   │       │       │   └── Capsule.php
│   │       │       ├── listener
│   │       │       │   ├── AnsiColorLogger.php
│   │       │       │   ├── DefaultLogger.php
│   │       │       │   ├── HtmlColorLogger.php
│   │       │       │   ├── JsonLogger.php
│   │       │       │   ├── MailLogger.php
│   │       │       │   ├── NoBannerLogger.php
│   │       │       │   ├── PearLogListener.php
│   │       │       │   ├── ProfileLogger.php
│   │       │       │   ├── SilentLogger.php
│   │       │       │   ├── StreamRequiredBuildLogger.php
│   │       │       │   ├── TargetLogger.php
│   │       │       │   ├── TimestampedLogger.php
│   │       │       │   ├── XmlLogger.php
│   │       │       │   └── defaults.properties
│   │       │       ├── mappers
│   │       │       │   ├── ChainedMapper.php
│   │       │       │   ├── CompositeMapper.php
│   │       │       │   ├── ContainerMapper.php
│   │       │       │   ├── CutDirsMapper.php
│   │       │       │   ├── FileNameMapper.php
│   │       │       │   ├── FirstMatchMapper.php
│   │       │       │   ├── FlattenMapper.php
│   │       │       │   ├── GlobMapper.php
│   │       │       │   ├── IdentityMapper.php
│   │       │       │   ├── MergeMapper.php
│   │       │       │   └── RegexpMapper.php
│   │       │       ├── parser
│   │       │       │   ├── AbstractHandler.php
│   │       │       │   ├── AbstractSAXParser.php
│   │       │       │   ├── CustomChildCreator.php
│   │       │       │   ├── DataTypeHandler.php
│   │       │       │   ├── ElementHandler.php
│   │       │       │   ├── ExpatParseException.php
│   │       │       │   ├── ExpatParser.php
│   │       │       │   ├── Location.php
│   │       │       │   ├── PhingXMLContext.php
│   │       │       │   ├── ProjectConfigurator.php
│   │       │       │   ├── ProjectHandler.php
│   │       │       │   ├── RootHandler.php
│   │       │       │   └── TargetHandler.php
│   │       │       ├── system
│   │       │       │   ├── io
│   │       │       │   │   ├── BufferedReader.php
│   │       │       │   │   ├── BufferedWriter.php
│   │       │       │   │   ├── ConsoleReader.php
│   │       │       │   │   ├── FileInputStream.php
│   │       │       │   │   ├── FileOutputStream.php
│   │       │       │   │   ├── FileParserFactory.php
│   │       │       │   │   ├── FileParserFactoryInterface.php
│   │       │       │   │   ├── FileParserInterface.php
│   │       │       │   │   ├── FileReader.php
│   │       │       │   │   ├── FileSystem.php
│   │       │       │   │   ├── FileWriter.php
│   │       │       │   │   ├── FilterReader.php
│   │       │       │   │   ├── IOException.php
│   │       │       │   │   ├── IniFileParser.php
│   │       │       │   │   ├── InputStream.php
│   │       │       │   │   ├── InputStreamReader.php
│   │       │       │   │   ├── OutputStream.php
│   │       │       │   │   ├── OutputStreamWriter.php
│   │       │       │   │   ├── PhingFile.php
│   │       │       │   │   ├── PrintStream.php
│   │       │       │   │   ├── Reader.php
│   │       │       │   │   ├── StringReader.php
│   │       │       │   │   ├── UnixFileSystem.php
│   │       │       │   │   ├── Win32FileSystem.php
│   │       │       │   │   ├── WinNTFileSystem.php
│   │       │       │   │   ├── Writer.php
│   │       │       │   │   └── YamlFileParser.php
│   │       │       │   ├── lang
│   │       │       │   │   ├── Character.php
│   │       │       │   │   ├── EventObject.php
│   │       │       │   │   ├── FileNotFoundException.php
│   │       │       │   │   ├── NullPointerException.php
│   │       │       │   │   └── SecurityException.php
│   │       │       │   └── util
│   │       │       │       ├── Properties.php
│   │       │       │       ├── Register.php
│   │       │       │       └── Timer.php
│   │       │       ├── tasks
│   │       │       │   ├── defaults.properties
│   │       │       │   ├── ext
│   │       │       │   │   ├── AutoloaderTask.php
│   │       │       │   │   ├── CapsuleTask.php
│   │       │       │   │   ├── ComposerTask.php
│   │       │       │   │   ├── ExportPropertiesTask.php
│   │       │       │   │   ├── ExtractBaseTask.php
│   │       │       │   │   ├── FileHashTask.php
│   │       │       │   │   ├── FileSizeTask.php
│   │       │       │   │   ├── FileSyncTask.php
│   │       │       │   │   ├── FtpDeployTask.php
│   │       │       │   │   ├── GrowlNotifyTask.php
│   │       │       │   │   ├── HttpGetTask.php
│   │       │       │   │   ├── HttpRequestTask.php
│   │       │       │   │   ├── HttpTask.php
│   │       │       │   │   ├── JsHintTask.php
│   │       │       │   │   ├── JslLintTask.php
│   │       │       │   │   ├── MailTask.php
│   │       │       │   │   ├── ManifestTask.php
│   │       │       │   │   ├── NotifySendTask.php
│   │       │       │   │   ├── PackageAsPathTask.php
│   │       │       │   │   ├── ParallelTask.php
│   │       │       │   │   ├── PatchTask.php
│   │       │       │   │   ├── PearPackage2Task.php
│   │       │       │   │   ├── PearPackageTask.php
│   │       │       │   │   ├── PhpCodeSnifferTask.php
│   │       │       │   │   ├── PhpLintTask.php
│   │       │       │   │   ├── ReplaceRegexpTask.php
│   │       │       │   │   ├── SassTask.php
│   │       │       │   │   ├── Service
│   │       │       │   │   │   ├── Amazon
│   │       │       │   │   │   │   ├── S3
│   │       │       │   │   │   │   │   ├── S3GetTask.php
│   │       │       │   │   │   │   │   └── S3PutTask.php
│   │       │       │   │   │   │   └── S3.php
│   │       │       │   │   │   └── Amazon.php
│   │       │       │   │   ├── SmartyTask.php
│   │       │       │   │   ├── StopwatchTask.php
│   │       │       │   │   ├── SymfonyConsole
│   │       │       │   │   │   ├── Arg.php
│   │       │       │   │   │   └── SymfonyConsoleTask.php
│   │       │       │   │   ├── SymlinkTask.php
│   │       │       │   │   ├── TarTask.php
│   │       │       │   │   ├── ThrowTask.php
│   │       │       │   │   ├── UntarTask.php
│   │       │       │   │   ├── UnzipTask.php
│   │       │       │   │   ├── VersionTask.php
│   │       │       │   │   ├── WikiPublishTask.php
│   │       │       │   │   ├── XmlLintTask.php
│   │       │       │   │   ├── XmlPropertyTask.php
│   │       │       │   │   ├── ZendCodeAnalyzerTask.php
│   │       │       │   │   ├── ZipTask.php
│   │       │       │   │   ├── apigen
│   │       │       │   │   │   └── ApiGenTask.php
│   │       │       │   │   ├── coverage
│   │       │       │   │   │   ├── CoverageMerger.php
│   │       │       │   │   │   ├── CoverageMergerTask.php
│   │       │       │   │   │   ├── CoverageReportTask.php
│   │       │       │   │   │   ├── CoverageReportTransformer.php
│   │       │       │   │   │   ├── CoverageSetupTask.php
│   │       │       │   │   │   └── CoverageThresholdTask.php
│   │       │       │   │   ├── creole
│   │       │       │   │   │   ├── CreoleSQLExecTask.php
│   │       │       │   │   │   └── CreoleTask.php
│   │       │       │   │   ├── dbdeploy
│   │       │       │   │   │   ├── DbDeployTask.php
│   │       │       │   │   │   ├── DbmsSyntax.php
│   │       │       │   │   │   ├── DbmsSyntaxFactory.php
│   │       │       │   │   │   ├── DbmsSyntaxMsSql.php
│   │       │       │   │   │   ├── DbmsSyntaxMysql.php
│   │       │       │   │   │   ├── DbmsSyntaxOracle.php
│   │       │       │   │   │   ├── DbmsSyntaxPgSQL.php
│   │       │       │   │   │   └── DbmsSyntaxSQLite.php
│   │       │       │   │   ├── git
│   │       │       │   │   │   ├── GitBaseTask.php
│   │       │       │   │   │   ├── GitBranchTask.php
│   │       │       │   │   │   ├── GitCheckoutTask.php
│   │       │       │   │   │   ├── GitCloneTask.php
│   │       │       │   │   │   ├── GitCommitTask.php
│   │       │       │   │   │   ├── GitDescribeTask.php
│   │       │       │   │   │   ├── GitFetchTask.php
│   │       │       │   │   │   ├── GitGcTask.php
│   │       │       │   │   │   ├── GitInitTask.php
│   │       │       │   │   │   ├── GitLogTask.php
│   │       │       │   │   │   ├── GitMergeTask.php
│   │       │       │   │   │   ├── GitPullTask.php
│   │       │       │   │   │   ├── GitPushTask.php
│   │       │       │   │   │   └── GitTagTask.php
│   │       │       │   │   ├── hg
│   │       │       │   │   │   ├── HgAddTask.php
│   │       │       │   │   │   ├── HgArchiveTask.php
│   │       │       │   │   │   ├── HgBaseTask.php
│   │       │       │   │   │   ├── HgCloneTask.php
│   │       │       │   │   │   ├── HgCommitTask.php
│   │       │       │   │   │   ├── HgInitTask.php
│   │       │       │   │   │   ├── HgLogTask.php
│   │       │       │   │   │   ├── HgPullTask.php
│   │       │       │   │   │   ├── HgPushTask.php
│   │       │       │   │   │   ├── HgRevertTask.php
│   │       │       │   │   │   ├── HgTagTask.php
│   │       │       │   │   │   └── HgUpdateTask.php
│   │       │       │   │   ├── inifile
│   │       │       │   │   │   ├── IniFileConfig.php
│   │       │       │   │   │   ├── IniFileRemove.php
│   │       │       │   │   │   ├── IniFileSet.php
│   │       │       │   │   │   └── IniFileTask.php
│   │       │       │   │   ├── ioncube
│   │       │       │   │   │   ├── IoncubeComment.php
│   │       │       │   │   │   ├── IoncubeEncoderTask.php
│   │       │       │   │   │   └── IoncubeLicenseTask.php
│   │       │       │   │   ├── jsmin
│   │       │       │   │   │   └── JsMinTask.php
│   │       │       │   │   ├── liquibase
│   │       │       │   │   │   ├── AbstractLiquibaseTask.php
│   │       │       │   │   │   ├── LiquibaseChangeLogTask.php
│   │       │       │   │   │   ├── LiquibaseDbDocTask.php
│   │       │       │   │   │   ├── LiquibaseDiffTask.php
│   │       │       │   │   │   ├── LiquibaseRollbackTask.php
│   │       │       │   │   │   ├── LiquibaseTagTask.php
│   │       │       │   │   │   ├── LiquibaseTask.php
│   │       │       │   │   │   └── LiquibaseUpdateTask.php
│   │       │       │   │   ├── pdepend
│   │       │       │   │   │   ├── PhpDependAnalyzerElement.php
│   │       │       │   │   │   ├── PhpDependLoggerElement.php
│   │       │       │   │   │   └── PhpDependTask.php
│   │       │       │   │   ├── pdo
│   │       │       │   │   │   ├── DefaultPDOQuerySplitter.php
│   │       │       │   │   │   ├── DummyPDOQuerySplitter.php
│   │       │       │   │   │   ├── PDOQuerySplitter.php
│   │       │       │   │   │   ├── PDOResultFormatter.php
│   │       │       │   │   │   ├── PDOSQLExecFormatterElement.php
│   │       │       │   │   │   ├── PDOSQLExecTask.php
│   │       │       │   │   │   ├── PDOTask.php
│   │       │       │   │   │   ├── PgsqlPDOQuerySplitter.php
│   │       │       │   │   │   ├── PlainPDOResultFormatter.php
│   │       │       │   │   │   └── XMLPDOResultFormatter.php
│   │       │       │   │   ├── pearpackage
│   │       │       │   │   │   └── Fileset.php
│   │       │       │   │   ├── phar
│   │       │       │   │   │   ├── PharDataTask.php
│   │       │       │   │   │   ├── PharMetadata.php
│   │       │       │   │   │   ├── PharMetadataElement.php
│   │       │       │   │   │   └── PharPackageTask.php
│   │       │       │   │   ├── phk
│   │       │       │   │   │   ├── PhkPackageTask.php
│   │       │       │   │   │   ├── PhkPackageWebAccess.php
│   │       │       │   │   │   └── PhkPackageWebAccessPath.php
│   │       │       │   │   ├── phpcpd
│   │       │       │   │   │   ├── PHPCPDFormatterElement.php
│   │       │       │   │   │   ├── PHPCPDTask.php
│   │       │       │   │   │   └── formatter
│   │       │       │   │   │       ├── DefaultPHPCPDResultFormatter.php
│   │       │       │   │   │       ├── PHPCPDResultFormatter.php
│   │       │       │   │   │       └── PMDPHPCPDResultFormatter.php
│   │       │       │   │   ├── phpcs
│   │       │       │   │   │   ├── PhpCodeSnifferTask_Wrapper.php
│   │       │       │   │   │   └── Reports_PhingRemoveFromCache.php
│   │       │       │   │   ├── phpdoc
│   │       │       │   │   │   ├── PhingPhpDocumentorErrorTracker.php
│   │       │       │   │   │   ├── PhingPhpDocumentorSetup.php
│   │       │       │   │   │   ├── PhpDocumentor2Task.php
│   │       │       │   │   │   ├── PhpDocumentor2Wrapper.php
│   │       │       │   │   │   ├── PhpDocumentorExternalTask.php
│   │       │       │   │   │   └── PhpDocumentorTask.php
│   │       │       │   │   ├── phploc
│   │       │       │   │   │   ├── AbstractPHPLocFormatter.php
│   │       │       │   │   │   ├── PHPLocCSVFormatter.php
│   │       │       │   │   │   ├── PHPLocFormatterElement.php
│   │       │       │   │   │   ├── PHPLocFormatterFactory.php
│   │       │       │   │   │   ├── PHPLocTask.php
│   │       │       │   │   │   ├── PHPLocTextFormatter.php
│   │       │       │   │   │   └── PHPLocXMLFormatter.php
│   │       │       │   │   ├── phpmd
│   │       │       │   │   │   ├── PHPMDFormatterElement.php
│   │       │       │   │   │   ├── PHPMDRendererRemoveFromCache.php
│   │       │       │   │   │   └── PHPMDTask.php
│   │       │       │   │   ├── phpunit
│   │       │       │   │   │   ├── BatchTest.php
│   │       │       │   │   │   ├── FormatterElement.php
│   │       │       │   │   │   ├── PHPUnitReportTask.php
│   │       │       │   │   │   ├── PHPUnitTask.php
│   │       │       │   │   │   ├── PHPUnitTestRunner.php
│   │       │       │   │   │   ├── PHPUnitUtil.php
│   │       │       │   │   │   └── formatter
│   │       │       │   │   │       ├── CloverPHPUnitResultFormatter.php
│   │       │       │   │   │       ├── Crap4jPHPUnitResultFormatter.php
│   │       │       │   │   │       ├── PHPUnitResultFormatter.php
│   │       │       │   │   │       ├── PlainPHPUnitResultFormatter.php
│   │       │       │   │   │       ├── SummaryPHPUnitResultFormatter.php
│   │       │       │   │   │       └── XMLPHPUnitResultFormatter.php
│   │       │       │   │   ├── property
│   │       │       │   │   │   ├── AbstractPropertySetterTask.php
│   │       │       │   │   │   ├── PathToFileSet.php
│   │       │       │   │   │   └── RegexTask.php
│   │       │       │   │   ├── rSTTask.php
│   │       │       │   │   ├── simpletest
│   │       │       │   │   │   ├── SimpleTestCountResultFormatter.php
│   │       │       │   │   │   ├── SimpleTestDebugResultFormatter.php
│   │       │       │   │   │   ├── SimpleTestFormatterElement.php
│   │       │       │   │   │   ├── SimpleTestPlainResultFormatter.php
│   │       │       │   │   │   ├── SimpleTestResultFormatter.php
│   │       │       │   │   │   ├── SimpleTestSummaryResultFormatter.php
│   │       │       │   │   │   ├── SimpleTestTask.php
│   │       │       │   │   │   └── SimpleTestXmlResultFormatter.php
│   │       │       │   │   ├── sonar
│   │       │       │   │   │   ├── SonarConfigurationFileParser.php
│   │       │       │   │   │   ├── SonarProperty.php
│   │       │       │   │   │   └── SonarTask.php
│   │       │       │   │   ├── ssh
│   │       │       │   │   │   ├── ScpTask.php
│   │       │       │   │   │   ├── Ssh2MethodConnectionParam.php
│   │       │       │   │   │   ├── Ssh2MethodParam.php
│   │       │       │   │   │   └── SshTask.php
│   │       │       │   │   ├── svn
│   │       │       │   │   │   ├── SvnBaseTask.php
│   │       │       │   │   │   ├── SvnCheckoutTask.php
│   │       │       │   │   │   ├── SvnCommitTask.php
│   │       │       │   │   │   ├── SvnCopyTask.php
│   │       │       │   │   │   ├── SvnExportTask.php
│   │       │       │   │   │   ├── SvnInfoTask.php
│   │       │       │   │   │   ├── SvnLastRevisionTask.php
│   │       │       │   │   │   ├── SvnListTask.php
│   │       │       │   │   │   ├── SvnLogTask.php
│   │       │       │   │   │   ├── SvnSwitchTask.php
│   │       │       │   │   │   └── SvnUpdateTask.php
│   │       │       │   │   ├── zendguard
│   │       │       │   │   │   ├── ZendGuardEncodeTask.php
│   │       │       │   │   │   └── ZendGuardLicenseTask.php
│   │       │       │   │   └── zendserverdeploymenttool
│   │       │       │   │       ├── zsdtBaseTask.php
│   │       │       │   │       ├── zsdtPackTask.php
│   │       │       │   │       └── zsdtValidateTask.php
│   │       │       │   └── system
│   │       │       │       ├── AdhocTask.php
│   │       │       │       ├── AdhocTaskdefTask.php
│   │       │       │       ├── AdhocTypedefTask.php
│   │       │       │       ├── AppendTask
│   │       │       │       │   └── TextElement.php
│   │       │       │       ├── AppendTask.php
│   │       │       │       ├── ApplyTask.php
│   │       │       │       ├── AttribTask.php
│   │       │       │       ├── AvailableTask.php
│   │       │       │       ├── Basename.php
│   │       │       │       ├── BlockForTask.php
│   │       │       │       ├── ChmodTask.php
│   │       │       │       ├── ChownTask.php
│   │       │       │       ├── ConditionTask.php
│   │       │       │       ├── CopyTask.php
│   │       │       │       ├── CvsPassTask.php
│   │       │       │       ├── CvsTask.php
│   │       │       │       ├── DeleteTask.php
│   │       │       │       ├── DiagnosticsTask.php
│   │       │       │       ├── Dirname.php
│   │       │       │       ├── EchoProperties.php
│   │       │       │       ├── EchoTask.php
│   │       │       │       ├── ExecTask.php
│   │       │       │       ├── FailTask.php
│   │       │       │       ├── ForeachTask.php
│   │       │       │       ├── IfTask.php
│   │       │       │       ├── ImportTask.php
│   │       │       │       ├── IncludePathTask.php
│   │       │       │       ├── InputTask.php
│   │       │       │       ├── LoadFileTask.php
│   │       │       │       ├── MatchingTask.php
│   │       │       │       ├── MkdirTask.php
│   │       │       │       ├── MoveTask.php
│   │       │       │       ├── PathConvert.php
│   │       │       │       ├── PhingCallTask.php
│   │       │       │       ├── PhingTask.php
│   │       │       │       ├── PhpEvalTask.php
│   │       │       │       ├── PropertyPromptTask.php
│   │       │       │       ├── PropertyTask.php
│   │       │       │       ├── RecorderEntry.php
│   │       │       │       ├── RecorderTask.php
│   │       │       │       ├── ReflexiveTask.php
│   │       │       │       ├── ResolvePathTask.php
│   │       │       │       ├── Retry.php
│   │       │       │       ├── SequentialTask.php
│   │       │       │       ├── SleepTask.php
│   │       │       │       ├── SwitchTask.php
│   │       │       │       ├── TaskdefTask.php
│   │       │       │       ├── TempFile.php
│   │       │       │       ├── TouchTask.php
│   │       │       │       ├── TruncateTask.php
│   │       │       │       ├── TryCatchTask.php
│   │       │       │       ├── TstampTask.php
│   │       │       │       ├── TypedefTask.php
│   │       │       │       ├── UpToDateTask.php
│   │       │       │       ├── WaitForTask.php
│   │       │       │       ├── WarnTask.php
│   │       │       │       ├── XsltTask.php
│   │       │       │       └── condition
│   │       │       │           ├── AndCondition.php
│   │       │       │           ├── Condition.php
│   │       │       │           ├── ConditionBase.php
│   │       │       │           ├── ContainsCondition.php
│   │       │       │           ├── EqualsCondition.php
│   │       │       │           ├── FilesMatch.php
│   │       │       │           ├── HasFreeSpaceCondition.php
│   │       │       │           ├── HttpCondition.php
│   │       │       │           ├── IsFailure.php
│   │       │       │           ├── IsFalseCondition.php
│   │       │       │           ├── IsFileSelected.php
│   │       │       │           ├── IsPropertyFalseCondition.php
│   │       │       │           ├── IsPropertyTrueCondition.php
│   │       │       │           ├── IsSetCondition.php
│   │       │       │           ├── IsTrueCondition.php
│   │       │       │           ├── Matches.php
│   │       │       │           ├── NestedCondition.php
│   │       │       │           ├── NotCondition.php
│   │       │       │           ├── OrCondition.php
│   │       │       │           ├── OsCondition.php
│   │       │       │           ├── PhingVersion.php
│   │       │       │           ├── ReferenceExistsCondition.php
│   │       │       │           ├── SocketCondition.php
│   │       │       │           ├── VersionCompareCondition.php
│   │       │       │           └── XorCondition.php
│   │       │       ├── types
│   │       │       │   ├── AbstractFileSet.php
│   │       │       │   ├── Commandline.php
│   │       │       │   ├── DataType.php
│   │       │       │   ├── Description.php
│   │       │       │   ├── DirSet.php
│   │       │       │   ├── Excludes.php
│   │       │       │   ├── ExcludesNameEntry.php
│   │       │       │   ├── FileList.php
│   │       │       │   ├── FileSet.php
│   │       │       │   ├── FilterChain.php
│   │       │       │   ├── IterableFileSet.php
│   │       │       │   ├── Mapper.php
│   │       │       │   ├── Parameter.php
│   │       │       │   ├── Parameterizable.php
│   │       │       │   ├── Path.php
│   │       │       │   ├── PatternSet.php
│   │       │       │   ├── PearPackageFileSet.php
│   │       │       │   ├── PhingFilterReader.php
│   │       │       │   ├── PropertyValue.php
│   │       │       │   ├── Reference.php
│   │       │       │   ├── RegularExpression.php
│   │       │       │   ├── TokenReader.php
│   │       │       │   ├── TokenSource.php
│   │       │       │   ├── defaults.properties
│   │       │       │   └── selectors
│   │       │       │       ├── AbstractSelectorContainer.php
│   │       │       │       ├── AndSelector.php
│   │       │       │       ├── BaseExtendSelector.php
│   │       │       │       ├── BaseSelector.php
│   │       │       │       ├── BaseSelectorContainer.php
│   │       │       │       ├── ContainsRegexpSelector.php
│   │       │       │       ├── ContainsSelector.php
│   │       │       │       ├── DateSelector.php
│   │       │       │       ├── DependSelector.php
│   │       │       │       ├── DepthSelector.php
│   │       │       │       ├── DifferentSelector.php
│   │       │       │       ├── ExtendFileSelector.php
│   │       │       │       ├── ExtendSelector.php
│   │       │       │       ├── FileSelector.php
│   │       │       │       ├── FilenameSelector.php
│   │       │       │       ├── MajoritySelector.php
│   │       │       │       ├── MappingSelector.php
│   │       │       │       ├── NoneSelector.php
│   │       │       │       ├── NotSelector.php
│   │       │       │       ├── OrSelector.php
│   │       │       │       ├── PresentSelector.php
│   │       │       │       ├── ReadableSelector.php
│   │       │       │       ├── SelectSelector.php
│   │       │       │       ├── SelectorContainer.php
│   │       │       │       ├── SelectorScanner.php
│   │       │       │       ├── SelectorUtils.php
│   │       │       │       ├── SizeSelector.php
│   │       │       │       ├── TypeSelector.php
│   │       │       │       └── WritableSelector.php
│   │       │       └── util
│   │       │           ├── DataStore.php
│   │       │           ├── DirectoryScanner.php
│   │       │           ├── ExtendedFileStream.php
│   │       │           ├── FileUtils.php
│   │       │           ├── LogWriter.php
│   │       │           ├── PathTokenizer.php
│   │       │           ├── PearPackageScanner.php
│   │       │           ├── SourceFileScanner.php
│   │       │           ├── StringHelper.php
│   │       │           └── regexp
│   │       │               ├── PregEngine.php
│   │       │               ├── Regexp.php
│   │       │               └── RegexpEngine.php
│   │       ├── composer
│   │       │   └── bin
│   │       │       └── phing
│   │       ├── composer.json
│   │       └── etc
│   │           ├── VERSION.TXT
│   │           ├── coverage-frames.xsl
│   │           ├── log.xsl
│   │           ├── phing-grammar.rng
│   │           ├── phpunit-frames.xsl
│   │           ├── phpunit-noframes.xsl
│   │           └── str.replace.function.xsl
│   ├── phpcollection
│   │   └── phpcollection
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── composer.json
│   │       ├── composer.lock
│   │       ├── doc
│   │       │   ├── LICENSE
│   │       │   └── index.rst
│   │       ├── phpunit.xml.dist
│   │       ├── src
│   │       │   └── PhpCollection
│   │       │       ├── AbstractCollection.php
│   │       │       ├── AbstractMap.php
│   │       │       ├── AbstractSequence.php
│   │       │       ├── CollectionInterface.php
│   │       │       ├── EntityLikeObject.php
│   │       │       ├── Map.php
│   │       │       ├── MapInterface.php
│   │       │       ├── ObjectBasics.php
│   │       │       ├── ObjectBasicsHandler
│   │       │       │   ├── DateTimeHandler.php
│   │       │       │   └── IdentityHandler.php
│   │       │       ├── ObjectBasicsHandler.php
│   │       │       ├── ObjectBasicsHandlerRegistry.php
│   │       │       ├── Sequence.php
│   │       │       ├── SequenceInterface.php
│   │       │       ├── Set.php
│   │       │       ├── SetInterface.php
│   │       │       ├── SortableInterface.php
│   │       │       └── SortedSequence.php
│   │       └── tests
│   │           ├── PhpCollection
│   │           │   └── Tests
│   │           │       ├── MapTest.php
│   │           │       ├── SequenceTest.php
│   │           │       ├── SetTest.php
│   │           │       └── SortedSequenceTest.php
│   │           └── bootstrap.php
│   ├── phpdocumentor
│   │   ├── reflection-common
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   ├── composer.lock
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   ├── Element.php
│   │   │   │   ├── File.php
│   │   │   │   ├── Fqsen.php
│   │   │   │   ├── Location.php
│   │   │   │   ├── Project.php
│   │   │   │   └── ProjectFactory.php
│   │   │   └── tests
│   │   │       ├── common
│   │   │       │   └── bootstrap.php
│   │   │       └── unit
│   │   │           └── FqsenTest.php
│   │   ├── reflection-docblock
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   ├── composer.lock
│   │   │   ├── examples
│   │   │   │   ├── 01-interpreting-a-simple-docblock.php
│   │   │   │   ├── 02-interpreting-tags.php
│   │   │   │   ├── 03-reconstituting-a-docblock.php
│   │   │   │   ├── 04-adding-your-own-tag.php
│   │   │   │   └── playing-with-descriptions
│   │   │   │       └── 02-escaping.php
│   │   │   ├── phpmd.xml.dist
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   ├── DocBlock
│   │   │   │   │   ├── Description.php
│   │   │   │   │   ├── DescriptionFactory.php
│   │   │   │   │   ├── ExampleFinder.php
│   │   │   │   │   ├── Serializer.php
│   │   │   │   │   ├── StandardTagFactory.php
│   │   │   │   │   ├── Tag.php
│   │   │   │   │   ├── TagFactory.php
│   │   │   │   │   └── Tags
│   │   │   │   │       ├── Author.php
│   │   │   │   │       ├── BaseTag.php
│   │   │   │   │       ├── Covers.php
│   │   │   │   │       ├── Deprecated.php
│   │   │   │   │       ├── Example.php
│   │   │   │   │       ├── Factory
│   │   │   │   │       │   ├── StaticMethod.php
│   │   │   │   │       │   └── Strategy.php
│   │   │   │   │       ├── Formatter
│   │   │   │   │       │   └── PassthroughFormatter.php
│   │   │   │   │       ├── Formatter.php
│   │   │   │   │       ├── Generic.php
│   │   │   │   │       ├── Link.php
│   │   │   │   │       ├── Method.php
│   │   │   │   │       ├── Param.php
│   │   │   │   │       ├── Property.php
│   │   │   │   │       ├── PropertyRead.php
│   │   │   │   │       ├── PropertyWrite.php
│   │   │   │   │       ├── Return_.php
│   │   │   │   │       ├── See.php
│   │   │   │   │       ├── Since.php
│   │   │   │   │       ├── Source.php
│   │   │   │   │       ├── Throws.php
│   │   │   │   │       ├── Uses.php
│   │   │   │   │       ├── Var_.php
│   │   │   │   │       └── Version.php
│   │   │   │   ├── DocBlock.php
│   │   │   │   ├── DocBlockFactory.php
│   │   │   │   └── DocBlockFactoryInterface.php
│   │   │   └── tests
│   │   │       ├── integration
│   │   │       │   ├── InterpretingDocBlocksTest.php
│   │   │       │   ├── ReconstitutingADocBlockTest.php
│   │   │       │   └── UsingTagsTest.php
│   │   │       └── unit
│   │   │           ├── DocBlock
│   │   │           │   ├── DescriptionFactoryTest.php
│   │   │           │   ├── DescriptionTest.php
│   │   │           │   ├── SerializerTest.php
│   │   │           │   ├── StandardTagFactoryTest.php
│   │   │           │   └── Tags
│   │   │           │       ├── AuthorTest.php
│   │   │           │       ├── CoversTest.php
│   │   │           │       ├── DeprecatedTest.php
│   │   │           │       ├── Formatter
│   │   │           │       │   └── PassthroughFormatterTest.php
│   │   │           │       ├── GenericTest.php
│   │   │           │       ├── LinkTest.php
│   │   │           │       ├── MethodTest.php
│   │   │           │       ├── ParamTest.php
│   │   │           │       ├── PropertyReadTest.php
│   │   │           │       ├── PropertyTest.php
│   │   │           │       ├── PropertyWriteTest.php
│   │   │           │       ├── ReturnTest.php
│   │   │           │       ├── SeeTest.php
│   │   │           │       ├── SinceTest.php
│   │   │           │       ├── SourceTest.php
│   │   │           │       ├── ThrowsTest.php
│   │   │           │       ├── UsesTest.php
│   │   │           │       ├── VarTest.php
│   │   │           │       └── VersionTest.php
│   │   │           ├── DocBlockFactoryTest.php
│   │   │           └── DocBlockTest.php
│   │   └── type-resolver
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── composer.json
│   │       ├── examples
│   │       │   ├── 01-resolving-simple-types.php
│   │       │   ├── 02-resolving-classes.php
│   │       │   ├── 03-resolving-all-elements.php
│   │       │   ├── 04-discovering-the-context-using-class-reflection.php
│   │       │   ├── 05-discovering-the-context-using-method-reflection.php
│   │       │   ├── 06-discovering-the-context-using-file-contents.php
│   │       │   └── Classy.php
│   │       ├── phpmd.xml.dist
│   │       ├── phpunit.xml.dist
│   │       ├── src
│   │       │   ├── FqsenResolver.php
│   │       │   ├── Type.php
│   │       │   ├── TypeResolver.php
│   │       │   └── Types
│   │       │       ├── Array_.php
│   │       │       ├── Boolean.php
│   │       │       ├── Callable_.php
│   │       │       ├── Compound.php
│   │       │       ├── Context.php
│   │       │       ├── ContextFactory.php
│   │       │       ├── Float_.php
│   │       │       ├── Integer.php
│   │       │       ├── Mixed.php
│   │       │       ├── Null_.php
│   │       │       ├── Object_.php
│   │       │       ├── Resource.php
│   │       │       ├── Scalar.php
│   │       │       ├── Self_.php
│   │       │       ├── Static_.php
│   │       │       ├── String_.php
│   │       │       ├── This.php
│   │       │       └── Void_.php
│   │       └── tests
│   │           └── unit
│   │               ├── TypeResolverTest.php
│   │               └── Types
│   │                   ├── ContextFactoryTest.php
│   │                   └── ContextTest.php
│   ├── phploc
│   │   └── phploc
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── build
│   │       │   ├── phar-autoload.php.in
│   │       │   ├── phar-manifest.php
│   │       │   ├── phpunit.xml
│   │       │   └── travis-ci.xml
│   │       ├── build.xml
│   │       ├── composer.json
│   │       ├── phploc
│   │       ├── src
│   │       │   ├── Analyser.php
│   │       │   ├── CLI
│   │       │   │   ├── Application.php
│   │       │   │   └── Command.php
│   │       │   ├── Exception
│   │       │   │   ├── Exception.php
│   │       │   │   └── RuntimeException.php
│   │       │   └── Log
│   │       │       ├── CSV
│   │       │       │   ├── History.php
│   │       │       │   └── Single.php
│   │       │       ├── Text.php
│   │       │       └── XML.php
│   │       └── tests
│   │           ├── AnalyzerTest.php
│   │           ├── Log
│   │           │   └── CSV
│   │           │       ├── HistoryTest.php
│   │           │       └── SingleTest.php
│   │           └── _files
│   │               ├── issue_112.php
│   │               ├── issue_126
│   │               │   ├── issue_126_1.php
│   │               │   ├── issue_126_2.php
│   │               │   ├── issue_126_3.php
│   │               │   ├── issue_126_4.php
│   │               │   ├── issue_126_5.php
│   │               │   ├── issue_126_6.php
│   │               │   └── issue_126_7.php
│   │               ├── issue_139.php
│   │               ├── issue_62.php
│   │               ├── source.php
│   │               ├── tests.php
│   │               ├── trait.php
│   │               └── twoTestsThatIndirectlyExtendPHPUnitTestCase.php
│   ├── phpmd
│   │   └── phpmd
│   │       ├── AUTHORS.rst
│   │       ├── CHANGELOG
│   │       ├── CONTRIBUTING.md
│   │       ├── LICENSE
│   │       ├── README.rst
│   │       ├── build.properties
│   │       ├── composer.json
│   │       ├── setup
│   │       └── src
│   │           ├── bin
│   │           │   ├── phpmd
│   │           │   └── phpmd.bat
│   │           ├── conf
│   │           │   └── phar_bootstrap.stub
│   │           └── main
│   │               ├── php
│   │               │   └── PHPMD
│   │               │       ├── AbstractNode.php
│   │               │       ├── AbstractRenderer.php
│   │               │       ├── AbstractRule.php
│   │               │       ├── AbstractWriter.php
│   │               │       ├── Node
│   │               │       │   ├── ASTNode.php
│   │               │       │   ├── AbstractCallableNode.php
│   │               │       │   ├── AbstractNode.php
│   │               │       │   ├── AbstractTypeNode.php
│   │               │       │   ├── Annotation.php
│   │               │       │   ├── Annotations.php
│   │               │       │   ├── ClassNode.php
│   │               │       │   ├── FunctionNode.php
│   │               │       │   ├── InterfaceNode.php
│   │               │       │   ├── MethodNode.php
│   │               │       │   └── TraitNode.php
│   │               │       ├── PHPMD.php
│   │               │       ├── Parser.php
│   │               │       ├── ParserFactory.php
│   │               │       ├── ProcessingError.php
│   │               │       ├── Renderer
│   │               │       │   ├── HTMLRenderer.php
│   │               │       │   ├── TextRenderer.php
│   │               │       │   └── XMLRenderer.php
│   │               │       ├── Report.php
│   │               │       ├── Rule
│   │               │       │   ├── AbstractLocalVariable.php
│   │               │       │   ├── ClassAware.php
│   │               │       │   ├── CleanCode
│   │               │       │   │   ├── BooleanArgumentFlag.php
│   │               │       │   │   ├── ElseExpression.php
│   │               │       │   │   └── StaticAccess.php
│   │               │       │   ├── Controversial
│   │               │       │   │   ├── CamelCaseClassName.php
│   │               │       │   │   ├── CamelCaseMethodName.php
│   │               │       │   │   ├── CamelCaseParameterName.php
│   │               │       │   │   ├── CamelCasePropertyName.php
│   │               │       │   │   ├── CamelCaseVariableName.php
│   │               │       │   │   └── Superglobals.php
│   │               │       │   ├── CyclomaticComplexity.php
│   │               │       │   ├── Design
│   │               │       │   │   ├── CouplingBetweenObjects.php
│   │               │       │   │   ├── DepthOfInheritance.php
│   │               │       │   │   ├── DevelopmentCodeFragment.php
│   │               │       │   │   ├── EvalExpression.php
│   │               │       │   │   ├── ExitExpression.php
│   │               │       │   │   ├── GotoStatement.php
│   │               │       │   │   ├── LongClass.php
│   │               │       │   │   ├── LongMethod.php
│   │               │       │   │   ├── LongParameterList.php
│   │               │       │   │   ├── NpathComplexity.php
│   │               │       │   │   ├── NumberOfChildren.php
│   │               │       │   │   ├── TooManyFields.php
│   │               │       │   │   ├── TooManyMethods.php
│   │               │       │   │   ├── TooManyPublicMethods.php
│   │               │       │   │   └── WeightedMethodCount.php
│   │               │       │   ├── ExcessivePublicCount.php
│   │               │       │   ├── FunctionAware.php
│   │               │       │   ├── InterfaceAware.php
│   │               │       │   ├── MethodAware.php
│   │               │       │   ├── Naming
│   │               │       │   │   ├── BooleanGetMethodName.php
│   │               │       │   │   ├── ConstantNamingConventions.php
│   │               │       │   │   ├── ConstructorWithNameAsEnclosingClass.php
│   │               │       │   │   ├── LongVariable.php
│   │               │       │   │   ├── ShortMethodName.php
│   │               │       │   │   └── ShortVariable.php
│   │               │       │   ├── UnusedFormalParameter.php
│   │               │       │   ├── UnusedLocalVariable.php
│   │               │       │   ├── UnusedPrivateField.php
│   │               │       │   └── UnusedPrivateMethod.php
│   │               │       ├── Rule.php
│   │               │       ├── RuleClassFileNotFoundException.php
│   │               │       ├── RuleClassNotFoundException.php
│   │               │       ├── RuleSet.php
│   │               │       ├── RuleSetFactory.php
│   │               │       ├── RuleSetNotFoundException.php
│   │               │       ├── RuleViolation.php
│   │               │       ├── TextUI
│   │               │       │   ├── Command.php
│   │               │       │   └── CommandLineOptions.php
│   │               │       └── Writer
│   │               │           └── StreamWriter.php
│   │               └── resources
│   │                   └── rulesets
│   │                       ├── cleancode.xml
│   │                       ├── codesize.xml
│   │                       ├── controversial.xml
│   │                       ├── design.xml
│   │                       ├── naming.xml
│   │                       └── unusedcode.xml
│   ├── phpoption
│   │   └── phpoption
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── composer.json
│   │       ├── phpunit.xml.dist
│   │       ├── src
│   │       │   └── PhpOption
│   │       │       ├── LazyOption.php
│   │       │       ├── None.php
│   │       │       ├── Option.php
│   │       │       └── Some.php
│   │       └── tests
│   │           ├── PhpOption
│   │           │   └── Tests
│   │           │       ├── EnsureTest.php
│   │           │       ├── LazyOptionTest.php
│   │           │       ├── NoneTest.php
│   │           │       ├── OptionTest.php
│   │           │       ├── PerformanceTest.php
│   │           │       └── SomeTest.php
│   │           └── bootstrap.php
│   ├── phpspec
│   │   └── prophecy
│   │       ├── CHANGES.md
│   │       ├── CONTRIBUTING.md
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── composer.json
│   │       ├── fixtures
│   │       │   ├── EmptyClass.php
│   │       │   ├── EmptyInterface.php
│   │       │   ├── FinalClass.php
│   │       │   ├── ModifierInterface.php
│   │       │   ├── Named.php
│   │       │   ├── OptionalDepsClass.php
│   │       │   ├── SpecialMethods.php
│   │       │   ├── WithArguments.php
│   │       │   ├── WithCallableArgument.php
│   │       │   ├── WithFinalMethod.php
│   │       │   ├── WithFinalVirtuallyPrivateMethod.php
│   │       │   ├── WithProtectedAbstractMethod.php
│   │       │   ├── WithReferences.php
│   │       │   ├── WithReturnTypehints.php
│   │       │   ├── WithStaticMethod.php
│   │       │   ├── WithTypehintedVariadicArgument.php
│   │       │   ├── WithVariadicArgument.php
│   │       │   └── WithVirtuallyPrivateMethod.php
│   │       ├── phpunit.xml.dist
│   │       ├── spec
│   │       │   └── Prophecy
│   │       │       ├── Argument
│   │       │       │   ├── ArgumentsWildcardSpec.php
│   │       │       │   └── Token
│   │       │       │       ├── AnyValueTokenSpec.php
│   │       │       │       ├── AnyValuesTokenSpec.php
│   │       │       │       ├── ApproximateValueTokenSpec.php
│   │       │       │       ├── ArrayCountTokenSpec.php
│   │       │       │       ├── ArrayEntryTokenSpec.php
│   │       │       │       ├── ArrayEveryEntryTokenSpec.php
│   │       │       │       ├── CallbackTokenSpec.php
│   │       │       │       ├── ExactValueTokenSpec.php
│   │       │       │       ├── IdenticalValueTokenSpec.php
│   │       │       │       ├── LogicalAndTokenSpec.php
│   │       │       │       ├── LogicalNotTokenSpec.php
│   │       │       │       ├── ObjectStateTokenSpec.php
│   │       │       │       ├── StringContainsTokenSpec.php
│   │       │       │       └── TypeTokenSpec.php
│   │       │       ├── ArgumentSpec.php
│   │       │       ├── Call
│   │       │       │   ├── CallCenterSpec.php
│   │       │       │   └── CallSpec.php
│   │       │       ├── Comparator
│   │       │       │   ├── ClosureComparatorSpec.php
│   │       │       │   ├── FactorySpec.php
│   │       │       │   └── ProphecyComparatorSpec.php
│   │       │       ├── Doubler
│   │       │       │   ├── ClassPatch
│   │       │       │   │   ├── DisableConstructorPatchSpec.php
│   │       │       │   │   ├── HhvmExceptionPatchSpec.php
│   │       │       │   │   ├── KeywordPatchSpec.php
│   │       │       │   │   ├── MagicCallPatchSpec.php
│   │       │       │   │   ├── ProphecySubjectPatchSpec.php
│   │       │       │   │   ├── ReflectionClassNewInstancePatchSpec.php
│   │       │       │   │   ├── SplFileInfoPatchSpec.php
│   │       │       │   │   └── TraversablePatchSpec.php
│   │       │       │   ├── DoublerSpec.php
│   │       │       │   ├── Generator
│   │       │       │   │   ├── ClassCodeGeneratorSpec.php
│   │       │       │   │   ├── ClassCreatorSpec.php
│   │       │       │   │   └── Node
│   │       │       │   │       ├── ArgumentNodeSpec.php
│   │       │       │   │       ├── ClassNodeSpec.php
│   │       │       │   │       └── MethodNodeSpec.php
│   │       │       │   ├── LazyDoubleSpec.php
│   │       │       │   └── NameGeneratorSpec.php
│   │       │       ├── Exception
│   │       │       │   ├── Call
│   │       │       │   │   └── UnexpectedCallExceptionSpec.php
│   │       │       │   ├── Doubler
│   │       │       │   │   ├── ClassCreatorExceptionSpec.php
│   │       │       │   │   ├── ClassMirrorExceptionSpec.php
│   │       │       │   │   ├── ClassNotFoundExceptionSpec.php
│   │       │       │   │   ├── DoubleExceptionSpec.php
│   │       │       │   │   ├── InterfaceNotFoundExceptionSpec.php
│   │       │       │   │   ├── MethodNotExtendableExceptionSpec.php
│   │       │       │   │   └── MethodNotFoundExceptionSpec.php
│   │       │       │   ├── Prediction
│   │       │       │   │   ├── AggregateExceptionSpec.php
│   │       │       │   │   ├── NoCallsExceptionSpec.php
│   │       │       │   │   ├── UnexpectedCallsCountExceptionSpec.php
│   │       │       │   │   └── UnexpectedCallsExceptionSpec.php
│   │       │       │   └── Prophecy
│   │       │       │       ├── MethodProphecyExceptionSpec.php
│   │       │       │       └── ObjectProphecyExceptionSpec.php
│   │       │       ├── Prediction
│   │       │       │   ├── CallPredictionSpec.php
│   │       │       │   ├── CallTimesPredictionSpec.php
│   │       │       │   ├── CallbackPredictionSpec.php
│   │       │       │   └── NoCallsPredictionSpec.php
│   │       │       ├── Promise
│   │       │       │   ├── CallbackPromiseSpec.php
│   │       │       │   ├── ReturnArgumentPromiseSpec.php
│   │       │       │   ├── ReturnPromiseSpec.php
│   │       │       │   └── ThrowPromiseSpec.php
│   │       │       ├── Prophecy
│   │       │       │   ├── MethodProphecySpec.php
│   │       │       │   ├── ObjectProphecySpec.php
│   │       │       │   └── RevealerSpec.php
│   │       │       ├── ProphetSpec.php
│   │       │       └── Util
│   │       │           └── StringUtilSpec.php
│   │       ├── src
│   │       │   └── Prophecy
│   │       │       ├── Argument
│   │       │       │   ├── ArgumentsWildcard.php
│   │       │       │   └── Token
│   │       │       │       ├── AnyValueToken.php
│   │       │       │       ├── AnyValuesToken.php
│   │       │       │       ├── ApproximateValueToken.php
│   │       │       │       ├── ArrayCountToken.php
│   │       │       │       ├── ArrayEntryToken.php
│   │       │       │       ├── ArrayEveryEntryToken.php
│   │       │       │       ├── CallbackToken.php
│   │       │       │       ├── ExactValueToken.php
│   │       │       │       ├── IdenticalValueToken.php
│   │       │       │       ├── LogicalAndToken.php
│   │       │       │       ├── LogicalNotToken.php
│   │       │       │       ├── ObjectStateToken.php
│   │       │       │       ├── StringContainsToken.php
│   │       │       │       ├── TokenInterface.php
│   │       │       │       └── TypeToken.php
│   │       │       ├── Argument.php
│   │       │       ├── Call
│   │       │       │   ├── Call.php
│   │       │       │   └── CallCenter.php
│   │       │       ├── Comparator
│   │       │       │   ├── ClosureComparator.php
│   │       │       │   ├── Factory.php
│   │       │       │   └── ProphecyComparator.php
│   │       │       ├── Doubler
│   │       │       │   ├── CachedDoubler.php
│   │       │       │   ├── ClassPatch
│   │       │       │   │   ├── ClassPatchInterface.php
│   │       │       │   │   ├── DisableConstructorPatch.php
│   │       │       │   │   ├── HhvmExceptionPatch.php
│   │       │       │   │   ├── KeywordPatch.php
│   │       │       │   │   ├── MagicCallPatch.php
│   │       │       │   │   ├── ProphecySubjectPatch.php
│   │       │       │   │   ├── ReflectionClassNewInstancePatch.php
│   │       │       │   │   ├── SplFileInfoPatch.php
│   │       │       │   │   └── TraversablePatch.php
│   │       │       │   ├── DoubleInterface.php
│   │       │       │   ├── Doubler.php
│   │       │       │   ├── Generator
│   │       │       │   │   ├── ClassCodeGenerator.php
│   │       │       │   │   ├── ClassCreator.php
│   │       │       │   │   ├── ClassMirror.php
│   │       │       │   │   ├── Node
│   │       │       │   │   │   ├── ArgumentNode.php
│   │       │       │   │   │   ├── ClassNode.php
│   │       │       │   │   │   └── MethodNode.php
│   │       │       │   │   └── ReflectionInterface.php
│   │       │       │   ├── LazyDouble.php
│   │       │       │   └── NameGenerator.php
│   │       │       ├── Exception
│   │       │       │   ├── Call
│   │       │       │   │   └── UnexpectedCallException.php
│   │       │       │   ├── Doubler
│   │       │       │   │   ├── ClassCreatorException.php
│   │       │       │   │   ├── ClassMirrorException.php
│   │       │       │   │   ├── ClassNotFoundException.php
│   │       │       │   │   ├── DoubleException.php
│   │       │       │   │   ├── DoublerException.php
│   │       │       │   │   ├── InterfaceNotFoundException.php
│   │       │       │   │   ├── MethodNotExtendableException.php
│   │       │       │   │   ├── MethodNotFoundException.php
│   │       │       │   │   └── ReturnByReferenceException.php
│   │       │       │   ├── Exception.php
│   │       │       │   ├── InvalidArgumentException.php
│   │       │       │   ├── Prediction
│   │       │       │   │   ├── AggregateException.php
│   │       │       │   │   ├── FailedPredictionException.php
│   │       │       │   │   ├── NoCallsException.php
│   │       │       │   │   ├── PredictionException.php
│   │       │       │   │   ├── UnexpectedCallsCountException.php
│   │       │       │   │   └── UnexpectedCallsException.php
│   │       │       │   └── Prophecy
│   │       │       │       ├── MethodProphecyException.php
│   │       │       │       ├── ObjectProphecyException.php
│   │       │       │       └── ProphecyException.php
│   │       │       ├── PhpDocumentor
│   │       │       │   ├── ClassAndInterfaceTagRetriever.php
│   │       │       │   ├── ClassTagRetriever.php
│   │       │       │   ├── LegacyClassTagRetriever.php
│   │       │       │   └── MethodTagRetrieverInterface.php
│   │       │       ├── Prediction
│   │       │       │   ├── CallPrediction.php
│   │       │       │   ├── CallTimesPrediction.php
│   │       │       │   ├── CallbackPrediction.php
│   │       │       │   ├── NoCallsPrediction.php
│   │       │       │   └── PredictionInterface.php
│   │       │       ├── Promise
│   │       │       │   ├── CallbackPromise.php
│   │       │       │   ├── PromiseInterface.php
│   │       │       │   ├── ReturnArgumentPromise.php
│   │       │       │   ├── ReturnPromise.php
│   │       │       │   └── ThrowPromise.php
│   │       │       ├── Prophecy
│   │       │       │   ├── MethodProphecy.php
│   │       │       │   ├── ObjectProphecy.php
│   │       │       │   ├── ProphecyInterface.php
│   │       │       │   ├── ProphecySubjectInterface.php
│   │       │       │   ├── Revealer.php
│   │       │       │   └── RevealerInterface.php
│   │       │       ├── Prophet.php
│   │       │       └── Util
│   │       │           ├── ExportUtil.php
│   │       │           └── StringUtil.php
│   │       └── tests
│   │           └── Doubler
│   │               └── Generator
│   │                   └── ClassMirrorTest.php
│   ├── phpunit
│   │   ├── php-code-coverage
│   │   │   ├── CONTRIBUTING.md
│   │   │   ├── ChangeLog-2.2.md
│   │   │   ├── ChangeLog-3.0.md
│   │   │   ├── ChangeLog-3.1.md
│   │   │   ├── ChangeLog-3.2.md
│   │   │   ├── ChangeLog-3.3.md
│   │   │   ├── ChangeLog-4.0.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── phpunit.xml
│   │   │   ├── src
│   │   │   │   ├── CodeCoverage.php
│   │   │   │   ├── Driver
│   │   │   │   │   ├── Driver.php
│   │   │   │   │   ├── HHVM.php
│   │   │   │   │   ├── PHPDBG.php
│   │   │   │   │   └── Xdebug.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── CoveredCodeNotExecutedException.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   │   ├── MissingCoversAnnotationException.php
│   │   │   │   │   ├── RuntimeException.php
│   │   │   │   │   └── UnintentionallyCoveredCodeException.php
│   │   │   │   ├── Filter.php
│   │   │   │   ├── Node
│   │   │   │   │   ├── AbstractNode.php
│   │   │   │   │   ├── Builder.php
│   │   │   │   │   ├── Directory.php
│   │   │   │   │   ├── File.php
│   │   │   │   │   └── Iterator.php
│   │   │   │   ├── Report
│   │   │   │   │   ├── Clover.php
│   │   │   │   │   ├── Crap4j.php
│   │   │   │   │   ├── Html
│   │   │   │   │   │   ├── Facade.php
│   │   │   │   │   │   ├── Renderer
│   │   │   │   │   │   │   ├── Dashboard.php
│   │   │   │   │   │   │   ├── Directory.php
│   │   │   │   │   │   │   ├── File.php
│   │   │   │   │   │   │   └── Template
│   │   │   │   │   │   │       ├── coverage_bar.html.dist
│   │   │   │   │   │   │       ├── css
│   │   │   │   │   │   │       │   ├── bootstrap.min.css
│   │   │   │   │   │   │       │   ├── nv.d3.min.css
│   │   │   │   │   │   │       │   └── style.css
│   │   │   │   │   │   │       ├── dashboard.html.dist
│   │   │   │   │   │   │       ├── directory.html.dist
│   │   │   │   │   │   │       ├── directory_item.html.dist
│   │   │   │   │   │   │       ├── file.html.dist
│   │   │   │   │   │   │       ├── file_item.html.dist
│   │   │   │   │   │   │       ├── fonts
│   │   │   │   │   │   │       │   ├── glyphicons-halflings-regular.eot
│   │   │   │   │   │   │       │   ├── glyphicons-halflings-regular.svg
│   │   │   │   │   │   │       │   ├── glyphicons-halflings-regular.ttf
│   │   │   │   │   │   │       │   ├── glyphicons-halflings-regular.woff
│   │   │   │   │   │   │       │   └── glyphicons-halflings-regular.woff2
│   │   │   │   │   │   │       ├── js
│   │   │   │   │   │   │       │   ├── bootstrap.min.js
│   │   │   │   │   │   │       │   ├── d3.min.js
│   │   │   │   │   │   │       │   ├── holder.min.js
│   │   │   │   │   │   │       │   ├── html5shiv.min.js
│   │   │   │   │   │   │       │   ├── jquery.min.js
│   │   │   │   │   │   │       │   ├── nv.d3.min.js
│   │   │   │   │   │   │       │   └── respond.min.js
│   │   │   │   │   │   │       └── method_item.html.dist
│   │   │   │   │   │   └── Renderer.php
│   │   │   │   │   ├── PHP.php
│   │   │   │   │   ├── Text.php
│   │   │   │   │   └── Xml
│   │   │   │   │       ├── Coverage.php
│   │   │   │   │       ├── Directory.php
│   │   │   │   │       ├── Facade.php
│   │   │   │   │       ├── File.php
│   │   │   │   │       ├── Method.php
│   │   │   │   │       ├── Node.php
│   │   │   │   │       ├── Project.php
│   │   │   │   │       ├── Report.php
│   │   │   │   │       ├── Tests.php
│   │   │   │   │       ├── Totals.php
│   │   │   │   │       └── Unit.php
│   │   │   │   └── Util.php
│   │   │   └── tests
│   │   │       ├── TestCase.php
│   │   │       ├── _files
│   │   │       │   ├── BankAccount-clover.xml
│   │   │       │   ├── BankAccount-crap4j.xml
│   │   │       │   ├── BankAccount-text.txt
│   │   │       │   ├── BankAccount.php
│   │   │       │   ├── BankAccountTest.php
│   │   │       │   ├── CoverageClassExtendedTest.php
│   │   │       │   ├── CoverageClassTest.php
│   │   │       │   ├── CoverageFunctionParenthesesTest.php
│   │   │       │   ├── CoverageFunctionParenthesesWhitespaceTest.php
│   │   │       │   ├── CoverageFunctionTest.php
│   │   │       │   ├── CoverageMethodOneLineAnnotationTest.php
│   │   │       │   ├── CoverageMethodParenthesesTest.php
│   │   │       │   ├── CoverageMethodParenthesesWhitespaceTest.php
│   │   │       │   ├── CoverageMethodTest.php
│   │   │       │   ├── CoverageNoneTest.php
│   │   │       │   ├── CoverageNotPrivateTest.php
│   │   │       │   ├── CoverageNotProtectedTest.php
│   │   │       │   ├── CoverageNotPublicTest.php
│   │   │       │   ├── CoverageNothingTest.php
│   │   │       │   ├── CoveragePrivateTest.php
│   │   │       │   ├── CoverageProtectedTest.php
│   │   │       │   ├── CoveragePublicTest.php
│   │   │       │   ├── CoverageTwoDefaultClassAnnotations.php
│   │   │       │   ├── CoveredClass.php
│   │   │       │   ├── CoveredFunction.php
│   │   │       │   ├── NamespaceCoverageClassExtendedTest.php
│   │   │       │   ├── NamespaceCoverageClassTest.php
│   │   │       │   ├── NamespaceCoverageCoversClassPublicTest.php
│   │   │       │   ├── NamespaceCoverageCoversClassTest.php
│   │   │       │   ├── NamespaceCoverageMethodTest.php
│   │   │       │   ├── NamespaceCoverageNotPrivateTest.php
│   │   │       │   ├── NamespaceCoverageNotProtectedTest.php
│   │   │       │   ├── NamespaceCoverageNotPublicTest.php
│   │   │       │   ├── NamespaceCoveragePrivateTest.php
│   │   │       │   ├── NamespaceCoverageProtectedTest.php
│   │   │       │   ├── NamespaceCoveragePublicTest.php
│   │   │       │   ├── NamespaceCoveredClass.php
│   │   │       │   ├── NotExistingCoveredElementTest.php
│   │   │       │   ├── Report
│   │   │       │   │   ├── HTML
│   │   │       │   │   │   ├── CoverageForBankAccount
│   │   │       │   │   │   │   ├── BankAccount.php.html
│   │   │       │   │   │   │   ├── dashboard.html
│   │   │       │   │   │   │   └── index.html
│   │   │       │   │   │   ├── CoverageForClassWithAnonymousFunction
│   │   │       │   │   │   │   ├── dashboard.html
│   │   │       │   │   │   │   ├── index.html
│   │   │       │   │   │   │   └── source_with_class_and_anonymous_function.php.html
│   │   │       │   │   │   └── CoverageForFileWithIgnoredLines
│   │   │       │   │   │       ├── dashboard.html
│   │   │       │   │   │       ├── index.html
│   │   │       │   │   │       └── source_with_ignore.php.html
│   │   │       │   │   └── XML
│   │   │       │   │       ├── CoverageForBankAccount
│   │   │       │   │       │   ├── BankAccount.php.xml
│   │   │       │   │       │   └── index.xml
│   │   │       │   │       ├── CoverageForClassWithAnonymousFunction
│   │   │       │   │       │   ├── index.xml
│   │   │       │   │       │   └── source_with_class_and_anonymous_function.php.xml
│   │   │       │   │       └── CoverageForFileWithIgnoredLines
│   │   │       │   │           ├── index.xml
│   │   │       │   │           └── source_with_ignore.php.xml
│   │   │       │   ├── class-with-anonymous-function-clover.xml
│   │   │       │   ├── class-with-anonymous-function-crap4j.xml
│   │   │       │   ├── class-with-anonymous-function-text.txt
│   │   │       │   ├── ignored-lines-clover.xml
│   │   │       │   ├── ignored-lines-crap4j.xml
│   │   │       │   ├── ignored-lines-text.txt
│   │   │       │   ├── source_with_class_and_anonymous_function.php
│   │   │       │   ├── source_with_ignore.php
│   │   │       │   ├── source_with_namespace.php
│   │   │       │   ├── source_with_oneline_annotations.php
│   │   │       │   ├── source_without_ignore.php
│   │   │       │   └── source_without_namespace.php
│   │   │       ├── bootstrap.php
│   │   │       └── tests
│   │   │           ├── BuilderTest.php
│   │   │           ├── CloverTest.php
│   │   │           ├── CodeCoverageTest.php
│   │   │           ├── Crap4jTest.php
│   │   │           ├── FilterTest.php
│   │   │           ├── HTMLTest.php
│   │   │           ├── TextTest.php
│   │   │           ├── UtilTest.php
│   │   │           └── XMLTest.php
│   │   ├── php-file-iterator
│   │   │   ├── ChangeLog.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   └── src
│   │   │       ├── Facade.php
│   │   │       ├── Factory.php
│   │   │       └── Iterator.php
│   │   ├── php-text-template
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   └── src
│   │   │       └── Template.php
│   │   ├── php-timer
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   ├── src
│   │   │   │   └── Timer.php
│   │   │   └── tests
│   │   │       └── TimerTest.php
│   │   ├── php-token-stream
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build
│   │   │   │   └── phpunit.xml
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── src
│   │   │   │   ├── Token
│   │   │   │   │   ├── Stream
│   │   │   │   │   │   └── CachingFactory.php
│   │   │   │   │   └── Stream.php
│   │   │   │   └── Token.php
│   │   │   └── tests
│   │   │       ├── Token
│   │   │       │   ├── ClassTest.php
│   │   │       │   ├── ClosureTest.php
│   │   │       │   ├── FunctionTest.php
│   │   │       │   ├── IncludeTest.php
│   │   │       │   ├── InterfaceTest.php
│   │   │       │   └── NamespaceTest.php
│   │   │       ├── TokenTest.php
│   │   │       ├── _fixture
│   │   │       │   ├── classExtendsNamespacedClass.php
│   │   │       │   ├── classInNamespace.php
│   │   │       │   ├── classInScopedNamespace.php
│   │   │       │   ├── classUsesNamespacedFunction.php
│   │   │       │   ├── class_with_method_that_declares_anonymous_class.php
│   │   │       │   ├── class_with_method_that_declares_anonymous_class2.php
│   │   │       │   ├── closure.php
│   │   │       │   ├── issue19.php
│   │   │       │   ├── issue30.php
│   │   │       │   ├── multipleNamespacesWithOneClassUsingBraces.php
│   │   │       │   ├── multipleNamespacesWithOneClassUsingNonBraceSyntax.php
│   │   │       │   ├── source.php
│   │   │       │   ├── source2.php
│   │   │       │   ├── source3.php
│   │   │       │   ├── source4.php
│   │   │       │   └── source5.php
│   │   │       └── bootstrap.php
│   │   ├── phpunit
│   │   │   ├── CODE_OF_CONDUCT.md
│   │   │   ├── CONTRIBUTING.md
│   │   │   ├── ChangeLog-4.0.md
│   │   │   ├── ChangeLog-4.1.md
│   │   │   ├── ChangeLog-4.2.md
│   │   │   ├── ChangeLog-4.3.md
│   │   │   ├── ChangeLog-4.4.md
│   │   │   ├── ChangeLog-4.5.md
│   │   │   ├── ChangeLog-4.6.md
│   │   │   ├── ChangeLog-4.7.md
│   │   │   ├── ChangeLog-4.8.md
│   │   │   ├── ChangeLog-5.0.md
│   │   │   ├── ChangeLog-5.1.md
│   │   │   ├── ChangeLog-5.2.md
│   │   │   ├── ChangeLog-5.3.md
│   │   │   ├── ChangeLog-5.4.md
│   │   │   ├── ChangeLog-5.5.md
│   │   │   ├── ChangeLog-5.6.md
│   │   │   ├── ChangeLog-5.7.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── phpunit
│   │   │   ├── phpunit.xml
│   │   │   ├── phpunit.xsd
│   │   │   ├── src
│   │   │   │   ├── Exception.php
│   │   │   │   ├── Extensions
│   │   │   │   │   ├── GroupTestSuite.php
│   │   │   │   │   ├── PhptTestCase.php
│   │   │   │   │   ├── PhptTestSuite.php
│   │   │   │   │   ├── RepeatedTest.php
│   │   │   │   │   ├── TestDecorator.php
│   │   │   │   │   └── TicketListener.php
│   │   │   │   ├── ForwardCompatibility
│   │   │   │   │   ├── Assert.php
│   │   │   │   │   ├── BaseTestListener.php
│   │   │   │   │   ├── TestCase.php
│   │   │   │   │   └── TestListener.php
│   │   │   │   ├── Framework
│   │   │   │   │   ├── Assert
│   │   │   │   │   │   └── Functions.php
│   │   │   │   │   ├── Assert.php
│   │   │   │   │   ├── AssertionFailedError.php
│   │   │   │   │   ├── BaseTestListener.php
│   │   │   │   │   ├── CodeCoverageException.php
│   │   │   │   │   ├── Constraint
│   │   │   │   │   │   ├── And.php
│   │   │   │   │   │   ├── ArrayHasKey.php
│   │   │   │   │   │   ├── ArraySubset.php
│   │   │   │   │   │   ├── Attribute.php
│   │   │   │   │   │   ├── Callback.php
│   │   │   │   │   │   ├── ClassHasAttribute.php
│   │   │   │   │   │   ├── ClassHasStaticAttribute.php
│   │   │   │   │   │   ├── Composite.php
│   │   │   │   │   │   ├── Count.php
│   │   │   │   │   │   ├── DirectoryExists.php
│   │   │   │   │   │   ├── Exception.php
│   │   │   │   │   │   ├── ExceptionCode.php
│   │   │   │   │   │   ├── ExceptionMessage.php
│   │   │   │   │   │   ├── ExceptionMessageRegExp.php
│   │   │   │   │   │   ├── FileExists.php
│   │   │   │   │   │   ├── GreaterThan.php
│   │   │   │   │   │   ├── IsAnything.php
│   │   │   │   │   │   ├── IsEmpty.php
│   │   │   │   │   │   ├── IsEqual.php
│   │   │   │   │   │   ├── IsFalse.php
│   │   │   │   │   │   ├── IsFinite.php
│   │   │   │   │   │   ├── IsIdentical.php
│   │   │   │   │   │   ├── IsInfinite.php
│   │   │   │   │   │   ├── IsInstanceOf.php
│   │   │   │   │   │   ├── IsJson.php
│   │   │   │   │   │   ├── IsNan.php
│   │   │   │   │   │   ├── IsNull.php
│   │   │   │   │   │   ├── IsReadable.php
│   │   │   │   │   │   ├── IsTrue.php
│   │   │   │   │   │   ├── IsType.php
│   │   │   │   │   │   ├── IsWritable.php
│   │   │   │   │   │   ├── JsonMatches
│   │   │   │   │   │   │   └── ErrorMessageProvider.php
│   │   │   │   │   │   ├── JsonMatches.php
│   │   │   │   │   │   ├── LessThan.php
│   │   │   │   │   │   ├── Not.php
│   │   │   │   │   │   ├── ObjectHasAttribute.php
│   │   │   │   │   │   ├── Or.php
│   │   │   │   │   │   ├── PCREMatch.php
│   │   │   │   │   │   ├── SameSize.php
│   │   │   │   │   │   ├── StringContains.php
│   │   │   │   │   │   ├── StringEndsWith.php
│   │   │   │   │   │   ├── StringMatches.php
│   │   │   │   │   │   ├── StringStartsWith.php
│   │   │   │   │   │   ├── TraversableContains.php
│   │   │   │   │   │   ├── TraversableContainsOnly.php
│   │   │   │   │   │   └── Xor.php
│   │   │   │   │   ├── Constraint.php
│   │   │   │   │   ├── CoveredCodeNotExecutedException.php
│   │   │   │   │   ├── Error
│   │   │   │   │   │   ├── Deprecated.php
│   │   │   │   │   │   ├── Notice.php
│   │   │   │   │   │   └── Warning.php
│   │   │   │   │   ├── Error.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── ExceptionWrapper.php
│   │   │   │   │   ├── ExpectationFailedException.php
│   │   │   │   │   ├── IncompleteTest.php
│   │   │   │   │   ├── IncompleteTestCase.php
│   │   │   │   │   ├── IncompleteTestError.php
│   │   │   │   │   ├── InvalidCoversTargetException.php
│   │   │   │   │   ├── MissingCoversAnnotationException.php
│   │   │   │   │   ├── OutputError.php
│   │   │   │   │   ├── RiskyTest.php
│   │   │   │   │   ├── RiskyTestError.php
│   │   │   │   │   ├── SelfDescribing.php
│   │   │   │   │   ├── SkippedTest.php
│   │   │   │   │   ├── SkippedTestCase.php
│   │   │   │   │   ├── SkippedTestError.php
│   │   │   │   │   ├── SkippedTestSuiteError.php
│   │   │   │   │   ├── SyntheticError.php
│   │   │   │   │   ├── Test.php
│   │   │   │   │   ├── TestCase.php
│   │   │   │   │   ├── TestFailure.php
│   │   │   │   │   ├── TestListener.php
│   │   │   │   │   ├── TestResult.php
│   │   │   │   │   ├── TestSuite
│   │   │   │   │   │   └── DataProvider.php
│   │   │   │   │   ├── TestSuite.php
│   │   │   │   │   ├── UnintentionallyCoveredCodeError.php
│   │   │   │   │   ├── Warning.php
│   │   │   │   │   └── WarningTestCase.php
│   │   │   │   ├── Runner
│   │   │   │   │   ├── BaseTestRunner.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── Filter
│   │   │   │   │   │   ├── Factory.php
│   │   │   │   │   │   ├── Group
│   │   │   │   │   │   │   ├── Exclude.php
│   │   │   │   │   │   │   └── Include.php
│   │   │   │   │   │   ├── Group.php
│   │   │   │   │   │   └── Test.php
│   │   │   │   │   ├── StandardTestSuiteLoader.php
│   │   │   │   │   ├── TestSuiteLoader.php
│   │   │   │   │   └── Version.php
│   │   │   │   ├── TextUI
│   │   │   │   │   ├── Command.php
│   │   │   │   │   ├── ResultPrinter.php
│   │   │   │   │   └── TestRunner.php
│   │   │   │   └── Util
│   │   │   │       ├── Blacklist.php
│   │   │   │       ├── Configuration.php
│   │   │   │       ├── ConfigurationGenerator.php
│   │   │   │       ├── ErrorHandler.php
│   │   │   │       ├── Fileloader.php
│   │   │   │       ├── Filesystem.php
│   │   │   │       ├── Filter.php
│   │   │   │       ├── Getopt.php
│   │   │   │       ├── GlobalState.php
│   │   │   │       ├── InvalidArgumentHelper.php
│   │   │   │       ├── Log
│   │   │   │       │   ├── JSON.php
│   │   │   │       │   ├── JUnit.php
│   │   │   │       │   ├── TAP.php
│   │   │   │       │   └── TeamCity.php
│   │   │   │       ├── PHP
│   │   │   │       │   ├── Default.php
│   │   │   │       │   ├── Template
│   │   │   │       │   │   └── TestCaseMethod.tpl.dist
│   │   │   │       │   ├── Windows.php
│   │   │   │       │   └── eval-stdin.php
│   │   │   │       ├── PHP.php
│   │   │   │       ├── Printer.php
│   │   │   │       ├── Regex.php
│   │   │   │       ├── String.php
│   │   │   │       ├── Test.php
│   │   │   │       ├── TestDox
│   │   │   │       │   ├── NamePrettifier.php
│   │   │   │       │   ├── ResultPrinter
│   │   │   │       │   │   ├── HTML.php
│   │   │   │       │   │   ├── Text.php
│   │   │   │       │   │   └── XML.php
│   │   │   │       │   └── ResultPrinter.php
│   │   │   │       ├── TestSuiteIterator.php
│   │   │   │       ├── Type.php
│   │   │   │       └── XML.php
│   │   │   └── tests
│   │   │       ├── Extensions
│   │   │       │   ├── PhptTestCaseTest.php
│   │   │       │   └── RepeatedTestTest.php
│   │   │       ├── Fail
│   │   │       │   └── fail.phpt
│   │   │       ├── Framework
│   │   │       │   ├── AssertTest.php
│   │   │       │   ├── BaseTestListenerTest.php
│   │   │       │   ├── Constraint
│   │   │       │   │   ├── CountTest.php
│   │   │       │   │   ├── ExceptionMessageRegExpTest.php
│   │   │       │   │   ├── ExceptionMessageTest.php
│   │   │       │   │   ├── IsJsonTest.php
│   │   │       │   │   ├── JsonMatches
│   │   │       │   │   │   └── ErrorMessageProviderTest.php
│   │   │       │   │   └── JsonMatchesTest.php
│   │   │       │   ├── ConstraintTest.php
│   │   │       │   ├── SuiteTest.php
│   │   │       │   ├── TestCaseTest.php
│   │   │       │   ├── TestFailureTest.php
│   │   │       │   ├── TestImplementorTest.php
│   │   │       │   └── TestListenerTest.php
│   │   │       ├── Regression
│   │   │       │   ├── GitHub
│   │   │       │   │   ├── 1149
│   │   │       │   │   │   └── Issue1149Test.php
│   │   │       │   │   ├── 1149.phpt
│   │   │       │   │   ├── 1216
│   │   │       │   │   │   ├── Issue1216Test.php
│   │   │       │   │   │   ├── bootstrap1216.php
│   │   │       │   │   │   └── phpunit1216.xml
│   │   │       │   │   ├── 1216.phpt
│   │   │       │   │   ├── 1265
│   │   │       │   │   │   ├── Issue1265Test.php
│   │   │       │   │   │   └── phpunit1265.xml
│   │   │       │   │   ├── 1265.phpt
│   │   │       │   │   ├── 1330
│   │   │       │   │   │   ├── Issue1330Test.php
│   │   │       │   │   │   └── phpunit1330.xml
│   │   │       │   │   ├── 1330.phpt
│   │   │       │   │   ├── 1335
│   │   │       │   │   │   ├── Issue1335Test.php
│   │   │       │   │   │   └── bootstrap1335.php
│   │   │       │   │   ├── 1335.phpt
│   │   │       │   │   ├── 1337
│   │   │       │   │   │   └── Issue1337Test.php
│   │   │       │   │   ├── 1337.phpt
│   │   │       │   │   ├── 1348
│   │   │       │   │   │   └── Issue1348Test.php
│   │   │       │   │   ├── 1348.phpt
│   │   │       │   │   ├── 1351
│   │   │       │   │   │   ├── ChildProcessClass1351.php
│   │   │       │   │   │   └── Issue1351Test.php
│   │   │       │   │   ├── 1351.phpt
│   │   │       │   │   ├── 1374
│   │   │       │   │   │   └── Issue1374Test.php
│   │   │       │   │   ├── 1374.phpt
│   │   │       │   │   ├── 1437
│   │   │       │   │   │   └── Issue1437Test.php
│   │   │       │   │   ├── 1437.phpt
│   │   │       │   │   ├── 1468
│   │   │       │   │   │   └── Issue1468Test.php
│   │   │       │   │   ├── 1468.phpt
│   │   │       │   │   ├── 1471
│   │   │       │   │   │   └── Issue1471Test.php
│   │   │       │   │   ├── 1471.phpt
│   │   │       │   │   ├── 1472
│   │   │       │   │   │   └── Issue1472Test.php
│   │   │       │   │   ├── 1472.phpt
│   │   │       │   │   ├── 1570
│   │   │       │   │   │   └── Issue1570Test.php
│   │   │       │   │   ├── 1570.phpt
│   │   │       │   │   ├── 2137
│   │   │       │   │   │   └── Issue2137Test.php
│   │   │       │   │   ├── 2137-filter.phpt
│   │   │       │   │   ├── 2137-no_filter.phpt
│   │   │       │   │   ├── 2158
│   │   │       │   │   │   ├── Issue2158Test.php
│   │   │       │   │   │   └── constant.inc
│   │   │       │   │   ├── 2158.phpt
│   │   │       │   │   ├── 2299
│   │   │       │   │   │   └── Issue2299Test.php
│   │   │       │   │   ├── 2366
│   │   │       │   │   │   └── Issue2366Test.php
│   │   │       │   │   ├── 2366.phpt
│   │   │       │   │   ├── 2380
│   │   │       │   │   │   └── Issue2380Test.php
│   │   │       │   │   ├── 2380.phpt
│   │   │       │   │   ├── 2382
│   │   │       │   │   │   └── Issue2382Test.php
│   │   │       │   │   ├── 2382.phpt
│   │   │       │   │   ├── 2435
│   │   │       │   │   │   └── Issue2435Test.php
│   │   │       │   │   ├── 2435.phpt
│   │   │       │   │   ├── 244
│   │   │       │   │   │   └── Issue244Test.php
│   │   │       │   │   ├── 244.phpt
│   │   │       │   │   ├── 322
│   │   │       │   │   │   ├── Issue322Test.php
│   │   │       │   │   │   └── phpunit322.xml
│   │   │       │   │   ├── 322.phpt
│   │   │       │   │   ├── 433
│   │   │       │   │   │   └── Issue433Test.php
│   │   │       │   │   ├── 433.phpt
│   │   │       │   │   ├── 445
│   │   │       │   │   │   └── Issue445Test.php
│   │   │       │   │   ├── 445.phpt
│   │   │       │   │   ├── 498
│   │   │       │   │   │   └── Issue498Test.php
│   │   │       │   │   ├── 498.phpt
│   │   │       │   │   ├── 503
│   │   │       │   │   │   └── Issue503Test.php
│   │   │       │   │   ├── 503.phpt
│   │   │       │   │   ├── 581
│   │   │       │   │   │   └── Issue581Test.php
│   │   │       │   │   ├── 581.phpt
│   │   │       │   │   ├── 74
│   │   │       │   │   │   ├── Issue74Test.php
│   │   │       │   │   │   └── NewException.php
│   │   │       │   │   ├── 74.phpt
│   │   │       │   │   ├── 765
│   │   │       │   │   │   └── Issue765Test.php
│   │   │       │   │   ├── 765.phpt
│   │   │       │   │   ├── 797
│   │   │       │   │   │   ├── Issue797Test.php
│   │   │       │   │   │   └── bootstrap797.php
│   │   │       │   │   ├── 797.phpt
│   │   │       │   │   ├── 863.phpt
│   │   │       │   │   ├── 873
│   │   │       │   │   │   └── Issue873Test.php
│   │   │       │   │   ├── 873-php5.phpt
│   │   │       │   │   └── 873-php7.phpt
│   │   │       │   └── Trac
│   │   │       │       ├── 1021
│   │   │       │       │   └── Issue1021Test.php
│   │   │       │       ├── 1021.phpt
│   │   │       │       ├── 523
│   │   │       │       │   └── Issue523Test.php
│   │   │       │       ├── 523.phpt
│   │   │       │       ├── 578
│   │   │       │       │   └── Issue578Test.php
│   │   │       │       ├── 578.phpt
│   │   │       │       ├── 684
│   │   │       │       │   └── Issue684Test.php
│   │   │       │       ├── 684.phpt
│   │   │       │       ├── 783
│   │   │       │       │   ├── ChildSuite.php
│   │   │       │       │   ├── OneTest.php
│   │   │       │       │   ├── ParentSuite.php
│   │   │       │       │   └── TwoTest.php
│   │   │       │       └── 783.phpt
│   │   │       ├── Runner
│   │   │       │   └── BaseTestRunnerTest.php
│   │   │       ├── TextUI
│   │   │       │   ├── _files
│   │   │       │   │   ├── expect_external.txt
│   │   │       │   │   ├── phpt-env.expected.txt
│   │   │       │   │   └── phpt_external.php
│   │   │       │   ├── abstract-test-class.phpt
│   │   │       │   ├── assertion.phpt
│   │   │       │   ├── code-coverage-ignore.phpt
│   │   │       │   ├── colors-always.phpt
│   │   │       │   ├── concrete-test-class.phpt
│   │   │       │   ├── custom-printer-debug.phpt
│   │   │       │   ├── custom-printer-verbose.phpt
│   │   │       │   ├── dataprovider-debug.phpt
│   │   │       │   ├── dataprovider-log-xml-isolation.phpt
│   │   │       │   ├── dataprovider-log-xml.phpt
│   │   │       │   ├── dataprovider-testdox.phpt
│   │   │       │   ├── debug.phpt
│   │   │       │   ├── default-isolation.phpt
│   │   │       │   ├── default.phpt
│   │   │       │   ├── dependencies-clone.phpt
│   │   │       │   ├── dependencies-isolation.phpt
│   │   │       │   ├── dependencies.phpt
│   │   │       │   ├── dependencies2-isolation.phpt
│   │   │       │   ├── dependencies2.phpt
│   │   │       │   ├── dependencies3-isolation.phpt
│   │   │       │   ├── dependencies3.phpt
│   │   │       │   ├── disable-code-coverage-ignore.phpt
│   │   │       │   ├── empty-testcase.phpt
│   │   │       │   ├── exception-stack.phpt
│   │   │       │   ├── exclude-group-isolation.phpt
│   │   │       │   ├── exclude-group.phpt
│   │   │       │   ├── failure-isolation.phpt
│   │   │       │   ├── failure-reverse-list.phpt
│   │   │       │   ├── failure.phpt
│   │   │       │   ├── fatal-isolation.phpt
│   │   │       │   ├── filter-class-isolation.phpt
│   │   │       │   ├── filter-class.phpt
│   │   │       │   ├── filter-dataprovider-by-classname-and-range-isolation.phpt
│   │   │       │   ├── filter-dataprovider-by-classname-and-range.phpt
│   │   │       │   ├── filter-dataprovider-by-number-isolation.phpt
│   │   │       │   ├── filter-dataprovider-by-number.phpt
│   │   │       │   ├── filter-dataprovider-by-only-range-isolation.phpt
│   │   │       │   ├── filter-dataprovider-by-only-range.phpt
│   │   │       │   ├── filter-dataprovider-by-only-regexp-isolation.phpt
│   │   │       │   ├── filter-dataprovider-by-only-regexp.phpt
│   │   │       │   ├── filter-dataprovider-by-only-string-isolation.phpt
│   │   │       │   ├── filter-dataprovider-by-only-string.phpt
│   │   │       │   ├── filter-dataprovider-by-range-isolation.phpt
│   │   │       │   ├── filter-dataprovider-by-range.phpt
│   │   │       │   ├── filter-dataprovider-by-regexp-isolation.phpt
│   │   │       │   ├── filter-dataprovider-by-regexp.phpt
│   │   │       │   ├── filter-dataprovider-by-string-isolation.phpt
│   │   │       │   ├── filter-dataprovider-by-string.phpt
│   │   │       │   ├── filter-method-case-insensitive.phpt
│   │   │       │   ├── filter-method-case-sensitive-no-result.phpt
│   │   │       │   ├── filter-method-isolation.phpt
│   │   │       │   ├── filter-method.phpt
│   │   │       │   ├── filter-no-results.phpt
│   │   │       │   ├── forward-compatibility.phpt
│   │   │       │   ├── group-isolation.phpt
│   │   │       │   ├── group.phpt
│   │   │       │   ├── help.phpt
│   │   │       │   ├── help2.phpt
│   │   │       │   ├── ini-isolation.phpt
│   │   │       │   ├── list-groups.phpt
│   │   │       │   ├── list-suites.phpt
│   │   │       │   ├── log-json-post-66021.phpt
│   │   │       │   ├── log-junit.phpt
│   │   │       │   ├── log-tap.phpt
│   │   │       │   ├── log-teamcity.phpt
│   │   │       │   ├── options-after-arguments.phpt
│   │   │       │   ├── output-isolation.phpt
│   │   │       │   ├── phar-extension-suppressed.phpt
│   │   │       │   ├── phar-extension.phpt
│   │   │       │   ├── phpt-args.phpt
│   │   │       │   ├── phpt-env.phpt
│   │   │       │   ├── phpt-external.phpt
│   │   │       │   ├── phpt-stderr.phpt
│   │   │       │   ├── phpt-stdin.phpt
│   │   │       │   ├── phpt-xfail.phpt
│   │   │       │   ├── repeat.phpt
│   │   │       │   ├── report-useless-tests-incomplete.phpt
│   │   │       │   ├── report-useless-tests-isolation.phpt
│   │   │       │   ├── report-useless-tests.phpt
│   │   │       │   ├── stop-on-warning-via-cli.phpt
│   │   │       │   ├── stop-on-warning-via-config.phpt
│   │   │       │   ├── tap.phpt
│   │   │       │   ├── teamcity.phpt
│   │   │       │   ├── test-suffix-multiple.phpt
│   │   │       │   ├── test-suffix-single.phpt
│   │   │       │   ├── testdox-exclude-group.phpt
│   │   │       │   ├── testdox-group.phpt
│   │   │       │   ├── testdox-html.phpt
│   │   │       │   ├── testdox-text.phpt
│   │   │       │   ├── testdox-xml.phpt
│   │   │       │   └── testdox.phpt
│   │   │       ├── Util
│   │   │       │   ├── ConfigurationTest.php
│   │   │       │   ├── GetoptTest.php
│   │   │       │   ├── GlobalStateTest.php
│   │   │       │   ├── PHPTest.php
│   │   │       │   ├── RegexTest.php
│   │   │       │   ├── TestDox
│   │   │       │   │   └── NamePrettifierTest.php
│   │   │       │   ├── TestTest.php
│   │   │       │   └── XMLTest.php
│   │   │       ├── _files
│   │   │       │   ├── AbstractTest.php
│   │   │       │   ├── AssertionExample.php
│   │   │       │   ├── AssertionExampleTest.php
│   │   │       │   ├── Author.php
│   │   │       │   ├── BankAccount.php
│   │   │       │   ├── BankAccountTest.php
│   │   │       │   ├── BankAccountTest.test.php
│   │   │       │   ├── BankAccountTest2.php
│   │   │       │   ├── BaseTestListenerSample.php
│   │   │       │   ├── BeforeAndAfterTest.php
│   │   │       │   ├── BeforeClassAndAfterClassTest.php
│   │   │       │   ├── BeforeClassWithOnlyDataProviderTest.php
│   │   │       │   ├── Book.php
│   │   │       │   ├── Calculator.php
│   │   │       │   ├── ChangeCurrentWorkingDirectoryTest.php
│   │   │       │   ├── ClassWithNonPublicAttributes.php
│   │   │       │   ├── ClassWithScalarTypeDeclarations.php
│   │   │       │   ├── ClassWithToString.php
│   │   │       │   ├── ClonedDependencyTest.php
│   │   │       │   ├── ConcreteTest.my.php
│   │   │       │   ├── ConcreteTest.php
│   │   │       │   ├── CoverageClassExtendedTest.php
│   │   │       │   ├── CoverageClassTest.php
│   │   │       │   ├── CoverageFunctionParenthesesTest.php
│   │   │       │   ├── CoverageFunctionParenthesesWhitespaceTest.php
│   │   │       │   ├── CoverageFunctionTest.php
│   │   │       │   ├── CoverageMethodOneLineAnnotationTest.php
│   │   │       │   ├── CoverageMethodParenthesesTest.php
│   │   │       │   ├── CoverageMethodParenthesesWhitespaceTest.php
│   │   │       │   ├── CoverageMethodTest.php
│   │   │       │   ├── CoverageNamespacedFunctionTest.php
│   │   │       │   ├── CoverageNoneTest.php
│   │   │       │   ├── CoverageNotPrivateTest.php
│   │   │       │   ├── CoverageNotProtectedTest.php
│   │   │       │   ├── CoverageNotPublicTest.php
│   │   │       │   ├── CoverageNothingTest.php
│   │   │       │   ├── CoveragePrivateTest.php
│   │   │       │   ├── CoverageProtectedTest.php
│   │   │       │   ├── CoveragePublicTest.php
│   │   │       │   ├── CoverageTwoDefaultClassAnnotations.php
│   │   │       │   ├── CoveredClass.php
│   │   │       │   ├── CoveredFunction.php
│   │   │       │   ├── CustomPrinter.php
│   │   │       │   ├── DataProviderDebugTest.php
│   │   │       │   ├── DataProviderDependencyTest.php
│   │   │       │   ├── DataProviderFilterTest.php
│   │   │       │   ├── DataProviderIncompleteTest.php
│   │   │       │   ├── DataProviderSkippedTest.php
│   │   │       │   ├── DataProviderTest.php
│   │   │       │   ├── DataProviderTestDoxTest.php
│   │   │       │   ├── DependencyFailureTest.php
│   │   │       │   ├── DependencySuccessTest.php
│   │   │       │   ├── DependencyTestSuite.php
│   │   │       │   ├── DoubleTestCase.php
│   │   │       │   ├── DummyException.php
│   │   │       │   ├── EmptyTestCaseTest.php
│   │   │       │   ├── ExceptionInAssertPostConditionsTest.php
│   │   │       │   ├── ExceptionInAssertPreConditionsTest.php
│   │   │       │   ├── ExceptionInSetUpTest.php
│   │   │       │   ├── ExceptionInTearDownTest.php
│   │   │       │   ├── ExceptionInTest.php
│   │   │       │   ├── ExceptionNamespaceTest.php
│   │   │       │   ├── ExceptionStackTest.php
│   │   │       │   ├── ExceptionTest.php
│   │   │       │   ├── Failure.php
│   │   │       │   ├── FailureTest.php
│   │   │       │   ├── FatalTest.php
│   │   │       │   ├── IgnoreCodeCoverageClass.php
│   │   │       │   ├── IgnoreCodeCoverageClassTest.php
│   │   │       │   ├── IncompleteTest.php
│   │   │       │   ├── Inheritance
│   │   │       │   │   ├── InheritanceA.php
│   │   │       │   │   └── InheritanceB.php
│   │   │       │   ├── InheritedTestCase.php
│   │   │       │   ├── IniTest.php
│   │   │       │   ├── IsolationTest.php
│   │   │       │   ├── JsonData
│   │   │       │   │   ├── arrayObject.json
│   │   │       │   │   └── simpleObject.json
│   │   │       │   ├── MockRunner.php
│   │   │       │   ├── Mockable.php
│   │   │       │   ├── MultiDependencyTest.php
│   │   │       │   ├── MultipleDataProviderTest.php
│   │   │       │   ├── NamespaceCoverageClassExtendedTest.php
│   │   │       │   ├── NamespaceCoverageClassTest.php
│   │   │       │   ├── NamespaceCoverageCoversClassPublicTest.php
│   │   │       │   ├── NamespaceCoverageCoversClassTest.php
│   │   │       │   ├── NamespaceCoverageMethodTest.php
│   │   │       │   ├── NamespaceCoverageNotPrivateTest.php
│   │   │       │   ├── NamespaceCoverageNotProtectedTest.php
│   │   │       │   ├── NamespaceCoverageNotPublicTest.php
│   │   │       │   ├── NamespaceCoveragePrivateTest.php
│   │   │       │   ├── NamespaceCoverageProtectedTest.php
│   │   │       │   ├── NamespaceCoveragePublicTest.php
│   │   │       │   ├── NamespaceCoveredClass.php
│   │   │       │   ├── NamespaceCoveredFunction.php
│   │   │       │   ├── NoArgTestCaseTest.php
│   │   │       │   ├── NoTestCaseClass.php
│   │   │       │   ├── NoTestCases.php
│   │   │       │   ├── NonStatic.php
│   │   │       │   ├── NotExistingCoveredElementTest.php
│   │   │       │   ├── NotPublicTestCase.php
│   │   │       │   ├── NotVoidTestCase.php
│   │   │       │   ├── NothingTest.php
│   │   │       │   ├── OneTestCase.php
│   │   │       │   ├── OutputTestCase.php
│   │   │       │   ├── OverrideTestCase.php
│   │   │       │   ├── RequirementsClassBeforeClassHookTest.php
│   │   │       │   ├── RequirementsClassDocBlockTest.php
│   │   │       │   ├── RequirementsTest.php
│   │   │       │   ├── SampleArrayAccess.php
│   │   │       │   ├── SampleClass.php
│   │   │       │   ├── Singleton.php
│   │   │       │   ├── StackTest.php
│   │   │       │   ├── StatusTest.php
│   │   │       │   ├── StopOnWarningTestSuite.php
│   │   │       │   ├── StopsOnWarningTest.php
│   │   │       │   ├── Struct.php
│   │   │       │   ├── Success.php
│   │   │       │   ├── TemplateMethodsTest.php
│   │   │       │   ├── TestDoxGroupTest.php
│   │   │       │   ├── TestIncomplete.php
│   │   │       │   ├── TestIterator.php
│   │   │       │   ├── TestIterator2.php
│   │   │       │   ├── TestSkipped.php
│   │   │       │   ├── TestTestError.php
│   │   │       │   ├── TestWithTest.php
│   │   │       │   ├── ThrowExceptionTestCase.php
│   │   │       │   ├── ThrowNoExceptionTestCase.php
│   │   │       │   ├── WasRun.php
│   │   │       │   ├── bar.xml
│   │   │       │   ├── configuration.colors.empty.xml
│   │   │       │   ├── configuration.colors.false.xml
│   │   │       │   ├── configuration.colors.invalid.xml
│   │   │       │   ├── configuration.colors.true.xml
│   │   │       │   ├── configuration.custom-printer.xml
│   │   │       │   ├── configuration.suites.xml
│   │   │       │   ├── configuration.xml
│   │   │       │   ├── configuration_empty.xml
│   │   │       │   ├── configuration_stop_on_warning.xml
│   │   │       │   ├── configuration_xinclude.xml
│   │   │       │   ├── expectedFileFormat.txt
│   │   │       │   ├── foo.xml
│   │   │       │   ├── phpt-for-coverage.phpt
│   │   │       │   ├── phpt-xfail.phpt
│   │   │       │   ├── phpunit-example-extension
│   │   │       │   │   ├── phpunit.xml
│   │   │       │   │   ├── tests
│   │   │       │   │   │   └── OneTest.php
│   │   │       │   │   └── tools
│   │   │       │   │       └── phpunit.d
│   │   │       │   │           └── phpunit-example-extension-1.0.0.phar
│   │   │       │   ├── structureAttributesAreSameButValuesAreNot.xml
│   │   │       │   ├── structureExpected.xml
│   │   │       │   ├── structureIgnoreTextNodes.xml
│   │   │       │   ├── structureIsSameButDataIsNot.xml
│   │   │       │   ├── structureWrongNumberOfAttributes.xml
│   │   │       │   └── structureWrongNumberOfNodes.xml
│   │   │       └── bootstrap.php
│   │   └── phpunit-mock-objects
│   │       ├── CONTRIBUTING.md
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── build
│   │       │   └── travis-ci.xml
│   │       ├── build.xml
│   │       ├── composer.json
│   │       ├── phpunit.xml
│   │       ├── src
│   │       │   └── Framework
│   │       │       └── MockObject
│   │       │           ├── Builder
│   │       │           │   ├── Identity.php
│   │       │           │   ├── InvocationMocker.php
│   │       │           │   ├── Match.php
│   │       │           │   ├── MethodNameMatch.php
│   │       │           │   ├── Namespace.php
│   │       │           │   ├── ParametersMatch.php
│   │       │           │   └── Stub.php
│   │       │           ├── Exception
│   │       │           │   ├── BadMethodCallException.php
│   │       │           │   ├── Exception.php
│   │       │           │   └── RuntimeException.php
│   │       │           ├── Generator
│   │       │           │   ├── deprecation.tpl.dist
│   │       │           │   ├── mocked_class.tpl.dist
│   │       │           │   ├── mocked_class_method.tpl.dist
│   │       │           │   ├── mocked_clone.tpl.dist
│   │       │           │   ├── mocked_method.tpl.dist
│   │       │           │   ├── mocked_method_void.tpl.dist
│   │       │           │   ├── mocked_static_method.tpl.dist
│   │       │           │   ├── proxied_method.tpl.dist
│   │       │           │   ├── proxied_method_void.tpl.dist
│   │       │           │   ├── trait_class.tpl.dist
│   │       │           │   ├── unmocked_clone.tpl.dist
│   │       │           │   ├── wsdl_class.tpl.dist
│   │       │           │   └── wsdl_method.tpl.dist
│   │       │           ├── Generator.php
│   │       │           ├── Invocation
│   │       │           │   ├── Object.php
│   │       │           │   └── Static.php
│   │       │           ├── Invocation.php
│   │       │           ├── InvocationMocker.php
│   │       │           ├── Invokable.php
│   │       │           ├── Matcher
│   │       │           │   ├── AnyInvokedCount.php
│   │       │           │   ├── AnyParameters.php
│   │       │           │   ├── ConsecutiveParameters.php
│   │       │           │   ├── Invocation.php
│   │       │           │   ├── InvokedAtIndex.php
│   │       │           │   ├── InvokedAtLeastCount.php
│   │       │           │   ├── InvokedAtLeastOnce.php
│   │       │           │   ├── InvokedAtMostCount.php
│   │       │           │   ├── InvokedCount.php
│   │       │           │   ├── InvokedRecorder.php
│   │       │           │   ├── MethodName.php
│   │       │           │   ├── Parameters.php
│   │       │           │   └── StatelessInvocation.php
│   │       │           ├── Matcher.php
│   │       │           ├── MockBuilder.php
│   │       │           ├── MockObject.php
│   │       │           ├── Stub
│   │       │           │   ├── ConsecutiveCalls.php
│   │       │           │   ├── Exception.php
│   │       │           │   ├── MatcherCollection.php
│   │       │           │   ├── Return.php
│   │       │           │   ├── ReturnArgument.php
│   │       │           │   ├── ReturnCallback.php
│   │       │           │   ├── ReturnReference.php
│   │       │           │   ├── ReturnSelf.php
│   │       │           │   └── ReturnValueMap.php
│   │       │           ├── Stub.php
│   │       │           └── Verifiable.php
│   │       └── tests
│   │           ├── GeneratorTest.php
│   │           ├── MockBuilderTest.php
│   │           ├── MockObject
│   │           │   ├── Builder
│   │           │   │   └── InvocationMockerTest.php
│   │           │   ├── Generator
│   │           │   │   ├── 232.phpt
│   │           │   │   ├── abstract_class.phpt
│   │           │   │   ├── class.phpt
│   │           │   │   ├── class_call_parent_clone.phpt
│   │           │   │   ├── class_call_parent_constructor.phpt
│   │           │   │   ├── class_dont_call_parent_clone.phpt
│   │           │   │   ├── class_dont_call_parent_constructor.phpt
│   │           │   │   ├── class_implementing_interface_call_parent_constructor.phpt
│   │           │   │   ├── class_implementing_interface_dont_call_parent_constructor.phpt
│   │           │   │   ├── class_partial.phpt
│   │           │   │   ├── class_with_method_named_method.phpt
│   │           │   │   ├── class_with_method_with_variadic_arguments.phpt
│   │           │   │   ├── interface.phpt
│   │           │   │   ├── invocation_object_clone_object.phpt
│   │           │   │   ├── namespaced_class.phpt
│   │           │   │   ├── namespaced_class_call_parent_clone.phpt
│   │           │   │   ├── namespaced_class_call_parent_constructor.phpt
│   │           │   │   ├── namespaced_class_dont_call_parent_clone.phpt
│   │           │   │   ├── namespaced_class_dont_call_parent_constructor.phpt
│   │           │   │   ├── namespaced_class_implementing_interface_call_parent_constructor.phpt
│   │           │   │   ├── namespaced_class_implementing_interface_dont_call_parent_constructor.phpt
│   │           │   │   ├── namespaced_class_partial.phpt
│   │           │   │   ├── namespaced_interface.phpt
│   │           │   │   ├── nonexistent_class.phpt
│   │           │   │   ├── nonexistent_class_with_namespace.phpt
│   │           │   │   ├── nonexistent_class_with_namespace_starting_with_separator.phpt
│   │           │   │   ├── nullable_types.phpt
│   │           │   │   ├── proxy.phpt
│   │           │   │   ├── return_type_declarations_nullable.phpt
│   │           │   │   ├── return_type_declarations_object_method.phpt
│   │           │   │   ├── return_type_declarations_self.phpt
│   │           │   │   ├── return_type_declarations_static_method.phpt
│   │           │   │   ├── return_type_declarations_void.phpt
│   │           │   │   ├── scalar_type_declarations.phpt
│   │           │   │   ├── wsdl_class.phpt
│   │           │   │   ├── wsdl_class_namespace.phpt
│   │           │   │   └── wsdl_class_partial.phpt
│   │           │   ├── Invocation
│   │           │   │   ├── ObjectTest.php
│   │           │   │   └── StaticTest.php
│   │           │   ├── Matcher
│   │           │   │   └── ConsecutiveParametersTest.php
│   │           │   └── class_with_deprecated_method.phpt
│   │           ├── MockObjectTest.php
│   │           ├── ProxyObjectTest.php
│   │           ├── _fixture
│   │           │   ├── AbstractMockTestClass.php
│   │           │   ├── AbstractTrait.php
│   │           │   ├── AnInterface.php
│   │           │   ├── AnInterfaceWithReturnType.php
│   │           │   ├── AnotherInterface.php
│   │           │   ├── Bar.php
│   │           │   ├── ClassThatImplementsSerializable.php
│   │           │   ├── ClassWithSelfTypeHint.php
│   │           │   ├── ClassWithStaticMethod.php
│   │           │   ├── Foo.php
│   │           │   ├── FunctionCallback.php
│   │           │   ├── GoogleSearch.wsdl
│   │           │   ├── InterfaceWithSemiReservedMethodName.php
│   │           │   ├── InterfaceWithStaticMethod.php
│   │           │   ├── MethodCallback.php
│   │           │   ├── MethodCallbackByReference.php
│   │           │   ├── MockTestInterface.php
│   │           │   ├── Mockable.php
│   │           │   ├── PartialMockTestClass.php
│   │           │   ├── SingletonClass.php
│   │           │   ├── SomeClass.php
│   │           │   ├── StaticMockTestClass.php
│   │           │   ├── StringableClass.php
│   │           │   └── TraversableMockTestInterface.php
│   │           └── bootstrap.php
│   ├── psr
│   │   ├── cache
│   │   │   ├── CHANGELOG.md
│   │   │   ├── LICENSE.txt
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   └── src
│   │   │       ├── CacheException.php
│   │   │       ├── CacheItemInterface.php
│   │   │       ├── CacheItemPoolInterface.php
│   │   │       └── InvalidArgumentException.php
│   │   ├── http-message
│   │   │   ├── CHANGELOG.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── composer.json
│   │   │   └── src
│   │   │       ├── MessageInterface.php
│   │   │       ├── RequestInterface.php
│   │   │       ├── ResponseInterface.php
│   │   │       ├── ServerRequestInterface.php
│   │   │       ├── StreamInterface.php
│   │   │       ├── UploadedFileInterface.php
│   │   │       └── UriInterface.php
│   │   └── log
│   │       ├── LICENSE
│   │       ├── Psr
│   │       │   └── Log
│   │       │       ├── AbstractLogger.php
│   │       │       ├── InvalidArgumentException.php
│   │       │       ├── LogLevel.php
│   │       │       ├── LoggerAwareInterface.php
│   │       │       ├── LoggerAwareTrait.php
│   │       │       ├── LoggerInterface.php
│   │       │       ├── LoggerTrait.php
│   │       │       ├── NullLogger.php
│   │       │       └── Test
│   │       │           └── LoggerInterfaceTest.php
│   │       ├── README.md
│   │       └── composer.json
│   ├── sebastian
│   │   ├── code-unit-reverse-lookup
│   │   │   ├── ChangeLog.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── phpunit.xml
│   │   │   ├── src
│   │   │   │   └── Wizard.php
│   │   │   └── tests
│   │   │       └── WizardTest.php
│   │   ├── comparator
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build
│   │   │   │   └── travis-ci.xml
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   ├── ArrayComparator.php
│   │   │   │   ├── Comparator.php
│   │   │   │   ├── ComparisonFailure.php
│   │   │   │   ├── DOMNodeComparator.php
│   │   │   │   ├── DateTimeComparator.php
│   │   │   │   ├── DoubleComparator.php
│   │   │   │   ├── ExceptionComparator.php
│   │   │   │   ├── Factory.php
│   │   │   │   ├── MockObjectComparator.php
│   │   │   │   ├── NumericComparator.php
│   │   │   │   ├── ObjectComparator.php
│   │   │   │   ├── ResourceComparator.php
│   │   │   │   ├── ScalarComparator.php
│   │   │   │   ├── SplObjectStorageComparator.php
│   │   │   │   └── TypeComparator.php
│   │   │   └── tests
│   │   │       ├── ArrayComparatorTest.php
│   │   │       ├── DOMNodeComparatorTest.php
│   │   │       ├── DateTimeComparatorTest.php
│   │   │       ├── DoubleComparatorTest.php
│   │   │       ├── ExceptionComparatorTest.php
│   │   │       ├── FactoryTest.php
│   │   │       ├── MockObjectComparatorTest.php
│   │   │       ├── NumericComparatorTest.php
│   │   │       ├── ObjectComparatorTest.php
│   │   │       ├── ResourceComparatorTest.php
│   │   │       ├── ScalarComparatorTest.php
│   │   │       ├── SplObjectStorageComparatorTest.php
│   │   │       ├── TypeComparatorTest.php
│   │   │       ├── _files
│   │   │       │   ├── Author.php
│   │   │       │   ├── Book.php
│   │   │       │   ├── ClassWithToString.php
│   │   │       │   ├── SampleClass.php
│   │   │       │   ├── Struct.php
│   │   │       │   ├── TestClass.php
│   │   │       │   └── TestClassComparator.php
│   │   │       ├── autoload.php
│   │   │       └── bootstrap.php
│   │   ├── diff
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   ├── Chunk.php
│   │   │   │   ├── Diff.php
│   │   │   │   ├── Differ.php
│   │   │   │   ├── LCS
│   │   │   │   │   ├── LongestCommonSubsequence.php
│   │   │   │   │   ├── MemoryEfficientLongestCommonSubsequenceImplementation.php
│   │   │   │   │   └── TimeEfficientLongestCommonSubsequenceImplementation.php
│   │   │   │   ├── Line.php
│   │   │   │   └── Parser.php
│   │   │   └── tests
│   │   │       ├── DifferTest.php
│   │   │       ├── LCS
│   │   │       │   └── TimeEfficientImplementationTest.php
│   │   │       ├── ParserTest.php
│   │   │       └── fixtures
│   │   │           ├── patch.txt
│   │   │           └── patch2.txt
│   │   ├── environment
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── phpunit.xml
│   │   │   ├── src
│   │   │   │   ├── Console.php
│   │   │   │   └── Runtime.php
│   │   │   └── tests
│   │   │       ├── ConsoleTest.php
│   │   │       └── RuntimeTest.php
│   │   ├── exporter
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   └── Exporter.php
│   │   │   └── tests
│   │   │       └── ExporterTest.php
│   │   ├── finder-facade
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── src
│   │   │   │   ├── Configuration.php
│   │   │   │   └── FinderFacade.php
│   │   │   └── tests
│   │   │       ├── ConfigurationTest.php
│   │   │       ├── FinderFacadeTest.php
│   │   │       └── fixture
│   │   │           ├── bar.phtml
│   │   │           ├── foo
│   │   │           │   ├── bar
│   │   │           │   │   └── baz.php
│   │   │           │   ├── bar.php
│   │   │           │   └── foo.fail.php
│   │   │           └── test.xml
│   │   ├── git
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   └── src
│   │   │       ├── Exception
│   │   │       │   ├── Exception.php
│   │   │       │   └── RuntimeException.php
│   │   │       └── Git.php
│   │   ├── global-state
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   ├── Blacklist.php
│   │   │   │   ├── CodeExporter.php
│   │   │   │   ├── Exception.php
│   │   │   │   ├── Restorer.php
│   │   │   │   ├── RuntimeException.php
│   │   │   │   └── Snapshot.php
│   │   │   └── tests
│   │   │       ├── BlacklistTest.php
│   │   │       ├── SnapshotTest.php
│   │   │       └── _fixture
│   │   │           ├── BlacklistedChildClass.php
│   │   │           ├── BlacklistedClass.php
│   │   │           ├── BlacklistedImplementor.php
│   │   │           ├── BlacklistedInterface.php
│   │   │           ├── SnapshotClass.php
│   │   │           ├── SnapshotDomDocument.php
│   │   │           ├── SnapshotFunctions.php
│   │   │           └── SnapshotTrait.php
│   │   ├── object-enumerator
│   │   │   ├── ChangeLog.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── phpunit.xml
│   │   │   ├── src
│   │   │   │   ├── Enumerator.php
│   │   │   │   ├── Exception.php
│   │   │   │   └── InvalidArgumentException.php
│   │   │   └── tests
│   │   │       └── EnumeratorTest.php
│   │   ├── phpcpd
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build
│   │   │   │   ├── phar-autoload.php.in
│   │   │   │   ├── phar-manifest.php
│   │   │   │   ├── phpunit.xml
│   │   │   │   └── travis-ci.xml
│   │   │   ├── build.xml
│   │   │   ├── composer
│   │   │   │   └── bin
│   │   │   │       └── phpcpd
│   │   │   ├── composer.json
│   │   │   ├── phpcpd
│   │   │   ├── src
│   │   │   │   ├── CLI
│   │   │   │   │   ├── Application.php
│   │   │   │   │   └── Command.php
│   │   │   │   ├── CodeClone.php
│   │   │   │   ├── CodeCloneFile.php
│   │   │   │   ├── CodeCloneMap.php
│   │   │   │   ├── Detector
│   │   │   │   │   ├── Detector.php
│   │   │   │   │   └── Strategy
│   │   │   │   │       ├── Abstract.php
│   │   │   │   │       └── Default.php
│   │   │   │   └── Log
│   │   │   │       ├── AbstractXmlLogger.php
│   │   │   │       ├── PMD.php
│   │   │   │       └── Text.php
│   │   │   └── tests
│   │   │       ├── DetectorTest.php
│   │   │       └── _files
│   │   │           ├── Math.php
│   │   │           ├── a.php
│   │   │           ├── b.php
│   │   │           ├── c.php
│   │   │           ├── d.php
│   │   │           ├── e.php
│   │   │           └── f.php
│   │   ├── recursion-context
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   ├── phpunit.xml.dist
│   │   │   ├── src
│   │   │   │   ├── Context.php
│   │   │   │   ├── Exception.php
│   │   │   │   └── InvalidArgumentException.php
│   │   │   └── tests
│   │   │       └── ContextTest.php
│   │   ├── resource-operations
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── build
│   │   │   │   └── generate.php
│   │   │   ├── build.xml
│   │   │   ├── composer.json
│   │   │   └── src
│   │   │       └── ResourceOperations.php
│   │   └── version
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── composer.json
│   │       └── src
│   │           └── Version.php
│   ├── sensio
│   │   ├── distribution-bundle
│   │   │   ├── Composer
│   │   │   │   └── ScriptHandler.php
│   │   │   ├── DependencyInjection
│   │   │   │   └── SensioDistributionExtension.php
│   │   │   ├── LICENSE
│   │   │   ├── README.rst
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   │   ├── build.sh
│   │   │   │   │   ├── build_bootstrap.php
│   │   │   │   │   └── build_demo.sh
│   │   │   │   ├── config
│   │   │   │   │   └── security.xml
│   │   │   │   └── skeleton
│   │   │   │       ├── app
│   │   │   │       │   ├── SymfonyRequirements.php
│   │   │   │       │   └── check.php
│   │   │   │       └── web
│   │   │   │           └── config.php
│   │   │   ├── SensioDistributionBundle.php
│   │   │   ├── UPGRADE.md
│   │   │   └── composer.json
│   │   ├── framework-extra-bundle
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Configuration
│   │   │   │   ├── Cache.php
│   │   │   │   ├── ConfigurationAnnotation.php
│   │   │   │   ├── ConfigurationInterface.php
│   │   │   │   ├── Method.php
│   │   │   │   ├── ParamConverter.php
│   │   │   │   ├── Route.php
│   │   │   │   ├── Security.php
│   │   │   │   └── Template.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── Compiler
│   │   │   │   │   ├── AddParamConverterPass.php
│   │   │   │   │   └── LegacyPass.php
│   │   │   │   ├── Configuration.php
│   │   │   │   └── SensioFrameworkExtraExtension.php
│   │   │   ├── EventListener
│   │   │   │   ├── CacheListener.php
│   │   │   │   ├── ControllerListener.php
│   │   │   │   ├── HttpCacheListener.php
│   │   │   │   ├── ParamConverterListener.php
│   │   │   │   ├── PsrResponseListener.php
│   │   │   │   ├── SecurityListener.php
│   │   │   │   └── TemplateListener.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── Request
│   │   │   │   └── ParamConverter
│   │   │   │       ├── DateTimeParamConverter.php
│   │   │   │       ├── DoctrineParamConverter.php
│   │   │   │       ├── ParamConverterInterface.php
│   │   │   │       ├── ParamConverterManager.php
│   │   │   │       └── PsrServerRequestParamConverter.php
│   │   │   ├── Resources
│   │   │   │   ├── config
│   │   │   │   │   ├── annotations.xml
│   │   │   │   │   ├── cache.xml
│   │   │   │   │   ├── converters.xml
│   │   │   │   │   ├── psr7.xml
│   │   │   │   │   ├── routing.xml
│   │   │   │   │   ├── security.xml
│   │   │   │   │   ├── services.xml
│   │   │   │   │   └── view.xml
│   │   │   │   └── doc
│   │   │   │       ├── annotations
│   │   │   │       │   ├── cache.rst
│   │   │   │       │   ├── converters.rst
│   │   │   │       │   ├── routing.rst
│   │   │   │       │   ├── security.rst
│   │   │   │       │   └── view.rst
│   │   │   │       └── index.rst
│   │   │   ├── Routing
│   │   │   │   └── AnnotatedRouteControllerLoader.php
│   │   │   ├── Security
│   │   │   │   └── ExpressionLanguage.php
│   │   │   ├── SensioFrameworkExtraBundle.php
│   │   │   ├── Templating
│   │   │   │   └── TemplateGuesser.php
│   │   │   ├── Tests
│   │   │   │   ├── Configuration
│   │   │   │   │   ├── ConfigurationAnnotationTest.php
│   │   │   │   │   └── RouteTest.php
│   │   │   │   ├── DependencyInjection
│   │   │   │   │   └── SensioFrameworkExtraExtensionTest.php
│   │   │   │   ├── EventListener
│   │   │   │   │   ├── ControllerListenerTest.php
│   │   │   │   │   ├── Fixture
│   │   │   │   │   │   ├── FooControllerCacheAtClass.php
│   │   │   │   │   │   ├── FooControllerCacheAtClassAndMethod.php
│   │   │   │   │   │   ├── FooControllerCacheAtMethod.php
│   │   │   │   │   │   ├── FooControllerMultipleCacheAtClass.php
│   │   │   │   │   │   ├── FooControllerMultipleCacheAtMethod.php
│   │   │   │   │   │   ├── FooControllerNullableParameter.php
│   │   │   │   │   │   └── FooControllerParamConverterAtClassAndMethod.php
│   │   │   │   │   ├── HttpCacheListenerTest.php
│   │   │   │   │   ├── ParamConverterListenerTest.php
│   │   │   │   │   ├── PsrResponseListenerTest.php
│   │   │   │   │   └── SecurityListenerTest.php
│   │   │   │   ├── Fixtures
│   │   │   │   │   ├── ActionArgumentsBundle
│   │   │   │   │   │   └── Controller
│   │   │   │   │   │       └── NullableArgumentsController.php
│   │   │   │   │   ├── FooBundle
│   │   │   │   │   │   ├── Controller
│   │   │   │   │   │   │   ├── InvokableClassLevelController.php
│   │   │   │   │   │   │   ├── InvokableContainerController.php
│   │   │   │   │   │   │   ├── InvokableController.php
│   │   │   │   │   │   │   ├── MultipleActionsClassLevelTemplateController.php
│   │   │   │   │   │   │   └── SimpleController.php
│   │   │   │   │   │   ├── FooBundle.php
│   │   │   │   │   │   └── Resources
│   │   │   │   │   │       └── views
│   │   │   │   │   │           ├── Invokable
│   │   │   │   │   │           │   └── predefined.html.twig
│   │   │   │   │   │           ├── InvokableContainer
│   │   │   │   │   │           │   ├── another_variable.html.twig
│   │   │   │   │   │           │   └── variable.html.twig
│   │   │   │   │   │           ├── Simple
│   │   │   │   │   │           │   ├── another.html.twig
│   │   │   │   │   │           │   ├── some.html.twig
│   │   │   │   │   │           │   └── streamed.html.twig
│   │   │   │   │   │           └── overwritten.html.twig
│   │   │   │   │   ├── TestKernel.php
│   │   │   │   │   ├── cache
│   │   │   │   │   └── config
│   │   │   │   │       ├── config.yml
│   │   │   │   │       └── routing.yml
│   │   │   │   ├── Functional
│   │   │   │   │   ├── NullableAnnotationTest.php
│   │   │   │   │   └── TemplateAnnotationTest.php
│   │   │   │   ├── Request
│   │   │   │   │   └── ParamConverter
│   │   │   │   │       ├── DateTimeParamConverterTest.php
│   │   │   │   │       ├── DoctrineParamConverterTest.php
│   │   │   │   │       ├── ParamConverterManagerTest.php
│   │   │   │   │       ├── PsrServerRequestParamConverterTest.php
│   │   │   │   │       └── TestUserRepository.php
│   │   │   │   ├── Routing
│   │   │   │   │   ├── AnnotatedRouteControllerLoaderTest.php
│   │   │   │   │   └── Fixtures
│   │   │   │   │       └── FoobarController.php
│   │   │   │   └── Templating
│   │   │   │       ├── Fixture
│   │   │   │       │   ├── BarBundle
│   │   │   │       │   │   └── Controller
│   │   │   │       │   │       └── BarController.php
│   │   │   │       │   ├── Controller
│   │   │   │       │   │   └── OutOfBundleController.php
│   │   │   │       │   ├── FooBarBundle
│   │   │   │       │   │   └── Controller
│   │   │   │       │   │       └── FooBarController.php
│   │   │   │       │   └── FooBundle
│   │   │   │       │       ├── Action
│   │   │   │       │       │   └── FooAction.php
│   │   │   │       │       └── Controller
│   │   │   │       │           └── FooController.php
│   │   │   │       └── TemplateGuesserTest.php
│   │   │   ├── UPGRADE.md
│   │   │   ├── composer.json
│   │   │   └── phpunit.xml.dist
│   │   └── generator-bundle
│   │       ├── Command
│   │       │   ├── AutoComplete
│   │       │   │   └── EntitiesAutoCompleter.php
│   │       │   ├── GenerateBundleCommand.php
│   │       │   ├── GenerateCommandCommand.php
│   │       │   ├── GenerateControllerCommand.php
│   │       │   ├── GenerateDoctrineCommand.php
│   │       │   ├── GenerateDoctrineCrudCommand.php
│   │       │   ├── GenerateDoctrineEntityCommand.php
│   │       │   ├── GenerateDoctrineFormCommand.php
│   │       │   ├── GeneratorCommand.php
│   │       │   ├── Helper
│   │       │   │   └── QuestionHelper.php
│   │       │   └── Validators.php
│   │       ├── Generator
│   │       │   ├── BundleGenerator.php
│   │       │   ├── CommandGenerator.php
│   │       │   ├── ControllerGenerator.php
│   │       │   ├── DoctrineCrudGenerator.php
│   │       │   ├── DoctrineEntityGenerator.php
│   │       │   ├── DoctrineFormGenerator.php
│   │       │   └── Generator.php
│   │       ├── LICENSE
│   │       ├── Manipulator
│   │       │   ├── ConfigurationManipulator.php
│   │       │   ├── KernelManipulator.php
│   │       │   ├── Manipulator.php
│   │       │   └── RoutingManipulator.php
│   │       ├── Model
│   │       │   ├── Bundle.php
│   │       │   └── EntityGeneratorResult.php
│   │       ├── README.md
│   │       ├── Resources
│   │       │   ├── doc
│   │       │   │   ├── commands
│   │       │   │   │   ├── generate_bundle.rst
│   │       │   │   │   ├── generate_command.rst
│   │       │   │   │   ├── generate_controller.rst
│   │       │   │   │   ├── generate_doctrine_crud.rst
│   │       │   │   │   ├── generate_doctrine_entity.rst
│   │       │   │   │   └── generate_doctrine_form.rst
│   │       │   │   └── index.rst
│   │       │   └── skeleton
│   │       │       ├── bundle
│   │       │       │   ├── Bundle.php.twig
│   │       │       │   ├── Configuration.php.twig
│   │       │       │   ├── DefaultController.php.twig
│   │       │       │   ├── DefaultControllerTest.php.twig
│   │       │       │   ├── Extension.php.twig
│   │       │       │   ├── index.html.twig.twig
│   │       │       │   ├── routing.php.twig
│   │       │       │   ├── routing.xml.twig
│   │       │       │   ├── routing.yml.twig
│   │       │       │   ├── services.php.twig
│   │       │       │   ├── services.xml.twig
│   │       │       │   └── services.yml.twig
│   │       │       ├── command
│   │       │       │   └── Command.php.twig
│   │       │       ├── controller
│   │       │       │   ├── Controller.php.twig
│   │       │       │   ├── ControllerTest.php.twig
│   │       │       │   ├── Template.html.php.twig
│   │       │       │   └── Template.html.twig.twig
│   │       │       ├── crud
│   │       │       │   ├── actions
│   │       │       │   │   ├── delete.php.twig
│   │       │       │   │   ├── edit.php.twig
│   │       │       │   │   ├── index.php.twig
│   │       │       │   │   ├── new.php.twig
│   │       │       │   │   └── show.php.twig
│   │       │       │   ├── config
│   │       │       │   │   ├── routing.php.twig
│   │       │       │   │   ├── routing.xml.twig
│   │       │       │   │   └── routing.yml.twig
│   │       │       │   ├── controller.php.twig
│   │       │       │   ├── tests
│   │       │       │   │   ├── others
│   │       │       │   │   │   ├── full_scenario.php.twig
│   │       │       │   │   │   └── short_scenario.php.twig
│   │       │       │   │   └── test.php.twig
│   │       │       │   └── views
│   │       │       │       ├── edit.html.twig.twig
│   │       │       │       ├── index.html.twig.twig
│   │       │       │       ├── new.html.twig.twig
│   │       │       │       ├── others
│   │       │       │       │   └── record_actions.html.twig.twig
│   │       │       │       └── show.html.twig.twig
│   │       │       └── form
│   │       │           └── FormType.php.twig
│   │       ├── SensioGeneratorBundle.php
│   │       ├── Tests
│   │       │   ├── Command
│   │       │   │   ├── AutoComplete
│   │       │   │   │   └── EntitiesAutoCompleterTest.php
│   │       │   │   ├── GenerateBundleCommandTest.php
│   │       │   │   ├── GenerateCommandCommandTest.php
│   │       │   │   ├── GenerateCommandTest.php
│   │       │   │   ├── GenerateControllerCommandTest.php
│   │       │   │   ├── GenerateDoctrineCrudCommandTest.php
│   │       │   │   └── GenerateDoctrineEntityCommandTest.php
│   │       │   ├── Generator
│   │       │   │   ├── BundleGeneratorTest.php
│   │       │   │   ├── CommandGeneratorTest.php
│   │       │   │   ├── ControllerGeneratorTest.php
│   │       │   │   ├── DoctrineCrudGeneratorTest.php
│   │       │   │   ├── DoctrineEntityGeneratorTest.php
│   │       │   │   ├── DoctrineFormGeneratorTest.php
│   │       │   │   └── GeneratorTest.php
│   │       │   └── Manipulator
│   │       │       ├── ConfigurationManipulatorTest.php
│   │       │       ├── KernelManipulatorTest.php
│   │       │       ├── RoutingManipulatorTest.php
│   │       │       └── Stubs
│   │       │           ├── ContainsBundlesKernelStub.php
│   │       │           ├── ContainsBundlesShortArraySyntaxKernelStub.php
│   │       │           ├── ContainsCommaKernelStub.php
│   │       │           ├── ContainsCommaShortArraySyntaxKernelStub.php
│   │       │           ├── ContainsExtraCodeKernelStub.php
│   │       │           ├── ContainsExtraCodeShortArraySyntaxKernelStub.php
│   │       │           ├── EmptyBundlesKernelStub.php
│   │       │           ├── EmptyBundlesMultilineKernelStub.php
│   │       │           ├── EmptyBundlesMultilineShortArraySyntaxKernelStub.php
│   │       │           ├── EmptyBundlesShortArraySyntaxKernelStub.php
│   │       │           ├── StubBundle.php
│   │       │           └── UsingShortArraySyntaxKernelStub.php
│   │       ├── composer.json
│   │       └── phpunit.xml.dist
│   ├── sensiolabs
│   │   └── security-checker
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── SensioLabs
│   │       │   └── Security
│   │       │       ├── Command
│   │       │       │   └── SecurityCheckerCommand.php
│   │       │       ├── Crawler
│   │       │       │   ├── BaseCrawler.php
│   │       │       │   ├── CrawlerInterface.php
│   │       │       │   ├── CurlCrawler.php
│   │       │       │   ├── DefaultCrawler.php
│   │       │       │   └── FileGetContentsCrawler.php
│   │       │       ├── Exception
│   │       │       │   ├── ExceptionInterface.php
│   │       │       │   └── RuntimeException.php
│   │       │       ├── Formatters
│   │       │       │   ├── FormatterInterface.php
│   │       │       │   ├── JsonFormatter.php
│   │       │       │   ├── SimpleFormatter.php
│   │       │       │   └── TextFormatter.php
│   │       │       ├── Resources
│   │       │       │   └── security.sensiolabs.org.crt
│   │       │       └── SecurityChecker.php
│   │       ├── box.json
│   │       ├── composer.json
│   │       └── security-checker
│   ├── squizlabs
│   │   └── php_codesniffer
│   │       ├── CONTRIBUTING.md
│   │       ├── CodeSniffer
│   │       │   ├── CLI.php
│   │       │   ├── DocGenerators
│   │       │   │   ├── Generator.php
│   │       │   │   ├── HTML.php
│   │       │   │   ├── Markdown.php
│   │       │   │   └── Text.php
│   │       │   ├── Exception.php
│   │       │   ├── File.php
│   │       │   ├── Fixer.php
│   │       │   ├── Report.php
│   │       │   ├── Reporting.php
│   │       │   ├── Reports
│   │       │   │   ├── Cbf.php
│   │       │   │   ├── Checkstyle.php
│   │       │   │   ├── Csv.php
│   │       │   │   ├── Diff.php
│   │       │   │   ├── Emacs.php
│   │       │   │   ├── Full.php
│   │       │   │   ├── Gitblame.php
│   │       │   │   ├── Hgblame.php
│   │       │   │   ├── Info.php
│   │       │   │   ├── Json.php
│   │       │   │   ├── Junit.php
│   │       │   │   ├── Notifysend.php
│   │       │   │   ├── Source.php
│   │       │   │   ├── Summary.php
│   │       │   │   ├── Svnblame.php
│   │       │   │   ├── VersionControl.php
│   │       │   │   └── Xml.php
│   │       │   ├── Sniff.php
│   │       │   ├── Standards
│   │       │   │   ├── AbstractPatternSniff.php
│   │       │   │   ├── AbstractScopeSniff.php
│   │       │   │   ├── AbstractVariableSniff.php
│   │       │   │   ├── Generic
│   │       │   │   │   ├── Docs
│   │       │   │   │   │   ├── Classes
│   │       │   │   │   │   │   ├── DuplicateClassNameStandard.xml
│   │       │   │   │   │   │   └── OpeningBraceSameLineStandard.xml
│   │       │   │   │   │   ├── CodeAnalysis
│   │       │   │   │   │   │   ├── EmptyStatementStandard.xml
│   │       │   │   │   │   │   ├── ForLoopShouldBeWhileLoopStandard.xml
│   │       │   │   │   │   │   ├── ForLoopWithTestFunctionCallStandard.xml
│   │       │   │   │   │   │   ├── JumbledIncrementerStandard.xml
│   │       │   │   │   │   │   ├── UnconditionalIfStatementStandard.xml
│   │       │   │   │   │   │   ├── UnnecessaryFinalModifierStandard.xml
│   │       │   │   │   │   │   ├── UnusedFunctionParameterStandard.xml
│   │       │   │   │   │   │   └── UselessOverridingMethodStandard.xml
│   │       │   │   │   │   ├── Commenting
│   │       │   │   │   │   │   ├── FixmeStandard.xml
│   │       │   │   │   │   │   └── TodoStandard.xml
│   │       │   │   │   │   ├── ControlStructures
│   │       │   │   │   │   │   └── InlineControlStructureStandard.xml
│   │       │   │   │   │   ├── Debug
│   │       │   │   │   │   │   ├── CSSLintStandard.xml
│   │       │   │   │   │   │   ├── ClosureLinterStandard.xml
│   │       │   │   │   │   │   └── JSHintStandard.xml
│   │       │   │   │   │   ├── Files
│   │       │   │   │   │   │   ├── ByteOrderMarkStandard.xml
│   │       │   │   │   │   │   ├── EndFileNewlineStandard.xml
│   │       │   │   │   │   │   ├── EndFileNoNewlineStandard.xml
│   │       │   │   │   │   │   ├── InlineHTMLStandard.xml
│   │       │   │   │   │   │   ├── LineEndingsStandard.xml
│   │       │   │   │   │   │   ├── LineLengthStandard.xml
│   │       │   │   │   │   │   ├── LowercasedFilenameStandard.xml
│   │       │   │   │   │   │   ├── OneClassPerFileStandard.xml
│   │       │   │   │   │   │   └── OneInterfacePerFileStandard.xml
│   │       │   │   │   │   ├── Formatting
│   │       │   │   │   │   │   ├── DisallowMultipleStatementsStandard.xml
│   │       │   │   │   │   │   ├── MultipleStatementAlignmentStandard.xml
│   │       │   │   │   │   │   ├── NoSpaceAfterCastStandard.xml
│   │       │   │   │   │   │   └── SpaceAfterCastStandard.xml
│   │       │   │   │   │   ├── Functions
│   │       │   │   │   │   │   ├── CallTimePassByReferenceStandard.xml
│   │       │   │   │   │   │   ├── FunctionCallArgumentSpacingStandard.xml
│   │       │   │   │   │   │   ├── OpeningFunctionBraceBsdAllmanStandard.xml
│   │       │   │   │   │   │   └── OpeningFunctionBraceKernighanRitchieStandard.xml
│   │       │   │   │   │   ├── Metrics
│   │       │   │   │   │   │   ├── CyclomaticComplexityStandard.xml
│   │       │   │   │   │   │   └── NestingLevelStandard.xml
│   │       │   │   │   │   ├── NamingConventions
│   │       │   │   │   │   │   ├── CamelCapsFunctionNameStandard.xml
│   │       │   │   │   │   │   ├── ConstructorNameStandard.xml
│   │       │   │   │   │   │   └── UpperCaseConstantNameStandard.xml
│   │       │   │   │   │   ├── PHP
│   │       │   │   │   │   │   ├── BacktickOperatorStandard.xml
│   │       │   │   │   │   │   ├── CharacterBeforePHPOpeningTagStandard.xml
│   │       │   │   │   │   │   ├── ClosingPHPTagStandard.xml
│   │       │   │   │   │   │   ├── DeprecatedFunctionsStandard.xml
│   │       │   │   │   │   │   ├── DisallowAlternativePHPTagsStandard.xml
│   │       │   │   │   │   │   ├── DisallowShortOpenTagStandard.xml
│   │       │   │   │   │   │   ├── ForbiddenFunctionsStandard.xml
│   │       │   │   │   │   │   ├── LowerCaseConstantStandard.xml
│   │       │   │   │   │   │   ├── LowerCaseKeywordStandard.xml
│   │       │   │   │   │   │   ├── NoSilencedErrorsStandard.xml
│   │       │   │   │   │   │   ├── SAPIUsageStandard.xml
│   │       │   │   │   │   │   └── UpperCaseConstantStandard.xml
│   │       │   │   │   │   ├── Strings
│   │       │   │   │   │   │   └── UnnecessaryStringConcatStandard.xml
│   │       │   │   │   │   ├── VersionControl
│   │       │   │   │   │   │   └── SubversionPropertiesStandard.xml
│   │       │   │   │   │   └── WhiteSpace
│   │       │   │   │   │       ├── DisallowSpaceIndentStandard.xml
│   │       │   │   │   │       ├── DisallowTabIndentStandard.xml
│   │       │   │   │   │       └── ScopeIndentStandard.xml
│   │       │   │   │   ├── Sniffs
│   │       │   │   │   │   ├── Arrays
│   │       │   │   │   │   │   ├── DisallowLongArraySyntaxSniff.php
│   │       │   │   │   │   │   └── DisallowShortArraySyntaxSniff.php
│   │       │   │   │   │   ├── Classes
│   │       │   │   │   │   │   ├── DuplicateClassNameSniff.php
│   │       │   │   │   │   │   └── OpeningBraceSameLineSniff.php
│   │       │   │   │   │   ├── CodeAnalysis
│   │       │   │   │   │   │   ├── EmptyStatementSniff.php
│   │       │   │   │   │   │   ├── ForLoopShouldBeWhileLoopSniff.php
│   │       │   │   │   │   │   ├── ForLoopWithTestFunctionCallSniff.php
│   │       │   │   │   │   │   ├── JumbledIncrementerSniff.php
│   │       │   │   │   │   │   ├── UnconditionalIfStatementSniff.php
│   │       │   │   │   │   │   ├── UnnecessaryFinalModifierSniff.php
│   │       │   │   │   │   │   ├── UnusedFunctionParameterSniff.php
│   │       │   │   │   │   │   └── UselessOverridingMethodSniff.php
│   │       │   │   │   │   ├── Commenting
│   │       │   │   │   │   │   ├── DocCommentSniff.php
│   │       │   │   │   │   │   ├── FixmeSniff.php
│   │       │   │   │   │   │   └── TodoSniff.php
│   │       │   │   │   │   ├── ControlStructures
│   │       │   │   │   │   │   └── InlineControlStructureSniff.php
│   │       │   │   │   │   ├── Debug
│   │       │   │   │   │   │   ├── CSSLintSniff.php
│   │       │   │   │   │   │   ├── ClosureLinterSniff.php
│   │       │   │   │   │   │   └── JSHintSniff.php
│   │       │   │   │   │   ├── Files
│   │       │   │   │   │   │   ├── ByteOrderMarkSniff.php
│   │       │   │   │   │   │   ├── EndFileNewlineSniff.php
│   │       │   │   │   │   │   ├── EndFileNoNewlineSniff.php
│   │       │   │   │   │   │   ├── InlineHTMLSniff.php
│   │       │   │   │   │   │   ├── LineEndingsSniff.php
│   │       │   │   │   │   │   ├── LineLengthSniff.php
│   │       │   │   │   │   │   ├── LowercasedFilenameSniff.php
│   │       │   │   │   │   │   ├── OneClassPerFileSniff.php
│   │       │   │   │   │   │   ├── OneInterfacePerFileSniff.php
│   │       │   │   │   │   │   └── OneTraitPerFileSniff.php
│   │       │   │   │   │   ├── Formatting
│   │       │   │   │   │   │   ├── DisallowMultipleStatementsSniff.php
│   │       │   │   │   │   │   ├── MultipleStatementAlignmentSniff.php
│   │       │   │   │   │   │   ├── NoSpaceAfterCastSniff.php
│   │       │   │   │   │   │   ├── SpaceAfterCastSniff.php
│   │       │   │   │   │   │   └── SpaceAfterNotSniff.php
│   │       │   │   │   │   ├── Functions
│   │       │   │   │   │   │   ├── CallTimePassByReferenceSniff.php
│   │       │   │   │   │   │   ├── FunctionCallArgumentSpacingSniff.php
│   │       │   │   │   │   │   ├── OpeningFunctionBraceBsdAllmanSniff.php
│   │       │   │   │   │   │   └── OpeningFunctionBraceKernighanRitchieSniff.php
│   │       │   │   │   │   ├── Metrics
│   │       │   │   │   │   │   ├── CyclomaticComplexitySniff.php
│   │       │   │   │   │   │   └── NestingLevelSniff.php
│   │       │   │   │   │   ├── NamingConventions
│   │       │   │   │   │   │   ├── CamelCapsFunctionNameSniff.php
│   │       │   │   │   │   │   ├── ConstructorNameSniff.php
│   │       │   │   │   │   │   └── UpperCaseConstantNameSniff.php
│   │       │   │   │   │   ├── PHP
│   │       │   │   │   │   │   ├── BacktickOperatorSniff.php
│   │       │   │   │   │   │   ├── CharacterBeforePHPOpeningTagSniff.php
│   │       │   │   │   │   │   ├── ClosingPHPTagSniff.php
│   │       │   │   │   │   │   ├── DeprecatedFunctionsSniff.php
│   │       │   │   │   │   │   ├── DisallowAlternativePHPTagsSniff.php
│   │       │   │   │   │   │   ├── DisallowShortOpenTagSniff.php
│   │       │   │   │   │   │   ├── ForbiddenFunctionsSniff.php
│   │       │   │   │   │   │   ├── LowerCaseConstantSniff.php
│   │       │   │   │   │   │   ├── LowerCaseKeywordSniff.php
│   │       │   │   │   │   │   ├── NoSilencedErrorsSniff.php
│   │       │   │   │   │   │   ├── SAPIUsageSniff.php
│   │       │   │   │   │   │   ├── SyntaxSniff.php
│   │       │   │   │   │   │   └── UpperCaseConstantSniff.php
│   │       │   │   │   │   ├── Strings
│   │       │   │   │   │   │   └── UnnecessaryStringConcatSniff.php
│   │       │   │   │   │   ├── VersionControl
│   │       │   │   │   │   │   └── SubversionPropertiesSniff.php
│   │       │   │   │   │   └── WhiteSpace
│   │       │   │   │   │       ├── DisallowSpaceIndentSniff.php
│   │       │   │   │   │       ├── DisallowTabIndentSniff.php
│   │       │   │   │   │       └── ScopeIndentSniff.php
│   │       │   │   │   └── ruleset.xml
│   │       │   │   ├── IncorrectPatternException.php
│   │       │   │   ├── MySource
│   │       │   │   │   ├── Sniffs
│   │       │   │   │   │   ├── CSS
│   │       │   │   │   │   │   └── BrowserSpecificStylesSniff.php
│   │       │   │   │   │   ├── Channels
│   │       │   │   │   │   │   ├── DisallowSelfActionsSniff.php
│   │       │   │   │   │   │   ├── IncludeOwnSystemSniff.php
│   │       │   │   │   │   │   ├── IncludeSystemSniff.php
│   │       │   │   │   │   │   └── UnusedSystemSniff.php
│   │       │   │   │   │   ├── Commenting
│   │       │   │   │   │   │   └── FunctionCommentSniff.php
│   │       │   │   │   │   ├── Debug
│   │       │   │   │   │   │   ├── DebugCodeSniff.php
│   │       │   │   │   │   │   └── FirebugConsoleSniff.php
│   │       │   │   │   │   ├── Objects
│   │       │   │   │   │   │   ├── AssignThisSniff.php
│   │       │   │   │   │   │   ├── CreateWidgetTypeCallbackSniff.php
│   │       │   │   │   │   │   └── DisallowNewWidgetSniff.php
│   │       │   │   │   │   ├── PHP
│   │       │   │   │   │   │   ├── AjaxNullComparisonSniff.php
│   │       │   │   │   │   │   ├── EvalObjectFactorySniff.php
│   │       │   │   │   │   │   ├── GetRequestDataSniff.php
│   │       │   │   │   │   │   └── ReturnFunctionValueSniff.php
│   │       │   │   │   │   └── Strings
│   │       │   │   │   │       └── JoinStringsSniff.php
│   │       │   │   │   └── ruleset.xml
│   │       │   │   ├── PEAR
│   │       │   │   │   ├── Docs
│   │       │   │   │   │   ├── Classes
│   │       │   │   │   │   │   └── ClassDeclarationStandard.xml
│   │       │   │   │   │   ├── Commenting
│   │       │   │   │   │   │   ├── ClassCommentStandard.xml
│   │       │   │   │   │   │   ├── FileCommentStandard.xml
│   │       │   │   │   │   │   ├── FunctionCommentStandard.xml
│   │       │   │   │   │   │   └── InlineCommentStandard.xml
│   │       │   │   │   │   ├── ControlStructures
│   │       │   │   │   │   │   ├── ControlSignatureStandard.xml
│   │       │   │   │   │   │   └── MultiLineConditionStandard.xml
│   │       │   │   │   │   ├── Files
│   │       │   │   │   │   │   ├── IncludingFileStandard.xml
│   │       │   │   │   │   │   └── LineLengthStandard.xml
│   │       │   │   │   │   ├── Formatting
│   │       │   │   │   │   │   └── MultiLineAssignmentStandard.xml
│   │       │   │   │   │   ├── Functions
│   │       │   │   │   │   │   ├── FunctionCallSignatureStandard.xml
│   │       │   │   │   │   │   ├── FunctionDeclarationStandard.xml
│   │       │   │   │   │   │   └── ValidDefaultValueStandard.xml
│   │       │   │   │   │   ├── NamingConventions
│   │       │   │   │   │   │   ├── ValidClassNameStandard.xml
│   │       │   │   │   │   │   ├── ValidFunctionNameStandard.xml
│   │       │   │   │   │   │   └── ValidVariableNameStandard.xml
│   │       │   │   │   │   └── WhiteSpace
│   │       │   │   │   │       ├── ObjectOperatorIndentStandard.xml
│   │       │   │   │   │       ├── ScopeClosingBraceStandard.xml
│   │       │   │   │   │       └── ScopeIndentStandard.xml
│   │       │   │   │   ├── Sniffs
│   │       │   │   │   │   ├── Classes
│   │       │   │   │   │   │   └── ClassDeclarationSniff.php
│   │       │   │   │   │   ├── Commenting
│   │       │   │   │   │   │   ├── ClassCommentSniff.php
│   │       │   │   │   │   │   ├── FileCommentSniff.php
│   │       │   │   │   │   │   ├── FunctionCommentSniff.php
│   │       │   │   │   │   │   └── InlineCommentSniff.php
│   │       │   │   │   │   ├── ControlStructures
│   │       │   │   │   │   │   ├── ControlSignatureSniff.php
│   │       │   │   │   │   │   └── MultiLineConditionSniff.php
│   │       │   │   │   │   ├── Files
│   │       │   │   │   │   │   └── IncludingFileSniff.php
│   │       │   │   │   │   ├── Formatting
│   │       │   │   │   │   │   └── MultiLineAssignmentSniff.php
│   │       │   │   │   │   ├── Functions
│   │       │   │   │   │   │   ├── FunctionCallSignatureSniff.php
│   │       │   │   │   │   │   ├── FunctionDeclarationSniff.php
│   │       │   │   │   │   │   └── ValidDefaultValueSniff.php
│   │       │   │   │   │   ├── NamingConventions
│   │       │   │   │   │   │   ├── ValidClassNameSniff.php
│   │       │   │   │   │   │   ├── ValidFunctionNameSniff.php
│   │       │   │   │   │   │   └── ValidVariableNameSniff.php
│   │       │   │   │   │   └── WhiteSpace
│   │       │   │   │   │       ├── ObjectOperatorIndentSniff.php
│   │       │   │   │   │       ├── ScopeClosingBraceSniff.php
│   │       │   │   │   │       └── ScopeIndentSniff.php
│   │       │   │   │   └── ruleset.xml
│   │       │   │   ├── PHPCS
│   │       │   │   │   └── ruleset.xml
│   │       │   │   ├── PSR1
│   │       │   │   │   ├── Docs
│   │       │   │   │   │   ├── Classes
│   │       │   │   │   │   │   └── ClassDeclarationStandard.xml
│   │       │   │   │   │   └── Files
│   │       │   │   │   │       └── SideEffectsStandard.xml
│   │       │   │   │   ├── Sniffs
│   │       │   │   │   │   ├── Classes
│   │       │   │   │   │   │   └── ClassDeclarationSniff.php
│   │       │   │   │   │   ├── Files
│   │       │   │   │   │   │   └── SideEffectsSniff.php
│   │       │   │   │   │   └── Methods
│   │       │   │   │   │       └── CamelCapsMethodNameSniff.php
│   │       │   │   │   └── ruleset.xml
│   │       │   │   ├── PSR2
│   │       │   │   │   ├── Docs
│   │       │   │   │   │   ├── Classes
│   │       │   │   │   │   │   ├── ClassDeclarationStandard.xml
│   │       │   │   │   │   │   └── PropertyDeclarationStandard.xml
│   │       │   │   │   │   ├── ControlStructures
│   │       │   │   │   │   │   ├── ControlStructureSpacingStandard.xml
│   │       │   │   │   │   │   ├── ElseIfDeclarationStandard.xml
│   │       │   │   │   │   │   └── SwitchDeclarationStandard.xml
│   │       │   │   │   │   ├── Files
│   │       │   │   │   │   │   └── EndFileNewlineStandard.xml
│   │       │   │   │   │   ├── Methods
│   │       │   │   │   │   │   └── MethodDeclarationStandard.xml
│   │       │   │   │   │   └── Namespaces
│   │       │   │   │   │       ├── NamespaceDeclarationStandard.xml
│   │       │   │   │   │       └── UseDeclarationStandard.xml
│   │       │   │   │   ├── Sniffs
│   │       │   │   │   │   ├── Classes
│   │       │   │   │   │   │   ├── ClassDeclarationSniff.php
│   │       │   │   │   │   │   └── PropertyDeclarationSniff.php
│   │       │   │   │   │   ├── ControlStructures
│   │       │   │   │   │   │   ├── ControlStructureSpacingSniff.php
│   │       │   │   │   │   │   ├── ElseIfDeclarationSniff.php
│   │       │   │   │   │   │   └── SwitchDeclarationSniff.php
│   │       │   │   │   │   ├── Files
│   │       │   │   │   │   │   ├── ClosingTagSniff.php
│   │       │   │   │   │   │   └── EndFileNewlineSniff.php
│   │       │   │   │   │   ├── Methods
│   │       │   │   │   │   │   ├── FunctionCallSignatureSniff.php
│   │       │   │   │   │   │   ├── FunctionClosingBraceSniff.php
│   │       │   │   │   │   │   └── MethodDeclarationSniff.php
│   │       │   │   │   │   └── Namespaces
│   │       │   │   │   │       ├── NamespaceDeclarationSniff.php
│   │       │   │   │   │       └── UseDeclarationSniff.php
│   │       │   │   │   └── ruleset.xml
│   │       │   │   ├── Squiz
│   │       │   │   │   ├── Docs
│   │       │   │   │   │   ├── Arrays
│   │       │   │   │   │   │   ├── ArrayBracketSpacingStandard.xml
│   │       │   │   │   │   │   └── ArrayDeclarationStandard.xml
│   │       │   │   │   │   ├── Classes
│   │       │   │   │   │   │   ├── LowercaseClassKeywordsStandard.xml
│   │       │   │   │   │   │   └── SelfMemberReferenceStandard.xml
│   │       │   │   │   │   ├── Commenting
│   │       │   │   │   │   │   ├── DocCommentAlignmentStandard.xml
│   │       │   │   │   │   │   └── FunctionCommentThrowTagStandard.xml
│   │       │   │   │   │   ├── ControlStructures
│   │       │   │   │   │   │   ├── ForEachLoopDeclarationStandard.xml
│   │       │   │   │   │   │   ├── ForLoopDeclarationStandard.xml
│   │       │   │   │   │   │   └── LowercaseDeclarationStandard.xml
│   │       │   │   │   │   ├── Functions
│   │       │   │   │   │   │   ├── FunctionDuplicateArgumentStandard.xml
│   │       │   │   │   │   │   └── LowercaseFunctionKeywordsStandard.xml
│   │       │   │   │   │   ├── Scope
│   │       │   │   │   │   │   └── StaticThisUsageStandard.xml
│   │       │   │   │   │   ├── Strings
│   │       │   │   │   │   │   └── EchoedStringsStandard.xml
│   │       │   │   │   │   └── WhiteSpace
│   │       │   │   │   │       ├── CastSpacingStandard.xml
│   │       │   │   │   │       ├── FunctionOpeningBraceStandard.xml
│   │       │   │   │   │       ├── LanguageConstructSpacingStandard.xml
│   │       │   │   │   │       ├── ObjectOperatorSpacingStandard.xml
│   │       │   │   │   │       ├── ScopeKeywordSpacingStandard.xml
│   │       │   │   │   │       └── SemicolonSpacingStandard.xml
│   │       │   │   │   ├── Sniffs
│   │       │   │   │   │   ├── Arrays
│   │       │   │   │   │   │   ├── ArrayBracketSpacingSniff.php
│   │       │   │   │   │   │   └── ArrayDeclarationSniff.php
│   │       │   │   │   │   ├── CSS
│   │       │   │   │   │   │   ├── ClassDefinitionClosingBraceSpaceSniff.php
│   │       │   │   │   │   │   ├── ClassDefinitionNameSpacingSniff.php
│   │       │   │   │   │   │   ├── ClassDefinitionOpeningBraceSpaceSniff.php
│   │       │   │   │   │   │   ├── ColonSpacingSniff.php
│   │       │   │   │   │   │   ├── ColourDefinitionSniff.php
│   │       │   │   │   │   │   ├── DisallowMultipleStyleDefinitionsSniff.php
│   │       │   │   │   │   │   ├── DuplicateClassDefinitionSniff.php
│   │       │   │   │   │   │   ├── DuplicateStyleDefinitionSniff.php
│   │       │   │   │   │   │   ├── EmptyClassDefinitionSniff.php
│   │       │   │   │   │   │   ├── EmptyStyleDefinitionSniff.php
│   │       │   │   │   │   │   ├── ForbiddenStylesSniff.php
│   │       │   │   │   │   │   ├── IndentationSniff.php
│   │       │   │   │   │   │   ├── LowercaseStyleDefinitionSniff.php
│   │       │   │   │   │   │   ├── MissingColonSniff.php
│   │       │   │   │   │   │   ├── NamedColoursSniff.php
│   │       │   │   │   │   │   ├── OpacitySniff.php
│   │       │   │   │   │   │   ├── SemicolonSpacingSniff.php
│   │       │   │   │   │   │   └── ShorthandSizeSniff.php
│   │       │   │   │   │   ├── Classes
│   │       │   │   │   │   │   ├── ClassDeclarationSniff.php
│   │       │   │   │   │   │   ├── ClassFileNameSniff.php
│   │       │   │   │   │   │   ├── DuplicatePropertySniff.php
│   │       │   │   │   │   │   ├── LowercaseClassKeywordsSniff.php
│   │       │   │   │   │   │   ├── SelfMemberReferenceSniff.php
│   │       │   │   │   │   │   └── ValidClassNameSniff.php
│   │       │   │   │   │   ├── Commenting
│   │       │   │   │   │   │   ├── BlockCommentSniff.php
│   │       │   │   │   │   │   ├── ClassCommentSniff.php
│   │       │   │   │   │   │   ├── ClosingDeclarationCommentSniff.php
│   │       │   │   │   │   │   ├── DocCommentAlignmentSniff.php
│   │       │   │   │   │   │   ├── EmptyCatchCommentSniff.php
│   │       │   │   │   │   │   ├── FileCommentSniff.php
│   │       │   │   │   │   │   ├── FunctionCommentSniff.php
│   │       │   │   │   │   │   ├── FunctionCommentThrowTagSniff.php
│   │       │   │   │   │   │   ├── InlineCommentSniff.php
│   │       │   │   │   │   │   ├── LongConditionClosingCommentSniff.php
│   │       │   │   │   │   │   ├── PostStatementCommentSniff.php
│   │       │   │   │   │   │   └── VariableCommentSniff.php
│   │       │   │   │   │   ├── ControlStructures
│   │       │   │   │   │   │   ├── ControlSignatureSniff.php
│   │       │   │   │   │   │   ├── ElseIfDeclarationSniff.php
│   │       │   │   │   │   │   ├── ForEachLoopDeclarationSniff.php
│   │       │   │   │   │   │   ├── ForLoopDeclarationSniff.php
│   │       │   │   │   │   │   ├── InlineIfDeclarationSniff.php
│   │       │   │   │   │   │   ├── LowercaseDeclarationSniff.php
│   │       │   │   │   │   │   └── SwitchDeclarationSniff.php
│   │       │   │   │   │   ├── Debug
│   │       │   │   │   │   │   ├── JSLintSniff.php
│   │       │   │   │   │   │   └── JavaScriptLintSniff.php
│   │       │   │   │   │   ├── Files
│   │       │   │   │   │   │   └── FileExtensionSniff.php
│   │       │   │   │   │   ├── Formatting
│   │       │   │   │   │   │   └── OperatorBracketSniff.php
│   │       │   │   │   │   ├── Functions
│   │       │   │   │   │   │   ├── FunctionDeclarationArgumentSpacingSniff.php
│   │       │   │   │   │   │   ├── FunctionDeclarationSniff.php
│   │       │   │   │   │   │   ├── FunctionDuplicateArgumentSniff.php
│   │       │   │   │   │   │   ├── GlobalFunctionSniff.php
│   │       │   │   │   │   │   ├── LowercaseFunctionKeywordsSniff.php
│   │       │   │   │   │   │   └── MultiLineFunctionDeclarationSniff.php
│   │       │   │   │   │   ├── NamingConventions
│   │       │   │   │   │   │   ├── ValidFunctionNameSniff.php
│   │       │   │   │   │   │   └── ValidVariableNameSniff.php
│   │       │   │   │   │   ├── Objects
│   │       │   │   │   │   │   ├── DisallowObjectStringIndexSniff.php
│   │       │   │   │   │   │   ├── ObjectInstantiationSniff.php
│   │       │   │   │   │   │   └── ObjectMemberCommaSniff.php
│   │       │   │   │   │   ├── Operators
│   │       │   │   │   │   │   ├── ComparisonOperatorUsageSniff.php
│   │       │   │   │   │   │   ├── IncrementDecrementUsageSniff.php
│   │       │   │   │   │   │   └── ValidLogicalOperatorsSniff.php
│   │       │   │   │   │   ├── PHP
│   │       │   │   │   │   │   ├── CommentedOutCodeSniff.php
│   │       │   │   │   │   │   ├── DisallowBooleanStatementSniff.php
│   │       │   │   │   │   │   ├── DisallowComparisonAssignmentSniff.php
│   │       │   │   │   │   │   ├── DisallowInlineIfSniff.php
│   │       │   │   │   │   │   ├── DisallowMultipleAssignmentsSniff.php
│   │       │   │   │   │   │   ├── DisallowObEndFlushSniff.php
│   │       │   │   │   │   │   ├── DisallowSizeFunctionsInLoopsSniff.php
│   │       │   │   │   │   │   ├── DiscouragedFunctionsSniff.php
│   │       │   │   │   │   │   ├── EmbeddedPhpSniff.php
│   │       │   │   │   │   │   ├── EvalSniff.php
│   │       │   │   │   │   │   ├── ForbiddenFunctionsSniff.php
│   │       │   │   │   │   │   ├── GlobalKeywordSniff.php
│   │       │   │   │   │   │   ├── HeredocSniff.php
│   │       │   │   │   │   │   ├── InnerFunctionsSniff.php
│   │       │   │   │   │   │   ├── LowercasePHPFunctionsSniff.php
│   │       │   │   │   │   │   └── NonExecutableCodeSniff.php
│   │       │   │   │   │   ├── Scope
│   │       │   │   │   │   │   ├── MemberVarScopeSniff.php
│   │       │   │   │   │   │   ├── MethodScopeSniff.php
│   │       │   │   │   │   │   └── StaticThisUsageSniff.php
│   │       │   │   │   │   ├── Strings
│   │       │   │   │   │   │   ├── ConcatenationSpacingSniff.php
│   │       │   │   │   │   │   ├── DoubleQuoteUsageSniff.php
│   │       │   │   │   │   │   └── EchoedStringsSniff.php
│   │       │   │   │   │   └── WhiteSpace
│   │       │   │   │   │       ├── CastSpacingSniff.php
│   │       │   │   │   │       ├── ControlStructureSpacingSniff.php
│   │       │   │   │   │       ├── FunctionClosingBraceSpaceSniff.php
│   │       │   │   │   │       ├── FunctionOpeningBraceSpaceSniff.php
│   │       │   │   │   │       ├── FunctionSpacingSniff.php
│   │       │   │   │   │       ├── LanguageConstructSpacingSniff.php
│   │       │   │   │   │       ├── LogicalOperatorSpacingSniff.php
│   │       │   │   │   │       ├── MemberVarSpacingSniff.php
│   │       │   │   │   │       ├── ObjectOperatorSpacingSniff.php
│   │       │   │   │   │       ├── OperatorSpacingSniff.php
│   │       │   │   │   │       ├── PropertyLabelSpacingSniff.php
│   │       │   │   │   │       ├── ScopeClosingBraceSniff.php
│   │       │   │   │   │       ├── ScopeKeywordSpacingSniff.php
│   │       │   │   │   │       ├── SemicolonSpacingSniff.php
│   │       │   │   │   │       └── SuperfluousWhitespaceSniff.php
│   │       │   │   │   └── ruleset.xml
│   │       │   │   └── Zend
│   │       │   │       ├── Docs
│   │       │   │       │   ├── Debug
│   │       │   │       │   │   └── CodeAnalyzerStandard.xml
│   │       │   │       │   ├── Files
│   │       │   │       │   │   └── ClosingTagStandard.xml
│   │       │   │       │   └── NamingConventions
│   │       │   │       │       └── ValidVariableNameStandard.xml
│   │       │   │       ├── Sniffs
│   │       │   │       │   ├── Debug
│   │       │   │       │   │   └── CodeAnalyzerSniff.php
│   │       │   │       │   ├── Files
│   │       │   │       │   │   └── ClosingTagSniff.php
│   │       │   │       │   └── NamingConventions
│   │       │   │       │       └── ValidVariableNameSniff.php
│   │       │   │       └── ruleset.xml
│   │       │   ├── Tokenizers
│   │       │   │   ├── CSS.php
│   │       │   │   ├── Comment.php
│   │       │   │   ├── JS.php
│   │       │   │   └── PHP.php
│   │       │   └── Tokens.php
│   │       ├── CodeSniffer.conf.dist
│   │       ├── CodeSniffer.php
│   │       ├── README.md
│   │       ├── composer.json
│   │       ├── licence.txt
│   │       ├── phpcs.xml.dist
│   │       └── scripts
│   │           ├── build-phar.php
│   │           ├── phpcbf
│   │           ├── phpcbf.bat
│   │           ├── phpcs
│   │           ├── phpcs-svn-pre-commit
│   │           └── phpcs.bat
│   ├── swiftmailer
│   │   └── swiftmailer
│   │       ├── CHANGES
│   │       ├── LICENSE
│   │       ├── README
│   │       ├── VERSION
│   │       ├── composer.json
│   │       ├── doc
│   │       │   ├── headers.rst
│   │       │   ├── help-resources.rst
│   │       │   ├── including-the-files.rst
│   │       │   ├── index.rst
│   │       │   ├── installing.rst
│   │       │   ├── introduction.rst
│   │       │   ├── japanese.rst
│   │       │   ├── messages.rst
│   │       │   ├── overview.rst
│   │       │   ├── plugins.rst
│   │       │   ├── sending.rst
│   │       │   └── uml
│   │       │       ├── Encoders.graffle
│   │       │       ├── Mime.graffle
│   │       │       └── Transports.graffle
│   │       ├── lib
│   │       │   ├── classes
│   │       │   │   ├── Swift
│   │       │   │   │   ├── Attachment.php
│   │       │   │   │   ├── ByteStream
│   │       │   │   │   │   ├── AbstractFilterableInputStream.php
│   │       │   │   │   │   ├── ArrayByteStream.php
│   │       │   │   │   │   ├── FileByteStream.php
│   │       │   │   │   │   └── TemporaryFileByteStream.php
│   │       │   │   │   ├── CharacterReader
│   │       │   │   │   │   ├── GenericFixedWidthReader.php
│   │       │   │   │   │   ├── UsAsciiReader.php
│   │       │   │   │   │   └── Utf8Reader.php
│   │       │   │   │   ├── CharacterReader.php
│   │       │   │   │   ├── CharacterReaderFactory
│   │       │   │   │   │   └── SimpleCharacterReaderFactory.php
│   │       │   │   │   ├── CharacterReaderFactory.php
│   │       │   │   │   ├── CharacterStream
│   │       │   │   │   │   ├── ArrayCharacterStream.php
│   │       │   │   │   │   └── NgCharacterStream.php
│   │       │   │   │   ├── CharacterStream.php
│   │       │   │   │   ├── ConfigurableSpool.php
│   │       │   │   │   ├── DependencyContainer.php
│   │       │   │   │   ├── DependencyException.php
│   │       │   │   │   ├── EmbeddedFile.php
│   │       │   │   │   ├── Encoder
│   │       │   │   │   │   ├── Base64Encoder.php
│   │       │   │   │   │   ├── QpEncoder.php
│   │       │   │   │   │   └── Rfc2231Encoder.php
│   │       │   │   │   ├── Encoder.php
│   │       │   │   │   ├── Encoding.php
│   │       │   │   │   ├── Events
│   │       │   │   │   │   ├── CommandEvent.php
│   │       │   │   │   │   ├── CommandListener.php
│   │       │   │   │   │   ├── Event.php
│   │       │   │   │   │   ├── EventDispatcher.php
│   │       │   │   │   │   ├── EventListener.php
│   │       │   │   │   │   ├── EventObject.php
│   │       │   │   │   │   ├── ResponseEvent.php
│   │       │   │   │   │   ├── ResponseListener.php
│   │       │   │   │   │   ├── SendEvent.php
│   │       │   │   │   │   ├── SendListener.php
│   │       │   │   │   │   ├── SimpleEventDispatcher.php
│   │       │   │   │   │   ├── TransportChangeEvent.php
│   │       │   │   │   │   ├── TransportChangeListener.php
│   │       │   │   │   │   ├── TransportExceptionEvent.php
│   │       │   │   │   │   └── TransportExceptionListener.php
│   │       │   │   │   ├── FailoverTransport.php
│   │       │   │   │   ├── FileSpool.php
│   │       │   │   │   ├── FileStream.php
│   │       │   │   │   ├── Filterable.php
│   │       │   │   │   ├── Image.php
│   │       │   │   │   ├── InputByteStream.php
│   │       │   │   │   ├── IoException.php
│   │       │   │   │   ├── KeyCache
│   │       │   │   │   │   ├── ArrayKeyCache.php
│   │       │   │   │   │   ├── DiskKeyCache.php
│   │       │   │   │   │   ├── KeyCacheInputStream.php
│   │       │   │   │   │   ├── NullKeyCache.php
│   │       │   │   │   │   └── SimpleKeyCacheInputStream.php
│   │       │   │   │   ├── KeyCache.php
│   │       │   │   │   ├── LoadBalancedTransport.php
│   │       │   │   │   ├── MailTransport.php
│   │       │   │   │   ├── Mailer
│   │       │   │   │   │   ├── ArrayRecipientIterator.php
│   │       │   │   │   │   └── RecipientIterator.php
│   │       │   │   │   ├── Mailer.php
│   │       │   │   │   ├── MemorySpool.php
│   │       │   │   │   ├── Message.php
│   │       │   │   │   ├── Mime
│   │       │   │   │   │   ├── Attachment.php
│   │       │   │   │   │   ├── CharsetObserver.php
│   │       │   │   │   │   ├── ContentEncoder
│   │       │   │   │   │   │   ├── Base64ContentEncoder.php
│   │       │   │   │   │   │   ├── NativeQpContentEncoder.php
│   │       │   │   │   │   │   ├── PlainContentEncoder.php
│   │       │   │   │   │   │   ├── QpContentEncoder.php
│   │       │   │   │   │   │   ├── QpContentEncoderProxy.php
│   │       │   │   │   │   │   └── RawContentEncoder.php
│   │       │   │   │   │   ├── ContentEncoder.php
│   │       │   │   │   │   ├── EmbeddedFile.php
│   │       │   │   │   │   ├── EncodingObserver.php
│   │       │   │   │   │   ├── Grammar.php
│   │       │   │   │   │   ├── Header.php
│   │       │   │   │   │   ├── HeaderEncoder
│   │       │   │   │   │   │   ├── Base64HeaderEncoder.php
│   │       │   │   │   │   │   └── QpHeaderEncoder.php
│   │       │   │   │   │   ├── HeaderEncoder.php
│   │       │   │   │   │   ├── HeaderFactory.php
│   │       │   │   │   │   ├── HeaderSet.php
│   │       │   │   │   │   ├── Headers
│   │       │   │   │   │   │   ├── AbstractHeader.php
│   │       │   │   │   │   │   ├── DateHeader.php
│   │       │   │   │   │   │   ├── IdentificationHeader.php
│   │       │   │   │   │   │   ├── MailboxHeader.php
│   │       │   │   │   │   │   ├── OpenDKIMHeader.php
│   │       │   │   │   │   │   ├── ParameterizedHeader.php
│   │       │   │   │   │   │   ├── PathHeader.php
│   │       │   │   │   │   │   └── UnstructuredHeader.php
│   │       │   │   │   │   ├── Message.php
│   │       │   │   │   │   ├── MimeEntity.php
│   │       │   │   │   │   ├── MimePart.php
│   │       │   │   │   │   ├── ParameterizedHeader.php
│   │       │   │   │   │   ├── SimpleHeaderFactory.php
│   │       │   │   │   │   ├── SimpleHeaderSet.php
│   │       │   │   │   │   ├── SimpleMessage.php
│   │       │   │   │   │   └── SimpleMimeEntity.php
│   │       │   │   │   ├── MimePart.php
│   │       │   │   │   ├── NullTransport.php
│   │       │   │   │   ├── OutputByteStream.php
│   │       │   │   │   ├── Plugins
│   │       │   │   │   │   ├── AntiFloodPlugin.php
│   │       │   │   │   │   ├── BandwidthMonitorPlugin.php
│   │       │   │   │   │   ├── Decorator
│   │       │   │   │   │   │   └── Replacements.php
│   │       │   │   │   │   ├── DecoratorPlugin.php
│   │       │   │   │   │   ├── ImpersonatePlugin.php
│   │       │   │   │   │   ├── Logger.php
│   │       │   │   │   │   ├── LoggerPlugin.php
│   │       │   │   │   │   ├── Loggers
│   │       │   │   │   │   │   ├── ArrayLogger.php
│   │       │   │   │   │   │   └── EchoLogger.php
│   │       │   │   │   │   ├── MessageLogger.php
│   │       │   │   │   │   ├── Pop
│   │       │   │   │   │   │   ├── Pop3Connection.php
│   │       │   │   │   │   │   └── Pop3Exception.php
│   │       │   │   │   │   ├── PopBeforeSmtpPlugin.php
│   │       │   │   │   │   ├── RedirectingPlugin.php
│   │       │   │   │   │   ├── Reporter.php
│   │       │   │   │   │   ├── ReporterPlugin.php
│   │       │   │   │   │   ├── Reporters
│   │       │   │   │   │   │   ├── HitReporter.php
│   │       │   │   │   │   │   └── HtmlReporter.php
│   │       │   │   │   │   ├── Sleeper.php
│   │       │   │   │   │   ├── ThrottlerPlugin.php
│   │       │   │   │   │   └── Timer.php
│   │       │   │   │   ├── Preferences.php
│   │       │   │   │   ├── ReplacementFilterFactory.php
│   │       │   │   │   ├── RfcComplianceException.php
│   │       │   │   │   ├── SendmailTransport.php
│   │       │   │   │   ├── SignedMessage.php
│   │       │   │   │   ├── Signer.php
│   │       │   │   │   ├── Signers
│   │       │   │   │   │   ├── BodySigner.php
│   │       │   │   │   │   ├── DKIMSigner.php
│   │       │   │   │   │   ├── DomainKeySigner.php
│   │       │   │   │   │   ├── HeaderSigner.php
│   │       │   │   │   │   ├── OpenDKIMSigner.php
│   │       │   │   │   │   └── SMimeSigner.php
│   │       │   │   │   ├── SmtpTransport.php
│   │       │   │   │   ├── Spool.php
│   │       │   │   │   ├── SpoolTransport.php
│   │       │   │   │   ├── StreamFilter.php
│   │       │   │   │   ├── StreamFilters
│   │       │   │   │   │   ├── ByteArrayReplacementFilter.php
│   │       │   │   │   │   ├── StringReplacementFilter.php
│   │       │   │   │   │   └── StringReplacementFilterFactory.php
│   │       │   │   │   ├── SwiftException.php
│   │       │   │   │   ├── Transport
│   │       │   │   │   │   ├── AbstractSmtpTransport.php
│   │       │   │   │   │   ├── Esmtp
│   │       │   │   │   │   │   ├── Auth
│   │       │   │   │   │   │   │   ├── CramMd5Authenticator.php
│   │       │   │   │   │   │   │   ├── LoginAuthenticator.php
│   │       │   │   │   │   │   │   ├── NTLMAuthenticator.php
│   │       │   │   │   │   │   │   ├── PlainAuthenticator.php
│   │       │   │   │   │   │   │   └── XOAuth2Authenticator.php
│   │       │   │   │   │   │   ├── AuthHandler.php
│   │       │   │   │   │   │   └── Authenticator.php
│   │       │   │   │   │   ├── EsmtpHandler.php
│   │       │   │   │   │   ├── EsmtpTransport.php
│   │       │   │   │   │   ├── FailoverTransport.php
│   │       │   │   │   │   ├── IoBuffer.php
│   │       │   │   │   │   ├── LoadBalancedTransport.php
│   │       │   │   │   │   ├── MailInvoker.php
│   │       │   │   │   │   ├── MailTransport.php
│   │       │   │   │   │   ├── NullTransport.php
│   │       │   │   │   │   ├── SendmailTransport.php
│   │       │   │   │   │   ├── SimpleMailInvoker.php
│   │       │   │   │   │   ├── SmtpAgent.php
│   │       │   │   │   │   ├── SpoolTransport.php
│   │       │   │   │   │   └── StreamBuffer.php
│   │       │   │   │   ├── Transport.php
│   │       │   │   │   ├── TransportException.php
│   │       │   │   │   └── Validate.php
│   │       │   │   └── Swift.php
│   │       │   ├── dependency_maps
│   │       │   │   ├── cache_deps.php
│   │       │   │   ├── message_deps.php
│   │       │   │   ├── mime_deps.php
│   │       │   │   └── transport_deps.php
│   │       │   ├── mime_types.php
│   │       │   ├── preferences.php
│   │       │   ├── swift_init.php
│   │       │   ├── swift_required.php
│   │       │   ├── swift_required_pear.php
│   │       │   └── swiftmailer_generate_mimes_config.php
│   │       ├── phpunit.xml.dist
│   │       └── tests
│   │           ├── IdenticalBinaryConstraint.php
│   │           ├── StreamCollector.php
│   │           ├── SwiftMailerSmokeTestCase.php
│   │           ├── SwiftMailerTestCase.php
│   │           ├── _samples
│   │           │   ├── charsets
│   │           │   │   ├── iso-2022-jp
│   │           │   │   │   └── one.txt
│   │           │   │   ├── iso-8859-1
│   │           │   │   │   └── one.txt
│   │           │   │   └── utf-8
│   │           │   │       ├── one.txt
│   │           │   │       ├── three.txt
│   │           │   │       └── two.txt
│   │           │   ├── dkim
│   │           │   │   ├── dkim.test.priv
│   │           │   │   └── dkim.test.pub
│   │           │   ├── files
│   │           │   │   ├── data.txt
│   │           │   │   ├── swiftmailer.png
│   │           │   │   └── textfile.zip
│   │           │   └── smime
│   │           │       ├── CA.srl
│   │           │       ├── ca.crt
│   │           │       ├── ca.key
│   │           │       ├── create-cert.sh
│   │           │       ├── encrypt.crt
│   │           │       ├── encrypt.key
│   │           │       ├── encrypt2.crt
│   │           │       ├── encrypt2.key
│   │           │       ├── intermediate.crt
│   │           │       ├── intermediate.key
│   │           │       ├── sign.crt
│   │           │       ├── sign.key
│   │           │       ├── sign2.crt
│   │           │       └── sign2.key
│   │           ├── acceptance
│   │           │   └── Swift
│   │           │       ├── AttachmentAcceptanceTest.php
│   │           │       ├── ByteStream
│   │           │       │   └── FileByteStreamAcceptanceTest.php
│   │           │       ├── CharacterReaderFactory
│   │           │       │   └── SimpleCharacterReaderFactoryAcceptanceTest.php
│   │           │       ├── DependencyContainerAcceptanceTest.php
│   │           │       ├── EmbeddedFileAcceptanceTest.php
│   │           │       ├── Encoder
│   │           │       │   ├── Base64EncoderAcceptanceTest.php
│   │           │       │   ├── QpEncoderAcceptanceTest.php
│   │           │       │   └── Rfc2231EncoderAcceptanceTest.php
│   │           │       ├── EncodingAcceptanceTest.php
│   │           │       ├── KeyCache
│   │           │       │   ├── ArrayKeyCacheAcceptanceTest.php
│   │           │       │   └── DiskKeyCacheAcceptanceTest.php
│   │           │       ├── MessageAcceptanceTest.php
│   │           │       ├── Mime
│   │           │       │   ├── AttachmentAcceptanceTest.php
│   │           │       │   ├── ContentEncoder
│   │           │       │   │   ├── Base64ContentEncoderAcceptanceTest.php
│   │           │       │   │   ├── NativeQpContentEncoderAcceptanceTest.php
│   │           │       │   │   ├── PlainContentEncoderAcceptanceTest.php
│   │           │       │   │   └── QpContentEncoderAcceptanceTest.php
│   │           │       │   ├── EmbeddedFileAcceptanceTest.php
│   │           │       │   ├── HeaderEncoder
│   │           │       │   │   └── Base64HeaderEncoderAcceptanceTest.php
│   │           │       │   ├── MimePartAcceptanceTest.php
│   │           │       │   └── SimpleMessageAcceptanceTest.php
│   │           │       ├── MimePartAcceptanceTest.php
│   │           │       └── Transport
│   │           │           └── StreamBuffer
│   │           │               ├── AbstractStreamBufferAcceptanceTest.php
│   │           │               ├── BasicSocketAcceptanceTest.php
│   │           │               ├── ProcessAcceptanceTest.php
│   │           │               ├── SocketTimeoutTest.php
│   │           │               ├── SslSocketAcceptanceTest.php
│   │           │               └── TlsSocketAcceptanceTest.php
│   │           ├── acceptance.conf.php.default
│   │           ├── bootstrap.php
│   │           ├── bug
│   │           │   └── Swift
│   │           │       ├── Bug111Test.php
│   │           │       ├── Bug118Test.php
│   │           │       ├── Bug206Test.php
│   │           │       ├── Bug274Test.php
│   │           │       ├── Bug34Test.php
│   │           │       ├── Bug35Test.php
│   │           │       ├── Bug38Test.php
│   │           │       ├── Bug518Test.php
│   │           │       ├── Bug51Test.php
│   │           │       ├── Bug534Test.php
│   │           │       ├── Bug650Test.php
│   │           │       ├── Bug71Test.php
│   │           │       ├── Bug76Test.php
│   │           │       └── BugFileByteStreamConsecutiveReadCallsTest.php
│   │           ├── fixtures
│   │           │   └── MimeEntityFixture.php
│   │           ├── smoke
│   │           │   └── Swift
│   │           │       └── Smoke
│   │           │           ├── AttachmentSmokeTest.php
│   │           │           ├── BasicSmokeTest.php
│   │           │           ├── HtmlWithAttachmentSmokeTest.php
│   │           │           └── InternationalSmokeTest.php
│   │           ├── smoke.conf.php.default
│   │           └── unit
│   │               └── Swift
│   │                   ├── ByteStream
│   │                   │   └── ArrayByteStreamTest.php
│   │                   ├── CharacterReader
│   │                   │   ├── GenericFixedWidthReaderTest.php
│   │                   │   ├── UsAsciiReaderTest.php
│   │                   │   └── Utf8ReaderTest.php
│   │                   ├── CharacterStream
│   │                   │   └── ArrayCharacterStreamTest.php
│   │                   ├── DependencyContainerTest.php
│   │                   ├── Encoder
│   │                   │   ├── Base64EncoderTest.php
│   │                   │   ├── QpEncoderTest.php
│   │                   │   └── Rfc2231EncoderTest.php
│   │                   ├── Events
│   │                   │   ├── CommandEventTest.php
│   │                   │   ├── EventObjectTest.php
│   │                   │   ├── ResponseEventTest.php
│   │                   │   ├── SendEventTest.php
│   │                   │   ├── SimpleEventDispatcherTest.php
│   │                   │   ├── TransportChangeEventTest.php
│   │                   │   └── TransportExceptionEventTest.php
│   │                   ├── KeyCache
│   │                   │   ├── ArrayKeyCacheTest.php
│   │                   │   └── SimpleKeyCacheInputStreamTest.php
│   │                   ├── Mailer
│   │                   │   └── ArrayRecipientIteratorTest.php
│   │                   ├── MailerTest.php
│   │                   ├── MessageTest.php
│   │                   ├── Mime
│   │                   │   ├── AbstractMimeEntityTest.php
│   │                   │   ├── AttachmentTest.php
│   │                   │   ├── ContentEncoder
│   │                   │   │   ├── Base64ContentEncoderTest.php
│   │                   │   │   ├── PlainContentEncoderTest.php
│   │                   │   │   └── QpContentEncoderTest.php
│   │                   │   ├── EmbeddedFileTest.php
│   │                   │   ├── HeaderEncoder
│   │                   │   │   ├── Base64HeaderEncoderTest.php
│   │                   │   │   └── QpHeaderEncoderTest.php
│   │                   │   ├── Headers
│   │                   │   │   ├── DateHeaderTest.php
│   │                   │   │   ├── IdentificationHeaderTest.php
│   │                   │   │   ├── MailboxHeaderTest.php
│   │                   │   │   ├── ParameterizedHeaderTest.php
│   │                   │   │   ├── PathHeaderTest.php
│   │                   │   │   └── UnstructuredHeaderTest.php
│   │                   │   ├── MimePartTest.php
│   │                   │   ├── SimpleHeaderFactoryTest.php
│   │                   │   ├── SimpleHeaderSetTest.php
│   │                   │   ├── SimpleMessageTest.php
│   │                   │   └── SimpleMimeEntityTest.php
│   │                   ├── Plugins
│   │                   │   ├── AntiFloodPluginTest.php
│   │                   │   ├── BandwidthMonitorPluginTest.php
│   │                   │   ├── DecoratorPluginTest.php
│   │                   │   ├── LoggerPluginTest.php
│   │                   │   ├── Loggers
│   │                   │   │   ├── ArrayLoggerTest.php
│   │                   │   │   └── EchoLoggerTest.php
│   │                   │   ├── PopBeforeSmtpPluginTest.php
│   │                   │   ├── RedirectingPluginTest.php
│   │                   │   ├── ReporterPluginTest.php
│   │                   │   ├── Reporters
│   │                   │   │   ├── HitReporterTest.php
│   │                   │   │   └── HtmlReporterTest.php
│   │                   │   └── ThrottlerPluginTest.php
│   │                   ├── Signers
│   │                   │   ├── DKIMSignerTest.php
│   │                   │   ├── OpenDKIMSignerTest.php
│   │                   │   └── SMimeSignerTest.php
│   │                   ├── StreamFilters
│   │                   │   ├── ByteArrayReplacementFilterTest.php
│   │                   │   ├── StringReplacementFilterFactoryTest.php
│   │                   │   └── StringReplacementFilterTest.php
│   │                   └── Transport
│   │                       ├── AbstractSmtpEventSupportTest.php
│   │                       ├── AbstractSmtpTest.php
│   │                       ├── Esmtp
│   │                       │   ├── Auth
│   │                       │   │   ├── CramMd5AuthenticatorTest.php
│   │                       │   │   ├── LoginAuthenticatorTest.php
│   │                       │   │   ├── NTLMAuthenticatorTest.php
│   │                       │   │   └── PlainAuthenticatorTest.php
│   │                       │   └── AuthHandlerTest.php
│   │                       ├── EsmtpTransport
│   │                       │   └── ExtensionSupportTest.php
│   │                       ├── EsmtpTransportTest.php
│   │                       ├── FailoverTransportTest.php
│   │                       ├── LoadBalancedTransportTest.php
│   │                       ├── MailTransportTest.php
│   │                       ├── SendmailTransportTest.php
│   │                       └── StreamBufferTest.php
│   ├── symfony
│   │   ├── monolog-bundle
│   │   │   ├── CHANGELOG.md
│   │   │   ├── DependencyInjection
│   │   │   │   ├── Compiler
│   │   │   │   │   ├── AddProcessorsPass.php
│   │   │   │   │   ├── AddSwiftMailerTransportPass.php
│   │   │   │   │   ├── DebugHandlerPass.php
│   │   │   │   │   ├── FixEmptyLoggerPass.php
│   │   │   │   │   └── LoggerChannelPass.php
│   │   │   │   ├── Configuration.php
│   │   │   │   └── MonologExtension.php
│   │   │   ├── LICENSE
│   │   │   ├── MonologBundle.php
│   │   │   ├── README.md
│   │   │   ├── Resources
│   │   │   │   ├── config
│   │   │   │   │   ├── monolog.xml
│   │   │   │   │   └── schema
│   │   │   │   │       └── monolog-1.0.xsd
│   │   │   │   └── doc
│   │   │   │       └── index.rst
│   │   │   ├── SwiftMailer
│   │   │   │   └── MessageFactory.php
│   │   │   ├── Tests
│   │   │   │   └── DependencyInjection
│   │   │   │       ├── Compiler
│   │   │   │       │   ├── AddProcessorsPassTest.php
│   │   │   │       │   ├── AddSwiftMailerTransportPassTest.php
│   │   │   │       │   ├── FixEmptyLoggerPassTest.php
│   │   │   │       │   └── LoggerChannelPassTest.php
│   │   │   │       ├── ConfigurationTest.php
│   │   │   │       ├── DependencyInjectionTest.php
│   │   │   │       ├── FixtureMonologExtensionTest.php
│   │   │   │       ├── Fixtures
│   │   │   │       │   ├── xml
│   │   │   │       │   │   ├── handlers_with_channels.xml
│   │   │   │       │   │   ├── multiple_email_recipients.xml
│   │   │   │       │   │   ├── multiple_handlers.xml
│   │   │   │       │   │   ├── new_and_priority.xml
│   │   │   │       │   │   ├── new_and_priority_import.xml
│   │   │   │       │   │   ├── new_at_end.xml
│   │   │   │       │   │   ├── new_at_end_import.xml
│   │   │   │       │   │   ├── overwriting.xml
│   │   │   │       │   │   ├── overwriting_import.xml
│   │   │   │       │   │   ├── parameterized_handlers.xml
│   │   │   │       │   │   ├── process_psr_3_messages_disabled.xml
│   │   │   │       │   │   └── single_email_recipient.xml
│   │   │   │       │   └── yml
│   │   │   │       │       ├── handlers_with_channels.yml
│   │   │   │       │       ├── multiple_email_recipients.yml
│   │   │   │       │       ├── multiple_handlers.yml
│   │   │   │       │       ├── new_and_priority.yml
│   │   │   │       │       ├── new_and_priority_import.yml
│   │   │   │       │       ├── new_at_end.yml
│   │   │   │       │       ├── new_at_end_import.yml
│   │   │   │       │       ├── overwriting.yml
│   │   │   │       │       ├── overwriting_import.yml
│   │   │   │       │       ├── parameterized_handlers.yml
│   │   │   │       │       ├── process_psr_3_messages_disabled.yml
│   │   │   │       │       └── single_email_recipient.yml
│   │   │   │       ├── MonologExtensionTest.php
│   │   │   │       ├── XmlMonologExtensionTest.php
│   │   │   │       └── YamlMonologExtensionTest.php
│   │   │   ├── composer.json
│   │   │   └── phpunit.xml.dist
│   │   ├── phpunit-bridge
│   │   │   ├── ClockMock.php
│   │   │   ├── DeprecationErrorHandler.php
│   │   │   ├── DnsMock.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SymfonyTestsListener.php
│   │   │   ├── Tests
│   │   │   │   ├── DeprecationErrorHandler
│   │   │   │   │   ├── default.phpt
│   │   │   │   │   ├── disabled.phpt
│   │   │   │   │   ├── regexp.phpt
│   │   │   │   │   └── weak.phpt
│   │   │   │   └── DnsMockTest.php
│   │   │   ├── TextUI
│   │   │   │   ├── Command.php
│   │   │   │   └── TestRunner.php
│   │   │   ├── bin
│   │   │   │   └── simple-phpunit
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   └── phpunit.xml.dist
│   │   ├── polyfill-apcu
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── bootstrap.php
│   │   │   └── composer.json
│   │   ├── polyfill-intl-icu
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── bootstrap.php
│   │   │   └── composer.json
│   │   ├── polyfill-mbstring
│   │   │   ├── LICENSE
│   │   │   ├── Mbstring.php
│   │   │   ├── README.md
│   │   │   ├── Resources
│   │   │   │   └── unidata
│   │   │   │       ├── lowerCase.php
│   │   │   │       └── upperCase.php
│   │   │   ├── bootstrap.php
│   │   │   └── composer.json
│   │   ├── polyfill-php56
│   │   │   ├── LICENSE
│   │   │   ├── Php56.php
│   │   │   ├── README.md
│   │   │   ├── bootstrap.php
│   │   │   └── composer.json
│   │   ├── polyfill-php70
│   │   │   ├── LICENSE
│   │   │   ├── Php70.php
│   │   │   ├── README.md
│   │   │   ├── Resources
│   │   │   │   └── stubs
│   │   │   │       ├── ArithmeticError.php
│   │   │   │       ├── AssertionError.php
│   │   │   │       ├── DivisionByZeroError.php
│   │   │   │       ├── Error.php
│   │   │   │       ├── ParseError.php
│   │   │   │       └── TypeError.php
│   │   │   ├── bootstrap.php
│   │   │   └── composer.json
│   │   ├── polyfill-util
│   │   │   ├── Binary.php
│   │   │   ├── BinaryNoFuncOverload.php
│   │   │   ├── BinaryOnFuncOverload.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── TestListener.php
│   │   │   └── composer.json
│   │   ├── swiftmailer-bundle
│   │   │   ├── CHANGELOG
│   │   │   ├── Command
│   │   │   │   ├── DebugCommand.php
│   │   │   │   ├── NewEmailCommand.php
│   │   │   │   └── SendEmailCommand.php
│   │   │   ├── DataCollector
│   │   │   │   └── MessageDataCollector.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── Compiler
│   │   │   │   │   └── RegisterPluginsPass.php
│   │   │   │   ├── Configuration.php
│   │   │   │   ├── SmtpTransportConfigurator.php
│   │   │   │   └── SwiftmailerExtension.php
│   │   │   ├── EventListener
│   │   │   │   └── EmailSenderListener.php
│   │   │   ├── Resources
│   │   │   │   ├── config
│   │   │   │   │   ├── schema
│   │   │   │   │   │   └── swiftmailer-1.0.xsd
│   │   │   │   │   └── swiftmailer.xml
│   │   │   │   ├── doc
│   │   │   │   │   └── index.rst
│   │   │   │   ├── meta
│   │   │   │   │   └── LICENSE
│   │   │   │   └── views
│   │   │   │       └── Collector
│   │   │   │           ├── icon.svg
│   │   │   │           └── swiftmailer.html.twig
│   │   │   ├── SwiftmailerBundle.php
│   │   │   ├── Tests
│   │   │   │   ├── Command
│   │   │   │   │   └── SendEmailCommandTest.php
│   │   │   │   └── DependencyInjection
│   │   │   │       ├── Fixtures
│   │   │   │       │   └── config
│   │   │   │       │       ├── php
│   │   │   │       │       │   ├── antiflood.php
│   │   │   │       │       │   ├── empty.php
│   │   │   │       │       │   ├── full.php
│   │   │   │       │       │   ├── mail.php
│   │   │   │       │       │   ├── many_mailers.php
│   │   │   │       │       │   ├── null.php
│   │   │   │       │       │   ├── null_mailer.php
│   │   │   │       │       │   ├── one_mailer.php
│   │   │   │       │       │   ├── redirect.php
│   │   │   │       │       │   ├── redirect_multi.php
│   │   │   │       │       │   ├── redirect_single.php
│   │   │   │       │       │   ├── sender_address.php
│   │   │   │       │       │   ├── sendmail.php
│   │   │   │       │       │   ├── smtp.php
│   │   │   │       │       │   ├── spool.php
│   │   │   │       │       │   ├── spool_memory.php
│   │   │   │       │       │   ├── spool_service.php
│   │   │   │       │       │   ├── spool_service_invalid.php
│   │   │   │       │       │   ├── stream_options.php
│   │   │   │       │       │   └── urls.php
│   │   │   │       │       ├── xml
│   │   │   │       │       │   ├── antiflood.xml
│   │   │   │       │       │   ├── empty.xml
│   │   │   │       │       │   ├── full.xml
│   │   │   │       │       │   ├── mail.xml
│   │   │   │       │       │   ├── many_mailers.xml
│   │   │   │       │       │   ├── null.xml
│   │   │   │       │       │   ├── null_mailer.xml
│   │   │   │       │       │   ├── one_mailer.xml
│   │   │   │       │       │   ├── redirect.xml
│   │   │   │       │       │   ├── redirect_multi.xml
│   │   │   │       │       │   ├── redirect_single.xml
│   │   │   │       │       │   ├── sender_address.xml
│   │   │   │       │       │   ├── sendmail.xml
│   │   │   │       │       │   ├── smtp.xml
│   │   │   │       │       │   ├── spool.xml
│   │   │   │       │       │   ├── spool_memory.xml
│   │   │   │       │       │   ├── spool_service.xml
│   │   │   │       │       │   ├── spool_service_invalid.xml
│   │   │   │       │       │   ├── stream_options.xml
│   │   │   │       │       │   └── urls.xml
│   │   │   │       │       └── yml
│   │   │   │       │           ├── antiflood.yml
│   │   │   │       │           ├── empty.yml
│   │   │   │       │           ├── full.yml
│   │   │   │       │           ├── mail.yml
│   │   │   │       │           ├── many_mailers.yml
│   │   │   │       │           ├── null.yml
│   │   │   │       │           ├── null_mailer.yml
│   │   │   │       │           ├── one_mailer.yml
│   │   │   │       │           ├── redirect.yml
│   │   │   │       │           ├── redirect_multi.yml
│   │   │   │       │           ├── redirect_single.yml
│   │   │   │       │           ├── sender_address.yml
│   │   │   │       │           ├── sendmail.yml
│   │   │   │       │           ├── smtp.yml
│   │   │   │       │           ├── spool.yml
│   │   │   │       │           ├── spool_memory.yml
│   │   │   │       │           ├── spool_service.yml
│   │   │   │       │           ├── spool_service_invalid.yml
│   │   │   │       │           ├── stream_options.yml
│   │   │   │       │           └── urls.yml
│   │   │   │       └── SwiftmailerExtensionTest.php
│   │   │   ├── composer.json
│   │   │   └── phpunit.xml.dist
│   │   └── symfony
│   │       ├── CHANGELOG-3.0.md
│   │       ├── CHANGELOG-3.1.md
│   │       ├── CHANGELOG-3.2.md
│   │       ├── CONTRIBUTING.md
│   │       ├── CONTRIBUTORS.md
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── UPGRADE-3.0.md
│   │       ├── UPGRADE-3.1.md
│   │       ├── UPGRADE-3.2.md
│   │       ├── UPGRADE-4.0.md
│   │       ├── appveyor.yml
│   │       ├── composer.json
│   │       ├── phpunit
│   │       ├── phpunit.xml.dist
│   │       └── src
│   │           └── Symfony
│   │               ├── Bridge
│   │               │   ├── Doctrine
│   │               │   │   ├── CHANGELOG.md
│   │               │   │   ├── CacheWarmer
│   │               │   │   │   └── ProxyCacheWarmer.php
│   │               │   │   ├── ContainerAwareEventManager.php
│   │               │   │   ├── DataCollector
│   │               │   │   │   └── DoctrineDataCollector.php
│   │               │   │   ├── DataFixtures
│   │               │   │   │   └── ContainerAwareLoader.php
│   │               │   │   ├── DependencyInjection
│   │               │   │   │   ├── AbstractDoctrineExtension.php
│   │               │   │   │   ├── CompilerPass
│   │               │   │   │   │   ├── DoctrineValidationPass.php
│   │               │   │   │   │   ├── RegisterEventListenersAndSubscribersPass.php
│   │               │   │   │   │   └── RegisterMappingsPass.php
│   │               │   │   │   └── Security
│   │               │   │   │       └── UserProvider
│   │               │   │   │           └── EntityFactory.php
│   │               │   │   ├── ExpressionLanguage
│   │               │   │   │   └── DoctrineParserCache.php
│   │               │   │   ├── Form
│   │               │   │   │   ├── ChoiceList
│   │               │   │   │   │   ├── DoctrineChoiceLoader.php
│   │               │   │   │   │   ├── EntityLoaderInterface.php
│   │               │   │   │   │   ├── IdReader.php
│   │               │   │   │   │   └── ORMQueryBuilderLoader.php
│   │               │   │   │   ├── DataTransformer
│   │               │   │   │   │   └── CollectionToArrayTransformer.php
│   │               │   │   │   ├── DoctrineOrmExtension.php
│   │               │   │   │   ├── DoctrineOrmTypeGuesser.php
│   │               │   │   │   ├── EventListener
│   │               │   │   │   │   └── MergeDoctrineCollectionListener.php
│   │               │   │   │   └── Type
│   │               │   │   │       ├── DoctrineType.php
│   │               │   │   │       └── EntityType.php
│   │               │   │   ├── HttpFoundation
│   │               │   │   │   ├── DbalSessionHandler.php
│   │               │   │   │   └── DbalSessionHandlerSchema.php
│   │               │   │   ├── LICENSE
│   │               │   │   ├── Logger
│   │               │   │   │   └── DbalLogger.php
│   │               │   │   ├── ManagerRegistry.php
│   │               │   │   ├── PropertyInfo
│   │               │   │   │   └── DoctrineExtractor.php
│   │               │   │   ├── README.md
│   │               │   │   ├── RegistryInterface.php
│   │               │   │   ├── Security
│   │               │   │   │   ├── RememberMe
│   │               │   │   │   │   └── DoctrineTokenProvider.php
│   │               │   │   │   └── User
│   │               │   │   │       ├── EntityUserProvider.php
│   │               │   │   │       └── UserLoaderInterface.php
│   │               │   │   ├── Test
│   │               │   │   │   ├── DoctrineTestHelper.php
│   │               │   │   │   └── TestRepositoryFactory.php
│   │               │   │   ├── Tests
│   │               │   │   │   ├── ContainerAwareEventManagerTest.php
│   │               │   │   │   ├── DataCollector
│   │               │   │   │   │   └── DoctrineDataCollectorTest.php
│   │               │   │   │   ├── DataFixtures
│   │               │   │   │   │   └── ContainerAwareLoaderTest.php
│   │               │   │   │   ├── DependencyInjection
│   │               │   │   │   │   ├── CompilerPass
│   │               │   │   │   │   │   ├── RegisterEventListenersAndSubscribersPassTest.php
│   │               │   │   │   │   │   └── RegisterMappingsPassTest.php
│   │               │   │   │   │   └── DoctrineExtensionTest.php
│   │               │   │   │   ├── ExpressionLanguage
│   │               │   │   │   │   └── DoctrineParserCacheTest.php
│   │               │   │   │   ├── Fixtures
│   │               │   │   │   │   ├── AssociationEntity.php
│   │               │   │   │   │   ├── AssociationEntity2.php
│   │               │   │   │   │   ├── CompositeIntIdEntity.php
│   │               │   │   │   │   ├── CompositeStringIdEntity.php
│   │               │   │   │   │   ├── ContainerAwareFixture.php
│   │               │   │   │   │   ├── DoubleNameEntity.php
│   │               │   │   │   │   ├── Embeddable
│   │               │   │   │   │   │   └── Identifier.php
│   │               │   │   │   │   ├── EmbeddedIdentifierEntity.php
│   │               │   │   │   │   ├── Employee.php
│   │               │   │   │   │   ├── GroupableEntity.php
│   │               │   │   │   │   ├── Person.php
│   │               │   │   │   │   ├── SingleAssociationToIntIdEntity.php
│   │               │   │   │   │   ├── SingleIntIdEntity.php
│   │               │   │   │   │   ├── SingleIntIdNoToStringEntity.php
│   │               │   │   │   │   ├── SingleStringCastableIdEntity.php
│   │               │   │   │   │   ├── SingleStringIdEntity.php
│   │               │   │   │   │   └── User.php
│   │               │   │   │   ├── Form
│   │               │   │   │   │   ├── ChoiceList
│   │               │   │   │   │   │   ├── DoctrineChoiceLoaderTest.php
│   │               │   │   │   │   │   └── ORMQueryBuilderLoaderTest.php
│   │               │   │   │   │   ├── DataTransformer
│   │               │   │   │   │   │   └── CollectionToArrayTransformerTest.php
│   │               │   │   │   │   ├── DoctrineOrmTypeGuesserTest.php
│   │               │   │   │   │   ├── EventListener
│   │               │   │   │   │   │   └── MergeDoctrineCollectionListenerTest.php
│   │               │   │   │   │   └── Type
│   │               │   │   │   │       ├── EntityTypePerformanceTest.php
│   │               │   │   │   │       └── EntityTypeTest.php
│   │               │   │   │   ├── HttpFoundation
│   │               │   │   │   │   └── DbalSessionHandlerTest.php
│   │               │   │   │   ├── Logger
│   │               │   │   │   │   └── DbalLoggerTest.php
│   │               │   │   │   ├── ManagerRegistryTest.php
│   │               │   │   │   ├── PropertyInfo
│   │               │   │   │   │   ├── DoctrineExtractorTest.php
│   │               │   │   │   │   └── Fixtures
│   │               │   │   │   │       ├── DoctrineDummy.php
│   │               │   │   │   │       ├── DoctrineFooType.php
│   │               │   │   │   │       ├── DoctrineRelation.php
│   │               │   │   │   │       └── Foo.php
│   │               │   │   │   ├── Security
│   │               │   │   │   │   └── User
│   │               │   │   │   │       └── EntityUserProviderTest.php
│   │               │   │   │   └── Validator
│   │               │   │   │       └── Constraints
│   │               │   │   │           └── UniqueEntityValidatorTest.php
│   │               │   │   ├── Validator
│   │               │   │   │   ├── Constraints
│   │               │   │   │   │   ├── UniqueEntity.php
│   │               │   │   │   │   └── UniqueEntityValidator.php
│   │               │   │   │   └── DoctrineInitializer.php
│   │               │   │   ├── composer.json
│   │               │   │   └── phpunit.xml.dist
│   │               │   ├── Monolog
│   │               │   │   ├── CHANGELOG.md
│   │               │   │   ├── Formatter
│   │               │   │   │   └── ConsoleFormatter.php
│   │               │   │   ├── Handler
│   │               │   │   │   ├── ChromePhpHandler.php
│   │               │   │   │   ├── ConsoleHandler.php
│   │               │   │   │   ├── DebugHandler.php
│   │               │   │   │   ├── FingersCrossed
│   │               │   │   │   │   └── NotFoundActivationStrategy.php
│   │               │   │   │   ├── FirePHPHandler.php
│   │               │   │   │   └── SwiftMailerHandler.php
│   │               │   │   ├── LICENSE
│   │               │   │   ├── Logger.php
│   │               │   │   ├── Processor
│   │               │   │   │   ├── DebugProcessor.php
│   │               │   │   │   └── WebProcessor.php
│   │               │   │   ├── README.md
│   │               │   │   ├── Tests
│   │               │   │   │   ├── Handler
│   │               │   │   │   │   ├── ConsoleHandlerTest.php
│   │               │   │   │   │   └── FingersCrossed
│   │               │   │   │   │       └── NotFoundActivationStrategyTest.php
│   │               │   │   │   ├── LoggerTest.php
│   │               │   │   │   └── Processor
│   │               │   │   │       └── WebProcessorTest.php
│   │               │   │   ├── composer.json
│   │               │   │   └── phpunit.xml.dist
│   │               │   ├── PhpUnit
│   │               │   │   ├── ClockMock.php
│   │               │   │   ├── DeprecationErrorHandler.php
│   │               │   │   ├── DnsMock.php
│   │               │   │   ├── LICENSE
│   │               │   │   ├── README.md
│   │               │   │   ├── SymfonyTestsListener.php
│   │               │   │   ├── Tests
│   │               │   │   │   ├── DeprecationErrorHandler
│   │               │   │   │   │   ├── default.phpt
│   │               │   │   │   │   ├── disabled.phpt
│   │               │   │   │   │   ├── regexp.phpt
│   │               │   │   │   │   └── weak.phpt
│   │               │   │   │   └── DnsMockTest.php
│   │               │   │   ├── TextUI
│   │               │   │   │   ├── Command.php
│   │               │   │   │   └── TestRunner.php
│   │               │   │   ├── bin
│   │               │   │   │   └── simple-phpunit
│   │               │   │   ├── bootstrap.php
│   │               │   │   ├── composer.json
│   │               │   │   └── phpunit.xml.dist
│   │               │   ├── ProxyManager
│   │               │   │   ├── CHANGELOG.md
│   │               │   │   ├── LICENSE
│   │               │   │   ├── LazyProxy
│   │               │   │   │   ├── Instantiator
│   │               │   │   │   │   └── RuntimeInstantiator.php
│   │               │   │   │   └── PhpDumper
│   │               │   │   │       └── ProxyDumper.php
│   │               │   │   ├── README.md
│   │               │   │   ├── Tests
│   │               │   │   │   └── LazyProxy
│   │               │   │   │       ├── ContainerBuilderTest.php
│   │               │   │   │       ├── Dumper
│   │               │   │   │       │   └── PhpDumperTest.php
│   │               │   │   │       ├── Fixtures
│   │               │   │   │       │   ├── includes
│   │               │   │   │       │   │   └── foo.php
│   │               │   │   │       │   └── php
│   │               │   │   │       │       ├── lazy_service.php
│   │               │   │   │       │       ├── lazy_service_structure.txt
│   │               │   │   │       │       └── lazy_service_with_hints.php
│   │               │   │   │       ├── Instantiator
│   │               │   │   │       │   └── RuntimeInstantiatorTest.php
│   │               │   │   │       └── PhpDumper
│   │               │   │   │           └── ProxyDumperTest.php
│   │               │   │   ├── composer.json
│   │               │   │   └── phpunit.xml.dist
│   │               │   └── Twig
│   │               │       ├── AppVariable.php
│   │               │       ├── CHANGELOG.md
│   │               │       ├── Command
│   │               │       │   ├── DebugCommand.php
│   │               │       │   └── LintCommand.php
│   │               │       ├── DataCollector
│   │               │       │   └── TwigDataCollector.php
│   │               │       ├── Extension
│   │               │       │   ├── AssetExtension.php
│   │               │       │   ├── CodeExtension.php
│   │               │       │   ├── DumpExtension.php
│   │               │       │   ├── ExpressionExtension.php
│   │               │       │   ├── FormExtension.php
│   │               │       │   ├── HttpFoundationExtension.php
│   │               │       │   ├── HttpKernelExtension.php
│   │               │       │   ├── HttpKernelRuntime.php
│   │               │       │   ├── LogoutUrlExtension.php
│   │               │       │   ├── ProfilerExtension.php
│   │               │       │   ├── RoutingExtension.php
│   │               │       │   ├── SecurityExtension.php
│   │               │       │   ├── StopwatchExtension.php
│   │               │       │   ├── TranslationExtension.php
│   │               │       │   ├── WorkflowExtension.php
│   │               │       │   └── YamlExtension.php
│   │               │       ├── Form
│   │               │       │   ├── TwigRenderer.php
│   │               │       │   ├── TwigRendererEngine.php
│   │               │       │   ├── TwigRendererEngineInterface.php
│   │               │       │   └── TwigRendererInterface.php
│   │               │       ├── LICENSE
│   │               │       ├── Node
│   │               │       │   ├── DumpNode.php
│   │               │       │   ├── FormThemeNode.php
│   │               │       │   ├── RenderBlockNode.php
│   │               │       │   ├── SearchAndRenderBlockNode.php
│   │               │       │   ├── StopwatchNode.php
│   │               │       │   ├── TransDefaultDomainNode.php
│   │               │       │   └── TransNode.php
│   │               │       ├── NodeVisitor
│   │               │       │   ├── Scope.php
│   │               │       │   ├── TranslationDefaultDomainNodeVisitor.php
│   │               │       │   └── TranslationNodeVisitor.php
│   │               │       ├── README.md
│   │               │       ├── Resources
│   │               │       │   └── views
│   │               │       │       └── Form
│   │               │       │           ├── bootstrap_3_horizontal_layout.html.twig
│   │               │       │           ├── bootstrap_3_layout.html.twig
│   │               │       │           ├── form_div_layout.html.twig
│   │               │       │           ├── form_table_layout.html.twig
│   │               │       │           └── foundation_5_layout.html.twig
│   │               │       ├── Tests
│   │               │       │   ├── AppVariableTest.php
│   │               │       │   ├── Command
│   │               │       │   │   └── LintCommandTest.php
│   │               │       │   ├── Extension
│   │               │       │   │   ├── CodeExtensionTest.php
│   │               │       │   │   ├── DumpExtensionTest.php
│   │               │       │   │   ├── ExpressionExtensionTest.php
│   │               │       │   │   ├── Fixtures
│   │               │       │   │   │   ├── StubFilesystemLoader.php
│   │               │       │   │   │   ├── StubTranslator.php
│   │               │       │   │   │   └── templates
│   │               │       │   │   │       └── form
│   │               │       │   │   │           ├── child_label.html.twig
│   │               │       │   │   │           ├── custom_widgets.html.twig
│   │               │       │   │   │           ├── page_dynamic_extends.html.twig
│   │               │       │   │   │           ├── parent_label.html.twig
│   │               │       │   │   │           ├── theme.html.twig
│   │               │       │   │   │           ├── theme_extends.html.twig
│   │               │       │   │   │           └── theme_use.html.twig
│   │               │       │   │   ├── FormExtensionBootstrap3HorizontalLayoutTest.php
│   │               │       │   │   ├── FormExtensionBootstrap3LayoutTest.php
│   │               │       │   │   ├── FormExtensionDivLayoutTest.php
│   │               │       │   │   ├── FormExtensionTableLayoutTest.php
│   │               │       │   │   ├── HttpFoundationExtensionTest.php
│   │               │       │   │   ├── HttpKernelExtensionTest.php
│   │               │       │   │   ├── RoutingExtensionTest.php
│   │               │       │   │   ├── RuntimeLoaderProvider.php
│   │               │       │   │   ├── StopwatchExtensionTest.php
│   │               │       │   │   └── TranslationExtensionTest.php
│   │               │       │   ├── Fixtures
│   │               │       │   │   └── extractor
│   │               │       │   │       ├── syntax_error.twig
│   │               │       │   │       └── with_translations.html.twig
│   │               │       │   ├── Node
│   │               │       │   │   ├── DumpNodeTest.php
│   │               │       │   │   ├── FormThemeTest.php
│   │               │       │   │   ├── SearchAndRenderBlockNodeTest.php
│   │               │       │   │   └── TransNodeTest.php
│   │               │       │   ├── NodeVisitor
│   │               │       │   │   ├── ScopeTest.php
│   │               │       │   │   ├── TranslationDefaultDomainNodeVisitorTest.php
│   │               │       │   │   ├── TranslationNodeVisitorTest.php
│   │               │       │   │   └── TwigNodeProvider.php
│   │               │       │   ├── TokenParser
│   │               │       │   │   └── FormThemeTokenParserTest.php
│   │               │       │   ├── Translation
│   │               │       │   │   └── TwigExtractorTest.php
│   │               │       │   └── TwigEngineTest.php
│   │               │       ├── TokenParser
│   │               │       │   ├── DumpTokenParser.php
│   │               │       │   ├── FormThemeTokenParser.php
│   │               │       │   ├── StopwatchTokenParser.php
│   │               │       │   ├── TransChoiceTokenParser.php
│   │               │       │   ├── TransDefaultDomainTokenParser.php
│   │               │       │   └── TransTokenParser.php
│   │               │       ├── Translation
│   │               │       │   └── TwigExtractor.php
│   │               │       ├── TwigEngine.php
│   │               │       ├── composer.json
│   │               │       └── phpunit.xml.dist
│   │               ├── Bundle
│   │               │   ├── DebugBundle
│   │               │   │   ├── DebugBundle.php
│   │               │   │   ├── DependencyInjection
│   │               │   │   │   ├── Compiler
│   │               │   │   │   │   └── DumpDataCollectorPass.php
│   │               │   │   │   ├── Configuration.php
│   │               │   │   │   └── DebugExtension.php
│   │               │   │   ├── LICENSE
│   │               │   │   ├── Resources
│   │               │   │   │   ├── config
│   │               │   │   │   │   ├── schema
│   │               │   │   │   │   │   └── debug-1.0.xsd
│   │               │   │   │   │   └── services.xml
│   │               │   │   │   └── views
│   │               │   │   │       └── Profiler
│   │               │   │   │           ├── dump.html.twig
│   │               │   │   │           └── icon.svg
│   │               │   │   ├── Tests
│   │               │   │   │   └── DependencyInjection
│   │               │   │   │       ├── Compiler
│   │               │   │   │       │   └── DumpDataCollectorPassTest.php
│   │               │   │   │       └── DebugExtensionTest.php
│   │               │   │   ├── composer.json
│   │               │   │   └── phpunit.xml.dist
│   │               │   ├── FrameworkBundle
│   │               │   │   ├── CHANGELOG.md
│   │               │   │   ├── CacheWarmer
│   │               │   │   │   ├── AnnotationsCacheWarmer.php
│   │               │   │   │   ├── ClassCacheCacheWarmer.php
│   │               │   │   │   ├── RouterCacheWarmer.php
│   │               │   │   │   ├── SerializerCacheWarmer.php
│   │               │   │   │   ├── TemplateFinder.php
│   │               │   │   │   ├── TemplateFinderInterface.php
│   │               │   │   │   ├── TemplatePathsCacheWarmer.php
│   │               │   │   │   ├── TranslationsCacheWarmer.php
│   │               │   │   │   └── ValidatorCacheWarmer.php
│   │               │   │   ├── Client.php
│   │               │   │   ├── Command
│   │               │   │   │   ├── AbstractConfigCommand.php
│   │               │   │   │   ├── AssetsInstallCommand.php
│   │               │   │   │   ├── CacheClearCommand.php
│   │               │   │   │   ├── CachePoolClearCommand.php
│   │               │   │   │   ├── CacheWarmupCommand.php
│   │               │   │   │   ├── ConfigDebugCommand.php
│   │               │   │   │   ├── ConfigDumpReferenceCommand.php
│   │               │   │   │   ├── ContainerAwareCommand.php
│   │               │   │   │   ├── ContainerDebugCommand.php
│   │               │   │   │   ├── EventDispatcherDebugCommand.php
│   │               │   │   │   ├── RouterDebugCommand.php
│   │               │   │   │   ├── RouterMatchCommand.php
│   │               │   │   │   ├── ServerCommand.php
│   │               │   │   │   ├── ServerRunCommand.php
│   │               │   │   │   ├── ServerStartCommand.php
│   │               │   │   │   ├── ServerStatusCommand.php
│   │               │   │   │   ├── ServerStopCommand.php
│   │               │   │   │   ├── TranslationDebugCommand.php
│   │               │   │   │   ├── TranslationUpdateCommand.php
│   │               │   │   │   ├── WorkflowDumpCommand.php
│   │               │   │   │   └── YamlLintCommand.php
│   │               │   │   ├── Console
│   │               │   │   │   ├── Application.php
│   │               │   │   │   ├── Descriptor
│   │               │   │   │   │   ├── Descriptor.php
│   │               │   │   │   │   ├── JsonDescriptor.php
│   │               │   │   │   │   ├── MarkdownDescriptor.php
│   │               │   │   │   │   ├── TextDescriptor.php
│   │               │   │   │   │   └── XmlDescriptor.php
│   │               │   │   │   └── Helper
│   │               │   │   │       └── DescriptorHelper.php
│   │               │   │   ├── Controller
│   │               │   │   │   ├── Controller.php
│   │               │   │   │   ├── ControllerNameParser.php
│   │               │   │   │   ├── ControllerResolver.php
│   │               │   │   │   ├── RedirectController.php
│   │               │   │   │   └── TemplateController.php
│   │               │   │   ├── DataCollector
│   │               │   │   │   ├── RequestDataCollector.php
│   │               │   │   │   └── RouterDataCollector.php
│   │               │   │   ├── DependencyInjection
│   │               │   │   │   ├── Compiler
│   │               │   │   │   │   ├── AddCacheClearerPass.php
│   │               │   │   │   │   ├── AddCacheWarmerPass.php
│   │               │   │   │   │   ├── AddConsoleCommandPass.php
│   │               │   │   │   │   ├── AddConstraintValidatorsPass.php
│   │               │   │   │   │   ├── AddDebugLogProcessorPass.php
│   │               │   │   │   │   ├── AddExpressionLanguageProvidersPass.php
│   │               │   │   │   │   ├── AddValidatorInitializersPass.php
│   │               │   │   │   │   ├── CachePoolClearerPass.php
│   │               │   │   │   │   ├── CachePoolPass.php
│   │               │   │   │   │   ├── CompilerDebugDumpPass.php
│   │               │   │   │   │   ├── ConfigCachePass.php
│   │               │   │   │   │   ├── ContainerBuilderDebugDumpPass.php
│   │               │   │   │   │   ├── ControllerArgumentValueResolverPass.php
│   │               │   │   │   │   ├── FormPass.php
│   │               │   │   │   │   ├── LoggingTranslatorPass.php
│   │               │   │   │   │   ├── ProfilerPass.php
│   │               │   │   │   │   ├── PropertyInfoPass.php
│   │               │   │   │   │   ├── RoutingResolverPass.php
│   │               │   │   │   │   ├── SerializerPass.php
│   │               │   │   │   │   ├── TemplatingPass.php
│   │               │   │   │   │   ├── TranslationDumperPass.php
│   │               │   │   │   │   ├── TranslationExtractorPass.php
│   │               │   │   │   │   ├── TranslatorPass.php
│   │               │   │   │   │   ├── UnusedTagsPass.php
│   │               │   │   │   │   └── ValidateWorkflowsPass.php
│   │               │   │   │   ├── Configuration.php
│   │               │   │   │   └── FrameworkExtension.php
│   │               │   │   ├── EventListener
│   │               │   │   │   ├── SessionListener.php
│   │               │   │   │   └── TestSessionListener.php
│   │               │   │   ├── FrameworkBundle.php
│   │               │   │   ├── HttpCache
│   │               │   │   │   └── HttpCache.php
│   │               │   │   ├── Kernel
│   │               │   │   │   └── MicroKernelTrait.php
│   │               │   │   ├── LICENSE
│   │               │   │   ├── README.md
│   │               │   │   ├── Resources
│   │               │   │   │   ├── config
│   │               │   │   │   │   ├── annotations.xml
│   │               │   │   │   │   ├── assets.xml
│   │               │   │   │   │   ├── cache.xml
│   │               │   │   │   │   ├── collectors.xml
│   │               │   │   │   │   ├── debug.xml
│   │               │   │   │   │   ├── debug_prod.xml
│   │               │   │   │   │   ├── esi.xml
│   │               │   │   │   │   ├── form.xml
│   │               │   │   │   │   ├── form_csrf.xml
│   │               │   │   │   │   ├── form_debug.xml
│   │               │   │   │   │   ├── fragment_listener.xml
│   │               │   │   │   │   ├── fragment_renderer.xml
│   │               │   │   │   │   ├── profiling.xml
│   │               │   │   │   │   ├── property_access.xml
│   │               │   │   │   │   ├── property_info.xml
│   │               │   │   │   │   ├── request.xml
│   │               │   │   │   │   ├── router_dev.php
│   │               │   │   │   │   ├── router_prod.php
│   │               │   │   │   │   ├── router_test.php
│   │               │   │   │   │   ├── routing.xml
│   │               │   │   │   │   ├── schema
│   │               │   │   │   │   │   └── symfony-1.0.xsd
│   │               │   │   │   │   ├── security_csrf.xml
│   │               │   │   │   │   ├── serializer.xml
│   │               │   │   │   │   ├── services.xml
│   │               │   │   │   │   ├── session.xml
│   │               │   │   │   │   ├── ssi.xml
│   │               │   │   │   │   ├── templating.xml
│   │               │   │   │   │   ├── templating_debug.xml
│   │               │   │   │   │   ├── templating_php.xml
│   │               │   │   │   │   ├── test.xml
│   │               │   │   │   │   ├── translation.xml
│   │               │   │   │   │   ├── translation_debug.xml
│   │               │   │   │   │   ├── validator.xml
│   │               │   │   │   │   ├── web.xml
│   │               │   │   │   │   └── workflow.xml
│   │               │   │   │   └── views
│   │               │   │   │       ├── Form
│   │               │   │   │       │   ├── attributes.html.php
│   │               │   │   │       │   ├── button_attributes.html.php
│   │               │   │   │       │   ├── button_label.html.php
│   │               │   │   │       │   ├── button_row.html.php
│   │               │   │   │       │   ├── button_widget.html.php
│   │               │   │   │       │   ├── checkbox_widget.html.php
│   │               │   │   │       │   ├── choice_attributes.html.php
│   │               │   │   │       │   ├── choice_options.html.php
│   │               │   │   │       │   ├── choice_widget.html.php
│   │               │   │   │       │   ├── choice_widget_collapsed.html.php
│   │               │   │   │       │   ├── choice_widget_expanded.html.php
│   │               │   │   │       │   ├── choice_widget_options.html.php
│   │               │   │   │       │   ├── collection_widget.html.php
│   │               │   │   │       │   ├── container_attributes.html.php
│   │               │   │   │       │   ├── date_widget.html.php
│   │               │   │   │       │   ├── datetime_widget.html.php
│   │               │   │   │       │   ├── email_widget.html.php
│   │               │   │   │       │   ├── form.html.php
│   │               │   │   │       │   ├── form_enctype.html.php
│   │               │   │   │       │   ├── form_end.html.php
│   │               │   │   │       │   ├── form_errors.html.php
│   │               │   │   │       │   ├── form_label.html.php
│   │               │   │   │       │   ├── form_rest.html.php
│   │               │   │   │       │   ├── form_row.html.php
│   │               │   │   │       │   ├── form_rows.html.php
│   │               │   │   │       │   ├── form_start.html.php
│   │               │   │   │       │   ├── form_widget.html.php
│   │               │   │   │       │   ├── form_widget_compound.html.php
│   │               │   │   │       │   ├── form_widget_simple.html.php
│   │               │   │   │       │   ├── hidden_row.html.php
│   │               │   │   │       │   ├── hidden_widget.html.php
│   │               │   │   │       │   ├── integer_widget.html.php
│   │               │   │   │       │   ├── money_widget.html.php
│   │               │   │   │       │   ├── number_widget.html.php
│   │               │   │   │       │   ├── password_widget.html.php
│   │               │   │   │       │   ├── percent_widget.html.php
│   │               │   │   │       │   ├── radio_widget.html.php
│   │               │   │   │       │   ├── range_widget.html.php
│   │               │   │   │       │   ├── repeated_row.html.php
│   │               │   │   │       │   ├── reset_widget.html.php
│   │               │   │   │       │   ├── search_widget.html.php
│   │               │   │   │       │   ├── submit_widget.html.php
│   │               │   │   │       │   ├── textarea_widget.html.php
│   │               │   │   │       │   ├── time_widget.html.php
│   │               │   │   │       │   ├── url_widget.html.php
│   │               │   │   │       │   ├── widget_attributes.html.php
│   │               │   │   │       │   └── widget_container_attributes.html.php
│   │               │   │   │       └── FormTable
│   │               │   │   │           ├── button_row.html.php
│   │               │   │   │           ├── form_row.html.php
│   │               │   │   │           ├── form_widget_compound.html.php
│   │               │   │   │           └── hidden_row.html.php
│   │               │   │   ├── Routing
│   │               │   │   │   ├── DelegatingLoader.php
│   │               │   │   │   ├── RedirectableUrlMatcher.php
│   │               │   │   │   └── Router.php
│   │               │   │   ├── Templating
│   │               │   │   │   ├── DelegatingEngine.php
│   │               │   │   │   ├── EngineInterface.php
│   │               │   │   │   ├── GlobalVariables.php
│   │               │   │   │   ├── Helper
│   │               │   │   │   │   ├── ActionsHelper.php
│   │               │   │   │   │   ├── AssetsHelper.php
│   │               │   │   │   │   ├── CodeHelper.php
│   │               │   │   │   │   ├── FormHelper.php
│   │               │   │   │   │   ├── RequestHelper.php
│   │               │   │   │   │   ├── RouterHelper.php
│   │               │   │   │   │   ├── SessionHelper.php
│   │               │   │   │   │   ├── StopwatchHelper.php
│   │               │   │   │   │   └── TranslatorHelper.php
│   │               │   │   │   ├── Loader
│   │               │   │   │   │   ├── FilesystemLoader.php
│   │               │   │   │   │   └── TemplateLocator.php
│   │               │   │   │   ├── PhpEngine.php
│   │               │   │   │   ├── TemplateFilenameParser.php
│   │               │   │   │   ├── TemplateNameParser.php
│   │               │   │   │   ├── TemplateReference.php
│   │               │   │   │   └── TimedPhpEngine.php
│   │               │   │   ├── Test
│   │               │   │   │   ├── KernelTestCase.php
│   │               │   │   │   └── WebTestCase.php
│   │               │   │   ├── Tests
│   │               │   │   │   ├── CacheWarmer
│   │               │   │   │   │   ├── ClassCacheCacheWarmerTest.php
│   │               │   │   │   │   ├── SerializerCacheWarmerTest.php
│   │               │   │   │   │   ├── TemplateFinderTest.php
│   │               │   │   │   │   ├── TemplatePathsCacheWarmerTest.php
│   │               │   │   │   │   └── ValidatorCacheWarmerTest.php
│   │               │   │   │   ├── ClientTest.php
│   │               │   │   │   ├── Command
│   │               │   │   │   │   ├── CacheClearCommand
│   │               │   │   │   │   │   ├── CacheClearCommandTest.php
│   │               │   │   │   │   │   └── Fixture
│   │               │   │   │   │   │       ├── TestAppKernel.php
│   │               │   │   │   │   │       └── config.yml
│   │               │   │   │   │   ├── RouterDebugCommandTest.php
│   │               │   │   │   │   ├── RouterMatchCommandTest.php
│   │               │   │   │   │   ├── TranslationDebugCommandTest.php
│   │               │   │   │   │   ├── TranslationUpdateCommandTest.php
│   │               │   │   │   │   └── YamlLintCommandTest.php
│   │               │   │   │   ├── Console
│   │               │   │   │   │   ├── ApplicationTest.php
│   │               │   │   │   │   └── Descriptor
│   │               │   │   │   │       ├── AbstractDescriptorTest.php
│   │               │   │   │   │       ├── JsonDescriptorTest.php
│   │               │   │   │   │       ├── MarkdownDescriptorTest.php
│   │               │   │   │   │       ├── ObjectsProvider.php
│   │               │   │   │   │       ├── TextDescriptorTest.php
│   │               │   │   │   │       └── XmlDescriptorTest.php
│   │               │   │   │   ├── Controller
│   │               │   │   │   │   ├── ControllerNameParserTest.php
│   │               │   │   │   │   ├── ControllerResolverTest.php
│   │               │   │   │   │   ├── ControllerTest.php
│   │               │   │   │   │   ├── RedirectControllerTest.php
│   │               │   │   │   │   └── TemplateControllerTest.php
│   │               │   │   │   ├── DependencyInjection
│   │               │   │   │   │   ├── Compiler
│   │               │   │   │   │   │   ├── AddCacheWarmerPassTest.php
│   │               │   │   │   │   │   ├── AddConsoleCommandPassTest.php
│   │               │   │   │   │   │   ├── AddConstraintValidatorsPassTest.php
│   │               │   │   │   │   │   ├── AddExpressionLanguageProvidersPassTest.php
│   │               │   │   │   │   │   ├── CachePoolClearerPassTest.php
│   │               │   │   │   │   │   ├── CachePoolPassTest.php
│   │               │   │   │   │   │   ├── ConfigCachePassTest.php
│   │               │   │   │   │   │   ├── ControllerArgumentValueResolverPassTest.php
│   │               │   │   │   │   │   ├── FormPassTest.php
│   │               │   │   │   │   │   ├── LoggingTranslatorPassTest.php
│   │               │   │   │   │   │   ├── ProfilerPassTest.php
│   │               │   │   │   │   │   ├── PropertyInfoPassTest.php
│   │               │   │   │   │   │   ├── SerializerPassTest.php
│   │               │   │   │   │   │   ├── TranslatorPassTest.php
│   │               │   │   │   │   │   └── UnusedTagsPassTest.php
│   │               │   │   │   │   ├── ConfigurationTest.php
│   │               │   │   │   │   ├── Fixtures
│   │               │   │   │   │   │   ├── CustomPathBundle
│   │               │   │   │   │   │   │   ├── Resources
│   │               │   │   │   │   │   │   │   └── config
│   │               │   │   │   │   │   │   │       ├── validation.xml
│   │               │   │   │   │   │   │   │       └── validation.yml
│   │               │   │   │   │   │   │   └── src
│   │               │   │   │   │   │   │       └── CustomPathBundle.php
│   │               │   │   │   │   │   ├── TestBundle
│   │               │   │   │   │   │   │   ├── Resources
│   │               │   │   │   │   │   │   │   └── config
│   │               │   │   │   │   │   │   │       ├── validation.xml
│   │               │   │   │   │   │   │   │       └── validation.yml
│   │               │   │   │   │   │   │   └── TestBundle.php
│   │               │   │   │   │   │   ├── php
│   │               │   │   │   │   │   │   ├── assets.php
│   │               │   │   │   │   │   │   ├── assets_version_strategy_as_service.php
│   │               │   │   │   │   │   │   ├── cache.php
│   │               │   │   │   │   │   │   ├── cache_env_var.php
│   │               │   │   │   │   │   │   ├── csrf.php
│   │               │   │   │   │   │   │   ├── csrf_needs_session.php
│   │               │   │   │   │   │   │   ├── default_config.php
│   │               │   │   │   │   │   │   ├── form_no_csrf.php
│   │               │   │   │   │   │   │   ├── full.php
│   │               │   │   │   │   │   │   ├── profiler.php
│   │               │   │   │   │   │   │   ├── property_accessor.php
│   │               │   │   │   │   │   │   ├── property_info.php
│   │               │   │   │   │   │   │   ├── request.php
│   │               │   │   │   │   │   │   ├── serializer_disabled.php
│   │               │   │   │   │   │   │   ├── serializer_enabled.php
│   │               │   │   │   │   │   │   ├── serializer_legacy_cache.php
│   │               │   │   │   │   │   │   ├── session.php
│   │               │   │   │   │   │   │   ├── templating_disabled.php
│   │               │   │   │   │   │   │   ├── templating_no_assets.php
│   │               │   │   │   │   │   │   ├── templating_php_assets_disabled.php
│   │               │   │   │   │   │   │   ├── translator_fallbacks.php
│   │               │   │   │   │   │   │   ├── validation_annotations.php
│   │               │   │   │   │   │   │   ├── validation_multiple_static_methods.php
│   │               │   │   │   │   │   │   ├── validation_no_static_method.php
│   │               │   │   │   │   │   │   ├── workflow_with_arguments_and_service.php
│   │               │   │   │   │   │   │   ├── workflow_with_multiple_transitions_with_same_name.php
│   │               │   │   │   │   │   │   ├── workflow_with_type_and_service.php
│   │               │   │   │   │   │   │   └── workflows.php
│   │               │   │   │   │   │   ├── translations
│   │               │   │   │   │   │   │   └── test_paths.en.yml
│   │               │   │   │   │   │   ├── xml
│   │               │   │   │   │   │   │   ├── assets.xml
│   │               │   │   │   │   │   │   ├── assets_version_strategy_as_service.xml
│   │               │   │   │   │   │   │   ├── cache.xml
│   │               │   │   │   │   │   │   ├── cache_env_var.xml
│   │               │   │   │   │   │   │   ├── csrf.xml
│   │               │   │   │   │   │   │   ├── csrf_disabled.xml
│   │               │   │   │   │   │   │   ├── csrf_needs_session.xml
│   │               │   │   │   │   │   │   ├── default_config.xml
│   │               │   │   │   │   │   │   ├── form_csrf_sets_field_name.xml
│   │               │   │   │   │   │   │   ├── form_csrf_under_form_sets_field_name.xml
│   │               │   │   │   │   │   │   ├── form_no_csrf.xml
│   │               │   │   │   │   │   │   ├── full.xml
│   │               │   │   │   │   │   │   ├── profiler.xml
│   │               │   │   │   │   │   │   ├── property_accessor.xml
│   │               │   │   │   │   │   │   ├── property_info.xml
│   │               │   │   │   │   │   │   ├── request.xml
│   │               │   │   │   │   │   │   ├── serializer_disabled.xml
│   │               │   │   │   │   │   │   ├── serializer_enabled.xml
│   │               │   │   │   │   │   │   ├── serializer_legacy_cache.xml
│   │               │   │   │   │   │   │   ├── session.xml
│   │               │   │   │   │   │   │   ├── templating_disabled.xml
│   │               │   │   │   │   │   │   ├── templating_no_assets.xml
│   │               │   │   │   │   │   │   ├── translator_fallbacks.xml
│   │               │   │   │   │   │   │   ├── validation_annotations.xml
│   │               │   │   │   │   │   │   ├── validation_multiple_static_methods.xml
│   │               │   │   │   │   │   │   ├── validation_no_static_method.xml
│   │               │   │   │   │   │   │   ├── workflow_with_arguments_and_service.xml
│   │               │   │   │   │   │   │   ├── workflow_with_multiple_transitions_with_same_name.xml
│   │               │   │   │   │   │   │   ├── workflow_with_type_and_service.xml
│   │               │   │   │   │   │   │   └── workflows.xml
│   │               │   │   │   │   │   └── yml
│   │               │   │   │   │   │       ├── assets.yml
│   │               │   │   │   │   │       ├── assets_version_strategy_as_service.yml
│   │               │   │   │   │   │       ├── cache.yml
│   │               │   │   │   │   │       ├── cache_env_var.yml
│   │               │   │   │   │   │       ├── csrf.yml
│   │               │   │   │   │   │       ├── csrf_needs_session.yml
│   │               │   │   │   │   │       ├── default_config.yml
│   │               │   │   │   │   │       ├── form_no_csrf.yml
│   │               │   │   │   │   │       ├── full.yml
│   │               │   │   │   │   │       ├── profiler.yml
│   │               │   │   │   │   │       ├── property_accessor.yml
│   │               │   │   │   │   │       ├── property_info.yml
│   │               │   │   │   │   │       ├── request.yml
│   │               │   │   │   │   │       ├── serializer_disabled.yml
│   │               │   │   │   │   │       ├── serializer_enabled.yml
│   │               │   │   │   │   │       ├── serializer_legacy_cache.yml
│   │               │   │   │   │   │       ├── session.yml
│   │               │   │   │   │   │       ├── templating_disabled.yml
│   │               │   │   │   │   │       ├── templating_no_assets.yml
│   │               │   │   │   │   │       ├── templating_php_assets_disabled.yml
│   │               │   │   │   │   │       ├── translator_fallbacks.yml
│   │               │   │   │   │   │       ├── validation_annotations.yml
│   │               │   │   │   │   │       ├── validation_multiple_static_methods.yml
│   │               │   │   │   │   │       ├── validation_no_static_method.yml
│   │               │   │   │   │   │       ├── workflow_with_arguments_and_service.yml
│   │               │   │   │   │   │       ├── workflow_with_multiple_transitions_with_same_name.yml
│   │               │   │   │   │   │       ├── workflow_with_type_and_service.yml
│   │               │   │   │   │   │       └── workflows.yml
│   │               │   │   │   │   ├── FrameworkExtensionTest.php
│   │               │   │   │   │   ├── PhpFrameworkExtensionTest.php
│   │               │   │   │   │   ├── XmlFrameworkExtensionTest.php
│   │               │   │   │   │   └── YamlFrameworkExtensionTest.php
│   │               │   │   │   ├── Fixtures
│   │               │   │   │   │   ├── BaseBundle
│   │               │   │   │   │   │   ├── BaseBundle.php
│   │               │   │   │   │   │   └── Resources
│   │               │   │   │   │   │       └── views
│   │               │   │   │   │   │           ├── base.format.engine
│   │               │   │   │   │   │           ├── controller
│   │               │   │   │   │   │           │   └── base.format.engine
│   │               │   │   │   │   │           └── this.is.a.template.format.engine
│   │               │   │   │   │   ├── DeclaredClass.php
│   │               │   │   │   │   ├── Descriptor
│   │               │   │   │   │   │   ├── alias_1.json
│   │               │   │   │   │   │   ├── alias_1.md
│   │               │   │   │   │   │   ├── alias_1.txt
│   │               │   │   │   │   │   ├── alias_1.xml
│   │               │   │   │   │   │   ├── alias_2.json
│   │               │   │   │   │   │   ├── alias_2.md
│   │               │   │   │   │   │   ├── alias_2.txt
│   │               │   │   │   │   │   ├── alias_2.xml
│   │               │   │   │   │   │   ├── array_parameter.json
│   │               │   │   │   │   │   ├── array_parameter.md
│   │               │   │   │   │   │   ├── array_parameter.txt
│   │               │   │   │   │   │   ├── array_parameter.xml
│   │               │   │   │   │   │   ├── builder_1_public.json
│   │               │   │   │   │   │   ├── builder_1_public.md
│   │               │   │   │   │   │   ├── builder_1_public.txt
│   │               │   │   │   │   │   ├── builder_1_public.xml
│   │               │   │   │   │   │   ├── builder_1_services.json
│   │               │   │   │   │   │   ├── builder_1_services.md
│   │               │   │   │   │   │   ├── builder_1_services.txt
│   │               │   │   │   │   │   ├── builder_1_services.xml
│   │               │   │   │   │   │   ├── builder_1_tag1.json
│   │               │   │   │   │   │   ├── builder_1_tag1.md
│   │               │   │   │   │   │   ├── builder_1_tag1.txt
│   │               │   │   │   │   │   ├── builder_1_tag1.xml
│   │               │   │   │   │   │   ├── builder_1_tags.json
│   │               │   │   │   │   │   ├── builder_1_tags.md
│   │               │   │   │   │   │   ├── builder_1_tags.txt
│   │               │   │   │   │   │   ├── builder_1_tags.xml
│   │               │   │   │   │   │   ├── callable_1.json
│   │               │   │   │   │   │   ├── callable_1.md
│   │               │   │   │   │   │   ├── callable_1.txt
│   │               │   │   │   │   │   ├── callable_1.xml
│   │               │   │   │   │   │   ├── callable_2.json
│   │               │   │   │   │   │   ├── callable_2.md
│   │               │   │   │   │   │   ├── callable_2.txt
│   │               │   │   │   │   │   ├── callable_2.xml
│   │               │   │   │   │   │   ├── callable_3.json
│   │               │   │   │   │   │   ├── callable_3.md
│   │               │   │   │   │   │   ├── callable_3.txt
│   │               │   │   │   │   │   ├── callable_3.xml
│   │               │   │   │   │   │   ├── callable_4.json
│   │               │   │   │   │   │   ├── callable_4.md
│   │               │   │   │   │   │   ├── callable_4.txt
│   │               │   │   │   │   │   ├── callable_4.xml
│   │               │   │   │   │   │   ├── callable_5.json
│   │               │   │   │   │   │   ├── callable_5.md
│   │               │   │   │   │   │   ├── callable_5.txt
│   │               │   │   │   │   │   ├── callable_5.xml
│   │               │   │   │   │   │   ├── callable_6.json
│   │               │   │   │   │   │   ├── callable_6.md
│   │               │   │   │   │   │   ├── callable_6.txt
│   │               │   │   │   │   │   ├── callable_6.xml
│   │               │   │   │   │   │   ├── callable_7.json
│   │               │   │   │   │   │   ├── callable_7.md
│   │               │   │   │   │   │   ├── callable_7.txt
│   │               │   │   │   │   │   ├── callable_7.xml
│   │               │   │   │   │   │   ├── definition_1.json
│   │               │   │   │   │   │   ├── definition_1.md
│   │               │   │   │   │   │   ├── definition_1.txt
│   │               │   │   │   │   │   ├── definition_1.xml
│   │               │   │   │   │   │   ├── definition_2.json
│   │               │   │   │   │   │   ├── definition_2.md
│   │               │   │   │   │   │   ├── definition_2.txt
│   │               │   │   │   │   │   ├── definition_2.xml
│   │               │   │   │   │   │   ├── event_dispatcher_1_event1.json
│   │               │   │   │   │   │   ├── event_dispatcher_1_event1.md
│   │               │   │   │   │   │   ├── event_dispatcher_1_event1.txt
│   │               │   │   │   │   │   ├── event_dispatcher_1_event1.xml
│   │               │   │   │   │   │   ├── event_dispatcher_1_events.json
│   │               │   │   │   │   │   ├── event_dispatcher_1_events.md
│   │               │   │   │   │   │   ├── event_dispatcher_1_events.txt
│   │               │   │   │   │   │   ├── event_dispatcher_1_events.xml
│   │               │   │   │   │   │   ├── parameter.json
│   │               │   │   │   │   │   ├── parameter.md
│   │               │   │   │   │   │   ├── parameter.txt
│   │               │   │   │   │   │   ├── parameter.xml
│   │               │   │   │   │   │   ├── parameters_1.json
│   │               │   │   │   │   │   ├── parameters_1.md
│   │               │   │   │   │   │   ├── parameters_1.txt
│   │               │   │   │   │   │   ├── parameters_1.xml
│   │               │   │   │   │   │   ├── route_1.json
│   │               │   │   │   │   │   ├── route_1.md
│   │               │   │   │   │   │   ├── route_1.txt
│   │               │   │   │   │   │   ├── route_1.xml
│   │               │   │   │   │   │   ├── route_2.json
│   │               │   │   │   │   │   ├── route_2.md
│   │               │   │   │   │   │   ├── route_2.txt
│   │               │   │   │   │   │   ├── route_2.xml
│   │               │   │   │   │   │   ├── route_collection_1.json
│   │               │   │   │   │   │   ├── route_collection_1.md
│   │               │   │   │   │   │   ├── route_collection_1.txt
│   │               │   │   │   │   │   └── route_collection_1.xml
│   │               │   │   │   │   ├── Resources
│   │               │   │   │   │   │   ├── BaseBundle
│   │               │   │   │   │   │   │   └── views
│   │               │   │   │   │   │   │       ├── base.format.engine
│   │               │   │   │   │   │   │       └── controller
│   │               │   │   │   │   │   │           └── custom.format.engine
│   │               │   │   │   │   │   ├── translations
│   │               │   │   │   │   │   │   └── messages.fr.yml
│   │               │   │   │   │   │   └── views
│   │               │   │   │   │   │       ├── resource.format.engine
│   │               │   │   │   │   │       ├── this.is.a.template.format.engine
│   │               │   │   │   │   │       └── translation.html.php
│   │               │   │   │   │   ├── Serialization
│   │               │   │   │   │   │   ├── Author.php
│   │               │   │   │   │   │   ├── Person.php
│   │               │   │   │   │   │   └── Resources
│   │               │   │   │   │   │       ├── author.yml
│   │               │   │   │   │   │       └── person.xml
│   │               │   │   │   │   ├── TemplatePathsCache
│   │               │   │   │   │   │   ├── templates-empty.php
│   │               │   │   │   │   │   └── templates.php
│   │               │   │   │   │   ├── TestBundle
│   │               │   │   │   │   │   ├── Fabpot
│   │               │   │   │   │   │   │   └── FooBundle
│   │               │   │   │   │   │   │       ├── Controller
│   │               │   │   │   │   │   │       │   └── DefaultController.php
│   │               │   │   │   │   │   │       └── FabpotFooBundle.php
│   │               │   │   │   │   │   ├── FooBundle
│   │               │   │   │   │   │   │   ├── Controller
│   │               │   │   │   │   │   │   │   ├── DefaultController.php
│   │               │   │   │   │   │   │   │   ├── Sub
│   │               │   │   │   │   │   │   │   │   └── DefaultController.php
│   │               │   │   │   │   │   │   │   └── Test
│   │               │   │   │   │   │   │   │       └── DefaultController.php
│   │               │   │   │   │   │   │   └── FooBundle.php
│   │               │   │   │   │   │   └── Sensio
│   │               │   │   │   │   │       ├── Cms
│   │               │   │   │   │   │       │   └── FooBundle
│   │               │   │   │   │   │       │       ├── Controller
│   │               │   │   │   │   │       │       │   └── DefaultController.php
│   │               │   │   │   │   │       │       └── SensioCmsFooBundle.php
│   │               │   │   │   │   │       └── FooBundle
│   │               │   │   │   │   │           ├── Controller
│   │               │   │   │   │   │           │   └── DefaultController.php
│   │               │   │   │   │   │           └── SensioFooBundle.php
│   │               │   │   │   │   ├── Validation
│   │               │   │   │   │   │   ├── Article.php
│   │               │   │   │   │   │   ├── Author.php
│   │               │   │   │   │   │   ├── Category.php
│   │               │   │   │   │   │   ├── Person.php
│   │               │   │   │   │   │   ├── Resources
│   │               │   │   │   │   │   │   ├── author.yml
│   │               │   │   │   │   │   │   ├── categories.yml
│   │               │   │   │   │   │   │   └── person.xml
│   │               │   │   │   │   │   └── SubCategory.php
│   │               │   │   │   │   ├── WarmedClass.php
│   │               │   │   │   │   └── templates.php
│   │               │   │   │   ├── Functional
│   │               │   │   │   │   ├── AutowiringTypesTest.php
│   │               │   │   │   │   ├── Bundle
│   │               │   │   │   │   │   └── TestBundle
│   │               │   │   │   │   │       ├── AutowiringTypes
│   │               │   │   │   │   │       │   └── AutowiredServices.php
│   │               │   │   │   │   │       ├── Controller
│   │               │   │   │   │   │       │   ├── FragmentController.php
│   │               │   │   │   │   │       │   ├── ProfilerController.php
│   │               │   │   │   │   │       │   ├── SessionController.php
│   │               │   │   │   │   │       │   └── SubRequestController.php
│   │               │   │   │   │   │       ├── DependencyInjection
│   │               │   │   │   │   │       │   ├── Config
│   │               │   │   │   │   │       │   │   └── CustomConfig.php
│   │               │   │   │   │   │       │   ├── Configuration.php
│   │               │   │   │   │   │       │   └── TestExtension.php
│   │               │   │   │   │   │       ├── Resources
│   │               │   │   │   │   │       │   └── config
│   │               │   │   │   │   │       │       └── routing.yml
│   │               │   │   │   │   │       └── TestBundle.php
│   │               │   │   │   │   ├── CachePoolsTest.php
│   │               │   │   │   │   ├── ConfigDebugCommandTest.php
│   │               │   │   │   │   ├── ConfigDumpReferenceCommandTest.php
│   │               │   │   │   │   ├── ContainerDumpTest.php
│   │               │   │   │   │   ├── FragmentTest.php
│   │               │   │   │   │   ├── ProfilerTest.php
│   │               │   │   │   │   ├── SerializerTest.php
│   │               │   │   │   │   ├── SessionTest.php
│   │               │   │   │   │   ├── SubRequestsTest.php
│   │               │   │   │   │   ├── WebTestCase.php
│   │               │   │   │   │   └── app
│   │               │   │   │   │       ├── AppKernel.php
│   │               │   │   │   │       ├── AutowiringTypes
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   ├── config.yml
│   │               │   │   │   │       │   └── no_annotations_cache.yml
│   │               │   │   │   │       ├── CachePools
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   ├── config.yml
│   │               │   │   │   │       │   ├── redis_config.yml
│   │               │   │   │   │       │   └── redis_custom_config.yml
│   │               │   │   │   │       ├── ConfigDump
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   └── config.yml
│   │               │   │   │   │       ├── ContainerDump
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   └── config.yml
│   │               │   │   │   │       ├── Fragment
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   ├── config.yml
│   │               │   │   │   │       │   └── routing.yml
│   │               │   │   │   │       ├── Profiler
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   ├── config.yml
│   │               │   │   │   │       │   └── routing.yml
│   │               │   │   │   │       ├── Resources
│   │               │   │   │   │       │   └── views
│   │               │   │   │   │       │       └── fragment.html.php
│   │               │   │   │   │       ├── Serializer
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   └── config.yml
│   │               │   │   │   │       ├── Session
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   ├── config.yml
│   │               │   │   │   │       │   └── routing.yml
│   │               │   │   │   │       └── config
│   │               │   │   │   │           ├── default.yml
│   │               │   │   │   │           └── framework.yml
│   │               │   │   │   ├── Kernel
│   │               │   │   │   │   ├── ConcreteMicroKernel.php
│   │               │   │   │   │   └── MicroKernelTraitTest.php
│   │               │   │   │   ├── Routing
│   │               │   │   │   │   ├── DelegatingLoaderTest.php
│   │               │   │   │   │   ├── RedirectableUrlMatcherTest.php
│   │               │   │   │   │   └── RouterTest.php
│   │               │   │   │   ├── Templating
│   │               │   │   │   │   ├── DelegatingEngineTest.php
│   │               │   │   │   │   ├── GlobalVariablesTest.php
│   │               │   │   │   │   ├── Helper
│   │               │   │   │   │   │   ├── AssetsHelperTest.php
│   │               │   │   │   │   │   ├── Fixtures
│   │               │   │   │   │   │   │   ├── StubTemplateNameParser.php
│   │               │   │   │   │   │   │   └── StubTranslator.php
│   │               │   │   │   │   │   ├── FormHelperDivLayoutTest.php
│   │               │   │   │   │   │   ├── FormHelperTableLayoutTest.php
│   │               │   │   │   │   │   ├── RequestHelperTest.php
│   │               │   │   │   │   │   ├── Resources
│   │               │   │   │   │   │   │   ├── Child
│   │               │   │   │   │   │   │   │   └── form_label.html.php
│   │               │   │   │   │   │   │   ├── Custom
│   │               │   │   │   │   │   │   │   ├── _name_c_entry_label.html.php
│   │               │   │   │   │   │   │   │   ├── _names_entry_label.html.php
│   │               │   │   │   │   │   │   │   └── _text_id_widget.html.php
│   │               │   │   │   │   │   │   └── Parent
│   │               │   │   │   │   │   │       ├── form_label.html.php
│   │               │   │   │   │   │   │       └── form_widget_simple.html.php
│   │               │   │   │   │   │   ├── SessionHelperTest.php
│   │               │   │   │   │   │   └── StopwatchHelperTest.php
│   │               │   │   │   │   ├── Loader
│   │               │   │   │   │   │   └── TemplateLocatorTest.php
│   │               │   │   │   │   ├── PhpEngineTest.php
│   │               │   │   │   │   ├── TemplateFilenameParserTest.php
│   │               │   │   │   │   ├── TemplateNameParserTest.php
│   │               │   │   │   │   ├── TemplateReferenceTest.php
│   │               │   │   │   │   ├── TemplateTest.php
│   │               │   │   │   │   └── TimedPhpEngineTest.php
│   │               │   │   │   ├── TestCase.php
│   │               │   │   │   ├── Translation
│   │               │   │   │   │   ├── PhpExtractorTest.php
│   │               │   │   │   │   └── TranslatorTest.php
│   │               │   │   │   └── Validator
│   │               │   │   │       └── ConstraintValidatorFactoryTest.php
│   │               │   │   ├── Translation
│   │               │   │   │   ├── PhpExtractor.php
│   │               │   │   │   ├── PhpStringTokenParser.php
│   │               │   │   │   ├── TranslationLoader.php
│   │               │   │   │   └── Translator.php
│   │               │   │   ├── Validator
│   │               │   │   │   └── ConstraintValidatorFactory.php
│   │               │   │   ├── composer.json
│   │               │   │   └── phpunit.xml.dist
│   │               │   ├── SecurityBundle
│   │               │   │   ├── CHANGELOG.md
│   │               │   │   ├── Command
│   │               │   │   │   ├── InitAclCommand.php
│   │               │   │   │   ├── SetAclCommand.php
│   │               │   │   │   └── UserPasswordEncoderCommand.php
│   │               │   │   ├── DataCollector
│   │               │   │   │   └── SecurityDataCollector.php
│   │               │   │   ├── DependencyInjection
│   │               │   │   │   ├── Compiler
│   │               │   │   │   │   └── AddSecurityVotersPass.php
│   │               │   │   │   ├── MainConfiguration.php
│   │               │   │   │   ├── Security
│   │               │   │   │   │   ├── Factory
│   │               │   │   │   │   │   ├── AbstractFactory.php
│   │               │   │   │   │   │   ├── FormLoginFactory.php
│   │               │   │   │   │   │   ├── FormLoginLdapFactory.php
│   │               │   │   │   │   │   ├── GuardAuthenticationFactory.php
│   │               │   │   │   │   │   ├── HttpBasicFactory.php
│   │               │   │   │   │   │   ├── HttpBasicLdapFactory.php
│   │               │   │   │   │   │   ├── HttpDigestFactory.php
│   │               │   │   │   │   │   ├── RememberMeFactory.php
│   │               │   │   │   │   │   ├── RemoteUserFactory.php
│   │               │   │   │   │   │   ├── SecurityFactoryInterface.php
│   │               │   │   │   │   │   ├── SimpleFormFactory.php
│   │               │   │   │   │   │   ├── SimplePreAuthenticationFactory.php
│   │               │   │   │   │   │   └── X509Factory.php
│   │               │   │   │   │   └── UserProvider
│   │               │   │   │   │       ├── InMemoryFactory.php
│   │               │   │   │   │       ├── LdapFactory.php
│   │               │   │   │   │       └── UserProviderFactoryInterface.php
│   │               │   │   │   └── SecurityExtension.php
│   │               │   │   ├── EventListener
│   │               │   │   │   └── AclSchemaListener.php
│   │               │   │   ├── LICENSE
│   │               │   │   ├── README.md
│   │               │   │   ├── Resources
│   │               │   │   │   ├── config
│   │               │   │   │   │   ├── collectors.xml
│   │               │   │   │   │   ├── guard.xml
│   │               │   │   │   │   ├── security.xml
│   │               │   │   │   │   ├── security_acl.xml
│   │               │   │   │   │   ├── security_acl_dbal.xml
│   │               │   │   │   │   ├── security_debug.xml
│   │               │   │   │   │   ├── security_listeners.xml
│   │               │   │   │   │   ├── security_rememberme.xml
│   │               │   │   │   │   ├── templating_php.xml
│   │               │   │   │   │   └── templating_twig.xml
│   │               │   │   │   └── views
│   │               │   │   │       └── Collector
│   │               │   │   │           ├── icon.svg
│   │               │   │   │           └── security.html.twig
│   │               │   │   ├── Security
│   │               │   │   │   ├── FirewallConfig.php
│   │               │   │   │   ├── FirewallContext.php
│   │               │   │   │   └── FirewallMap.php
│   │               │   │   ├── SecurityBundle.php
│   │               │   │   ├── SecurityUserValueResolver.php
│   │               │   │   ├── Templating
│   │               │   │   │   └── Helper
│   │               │   │   │       ├── LogoutUrlHelper.php
│   │               │   │   │       └── SecurityHelper.php
│   │               │   │   ├── Tests
│   │               │   │   │   ├── DataCollector
│   │               │   │   │   │   └── SecurityDataCollectorTest.php
│   │               │   │   │   ├── DependencyInjection
│   │               │   │   │   │   ├── CompleteConfigurationTest.php
│   │               │   │   │   │   ├── Fixtures
│   │               │   │   │   │   │   ├── UserProvider
│   │               │   │   │   │   │   │   └── DummyProvider.php
│   │               │   │   │   │   │   ├── php
│   │               │   │   │   │   │   │   ├── container1.php
│   │               │   │   │   │   │   │   ├── custom_acl_provider.php
│   │               │   │   │   │   │   │   ├── merge.php
│   │               │   │   │   │   │   │   ├── merge_import.php
│   │               │   │   │   │   │   │   └── remember_me_options.php
│   │               │   │   │   │   │   ├── xml
│   │               │   │   │   │   │   │   ├── container1.xml
│   │               │   │   │   │   │   │   ├── custom_acl_provider.xml
│   │               │   │   │   │   │   │   ├── merge.xml
│   │               │   │   │   │   │   │   ├── merge_import.xml
│   │               │   │   │   │   │   │   └── remember_me_options.xml
│   │               │   │   │   │   │   └── yml
│   │               │   │   │   │   │       ├── container1.yml
│   │               │   │   │   │   │       ├── custom_acl_provider.yml
│   │               │   │   │   │   │       ├── merge.yml
│   │               │   │   │   │   │       ├── merge_import.yml
│   │               │   │   │   │   │       └── remember_me_options.yml
│   │               │   │   │   │   ├── MainConfigurationTest.php
│   │               │   │   │   │   ├── PhpCompleteConfigurationTest.php
│   │               │   │   │   │   ├── Security
│   │               │   │   │   │   │   └── Factory
│   │               │   │   │   │   │       ├── AbstractFactoryTest.php
│   │               │   │   │   │   │       └── GuardAuthenticationFactoryTest.php
│   │               │   │   │   │   ├── SecurityExtensionTest.php
│   │               │   │   │   │   ├── XmlCompleteConfigurationTest.php
│   │               │   │   │   │   └── YamlCompleteConfigurationTest.php
│   │               │   │   │   ├── Functional
│   │               │   │   │   │   ├── AuthenticationCommencingTest.php
│   │               │   │   │   │   ├── Bundle
│   │               │   │   │   │   │   ├── AclBundle
│   │               │   │   │   │   │   │   ├── AclBundle.php
│   │               │   │   │   │   │   │   └── Entity
│   │               │   │   │   │   │   │       └── Car.php
│   │               │   │   │   │   │   ├── CsrfFormLoginBundle
│   │               │   │   │   │   │   │   ├── Controller
│   │               │   │   │   │   │   │   │   └── LoginController.php
│   │               │   │   │   │   │   │   ├── CsrfFormLoginBundle.php
│   │               │   │   │   │   │   │   ├── Form
│   │               │   │   │   │   │   │   │   └── UserLoginType.php
│   │               │   │   │   │   │   │   └── Resources
│   │               │   │   │   │   │   │       ├── config
│   │               │   │   │   │   │   │       │   └── routing.yml
│   │               │   │   │   │   │   │       └── views
│   │               │   │   │   │   │   │           └── Login
│   │               │   │   │   │   │   │               ├── after_login.html.twig
│   │               │   │   │   │   │   │               └── login.html.twig
│   │               │   │   │   │   │   ├── FirewallEntryPointBundle
│   │               │   │   │   │   │   │   ├── DependencyInjection
│   │               │   │   │   │   │   │   │   └── FirewallEntryPointExtension.php
│   │               │   │   │   │   │   │   ├── FirewallEntryPointBundle.php
│   │               │   │   │   │   │   │   ├── Resources
│   │               │   │   │   │   │   │   │   └── config
│   │               │   │   │   │   │   │   │       └── services.xml
│   │               │   │   │   │   │   │   └── Security
│   │               │   │   │   │   │   │       └── EntryPointStub.php
│   │               │   │   │   │   │   └── FormLoginBundle
│   │               │   │   │   │   │       ├── Controller
│   │               │   │   │   │   │       │   ├── LocalizedController.php
│   │               │   │   │   │   │       │   └── LoginController.php
│   │               │   │   │   │   │       ├── DependencyInjection
│   │               │   │   │   │   │       │   └── FormLoginExtension.php
│   │               │   │   │   │   │       ├── FormLoginBundle.php
│   │               │   │   │   │   │       ├── Resources
│   │               │   │   │   │   │       │   ├── config
│   │               │   │   │   │   │       │   │   ├── localized_routing.yml
│   │               │   │   │   │   │       │   │   └── routing.yml
│   │               │   │   │   │   │       │   └── views
│   │               │   │   │   │   │       │       ├── Localized
│   │               │   │   │   │   │       │       │   └── login.html.twig
│   │               │   │   │   │   │       │       └── Login
│   │               │   │   │   │   │       │           ├── after_login.html.twig
│   │               │   │   │   │   │       │           └── login.html.twig
│   │               │   │   │   │   │       └── Security
│   │               │   │   │   │   │           └── LocalizedFormFailureHandler.php
│   │               │   │   │   │   ├── CsrfFormLoginTest.php
│   │               │   │   │   │   ├── FirewallEntryPointTest.php
│   │               │   │   │   │   ├── FormLoginTest.php
│   │               │   │   │   │   ├── LocalizedRoutesAsPathTest.php
│   │               │   │   │   │   ├── SecurityRoutingIntegrationTest.php
│   │               │   │   │   │   ├── SetAclCommandTest.php
│   │               │   │   │   │   ├── SwitchUserTest.php
│   │               │   │   │   │   ├── UserPasswordEncoderCommandTest.php
│   │               │   │   │   │   ├── WebTestCase.php
│   │               │   │   │   │   └── app
│   │               │   │   │   │       ├── Acl
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   └── config.yml
│   │               │   │   │   │       ├── AppKernel.php
│   │               │   │   │   │       ├── CsrfFormLogin
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   ├── config.yml
│   │               │   │   │   │       │   ├── routes_as_path.yml
│   │               │   │   │   │       │   └── routing.yml
│   │               │   │   │   │       ├── FirewallEntryPoint
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   ├── config.yml
│   │               │   │   │   │       │   ├── config_form_login.yml
│   │               │   │   │   │       │   └── routing.yml
│   │               │   │   │   │       ├── PasswordEncode
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   ├── config.yml
│   │               │   │   │   │       │   └── emptysalt.txt
│   │               │   │   │   │       ├── Resources
│   │               │   │   │   │       │   └── views
│   │               │   │   │   │       │       └── base.html.twig
│   │               │   │   │   │       ├── StandardFormLogin
│   │               │   │   │   │       │   ├── bundles.php
│   │               │   │   │   │       │   ├── config.yml
│   │               │   │   │   │       │   ├── localized_form_failure_handler.yml
│   │               │   │   │   │       │   ├── localized_routes.yml
│   │               │   │   │   │       │   ├── localized_routes_with_forward.yml
│   │               │   │   │   │       │   ├── routes_as_path.yml
│   │               │   │   │   │       │   ├── routing.yml
│   │               │   │   │   │       │   └── switchuser.yml
│   │               │   │   │   │       └── config
│   │               │   │   │   │           ├── default.yml
│   │               │   │   │   │           ├── framework.yml
│   │               │   │   │   │           └── twig.yml
│   │               │   │   │   ├── Security
│   │               │   │   │   │   ├── FirewallConfigTest.php
│   │               │   │   │   │   └── FirewallContextTest.php
│   │               │   │   │   └── SecurityUserValueResolverTest.php
│   │               │   │   ├── composer.json
│   │               │   │   └── phpunit.xml.dist
│   │               │   ├── TwigBundle
│   │               │   │   ├── CHANGELOG.md
│   │               │   │   ├── CacheWarmer
│   │               │   │   │   ├── TemplateCacheCacheWarmer.php
│   │               │   │   │   └── TemplateCacheWarmer.php
│   │               │   │   ├── Command
│   │               │   │   │   ├── DebugCommand.php
│   │               │   │   │   └── LintCommand.php
│   │               │   │   ├── ContainerAwareRuntimeLoader.php
│   │               │   │   ├── Controller
│   │               │   │   │   ├── ExceptionController.php
│   │               │   │   │   └── PreviewErrorController.php
│   │               │   │   ├── DependencyInjection
│   │               │   │   │   ├── Compiler
│   │               │   │   │   │   ├── ExceptionListenerPass.php
│   │               │   │   │   │   ├── ExtensionPass.php
│   │               │   │   │   │   ├── RuntimeLoaderPass.php
│   │               │   │   │   │   ├── TwigEnvironmentPass.php
│   │               │   │   │   │   └── TwigLoaderPass.php
│   │               │   │   │   ├── Configuration.php
│   │               │   │   │   ├── Configurator
│   │               │   │   │   │   └── EnvironmentConfigurator.php
│   │               │   │   │   └── TwigExtension.php
│   │               │   │   ├── LICENSE
│   │               │   │   ├── Loader
│   │               │   │   │   └── FilesystemLoader.php
│   │               │   │   ├── README.md
│   │               │   │   ├── Resources
│   │               │   │   │   ├── config
│   │               │   │   │   │   ├── form.xml
│   │               │   │   │   │   ├── routing
│   │               │   │   │   │   │   └── errors.xml
│   │               │   │   │   │   ├── schema
│   │               │   │   │   │   │   └── twig-1.0.xsd
│   │               │   │   │   │   ├── templating.xml
│   │               │   │   │   │   └── twig.xml
│   │               │   │   │   └── views
│   │               │   │   │       ├── Exception
│   │               │   │   │       │   ├── error.atom.twig
│   │               │   │   │       │   ├── error.css.twig
│   │               │   │   │       │   ├── error.html.twig
│   │               │   │   │       │   ├── error.js.twig
│   │               │   │   │       │   ├── error.json.twig
│   │               │   │   │       │   ├── error.rdf.twig
│   │               │   │   │       │   ├── error.txt.twig
│   │               │   │   │       │   ├── error.xml.twig
│   │               │   │   │       │   ├── exception.atom.twig
│   │               │   │   │       │   ├── exception.css.twig
│   │               │   │   │       │   ├── exception.html.twig
│   │               │   │   │       │   ├── exception.js.twig
│   │               │   │   │       │   ├── exception.json.twig
│   │               │   │   │       │   ├── exception.rdf.twig
│   │               │   │   │       │   ├── exception.svg
│   │               │   │   │       │   ├── exception.txt.twig
│   │               │   │   │       │   ├── exception.xml.twig
│   │               │   │   │       │   ├── exception_full.html.twig
│   │               │   │   │       │   ├── logs.html.twig
│   │               │   │   │       │   ├── trace.html.twig
│   │               │   │   │       │   ├── trace.txt.twig
│   │               │   │   │       │   ├── traces.html.twig
│   │               │   │   │       │   ├── traces.txt.twig
│   │               │   │   │       │   ├── traces.xml.twig
│   │               │   │   │       │   └── traces_text.html.twig
│   │               │   │   │       ├── layout.html.twig
│   │               │   │   │       └── symfony.svg
│   │               │   │   ├── TemplateIterator.php
│   │               │   │   ├── Tests
│   │               │   │   │   ├── ContainerAwareRuntimeLoaderTest.php
│   │               │   │   │   ├── Controller
│   │               │   │   │   │   ├── ExceptionControllerTest.php
│   │               │   │   │   │   └── PreviewErrorControllerTest.php
│   │               │   │   │   ├── DependencyInjection
│   │               │   │   │   │   ├── Compiler
│   │               │   │   │   │   │   └── TwigLoaderPassTest.php
│   │               │   │   │   │   ├── ConfigurationTest.php
│   │               │   │   │   │   ├── Fixtures
│   │               │   │   │   │   │   ├── Bundle
│   │               │   │   │   │   │   │   ├── ChildChildChildChildTwigBundle
│   │               │   │   │   │   │   │   │   └── Resources
│   │               │   │   │   │   │   │   │       └── views
│   │               │   │   │   │   │   │   │           └── layout.html.twig
│   │               │   │   │   │   │   │   ├── ChildChildChildTwigBundle
│   │               │   │   │   │   │   │   │   └── Resources
│   │               │   │   │   │   │   │   │       └── views
│   │               │   │   │   │   │   │   │           └── layout.html.twig
│   │               │   │   │   │   │   │   ├── ChildChildTwigBundle
│   │               │   │   │   │   │   │   │   └── Resources
│   │               │   │   │   │   │   │   │       └── views
│   │               │   │   │   │   │   │   │           └── layout.html.twig
│   │               │   │   │   │   │   │   └── ChildTwigBundle
│   │               │   │   │   │   │   │       └── Resources
│   │               │   │   │   │   │   │           └── views
│   │               │   │   │   │   │   │               └── layout.html.twig
│   │               │   │   │   │   │   ├── Resources
│   │               │   │   │   │   │   │   ├── TwigBundle
│   │               │   │   │   │   │   │   │   └── views
│   │               │   │   │   │   │   │   │       └── layout.html.twig
│   │               │   │   │   │   │   │   └── views
│   │               │   │   │   │   │   │       └── layout.html.twig
│   │               │   │   │   │   │   ├── php
│   │               │   │   │   │   │   │   ├── customTemplateEscapingGuesser.php
│   │               │   │   │   │   │   │   ├── empty.php
│   │               │   │   │   │   │   │   ├── extra.php
│   │               │   │   │   │   │   │   └── full.php
│   │               │   │   │   │   │   ├── xml
│   │               │   │   │   │   │   │   ├── customTemplateEscapingGuesser.xml
│   │               │   │   │   │   │   │   ├── empty.xml
│   │               │   │   │   │   │   │   ├── extra.xml
│   │               │   │   │   │   │   │   └── full.xml
│   │               │   │   │   │   │   └── yml
│   │               │   │   │   │   │       ├── customTemplateEscapingGuesser.yml
│   │               │   │   │   │   │       ├── empty.yml
│   │               │   │   │   │   │       ├── extra.yml
│   │               │   │   │   │   │       └── full.yml
│   │               │   │   │   │   └── TwigExtensionTest.php
│   │               │   │   │   ├── Fixtures
│   │               │   │   │   │   └── templates
│   │               │   │   │   │       ├── BarBundle
│   │               │   │   │   │       │   └── Resources
│   │               │   │   │   │       │       └── views
│   │               │   │   │   │       │           └── index.html.twig
│   │               │   │   │   │       ├── Foo
│   │               │   │   │   │       │   └── index.html.twig
│   │               │   │   │   │       └── Resources
│   │               │   │   │   │           └── views
│   │               │   │   │   │               ├── layout.html.twig
│   │               │   │   │   │               └── sub
│   │               │   │   │   │                   └── sub.html.twig
│   │               │   │   │   ├── Functional
│   │               │   │   │   │   ├── CacheWarmingTest.php
│   │               │   │   │   │   ├── NoTemplatingEntryTest.php
│   │               │   │   │   │   └── Resources
│   │               │   │   │   │       ├── config
│   │               │   │   │   │       │   └── empty_routing.yml
│   │               │   │   │   │       └── views
│   │               │   │   │   │           └── index.html.twig
│   │               │   │   │   ├── Loader
│   │               │   │   │   │   └── FilesystemLoaderTest.php
│   │               │   │   │   ├── TemplateIteratorTest.php
│   │               │   │   │   └── TestCase.php
│   │               │   │   ├── TwigBundle.php
│   │               │   │   ├── TwigEngine.php
│   │               │   │   ├── composer.json
│   │               │   │   └── phpunit.xml.dist
│   │               │   └── WebProfilerBundle
│   │               │       ├── CHANGELOG.md
│   │               │       ├── Controller
│   │               │       │   ├── ExceptionController.php
│   │               │       │   ├── ProfilerController.php
│   │               │       │   └── RouterController.php
│   │               │       ├── Csp
│   │               │       │   ├── ContentSecurityPolicyHandler.php
│   │               │       │   └── NonceGenerator.php
│   │               │       ├── DependencyInjection
│   │               │       │   ├── Configuration.php
│   │               │       │   └── WebProfilerExtension.php
│   │               │       ├── EventListener
│   │               │       │   └── WebDebugToolbarListener.php
│   │               │       ├── LICENSE
│   │               │       ├── Profiler
│   │               │       │   └── TemplateManager.php
│   │               │       ├── README.md
│   │               │       ├── Resources
│   │               │       │   ├── ICONS_LICENSE.txt
│   │               │       │   ├── config
│   │               │       │   │   ├── profiler.xml
│   │               │       │   │   ├── routing
│   │               │       │   │   │   ├── profiler.xml
│   │               │       │   │   │   └── wdt.xml
│   │               │       │   │   ├── schema
│   │               │       │   │   │   └── webprofiler-1.0.xsd
│   │               │       │   │   └── toolbar.xml
│   │               │       │   └── views
│   │               │       │       ├── Collector
│   │               │       │       │   ├── ajax.html.twig
│   │               │       │       │   ├── config.html.twig
│   │               │       │       │   ├── events.html.twig
│   │               │       │       │   ├── exception.css.twig
│   │               │       │       │   ├── exception.html.twig
│   │               │       │       │   ├── form.html.twig
│   │               │       │       │   ├── logger.html.twig
│   │               │       │       │   ├── memory.html.twig
│   │               │       │       │   ├── request.html.twig
│   │               │       │       │   ├── router.html.twig
│   │               │       │       │   ├── time.html.twig
│   │               │       │       │   ├── translation.html.twig
│   │               │       │       │   └── twig.html.twig
│   │               │       │       ├── Icon
│   │               │       │       │   ├── ajax.svg
│   │               │       │       │   ├── close.svg
│   │               │       │       │   ├── config.svg
│   │               │       │       │   ├── event.svg
│   │               │       │       │   ├── exception.svg
│   │               │       │       │   ├── form.svg
│   │               │       │       │   ├── forward.svg
│   │               │       │       │   ├── logger.svg
│   │               │       │       │   ├── memory.svg
│   │               │       │       │   ├── menu.svg
│   │               │       │       │   ├── no.svg
│   │               │       │       │   ├── redirect.svg
│   │               │       │       │   ├── request.svg
│   │               │       │       │   ├── router.svg
│   │               │       │       │   ├── search.svg
│   │               │       │       │   ├── symfony.svg
│   │               │       │       │   ├── time.svg
│   │               │       │       │   ├── translation.svg
│   │               │       │       │   ├── twig.svg
│   │               │       │       │   └── yes.svg
│   │               │       │       ├── Profiler
│   │               │       │       │   ├── ajax_layout.html.twig
│   │               │       │       │   ├── bag.html.twig
│   │               │       │       │   ├── base.html.twig
│   │               │       │       │   ├── base_js.html.twig
│   │               │       │       │   ├── header.html.twig
│   │               │       │       │   ├── info.html.twig
│   │               │       │       │   ├── layout.html.twig
│   │               │       │       │   ├── open.css.twig
│   │               │       │       │   ├── open.html.twig
│   │               │       │       │   ├── profiler.css.twig
│   │               │       │       │   ├── results.html.twig
│   │               │       │       │   ├── search.html.twig
│   │               │       │       │   ├── table.html.twig
│   │               │       │       │   ├── toolbar.css.twig
│   │               │       │       │   ├── toolbar.html.twig
│   │               │       │       │   ├── toolbar_item.html.twig
│   │               │       │       │   ├── toolbar_js.html.twig
│   │               │       │       │   └── toolbar_redirect.html.twig
│   │               │       │       └── Router
│   │               │       │           └── panel.html.twig
│   │               │       ├── Tests
│   │               │       │   ├── Controller
│   │               │       │   │   └── ProfilerControllerTest.php
│   │               │       │   ├── Csp
│   │               │       │   │   └── ContentSecurityPolicyHandlerTest.php
│   │               │       │   ├── DependencyInjection
│   │               │       │   │   ├── ConfigurationTest.php
│   │               │       │   │   └── WebProfilerExtensionTest.php
│   │               │       │   ├── EventListener
│   │               │       │   │   └── WebDebugToolbarListenerTest.php
│   │               │       │   ├── Fixtures
│   │               │       │   │   └── profile.data
│   │               │       │   ├── Profiler
│   │               │       │   │   └── TemplateManagerTest.php
│   │               │       │   └── TestCase.php
│   │               │       ├── Twig
│   │               │       │   └── WebProfilerExtension.php
│   │               │       ├── WebProfilerBundle.php
│   │               │       ├── composer.json
│   │               │       └── phpunit.xml.dist
│   │               └── Component
│   │                   ├── Asset
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Context
│   │                   │   │   ├── ContextInterface.php
│   │                   │   │   ├── NullContext.php
│   │                   │   │   └── RequestStackContext.php
│   │                   │   ├── Exception
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── InvalidArgumentException.php
│   │                   │   │   └── LogicException.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Package.php
│   │                   │   ├── PackageInterface.php
│   │                   │   ├── Packages.php
│   │                   │   ├── PathPackage.php
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   ├── Context
│   │                   │   │   │   ├── NullContextTest.php
│   │                   │   │   │   └── RequestStackContextTest.php
│   │                   │   │   ├── PackageTest.php
│   │                   │   │   ├── PackagesTest.php
│   │                   │   │   ├── PathPackageTest.php
│   │                   │   │   ├── UrlPackageTest.php
│   │                   │   │   └── VersionStrategy
│   │                   │   │       ├── EmptyVersionStrategyTest.php
│   │                   │   │       └── StaticVersionStrategyTest.php
│   │                   │   ├── UrlPackage.php
│   │                   │   ├── VersionStrategy
│   │                   │   │   ├── EmptyVersionStrategy.php
│   │                   │   │   ├── StaticVersionStrategy.php
│   │                   │   │   └── VersionStrategyInterface.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── BrowserKit
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Client.php
│   │                   │   ├── Cookie.php
│   │                   │   ├── CookieJar.php
│   │                   │   ├── History.php
│   │                   │   ├── LICENSE
│   │                   │   ├── README.md
│   │                   │   ├── Request.php
│   │                   │   ├── Response.php
│   │                   │   ├── Tests
│   │                   │   │   ├── ClientTest.php
│   │                   │   │   ├── CookieJarTest.php
│   │                   │   │   ├── CookieTest.php
│   │                   │   │   ├── HistoryTest.php
│   │                   │   │   ├── RequestTest.php
│   │                   │   │   └── ResponseTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Cache
│   │                   │   ├── Adapter
│   │                   │   │   ├── AbstractAdapter.php
│   │                   │   │   ├── AdapterInterface.php
│   │                   │   │   ├── ApcuAdapter.php
│   │                   │   │   ├── ArrayAdapter.php
│   │                   │   │   ├── ChainAdapter.php
│   │                   │   │   ├── DoctrineAdapter.php
│   │                   │   │   ├── FilesystemAdapter.php
│   │                   │   │   ├── FilesystemAdapterTrait.php
│   │                   │   │   ├── NullAdapter.php
│   │                   │   │   ├── PdoAdapter.php
│   │                   │   │   ├── PhpArrayAdapter.php
│   │                   │   │   ├── PhpFilesAdapter.php
│   │                   │   │   ├── ProxyAdapter.php
│   │                   │   │   ├── RedisAdapter.php
│   │                   │   │   ├── TagAwareAdapter.php
│   │                   │   │   └── TagAwareAdapterInterface.php
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── CacheItem.php
│   │                   │   ├── DoctrineProvider.php
│   │                   │   ├── Exception
│   │                   │   │   ├── CacheException.php
│   │                   │   │   └── InvalidArgumentException.php
│   │                   │   ├── LICENSE
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   ├── Adapter
│   │                   │   │   │   ├── AbstractRedisAdapterTest.php
│   │                   │   │   │   ├── AdapterTestCase.php
│   │                   │   │   │   ├── ApcuAdapterTest.php
│   │                   │   │   │   ├── ArrayAdapterTest.php
│   │                   │   │   │   ├── ChainAdapterTest.php
│   │                   │   │   │   ├── DoctrineAdapterTest.php
│   │                   │   │   │   ├── FilesystemAdapterTest.php
│   │                   │   │   │   ├── MaxIdLengthAdapterTest.php
│   │                   │   │   │   ├── NamespacedProxyAdapterTest.php
│   │                   │   │   │   ├── NullAdapterTest.php
│   │                   │   │   │   ├── PdoAdapterTest.php
│   │                   │   │   │   ├── PdoDbalAdapterTest.php
│   │                   │   │   │   ├── PhpArrayAdapterTest.php
│   │                   │   │   │   ├── PhpArrayAdapterWithFallbackTest.php
│   │                   │   │   │   ├── PhpFilesAdapterTest.php
│   │                   │   │   │   ├── PredisAdapterTest.php
│   │                   │   │   │   ├── ProxyAdapterTest.php
│   │                   │   │   │   ├── RedisAdapterTest.php
│   │                   │   │   │   ├── RedisArrayAdapterTest.php
│   │                   │   │   │   └── TagAwareAdapterTest.php
│   │                   │   │   ├── CacheItemTest.php
│   │                   │   │   ├── DoctrineProviderTest.php
│   │                   │   │   └── Fixtures
│   │                   │   │       └── ExternalAdapter.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── ClassLoader
│   │                   │   ├── ApcClassLoader.php
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── ClassCollectionLoader.php
│   │                   │   ├── ClassLoader.php
│   │                   │   ├── ClassMapGenerator.php
│   │                   │   ├── LICENSE
│   │                   │   ├── MapClassLoader.php
│   │                   │   ├── Psr4ClassLoader.php
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   ├── ApcClassLoaderTest.php
│   │                   │   │   ├── ClassCollectionLoaderTest.php
│   │                   │   │   ├── ClassLoaderTest.php
│   │                   │   │   ├── ClassMapGeneratorTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── Apc
│   │                   │   │   │   │   ├── Namespaced
│   │                   │   │   │   │   │   ├── Bar.php
│   │                   │   │   │   │   │   ├── Baz.php
│   │                   │   │   │   │   │   ├── Foo.php
│   │                   │   │   │   │   │   └── FooBar.php
│   │                   │   │   │   │   ├── Pearlike
│   │                   │   │   │   │   │   ├── Bar.php
│   │                   │   │   │   │   │   ├── Baz.php
│   │                   │   │   │   │   │   └── Foo.php
│   │                   │   │   │   │   ├── alpha
│   │                   │   │   │   │   │   └── Apc
│   │                   │   │   │   │   │       ├── ApcPrefixCollision
│   │                   │   │   │   │   │       │   └── A
│   │                   │   │   │   │   │       │       ├── Bar.php
│   │                   │   │   │   │   │       │       └── Foo.php
│   │                   │   │   │   │   │       └── NamespaceCollision
│   │                   │   │   │   │   │           └── A
│   │                   │   │   │   │   │               ├── Bar.php
│   │                   │   │   │   │   │               └── Foo.php
│   │                   │   │   │   │   ├── beta
│   │                   │   │   │   │   │   └── Apc
│   │                   │   │   │   │   │       ├── ApcPrefixCollision
│   │                   │   │   │   │   │       │   └── A
│   │                   │   │   │   │   │       │       └── B
│   │                   │   │   │   │   │       │           ├── Bar.php
│   │                   │   │   │   │   │       │           └── Foo.php
│   │                   │   │   │   │   │       └── NamespaceCollision
│   │                   │   │   │   │   │           └── A
│   │                   │   │   │   │   │               └── B
│   │                   │   │   │   │   │                   ├── Bar.php
│   │                   │   │   │   │   │                   └── Foo.php
│   │                   │   │   │   │   └── fallback
│   │                   │   │   │   │       ├── Apc
│   │                   │   │   │   │       │   └── Pearlike
│   │                   │   │   │   │       │       └── FooBar.php
│   │                   │   │   │   │       └── Namespaced
│   │                   │   │   │   │           └── FooBar.php
│   │                   │   │   │   ├── ClassesWithParents
│   │                   │   │   │   │   ├── A.php
│   │                   │   │   │   │   ├── ATrait.php
│   │                   │   │   │   │   ├── B.php
│   │                   │   │   │   │   ├── BTrait.php
│   │                   │   │   │   │   ├── CInterface.php
│   │                   │   │   │   │   ├── CTrait.php
│   │                   │   │   │   │   ├── D.php
│   │                   │   │   │   │   ├── E.php
│   │                   │   │   │   │   ├── F.php
│   │                   │   │   │   │   ├── G.php
│   │                   │   │   │   │   └── GInterface.php
│   │                   │   │   │   ├── DeclaredClass.php
│   │                   │   │   │   ├── DeclaredInterface.php
│   │                   │   │   │   ├── Namespaced
│   │                   │   │   │   │   ├── Bar.php
│   │                   │   │   │   │   ├── Baz.php
│   │                   │   │   │   │   ├── Foo.php
│   │                   │   │   │   │   ├── WithComments.php
│   │                   │   │   │   │   ├── WithDirMagic.php
│   │                   │   │   │   │   ├── WithFileMagic.php
│   │                   │   │   │   │   ├── WithHaltCompiler.php
│   │                   │   │   │   │   └── WithStrictTypes.php
│   │                   │   │   │   ├── Namespaced2
│   │                   │   │   │   │   ├── Bar.php
│   │                   │   │   │   │   ├── Baz.php
│   │                   │   │   │   │   └── Foo.php
│   │                   │   │   │   ├── Pearlike
│   │                   │   │   │   │   ├── Bar.php
│   │                   │   │   │   │   ├── Baz.php
│   │                   │   │   │   │   ├── Foo.php
│   │                   │   │   │   │   └── WithComments.php
│   │                   │   │   │   ├── Pearlike2
│   │                   │   │   │   │   ├── Bar.php
│   │                   │   │   │   │   ├── Baz.php
│   │                   │   │   │   │   └── Foo.php
│   │                   │   │   │   ├── WarmedClass.php
│   │                   │   │   │   ├── WarmedInterface.php
│   │                   │   │   │   ├── alpha
│   │                   │   │   │   │   ├── NamespaceCollision
│   │                   │   │   │   │   │   ├── A
│   │                   │   │   │   │   │   │   ├── Bar.php
│   │                   │   │   │   │   │   │   └── Foo.php
│   │                   │   │   │   │   │   └── C
│   │                   │   │   │   │   │       ├── Bar.php
│   │                   │   │   │   │   │       └── Foo.php
│   │                   │   │   │   │   └── PrefixCollision
│   │                   │   │   │   │       ├── A
│   │                   │   │   │   │       │   ├── Bar.php
│   │                   │   │   │   │       │   └── Foo.php
│   │                   │   │   │   │       └── C
│   │                   │   │   │   │           ├── Bar.php
│   │                   │   │   │   │           └── Foo.php
│   │                   │   │   │   ├── beta
│   │                   │   │   │   │   ├── NamespaceCollision
│   │                   │   │   │   │   │   ├── A
│   │                   │   │   │   │   │   │   └── B
│   │                   │   │   │   │   │   │       ├── Bar.php
│   │                   │   │   │   │   │   │       └── Foo.php
│   │                   │   │   │   │   │   └── C
│   │                   │   │   │   │   │       └── B
│   │                   │   │   │   │   │           ├── Bar.php
│   │                   │   │   │   │   │           └── Foo.php
│   │                   │   │   │   │   └── PrefixCollision
│   │                   │   │   │   │       ├── A
│   │                   │   │   │   │       │   └── B
│   │                   │   │   │   │       │       ├── Bar.php
│   │                   │   │   │   │       │       └── Foo.php
│   │                   │   │   │   │       └── C
│   │                   │   │   │   │           └── B
│   │                   │   │   │   │               ├── Bar.php
│   │                   │   │   │   │               └── Foo.php
│   │                   │   │   │   ├── classmap
│   │                   │   │   │   │   ├── SomeClass.php
│   │                   │   │   │   │   ├── SomeInterface.php
│   │                   │   │   │   │   ├── SomeParent.php
│   │                   │   │   │   │   ├── multipleNs.php
│   │                   │   │   │   │   ├── notAClass.php
│   │                   │   │   │   │   ├── notPhpFile.md
│   │                   │   │   │   │   └── sameNsMultipleClasses.php
│   │                   │   │   │   ├── deps
│   │                   │   │   │   │   └── traits.php
│   │                   │   │   │   ├── fallback
│   │                   │   │   │   │   ├── Namespaced
│   │                   │   │   │   │   │   └── FooBar.php
│   │                   │   │   │   │   ├── Namespaced2
│   │                   │   │   │   │   │   └── FooBar.php
│   │                   │   │   │   │   ├── Pearlike
│   │                   │   │   │   │   │   └── FooBar.php
│   │                   │   │   │   │   └── Pearlike2
│   │                   │   │   │   │       └── FooBar.php
│   │                   │   │   │   ├── includepath
│   │                   │   │   │   │   └── Foo.php
│   │                   │   │   │   ├── php5.4
│   │                   │   │   │   │   └── traits.php
│   │                   │   │   │   ├── php5.5
│   │                   │   │   │   │   └── class_cons.php
│   │                   │   │   │   └── psr-4
│   │                   │   │   │       ├── Class_With_Underscores.php
│   │                   │   │   │       ├── Foo.php
│   │                   │   │   │       └── Lets
│   │                   │   │   │           └── Go
│   │                   │   │   │               └── Deeper
│   │                   │   │   │                   ├── Class_With_Underscores.php
│   │                   │   │   │                   └── Foo.php
│   │                   │   │   └── Psr4ClassLoaderTest.php
│   │                   │   ├── WinCacheClassLoader.php
│   │                   │   ├── XcacheClassLoader.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Config
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── ConfigCache.php
│   │                   │   ├── ConfigCacheFactory.php
│   │                   │   ├── ConfigCacheFactoryInterface.php
│   │                   │   ├── ConfigCacheInterface.php
│   │                   │   ├── Definition
│   │                   │   │   ├── ArrayNode.php
│   │                   │   │   ├── BaseNode.php
│   │                   │   │   ├── BooleanNode.php
│   │                   │   │   ├── Builder
│   │                   │   │   │   ├── ArrayNodeDefinition.php
│   │                   │   │   │   ├── BooleanNodeDefinition.php
│   │                   │   │   │   ├── EnumNodeDefinition.php
│   │                   │   │   │   ├── ExprBuilder.php
│   │                   │   │   │   ├── FloatNodeDefinition.php
│   │                   │   │   │   ├── IntegerNodeDefinition.php
│   │                   │   │   │   ├── MergeBuilder.php
│   │                   │   │   │   ├── NodeBuilder.php
│   │                   │   │   │   ├── NodeDefinition.php
│   │                   │   │   │   ├── NodeParentInterface.php
│   │                   │   │   │   ├── NormalizationBuilder.php
│   │                   │   │   │   ├── NumericNodeDefinition.php
│   │                   │   │   │   ├── ParentNodeDefinitionInterface.php
│   │                   │   │   │   ├── ScalarNodeDefinition.php
│   │                   │   │   │   ├── TreeBuilder.php
│   │                   │   │   │   ├── ValidationBuilder.php
│   │                   │   │   │   └── VariableNodeDefinition.php
│   │                   │   │   ├── ConfigurationInterface.php
│   │                   │   │   ├── Dumper
│   │                   │   │   │   ├── XmlReferenceDumper.php
│   │                   │   │   │   └── YamlReferenceDumper.php
│   │                   │   │   ├── EnumNode.php
│   │                   │   │   ├── Exception
│   │                   │   │   │   ├── DuplicateKeyException.php
│   │                   │   │   │   ├── Exception.php
│   │                   │   │   │   ├── ForbiddenOverwriteException.php
│   │                   │   │   │   ├── InvalidConfigurationException.php
│   │                   │   │   │   ├── InvalidDefinitionException.php
│   │                   │   │   │   ├── InvalidTypeException.php
│   │                   │   │   │   └── UnsetKeyException.php
│   │                   │   │   ├── FloatNode.php
│   │                   │   │   ├── IntegerNode.php
│   │                   │   │   ├── NodeInterface.php
│   │                   │   │   ├── NumericNode.php
│   │                   │   │   ├── Processor.php
│   │                   │   │   ├── PrototypeNodeInterface.php
│   │                   │   │   ├── PrototypedArrayNode.php
│   │                   │   │   ├── ScalarNode.php
│   │                   │   │   └── VariableNode.php
│   │                   │   ├── Exception
│   │                   │   │   ├── FileLoaderImportCircularReferenceException.php
│   │                   │   │   ├── FileLoaderLoadException.php
│   │                   │   │   └── FileLocatorFileNotFoundException.php
│   │                   │   ├── FileLocator.php
│   │                   │   ├── FileLocatorInterface.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Loader
│   │                   │   │   ├── DelegatingLoader.php
│   │                   │   │   ├── FileLoader.php
│   │                   │   │   ├── Loader.php
│   │                   │   │   ├── LoaderInterface.php
│   │                   │   │   ├── LoaderResolver.php
│   │                   │   │   └── LoaderResolverInterface.php
│   │                   │   ├── README.md
│   │                   │   ├── Resource
│   │                   │   │   ├── ClassExistenceResource.php
│   │                   │   │   ├── DirectoryResource.php
│   │                   │   │   ├── FileExistenceResource.php
│   │                   │   │   ├── FileResource.php
│   │                   │   │   ├── ResourceInterface.php
│   │                   │   │   ├── SelfCheckingResourceChecker.php
│   │                   │   │   └── SelfCheckingResourceInterface.php
│   │                   │   ├── ResourceCheckerConfigCache.php
│   │                   │   ├── ResourceCheckerConfigCacheFactory.php
│   │                   │   ├── ResourceCheckerInterface.php
│   │                   │   ├── Tests
│   │                   │   │   ├── ConfigCacheFactoryTest.php
│   │                   │   │   ├── ConfigCacheTest.php
│   │                   │   │   ├── Definition
│   │                   │   │   │   ├── ArrayNodeTest.php
│   │                   │   │   │   ├── BooleanNodeTest.php
│   │                   │   │   │   ├── Builder
│   │                   │   │   │   │   ├── ArrayNodeDefinitionTest.php
│   │                   │   │   │   │   ├── BooleanNodeDefinitionTest.php
│   │                   │   │   │   │   ├── EnumNodeDefinitionTest.php
│   │                   │   │   │   │   ├── ExprBuilderTest.php
│   │                   │   │   │   │   ├── NodeBuilderTest.php
│   │                   │   │   │   │   ├── NumericNodeDefinitionTest.php
│   │                   │   │   │   │   └── TreeBuilderTest.php
│   │                   │   │   │   ├── Dumper
│   │                   │   │   │   │   ├── XmlReferenceDumperTest.php
│   │                   │   │   │   │   └── YamlReferenceDumperTest.php
│   │                   │   │   │   ├── EnumNodeTest.php
│   │                   │   │   │   ├── FinalizationTest.php
│   │                   │   │   │   ├── FloatNodeTest.php
│   │                   │   │   │   ├── IntegerNodeTest.php
│   │                   │   │   │   ├── MergeTest.php
│   │                   │   │   │   ├── NormalizationTest.php
│   │                   │   │   │   ├── PrototypedArrayNodeTest.php
│   │                   │   │   │   └── ScalarNodeTest.php
│   │                   │   │   ├── Exception
│   │                   │   │   │   └── FileLoaderLoadExceptionTest.php
│   │                   │   │   ├── FileLocatorTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── Again
│   │                   │   │   │   │   └── foo.xml
│   │                   │   │   │   ├── Builder
│   │                   │   │   │   │   ├── BarNodeDefinition.php
│   │                   │   │   │   │   ├── NodeBuilder.php
│   │                   │   │   │   │   └── VariableNodeDefinition.php
│   │                   │   │   │   ├── Configuration
│   │                   │   │   │   │   └── ExampleConfiguration.php
│   │                   │   │   │   ├── Util
│   │                   │   │   │   │   ├── document_type.xml
│   │                   │   │   │   │   ├── invalid.xml
│   │                   │   │   │   │   ├── invalid_schema.xml
│   │                   │   │   │   │   ├── schema.xsd
│   │                   │   │   │   │   └── valid.xml
│   │                   │   │   │   └── foo.xml
│   │                   │   │   ├── Loader
│   │                   │   │   │   ├── DelegatingLoaderTest.php
│   │                   │   │   │   ├── FileLoaderTest.php
│   │                   │   │   │   ├── LoaderResolverTest.php
│   │                   │   │   │   └── LoaderTest.php
│   │                   │   │   ├── Resource
│   │                   │   │   │   ├── ClassExistenceResourceTest.php
│   │                   │   │   │   ├── DirectoryResourceTest.php
│   │                   │   │   │   ├── FileExistenceResourceTest.php
│   │                   │   │   │   ├── FileResourceTest.php
│   │                   │   │   │   └── ResourceStub.php
│   │                   │   │   ├── ResourceCheckerConfigCacheTest.php
│   │                   │   │   └── Util
│   │                   │   │       └── XmlUtilsTest.php
│   │                   │   ├── Util
│   │                   │   │   └── XmlUtils.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Console
│   │                   │   ├── Application.php
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Command
│   │                   │   │   ├── Command.php
│   │                   │   │   ├── HelpCommand.php
│   │                   │   │   ├── ListCommand.php
│   │                   │   │   └── LockableTrait.php
│   │                   │   ├── ConsoleEvents.php
│   │                   │   ├── Descriptor
│   │                   │   │   ├── ApplicationDescription.php
│   │                   │   │   ├── Descriptor.php
│   │                   │   │   ├── DescriptorInterface.php
│   │                   │   │   ├── JsonDescriptor.php
│   │                   │   │   ├── MarkdownDescriptor.php
│   │                   │   │   ├── TextDescriptor.php
│   │                   │   │   └── XmlDescriptor.php
│   │                   │   ├── Event
│   │                   │   │   ├── ConsoleCommandEvent.php
│   │                   │   │   ├── ConsoleEvent.php
│   │                   │   │   ├── ConsoleExceptionEvent.php
│   │                   │   │   └── ConsoleTerminateEvent.php
│   │                   │   ├── Exception
│   │                   │   │   ├── CommandNotFoundException.php
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── InvalidArgumentException.php
│   │                   │   │   ├── InvalidOptionException.php
│   │                   │   │   ├── LogicException.php
│   │                   │   │   └── RuntimeException.php
│   │                   │   ├── Formatter
│   │                   │   │   ├── OutputFormatter.php
│   │                   │   │   ├── OutputFormatterInterface.php
│   │                   │   │   ├── OutputFormatterStyle.php
│   │                   │   │   ├── OutputFormatterStyleInterface.php
│   │                   │   │   └── OutputFormatterStyleStack.php
│   │                   │   ├── Helper
│   │                   │   │   ├── DebugFormatterHelper.php
│   │                   │   │   ├── DescriptorHelper.php
│   │                   │   │   ├── FormatterHelper.php
│   │                   │   │   ├── Helper.php
│   │                   │   │   ├── HelperInterface.php
│   │                   │   │   ├── HelperSet.php
│   │                   │   │   ├── InputAwareHelper.php
│   │                   │   │   ├── ProcessHelper.php
│   │                   │   │   ├── ProgressBar.php
│   │                   │   │   ├── ProgressIndicator.php
│   │                   │   │   ├── QuestionHelper.php
│   │                   │   │   ├── SymfonyQuestionHelper.php
│   │                   │   │   ├── Table.php
│   │                   │   │   ├── TableCell.php
│   │                   │   │   ├── TableSeparator.php
│   │                   │   │   └── TableStyle.php
│   │                   │   ├── Input
│   │                   │   │   ├── ArgvInput.php
│   │                   │   │   ├── ArrayInput.php
│   │                   │   │   ├── Input.php
│   │                   │   │   ├── InputArgument.php
│   │                   │   │   ├── InputAwareInterface.php
│   │                   │   │   ├── InputDefinition.php
│   │                   │   │   ├── InputInterface.php
│   │                   │   │   ├── InputOption.php
│   │                   │   │   ├── StreamableInputInterface.php
│   │                   │   │   └── StringInput.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Logger
│   │                   │   │   └── ConsoleLogger.php
│   │                   │   ├── Output
│   │                   │   │   ├── BufferedOutput.php
│   │                   │   │   ├── ConsoleOutput.php
│   │                   │   │   ├── ConsoleOutputInterface.php
│   │                   │   │   ├── NullOutput.php
│   │                   │   │   ├── Output.php
│   │                   │   │   ├── OutputInterface.php
│   │                   │   │   └── StreamOutput.php
│   │                   │   ├── Question
│   │                   │   │   ├── ChoiceQuestion.php
│   │                   │   │   ├── ConfirmationQuestion.php
│   │                   │   │   └── Question.php
│   │                   │   ├── README.md
│   │                   │   ├── Resources
│   │                   │   │   └── bin
│   │                   │   │       └── hiddeninput.exe
│   │                   │   ├── Style
│   │                   │   │   ├── OutputStyle.php
│   │                   │   │   ├── StyleInterface.php
│   │                   │   │   └── SymfonyStyle.php
│   │                   │   ├── Terminal.php
│   │                   │   ├── Tester
│   │                   │   │   ├── ApplicationTester.php
│   │                   │   │   └── CommandTester.php
│   │                   │   ├── Tests
│   │                   │   │   ├── ApplicationTest.php
│   │                   │   │   ├── Command
│   │                   │   │   │   ├── CommandTest.php
│   │                   │   │   │   ├── HelpCommandTest.php
│   │                   │   │   │   ├── ListCommandTest.php
│   │                   │   │   │   └── LockableTraitTest.php
│   │                   │   │   ├── Descriptor
│   │                   │   │   │   ├── AbstractDescriptorTest.php
│   │                   │   │   │   ├── JsonDescriptorTest.php
│   │                   │   │   │   ├── MarkdownDescriptorTest.php
│   │                   │   │   │   ├── ObjectsProvider.php
│   │                   │   │   │   ├── TextDescriptorTest.php
│   │                   │   │   │   └── XmlDescriptorTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── BarBucCommand.php
│   │                   │   │   │   ├── DescriptorApplication1.php
│   │                   │   │   │   ├── DescriptorApplication2.php
│   │                   │   │   │   ├── DescriptorApplicationMbString.php
│   │                   │   │   │   ├── DescriptorCommand1.php
│   │                   │   │   │   ├── DescriptorCommand2.php
│   │                   │   │   │   ├── DescriptorCommand3.php
│   │                   │   │   │   ├── DescriptorCommandMbString.php
│   │                   │   │   │   ├── DummyOutput.php
│   │                   │   │   │   ├── Foo1Command.php
│   │                   │   │   │   ├── Foo2Command.php
│   │                   │   │   │   ├── Foo3Command.php
│   │                   │   │   │   ├── Foo4Command.php
│   │                   │   │   │   ├── Foo5Command.php
│   │                   │   │   │   ├── Foo6Command.php
│   │                   │   │   │   ├── FooCommand.php
│   │                   │   │   │   ├── FooLock2Command.php
│   │                   │   │   │   ├── FooLockCommand.php
│   │                   │   │   │   ├── FooSubnamespaced1Command.php
│   │                   │   │   │   ├── FooSubnamespaced2Command.php
│   │                   │   │   │   ├── FoobarCommand.php
│   │                   │   │   │   ├── Style
│   │                   │   │   │   │   └── SymfonyStyle
│   │                   │   │   │   │       ├── command
│   │                   │   │   │   │       │   ├── command_0.php
│   │                   │   │   │   │       │   ├── command_1.php
│   │                   │   │   │   │       │   ├── command_10.php
│   │                   │   │   │   │       │   ├── command_11.php
│   │                   │   │   │   │       │   ├── command_12.php
│   │                   │   │   │   │       │   ├── command_13.php
│   │                   │   │   │   │       │   ├── command_14.php
│   │                   │   │   │   │       │   ├── command_15.php
│   │                   │   │   │   │       │   ├── command_16.php
│   │                   │   │   │   │       │   ├── command_17.php
│   │                   │   │   │   │       │   ├── command_2.php
│   │                   │   │   │   │       │   ├── command_3.php
│   │                   │   │   │   │       │   ├── command_4.php
│   │                   │   │   │   │       │   ├── command_5.php
│   │                   │   │   │   │       │   ├── command_6.php
│   │                   │   │   │   │       │   ├── command_7.php
│   │                   │   │   │   │       │   ├── command_8.php
│   │                   │   │   │   │       │   ├── command_9.php
│   │                   │   │   │   │       │   └── interactive_command_1.php
│   │                   │   │   │   │       └── output
│   │                   │   │   │   │           ├── interactive_output_1.txt
│   │                   │   │   │   │           ├── output_0.txt
│   │                   │   │   │   │           ├── output_1.txt
│   │                   │   │   │   │           ├── output_10.txt
│   │                   │   │   │   │           ├── output_11.txt
│   │                   │   │   │   │           ├── output_12.txt
│   │                   │   │   │   │           ├── output_13.txt
│   │                   │   │   │   │           ├── output_14.txt
│   │                   │   │   │   │           ├── output_15.txt
│   │                   │   │   │   │           ├── output_16.txt
│   │                   │   │   │   │           ├── output_17.txt
│   │                   │   │   │   │           ├── output_2.txt
│   │                   │   │   │   │           ├── output_3.txt
│   │                   │   │   │   │           ├── output_4.txt
│   │                   │   │   │   │           ├── output_5.txt
│   │                   │   │   │   │           ├── output_6.txt
│   │                   │   │   │   │           ├── output_7.txt
│   │                   │   │   │   │           ├── output_8.txt
│   │                   │   │   │   │           └── output_9.txt
│   │                   │   │   │   ├── TestCommand.php
│   │                   │   │   │   ├── application_1.json
│   │                   │   │   │   ├── application_1.md
│   │                   │   │   │   ├── application_1.txt
│   │                   │   │   │   ├── application_1.xml
│   │                   │   │   │   ├── application_2.json
│   │                   │   │   │   ├── application_2.md
│   │                   │   │   │   ├── application_2.txt
│   │                   │   │   │   ├── application_2.xml
│   │                   │   │   │   ├── application_gethelp.txt
│   │                   │   │   │   ├── application_mbstring.md
│   │                   │   │   │   ├── application_mbstring.txt
│   │                   │   │   │   ├── application_renderexception1.txt
│   │                   │   │   │   ├── application_renderexception2.txt
│   │                   │   │   │   ├── application_renderexception3.txt
│   │                   │   │   │   ├── application_renderexception3decorated.txt
│   │                   │   │   │   ├── application_renderexception4.txt
│   │                   │   │   │   ├── application_renderexception_doublewidth1.txt
│   │                   │   │   │   ├── application_renderexception_doublewidth1decorated.txt
│   │                   │   │   │   ├── application_renderexception_doublewidth2.txt
│   │                   │   │   │   ├── application_run1.txt
│   │                   │   │   │   ├── application_run2.txt
│   │                   │   │   │   ├── application_run3.txt
│   │                   │   │   │   ├── application_run4.txt
│   │                   │   │   │   ├── command_1.json
│   │                   │   │   │   ├── command_1.md
│   │                   │   │   │   ├── command_1.txt
│   │                   │   │   │   ├── command_1.xml
│   │                   │   │   │   ├── command_2.json
│   │                   │   │   │   ├── command_2.md
│   │                   │   │   │   ├── command_2.txt
│   │                   │   │   │   ├── command_2.xml
│   │                   │   │   │   ├── command_mbstring.md
│   │                   │   │   │   ├── command_mbstring.txt
│   │                   │   │   │   ├── input_argument_1.json
│   │                   │   │   │   ├── input_argument_1.md
│   │                   │   │   │   ├── input_argument_1.txt
│   │                   │   │   │   ├── input_argument_1.xml
│   │                   │   │   │   ├── input_argument_2.json
│   │                   │   │   │   ├── input_argument_2.md
│   │                   │   │   │   ├── input_argument_2.txt
│   │                   │   │   │   ├── input_argument_2.xml
│   │                   │   │   │   ├── input_argument_3.json
│   │                   │   │   │   ├── input_argument_3.md
│   │                   │   │   │   ├── input_argument_3.txt
│   │                   │   │   │   ├── input_argument_3.xml
│   │                   │   │   │   ├── input_argument_4.json
│   │                   │   │   │   ├── input_argument_4.md
│   │                   │   │   │   ├── input_argument_4.txt
│   │                   │   │   │   ├── input_argument_4.xml
│   │                   │   │   │   ├── input_argument_with_style.json
│   │                   │   │   │   ├── input_argument_with_style.md
│   │                   │   │   │   ├── input_argument_with_style.txt
│   │                   │   │   │   ├── input_argument_with_style.xml
│   │                   │   │   │   ├── input_definition_1.json
│   │                   │   │   │   ├── input_definition_1.md
│   │                   │   │   │   ├── input_definition_1.txt
│   │                   │   │   │   ├── input_definition_1.xml
│   │                   │   │   │   ├── input_definition_2.json
│   │                   │   │   │   ├── input_definition_2.md
│   │                   │   │   │   ├── input_definition_2.txt
│   │                   │   │   │   ├── input_definition_2.xml
│   │                   │   │   │   ├── input_definition_3.json
│   │                   │   │   │   ├── input_definition_3.md
│   │                   │   │   │   ├── input_definition_3.txt
│   │                   │   │   │   ├── input_definition_3.xml
│   │                   │   │   │   ├── input_definition_4.json
│   │                   │   │   │   ├── input_definition_4.md
│   │                   │   │   │   ├── input_definition_4.txt
│   │                   │   │   │   ├── input_definition_4.xml
│   │                   │   │   │   ├── input_option_1.json
│   │                   │   │   │   ├── input_option_1.md
│   │                   │   │   │   ├── input_option_1.txt
│   │                   │   │   │   ├── input_option_1.xml
│   │                   │   │   │   ├── input_option_2.json
│   │                   │   │   │   ├── input_option_2.md
│   │                   │   │   │   ├── input_option_2.txt
│   │                   │   │   │   ├── input_option_2.xml
│   │                   │   │   │   ├── input_option_3.json
│   │                   │   │   │   ├── input_option_3.md
│   │                   │   │   │   ├── input_option_3.txt
│   │                   │   │   │   ├── input_option_3.xml
│   │                   │   │   │   ├── input_option_4.json
│   │                   │   │   │   ├── input_option_4.md
│   │                   │   │   │   ├── input_option_4.txt
│   │                   │   │   │   ├── input_option_4.xml
│   │                   │   │   │   ├── input_option_5.json
│   │                   │   │   │   ├── input_option_5.md
│   │                   │   │   │   ├── input_option_5.txt
│   │                   │   │   │   ├── input_option_5.xml
│   │                   │   │   │   ├── input_option_6.json
│   │                   │   │   │   ├── input_option_6.md
│   │                   │   │   │   ├── input_option_6.txt
│   │                   │   │   │   ├── input_option_6.xml
│   │                   │   │   │   ├── input_option_with_style.json
│   │                   │   │   │   ├── input_option_with_style.md
│   │                   │   │   │   ├── input_option_with_style.txt
│   │                   │   │   │   ├── input_option_with_style.xml
│   │                   │   │   │   ├── input_option_with_style_array.json
│   │                   │   │   │   ├── input_option_with_style_array.md
│   │                   │   │   │   ├── input_option_with_style_array.txt
│   │                   │   │   │   └── input_option_with_style_array.xml
│   │                   │   │   ├── Formatter
│   │                   │   │   │   ├── OutputFormatterStyleStackTest.php
│   │                   │   │   │   ├── OutputFormatterStyleTest.php
│   │                   │   │   │   └── OutputFormatterTest.php
│   │                   │   │   ├── Helper
│   │                   │   │   │   ├── AbstractQuestionHelperTest.php
│   │                   │   │   │   ├── FormatterHelperTest.php
│   │                   │   │   │   ├── HelperSetTest.php
│   │                   │   │   │   ├── HelperTest.php
│   │                   │   │   │   ├── ProcessHelperTest.php
│   │                   │   │   │   ├── ProgressBarTest.php
│   │                   │   │   │   ├── ProgressIndicatorTest.php
│   │                   │   │   │   ├── QuestionHelperTest.php
│   │                   │   │   │   ├── SymfonyQuestionHelperTest.php
│   │                   │   │   │   ├── TableStyleTest.php
│   │                   │   │   │   └── TableTest.php
│   │                   │   │   ├── Input
│   │                   │   │   │   ├── ArgvInputTest.php
│   │                   │   │   │   ├── ArrayInputTest.php
│   │                   │   │   │   ├── InputArgumentTest.php
│   │                   │   │   │   ├── InputDefinitionTest.php
│   │                   │   │   │   ├── InputOptionTest.php
│   │                   │   │   │   ├── InputTest.php
│   │                   │   │   │   └── StringInputTest.php
│   │                   │   │   ├── Logger
│   │                   │   │   │   └── ConsoleLoggerTest.php
│   │                   │   │   ├── Output
│   │                   │   │   │   ├── ConsoleOutputTest.php
│   │                   │   │   │   ├── NullOutputTest.php
│   │                   │   │   │   ├── OutputTest.php
│   │                   │   │   │   └── StreamOutputTest.php
│   │                   │   │   ├── Style
│   │                   │   │   │   └── SymfonyStyleTest.php
│   │                   │   │   ├── TerminalTest.php
│   │                   │   │   └── Tester
│   │                   │   │       ├── ApplicationTesterTest.php
│   │                   │   │       └── CommandTesterTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── CssSelector
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── CssSelectorConverter.php
│   │                   │   ├── Exception
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── ExpressionErrorException.php
│   │                   │   │   ├── InternalErrorException.php
│   │                   │   │   ├── ParseException.php
│   │                   │   │   └── SyntaxErrorException.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Node
│   │                   │   │   ├── AbstractNode.php
│   │                   │   │   ├── AttributeNode.php
│   │                   │   │   ├── ClassNode.php
│   │                   │   │   ├── CombinedSelectorNode.php
│   │                   │   │   ├── ElementNode.php
│   │                   │   │   ├── FunctionNode.php
│   │                   │   │   ├── HashNode.php
│   │                   │   │   ├── NegationNode.php
│   │                   │   │   ├── NodeInterface.php
│   │                   │   │   ├── PseudoNode.php
│   │                   │   │   ├── SelectorNode.php
│   │                   │   │   └── Specificity.php
│   │                   │   ├── Parser
│   │                   │   │   ├── Handler
│   │                   │   │   │   ├── CommentHandler.php
│   │                   │   │   │   ├── HandlerInterface.php
│   │                   │   │   │   ├── HashHandler.php
│   │                   │   │   │   ├── IdentifierHandler.php
│   │                   │   │   │   ├── NumberHandler.php
│   │                   │   │   │   ├── StringHandler.php
│   │                   │   │   │   └── WhitespaceHandler.php
│   │                   │   │   ├── Parser.php
│   │                   │   │   ├── ParserInterface.php
│   │                   │   │   ├── Reader.php
│   │                   │   │   ├── Shortcut
│   │                   │   │   │   ├── ClassParser.php
│   │                   │   │   │   ├── ElementParser.php
│   │                   │   │   │   ├── EmptyStringParser.php
│   │                   │   │   │   └── HashParser.php
│   │                   │   │   ├── Token.php
│   │                   │   │   ├── TokenStream.php
│   │                   │   │   └── Tokenizer
│   │                   │   │       ├── Tokenizer.php
│   │                   │   │       ├── TokenizerEscaping.php
│   │                   │   │       └── TokenizerPatterns.php
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   ├── CssSelectorConverterTest.php
│   │                   │   │   ├── Node
│   │                   │   │   │   ├── AbstractNodeTest.php
│   │                   │   │   │   ├── AttributeNodeTest.php
│   │                   │   │   │   ├── ClassNodeTest.php
│   │                   │   │   │   ├── CombinedSelectorNodeTest.php
│   │                   │   │   │   ├── ElementNodeTest.php
│   │                   │   │   │   ├── FunctionNodeTest.php
│   │                   │   │   │   ├── HashNodeTest.php
│   │                   │   │   │   ├── NegationNodeTest.php
│   │                   │   │   │   ├── PseudoNodeTest.php
│   │                   │   │   │   ├── SelectorNodeTest.php
│   │                   │   │   │   └── SpecificityTest.php
│   │                   │   │   ├── Parser
│   │                   │   │   │   ├── Handler
│   │                   │   │   │   │   ├── AbstractHandlerTest.php
│   │                   │   │   │   │   ├── CommentHandlerTest.php
│   │                   │   │   │   │   ├── HashHandlerTest.php
│   │                   │   │   │   │   ├── IdentifierHandlerTest.php
│   │                   │   │   │   │   ├── NumberHandlerTest.php
│   │                   │   │   │   │   ├── StringHandlerTest.php
│   │                   │   │   │   │   └── WhitespaceHandlerTest.php
│   │                   │   │   │   ├── ParserTest.php
│   │                   │   │   │   ├── ReaderTest.php
│   │                   │   │   │   ├── Shortcut
│   │                   │   │   │   │   ├── ClassParserTest.php
│   │                   │   │   │   │   ├── ElementParserTest.php
│   │                   │   │   │   │   ├── EmptyStringParserTest.php
│   │                   │   │   │   │   └── HashParserTest.php
│   │                   │   │   │   └── TokenStreamTest.php
│   │                   │   │   └── XPath
│   │                   │   │       ├── Fixtures
│   │                   │   │       │   ├── ids.html
│   │                   │   │       │   ├── lang.xml
│   │                   │   │       │   └── shakespear.html
│   │                   │   │       └── TranslatorTest.php
│   │                   │   ├── XPath
│   │                   │   │   ├── Extension
│   │                   │   │   │   ├── AbstractExtension.php
│   │                   │   │   │   ├── AttributeMatchingExtension.php
│   │                   │   │   │   ├── CombinationExtension.php
│   │                   │   │   │   ├── ExtensionInterface.php
│   │                   │   │   │   ├── FunctionExtension.php
│   │                   │   │   │   ├── HtmlExtension.php
│   │                   │   │   │   ├── NodeExtension.php
│   │                   │   │   │   └── PseudoClassExtension.php
│   │                   │   │   ├── Translator.php
│   │                   │   │   ├── TranslatorInterface.php
│   │                   │   │   └── XPathExpr.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Debug
│   │                   │   ├── BufferingLogger.php
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Debug.php
│   │                   │   ├── DebugClassLoader.php
│   │                   │   ├── ErrorHandler.php
│   │                   │   ├── Exception
│   │                   │   │   ├── ClassNotFoundException.php
│   │                   │   │   ├── ContextErrorException.php
│   │                   │   │   ├── FatalErrorException.php
│   │                   │   │   ├── FatalThrowableError.php
│   │                   │   │   ├── FlattenException.php
│   │                   │   │   ├── OutOfMemoryException.php
│   │                   │   │   ├── SilencedErrorContext.php
│   │                   │   │   ├── UndefinedFunctionException.php
│   │                   │   │   └── UndefinedMethodException.php
│   │                   │   ├── ExceptionHandler.php
│   │                   │   ├── FatalErrorHandler
│   │                   │   │   ├── ClassNotFoundFatalErrorHandler.php
│   │                   │   │   ├── FatalErrorHandlerInterface.php
│   │                   │   │   ├── UndefinedFunctionFatalErrorHandler.php
│   │                   │   │   └── UndefinedMethodFatalErrorHandler.php
│   │                   │   ├── LICENSE
│   │                   │   ├── README.md
│   │                   │   ├── Resources
│   │                   │   │   └── ext
│   │                   │   │       ├── README.md
│   │                   │   │       ├── config.m4
│   │                   │   │       ├── config.w32
│   │                   │   │       ├── php_symfony_debug.h
│   │                   │   │       ├── symfony_debug.c
│   │                   │   │       └── tests
│   │                   │   │           ├── 001.phpt
│   │                   │   │           ├── 002.phpt
│   │                   │   │           ├── 002_1.phpt
│   │                   │   │           └── 003.phpt
│   │                   │   ├── Tests
│   │                   │   │   ├── DebugClassLoaderTest.php
│   │                   │   │   ├── ErrorHandlerTest.php
│   │                   │   │   ├── Exception
│   │                   │   │   │   └── FlattenExceptionTest.php
│   │                   │   │   ├── ExceptionHandlerTest.php
│   │                   │   │   ├── FatalErrorHandler
│   │                   │   │   │   ├── ClassNotFoundFatalErrorHandlerTest.php
│   │                   │   │   │   ├── UndefinedFunctionFatalErrorHandlerTest.php
│   │                   │   │   │   └── UndefinedMethodFatalErrorHandlerTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── ClassAlias.php
│   │                   │   │   │   ├── DeprecatedClass.php
│   │                   │   │   │   ├── DeprecatedInterface.php
│   │                   │   │   │   ├── NonDeprecatedInterface.php
│   │                   │   │   │   ├── PEARClass.php
│   │                   │   │   │   ├── ToStringThrower.php
│   │                   │   │   │   ├── casemismatch.php
│   │                   │   │   │   ├── notPsr0Bis.php
│   │                   │   │   │   ├── psr4
│   │                   │   │   │   │   └── Psr4CaseMismatch.php
│   │                   │   │   │   └── reallyNotPsr0.php
│   │                   │   │   ├── Fixtures2
│   │                   │   │   │   └── RequiredTwice.php
│   │                   │   │   ├── HeaderMock.php
│   │                   │   │   └── MockExceptionHandler.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── DependencyInjection
│   │                   │   ├── Alias.php
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Compiler
│   │                   │   │   ├── AnalyzeServiceReferencesPass.php
│   │                   │   │   ├── AutoAliasServicePass.php
│   │                   │   │   ├── AutowirePass.php
│   │                   │   │   ├── CheckCircularReferencesPass.php
│   │                   │   │   ├── CheckDefinitionValidityPass.php
│   │                   │   │   ├── CheckExceptionOnInvalidReferenceBehaviorPass.php
│   │                   │   │   ├── CheckReferenceValidityPass.php
│   │                   │   │   ├── Compiler.php
│   │                   │   │   ├── CompilerPassInterface.php
│   │                   │   │   ├── DecoratorServicePass.php
│   │                   │   │   ├── ExtensionCompilerPass.php
│   │                   │   │   ├── FactoryReturnTypePass.php
│   │                   │   │   ├── InlineServiceDefinitionsPass.php
│   │                   │   │   ├── LoggingFormatter.php
│   │                   │   │   ├── MergeExtensionConfigurationPass.php
│   │                   │   │   ├── PassConfig.php
│   │                   │   │   ├── PriorityTaggedServiceTrait.php
│   │                   │   │   ├── RemoveAbstractDefinitionsPass.php
│   │                   │   │   ├── RemovePrivateAliasesPass.php
│   │                   │   │   ├── RemoveUnusedDefinitionsPass.php
│   │                   │   │   ├── RepeatablePassInterface.php
│   │                   │   │   ├── RepeatedPass.php
│   │                   │   │   ├── ReplaceAliasByActualDefinitionPass.php
│   │                   │   │   ├── ResolveDefinitionTemplatesPass.php
│   │                   │   │   ├── ResolveInvalidReferencesPass.php
│   │                   │   │   ├── ResolveParameterPlaceHoldersPass.php
│   │                   │   │   ├── ResolveReferencesToAliasesPass.php
│   │                   │   │   ├── ServiceReferenceGraph.php
│   │                   │   │   ├── ServiceReferenceGraphEdge.php
│   │                   │   │   └── ServiceReferenceGraphNode.php
│   │                   │   ├── Config
│   │                   │   │   └── AutowireServiceResource.php
│   │                   │   ├── Container.php
│   │                   │   ├── ContainerAwareInterface.php
│   │                   │   ├── ContainerAwareTrait.php
│   │                   │   ├── ContainerBuilder.php
│   │                   │   ├── ContainerInterface.php
│   │                   │   ├── Definition.php
│   │                   │   ├── DefinitionDecorator.php
│   │                   │   ├── Dumper
│   │                   │   │   ├── Dumper.php
│   │                   │   │   ├── DumperInterface.php
│   │                   │   │   ├── GraphvizDumper.php
│   │                   │   │   ├── PhpDumper.php
│   │                   │   │   ├── XmlDumper.php
│   │                   │   │   └── YamlDumper.php
│   │                   │   ├── Exception
│   │                   │   │   ├── BadMethodCallException.php
│   │                   │   │   ├── EnvNotFoundException.php
│   │                   │   │   ├── EnvParameterException.php
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── InvalidArgumentException.php
│   │                   │   │   ├── LogicException.php
│   │                   │   │   ├── OutOfBoundsException.php
│   │                   │   │   ├── ParameterCircularReferenceException.php
│   │                   │   │   ├── ParameterNotFoundException.php
│   │                   │   │   ├── RuntimeException.php
│   │                   │   │   ├── ServiceCircularReferenceException.php
│   │                   │   │   └── ServiceNotFoundException.php
│   │                   │   ├── ExpressionLanguage.php
│   │                   │   ├── ExpressionLanguageProvider.php
│   │                   │   ├── Extension
│   │                   │   │   ├── ConfigurationExtensionInterface.php
│   │                   │   │   ├── Extension.php
│   │                   │   │   ├── ExtensionInterface.php
│   │                   │   │   └── PrependExtensionInterface.php
│   │                   │   ├── LICENSE
│   │                   │   ├── LazyProxy
│   │                   │   │   ├── Instantiator
│   │                   │   │   │   ├── InstantiatorInterface.php
│   │                   │   │   │   └── RealServiceInstantiator.php
│   │                   │   │   └── PhpDumper
│   │                   │   │       ├── DumperInterface.php
│   │                   │   │       └── NullDumper.php
│   │                   │   ├── Loader
│   │                   │   │   ├── ClosureLoader.php
│   │                   │   │   ├── DirectoryLoader.php
│   │                   │   │   ├── FileLoader.php
│   │                   │   │   ├── IniFileLoader.php
│   │                   │   │   ├── PhpFileLoader.php
│   │                   │   │   ├── XmlFileLoader.php
│   │                   │   │   ├── YamlFileLoader.php
│   │                   │   │   └── schema
│   │                   │   │       └── dic
│   │                   │   │           └── services
│   │                   │   │               └── services-1.0.xsd
│   │                   │   ├── Parameter.php
│   │                   │   ├── ParameterBag
│   │                   │   │   ├── EnvPlaceholderParameterBag.php
│   │                   │   │   ├── FrozenParameterBag.php
│   │                   │   │   ├── ParameterBag.php
│   │                   │   │   └── ParameterBagInterface.php
│   │                   │   ├── README.md
│   │                   │   ├── Reference.php
│   │                   │   ├── ResettableContainerInterface.php
│   │                   │   ├── TaggedContainerInterface.php
│   │                   │   ├── Tests
│   │                   │   │   ├── Compiler
│   │                   │   │   │   ├── AnalyzeServiceReferencesPassTest.php
│   │                   │   │   │   ├── AutoAliasServicePassTest.php
│   │                   │   │   │   ├── AutowirePassTest.php
│   │                   │   │   │   ├── CheckCircularReferencesPassTest.php
│   │                   │   │   │   ├── CheckDefinitionValidityPassTest.php
│   │                   │   │   │   ├── CheckExceptionOnInvalidReferenceBehaviorPassTest.php
│   │                   │   │   │   ├── CheckReferenceValidityPassTest.php
│   │                   │   │   │   ├── DecoratorServicePassTest.php
│   │                   │   │   │   ├── ExtensionCompilerPassTest.php
│   │                   │   │   │   ├── FactoryReturnTypePassTest.php
│   │                   │   │   │   ├── InlineServiceDefinitionsPassTest.php
│   │                   │   │   │   ├── IntegrationTest.php
│   │                   │   │   │   ├── MergeExtensionConfigurationPassTest.php
│   │                   │   │   │   ├── OptionalServiceClass.php
│   │                   │   │   │   ├── PassConfigTest.php
│   │                   │   │   │   ├── PriorityTaggedServiceTraitTest.php
│   │                   │   │   │   ├── RemoveUnusedDefinitionsPassTest.php
│   │                   │   │   │   ├── ReplaceAliasByActualDefinitionPassTest.php
│   │                   │   │   │   ├── ResolveDefinitionTemplatesPassTest.php
│   │                   │   │   │   ├── ResolveInvalidReferencesPassTest.php
│   │                   │   │   │   ├── ResolveParameterPlaceHoldersPassTest.php
│   │                   │   │   │   └── ResolveReferencesToAliasesPassTest.php
│   │                   │   │   ├── Config
│   │                   │   │   │   └── AutowireServiceResourceTest.php
│   │                   │   │   ├── ContainerBuilderTest.php
│   │                   │   │   ├── ContainerTest.php
│   │                   │   │   ├── CrossCheckTest.php
│   │                   │   │   ├── DefinitionDecoratorTest.php
│   │                   │   │   ├── DefinitionTest.php
│   │                   │   │   ├── Dumper
│   │                   │   │   │   ├── GraphvizDumperTest.php
│   │                   │   │   │   ├── PhpDumperTest.php
│   │                   │   │   │   ├── XmlDumperTest.php
│   │                   │   │   │   └── YamlDumperTest.php
│   │                   │   │   ├── Extension
│   │                   │   │   │   └── ExtensionTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── CustomDefinition.php
│   │                   │   │   │   ├── FactoryDummy.php
│   │                   │   │   │   ├── containers
│   │                   │   │   │   │   ├── CustomContainer.php
│   │                   │   │   │   │   ├── container10.php
│   │                   │   │   │   │   ├── container11.php
│   │                   │   │   │   │   ├── container12.php
│   │                   │   │   │   │   ├── container13.php
│   │                   │   │   │   │   ├── container14.php
│   │                   │   │   │   │   ├── container15.php
│   │                   │   │   │   │   ├── container16.php
│   │                   │   │   │   │   ├── container17.php
│   │                   │   │   │   │   ├── container19.php
│   │                   │   │   │   │   ├── container21.php
│   │                   │   │   │   │   ├── container24.php
│   │                   │   │   │   │   ├── container8.php
│   │                   │   │   │   │   └── container9.php
│   │                   │   │   │   ├── directory
│   │                   │   │   │   │   ├── import
│   │                   │   │   │   │   │   └── import.yml
│   │                   │   │   │   │   ├── recurse
│   │                   │   │   │   │   │   ├── simple.ini
│   │                   │   │   │   │   │   └── simple.yml
│   │                   │   │   │   │   └── simple.php
│   │                   │   │   │   ├── graphviz
│   │                   │   │   │   │   ├── services1.dot
│   │                   │   │   │   │   ├── services10-1.dot
│   │                   │   │   │   │   ├── services10.dot
│   │                   │   │   │   │   ├── services13.dot
│   │                   │   │   │   │   ├── services14.dot
│   │                   │   │   │   │   ├── services17.dot
│   │                   │   │   │   │   ├── services18.dot
│   │                   │   │   │   │   └── services9.dot
│   │                   │   │   │   ├── includes
│   │                   │   │   │   │   ├── ProjectExtension.php
│   │                   │   │   │   │   ├── ProjectWithXsdExtension.php
│   │                   │   │   │   │   ├── ProjectWithXsdExtensionInPhar.phar
│   │                   │   │   │   │   ├── classes.php
│   │                   │   │   │   │   ├── createphar.php
│   │                   │   │   │   │   ├── foo.php
│   │                   │   │   │   │   └── schema
│   │                   │   │   │   │       └── project-1.0.xsd
│   │                   │   │   │   ├── ini
│   │                   │   │   │   │   ├── almostvalid.ini
│   │                   │   │   │   │   ├── nonvalid.ini
│   │                   │   │   │   │   ├── parameters.ini
│   │                   │   │   │   │   ├── parameters1.ini
│   │                   │   │   │   │   ├── parameters2.ini
│   │                   │   │   │   │   └── types.ini
│   │                   │   │   │   ├── php
│   │                   │   │   │   │   ├── services1-1.php
│   │                   │   │   │   │   ├── services1.php
│   │                   │   │   │   │   ├── services10.php
│   │                   │   │   │   │   ├── services12.php
│   │                   │   │   │   │   ├── services13.php
│   │                   │   │   │   │   ├── services19.php
│   │                   │   │   │   │   ├── services24.php
│   │                   │   │   │   │   ├── services26.php
│   │                   │   │   │   │   ├── services8.php
│   │                   │   │   │   │   ├── services9.php
│   │                   │   │   │   │   ├── services9_compiled.php
│   │                   │   │   │   │   └── simple.php
│   │                   │   │   │   ├── xml
│   │                   │   │   │   │   ├── extension1
│   │                   │   │   │   │   │   └── services.xml
│   │                   │   │   │   │   ├── extension2
│   │                   │   │   │   │   │   └── services.xml
│   │                   │   │   │   │   ├── extensions
│   │                   │   │   │   │   │   ├── services1.xml
│   │                   │   │   │   │   │   ├── services2.xml
│   │                   │   │   │   │   │   ├── services3.xml
│   │                   │   │   │   │   │   ├── services4.xml
│   │                   │   │   │   │   │   ├── services5.xml
│   │                   │   │   │   │   │   ├── services6.xml
│   │                   │   │   │   │   │   └── services7.xml
│   │                   │   │   │   │   ├── legacy_invalid_alias_definition.xml
│   │                   │   │   │   │   ├── namespaces.xml
│   │                   │   │   │   │   ├── nonvalid.xml
│   │                   │   │   │   │   ├── services1.xml
│   │                   │   │   │   │   ├── services10.xml
│   │                   │   │   │   │   ├── services13.xml
│   │                   │   │   │   │   ├── services14.xml
│   │                   │   │   │   │   ├── services2.xml
│   │                   │   │   │   │   ├── services21.xml
│   │                   │   │   │   │   ├── services22.xml
│   │                   │   │   │   │   ├── services23.xml
│   │                   │   │   │   │   ├── services24.xml
│   │                   │   │   │   │   ├── services3.xml
│   │                   │   │   │   │   ├── services4.xml
│   │                   │   │   │   │   ├── services4_bad_import.xml
│   │                   │   │   │   │   ├── services5.xml
│   │                   │   │   │   │   ├── services6.xml
│   │                   │   │   │   │   ├── services7.xml
│   │                   │   │   │   │   ├── services8.xml
│   │                   │   │   │   │   ├── services9.xml
│   │                   │   │   │   │   ├── services_deprecated.xml
│   │                   │   │   │   │   ├── tag_with_empty_name.xml
│   │                   │   │   │   │   ├── tag_without_name.xml
│   │                   │   │   │   │   ├── with_key_outside_collection.xml
│   │                   │   │   │   │   └── withdoctype.xml
│   │                   │   │   │   └── yaml
│   │                   │   │   │       ├── bad_calls.yml
│   │                   │   │   │       ├── bad_decorates.yml
│   │                   │   │   │       ├── bad_format.yml
│   │                   │   │   │       ├── bad_import.yml
│   │                   │   │   │       ├── bad_imports.yml
│   │                   │   │   │       ├── bad_parameters.yml
│   │                   │   │   │       ├── bad_service.yml
│   │                   │   │   │       ├── bad_services.yml
│   │                   │   │   │       ├── bad_types1.yml
│   │                   │   │   │       ├── bad_types2.yml
│   │                   │   │   │       ├── badtag1.yml
│   │                   │   │   │       ├── badtag2.yml
│   │                   │   │   │       ├── badtag3.yml
│   │                   │   │   │       ├── badtag4.yml
│   │                   │   │   │       ├── legacy_invalid_alias_definition.yml
│   │                   │   │   │       ├── legacy_invalid_definition.yml
│   │                   │   │   │       ├── nonvalid1.yml
│   │                   │   │   │       ├── nonvalid2.yml
│   │                   │   │   │       ├── services1.yml
│   │                   │   │   │       ├── services10.yml
│   │                   │   │   │       ├── services11.yml
│   │                   │   │   │       ├── services13.yml
│   │                   │   │   │       ├── services14.yml
│   │                   │   │   │       ├── services2.yml
│   │                   │   │   │       ├── services21.yml
│   │                   │   │   │       ├── services22.yml
│   │                   │   │   │       ├── services23.yml
│   │                   │   │   │       ├── services24.yml
│   │                   │   │   │       ├── services26.yml
│   │                   │   │   │       ├── services3.yml
│   │                   │   │   │       ├── services4.yml
│   │                   │   │   │       ├── services4_bad_import.yml
│   │                   │   │   │       ├── services6.yml
│   │                   │   │   │       ├── services7.yml
│   │                   │   │   │       ├── services8.yml
│   │                   │   │   │       ├── services9.yml
│   │                   │   │   │       ├── services_configurator_short_syntax.yml
│   │                   │   │   │       ├── tag_name_empty_string.yml
│   │                   │   │   │       └── tag_name_no_string.yml
│   │                   │   │   ├── LazyProxy
│   │                   │   │   │   ├── Instantiator
│   │                   │   │   │   │   └── RealServiceInstantiatorTest.php
│   │                   │   │   │   └── PhpDumper
│   │                   │   │   │       └── NullDumperTest.php
│   │                   │   │   ├── Loader
│   │                   │   │   │   ├── ClosureLoaderTest.php
│   │                   │   │   │   ├── DirectoryLoaderTest.php
│   │                   │   │   │   ├── IniFileLoaderTest.php
│   │                   │   │   │   ├── PhpFileLoaderTest.php
│   │                   │   │   │   ├── XmlFileLoaderTest.php
│   │                   │   │   │   └── YamlFileLoaderTest.php
│   │                   │   │   ├── ParameterBag
│   │                   │   │   │   ├── EnvPlaceholderParameterBagTest.php
│   │                   │   │   │   ├── FrozenParameterBagTest.php
│   │                   │   │   │   └── ParameterBagTest.php
│   │                   │   │   ├── ParameterTest.php
│   │                   │   │   └── ReferenceTest.php
│   │                   │   ├── Variable.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── DomCrawler
│   │                   │   ├── AbstractUriElement.php
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Crawler.php
│   │                   │   ├── Field
│   │                   │   │   ├── ChoiceFormField.php
│   │                   │   │   ├── FileFormField.php
│   │                   │   │   ├── FormField.php
│   │                   │   │   ├── InputFormField.php
│   │                   │   │   └── TextareaFormField.php
│   │                   │   ├── Form.php
│   │                   │   ├── FormFieldRegistry.php
│   │                   │   ├── Image.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Link.php
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   ├── CrawlerTest.php
│   │                   │   │   ├── Field
│   │                   │   │   │   ├── ChoiceFormFieldTest.php
│   │                   │   │   │   ├── FileFormFieldTest.php
│   │                   │   │   │   ├── FormFieldTest.php
│   │                   │   │   │   ├── FormFieldTestCase.php
│   │                   │   │   │   ├── InputFormFieldTest.php
│   │                   │   │   │   └── TextareaFormFieldTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── no-extension
│   │                   │   │   │   └── windows-1250.html
│   │                   │   │   ├── FormTest.php
│   │                   │   │   ├── ImageTest.php
│   │                   │   │   └── LinkTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── EventDispatcher
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── ContainerAwareEventDispatcher.php
│   │                   │   ├── Debug
│   │                   │   │   ├── TraceableEventDispatcher.php
│   │                   │   │   ├── TraceableEventDispatcherInterface.php
│   │                   │   │   └── WrappedListener.php
│   │                   │   ├── DependencyInjection
│   │                   │   │   └── RegisterListenersPass.php
│   │                   │   ├── Event.php
│   │                   │   ├── EventDispatcher.php
│   │                   │   ├── EventDispatcherInterface.php
│   │                   │   ├── EventSubscriberInterface.php
│   │                   │   ├── GenericEvent.php
│   │                   │   ├── ImmutableEventDispatcher.php
│   │                   │   ├── LICENSE
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   ├── AbstractEventDispatcherTest.php
│   │                   │   │   ├── ContainerAwareEventDispatcherTest.php
│   │                   │   │   ├── Debug
│   │                   │   │   │   └── TraceableEventDispatcherTest.php
│   │                   │   │   ├── DependencyInjection
│   │                   │   │   │   └── RegisterListenersPassTest.php
│   │                   │   │   ├── EventDispatcherTest.php
│   │                   │   │   ├── EventTest.php
│   │                   │   │   ├── GenericEventTest.php
│   │                   │   │   └── ImmutableEventDispatcherTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── ExpressionLanguage
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Compiler.php
│   │                   │   ├── Expression.php
│   │                   │   ├── ExpressionFunction.php
│   │                   │   ├── ExpressionFunctionProviderInterface.php
│   │                   │   ├── ExpressionLanguage.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Lexer.php
│   │                   │   ├── Node
│   │                   │   │   ├── ArgumentsNode.php
│   │                   │   │   ├── ArrayNode.php
│   │                   │   │   ├── BinaryNode.php
│   │                   │   │   ├── ConditionalNode.php
│   │                   │   │   ├── ConstantNode.php
│   │                   │   │   ├── FunctionNode.php
│   │                   │   │   ├── GetAttrNode.php
│   │                   │   │   ├── NameNode.php
│   │                   │   │   ├── Node.php
│   │                   │   │   └── UnaryNode.php
│   │                   │   ├── ParsedExpression.php
│   │                   │   ├── Parser.php
│   │                   │   ├── ParserCache
│   │                   │   │   ├── ArrayParserCache.php
│   │                   │   │   ├── ParserCacheAdapter.php
│   │                   │   │   └── ParserCacheInterface.php
│   │                   │   ├── README.md
│   │                   │   ├── Resources
│   │                   │   │   └── bin
│   │                   │   │       └── generate_operator_regex.php
│   │                   │   ├── SerializedParsedExpression.php
│   │                   │   ├── SyntaxError.php
│   │                   │   ├── Tests
│   │                   │   │   ├── ExpressionLanguageTest.php
│   │                   │   │   ├── ExpressionTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   └── TestProvider.php
│   │                   │   │   ├── LexerTest.php
│   │                   │   │   ├── Node
│   │                   │   │   │   ├── AbstractNodeTest.php
│   │                   │   │   │   ├── ArgumentsNodeTest.php
│   │                   │   │   │   ├── ArrayNodeTest.php
│   │                   │   │   │   ├── BinaryNodeTest.php
│   │                   │   │   │   ├── ConditionalNodeTest.php
│   │                   │   │   │   ├── ConstantNodeTest.php
│   │                   │   │   │   ├── FunctionNodeTest.php
│   │                   │   │   │   ├── GetAttrNodeTest.php
│   │                   │   │   │   ├── NameNodeTest.php
│   │                   │   │   │   ├── NodeTest.php
│   │                   │   │   │   └── UnaryNodeTest.php
│   │                   │   │   ├── ParsedExpressionTest.php
│   │                   │   │   ├── ParserCache
│   │                   │   │   │   └── ParserCacheAdapterTest.php
│   │                   │   │   └── ParserTest.php
│   │                   │   ├── Token.php
│   │                   │   ├── TokenStream.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Filesystem
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Exception
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── FileNotFoundException.php
│   │                   │   │   ├── IOException.php
│   │                   │   │   └── IOExceptionInterface.php
│   │                   │   ├── Filesystem.php
│   │                   │   ├── LICENSE
│   │                   │   ├── LockHandler.php
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   ├── ExceptionTest.php
│   │                   │   │   ├── FilesystemTest.php
│   │                   │   │   ├── FilesystemTestCase.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   └── MockStream
│   │                   │   │   │       └── MockStream.php
│   │                   │   │   └── LockHandlerTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Finder
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Comparator
│   │                   │   │   ├── Comparator.php
│   │                   │   │   ├── DateComparator.php
│   │                   │   │   └── NumberComparator.php
│   │                   │   ├── Exception
│   │                   │   │   ├── AccessDeniedException.php
│   │                   │   │   └── ExceptionInterface.php
│   │                   │   ├── Finder.php
│   │                   │   ├── Glob.php
│   │                   │   ├── Iterator
│   │                   │   │   ├── CustomFilterIterator.php
│   │                   │   │   ├── DateRangeFilterIterator.php
│   │                   │   │   ├── DepthRangeFilterIterator.php
│   │                   │   │   ├── ExcludeDirectoryFilterIterator.php
│   │                   │   │   ├── FileTypeFilterIterator.php
│   │                   │   │   ├── FilecontentFilterIterator.php
│   │                   │   │   ├── FilenameFilterIterator.php
│   │                   │   │   ├── FilterIterator.php
│   │                   │   │   ├── MultiplePcreFilterIterator.php
│   │                   │   │   ├── PathFilterIterator.php
│   │                   │   │   ├── RecursiveDirectoryIterator.php
│   │                   │   │   ├── SizeRangeFilterIterator.php
│   │                   │   │   └── SortableIterator.php
│   │                   │   ├── LICENSE
│   │                   │   ├── README.md
│   │                   │   ├── SplFileInfo.php
│   │                   │   ├── Tests
│   │                   │   │   ├── Comparator
│   │                   │   │   │   ├── ComparatorTest.php
│   │                   │   │   │   ├── DateComparatorTest.php
│   │                   │   │   │   └── NumberComparatorTest.php
│   │                   │   │   ├── FinderTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── A
│   │                   │   │   │   │   ├── B
│   │                   │   │   │   │   │   ├── C
│   │                   │   │   │   │   │   │   └── abc.dat
│   │                   │   │   │   │   │   └── ab.dat
│   │                   │   │   │   │   └── a.dat
│   │                   │   │   │   ├── copy
│   │                   │   │   │   │   └── A
│   │                   │   │   │   │       ├── B
│   │                   │   │   │   │       │   ├── C
│   │                   │   │   │   │       │   │   └── abc.dat.copy
│   │                   │   │   │   │       │   └── ab.dat.copy
│   │                   │   │   │   │       └── a.dat.copy
│   │                   │   │   │   ├── dolor.txt
│   │                   │   │   │   ├── ipsum.txt
│   │                   │   │   │   ├── lorem.txt
│   │                   │   │   │   ├── one
│   │                   │   │   │   │   ├── a
│   │                   │   │   │   │   └── b
│   │                   │   │   │   │       ├── c.neon
│   │                   │   │   │   │       └── d.neon
│   │                   │   │   │   ├── r+e.gex[c]a(r)s
│   │                   │   │   │   │   └── dir
│   │                   │   │   │   │       └── bar.dat
│   │                   │   │   │   └── with\ space
│   │                   │   │   │       └── foo.txt
│   │                   │   │   ├── GlobTest.php
│   │                   │   │   └── Iterator
│   │                   │   │       ├── CustomFilterIteratorTest.php
│   │                   │   │       ├── DateRangeFilterIteratorTest.php
│   │                   │   │       ├── DepthRangeFilterIteratorTest.php
│   │                   │   │       ├── ExcludeDirectoryFilterIteratorTest.php
│   │                   │   │       ├── FileTypeFilterIteratorTest.php
│   │                   │   │       ├── FilecontentFilterIteratorTest.php
│   │                   │   │       ├── FilenameFilterIteratorTest.php
│   │                   │   │       ├── FilterIteratorTest.php
│   │                   │   │       ├── Iterator.php
│   │                   │   │       ├── IteratorTestCase.php
│   │                   │   │       ├── MockFileListIterator.php
│   │                   │   │       ├── MockSplFileInfo.php
│   │                   │   │       ├── MultiplePcreFilterIteratorTest.php
│   │                   │   │       ├── PathFilterIteratorTest.php
│   │                   │   │       ├── RealIteratorTestCase.php
│   │                   │   │       ├── RecursiveDirectoryIteratorTest.php
│   │                   │   │       ├── SizeRangeFilterIteratorTest.php
│   │                   │   │       └── SortableIteratorTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Form
│   │                   │   ├── AbstractExtension.php
│   │                   │   ├── AbstractRendererEngine.php
│   │                   │   ├── AbstractType.php
│   │                   │   ├── AbstractTypeExtension.php
│   │                   │   ├── Button.php
│   │                   │   ├── ButtonBuilder.php
│   │                   │   ├── ButtonTypeInterface.php
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── CallbackTransformer.php
│   │                   │   ├── ChoiceList
│   │                   │   │   ├── ArrayChoiceList.php
│   │                   │   │   ├── ChoiceListInterface.php
│   │                   │   │   ├── Factory
│   │                   │   │   │   ├── CachingFactoryDecorator.php
│   │                   │   │   │   ├── ChoiceListFactoryInterface.php
│   │                   │   │   │   ├── DefaultChoiceListFactory.php
│   │                   │   │   │   └── PropertyAccessDecorator.php
│   │                   │   │   ├── LazyChoiceList.php
│   │                   │   │   ├── Loader
│   │                   │   │   │   ├── CallbackChoiceLoader.php
│   │                   │   │   │   └── ChoiceLoaderInterface.php
│   │                   │   │   └── View
│   │                   │   │       ├── ChoiceGroupView.php
│   │                   │   │       ├── ChoiceListView.php
│   │                   │   │       └── ChoiceView.php
│   │                   │   ├── ClickableInterface.php
│   │                   │   ├── DataMapperInterface.php
│   │                   │   ├── DataTransformerInterface.php
│   │                   │   ├── Exception
│   │                   │   │   ├── AlreadySubmittedException.php
│   │                   │   │   ├── BadMethodCallException.php
│   │                   │   │   ├── ErrorMappingException.php
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── InvalidArgumentException.php
│   │                   │   │   ├── InvalidConfigurationException.php
│   │                   │   │   ├── LogicException.php
│   │                   │   │   ├── OutOfBoundsException.php
│   │                   │   │   ├── RuntimeException.php
│   │                   │   │   ├── StringCastException.php
│   │                   │   │   ├── TransformationFailedException.php
│   │                   │   │   └── UnexpectedTypeException.php
│   │                   │   ├── Extension
│   │                   │   │   ├── Core
│   │                   │   │   │   ├── CoreExtension.php
│   │                   │   │   │   ├── DataMapper
│   │                   │   │   │   │   ├── CheckboxListMapper.php
│   │                   │   │   │   │   ├── PropertyPathMapper.php
│   │                   │   │   │   │   └── RadioListMapper.php
│   │                   │   │   │   ├── DataTransformer
│   │                   │   │   │   │   ├── ArrayToPartsTransformer.php
│   │                   │   │   │   │   ├── BaseDateTimeTransformer.php
│   │                   │   │   │   │   ├── BooleanToStringTransformer.php
│   │                   │   │   │   │   ├── ChoiceToValueTransformer.php
│   │                   │   │   │   │   ├── ChoicesToValuesTransformer.php
│   │                   │   │   │   │   ├── DataTransformerChain.php
│   │                   │   │   │   │   ├── DateIntervalToArrayTransformer.php
│   │                   │   │   │   │   ├── DateIntervalToStringTransformer.php
│   │                   │   │   │   │   ├── DateTimeToArrayTransformer.php
│   │                   │   │   │   │   ├── DateTimeToLocalizedStringTransformer.php
│   │                   │   │   │   │   ├── DateTimeToRfc3339Transformer.php
│   │                   │   │   │   │   ├── DateTimeToStringTransformer.php
│   │                   │   │   │   │   ├── DateTimeToTimestampTransformer.php
│   │                   │   │   │   │   ├── IntegerToLocalizedStringTransformer.php
│   │                   │   │   │   │   ├── MoneyToLocalizedStringTransformer.php
│   │                   │   │   │   │   ├── NumberToLocalizedStringTransformer.php
│   │                   │   │   │   │   ├── PercentToLocalizedStringTransformer.php
│   │                   │   │   │   │   └── ValueToDuplicatesTransformer.php
│   │                   │   │   │   ├── EventListener
│   │                   │   │   │   │   ├── FixUrlProtocolListener.php
│   │                   │   │   │   │   ├── MergeCollectionListener.php
│   │                   │   │   │   │   ├── ResizeFormListener.php
│   │                   │   │   │   │   └── TrimListener.php
│   │                   │   │   │   └── Type
│   │                   │   │   │       ├── BaseType.php
│   │                   │   │   │       ├── BirthdayType.php
│   │                   │   │   │       ├── ButtonType.php
│   │                   │   │   │       ├── CheckboxType.php
│   │                   │   │   │       ├── ChoiceType.php
│   │                   │   │   │       ├── CollectionType.php
│   │                   │   │   │       ├── CountryType.php
│   │                   │   │   │       ├── CurrencyType.php
│   │                   │   │   │       ├── DateIntervalType.php
│   │                   │   │   │       ├── DateTimeType.php
│   │                   │   │   │       ├── DateType.php
│   │                   │   │   │       ├── EmailType.php
│   │                   │   │   │       ├── FileType.php
│   │                   │   │   │       ├── FormType.php
│   │                   │   │   │       ├── HiddenType.php
│   │                   │   │   │       ├── IntegerType.php
│   │                   │   │   │       ├── LanguageType.php
│   │                   │   │   │       ├── LocaleType.php
│   │                   │   │   │       ├── MoneyType.php
│   │                   │   │   │       ├── NumberType.php
│   │                   │   │   │       ├── PasswordType.php
│   │                   │   │   │       ├── PercentType.php
│   │                   │   │   │       ├── RadioType.php
│   │                   │   │   │       ├── RangeType.php
│   │                   │   │   │       ├── RepeatedType.php
│   │                   │   │   │       ├── ResetType.php
│   │                   │   │   │       ├── SearchType.php
│   │                   │   │   │       ├── SubmitType.php
│   │                   │   │   │       ├── TextType.php
│   │                   │   │   │       ├── TextareaType.php
│   │                   │   │   │       ├── TimeType.php
│   │                   │   │   │       ├── TimezoneType.php
│   │                   │   │   │       └── UrlType.php
│   │                   │   │   ├── Csrf
│   │                   │   │   │   ├── CsrfExtension.php
│   │                   │   │   │   ├── EventListener
│   │                   │   │   │   │   └── CsrfValidationListener.php
│   │                   │   │   │   └── Type
│   │                   │   │   │       └── FormTypeCsrfExtension.php
│   │                   │   │   ├── DataCollector
│   │                   │   │   │   ├── DataCollectorExtension.php
│   │                   │   │   │   ├── EventListener
│   │                   │   │   │   │   └── DataCollectorListener.php
│   │                   │   │   │   ├── FormDataCollector.php
│   │                   │   │   │   ├── FormDataCollectorInterface.php
│   │                   │   │   │   ├── FormDataExtractor.php
│   │                   │   │   │   ├── FormDataExtractorInterface.php
│   │                   │   │   │   ├── Proxy
│   │                   │   │   │   │   ├── ResolvedTypeDataCollectorProxy.php
│   │                   │   │   │   │   └── ResolvedTypeFactoryDataCollectorProxy.php
│   │                   │   │   │   └── Type
│   │                   │   │   │       └── DataCollectorTypeExtension.php
│   │                   │   │   ├── DependencyInjection
│   │                   │   │   │   └── DependencyInjectionExtension.php
│   │                   │   │   ├── HttpFoundation
│   │                   │   │   │   ├── HttpFoundationExtension.php
│   │                   │   │   │   ├── HttpFoundationRequestHandler.php
│   │                   │   │   │   └── Type
│   │                   │   │   │       └── FormTypeHttpFoundationExtension.php
│   │                   │   │   ├── Templating
│   │                   │   │   │   ├── TemplatingExtension.php
│   │                   │   │   │   └── TemplatingRendererEngine.php
│   │                   │   │   └── Validator
│   │                   │   │       ├── Constraints
│   │                   │   │       │   ├── Form.php
│   │                   │   │       │   └── FormValidator.php
│   │                   │   │       ├── EventListener
│   │                   │   │       │   └── ValidationListener.php
│   │                   │   │       ├── Type
│   │                   │   │       │   ├── BaseValidatorExtension.php
│   │                   │   │       │   ├── FormTypeValidatorExtension.php
│   │                   │   │       │   ├── RepeatedTypeValidatorExtension.php
│   │                   │   │       │   ├── SubmitTypeValidatorExtension.php
│   │                   │   │       │   └── UploadValidatorExtension.php
│   │                   │   │       ├── Util
│   │                   │   │       │   └── ServerParams.php
│   │                   │   │       ├── ValidatorExtension.php
│   │                   │   │       ├── ValidatorTypeGuesser.php
│   │                   │   │       └── ViolationMapper
│   │                   │   │           ├── MappingRule.php
│   │                   │   │           ├── RelativePath.php
│   │                   │   │           ├── ViolationMapper.php
│   │                   │   │           ├── ViolationMapperInterface.php
│   │                   │   │           ├── ViolationPath.php
│   │                   │   │           └── ViolationPathIterator.php
│   │                   │   ├── Form.php
│   │                   │   ├── FormBuilder.php
│   │                   │   ├── FormBuilderInterface.php
│   │                   │   ├── FormConfigBuilder.php
│   │                   │   ├── FormConfigBuilderInterface.php
│   │                   │   ├── FormConfigInterface.php
│   │                   │   ├── FormError.php
│   │                   │   ├── FormErrorIterator.php
│   │                   │   ├── FormEvent.php
│   │                   │   ├── FormEvents.php
│   │                   │   ├── FormExtensionInterface.php
│   │                   │   ├── FormFactory.php
│   │                   │   ├── FormFactoryBuilder.php
│   │                   │   ├── FormFactoryBuilderInterface.php
│   │                   │   ├── FormFactoryInterface.php
│   │                   │   ├── FormInterface.php
│   │                   │   ├── FormRegistry.php
│   │                   │   ├── FormRegistryInterface.php
│   │                   │   ├── FormRenderer.php
│   │                   │   ├── FormRendererEngineInterface.php
│   │                   │   ├── FormRendererInterface.php
│   │                   │   ├── FormTypeExtensionInterface.php
│   │                   │   ├── FormTypeGuesserChain.php
│   │                   │   ├── FormTypeGuesserInterface.php
│   │                   │   ├── FormTypeInterface.php
│   │                   │   ├── FormView.php
│   │                   │   ├── Forms.php
│   │                   │   ├── Guess
│   │                   │   │   ├── Guess.php
│   │                   │   │   ├── TypeGuess.php
│   │                   │   │   └── ValueGuess.php
│   │                   │   ├── LICENSE
│   │                   │   ├── NativeRequestHandler.php
│   │                   │   ├── PreloadedExtension.php
│   │                   │   ├── README.md
│   │                   │   ├── RequestHandlerInterface.php
│   │                   │   ├── ResolvedFormType.php
│   │                   │   ├── ResolvedFormTypeFactory.php
│   │                   │   ├── ResolvedFormTypeFactoryInterface.php
│   │                   │   ├── ResolvedFormTypeInterface.php
│   │                   │   ├── Resources
│   │                   │   │   ├── config
│   │                   │   │   │   └── validation.xml
│   │                   │   │   └── translations
│   │                   │   │       ├── validators.ar.xlf
│   │                   │   │       ├── validators.az.xlf
│   │                   │   │       ├── validators.bg.xlf
│   │                   │   │       ├── validators.ca.xlf
│   │                   │   │       ├── validators.cs.xlf
│   │                   │   │       ├── validators.da.xlf
│   │                   │   │       ├── validators.de.xlf
│   │                   │   │       ├── validators.el.xlf
│   │                   │   │       ├── validators.en.xlf
│   │                   │   │       ├── validators.es.xlf
│   │                   │   │       ├── validators.et.xlf
│   │                   │   │       ├── validators.eu.xlf
│   │                   │   │       ├── validators.fa.xlf
│   │                   │   │       ├── validators.fi.xlf
│   │                   │   │       ├── validators.fr.xlf
│   │                   │   │       ├── validators.gl.xlf
│   │                   │   │       ├── validators.he.xlf
│   │                   │   │       ├── validators.hr.xlf
│   │                   │   │       ├── validators.hu.xlf
│   │                   │   │       ├── validators.hy.xlf
│   │                   │   │       ├── validators.id.xlf
│   │                   │   │       ├── validators.it.xlf
│   │                   │   │       ├── validators.ja.xlf
│   │                   │   │       ├── validators.lb.xlf
│   │                   │   │       ├── validators.lt.xlf
│   │                   │   │       ├── validators.lv.xlf
│   │                   │   │       ├── validators.mn.xlf
│   │                   │   │       ├── validators.nl.xlf
│   │                   │   │       ├── validators.no.xlf
│   │                   │   │       ├── validators.pl.xlf
│   │                   │   │       ├── validators.pt.xlf
│   │                   │   │       ├── validators.pt_BR.xlf
│   │                   │   │       ├── validators.ro.xlf
│   │                   │   │       ├── validators.ru.xlf
│   │                   │   │       ├── validators.sk.xlf
│   │                   │   │       ├── validators.sl.xlf
│   │                   │   │       ├── validators.sr_Cyrl.xlf
│   │                   │   │       ├── validators.sr_Latn.xlf
│   │                   │   │       ├── validators.sv.xlf
│   │                   │   │       ├── validators.uk.xlf
│   │                   │   │       └── validators.zh_CN.xlf
│   │                   │   ├── ReversedTransformer.php
│   │                   │   ├── SubmitButton.php
│   │                   │   ├── SubmitButtonBuilder.php
│   │                   │   ├── SubmitButtonTypeInterface.php
│   │                   │   ├── Test
│   │                   │   │   ├── FormBuilderInterface.php
│   │                   │   │   ├── FormIntegrationTestCase.php
│   │                   │   │   ├── FormInterface.php
│   │                   │   │   ├── FormPerformanceTestCase.php
│   │                   │   │   └── TypeTestCase.php
│   │                   │   ├── Tests
│   │                   │   │   ├── AbstractBootstrap3HorizontalLayoutTest.php
│   │                   │   │   ├── AbstractBootstrap3LayoutTest.php
│   │                   │   │   ├── AbstractDivLayoutTest.php
│   │                   │   │   ├── AbstractExtensionTest.php
│   │                   │   │   ├── AbstractFormTest.php
│   │                   │   │   ├── AbstractLayoutTest.php
│   │                   │   │   ├── AbstractRequestHandlerTest.php
│   │                   │   │   ├── AbstractTableLayoutTest.php
│   │                   │   │   ├── ButtonBuilderTest.php
│   │                   │   │   ├── ButtonTest.php
│   │                   │   │   ├── CallbackTransformerTest.php
│   │                   │   │   ├── ChoiceList
│   │                   │   │   │   ├── AbstractChoiceListTest.php
│   │                   │   │   │   ├── ArrayChoiceListTest.php
│   │                   │   │   │   ├── Factory
│   │                   │   │   │   │   ├── CachingFactoryDecoratorTest.php
│   │                   │   │   │   │   ├── DefaultChoiceListFactoryTest.php
│   │                   │   │   │   │   └── PropertyAccessDecoratorTest.php
│   │                   │   │   │   ├── LazyChoiceListTest.php
│   │                   │   │   │   └── Loader
│   │                   │   │   │       └── CallbackChoiceLoaderTest.php
│   │                   │   │   ├── CompoundFormPerformanceTest.php
│   │                   │   │   ├── CompoundFormTest.php
│   │                   │   │   ├── Extension
│   │                   │   │   │   ├── Core
│   │                   │   │   │   │   ├── DataMapper
│   │                   │   │   │   │   │   └── PropertyPathMapperTest.php
│   │                   │   │   │   │   ├── DataTransformer
│   │                   │   │   │   │   │   ├── ArrayToPartsTransformerTest.php
│   │                   │   │   │   │   │   ├── BaseDateTimeTransformerTest.php
│   │                   │   │   │   │   │   ├── BooleanToStringTransformerTest.php
│   │                   │   │   │   │   │   ├── ChoiceToValueTransformerTest.php
│   │                   │   │   │   │   │   ├── ChoicesToValuesTransformerTest.php
│   │                   │   │   │   │   │   ├── DataTransformerChainTest.php
│   │                   │   │   │   │   │   ├── DateIntervalTestCase.php
│   │                   │   │   │   │   │   ├── DateIntervalToArrayTransformerTest.php
│   │                   │   │   │   │   │   ├── DateIntervalToStringTransformerTest.php
│   │                   │   │   │   │   │   ├── DateTimeTestCase.php
│   │                   │   │   │   │   │   ├── DateTimeToArrayTransformerTest.php
│   │                   │   │   │   │   │   ├── DateTimeToLocalizedStringTransformerTest.php
│   │                   │   │   │   │   │   ├── DateTimeToRfc3339TransformerTest.php
│   │                   │   │   │   │   │   ├── DateTimeToStringTransformerTest.php
│   │                   │   │   │   │   │   ├── DateTimeToTimestampTransformerTest.php
│   │                   │   │   │   │   │   ├── IntegerToLocalizedStringTransformerTest.php
│   │                   │   │   │   │   │   ├── MoneyToLocalizedStringTransformerTest.php
│   │                   │   │   │   │   │   ├── NumberToLocalizedStringTransformerTest.php
│   │                   │   │   │   │   │   ├── PercentToLocalizedStringTransformerTest.php
│   │                   │   │   │   │   │   └── ValueToDuplicatesTransformerTest.php
│   │                   │   │   │   │   ├── EventListener
│   │                   │   │   │   │   │   ├── FixUrlProtocolListenerTest.php
│   │                   │   │   │   │   │   ├── Fixtures
│   │                   │   │   │   │   │   │   └── randomhash
│   │                   │   │   │   │   │   ├── MergeCollectionListenerArrayObjectTest.php
│   │                   │   │   │   │   │   ├── MergeCollectionListenerArrayTest.php
│   │                   │   │   │   │   │   ├── MergeCollectionListenerCustomArrayObjectTest.php
│   │                   │   │   │   │   │   ├── MergeCollectionListenerTest.php
│   │                   │   │   │   │   │   ├── ResizeFormListenerTest.php
│   │                   │   │   │   │   │   └── TrimListenerTest.php
│   │                   │   │   │   │   └── Type
│   │                   │   │   │   │       ├── BaseTypeTest.php
│   │                   │   │   │   │       ├── BirthdayTypeTest.php
│   │                   │   │   │   │       ├── ButtonTypeTest.php
│   │                   │   │   │   │       ├── CheckboxTypeTest.php
│   │                   │   │   │   │       ├── ChoiceTypePerformanceTest.php
│   │                   │   │   │   │       ├── ChoiceTypeTest.php
│   │                   │   │   │   │       ├── CollectionTypeTest.php
│   │                   │   │   │   │       ├── CountryTypeTest.php
│   │                   │   │   │   │       ├── CurrencyTypeTest.php
│   │                   │   │   │   │       ├── DateIntervalTypeTest.php
│   │                   │   │   │   │       ├── DateTimeTypeTest.php
│   │                   │   │   │   │       ├── DateTypeTest.php
│   │                   │   │   │   │       ├── FileTypeTest.php
│   │                   │   │   │   │       ├── FormTypeTest.php
│   │                   │   │   │   │       ├── IntegerTypeTest.php
│   │                   │   │   │   │       ├── LanguageTypeTest.php
│   │                   │   │   │   │       ├── LocaleTypeTest.php
│   │                   │   │   │   │       ├── MoneyTypeTest.php
│   │                   │   │   │   │       ├── NumberTypeTest.php
│   │                   │   │   │   │       ├── PasswordTypeTest.php
│   │                   │   │   │   │       ├── RepeatedTypeTest.php
│   │                   │   │   │   │       ├── SubmitTypeTest.php
│   │                   │   │   │   │       ├── TextTypeTest.php
│   │                   │   │   │   │       ├── TimeTypeTest.php
│   │                   │   │   │   │       ├── TimezoneTypeTest.php
│   │                   │   │   │   │       └── UrlTypeTest.php
│   │                   │   │   │   ├── Csrf
│   │                   │   │   │   │   ├── EventListener
│   │                   │   │   │   │   │   └── CsrfValidationListenerTest.php
│   │                   │   │   │   │   └── Type
│   │                   │   │   │   │       └── FormTypeCsrfExtensionTest.php
│   │                   │   │   │   ├── DataCollector
│   │                   │   │   │   │   ├── DataCollectorExtensionTest.php
│   │                   │   │   │   │   ├── FormDataCollectorTest.php
│   │                   │   │   │   │   ├── FormDataExtractorTest.php
│   │                   │   │   │   │   └── Type
│   │                   │   │   │   │       └── DataCollectorTypeExtensionTest.php
│   │                   │   │   │   ├── DependencyInjection
│   │                   │   │   │   │   └── DependencyInjectionExtensionTest.php
│   │                   │   │   │   ├── HttpFoundation
│   │                   │   │   │   │   └── HttpFoundationRequestHandlerTest.php
│   │                   │   │   │   └── Validator
│   │                   │   │   │       ├── Constraints
│   │                   │   │   │       │   ├── FormValidatorPerformanceTest.php
│   │                   │   │   │       │   └── FormValidatorTest.php
│   │                   │   │   │       ├── EventListener
│   │                   │   │   │       │   └── ValidationListenerTest.php
│   │                   │   │   │       ├── Type
│   │                   │   │   │       │   ├── BaseValidatorExtensionTest.php
│   │                   │   │   │       │   ├── FormTypeValidatorExtensionTest.php
│   │                   │   │   │       │   ├── SubmitTypeValidatorExtensionTest.php
│   │                   │   │   │       │   ├── TypeTestCase.php
│   │                   │   │   │       │   └── UploadValidatorExtensionTest.php
│   │                   │   │   │       ├── Util
│   │                   │   │   │       │   └── ServerParamsTest.php
│   │                   │   │   │       ├── ValidatorExtensionTest.php
│   │                   │   │   │       ├── ValidatorTypeGuesserTest.php
│   │                   │   │   │       └── ViolationMapper
│   │                   │   │   │           ├── ViolationMapperTest.php
│   │                   │   │   │           └── ViolationPathTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── AbstractAuthor.php
│   │                   │   │   │   ├── AlternatingRowType.php
│   │                   │   │   │   ├── Author.php
│   │                   │   │   │   ├── AuthorInterface.php
│   │                   │   │   │   ├── AuthorType.php
│   │                   │   │   │   ├── ChoiceSubType.php
│   │                   │   │   │   ├── CustomArrayObject.php
│   │                   │   │   │   ├── FBooType.php
│   │                   │   │   │   ├── FixedDataTransformer.php
│   │                   │   │   │   ├── FixedFilterListener.php
│   │                   │   │   │   ├── Foo.php
│   │                   │   │   │   ├── Foo1Bar2Type.php
│   │                   │   │   │   ├── FooBarHTMLType.php
│   │                   │   │   │   ├── FooSubType.php
│   │                   │   │   │   ├── FooType.php
│   │                   │   │   │   ├── FooTypeBarExtension.php
│   │                   │   │   │   ├── FooTypeBazExtension.php
│   │                   │   │   │   ├── TestExtension.php
│   │                   │   │   │   ├── Type.php
│   │                   │   │   │   ├── foo
│   │                   │   │   │   ├── foo2
│   │                   │   │   │   └── foo3
│   │                   │   │   ├── FormBuilderTest.php
│   │                   │   │   ├── FormConfigTest.php
│   │                   │   │   ├── FormFactoryBuilderTest.php
│   │                   │   │   ├── FormFactoryTest.php
│   │                   │   │   ├── FormRegistryTest.php
│   │                   │   │   ├── FormRendererTest.php
│   │                   │   │   ├── Guess
│   │                   │   │   │   └── GuessTest.php
│   │                   │   │   ├── NativeRequestHandlerTest.php
│   │                   │   │   ├── ResolvedFormTypeTest.php
│   │                   │   │   ├── Resources
│   │                   │   │   │   └── TranslationFilesTest.php
│   │                   │   │   ├── SimpleFormTest.php
│   │                   │   │   └── Util
│   │                   │   │       ├── OrderedHashMapTest.php
│   │                   │   │       └── StringUtilTest.php
│   │                   │   ├── Util
│   │                   │   │   ├── FormUtil.php
│   │                   │   │   ├── InheritDataAwareIterator.php
│   │                   │   │   ├── OrderedHashMap.php
│   │                   │   │   ├── OrderedHashMapIterator.php
│   │                   │   │   ├── ServerParams.php
│   │                   │   │   └── StringUtil.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── HttpFoundation
│   │                   │   ├── AcceptHeader.php
│   │                   │   ├── AcceptHeaderItem.php
│   │                   │   ├── ApacheRequest.php
│   │                   │   ├── BinaryFileResponse.php
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Cookie.php
│   │                   │   ├── Exception
│   │                   │   │   └── ConflictingHeadersException.php
│   │                   │   ├── ExpressionRequestMatcher.php
│   │                   │   ├── File
│   │                   │   │   ├── Exception
│   │                   │   │   │   ├── AccessDeniedException.php
│   │                   │   │   │   ├── FileException.php
│   │                   │   │   │   ├── FileNotFoundException.php
│   │                   │   │   │   ├── UnexpectedTypeException.php
│   │                   │   │   │   └── UploadException.php
│   │                   │   │   ├── File.php
│   │                   │   │   ├── MimeType
│   │                   │   │   │   ├── ExtensionGuesser.php
│   │                   │   │   │   ├── ExtensionGuesserInterface.php
│   │                   │   │   │   ├── FileBinaryMimeTypeGuesser.php
│   │                   │   │   │   ├── FileinfoMimeTypeGuesser.php
│   │                   │   │   │   ├── MimeTypeExtensionGuesser.php
│   │                   │   │   │   ├── MimeTypeGuesser.php
│   │                   │   │   │   └── MimeTypeGuesserInterface.php
│   │                   │   │   └── UploadedFile.php
│   │                   │   ├── FileBag.php
│   │                   │   ├── HeaderBag.php
│   │                   │   ├── IpUtils.php
│   │                   │   ├── JsonResponse.php
│   │                   │   ├── LICENSE
│   │                   │   ├── ParameterBag.php
│   │                   │   ├── README.md
│   │                   │   ├── RedirectResponse.php
│   │                   │   ├── Request.php
│   │                   │   ├── RequestMatcher.php
│   │                   │   ├── RequestMatcherInterface.php
│   │                   │   ├── RequestStack.php
│   │                   │   ├── Response.php
│   │                   │   ├── ResponseHeaderBag.php
│   │                   │   ├── ServerBag.php
│   │                   │   ├── Session
│   │                   │   │   ├── Attribute
│   │                   │   │   │   ├── AttributeBag.php
│   │                   │   │   │   ├── AttributeBagInterface.php
│   │                   │   │   │   └── NamespacedAttributeBag.php
│   │                   │   │   ├── Flash
│   │                   │   │   │   ├── AutoExpireFlashBag.php
│   │                   │   │   │   ├── FlashBag.php
│   │                   │   │   │   └── FlashBagInterface.php
│   │                   │   │   ├── Session.php
│   │                   │   │   ├── SessionBagInterface.php
│   │                   │   │   ├── SessionInterface.php
│   │                   │   │   └── Storage
│   │                   │   │       ├── Handler
│   │                   │   │       │   ├── MemcacheSessionHandler.php
│   │                   │   │       │   ├── MemcachedSessionHandler.php
│   │                   │   │       │   ├── MongoDbSessionHandler.php
│   │                   │   │       │   ├── NativeFileSessionHandler.php
│   │                   │   │       │   ├── NativeSessionHandler.php
│   │                   │   │       │   ├── NullSessionHandler.php
│   │                   │   │       │   ├── PdoSessionHandler.php
│   │                   │   │       │   └── WriteCheckSessionHandler.php
│   │                   │   │       ├── MetadataBag.php
│   │                   │   │       ├── MockArraySessionStorage.php
│   │                   │   │       ├── MockFileSessionStorage.php
│   │                   │   │       ├── NativeSessionStorage.php
│   │                   │   │       ├── PhpBridgeSessionStorage.php
│   │                   │   │       ├── Proxy
│   │                   │   │       │   ├── AbstractProxy.php
│   │                   │   │       │   ├── NativeProxy.php
│   │                   │   │       │   └── SessionHandlerProxy.php
│   │                   │   │       └── SessionStorageInterface.php
│   │                   │   ├── StreamedResponse.php
│   │                   │   ├── Tests
│   │                   │   │   ├── AcceptHeaderItemTest.php
│   │                   │   │   ├── AcceptHeaderTest.php
│   │                   │   │   ├── ApacheRequestTest.php
│   │                   │   │   ├── BinaryFileResponseTest.php
│   │                   │   │   ├── CookieTest.php
│   │                   │   │   ├── ExpressionRequestMatcherTest.php
│   │                   │   │   ├── File
│   │                   │   │   │   ├── FakeFile.php
│   │                   │   │   │   ├── FileTest.php
│   │                   │   │   │   ├── Fixtures
│   │                   │   │   │   │   ├── directory
│   │                   │   │   │   │   ├── other-file.example
│   │                   │   │   │   │   ├── test
│   │                   │   │   │   │   └── test.gif
│   │                   │   │   │   ├── MimeType
│   │                   │   │   │   │   └── MimeTypeTest.php
│   │                   │   │   │   └── UploadedFileTest.php
│   │                   │   │   ├── FileBagTest.php
│   │                   │   │   ├── HeaderBagTest.php
│   │                   │   │   ├── IpUtilsTest.php
│   │                   │   │   ├── JsonResponseTest.php
│   │                   │   │   ├── ParameterBagTest.php
│   │                   │   │   ├── RedirectResponseTest.php
│   │                   │   │   ├── RequestMatcherTest.php
│   │                   │   │   ├── RequestStackTest.php
│   │                   │   │   ├── RequestTest.php
│   │                   │   │   ├── ResponseHeaderBagTest.php
│   │                   │   │   ├── ResponseTest.php
│   │                   │   │   ├── ResponseTestCase.php
│   │                   │   │   ├── ServerBagTest.php
│   │                   │   │   ├── Session
│   │                   │   │   │   ├── Attribute
│   │                   │   │   │   │   ├── AttributeBagTest.php
│   │                   │   │   │   │   └── NamespacedAttributeBagTest.php
│   │                   │   │   │   ├── Flash
│   │                   │   │   │   │   ├── AutoExpireFlashBagTest.php
│   │                   │   │   │   │   └── FlashBagTest.php
│   │                   │   │   │   ├── SessionTest.php
│   │                   │   │   │   └── Storage
│   │                   │   │   │       ├── Handler
│   │                   │   │   │       │   ├── MemcacheSessionHandlerTest.php
│   │                   │   │   │       │   ├── MemcachedSessionHandlerTest.php
│   │                   │   │   │       │   ├── MongoDbSessionHandlerTest.php
│   │                   │   │   │       │   ├── NativeFileSessionHandlerTest.php
│   │                   │   │   │       │   ├── NativeSessionHandlerTest.php
│   │                   │   │   │       │   ├── NullSessionHandlerTest.php
│   │                   │   │   │       │   ├── PdoSessionHandlerTest.php
│   │                   │   │   │       │   └── WriteCheckSessionHandlerTest.php
│   │                   │   │   │       ├── MetadataBagTest.php
│   │                   │   │   │       ├── MockArraySessionStorageTest.php
│   │                   │   │   │       ├── MockFileSessionStorageTest.php
│   │                   │   │   │       ├── NativeSessionStorageTest.php
│   │                   │   │   │       ├── PhpBridgeSessionStorageTest.php
│   │                   │   │   │       └── Proxy
│   │                   │   │   │           ├── AbstractProxyTest.php
│   │                   │   │   │           ├── NativeProxyTest.php
│   │                   │   │   │           └── SessionHandlerProxyTest.php
│   │                   │   │   └── StreamedResponseTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── HttpKernel
│   │                   │   ├── Bundle
│   │                   │   │   ├── Bundle.php
│   │                   │   │   └── BundleInterface.php
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── CacheClearer
│   │                   │   │   ├── CacheClearerInterface.php
│   │                   │   │   ├── ChainCacheClearer.php
│   │                   │   │   └── Psr6CacheClearer.php
│   │                   │   ├── CacheWarmer
│   │                   │   │   ├── CacheWarmer.php
│   │                   │   │   ├── CacheWarmerAggregate.php
│   │                   │   │   ├── CacheWarmerInterface.php
│   │                   │   │   └── WarmableInterface.php
│   │                   │   ├── Client.php
│   │                   │   ├── Config
│   │                   │   │   ├── EnvParametersResource.php
│   │                   │   │   └── FileLocator.php
│   │                   │   ├── Controller
│   │                   │   │   ├── ArgumentResolver
│   │                   │   │   │   ├── DefaultValueResolver.php
│   │                   │   │   │   ├── RequestAttributeValueResolver.php
│   │                   │   │   │   ├── RequestValueResolver.php
│   │                   │   │   │   └── VariadicValueResolver.php
│   │                   │   │   ├── ArgumentResolver.php
│   │                   │   │   ├── ArgumentResolverInterface.php
│   │                   │   │   ├── ArgumentValueResolverInterface.php
│   │                   │   │   ├── ControllerReference.php
│   │                   │   │   ├── ControllerResolver.php
│   │                   │   │   ├── ControllerResolverInterface.php
│   │                   │   │   ├── TraceableArgumentResolver.php
│   │                   │   │   └── TraceableControllerResolver.php
│   │                   │   ├── ControllerMetadata
│   │                   │   │   ├── ArgumentMetadata.php
│   │                   │   │   ├── ArgumentMetadataFactory.php
│   │                   │   │   └── ArgumentMetadataFactoryInterface.php
│   │                   │   ├── DataCollector
│   │                   │   │   ├── AjaxDataCollector.php
│   │                   │   │   ├── ConfigDataCollector.php
│   │                   │   │   ├── DataCollector.php
│   │                   │   │   ├── DataCollectorInterface.php
│   │                   │   │   ├── DumpDataCollector.php
│   │                   │   │   ├── EventDataCollector.php
│   │                   │   │   ├── ExceptionDataCollector.php
│   │                   │   │   ├── LateDataCollectorInterface.php
│   │                   │   │   ├── LoggerDataCollector.php
│   │                   │   │   ├── MemoryDataCollector.php
│   │                   │   │   ├── RequestDataCollector.php
│   │                   │   │   ├── RouterDataCollector.php
│   │                   │   │   ├── TimeDataCollector.php
│   │                   │   │   └── Util
│   │                   │   │       └── ValueExporter.php
│   │                   │   ├── Debug
│   │                   │   │   ├── FileLinkFormatter.php
│   │                   │   │   └── TraceableEventDispatcher.php
│   │                   │   ├── DependencyInjection
│   │                   │   │   ├── AddClassesToCachePass.php
│   │                   │   │   ├── ConfigurableExtension.php
│   │                   │   │   ├── Extension.php
│   │                   │   │   ├── FragmentRendererPass.php
│   │                   │   │   ├── LazyLoadingFragmentHandler.php
│   │                   │   │   └── MergeExtensionConfigurationPass.php
│   │                   │   ├── Event
│   │                   │   │   ├── FilterControllerArgumentsEvent.php
│   │                   │   │   ├── FilterControllerEvent.php
│   │                   │   │   ├── FilterResponseEvent.php
│   │                   │   │   ├── FinishRequestEvent.php
│   │                   │   │   ├── GetResponseEvent.php
│   │                   │   │   ├── GetResponseForControllerResultEvent.php
│   │                   │   │   ├── GetResponseForExceptionEvent.php
│   │                   │   │   ├── KernelEvent.php
│   │                   │   │   └── PostResponseEvent.php
│   │                   │   ├── EventListener
│   │                   │   │   ├── AddRequestFormatsListener.php
│   │                   │   │   ├── DebugHandlersListener.php
│   │                   │   │   ├── DumpListener.php
│   │                   │   │   ├── ExceptionListener.php
│   │                   │   │   ├── FragmentListener.php
│   │                   │   │   ├── LocaleListener.php
│   │                   │   │   ├── ProfilerListener.php
│   │                   │   │   ├── ResponseListener.php
│   │                   │   │   ├── RouterListener.php
│   │                   │   │   ├── SaveSessionListener.php
│   │                   │   │   ├── SessionListener.php
│   │                   │   │   ├── StreamedResponseListener.php
│   │                   │   │   ├── SurrogateListener.php
│   │                   │   │   ├── TestSessionListener.php
│   │                   │   │   ├── TranslatorListener.php
│   │                   │   │   └── ValidateRequestListener.php
│   │                   │   ├── Exception
│   │                   │   │   ├── AccessDeniedHttpException.php
│   │                   │   │   ├── BadRequestHttpException.php
│   │                   │   │   ├── ConflictHttpException.php
│   │                   │   │   ├── GoneHttpException.php
│   │                   │   │   ├── HttpException.php
│   │                   │   │   ├── HttpExceptionInterface.php
│   │                   │   │   ├── LengthRequiredHttpException.php
│   │                   │   │   ├── MethodNotAllowedHttpException.php
│   │                   │   │   ├── NotAcceptableHttpException.php
│   │                   │   │   ├── NotFoundHttpException.php
│   │                   │   │   ├── PreconditionFailedHttpException.php
│   │                   │   │   ├── PreconditionRequiredHttpException.php
│   │                   │   │   ├── ServiceUnavailableHttpException.php
│   │                   │   │   ├── TooManyRequestsHttpException.php
│   │                   │   │   ├── UnauthorizedHttpException.php
│   │                   │   │   ├── UnprocessableEntityHttpException.php
│   │                   │   │   └── UnsupportedMediaTypeHttpException.php
│   │                   │   ├── Fragment
│   │                   │   │   ├── AbstractSurrogateFragmentRenderer.php
│   │                   │   │   ├── EsiFragmentRenderer.php
│   │                   │   │   ├── FragmentHandler.php
│   │                   │   │   ├── FragmentRendererInterface.php
│   │                   │   │   ├── HIncludeFragmentRenderer.php
│   │                   │   │   ├── InlineFragmentRenderer.php
│   │                   │   │   ├── RoutableFragmentRenderer.php
│   │                   │   │   └── SsiFragmentRenderer.php
│   │                   │   ├── HttpCache
│   │                   │   │   ├── AbstractSurrogate.php
│   │                   │   │   ├── Esi.php
│   │                   │   │   ├── HttpCache.php
│   │                   │   │   ├── ResponseCacheStrategy.php
│   │                   │   │   ├── ResponseCacheStrategyInterface.php
│   │                   │   │   ├── Ssi.php
│   │                   │   │   ├── Store.php
│   │                   │   │   ├── StoreInterface.php
│   │                   │   │   └── SurrogateInterface.php
│   │                   │   ├── HttpKernel.php
│   │                   │   ├── HttpKernelInterface.php
│   │                   │   ├── Kernel.php
│   │                   │   ├── KernelEvents.php
│   │                   │   ├── KernelInterface.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Log
│   │                   │   │   └── DebugLoggerInterface.php
│   │                   │   ├── Profiler
│   │                   │   │   ├── FileProfilerStorage.php
│   │                   │   │   ├── Profile.php
│   │                   │   │   ├── Profiler.php
│   │                   │   │   └── ProfilerStorageInterface.php
│   │                   │   ├── README.md
│   │                   │   ├── TerminableInterface.php
│   │                   │   ├── Tests
│   │                   │   │   ├── Bundle
│   │                   │   │   │   └── BundleTest.php
│   │                   │   │   ├── CacheClearer
│   │                   │   │   │   └── ChainCacheClearerTest.php
│   │                   │   │   ├── CacheWarmer
│   │                   │   │   │   ├── CacheWarmerAggregateTest.php
│   │                   │   │   │   └── CacheWarmerTest.php
│   │                   │   │   ├── ClientTest.php
│   │                   │   │   ├── Config
│   │                   │   │   │   ├── EnvParametersResourceTest.php
│   │                   │   │   │   └── FileLocatorTest.php
│   │                   │   │   ├── Controller
│   │                   │   │   │   ├── ArgumentResolverTest.php
│   │                   │   │   │   └── ControllerResolverTest.php
│   │                   │   │   ├── ControllerMetadata
│   │                   │   │   │   ├── ArgumentMetadataFactoryTest.php
│   │                   │   │   │   └── ArgumentMetadataTest.php
│   │                   │   │   ├── DataCollector
│   │                   │   │   │   ├── ConfigDataCollectorTest.php
│   │                   │   │   │   ├── DataCollectorTest.php
│   │                   │   │   │   ├── DumpDataCollectorTest.php
│   │                   │   │   │   ├── ExceptionDataCollectorTest.php
│   │                   │   │   │   ├── LoggerDataCollectorTest.php
│   │                   │   │   │   ├── MemoryDataCollectorTest.php
│   │                   │   │   │   ├── RequestDataCollectorTest.php
│   │                   │   │   │   ├── TimeDataCollectorTest.php
│   │                   │   │   │   └── Util
│   │                   │   │   │       └── ValueExporterTest.php
│   │                   │   │   ├── Debug
│   │                   │   │   │   ├── FileLinkFormatterTest.php
│   │                   │   │   │   └── TraceableEventDispatcherTest.php
│   │                   │   │   ├── DependencyInjection
│   │                   │   │   │   ├── AddClassesToCachePassTest.php
│   │                   │   │   │   ├── FragmentRendererPassTest.php
│   │                   │   │   │   ├── LazyLoadingFragmentHandlerTest.php
│   │                   │   │   │   └── MergeExtensionConfigurationPassTest.php
│   │                   │   │   ├── EventListener
│   │                   │   │   │   ├── AddRequestFormatsListenerTest.php
│   │                   │   │   │   ├── DebugHandlersListenerTest.php
│   │                   │   │   │   ├── DumpListenerTest.php
│   │                   │   │   │   ├── ExceptionListenerTest.php
│   │                   │   │   │   ├── FragmentListenerTest.php
│   │                   │   │   │   ├── LocaleListenerTest.php
│   │                   │   │   │   ├── ProfilerListenerTest.php
│   │                   │   │   │   ├── ResponseListenerTest.php
│   │                   │   │   │   ├── RouterListenerTest.php
│   │                   │   │   │   ├── SurrogateListenerTest.php
│   │                   │   │   │   ├── TestSessionListenerTest.php
│   │                   │   │   │   ├── TranslatorListenerTest.php
│   │                   │   │   │   └── ValidateRequestListenerTest.php
│   │                   │   │   ├── Exception
│   │                   │   │   │   ├── AccessDeniedHttpExceptionTest.php
│   │                   │   │   │   ├── BadRequestHttpExceptionTest.php
│   │                   │   │   │   ├── ConflictHttpExceptionTest.php
│   │                   │   │   │   ├── GoneHttpExceptionTest.php
│   │                   │   │   │   ├── HttpExceptionTest.php
│   │                   │   │   │   ├── LengthRequiredHttpExceptionTest.php
│   │                   │   │   │   ├── MethodNotAllowedHttpExceptionTest.php
│   │                   │   │   │   ├── NotAcceptableHttpExceptionTest.php
│   │                   │   │   │   ├── NotFoundHttpExceptionTest.php
│   │                   │   │   │   ├── PreconditionFailedHttpExceptionTest.php
│   │                   │   │   │   ├── PreconditionRequiredHttpExceptionTest.php
│   │                   │   │   │   ├── ServiceUnavailableHttpExceptionTest.php
│   │                   │   │   │   ├── TooManyRequestsHttpExceptionTest.php
│   │                   │   │   │   ├── UnauthorizedHttpExceptionTest.php
│   │                   │   │   │   ├── UnprocessableEntityHttpExceptionTest.php
│   │                   │   │   │   └── UnsupportedMediaTypeHttpExceptionTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── BaseBundle
│   │                   │   │   │   │   └── Resources
│   │                   │   │   │   │       ├── foo.txt
│   │                   │   │   │   │       └── hide.txt
│   │                   │   │   │   ├── Bundle1Bundle
│   │                   │   │   │   │   ├── Resources
│   │                   │   │   │   │   │   └── foo.txt
│   │                   │   │   │   │   ├── bar.txt
│   │                   │   │   │   │   └── foo.txt
│   │                   │   │   │   ├── Bundle2Bundle
│   │                   │   │   │   │   └── foo.txt
│   │                   │   │   │   ├── ChildBundle
│   │                   │   │   │   │   └── Resources
│   │                   │   │   │   │       ├── foo.txt
│   │                   │   │   │   │       └── hide.txt
│   │                   │   │   │   ├── Controller
│   │                   │   │   │   │   ├── BasicTypesController.php
│   │                   │   │   │   │   ├── ExtendingRequest.php
│   │                   │   │   │   │   ├── NullableController.php
│   │                   │   │   │   │   └── VariadicController.php
│   │                   │   │   │   ├── DataCollector
│   │                   │   │   │   │   └── CloneVarDataCollector.php
│   │                   │   │   │   ├── ExtensionAbsentBundle
│   │                   │   │   │   │   └── ExtensionAbsentBundle.php
│   │                   │   │   │   ├── ExtensionLoadedBundle
│   │                   │   │   │   │   ├── DependencyInjection
│   │                   │   │   │   │   │   └── ExtensionLoadedExtension.php
│   │                   │   │   │   │   └── ExtensionLoadedBundle.php
│   │                   │   │   │   ├── ExtensionNotValidBundle
│   │                   │   │   │   │   ├── DependencyInjection
│   │                   │   │   │   │   │   └── ExtensionNotValidExtension.php
│   │                   │   │   │   │   └── ExtensionNotValidBundle.php
│   │                   │   │   │   ├── ExtensionPresentBundle
│   │                   │   │   │   │   ├── Command
│   │                   │   │   │   │   │   ├── BarCommand.php
│   │                   │   │   │   │   │   └── FooCommand.php
│   │                   │   │   │   │   ├── DependencyInjection
│   │                   │   │   │   │   │   └── ExtensionPresentExtension.php
│   │                   │   │   │   │   └── ExtensionPresentBundle.php
│   │                   │   │   │   ├── KernelForOverrideName.php
│   │                   │   │   │   ├── KernelForTest.php
│   │                   │   │   │   ├── Resources
│   │                   │   │   │   │   ├── BaseBundle
│   │                   │   │   │   │   │   └── hide.txt
│   │                   │   │   │   │   ├── Bundle1Bundle
│   │                   │   │   │   │   │   └── foo.txt
│   │                   │   │   │   │   ├── ChildBundle
│   │                   │   │   │   │   │   └── foo.txt
│   │                   │   │   │   │   └── FooBundle
│   │                   │   │   │   │       └── foo.txt
│   │                   │   │   │   ├── TestClient.php
│   │                   │   │   │   └── TestEventDispatcher.php
│   │                   │   │   ├── Fragment
│   │                   │   │   │   ├── EsiFragmentRendererTest.php
│   │                   │   │   │   ├── FragmentHandlerTest.php
│   │                   │   │   │   ├── HIncludeFragmentRendererTest.php
│   │                   │   │   │   ├── InlineFragmentRendererTest.php
│   │                   │   │   │   ├── RoutableFragmentRendererTest.php
│   │                   │   │   │   └── SsiFragmentRendererTest.php
│   │                   │   │   ├── HttpCache
│   │                   │   │   │   ├── EsiTest.php
│   │                   │   │   │   ├── HttpCacheTest.php
│   │                   │   │   │   ├── HttpCacheTestCase.php
│   │                   │   │   │   ├── ResponseCacheStrategyTest.php
│   │                   │   │   │   ├── SsiTest.php
│   │                   │   │   │   ├── StoreTest.php
│   │                   │   │   │   ├── TestHttpKernel.php
│   │                   │   │   │   └── TestMultipleHttpKernel.php
│   │                   │   │   ├── HttpKernelTest.php
│   │                   │   │   ├── KernelTest.php
│   │                   │   │   ├── Logger.php
│   │                   │   │   ├── Profiler
│   │                   │   │   │   ├── FileProfilerStorageTest.php
│   │                   │   │   │   └── ProfilerTest.php
│   │                   │   │   ├── TestHttpKernel.php
│   │                   │   │   └── UriSignerTest.php
│   │                   │   ├── UriSigner.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Inflector
│   │                   │   ├── Inflector.php
│   │                   │   ├── LICENSE
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   └── InflectorTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Intl
│   │                   │   ├── CONTRIBUTING.md
│   │                   │   ├── Collator
│   │                   │   │   └── Collator.php
│   │                   │   ├── Data
│   │                   │   │   ├── Bundle
│   │                   │   │   │   ├── Compiler
│   │                   │   │   │   │   ├── BundleCompilerInterface.php
│   │                   │   │   │   │   └── GenrbCompiler.php
│   │                   │   │   │   ├── Reader
│   │                   │   │   │   │   ├── BufferedBundleReader.php
│   │                   │   │   │   │   ├── BundleEntryReader.php
│   │                   │   │   │   │   ├── BundleEntryReaderInterface.php
│   │                   │   │   │   │   ├── BundleReaderInterface.php
│   │                   │   │   │   │   ├── IntlBundleReader.php
│   │                   │   │   │   │   ├── JsonBundleReader.php
│   │                   │   │   │   │   └── PhpBundleReader.php
│   │                   │   │   │   └── Writer
│   │                   │   │   │       ├── BundleWriterInterface.php
│   │                   │   │   │       ├── JsonBundleWriter.php
│   │                   │   │   │       ├── PhpBundleWriter.php
│   │                   │   │   │       └── TextBundleWriter.php
│   │                   │   │   ├── Generator
│   │                   │   │   │   ├── AbstractDataGenerator.php
│   │                   │   │   │   ├── CurrencyDataGenerator.php
│   │                   │   │   │   ├── GeneratorConfig.php
│   │                   │   │   │   ├── LanguageDataGenerator.php
│   │                   │   │   │   ├── LocaleDataGenerator.php
│   │                   │   │   │   ├── RegionDataGenerator.php
│   │                   │   │   │   └── ScriptDataGenerator.php
│   │                   │   │   ├── Provider
│   │                   │   │   │   ├── CurrencyDataProvider.php
│   │                   │   │   │   ├── LanguageDataProvider.php
│   │                   │   │   │   ├── LocaleDataProvider.php
│   │                   │   │   │   ├── RegionDataProvider.php
│   │                   │   │   │   └── ScriptDataProvider.php
│   │                   │   │   └── Util
│   │                   │   │       ├── ArrayAccessibleResourceBundle.php
│   │                   │   │       ├── LocaleScanner.php
│   │                   │   │       ├── RecursiveArrayAccess.php
│   │                   │   │       └── RingBuffer.php
│   │                   │   ├── DateFormatter
│   │                   │   │   ├── DateFormat
│   │                   │   │   │   ├── AmPmTransformer.php
│   │                   │   │   │   ├── DayOfWeekTransformer.php
│   │                   │   │   │   ├── DayOfYearTransformer.php
│   │                   │   │   │   ├── DayTransformer.php
│   │                   │   │   │   ├── FullTransformer.php
│   │                   │   │   │   ├── Hour1200Transformer.php
│   │                   │   │   │   ├── Hour1201Transformer.php
│   │                   │   │   │   ├── Hour2400Transformer.php
│   │                   │   │   │   ├── Hour2401Transformer.php
│   │                   │   │   │   ├── HourTransformer.php
│   │                   │   │   │   ├── MinuteTransformer.php
│   │                   │   │   │   ├── MonthTransformer.php
│   │                   │   │   │   ├── QuarterTransformer.php
│   │                   │   │   │   ├── SecondTransformer.php
│   │                   │   │   │   ├── TimeZoneTransformer.php
│   │                   │   │   │   ├── Transformer.php
│   │                   │   │   │   └── YearTransformer.php
│   │                   │   │   └── IntlDateFormatter.php
│   │                   │   ├── Exception
│   │                   │   │   ├── BadMethodCallException.php
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── InvalidArgumentException.php
│   │                   │   │   ├── MethodArgumentNotImplementedException.php
│   │                   │   │   ├── MethodArgumentValueNotImplementedException.php
│   │                   │   │   ├── MethodNotImplementedException.php
│   │                   │   │   ├── MissingResourceException.php
│   │                   │   │   ├── NotImplementedException.php
│   │                   │   │   ├── OutOfBoundsException.php
│   │                   │   │   ├── ResourceBundleNotFoundException.php
│   │                   │   │   ├── RuntimeException.php
│   │                   │   │   └── UnexpectedTypeException.php
│   │                   │   ├── Globals
│   │                   │   │   └── IntlGlobals.php
│   │                   │   ├── Intl.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Locale
│   │                   │   │   └── Locale.php
│   │                   │   ├── Locale.php
│   │                   │   ├── NumberFormatter
│   │                   │   │   └── NumberFormatter.php
│   │                   │   ├── README.md
│   │                   │   ├── ResourceBundle
│   │                   │   │   ├── CurrencyBundle.php
│   │                   │   │   ├── CurrencyBundleInterface.php
│   │                   │   │   ├── LanguageBundle.php
│   │                   │   │   ├── LanguageBundleInterface.php
│   │                   │   │   ├── LocaleBundle.php
│   │                   │   │   ├── LocaleBundleInterface.php
│   │                   │   │   ├── RegionBundle.php
│   │                   │   │   ├── RegionBundleInterface.php
│   │                   │   │   └── ResourceBundleInterface.php
│   │                   │   ├── Resources
│   │                   │   │   ├── bin
│   │                   │   │   │   ├── autoload.php
│   │                   │   │   │   ├── common.php
│   │                   │   │   │   ├── icu.ini
│   │                   │   │   │   └── update-data.php
│   │                   │   │   ├── data
│   │                   │   │   │   ├── currencies
│   │                   │   │   │   │   ├── af.json
│   │                   │   │   │   │   ├── af_NA.json
│   │                   │   │   │   │   ├── ak.json
│   │                   │   │   │   │   ├── am.json
│   │                   │   │   │   │   ├── ar.json
│   │                   │   │   │   │   ├── ar_DJ.json
│   │                   │   │   │   │   ├── ar_ER.json
│   │                   │   │   │   │   ├── ar_LB.json
│   │                   │   │   │   │   ├── ar_SO.json
│   │                   │   │   │   │   ├── ar_SS.json
│   │                   │   │   │   │   ├── az.json
│   │                   │   │   │   │   ├── az_Cyrl.json
│   │                   │   │   │   │   ├── be.json
│   │                   │   │   │   │   ├── bg.json
│   │                   │   │   │   │   ├── bm.json
│   │                   │   │   │   │   ├── bn.json
│   │                   │   │   │   │   ├── bo.json
│   │                   │   │   │   │   ├── bo_IN.json
│   │                   │   │   │   │   ├── br.json
│   │                   │   │   │   │   ├── bs.json
│   │                   │   │   │   │   ├── bs_Cyrl.json
│   │                   │   │   │   │   ├── ca.json
│   │                   │   │   │   │   ├── ca_FR.json
│   │                   │   │   │   │   ├── ce.json
│   │                   │   │   │   │   ├── cs.json
│   │                   │   │   │   │   ├── cy.json
│   │                   │   │   │   │   ├── da.json
│   │                   │   │   │   │   ├── de.json
│   │                   │   │   │   │   ├── de_CH.json
│   │                   │   │   │   │   ├── de_LI.json
│   │                   │   │   │   │   ├── de_LU.json
│   │                   │   │   │   │   ├── dz.json
│   │                   │   │   │   │   ├── ee.json
│   │                   │   │   │   │   ├── el.json
│   │                   │   │   │   │   ├── en.json
│   │                   │   │   │   │   ├── en_001.json
│   │                   │   │   │   │   ├── en_150.json
│   │                   │   │   │   │   ├── en_AG.json
│   │                   │   │   │   │   ├── en_AI.json
│   │                   │   │   │   │   ├── en_AU.json
│   │                   │   │   │   │   ├── en_BB.json
│   │                   │   │   │   │   ├── en_BI.json
│   │                   │   │   │   │   ├── en_BM.json
│   │                   │   │   │   │   ├── en_BS.json
│   │                   │   │   │   │   ├── en_BW.json
│   │                   │   │   │   │   ├── en_BZ.json
│   │                   │   │   │   │   ├── en_CA.json
│   │                   │   │   │   │   ├── en_CC.json
│   │                   │   │   │   │   ├── en_CK.json
│   │                   │   │   │   │   ├── en_CX.json
│   │                   │   │   │   │   ├── en_DK.json
│   │                   │   │   │   │   ├── en_DM.json
│   │                   │   │   │   │   ├── en_ER.json
│   │                   │   │   │   │   ├── en_FJ.json
│   │                   │   │   │   │   ├── en_FK.json
│   │                   │   │   │   │   ├── en_GB.json
│   │                   │   │   │   │   ├── en_GD.json
│   │                   │   │   │   │   ├── en_GG.json
│   │                   │   │   │   │   ├── en_GH.json
│   │                   │   │   │   │   ├── en_GI.json
│   │                   │   │   │   │   ├── en_GM.json
│   │                   │   │   │   │   ├── en_GY.json
│   │                   │   │   │   │   ├── en_IM.json
│   │                   │   │   │   │   ├── en_JE.json
│   │                   │   │   │   │   ├── en_JM.json
│   │                   │   │   │   │   ├── en_KE.json
│   │                   │   │   │   │   ├── en_KI.json
│   │                   │   │   │   │   ├── en_KN.json
│   │                   │   │   │   │   ├── en_KY.json
│   │                   │   │   │   │   ├── en_LC.json
│   │                   │   │   │   │   ├── en_LR.json
│   │                   │   │   │   │   ├── en_LS.json
│   │                   │   │   │   │   ├── en_MG.json
│   │                   │   │   │   │   ├── en_MO.json
│   │                   │   │   │   │   ├── en_MS.json
│   │                   │   │   │   │   ├── en_MT.json
│   │                   │   │   │   │   ├── en_MU.json
│   │                   │   │   │   │   ├── en_MW.json
│   │                   │   │   │   │   ├── en_MY.json
│   │                   │   │   │   │   ├── en_NA.json
│   │                   │   │   │   │   ├── en_NF.json
│   │                   │   │   │   │   ├── en_NG.json
│   │                   │   │   │   │   ├── en_NH.json
│   │                   │   │   │   │   ├── en_NR.json
│   │                   │   │   │   │   ├── en_NU.json
│   │                   │   │   │   │   ├── en_NZ.json
│   │                   │   │   │   │   ├── en_PG.json
│   │                   │   │   │   │   ├── en_PH.json
│   │                   │   │   │   │   ├── en_PK.json
│   │                   │   │   │   │   ├── en_PN.json
│   │                   │   │   │   │   ├── en_RW.json
│   │                   │   │   │   │   ├── en_SB.json
│   │                   │   │   │   │   ├── en_SC.json
│   │                   │   │   │   │   ├── en_SE.json
│   │                   │   │   │   │   ├── en_SG.json
│   │                   │   │   │   │   ├── en_SH.json
│   │                   │   │   │   │   ├── en_SL.json
│   │                   │   │   │   │   ├── en_SS.json
│   │                   │   │   │   │   ├── en_SX.json
│   │                   │   │   │   │   ├── en_SZ.json
│   │                   │   │   │   │   ├── en_TK.json
│   │                   │   │   │   │   ├── en_TO.json
│   │                   │   │   │   │   ├── en_TT.json
│   │                   │   │   │   │   ├── en_TV.json
│   │                   │   │   │   │   ├── en_TZ.json
│   │                   │   │   │   │   ├── en_UG.json
│   │                   │   │   │   │   ├── en_VC.json
│   │                   │   │   │   │   ├── en_VU.json
│   │                   │   │   │   │   ├── en_WS.json
│   │                   │   │   │   │   ├── en_ZA.json
│   │                   │   │   │   │   ├── en_ZM.json
│   │                   │   │   │   │   ├── es.json
│   │                   │   │   │   │   ├── es_419.json
│   │                   │   │   │   │   ├── es_AR.json
│   │                   │   │   │   │   ├── es_BO.json
│   │                   │   │   │   │   ├── es_CL.json
│   │                   │   │   │   │   ├── es_CO.json
│   │                   │   │   │   │   ├── es_CR.json
│   │                   │   │   │   │   ├── es_CU.json
│   │                   │   │   │   │   ├── es_DO.json
│   │                   │   │   │   │   ├── es_EC.json
│   │                   │   │   │   │   ├── es_GQ.json
│   │                   │   │   │   │   ├── es_GT.json
│   │                   │   │   │   │   ├── es_HN.json
│   │                   │   │   │   │   ├── es_MX.json
│   │                   │   │   │   │   ├── es_NI.json
│   │                   │   │   │   │   ├── es_PA.json
│   │                   │   │   │   │   ├── es_PE.json
│   │                   │   │   │   │   ├── es_PH.json
│   │                   │   │   │   │   ├── es_PR.json
│   │                   │   │   │   │   ├── es_PY.json
│   │                   │   │   │   │   ├── es_SV.json
│   │                   │   │   │   │   ├── es_US.json
│   │                   │   │   │   │   ├── es_UY.json
│   │                   │   │   │   │   ├── es_VE.json
│   │                   │   │   │   │   ├── et.json
│   │                   │   │   │   │   ├── eu.json
│   │                   │   │   │   │   ├── fa.json
│   │                   │   │   │   │   ├── fa_AF.json
│   │                   │   │   │   │   ├── ff.json
│   │                   │   │   │   │   ├── ff_GN.json
│   │                   │   │   │   │   ├── ff_MR.json
│   │                   │   │   │   │   ├── fi.json
│   │                   │   │   │   │   ├── fo.json
│   │                   │   │   │   │   ├── fo_DK.json
│   │                   │   │   │   │   ├── fr.json
│   │                   │   │   │   │   ├── fr_BI.json
│   │                   │   │   │   │   ├── fr_CA.json
│   │                   │   │   │   │   ├── fr_CD.json
│   │                   │   │   │   │   ├── fr_DJ.json
│   │                   │   │   │   │   ├── fr_DZ.json
│   │                   │   │   │   │   ├── fr_GN.json
│   │                   │   │   │   │   ├── fr_HT.json
│   │                   │   │   │   │   ├── fr_KM.json
│   │                   │   │   │   │   ├── fr_LU.json
│   │                   │   │   │   │   ├── fr_MG.json
│   │                   │   │   │   │   ├── fr_MR.json
│   │                   │   │   │   │   ├── fr_MU.json
│   │                   │   │   │   │   ├── fr_RW.json
│   │                   │   │   │   │   ├── fr_SC.json
│   │                   │   │   │   │   ├── fr_SY.json
│   │                   │   │   │   │   ├── fr_TN.json
│   │                   │   │   │   │   ├── fr_VU.json
│   │                   │   │   │   │   ├── fy.json
│   │                   │   │   │   │   ├── ga.json
│   │                   │   │   │   │   ├── gd.json
│   │                   │   │   │   │   ├── gl.json
│   │                   │   │   │   │   ├── gu.json
│   │                   │   │   │   │   ├── ha.json
│   │                   │   │   │   │   ├── ha_GH.json
│   │                   │   │   │   │   ├── he.json
│   │                   │   │   │   │   ├── hi.json
│   │                   │   │   │   │   ├── hr.json
│   │                   │   │   │   │   ├── hr_BA.json
│   │                   │   │   │   │   ├── hu.json
│   │                   │   │   │   │   ├── hy.json
│   │                   │   │   │   │   ├── id.json
│   │                   │   │   │   │   ├── ig.json
│   │                   │   │   │   │   ├── ii.json
│   │                   │   │   │   │   ├── in.json
│   │                   │   │   │   │   ├── is.json
│   │                   │   │   │   │   ├── it.json
│   │                   │   │   │   │   ├── iw.json
│   │                   │   │   │   │   ├── ja.json
│   │                   │   │   │   │   ├── ka.json
│   │                   │   │   │   │   ├── ki.json
│   │                   │   │   │   │   ├── kk.json
│   │                   │   │   │   │   ├── kl.json
│   │                   │   │   │   │   ├── km.json
│   │                   │   │   │   │   ├── kn.json
│   │                   │   │   │   │   ├── ko.json
│   │                   │   │   │   │   ├── ks.json
│   │                   │   │   │   │   ├── ky.json
│   │                   │   │   │   │   ├── lb.json
│   │                   │   │   │   │   ├── lg.json
│   │                   │   │   │   │   ├── ln.json
│   │                   │   │   │   │   ├── ln_AO.json
│   │                   │   │   │   │   ├── lo.json
│   │                   │   │   │   │   ├── lt.json
│   │                   │   │   │   │   ├── lu.json
│   │                   │   │   │   │   ├── lv.json
│   │                   │   │   │   │   ├── meta.json
│   │                   │   │   │   │   ├── mg.json
│   │                   │   │   │   │   ├── mk.json
│   │                   │   │   │   │   ├── ml.json
│   │                   │   │   │   │   ├── mn.json
│   │                   │   │   │   │   ├── mo.json
│   │                   │   │   │   │   ├── mr.json
│   │                   │   │   │   │   ├── ms.json
│   │                   │   │   │   │   ├── ms_BN.json
│   │                   │   │   │   │   ├── ms_SG.json
│   │                   │   │   │   │   ├── mt.json
│   │                   │   │   │   │   ├── my.json
│   │                   │   │   │   │   ├── nb.json
│   │                   │   │   │   │   ├── nd.json
│   │                   │   │   │   │   ├── ne.json
│   │                   │   │   │   │   ├── nl.json
│   │                   │   │   │   │   ├── nl_AW.json
│   │                   │   │   │   │   ├── nl_BQ.json
│   │                   │   │   │   │   ├── nl_CW.json
│   │                   │   │   │   │   ├── nl_SR.json
│   │                   │   │   │   │   ├── nl_SX.json
│   │                   │   │   │   │   ├── nn.json
│   │                   │   │   │   │   ├── no.json
│   │                   │   │   │   │   ├── om.json
│   │                   │   │   │   │   ├── om_KE.json
│   │                   │   │   │   │   ├── or.json
│   │                   │   │   │   │   ├── os.json
│   │                   │   │   │   │   ├── os_RU.json
│   │                   │   │   │   │   ├── pa.json
│   │                   │   │   │   │   ├── pa_Arab.json
│   │                   │   │   │   │   ├── pl.json
│   │                   │   │   │   │   ├── ps.json
│   │                   │   │   │   │   ├── pt.json
│   │                   │   │   │   │   ├── pt_AO.json
│   │                   │   │   │   │   ├── pt_CV.json
│   │                   │   │   │   │   ├── pt_MO.json
│   │                   │   │   │   │   ├── pt_MZ.json
│   │                   │   │   │   │   ├── pt_PT.json
│   │                   │   │   │   │   ├── pt_ST.json
│   │                   │   │   │   │   ├── qu.json
│   │                   │   │   │   │   ├── qu_BO.json
│   │                   │   │   │   │   ├── qu_EC.json
│   │                   │   │   │   │   ├── rm.json
│   │                   │   │   │   │   ├── rn.json
│   │                   │   │   │   │   ├── ro.json
│   │                   │   │   │   │   ├── ro_MD.json
│   │                   │   │   │   │   ├── root.json
│   │                   │   │   │   │   ├── ru.json
│   │                   │   │   │   │   ├── ru_BY.json
│   │                   │   │   │   │   ├── ru_KG.json
│   │                   │   │   │   │   ├── ru_KZ.json
│   │                   │   │   │   │   ├── ru_MD.json
│   │                   │   │   │   │   ├── rw.json
│   │                   │   │   │   │   ├── se.json
│   │                   │   │   │   │   ├── se_SE.json
│   │                   │   │   │   │   ├── sg.json
│   │                   │   │   │   │   ├── sh.json
│   │                   │   │   │   │   ├── si.json
│   │                   │   │   │   │   ├── sk.json
│   │                   │   │   │   │   ├── sl.json
│   │                   │   │   │   │   ├── sn.json
│   │                   │   │   │   │   ├── so.json
│   │                   │   │   │   │   ├── so_DJ.json
│   │                   │   │   │   │   ├── so_ET.json
│   │                   │   │   │   │   ├── so_KE.json
│   │                   │   │   │   │   ├── sq.json
│   │                   │   │   │   │   ├── sq_MK.json
│   │                   │   │   │   │   ├── sr.json
│   │                   │   │   │   │   ├── sr_Latn.json
│   │                   │   │   │   │   ├── sv.json
│   │                   │   │   │   │   ├── sw.json
│   │                   │   │   │   │   ├── sw_CD.json
│   │                   │   │   │   │   ├── sw_UG.json
│   │                   │   │   │   │   ├── ta.json
│   │                   │   │   │   │   ├── ta_LK.json
│   │                   │   │   │   │   ├── ta_MY.json
│   │                   │   │   │   │   ├── ta_SG.json
│   │                   │   │   │   │   ├── te.json
│   │                   │   │   │   │   ├── th.json
│   │                   │   │   │   │   ├── ti.json
│   │                   │   │   │   │   ├── ti_ER.json
│   │                   │   │   │   │   ├── tl.json
│   │                   │   │   │   │   ├── to.json
│   │                   │   │   │   │   ├── tr.json
│   │                   │   │   │   │   ├── ug.json
│   │                   │   │   │   │   ├── uk.json
│   │                   │   │   │   │   ├── ur.json
│   │                   │   │   │   │   ├── ur_IN.json
│   │                   │   │   │   │   ├── uz.json
│   │                   │   │   │   │   ├── uz_Arab.json
│   │                   │   │   │   │   ├── uz_Cyrl.json
│   │                   │   │   │   │   ├── vi.json
│   │                   │   │   │   │   ├── yi.json
│   │                   │   │   │   │   ├── yo.json
│   │                   │   │   │   │   ├── yo_BJ.json
│   │                   │   │   │   │   ├── zh.json
│   │                   │   │   │   │   ├── zh_HK.json
│   │                   │   │   │   │   ├── zh_Hans_HK.json
│   │                   │   │   │   │   ├── zh_Hans_MO.json
│   │                   │   │   │   │   ├── zh_Hans_SG.json
│   │                   │   │   │   │   ├── zh_Hant.json
│   │                   │   │   │   │   ├── zh_Hant_HK.json
│   │                   │   │   │   │   ├── zh_Hant_MO.json
│   │                   │   │   │   │   ├── zh_MO.json
│   │                   │   │   │   │   ├── zh_SG.json
│   │                   │   │   │   │   └── zu.json
│   │                   │   │   │   ├── languages
│   │                   │   │   │   │   ├── af.json
│   │                   │   │   │   │   ├── ak.json
│   │                   │   │   │   │   ├── am.json
│   │                   │   │   │   │   ├── ar.json
│   │                   │   │   │   │   ├── ar_EG.json
│   │                   │   │   │   │   ├── as.json
│   │                   │   │   │   │   ├── az.json
│   │                   │   │   │   │   ├── az_Cyrl.json
│   │                   │   │   │   │   ├── be.json
│   │                   │   │   │   │   ├── bg.json
│   │                   │   │   │   │   ├── bm.json
│   │                   │   │   │   │   ├── bn.json
│   │                   │   │   │   │   ├── bo.json
│   │                   │   │   │   │   ├── br.json
│   │                   │   │   │   │   ├── bs.json
│   │                   │   │   │   │   ├── bs_Cyrl.json
│   │                   │   │   │   │   ├── ca.json
│   │                   │   │   │   │   ├── ce.json
│   │                   │   │   │   │   ├── cs.json
│   │                   │   │   │   │   ├── cy.json
│   │                   │   │   │   │   ├── da.json
│   │                   │   │   │   │   ├── de.json
│   │                   │   │   │   │   ├── de_CH.json
│   │                   │   │   │   │   ├── dz.json
│   │                   │   │   │   │   ├── ee.json
│   │                   │   │   │   │   ├── el.json
│   │                   │   │   │   │   ├── en.json
│   │                   │   │   │   │   ├── en_AU.json
│   │                   │   │   │   │   ├── en_GB.json
│   │                   │   │   │   │   ├── en_NZ.json
│   │                   │   │   │   │   ├── eo.json
│   │                   │   │   │   │   ├── es.json
│   │                   │   │   │   │   ├── es_419.json
│   │                   │   │   │   │   ├── es_MX.json
│   │                   │   │   │   │   ├── et.json
│   │                   │   │   │   │   ├── eu.json
│   │                   │   │   │   │   ├── fa.json
│   │                   │   │   │   │   ├── fa_AF.json
│   │                   │   │   │   │   ├── ff.json
│   │                   │   │   │   │   ├── fi.json
│   │                   │   │   │   │   ├── fo.json
│   │                   │   │   │   │   ├── fr.json
│   │                   │   │   │   │   ├── fr_CA.json
│   │                   │   │   │   │   ├── fr_CH.json
│   │                   │   │   │   │   ├── fy.json
│   │                   │   │   │   │   ├── ga.json
│   │                   │   │   │   │   ├── gd.json
│   │                   │   │   │   │   ├── gl.json
│   │                   │   │   │   │   ├── gu.json
│   │                   │   │   │   │   ├── gv.json
│   │                   │   │   │   │   ├── ha.json
│   │                   │   │   │   │   ├── he.json
│   │                   │   │   │   │   ├── hi.json
│   │                   │   │   │   │   ├── hr.json
│   │                   │   │   │   │   ├── hu.json
│   │                   │   │   │   │   ├── hy.json
│   │                   │   │   │   │   ├── id.json
│   │                   │   │   │   │   ├── ig.json
│   │                   │   │   │   │   ├── ii.json
│   │                   │   │   │   │   ├── in.json
│   │                   │   │   │   │   ├── is.json
│   │                   │   │   │   │   ├── it.json
│   │                   │   │   │   │   ├── iw.json
│   │                   │   │   │   │   ├── ja.json
│   │                   │   │   │   │   ├── ka.json
│   │                   │   │   │   │   ├── ki.json
│   │                   │   │   │   │   ├── kk.json
│   │                   │   │   │   │   ├── kl.json
│   │                   │   │   │   │   ├── km.json
│   │                   │   │   │   │   ├── kn.json
│   │                   │   │   │   │   ├── ko.json
│   │                   │   │   │   │   ├── ks.json
│   │                   │   │   │   │   ├── kw.json
│   │                   │   │   │   │   ├── ky.json
│   │                   │   │   │   │   ├── lb.json
│   │                   │   │   │   │   ├── lg.json
│   │                   │   │   │   │   ├── ln.json
│   │                   │   │   │   │   ├── lo.json
│   │                   │   │   │   │   ├── lt.json
│   │                   │   │   │   │   ├── lu.json
│   │                   │   │   │   │   ├── lv.json
│   │                   │   │   │   │   ├── meta.json
│   │                   │   │   │   │   ├── mg.json
│   │                   │   │   │   │   ├── mk.json
│   │                   │   │   │   │   ├── ml.json
│   │                   │   │   │   │   ├── mn.json
│   │                   │   │   │   │   ├── mr.json
│   │                   │   │   │   │   ├── ms.json
│   │                   │   │   │   │   ├── mt.json
│   │                   │   │   │   │   ├── my.json
│   │                   │   │   │   │   ├── nb.json
│   │                   │   │   │   │   ├── nd.json
│   │                   │   │   │   │   ├── ne.json
│   │                   │   │   │   │   ├── nl.json
│   │                   │   │   │   │   ├── nn.json
│   │                   │   │   │   │   ├── no.json
│   │                   │   │   │   │   ├── om.json
│   │                   │   │   │   │   ├── or.json
│   │                   │   │   │   │   ├── os.json
│   │                   │   │   │   │   ├── pa.json
│   │                   │   │   │   │   ├── pa_Arab.json
│   │                   │   │   │   │   ├── pl.json
│   │                   │   │   │   │   ├── ps.json
│   │                   │   │   │   │   ├── pt.json
│   │                   │   │   │   │   ├── pt_PT.json
│   │                   │   │   │   │   ├── qu.json
│   │                   │   │   │   │   ├── rm.json
│   │                   │   │   │   │   ├── rn.json
│   │                   │   │   │   │   ├── ro.json
│   │                   │   │   │   │   ├── ru.json
│   │                   │   │   │   │   ├── rw.json
│   │                   │   │   │   │   ├── se.json
│   │                   │   │   │   │   ├── se_FI.json
│   │                   │   │   │   │   ├── sg.json
│   │                   │   │   │   │   ├── sh.json
│   │                   │   │   │   │   ├── si.json
│   │                   │   │   │   │   ├── sk.json
│   │                   │   │   │   │   ├── sl.json
│   │                   │   │   │   │   ├── sn.json
│   │                   │   │   │   │   ├── so.json
│   │                   │   │   │   │   ├── sq.json
│   │                   │   │   │   │   ├── sr.json
│   │                   │   │   │   │   ├── sr_Latn.json
│   │                   │   │   │   │   ├── sv.json
│   │                   │   │   │   │   ├── sv_FI.json
│   │                   │   │   │   │   ├── sw.json
│   │                   │   │   │   │   ├── sw_CD.json
│   │                   │   │   │   │   ├── ta.json
│   │                   │   │   │   │   ├── te.json
│   │                   │   │   │   │   ├── th.json
│   │                   │   │   │   │   ├── ti.json
│   │                   │   │   │   │   ├── tl.json
│   │                   │   │   │   │   ├── to.json
│   │                   │   │   │   │   ├── tr.json
│   │                   │   │   │   │   ├── ug.json
│   │                   │   │   │   │   ├── uk.json
│   │                   │   │   │   │   ├── ur.json
│   │                   │   │   │   │   ├── ur_IN.json
│   │                   │   │   │   │   ├── uz.json
│   │                   │   │   │   │   ├── uz_Arab.json
│   │                   │   │   │   │   ├── uz_Cyrl.json
│   │                   │   │   │   │   ├── vi.json
│   │                   │   │   │   │   ├── yi.json
│   │                   │   │   │   │   ├── yo.json
│   │                   │   │   │   │   ├── yo_BJ.json
│   │                   │   │   │   │   ├── zh.json
│   │                   │   │   │   │   ├── zh_HK.json
│   │                   │   │   │   │   ├── zh_Hant.json
│   │                   │   │   │   │   ├── zh_Hant_HK.json
│   │                   │   │   │   │   └── zu.json
│   │                   │   │   │   ├── locales
│   │                   │   │   │   │   ├── af.json
│   │                   │   │   │   │   ├── ak.json
│   │                   │   │   │   │   ├── am.json
│   │                   │   │   │   │   ├── ar.json
│   │                   │   │   │   │   ├── ar_EG.json
│   │                   │   │   │   │   ├── as.json
│   │                   │   │   │   │   ├── az.json
│   │                   │   │   │   │   ├── az_AZ.json
│   │                   │   │   │   │   ├── az_Cyrl.json
│   │                   │   │   │   │   ├── be.json
│   │                   │   │   │   │   ├── bg.json
│   │                   │   │   │   │   ├── bm.json
│   │                   │   │   │   │   ├── bn.json
│   │                   │   │   │   │   ├── bo.json
│   │                   │   │   │   │   ├── br.json
│   │                   │   │   │   │   ├── bs.json
│   │                   │   │   │   │   ├── bs_BA.json
│   │                   │   │   │   │   ├── bs_Cyrl.json
│   │                   │   │   │   │   ├── ca.json
│   │                   │   │   │   │   ├── ce.json
│   │                   │   │   │   │   ├── cs.json
│   │                   │   │   │   │   ├── cy.json
│   │                   │   │   │   │   ├── da.json
│   │                   │   │   │   │   ├── de.json
│   │                   │   │   │   │   ├── de_CH.json
│   │                   │   │   │   │   ├── dz.json
│   │                   │   │   │   │   ├── ee.json
│   │                   │   │   │   │   ├── el.json
│   │                   │   │   │   │   ├── en.json
│   │                   │   │   │   │   ├── en_NH.json
│   │                   │   │   │   │   ├── en_RH.json
│   │                   │   │   │   │   ├── eo.json
│   │                   │   │   │   │   ├── es.json
│   │                   │   │   │   │   ├── es_419.json
│   │                   │   │   │   │   ├── es_CL.json
│   │                   │   │   │   │   ├── es_MX.json
│   │                   │   │   │   │   ├── et.json
│   │                   │   │   │   │   ├── eu.json
│   │                   │   │   │   │   ├── fa.json
│   │                   │   │   │   │   ├── fa_AF.json
│   │                   │   │   │   │   ├── ff.json
│   │                   │   │   │   │   ├── fi.json
│   │                   │   │   │   │   ├── fo.json
│   │                   │   │   │   │   ├── fr.json
│   │                   │   │   │   │   ├── fr_CA.json
│   │                   │   │   │   │   ├── fy.json
│   │                   │   │   │   │   ├── ga.json
│   │                   │   │   │   │   ├── gd.json
│   │                   │   │   │   │   ├── gl.json
│   │                   │   │   │   │   ├── gu.json
│   │                   │   │   │   │   ├── gv.json
│   │                   │   │   │   │   ├── ha.json
│   │                   │   │   │   │   ├── he.json
│   │                   │   │   │   │   ├── hi.json
│   │                   │   │   │   │   ├── hr.json
│   │                   │   │   │   │   ├── hu.json
│   │                   │   │   │   │   ├── hy.json
│   │                   │   │   │   │   ├── id.json
│   │                   │   │   │   │   ├── ig.json
│   │                   │   │   │   │   ├── ii.json
│   │                   │   │   │   │   ├── in.json
│   │                   │   │   │   │   ├── in_ID.json
│   │                   │   │   │   │   ├── is.json
│   │                   │   │   │   │   ├── it.json
│   │                   │   │   │   │   ├── iw.json
│   │                   │   │   │   │   ├── iw_IL.json
│   │                   │   │   │   │   ├── ja.json
│   │                   │   │   │   │   ├── ka.json
│   │                   │   │   │   │   ├── ki.json
│   │                   │   │   │   │   ├── kk.json
│   │                   │   │   │   │   ├── kl.json
│   │                   │   │   │   │   ├── km.json
│   │                   │   │   │   │   ├── kn.json
│   │                   │   │   │   │   ├── ko.json
│   │                   │   │   │   │   ├── ks.json
│   │                   │   │   │   │   ├── kw.json
│   │                   │   │   │   │   ├── ky.json
│   │                   │   │   │   │   ├── lb.json
│   │                   │   │   │   │   ├── lg.json
│   │                   │   │   │   │   ├── ln.json
│   │                   │   │   │   │   ├── lo.json
│   │                   │   │   │   │   ├── lt.json
│   │                   │   │   │   │   ├── lu.json
│   │                   │   │   │   │   ├── lv.json
│   │                   │   │   │   │   ├── meta.json
│   │                   │   │   │   │   ├── mg.json
│   │                   │   │   │   │   ├── mk.json
│   │                   │   │   │   │   ├── ml.json
│   │                   │   │   │   │   ├── mn.json
│   │                   │   │   │   │   ├── mo.json
│   │                   │   │   │   │   ├── mr.json
│   │                   │   │   │   │   ├── ms.json
│   │                   │   │   │   │   ├── mt.json
│   │                   │   │   │   │   ├── my.json
│   │                   │   │   │   │   ├── nb.json
│   │                   │   │   │   │   ├── nd.json
│   │                   │   │   │   │   ├── ne.json
│   │                   │   │   │   │   ├── nl.json
│   │                   │   │   │   │   ├── nn.json
│   │                   │   │   │   │   ├── no.json
│   │                   │   │   │   │   ├── no_NO.json
│   │                   │   │   │   │   ├── no_NO_NY.json
│   │                   │   │   │   │   ├── om.json
│   │                   │   │   │   │   ├── or.json
│   │                   │   │   │   │   ├── os.json
│   │                   │   │   │   │   ├── pa.json
│   │                   │   │   │   │   ├── pa_Arab.json
│   │                   │   │   │   │   ├── pa_IN.json
│   │                   │   │   │   │   ├── pa_PK.json
│   │                   │   │   │   │   ├── pl.json
│   │                   │   │   │   │   ├── ps.json
│   │                   │   │   │   │   ├── pt.json
│   │                   │   │   │   │   ├── pt_PT.json
│   │                   │   │   │   │   ├── qu.json
│   │                   │   │   │   │   ├── rm.json
│   │                   │   │   │   │   ├── rn.json
│   │                   │   │   │   │   ├── ro.json
│   │                   │   │   │   │   ├── ru.json
│   │                   │   │   │   │   ├── rw.json
│   │                   │   │   │   │   ├── se.json
│   │                   │   │   │   │   ├── se_FI.json
│   │                   │   │   │   │   ├── sg.json
│   │                   │   │   │   │   ├── sh.json
│   │                   │   │   │   │   ├── sh_BA.json
│   │                   │   │   │   │   ├── sh_CS.json
│   │                   │   │   │   │   ├── sh_YU.json
│   │                   │   │   │   │   ├── si.json
│   │                   │   │   │   │   ├── sk.json
│   │                   │   │   │   │   ├── sl.json
│   │                   │   │   │   │   ├── sn.json
│   │                   │   │   │   │   ├── so.json
│   │                   │   │   │   │   ├── sq.json
│   │                   │   │   │   │   ├── sr.json
│   │                   │   │   │   │   ├── sr_BA.json
│   │                   │   │   │   │   ├── sr_CS.json
│   │                   │   │   │   │   ├── sr_Cyrl_CS.json
│   │                   │   │   │   │   ├── sr_Cyrl_YU.json
│   │                   │   │   │   │   ├── sr_Latn.json
│   │                   │   │   │   │   ├── sr_Latn_CS.json
│   │                   │   │   │   │   ├── sr_Latn_YU.json
│   │                   │   │   │   │   ├── sr_ME.json
│   │                   │   │   │   │   ├── sr_RS.json
│   │                   │   │   │   │   ├── sr_XK.json
│   │                   │   │   │   │   ├── sr_YU.json
│   │                   │   │   │   │   ├── sv.json
│   │                   │   │   │   │   ├── sv_FI.json
│   │                   │   │   │   │   ├── sw.json
│   │                   │   │   │   │   ├── sw_CD.json
│   │                   │   │   │   │   ├── ta.json
│   │                   │   │   │   │   ├── te.json
│   │                   │   │   │   │   ├── th.json
│   │                   │   │   │   │   ├── ti.json
│   │                   │   │   │   │   ├── tl.json
│   │                   │   │   │   │   ├── tl_PH.json
│   │                   │   │   │   │   ├── to.json
│   │                   │   │   │   │   ├── tr.json
│   │                   │   │   │   │   ├── ug.json
│   │                   │   │   │   │   ├── uk.json
│   │                   │   │   │   │   ├── ur.json
│   │                   │   │   │   │   ├── ur_IN.json
│   │                   │   │   │   │   ├── uz.json
│   │                   │   │   │   │   ├── uz_AF.json
│   │                   │   │   │   │   ├── uz_Arab.json
│   │                   │   │   │   │   ├── uz_Cyrl.json
│   │                   │   │   │   │   ├── uz_UZ.json
│   │                   │   │   │   │   ├── vi.json
│   │                   │   │   │   │   ├── yi.json
│   │                   │   │   │   │   ├── yo.json
│   │                   │   │   │   │   ├── yo_BJ.json
│   │                   │   │   │   │   ├── zh.json
│   │                   │   │   │   │   ├── zh_CN.json
│   │                   │   │   │   │   ├── zh_HK.json
│   │                   │   │   │   │   ├── zh_Hant.json
│   │                   │   │   │   │   ├── zh_Hant_HK.json
│   │                   │   │   │   │   ├── zh_MO.json
│   │                   │   │   │   │   ├── zh_SG.json
│   │                   │   │   │   │   ├── zh_TW.json
│   │                   │   │   │   │   └── zu.json
│   │                   │   │   │   ├── regions
│   │                   │   │   │   │   ├── af.json
│   │                   │   │   │   │   ├── ak.json
│   │                   │   │   │   │   ├── am.json
│   │                   │   │   │   │   ├── ar.json
│   │                   │   │   │   │   ├── as.json
│   │                   │   │   │   │   ├── az.json
│   │                   │   │   │   │   ├── az_Cyrl.json
│   │                   │   │   │   │   ├── be.json
│   │                   │   │   │   │   ├── bg.json
│   │                   │   │   │   │   ├── bm.json
│   │                   │   │   │   │   ├── bn.json
│   │                   │   │   │   │   ├── bo.json
│   │                   │   │   │   │   ├── bo_IN.json
│   │                   │   │   │   │   ├── br.json
│   │                   │   │   │   │   ├── bs.json
│   │                   │   │   │   │   ├── bs_Cyrl.json
│   │                   │   │   │   │   ├── ca.json
│   │                   │   │   │   │   ├── ce.json
│   │                   │   │   │   │   ├── cs.json
│   │                   │   │   │   │   ├── cy.json
│   │                   │   │   │   │   ├── da.json
│   │                   │   │   │   │   ├── de.json
│   │                   │   │   │   │   ├── de_CH.json
│   │                   │   │   │   │   ├── dz.json
│   │                   │   │   │   │   ├── ee.json
│   │                   │   │   │   │   ├── el.json
│   │                   │   │   │   │   ├── en.json
│   │                   │   │   │   │   ├── eo.json
│   │                   │   │   │   │   ├── es.json
│   │                   │   │   │   │   ├── es_CL.json
│   │                   │   │   │   │   ├── es_MX.json
│   │                   │   │   │   │   ├── et.json
│   │                   │   │   │   │   ├── eu.json
│   │                   │   │   │   │   ├── fa.json
│   │                   │   │   │   │   ├── fa_AF.json
│   │                   │   │   │   │   ├── ff.json
│   │                   │   │   │   │   ├── fi.json
│   │                   │   │   │   │   ├── fo.json
│   │                   │   │   │   │   ├── fr.json
│   │                   │   │   │   │   ├── fr_CA.json
│   │                   │   │   │   │   ├── fy.json
│   │                   │   │   │   │   ├── ga.json
│   │                   │   │   │   │   ├── gd.json
│   │                   │   │   │   │   ├── gl.json
│   │                   │   │   │   │   ├── gu.json
│   │                   │   │   │   │   ├── gv.json
│   │                   │   │   │   │   ├── ha.json
│   │                   │   │   │   │   ├── he.json
│   │                   │   │   │   │   ├── hi.json
│   │                   │   │   │   │   ├── hr.json
│   │                   │   │   │   │   ├── hu.json
│   │                   │   │   │   │   ├── hy.json
│   │                   │   │   │   │   ├── id.json
│   │                   │   │   │   │   ├── ig.json
│   │                   │   │   │   │   ├── ii.json
│   │                   │   │   │   │   ├── in.json
│   │                   │   │   │   │   ├── is.json
│   │                   │   │   │   │   ├── it.json
│   │                   │   │   │   │   ├── iw.json
│   │                   │   │   │   │   ├── ja.json
│   │                   │   │   │   │   ├── ka.json
│   │                   │   │   │   │   ├── ki.json
│   │                   │   │   │   │   ├── kk.json
│   │                   │   │   │   │   ├── kl.json
│   │                   │   │   │   │   ├── km.json
│   │                   │   │   │   │   ├── kn.json
│   │                   │   │   │   │   ├── ko.json
│   │                   │   │   │   │   ├── ks.json
│   │                   │   │   │   │   ├── kw.json
│   │                   │   │   │   │   ├── ky.json
│   │                   │   │   │   │   ├── lb.json
│   │                   │   │   │   │   ├── lg.json
│   │                   │   │   │   │   ├── ln.json
│   │                   │   │   │   │   ├── lo.json
│   │                   │   │   │   │   ├── lt.json
│   │                   │   │   │   │   ├── lu.json
│   │                   │   │   │   │   ├── lv.json
│   │                   │   │   │   │   ├── meta.json
│   │                   │   │   │   │   ├── mg.json
│   │                   │   │   │   │   ├── mk.json
│   │                   │   │   │   │   ├── ml.json
│   │                   │   │   │   │   ├── mn.json
│   │                   │   │   │   │   ├── mr.json
│   │                   │   │   │   │   ├── ms.json
│   │                   │   │   │   │   ├── mt.json
│   │                   │   │   │   │   ├── my.json
│   │                   │   │   │   │   ├── nb.json
│   │                   │   │   │   │   ├── nd.json
│   │                   │   │   │   │   ├── ne.json
│   │                   │   │   │   │   ├── nl.json
│   │                   │   │   │   │   ├── nn.json
│   │                   │   │   │   │   ├── no.json
│   │                   │   │   │   │   ├── om.json
│   │                   │   │   │   │   ├── or.json
│   │                   │   │   │   │   ├── os.json
│   │                   │   │   │   │   ├── pa.json
│   │                   │   │   │   │   ├── pa_Arab.json
│   │                   │   │   │   │   ├── pl.json
│   │                   │   │   │   │   ├── ps.json
│   │                   │   │   │   │   ├── pt.json
│   │                   │   │   │   │   ├── pt_PT.json
│   │                   │   │   │   │   ├── qu.json
│   │                   │   │   │   │   ├── rm.json
│   │                   │   │   │   │   ├── rn.json
│   │                   │   │   │   │   ├── ro.json
│   │                   │   │   │   │   ├── ru.json
│   │                   │   │   │   │   ├── rw.json
│   │                   │   │   │   │   ├── se.json
│   │                   │   │   │   │   ├── se_FI.json
│   │                   │   │   │   │   ├── sg.json
│   │                   │   │   │   │   ├── sh.json
│   │                   │   │   │   │   ├── si.json
│   │                   │   │   │   │   ├── sk.json
│   │                   │   │   │   │   ├── sl.json
│   │                   │   │   │   │   ├── sn.json
│   │                   │   │   │   │   ├── so.json
│   │                   │   │   │   │   ├── sq.json
│   │                   │   │   │   │   ├── sr.json
│   │                   │   │   │   │   ├── sr_Latn.json
│   │                   │   │   │   │   ├── sv.json
│   │                   │   │   │   │   ├── sw.json
│   │                   │   │   │   │   ├── sw_CD.json
│   │                   │   │   │   │   ├── ta.json
│   │                   │   │   │   │   ├── te.json
│   │                   │   │   │   │   ├── th.json
│   │                   │   │   │   │   ├── tl.json
│   │                   │   │   │   │   ├── to.json
│   │                   │   │   │   │   ├── tr.json
│   │                   │   │   │   │   ├── ug.json
│   │                   │   │   │   │   ├── uk.json
│   │                   │   │   │   │   ├── ur.json
│   │                   │   │   │   │   ├── ur_IN.json
│   │                   │   │   │   │   ├── uz.json
│   │                   │   │   │   │   ├── uz_Arab.json
│   │                   │   │   │   │   ├── uz_Cyrl.json
│   │                   │   │   │   │   ├── vi.json
│   │                   │   │   │   │   ├── yi.json
│   │                   │   │   │   │   ├── yo.json
│   │                   │   │   │   │   ├── yo_BJ.json
│   │                   │   │   │   │   ├── zh.json
│   │                   │   │   │   │   ├── zh_HK.json
│   │                   │   │   │   │   ├── zh_Hant.json
│   │                   │   │   │   │   ├── zh_Hant_HK.json
│   │                   │   │   │   │   └── zu.json
│   │                   │   │   │   ├── scripts
│   │                   │   │   │   │   ├── af.json
│   │                   │   │   │   │   ├── am.json
│   │                   │   │   │   │   ├── ar.json
│   │                   │   │   │   │   ├── as.json
│   │                   │   │   │   │   ├── az.json
│   │                   │   │   │   │   ├── az_Cyrl.json
│   │                   │   │   │   │   ├── be.json
│   │                   │   │   │   │   ├── bg.json
│   │                   │   │   │   │   ├── bn.json
│   │                   │   │   │   │   ├── bo.json
│   │                   │   │   │   │   ├── br.json
│   │                   │   │   │   │   ├── bs.json
│   │                   │   │   │   │   ├── bs_Cyrl.json
│   │                   │   │   │   │   ├── ca.json
│   │                   │   │   │   │   ├── ce.json
│   │                   │   │   │   │   ├── cs.json
│   │                   │   │   │   │   ├── cy.json
│   │                   │   │   │   │   ├── da.json
│   │                   │   │   │   │   ├── de.json
│   │                   │   │   │   │   ├── dz.json
│   │                   │   │   │   │   ├── ee.json
│   │                   │   │   │   │   ├── el.json
│   │                   │   │   │   │   ├── en.json
│   │                   │   │   │   │   ├── es.json
│   │                   │   │   │   │   ├── es_MX.json
│   │                   │   │   │   │   ├── et.json
│   │                   │   │   │   │   ├── eu.json
│   │                   │   │   │   │   ├── fa.json
│   │                   │   │   │   │   ├── fa_AF.json
│   │                   │   │   │   │   ├── fi.json
│   │                   │   │   │   │   ├── fo.json
│   │                   │   │   │   │   ├── fr.json
│   │                   │   │   │   │   ├── fr_CA.json
│   │                   │   │   │   │   ├── fy.json
│   │                   │   │   │   │   ├── ga.json
│   │                   │   │   │   │   ├── gd.json
│   │                   │   │   │   │   ├── gl.json
│   │                   │   │   │   │   ├── gu.json
│   │                   │   │   │   │   ├── he.json
│   │                   │   │   │   │   ├── hi.json
│   │                   │   │   │   │   ├── hr.json
│   │                   │   │   │   │   ├── hu.json
│   │                   │   │   │   │   ├── hy.json
│   │                   │   │   │   │   ├── id.json
│   │                   │   │   │   │   ├── ii.json
│   │                   │   │   │   │   ├── in.json
│   │                   │   │   │   │   ├── is.json
│   │                   │   │   │   │   ├── it.json
│   │                   │   │   │   │   ├── iw.json
│   │                   │   │   │   │   ├── ja.json
│   │                   │   │   │   │   ├── ka.json
│   │                   │   │   │   │   ├── kk.json
│   │                   │   │   │   │   ├── km.json
│   │                   │   │   │   │   ├── kn.json
│   │                   │   │   │   │   ├── ko.json
│   │                   │   │   │   │   ├── ks.json
│   │                   │   │   │   │   ├── ky.json
│   │                   │   │   │   │   ├── lb.json
│   │                   │   │   │   │   ├── lo.json
│   │                   │   │   │   │   ├── lt.json
│   │                   │   │   │   │   ├── lv.json
│   │                   │   │   │   │   ├── meta.json
│   │                   │   │   │   │   ├── mk.json
│   │                   │   │   │   │   ├── ml.json
│   │                   │   │   │   │   ├── mn.json
│   │                   │   │   │   │   ├── mr.json
│   │                   │   │   │   │   ├── ms.json
│   │                   │   │   │   │   ├── mt.json
│   │                   │   │   │   │   ├── my.json
│   │                   │   │   │   │   ├── nb.json
│   │                   │   │   │   │   ├── ne.json
│   │                   │   │   │   │   ├── nl.json
│   │                   │   │   │   │   ├── nn.json
│   │                   │   │   │   │   ├── no.json
│   │                   │   │   │   │   ├── om.json
│   │                   │   │   │   │   ├── or.json
│   │                   │   │   │   │   ├── os.json
│   │                   │   │   │   │   ├── pa.json
│   │                   │   │   │   │   ├── pa_Arab.json
│   │                   │   │   │   │   ├── pl.json
│   │                   │   │   │   │   ├── ps.json
│   │                   │   │   │   │   ├── pt.json
│   │                   │   │   │   │   ├── pt_PT.json
│   │                   │   │   │   │   ├── rm.json
│   │                   │   │   │   │   ├── ro.json
│   │                   │   │   │   │   ├── ru.json
│   │                   │   │   │   │   ├── se.json
│   │                   │   │   │   │   ├── se_FI.json
│   │                   │   │   │   │   ├── sh.json
│   │                   │   │   │   │   ├── si.json
│   │                   │   │   │   │   ├── sk.json
│   │                   │   │   │   │   ├── sl.json
│   │                   │   │   │   │   ├── so.json
│   │                   │   │   │   │   ├── sq.json
│   │                   │   │   │   │   ├── sr.json
│   │                   │   │   │   │   ├── sr_Latn.json
│   │                   │   │   │   │   ├── sv.json
│   │                   │   │   │   │   ├── sw.json
│   │                   │   │   │   │   ├── ta.json
│   │                   │   │   │   │   ├── te.json
│   │                   │   │   │   │   ├── th.json
│   │                   │   │   │   │   ├── ti.json
│   │                   │   │   │   │   ├── tl.json
│   │                   │   │   │   │   ├── to.json
│   │                   │   │   │   │   ├── tr.json
│   │                   │   │   │   │   ├── ug.json
│   │                   │   │   │   │   ├── uk.json
│   │                   │   │   │   │   ├── ur.json
│   │                   │   │   │   │   ├── uz.json
│   │                   │   │   │   │   ├── uz_Arab.json
│   │                   │   │   │   │   ├── uz_Cyrl.json
│   │                   │   │   │   │   ├── vi.json
│   │                   │   │   │   │   ├── yi.json
│   │                   │   │   │   │   ├── zh.json
│   │                   │   │   │   │   ├── zh_HK.json
│   │                   │   │   │   │   ├── zh_Hant.json
│   │                   │   │   │   │   ├── zh_Hant_HK.json
│   │                   │   │   │   │   └── zu.json
│   │                   │   │   │   ├── svn-info.txt
│   │                   │   │   │   └── version.txt
│   │                   │   │   └── stubs
│   │                   │   │       ├── Collator.php
│   │                   │   │       ├── IntlDateFormatter.php
│   │                   │   │       ├── Locale.php
│   │                   │   │       └── NumberFormatter.php
│   │                   │   ├── Tests
│   │                   │   │   ├── Collator
│   │                   │   │   │   ├── AbstractCollatorTest.php
│   │                   │   │   │   ├── CollatorTest.php
│   │                   │   │   │   └── Verification
│   │                   │   │   │       └── CollatorTest.php
│   │                   │   │   ├── Data
│   │                   │   │   │   ├── Bundle
│   │                   │   │   │   │   ├── Reader
│   │                   │   │   │   │   │   ├── BundleEntryReaderTest.php
│   │                   │   │   │   │   │   ├── Fixtures
│   │                   │   │   │   │   │   │   ├── NotAFile
│   │                   │   │   │   │   │   │   │   └── en.php
│   │                   │   │   │   │   │   │   ├── build.sh
│   │                   │   │   │   │   │   │   ├── en.php
│   │                   │   │   │   │   │   │   ├── en.res
│   │                   │   │   │   │   │   │   ├── en.txt
│   │                   │   │   │   │   │   │   ├── json
│   │                   │   │   │   │   │   │   │   ├── en.json
│   │                   │   │   │   │   │   │   │   └── en_Invalid.json
│   │                   │   │   │   │   │   │   ├── php
│   │                   │   │   │   │   │   │   │   └── en.php
│   │                   │   │   │   │   │   │   ├── res
│   │                   │   │   │   │   │   │   │   ├── alias.res
│   │                   │   │   │   │   │   │   │   ├── mo.res
│   │                   │   │   │   │   │   │   │   ├── ro.res
│   │                   │   │   │   │   │   │   │   ├── ro_MD.res
│   │                   │   │   │   │   │   │   │   └── root.res
│   │                   │   │   │   │   │   │   └── txt
│   │                   │   │   │   │   │   │       ├── alias.txt
│   │                   │   │   │   │   │   │       ├── mo.txt
│   │                   │   │   │   │   │   │       ├── ro.txt
│   │                   │   │   │   │   │   │       ├── ro_MD.txt
│   │                   │   │   │   │   │   │       └── root.txt
│   │                   │   │   │   │   │   ├── IntlBundleReaderTest.php
│   │                   │   │   │   │   │   ├── JsonBundleReaderTest.php
│   │                   │   │   │   │   │   └── PhpBundleReaderTest.php
│   │                   │   │   │   │   └── Writer
│   │                   │   │   │   │       ├── Fixtures
│   │                   │   │   │   │       │   ├── en.json
│   │                   │   │   │   │       │   ├── en.php
│   │                   │   │   │   │       │   ├── en.res
│   │                   │   │   │   │       │   ├── en.txt
│   │                   │   │   │   │       │   ├── en_nofallback.txt
│   │                   │   │   │   │       │   ├── escaped.txt
│   │                   │   │   │   │       │   ├── rb.json
│   │                   │   │   │   │       │   ├── rb.php
│   │                   │   │   │   │       │   ├── rb.res
│   │                   │   │   │   │       │   └── rb.txt
│   │                   │   │   │   │       ├── JsonBundleWriterTest.php
│   │                   │   │   │   │       ├── PhpBundleWriterTest.php
│   │                   │   │   │   │       └── TextBundleWriterTest.php
│   │                   │   │   │   ├── Provider
│   │                   │   │   │   │   ├── AbstractCurrencyDataProviderTest.php
│   │                   │   │   │   │   ├── AbstractDataProviderTest.php
│   │                   │   │   │   │   ├── AbstractLanguageDataProviderTest.php
│   │                   │   │   │   │   ├── AbstractLocaleDataProviderTest.php
│   │                   │   │   │   │   ├── AbstractRegionDataProviderTest.php
│   │                   │   │   │   │   ├── AbstractScriptDataProviderTest.php
│   │                   │   │   │   │   └── Json
│   │                   │   │   │   │       ├── JsonCurrencyDataProviderTest.php
│   │                   │   │   │   │       ├── JsonLanguageDataProviderTest.php
│   │                   │   │   │   │       ├── JsonLocaleDataProviderTest.php
│   │                   │   │   │   │       ├── JsonRegionDataProviderTest.php
│   │                   │   │   │   │       └── JsonScriptDataProviderTest.php
│   │                   │   │   │   └── Util
│   │                   │   │   │       ├── LocaleScannerTest.php
│   │                   │   │   │       └── RingBufferTest.php
│   │                   │   │   ├── DateFormatter
│   │                   │   │   │   ├── AbstractIntlDateFormatterTest.php
│   │                   │   │   │   ├── IntlDateFormatterTest.php
│   │                   │   │   │   └── Verification
│   │                   │   │   │       └── IntlDateFormatterTest.php
│   │                   │   │   ├── Globals
│   │                   │   │   │   ├── AbstractIntlGlobalsTest.php
│   │                   │   │   │   ├── IntlGlobalsTest.php
│   │                   │   │   │   └── Verification
│   │                   │   │   │       └── IntlGlobalsTest.php
│   │                   │   │   ├── Locale
│   │                   │   │   │   ├── AbstractLocaleTest.php
│   │                   │   │   │   ├── LocaleTest.php
│   │                   │   │   │   └── Verification
│   │                   │   │   │       └── LocaleTest.php
│   │                   │   │   ├── NumberFormatter
│   │                   │   │   │   ├── AbstractNumberFormatterTest.php
│   │                   │   │   │   ├── NumberFormatterTest.php
│   │                   │   │   │   └── Verification
│   │                   │   │   │       └── NumberFormatterTest.php
│   │                   │   │   └── Util
│   │                   │   │       ├── IcuVersionTest.php
│   │                   │   │       └── VersionTest.php
│   │                   │   ├── Util
│   │                   │   │   ├── IcuVersion.php
│   │                   │   │   ├── IntlTestHelper.php
│   │                   │   │   ├── SvnCommit.php
│   │                   │   │   ├── SvnRepository.php
│   │                   │   │   └── Version.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Ldap
│   │                   │   ├── Adapter
│   │                   │   │   ├── AbstractConnection.php
│   │                   │   │   ├── AbstractQuery.php
│   │                   │   │   ├── AdapterInterface.php
│   │                   │   │   ├── CollectionInterface.php
│   │                   │   │   ├── ConnectionInterface.php
│   │                   │   │   ├── EntryManagerInterface.php
│   │                   │   │   ├── ExtLdap
│   │                   │   │   │   ├── Adapter.php
│   │                   │   │   │   ├── Collection.php
│   │                   │   │   │   ├── Connection.php
│   │                   │   │   │   ├── ConnectionOptions.php
│   │                   │   │   │   ├── EntryManager.php
│   │                   │   │   │   └── Query.php
│   │                   │   │   └── QueryInterface.php
│   │                   │   ├── Entry.php
│   │                   │   ├── Exception
│   │                   │   │   ├── ConnectionException.php
│   │                   │   │   ├── DriverNotFoundException.php
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── LdapException.php
│   │                   │   │   └── NotBoundException.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Ldap.php
│   │                   │   ├── LdapClient.php
│   │                   │   ├── LdapClientInterface.php
│   │                   │   ├── LdapInterface.php
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   ├── Adapter
│   │                   │   │   │   └── ExtLdap
│   │                   │   │   │       ├── AdapterTest.php
│   │                   │   │   │       └── LdapManagerTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── conf
│   │                   │   │   │   │   └── slapd.conf
│   │                   │   │   │   └── data
│   │                   │   │   │       ├── base.ldif
│   │                   │   │   │       └── fixtures.ldif
│   │                   │   │   ├── LdapClientTest.php
│   │                   │   │   ├── LdapTest.php
│   │                   │   │   └── LdapTestCase.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── OptionsResolver
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Exception
│   │                   │   │   ├── AccessException.php
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── InvalidArgumentException.php
│   │                   │   │   ├── InvalidOptionsException.php
│   │                   │   │   ├── MissingOptionsException.php
│   │                   │   │   ├── NoSuchOptionException.php
│   │                   │   │   ├── OptionDefinitionException.php
│   │                   │   │   └── UndefinedOptionsException.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Options.php
│   │                   │   ├── OptionsResolver.php
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   └── OptionsResolverTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Process
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Exception
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── InvalidArgumentException.php
│   │                   │   │   ├── LogicException.php
│   │                   │   │   ├── ProcessFailedException.php
│   │                   │   │   ├── ProcessTimedOutException.php
│   │                   │   │   └── RuntimeException.php
│   │                   │   ├── ExecutableFinder.php
│   │                   │   ├── InputStream.php
│   │                   │   ├── LICENSE
│   │                   │   ├── PhpExecutableFinder.php
│   │                   │   ├── PhpProcess.php
│   │                   │   ├── Pipes
│   │                   │   │   ├── AbstractPipes.php
│   │                   │   │   ├── PipesInterface.php
│   │                   │   │   ├── UnixPipes.php
│   │                   │   │   └── WindowsPipes.php
│   │                   │   ├── Process.php
│   │                   │   ├── ProcessBuilder.php
│   │                   │   ├── ProcessUtils.php
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   ├── ExecutableFinderTest.php
│   │                   │   │   ├── NonStopableProcess.php
│   │                   │   │   ├── PhpExecutableFinderTest.php
│   │                   │   │   ├── PhpProcessTest.php
│   │                   │   │   ├── PipeStdinInStdoutStdErrStreamSelect.php
│   │                   │   │   ├── ProcessBuilderTest.php
│   │                   │   │   ├── ProcessFailedExceptionTest.php
│   │                   │   │   ├── ProcessTest.php
│   │                   │   │   ├── ProcessUtilsTest.php
│   │                   │   │   └── SignalListener.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── PropertyAccess
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Exception
│   │                   │   │   ├── AccessException.php
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── InvalidArgumentException.php
│   │                   │   │   ├── InvalidPropertyPathException.php
│   │                   │   │   ├── NoSuchIndexException.php
│   │                   │   │   ├── NoSuchPropertyException.php
│   │                   │   │   ├── OutOfBoundsException.php
│   │                   │   │   ├── RuntimeException.php
│   │                   │   │   └── UnexpectedTypeException.php
│   │                   │   ├── LICENSE
│   │                   │   ├── PropertyAccess.php
│   │                   │   ├── PropertyAccessor.php
│   │                   │   ├── PropertyAccessorBuilder.php
│   │                   │   ├── PropertyAccessorInterface.php
│   │                   │   ├── PropertyPath.php
│   │                   │   ├── PropertyPathBuilder.php
│   │                   │   ├── PropertyPathInterface.php
│   │                   │   ├── PropertyPathIterator.php
│   │                   │   ├── PropertyPathIteratorInterface.php
│   │                   │   ├── README.md
│   │                   │   ├── StringUtil.php
│   │                   │   ├── Tests
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── NonTraversableArrayObject.php
│   │                   │   │   │   ├── TestClass.php
│   │                   │   │   │   ├── TestClassIsWritable.php
│   │                   │   │   │   ├── TestClassMagicCall.php
│   │                   │   │   │   ├── TestClassMagicGet.php
│   │                   │   │   │   ├── TestClassSetValue.php
│   │                   │   │   │   ├── Ticket5775Object.php
│   │                   │   │   │   ├── TraversableArrayObject.php
│   │                   │   │   │   └── TypeHinted.php
│   │                   │   │   ├── PropertyAccessorArrayAccessTest.php
│   │                   │   │   ├── PropertyAccessorArrayObjectTest.php
│   │                   │   │   ├── PropertyAccessorArrayTest.php
│   │                   │   │   ├── PropertyAccessorBuilderTest.php
│   │                   │   │   ├── PropertyAccessorCollectionTest.php
│   │                   │   │   ├── PropertyAccessorNonTraversableArrayObjectTest.php
│   │                   │   │   ├── PropertyAccessorTest.php
│   │                   │   │   ├── PropertyAccessorTraversableArrayObjectTest.php
│   │                   │   │   ├── PropertyPathBuilderTest.php
│   │                   │   │   ├── PropertyPathTest.php
│   │                   │   │   └── StringUtilTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── PropertyInfo
│   │                   │   ├── Extractor
│   │                   │   │   ├── PhpDocExtractor.php
│   │                   │   │   ├── ReflectionExtractor.php
│   │                   │   │   └── SerializerExtractor.php
│   │                   │   ├── LICENSE
│   │                   │   ├── PropertyAccessExtractorInterface.php
│   │                   │   ├── PropertyDescriptionExtractorInterface.php
│   │                   │   ├── PropertyInfoCacheExtractor.php
│   │                   │   ├── PropertyInfoExtractor.php
│   │                   │   ├── PropertyInfoExtractorInterface.php
│   │                   │   ├── PropertyListExtractorInterface.php
│   │                   │   ├── PropertyTypeExtractorInterface.php
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   ├── AbstractPropertyInfoExtractorTest.php
│   │                   │   │   ├── Extractors
│   │                   │   │   │   ├── PhpDocExtractorTest.php
│   │                   │   │   │   ├── ReflectionExtractorTest.php
│   │                   │   │   │   └── SerializerExtractorTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── AdderRemoverDummy.php
│   │                   │   │   │   ├── Dummy.php
│   │                   │   │   │   ├── DummyExtractor.php
│   │                   │   │   │   ├── NullExtractor.php
│   │                   │   │   │   ├── ParentDummy.php
│   │                   │   │   │   ├── Php71Dummy.php
│   │                   │   │   │   └── Php7Dummy.php
│   │                   │   │   ├── PropertyInfoCacheExtractorTest.php
│   │                   │   │   ├── PropertyInfoExtractorTest.php
│   │                   │   │   └── TypeTest.php
│   │                   │   ├── Type.php
│   │                   │   ├── Util
│   │                   │   │   └── PhpDocTypeHelper.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Routing
│   │                   │   ├── Annotation
│   │                   │   │   └── Route.php
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── CompiledRoute.php
│   │                   │   ├── Exception
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── InvalidParameterException.php
│   │                   │   │   ├── MethodNotAllowedException.php
│   │                   │   │   ├── MissingMandatoryParametersException.php
│   │                   │   │   ├── ResourceNotFoundException.php
│   │                   │   │   └── RouteNotFoundException.php
│   │                   │   ├── Generator
│   │                   │   │   ├── ConfigurableRequirementsInterface.php
│   │                   │   │   ├── Dumper
│   │                   │   │   │   ├── GeneratorDumper.php
│   │                   │   │   │   ├── GeneratorDumperInterface.php
│   │                   │   │   │   └── PhpGeneratorDumper.php
│   │                   │   │   ├── UrlGenerator.php
│   │                   │   │   └── UrlGeneratorInterface.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Loader
│   │                   │   │   ├── AnnotationClassLoader.php
│   │                   │   │   ├── AnnotationDirectoryLoader.php
│   │                   │   │   ├── AnnotationFileLoader.php
│   │                   │   │   ├── ClosureLoader.php
│   │                   │   │   ├── DependencyInjection
│   │                   │   │   │   └── ServiceRouterLoader.php
│   │                   │   │   ├── DirectoryLoader.php
│   │                   │   │   ├── ObjectRouteLoader.php
│   │                   │   │   ├── PhpFileLoader.php
│   │                   │   │   ├── XmlFileLoader.php
│   │                   │   │   ├── YamlFileLoader.php
│   │                   │   │   └── schema
│   │                   │   │       └── routing
│   │                   │   │           └── routing-1.0.xsd
│   │                   │   ├── Matcher
│   │                   │   │   ├── Dumper
│   │                   │   │   │   ├── DumperCollection.php
│   │                   │   │   │   ├── DumperPrefixCollection.php
│   │                   │   │   │   ├── DumperRoute.php
│   │                   │   │   │   ├── MatcherDumper.php
│   │                   │   │   │   ├── MatcherDumperInterface.php
│   │                   │   │   │   └── PhpMatcherDumper.php
│   │                   │   │   ├── RedirectableUrlMatcher.php
│   │                   │   │   ├── RedirectableUrlMatcherInterface.php
│   │                   │   │   ├── RequestMatcherInterface.php
│   │                   │   │   ├── TraceableUrlMatcher.php
│   │                   │   │   ├── UrlMatcher.php
│   │                   │   │   └── UrlMatcherInterface.php
│   │                   │   ├── README.md
│   │                   │   ├── RequestContext.php
│   │                   │   ├── RequestContextAwareInterface.php
│   │                   │   ├── Route.php
│   │                   │   ├── RouteCollection.php
│   │                   │   ├── RouteCollectionBuilder.php
│   │                   │   ├── RouteCompiler.php
│   │                   │   ├── RouteCompilerInterface.php
│   │                   │   ├── Router.php
│   │                   │   ├── RouterInterface.php
│   │                   │   ├── Tests
│   │                   │   │   ├── Annotation
│   │                   │   │   │   └── RouteTest.php
│   │                   │   │   ├── CompiledRouteTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── AnnotatedClasses
│   │                   │   │   │   │   ├── AbstractClass.php
│   │                   │   │   │   │   ├── BarClass.php
│   │                   │   │   │   │   ├── FooClass.php
│   │                   │   │   │   │   └── FooTrait.php
│   │                   │   │   │   ├── CustomXmlFileLoader.php
│   │                   │   │   │   ├── OtherAnnotatedClasses
│   │                   │   │   │   │   ├── NoStartTagClass.php
│   │                   │   │   │   │   └── VariadicClass.php
│   │                   │   │   │   ├── RedirectableUrlMatcher.php
│   │                   │   │   │   ├── annotated.php
│   │                   │   │   │   ├── bad_format.yml
│   │                   │   │   │   ├── bar.xml
│   │                   │   │   │   ├── directory
│   │                   │   │   │   │   ├── recurse
│   │                   │   │   │   │   │   ├── routes1.yml
│   │                   │   │   │   │   │   └── routes2.yml
│   │                   │   │   │   │   └── routes3.yml
│   │                   │   │   │   ├── directory_import
│   │                   │   │   │   │   └── import.yml
│   │                   │   │   │   ├── dumper
│   │                   │   │   │   │   ├── url_matcher1.apache
│   │                   │   │   │   │   ├── url_matcher1.php
│   │                   │   │   │   │   ├── url_matcher2.apache
│   │                   │   │   │   │   ├── url_matcher2.php
│   │                   │   │   │   │   └── url_matcher3.php
│   │                   │   │   │   ├── empty.yml
│   │                   │   │   │   ├── file_resource.yml
│   │                   │   │   │   ├── foo.xml
│   │                   │   │   │   ├── foo1.xml
│   │                   │   │   │   ├── incomplete.yml
│   │                   │   │   │   ├── list_defaults.xml
│   │                   │   │   │   ├── list_in_list_defaults.xml
│   │                   │   │   │   ├── list_in_map_defaults.xml
│   │                   │   │   │   ├── list_null_values.xml
│   │                   │   │   │   ├── map_defaults.xml
│   │                   │   │   │   ├── map_in_list_defaults.xml
│   │                   │   │   │   ├── map_in_map_defaults.xml
│   │                   │   │   │   ├── map_null_values.xml
│   │                   │   │   │   ├── missing_id.xml
│   │                   │   │   │   ├── missing_path.xml
│   │                   │   │   │   ├── namespaceprefix.xml
│   │                   │   │   │   ├── nonesense_resource_plus_path.yml
│   │                   │   │   │   ├── nonesense_type_without_resource.yml
│   │                   │   │   │   ├── nonvalid.xml
│   │                   │   │   │   ├── nonvalid.yml
│   │                   │   │   │   ├── nonvalid2.yml
│   │                   │   │   │   ├── nonvalidkeys.yml
│   │                   │   │   │   ├── nonvalidnode.xml
│   │                   │   │   │   ├── nonvalidroute.xml
│   │                   │   │   │   ├── null_values.xml
│   │                   │   │   │   ├── scalar_defaults.xml
│   │                   │   │   │   ├── special_route_name.yml
│   │                   │   │   │   ├── validpattern.php
│   │                   │   │   │   ├── validpattern.xml
│   │                   │   │   │   ├── validpattern.yml
│   │                   │   │   │   ├── validresource.php
│   │                   │   │   │   ├── validresource.xml
│   │                   │   │   │   ├── validresource.yml
│   │                   │   │   │   ├── with_define_path_variable.php
│   │                   │   │   │   └── withdoctype.xml
│   │                   │   │   ├── Generator
│   │                   │   │   │   ├── Dumper
│   │                   │   │   │   │   └── PhpGeneratorDumperTest.php
│   │                   │   │   │   └── UrlGeneratorTest.php
│   │                   │   │   ├── Loader
│   │                   │   │   │   ├── AbstractAnnotationLoaderTest.php
│   │                   │   │   │   ├── AnnotationClassLoaderTest.php
│   │                   │   │   │   ├── AnnotationDirectoryLoaderTest.php
│   │                   │   │   │   ├── AnnotationFileLoaderTest.php
│   │                   │   │   │   ├── ClosureLoaderTest.php
│   │                   │   │   │   ├── DirectoryLoaderTest.php
│   │                   │   │   │   ├── ObjectRouteLoaderTest.php
│   │                   │   │   │   ├── PhpFileLoaderTest.php
│   │                   │   │   │   ├── XmlFileLoaderTest.php
│   │                   │   │   │   └── YamlFileLoaderTest.php
│   │                   │   │   ├── Matcher
│   │                   │   │   │   ├── Dumper
│   │                   │   │   │   │   ├── DumperCollectionTest.php
│   │                   │   │   │   │   ├── DumperPrefixCollectionTest.php
│   │                   │   │   │   │   └── PhpMatcherDumperTest.php
│   │                   │   │   │   ├── RedirectableUrlMatcherTest.php
│   │                   │   │   │   ├── TraceableUrlMatcherTest.php
│   │                   │   │   │   └── UrlMatcherTest.php
│   │                   │   │   ├── RequestContextTest.php
│   │                   │   │   ├── RouteCollectionBuilderTest.php
│   │                   │   │   ├── RouteCollectionTest.php
│   │                   │   │   ├── RouteCompilerTest.php
│   │                   │   │   ├── RouteTest.php
│   │                   │   │   └── RouterTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Security
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Core
│   │                   │   │   ├── Authentication
│   │                   │   │   │   ├── AuthenticationManagerInterface.php
│   │                   │   │   │   ├── AuthenticationProviderManager.php
│   │                   │   │   │   ├── AuthenticationTrustResolver.php
│   │                   │   │   │   ├── AuthenticationTrustResolverInterface.php
│   │                   │   │   │   ├── Provider
│   │                   │   │   │   │   ├── AnonymousAuthenticationProvider.php
│   │                   │   │   │   │   ├── AuthenticationProviderInterface.php
│   │                   │   │   │   │   ├── DaoAuthenticationProvider.php
│   │                   │   │   │   │   ├── LdapBindAuthenticationProvider.php
│   │                   │   │   │   │   ├── PreAuthenticatedAuthenticationProvider.php
│   │                   │   │   │   │   ├── RememberMeAuthenticationProvider.php
│   │                   │   │   │   │   ├── SimpleAuthenticationProvider.php
│   │                   │   │   │   │   └── UserAuthenticationProvider.php
│   │                   │   │   │   ├── RememberMe
│   │                   │   │   │   │   ├── InMemoryTokenProvider.php
│   │                   │   │   │   │   ├── PersistentToken.php
│   │                   │   │   │   │   ├── PersistentTokenInterface.php
│   │                   │   │   │   │   └── TokenProviderInterface.php
│   │                   │   │   │   ├── SimpleAuthenticatorInterface.php
│   │                   │   │   │   └── Token
│   │                   │   │   │       ├── AbstractToken.php
│   │                   │   │   │       ├── AnonymousToken.php
│   │                   │   │   │       ├── PreAuthenticatedToken.php
│   │                   │   │   │       ├── RememberMeToken.php
│   │                   │   │   │       ├── Storage
│   │                   │   │   │       │   ├── TokenStorage.php
│   │                   │   │   │       │   └── TokenStorageInterface.php
│   │                   │   │   │       ├── TokenInterface.php
│   │                   │   │   │       └── UsernamePasswordToken.php
│   │                   │   │   ├── AuthenticationEvents.php
│   │                   │   │   ├── Authorization
│   │                   │   │   │   ├── AccessDecisionManager.php
│   │                   │   │   │   ├── AccessDecisionManagerInterface.php
│   │                   │   │   │   ├── AuthorizationChecker.php
│   │                   │   │   │   ├── AuthorizationCheckerInterface.php
│   │                   │   │   │   ├── DebugAccessDecisionManager.php
│   │                   │   │   │   ├── ExpressionLanguage.php
│   │                   │   │   │   ├── ExpressionLanguageProvider.php
│   │                   │   │   │   └── Voter
│   │                   │   │   │       ├── AuthenticatedVoter.php
│   │                   │   │   │       ├── ExpressionVoter.php
│   │                   │   │   │       ├── RoleHierarchyVoter.php
│   │                   │   │   │       ├── RoleVoter.php
│   │                   │   │   │       ├── Voter.php
│   │                   │   │   │       └── VoterInterface.php
│   │                   │   │   ├── Encoder
│   │                   │   │   │   ├── BCryptPasswordEncoder.php
│   │                   │   │   │   ├── BasePasswordEncoder.php
│   │                   │   │   │   ├── EncoderAwareInterface.php
│   │                   │   │   │   ├── EncoderFactory.php
│   │                   │   │   │   ├── EncoderFactoryInterface.php
│   │                   │   │   │   ├── MessageDigestPasswordEncoder.php
│   │                   │   │   │   ├── PasswordEncoderInterface.php
│   │                   │   │   │   ├── Pbkdf2PasswordEncoder.php
│   │                   │   │   │   ├── PlaintextPasswordEncoder.php
│   │                   │   │   │   ├── UserPasswordEncoder.php
│   │                   │   │   │   └── UserPasswordEncoderInterface.php
│   │                   │   │   ├── Event
│   │                   │   │   │   ├── AuthenticationEvent.php
│   │                   │   │   │   └── AuthenticationFailureEvent.php
│   │                   │   │   ├── Exception
│   │                   │   │   │   ├── AccessDeniedException.php
│   │                   │   │   │   ├── AccountExpiredException.php
│   │                   │   │   │   ├── AccountStatusException.php
│   │                   │   │   │   ├── AuthenticationCredentialsNotFoundException.php
│   │                   │   │   │   ├── AuthenticationException.php
│   │                   │   │   │   ├── AuthenticationExpiredException.php
│   │                   │   │   │   ├── AuthenticationServiceException.php
│   │                   │   │   │   ├── BadCredentialsException.php
│   │                   │   │   │   ├── CookieTheftException.php
│   │                   │   │   │   ├── CredentialsExpiredException.php
│   │                   │   │   │   ├── CustomUserMessageAuthenticationException.php
│   │                   │   │   │   ├── DisabledException.php
│   │                   │   │   │   ├── ExceptionInterface.php
│   │                   │   │   │   ├── InsufficientAuthenticationException.php
│   │                   │   │   │   ├── InvalidArgumentException.php
│   │                   │   │   │   ├── InvalidCsrfTokenException.php
│   │                   │   │   │   ├── LockedException.php
│   │                   │   │   │   ├── LogoutException.php
│   │                   │   │   │   ├── NonceExpiredException.php
│   │                   │   │   │   ├── ProviderNotFoundException.php
│   │                   │   │   │   ├── RuntimeException.php
│   │                   │   │   │   ├── SessionUnavailableException.php
│   │                   │   │   │   ├── TokenNotFoundException.php
│   │                   │   │   │   ├── UnsupportedUserException.php
│   │                   │   │   │   └── UsernameNotFoundException.php
│   │                   │   │   ├── LICENSE
│   │                   │   │   ├── README.md
│   │                   │   │   ├── Resources
│   │                   │   │   │   └── translations
│   │                   │   │   │       ├── security.ar.xlf
│   │                   │   │   │       ├── security.az.xlf
│   │                   │   │   │       ├── security.bg.xlf
│   │                   │   │   │       ├── security.ca.xlf
│   │                   │   │   │       ├── security.cs.xlf
│   │                   │   │   │       ├── security.da.xlf
│   │                   │   │   │       ├── security.de.xlf
│   │                   │   │   │       ├── security.el.xlf
│   │                   │   │   │       ├── security.en.xlf
│   │                   │   │   │       ├── security.es.xlf
│   │                   │   │   │       ├── security.fa.xlf
│   │                   │   │   │       ├── security.fr.xlf
│   │                   │   │   │       ├── security.gl.xlf
│   │                   │   │   │       ├── security.he.xlf
│   │                   │   │   │       ├── security.hr.xlf
│   │                   │   │   │       ├── security.hu.xlf
│   │                   │   │   │       ├── security.id.xlf
│   │                   │   │   │       ├── security.it.xlf
│   │                   │   │   │       ├── security.ja.xlf
│   │                   │   │   │       ├── security.lb.xlf
│   │                   │   │   │       ├── security.lt.xlf
│   │                   │   │   │       ├── security.lv.xlf
│   │                   │   │   │       ├── security.nl.xlf
│   │                   │   │   │       ├── security.no.xlf
│   │                   │   │   │       ├── security.pl.xlf
│   │                   │   │   │       ├── security.pt_BR.xlf
│   │                   │   │   │       ├── security.pt_PT.xlf
│   │                   │   │   │       ├── security.ro.xlf
│   │                   │   │   │       ├── security.ru.xlf
│   │                   │   │   │       ├── security.sk.xlf
│   │                   │   │   │       ├── security.sl.xlf
│   │                   │   │   │       ├── security.sr_Cyrl.xlf
│   │                   │   │   │       ├── security.sr_Latn.xlf
│   │                   │   │   │       ├── security.sv.xlf
│   │                   │   │   │       ├── security.th.xlf
│   │                   │   │   │       ├── security.tr.xlf
│   │                   │   │   │       ├── security.ua.xlf
│   │                   │   │   │       ├── security.vi.xlf
│   │                   │   │   │       └── security.zh_CN.xlf
│   │                   │   │   ├── Role
│   │                   │   │   │   ├── Role.php
│   │                   │   │   │   ├── RoleHierarchy.php
│   │                   │   │   │   ├── RoleHierarchyInterface.php
│   │                   │   │   │   ├── RoleInterface.php
│   │                   │   │   │   └── SwitchUserRole.php
│   │                   │   │   ├── Security.php
│   │                   │   │   ├── Tests
│   │                   │   │   │   ├── Authentication
│   │                   │   │   │   │   ├── AuthenticationProviderManagerTest.php
│   │                   │   │   │   │   ├── AuthenticationTrustResolverTest.php
│   │                   │   │   │   │   ├── Provider
│   │                   │   │   │   │   │   ├── AnonymousAuthenticationProviderTest.php
│   │                   │   │   │   │   │   ├── DaoAuthenticationProviderTest.php
│   │                   │   │   │   │   │   ├── LdapBindAuthenticationProviderTest.php
│   │                   │   │   │   │   │   ├── PreAuthenticatedAuthenticationProviderTest.php
│   │                   │   │   │   │   │   ├── RememberMeAuthenticationProviderTest.php
│   │                   │   │   │   │   │   └── UserAuthenticationProviderTest.php
│   │                   │   │   │   │   ├── RememberMe
│   │                   │   │   │   │   │   ├── InMemoryTokenProviderTest.php
│   │                   │   │   │   │   │   └── PersistentTokenTest.php
│   │                   │   │   │   │   └── Token
│   │                   │   │   │   │       ├── AbstractTokenTest.php
│   │                   │   │   │   │       ├── AnonymousTokenTest.php
│   │                   │   │   │   │       ├── PreAuthenticatedTokenTest.php
│   │                   │   │   │   │       ├── RememberMeTokenTest.php
│   │                   │   │   │   │       ├── Storage
│   │                   │   │   │   │       │   └── TokenStorageTest.php
│   │                   │   │   │   │       └── UsernamePasswordTokenTest.php
│   │                   │   │   │   ├── Authorization
│   │                   │   │   │   │   ├── AccessDecisionManagerTest.php
│   │                   │   │   │   │   ├── AuthorizationCheckerTest.php
│   │                   │   │   │   │   ├── DebugAccessDecisionManagerTest.php
│   │                   │   │   │   │   ├── ExpressionLanguageTest.php
│   │                   │   │   │   │   └── Voter
│   │                   │   │   │   │       ├── AuthenticatedVoterTest.php
│   │                   │   │   │   │       ├── ExpressionVoterTest.php
│   │                   │   │   │   │       ├── RoleHierarchyVoterTest.php
│   │                   │   │   │   │       ├── RoleVoterTest.php
│   │                   │   │   │   │       └── VoterTest.php
│   │                   │   │   │   ├── Encoder
│   │                   │   │   │   │   ├── BCryptPasswordEncoderTest.php
│   │                   │   │   │   │   ├── BasePasswordEncoderTest.php
│   │                   │   │   │   │   ├── EncoderFactoryTest.php
│   │                   │   │   │   │   ├── MessageDigestPasswordEncoderTest.php
│   │                   │   │   │   │   ├── Pbkdf2PasswordEncoderTest.php
│   │                   │   │   │   │   ├── PlaintextPasswordEncoderTest.php
│   │                   │   │   │   │   └── UserPasswordEncoderTest.php
│   │                   │   │   │   ├── Exception
│   │                   │   │   │   │   ├── CustomUserMessageAuthenticationExceptionTest.php
│   │                   │   │   │   │   └── UsernameNotFoundExceptionTest.php
│   │                   │   │   │   ├── Resources
│   │                   │   │   │   │   └── TranslationFilesTest.php
│   │                   │   │   │   ├── Role
│   │                   │   │   │   │   ├── RoleHierarchyTest.php
│   │                   │   │   │   │   ├── RoleTest.php
│   │                   │   │   │   │   └── SwitchUserRoleTest.php
│   │                   │   │   │   ├── User
│   │                   │   │   │   │   ├── ChainUserProviderTest.php
│   │                   │   │   │   │   ├── InMemoryUserProviderTest.php
│   │                   │   │   │   │   ├── LdapUserProviderTest.php
│   │                   │   │   │   │   ├── UserCheckerTest.php
│   │                   │   │   │   │   └── UserTest.php
│   │                   │   │   │   └── Validator
│   │                   │   │   │       └── Constraints
│   │                   │   │   │           └── UserPasswordValidatorTest.php
│   │                   │   │   ├── User
│   │                   │   │   │   ├── AdvancedUserInterface.php
│   │                   │   │   │   ├── ChainUserProvider.php
│   │                   │   │   │   ├── EquatableInterface.php
│   │                   │   │   │   ├── InMemoryUserProvider.php
│   │                   │   │   │   ├── LdapUserProvider.php
│   │                   │   │   │   ├── User.php
│   │                   │   │   │   ├── UserChecker.php
│   │                   │   │   │   ├── UserCheckerInterface.php
│   │                   │   │   │   ├── UserInterface.php
│   │                   │   │   │   └── UserProviderInterface.php
│   │                   │   │   ├── Validator
│   │                   │   │   │   └── Constraints
│   │                   │   │   │       ├── UserPassword.php
│   │                   │   │   │       └── UserPasswordValidator.php
│   │                   │   │   ├── composer.json
│   │                   │   │   └── phpunit.xml.dist
│   │                   │   ├── Csrf
│   │                   │   │   ├── CsrfToken.php
│   │                   │   │   ├── CsrfTokenManager.php
│   │                   │   │   ├── CsrfTokenManagerInterface.php
│   │                   │   │   ├── Exception
│   │                   │   │   │   └── TokenNotFoundException.php
│   │                   │   │   ├── LICENSE
│   │                   │   │   ├── README.md
│   │                   │   │   ├── Tests
│   │                   │   │   │   ├── CsrfTokenManagerTest.php
│   │                   │   │   │   ├── TokenGenerator
│   │                   │   │   │   │   └── UriSafeTokenGeneratorTest.php
│   │                   │   │   │   └── TokenStorage
│   │                   │   │   │       ├── NativeSessionTokenStorageTest.php
│   │                   │   │   │       └── SessionTokenStorageTest.php
│   │                   │   │   ├── TokenGenerator
│   │                   │   │   │   ├── TokenGeneratorInterface.php
│   │                   │   │   │   └── UriSafeTokenGenerator.php
│   │                   │   │   ├── TokenStorage
│   │                   │   │   │   ├── NativeSessionTokenStorage.php
│   │                   │   │   │   ├── SessionTokenStorage.php
│   │                   │   │   │   └── TokenStorageInterface.php
│   │                   │   │   ├── composer.json
│   │                   │   │   └── phpunit.xml.dist
│   │                   │   ├── Guard
│   │                   │   │   ├── AbstractGuardAuthenticator.php
│   │                   │   │   ├── Authenticator
│   │                   │   │   │   └── AbstractFormLoginAuthenticator.php
│   │                   │   │   ├── Firewall
│   │                   │   │   │   └── GuardAuthenticationListener.php
│   │                   │   │   ├── GuardAuthenticatorHandler.php
│   │                   │   │   ├── GuardAuthenticatorInterface.php
│   │                   │   │   ├── LICENSE
│   │                   │   │   ├── Provider
│   │                   │   │   │   └── GuardAuthenticationProvider.php
│   │                   │   │   ├── README.md
│   │                   │   │   ├── Tests
│   │                   │   │   │   ├── Authenticator
│   │                   │   │   │   │   └── FormLoginAuthenticatorTest.php
│   │                   │   │   │   ├── Firewall
│   │                   │   │   │   │   └── GuardAuthenticationListenerTest.php
│   │                   │   │   │   ├── GuardAuthenticatorHandlerTest.php
│   │                   │   │   │   └── Provider
│   │                   │   │   │       └── GuardAuthenticationProviderTest.php
│   │                   │   │   ├── Token
│   │                   │   │   │   ├── GuardTokenInterface.php
│   │                   │   │   │   ├── PostAuthenticationGuardToken.php
│   │                   │   │   │   └── PreAuthenticationGuardToken.php
│   │                   │   │   ├── composer.json
│   │                   │   │   └── phpunit.xml.dist
│   │                   │   ├── Http
│   │                   │   │   ├── AccessMap.php
│   │                   │   │   ├── AccessMapInterface.php
│   │                   │   │   ├── Authentication
│   │                   │   │   │   ├── AuthenticationFailureHandlerInterface.php
│   │                   │   │   │   ├── AuthenticationSuccessHandlerInterface.php
│   │                   │   │   │   ├── AuthenticationUtils.php
│   │                   │   │   │   ├── CustomAuthenticationFailureHandler.php
│   │                   │   │   │   ├── CustomAuthenticationSuccessHandler.php
│   │                   │   │   │   ├── DefaultAuthenticationFailureHandler.php
│   │                   │   │   │   ├── DefaultAuthenticationSuccessHandler.php
│   │                   │   │   │   ├── SimpleAuthenticationHandler.php
│   │                   │   │   │   ├── SimpleFormAuthenticatorInterface.php
│   │                   │   │   │   └── SimplePreAuthenticatorInterface.php
│   │                   │   │   ├── Authorization
│   │                   │   │   │   └── AccessDeniedHandlerInterface.php
│   │                   │   │   ├── EntryPoint
│   │                   │   │   │   ├── AuthenticationEntryPointInterface.php
│   │                   │   │   │   ├── BasicAuthenticationEntryPoint.php
│   │                   │   │   │   ├── DigestAuthenticationEntryPoint.php
│   │                   │   │   │   ├── FormAuthenticationEntryPoint.php
│   │                   │   │   │   └── RetryAuthenticationEntryPoint.php
│   │                   │   │   ├── Event
│   │                   │   │   │   ├── InteractiveLoginEvent.php
│   │                   │   │   │   └── SwitchUserEvent.php
│   │                   │   │   ├── Firewall
│   │                   │   │   │   ├── AbstractAuthenticationListener.php
│   │                   │   │   │   ├── AbstractPreAuthenticatedListener.php
│   │                   │   │   │   ├── AccessListener.php
│   │                   │   │   │   ├── AnonymousAuthenticationListener.php
│   │                   │   │   │   ├── BasicAuthenticationListener.php
│   │                   │   │   │   ├── ChannelListener.php
│   │                   │   │   │   ├── ContextListener.php
│   │                   │   │   │   ├── DigestAuthenticationListener.php
│   │                   │   │   │   ├── ExceptionListener.php
│   │                   │   │   │   ├── ListenerInterface.php
│   │                   │   │   │   ├── LogoutListener.php
│   │                   │   │   │   ├── RememberMeListener.php
│   │                   │   │   │   ├── RemoteUserAuthenticationListener.php
│   │                   │   │   │   ├── SimpleFormAuthenticationListener.php
│   │                   │   │   │   ├── SimplePreAuthenticationListener.php
│   │                   │   │   │   ├── SwitchUserListener.php
│   │                   │   │   │   ├── UsernamePasswordFormAuthenticationListener.php
│   │                   │   │   │   └── X509AuthenticationListener.php
│   │                   │   │   ├── Firewall.php
│   │                   │   │   ├── FirewallMap.php
│   │                   │   │   ├── FirewallMapInterface.php
│   │                   │   │   ├── HttpUtils.php
│   │                   │   │   ├── LICENSE
│   │                   │   │   ├── Logout
│   │                   │   │   │   ├── CookieClearingLogoutHandler.php
│   │                   │   │   │   ├── DefaultLogoutSuccessHandler.php
│   │                   │   │   │   ├── LogoutHandlerInterface.php
│   │                   │   │   │   ├── LogoutSuccessHandlerInterface.php
│   │                   │   │   │   ├── LogoutUrlGenerator.php
│   │                   │   │   │   └── SessionLogoutHandler.php
│   │                   │   │   ├── ParameterBagUtils.php
│   │                   │   │   ├── README.md
│   │                   │   │   ├── RememberMe
│   │                   │   │   │   ├── AbstractRememberMeServices.php
│   │                   │   │   │   ├── PersistentTokenBasedRememberMeServices.php
│   │                   │   │   │   ├── RememberMeServicesInterface.php
│   │                   │   │   │   ├── ResponseListener.php
│   │                   │   │   │   └── TokenBasedRememberMeServices.php
│   │                   │   │   ├── SecurityEvents.php
│   │                   │   │   ├── Session
│   │                   │   │   │   ├── SessionAuthenticationStrategy.php
│   │                   │   │   │   └── SessionAuthenticationStrategyInterface.php
│   │                   │   │   ├── Tests
│   │                   │   │   │   ├── AccessMapTest.php
│   │                   │   │   │   ├── Authentication
│   │                   │   │   │   │   ├── DefaultAuthenticationFailureHandlerTest.php
│   │                   │   │   │   │   ├── DefaultAuthenticationSuccessHandlerTest.php
│   │                   │   │   │   │   └── SimpleAuthenticationHandlerTest.php
│   │                   │   │   │   ├── EntryPoint
│   │                   │   │   │   │   ├── BasicAuthenticationEntryPointTest.php
│   │                   │   │   │   │   ├── DigestAuthenticationEntryPointTest.php
│   │                   │   │   │   │   ├── FormAuthenticationEntryPointTest.php
│   │                   │   │   │   │   └── RetryAuthenticationEntryPointTest.php
│   │                   │   │   │   ├── Firewall
│   │                   │   │   │   │   ├── AbstractPreAuthenticatedListenerTest.php
│   │                   │   │   │   │   ├── AccessListenerTest.php
│   │                   │   │   │   │   ├── AnonymousAuthenticationListenerTest.php
│   │                   │   │   │   │   ├── BasicAuthenticationListenerTest.php
│   │                   │   │   │   │   ├── ChannelListenerTest.php
│   │                   │   │   │   │   ├── ContextListenerTest.php
│   │                   │   │   │   │   ├── DigestAuthenticationListenerTest.php
│   │                   │   │   │   │   ├── DigestDataTest.php
│   │                   │   │   │   │   ├── ExceptionListenerTest.php
│   │                   │   │   │   │   ├── LogoutListenerTest.php
│   │                   │   │   │   │   ├── RememberMeListenerTest.php
│   │                   │   │   │   │   ├── RemoteUserAuthenticationListenerTest.php
│   │                   │   │   │   │   ├── SimplePreAuthenticationListenerTest.php
│   │                   │   │   │   │   ├── SwitchUserListenerTest.php
│   │                   │   │   │   │   └── X509AuthenticationListenerTest.php
│   │                   │   │   │   ├── FirewallMapTest.php
│   │                   │   │   │   ├── FirewallTest.php
│   │                   │   │   │   ├── HttpUtilsTest.php
│   │                   │   │   │   ├── Logout
│   │                   │   │   │   │   ├── CookieClearingLogoutHandlerTest.php
│   │                   │   │   │   │   ├── DefaultLogoutSuccessHandlerTest.php
│   │                   │   │   │   │   └── SessionLogoutHandlerTest.php
│   │                   │   │   │   ├── RememberMe
│   │                   │   │   │   │   ├── AbstractRememberMeServicesTest.php
│   │                   │   │   │   │   ├── PersistentTokenBasedRememberMeServicesTest.php
│   │                   │   │   │   │   ├── ResponseListenerTest.php
│   │                   │   │   │   │   └── TokenBasedRememberMeServicesTest.php
│   │                   │   │   │   ├── Session
│   │                   │   │   │   │   └── SessionAuthenticationStrategyTest.php
│   │                   │   │   │   └── Util
│   │                   │   │   │       └── TargetPathTraitTest.php
│   │                   │   │   ├── Util
│   │                   │   │   │   └── TargetPathTrait.php
│   │                   │   │   ├── composer.json
│   │                   │   │   └── phpunit.xml.dist
│   │                   │   ├── LICENSE
│   │                   │   ├── README.md
│   │                   │   ├── Resources
│   │                   │   │   └── translations
│   │                   │   │       └── security.lv.xlf
│   │                   │   ├── Tests
│   │                   │   │   └── Http
│   │                   │   │       └── Firewall
│   │                   │   │           └── UsernamePasswordFormAuthenticationListenerTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Serializer
│   │                   │   ├── Annotation
│   │                   │   │   ├── Groups.php
│   │                   │   │   └── MaxDepth.php
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Encoder
│   │                   │   │   ├── ChainDecoder.php
│   │                   │   │   ├── ChainEncoder.php
│   │                   │   │   ├── CsvEncoder.php
│   │                   │   │   ├── DecoderInterface.php
│   │                   │   │   ├── EncoderInterface.php
│   │                   │   │   ├── JsonDecode.php
│   │                   │   │   ├── JsonEncode.php
│   │                   │   │   ├── JsonEncoder.php
│   │                   │   │   ├── NormalizationAwareInterface.php
│   │                   │   │   ├── SerializerAwareEncoder.php
│   │                   │   │   ├── XmlEncoder.php
│   │                   │   │   └── YamlEncoder.php
│   │                   │   ├── Exception
│   │                   │   │   ├── BadMethodCallException.php
│   │                   │   │   ├── CircularReferenceException.php
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── InvalidArgumentException.php
│   │                   │   │   ├── LogicException.php
│   │                   │   │   ├── MappingException.php
│   │                   │   │   ├── RuntimeException.php
│   │                   │   │   ├── UnexpectedValueException.php
│   │                   │   │   └── UnsupportedException.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Mapping
│   │                   │   │   ├── AttributeMetadata.php
│   │                   │   │   ├── AttributeMetadataInterface.php
│   │                   │   │   ├── ClassMetadata.php
│   │                   │   │   ├── ClassMetadataInterface.php
│   │                   │   │   ├── Factory
│   │                   │   │   │   ├── CacheClassMetadataFactory.php
│   │                   │   │   │   ├── ClassMetadataFactory.php
│   │                   │   │   │   ├── ClassMetadataFactoryInterface.php
│   │                   │   │   │   └── ClassResolverTrait.php
│   │                   │   │   └── Loader
│   │                   │   │       ├── AnnotationLoader.php
│   │                   │   │       ├── FileLoader.php
│   │                   │   │       ├── LoaderChain.php
│   │                   │   │       ├── LoaderInterface.php
│   │                   │   │       ├── XmlFileLoader.php
│   │                   │   │       ├── YamlFileLoader.php
│   │                   │   │       └── schema
│   │                   │   │           └── dic
│   │                   │   │               └── serializer-mapping
│   │                   │   │                   └── serializer-mapping-1.0.xsd
│   │                   │   ├── NameConverter
│   │                   │   │   ├── CamelCaseToSnakeCaseNameConverter.php
│   │                   │   │   └── NameConverterInterface.php
│   │                   │   ├── Normalizer
│   │                   │   │   ├── AbstractNormalizer.php
│   │                   │   │   ├── AbstractObjectNormalizer.php
│   │                   │   │   ├── ArrayDenormalizer.php
│   │                   │   │   ├── CustomNormalizer.php
│   │                   │   │   ├── DataUriNormalizer.php
│   │                   │   │   ├── DateTimeNormalizer.php
│   │                   │   │   ├── DenormalizableInterface.php
│   │                   │   │   ├── DenormalizerAwareInterface.php
│   │                   │   │   ├── DenormalizerAwareTrait.php
│   │                   │   │   ├── DenormalizerInterface.php
│   │                   │   │   ├── GetSetMethodNormalizer.php
│   │                   │   │   ├── JsonSerializableNormalizer.php
│   │                   │   │   ├── NormalizableInterface.php
│   │                   │   │   ├── NormalizerAwareInterface.php
│   │                   │   │   ├── NormalizerAwareTrait.php
│   │                   │   │   ├── NormalizerInterface.php
│   │                   │   │   ├── ObjectNormalizer.php
│   │                   │   │   ├── PropertyNormalizer.php
│   │                   │   │   └── SerializerAwareNormalizer.php
│   │                   │   ├── README.md
│   │                   │   ├── Serializer.php
│   │                   │   ├── SerializerAwareInterface.php
│   │                   │   ├── SerializerAwareTrait.php
│   │                   │   ├── SerializerInterface.php
│   │                   │   ├── Tests
│   │                   │   │   ├── Annotation
│   │                   │   │   │   ├── GroupsTest.php
│   │                   │   │   │   └── MaxDepthTest.php
│   │                   │   │   ├── Encoder
│   │                   │   │   │   ├── ChainDecoderTest.php
│   │                   │   │   │   ├── ChainEncoderTest.php
│   │                   │   │   │   ├── CsvEncoderTest.php
│   │                   │   │   │   ├── JsonDecodeTest.php
│   │                   │   │   │   ├── JsonEncodeTest.php
│   │                   │   │   │   ├── JsonEncoderTest.php
│   │                   │   │   │   ├── XmlEncoderTest.php
│   │                   │   │   │   └── YamlEncoderTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── AbstractNormalizerDummy.php
│   │                   │   │   │   ├── CircularReferenceDummy.php
│   │                   │   │   │   ├── DenormalizableDummy.php
│   │                   │   │   │   ├── Dummy.php
│   │                   │   │   │   ├── GroupDummy.php
│   │                   │   │   │   ├── GroupDummyInterface.php
│   │                   │   │   │   ├── GroupDummyParent.php
│   │                   │   │   │   ├── JsonSerializableDummy.php
│   │                   │   │   │   ├── MaxDepthDummy.php
│   │                   │   │   │   ├── NormalizableTraversableDummy.php
│   │                   │   │   │   ├── PropertyCircularReferenceDummy.php
│   │                   │   │   │   ├── PropertySiblingHolder.php
│   │                   │   │   │   ├── ProxyDummy.php
│   │                   │   │   │   ├── ScalarDummy.php
│   │                   │   │   │   ├── SiblingHolder.php
│   │                   │   │   │   ├── StaticConstructorDummy.php
│   │                   │   │   │   ├── StaticConstructorNormalizer.php
│   │                   │   │   │   ├── ToBeProxyfiedDummy.php
│   │                   │   │   │   ├── TraversableDummy.php
│   │                   │   │   │   ├── VariadicConstructorArgsDummy.php
│   │                   │   │   │   ├── empty-mapping.yml
│   │                   │   │   │   ├── invalid-mapping.yml
│   │                   │   │   │   ├── serialization.xml
│   │                   │   │   │   ├── serialization.yml
│   │                   │   │   │   ├── test.gif
│   │                   │   │   │   └── test.txt
│   │                   │   │   ├── Mapping
│   │                   │   │   │   ├── AttributeMetadataTest.php
│   │                   │   │   │   ├── ClassMetadataTest.php
│   │                   │   │   │   ├── Factory
│   │                   │   │   │   │   ├── CacheMetadataFactoryTest.php
│   │                   │   │   │   │   └── ClassMetadataFactoryTest.php
│   │                   │   │   │   ├── Loader
│   │                   │   │   │   │   ├── AnnotationLoaderTest.php
│   │                   │   │   │   │   ├── XmlFileLoaderTest.php
│   │                   │   │   │   │   └── YamlFileLoaderTest.php
│   │                   │   │   │   └── TestClassMetadataFactory.php
│   │                   │   │   ├── NameConverter
│   │                   │   │   │   └── CamelCaseToSnakeCaseNameConverterTest.php
│   │                   │   │   ├── Normalizer
│   │                   │   │   │   ├── AbstractNormalizerTest.php
│   │                   │   │   │   ├── AbstractObjectNormalizerTest.php
│   │                   │   │   │   ├── ArrayDenormalizerTest.php
│   │                   │   │   │   ├── CustomNormalizerTest.php
│   │                   │   │   │   ├── DataUriNormalizerTest.php
│   │                   │   │   │   ├── DateTimeNormalizerTest.php
│   │                   │   │   │   ├── GetSetMethodNormalizerTest.php
│   │                   │   │   │   ├── JsonSerializableNormalizerTest.php
│   │                   │   │   │   ├── ObjectNormalizerTest.php
│   │                   │   │   │   ├── PropertyNormalizerTest.php
│   │                   │   │   │   ├── TestDenormalizer.php
│   │                   │   │   │   └── TestNormalizer.php
│   │                   │   │   └── SerializerTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Stopwatch
│   │                   │   ├── LICENSE
│   │                   │   ├── README.md
│   │                   │   ├── Section.php
│   │                   │   ├── Stopwatch.php
│   │                   │   ├── StopwatchEvent.php
│   │                   │   ├── StopwatchPeriod.php
│   │                   │   ├── Tests
│   │                   │   │   ├── StopwatchEventTest.php
│   │                   │   │   └── StopwatchTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Templating
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── DelegatingEngine.php
│   │                   │   ├── EngineInterface.php
│   │                   │   ├── Helper
│   │                   │   │   ├── Helper.php
│   │                   │   │   ├── HelperInterface.php
│   │                   │   │   └── SlotsHelper.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Loader
│   │                   │   │   ├── CacheLoader.php
│   │                   │   │   ├── ChainLoader.php
│   │                   │   │   ├── FilesystemLoader.php
│   │                   │   │   ├── Loader.php
│   │                   │   │   └── LoaderInterface.php
│   │                   │   ├── PhpEngine.php
│   │                   │   ├── README.md
│   │                   │   ├── Storage
│   │                   │   │   ├── FileStorage.php
│   │                   │   │   ├── Storage.php
│   │                   │   │   └── StringStorage.php
│   │                   │   ├── StreamingEngineInterface.php
│   │                   │   ├── TemplateNameParser.php
│   │                   │   ├── TemplateNameParserInterface.php
│   │                   │   ├── TemplateReference.php
│   │                   │   ├── TemplateReferenceInterface.php
│   │                   │   ├── Tests
│   │                   │   │   ├── DelegatingEngineTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── SimpleHelper.php
│   │                   │   │   │   └── templates
│   │                   │   │   │       └── foo.php
│   │                   │   │   ├── Helper
│   │                   │   │   │   ├── HelperTest.php
│   │                   │   │   │   └── SlotsHelperTest.php
│   │                   │   │   ├── Loader
│   │                   │   │   │   ├── CacheLoaderTest.php
│   │                   │   │   │   ├── ChainLoaderTest.php
│   │                   │   │   │   ├── FilesystemLoaderTest.php
│   │                   │   │   │   └── LoaderTest.php
│   │                   │   │   ├── PhpEngineTest.php
│   │                   │   │   ├── Storage
│   │                   │   │   │   ├── FileStorageTest.php
│   │                   │   │   │   ├── StorageTest.php
│   │                   │   │   │   └── StringStorageTest.php
│   │                   │   │   └── TemplateNameParserTest.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Translation
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Catalogue
│   │                   │   │   ├── AbstractOperation.php
│   │                   │   │   ├── MergeOperation.php
│   │                   │   │   ├── OperationInterface.php
│   │                   │   │   └── TargetOperation.php
│   │                   │   ├── DataCollector
│   │                   │   │   └── TranslationDataCollector.php
│   │                   │   ├── DataCollectorTranslator.php
│   │                   │   ├── Dumper
│   │                   │   │   ├── CsvFileDumper.php
│   │                   │   │   ├── DumperInterface.php
│   │                   │   │   ├── FileDumper.php
│   │                   │   │   ├── IcuResFileDumper.php
│   │                   │   │   ├── IniFileDumper.php
│   │                   │   │   ├── JsonFileDumper.php
│   │                   │   │   ├── MoFileDumper.php
│   │                   │   │   ├── PhpFileDumper.php
│   │                   │   │   ├── PoFileDumper.php
│   │                   │   │   ├── QtFileDumper.php
│   │                   │   │   ├── XliffFileDumper.php
│   │                   │   │   └── YamlFileDumper.php
│   │                   │   ├── Exception
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── InvalidArgumentException.php
│   │                   │   │   ├── InvalidResourceException.php
│   │                   │   │   ├── LogicException.php
│   │                   │   │   ├── NotFoundResourceException.php
│   │                   │   │   └── RuntimeException.php
│   │                   │   ├── Extractor
│   │                   │   │   ├── AbstractFileExtractor.php
│   │                   │   │   ├── ChainExtractor.php
│   │                   │   │   └── ExtractorInterface.php
│   │                   │   ├── IdentityTranslator.php
│   │                   │   ├── Interval.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Loader
│   │                   │   │   ├── ArrayLoader.php
│   │                   │   │   ├── CsvFileLoader.php
│   │                   │   │   ├── FileLoader.php
│   │                   │   │   ├── IcuDatFileLoader.php
│   │                   │   │   ├── IcuResFileLoader.php
│   │                   │   │   ├── IniFileLoader.php
│   │                   │   │   ├── JsonFileLoader.php
│   │                   │   │   ├── LoaderInterface.php
│   │                   │   │   ├── MoFileLoader.php
│   │                   │   │   ├── PhpFileLoader.php
│   │                   │   │   ├── PoFileLoader.php
│   │                   │   │   ├── QtFileLoader.php
│   │                   │   │   ├── XliffFileLoader.php
│   │                   │   │   ├── YamlFileLoader.php
│   │                   │   │   └── schema
│   │                   │   │       └── dic
│   │                   │   │           └── xliff-core
│   │                   │   │               ├── xliff-core-1.2-strict.xsd
│   │                   │   │               ├── xliff-core-2.0.xsd
│   │                   │   │               └── xml.xsd
│   │                   │   ├── LoggingTranslator.php
│   │                   │   ├── MessageCatalogue.php
│   │                   │   ├── MessageCatalogueInterface.php
│   │                   │   ├── MessageSelector.php
│   │                   │   ├── MetadataAwareInterface.php
│   │                   │   ├── PluralizationRules.php
│   │                   │   ├── README.md
│   │                   │   ├── Tests
│   │                   │   │   ├── Catalogue
│   │                   │   │   │   ├── AbstractOperationTest.php
│   │                   │   │   │   ├── MergeOperationTest.php
│   │                   │   │   │   └── TargetOperationTest.php
│   │                   │   │   ├── DataCollector
│   │                   │   │   │   └── TranslationDataCollectorTest.php
│   │                   │   │   ├── DataCollectorTranslatorTest.php
│   │                   │   │   ├── Dumper
│   │                   │   │   │   ├── CsvFileDumperTest.php
│   │                   │   │   │   ├── FileDumperTest.php
│   │                   │   │   │   ├── IcuResFileDumperTest.php
│   │                   │   │   │   ├── IniFileDumperTest.php
│   │                   │   │   │   ├── JsonFileDumperTest.php
│   │                   │   │   │   ├── MoFileDumperTest.php
│   │                   │   │   │   ├── PhpFileDumperTest.php
│   │                   │   │   │   ├── PoFileDumperTest.php
│   │                   │   │   │   ├── QtFileDumperTest.php
│   │                   │   │   │   ├── XliffFileDumperTest.php
│   │                   │   │   │   └── YamlFileDumperTest.php
│   │                   │   │   ├── IdentityTranslatorTest.php
│   │                   │   │   ├── IntervalTest.php
│   │                   │   │   ├── Loader
│   │                   │   │   │   ├── CsvFileLoaderTest.php
│   │                   │   │   │   ├── IcuDatFileLoaderTest.php
│   │                   │   │   │   ├── IcuResFileLoaderTest.php
│   │                   │   │   │   ├── IniFileLoaderTest.php
│   │                   │   │   │   ├── JsonFileLoaderTest.php
│   │                   │   │   │   ├── LocalizedTestCase.php
│   │                   │   │   │   ├── MoFileLoaderTest.php
│   │                   │   │   │   ├── PhpFileLoaderTest.php
│   │                   │   │   │   ├── PoFileLoaderTest.php
│   │                   │   │   │   ├── QtFileLoaderTest.php
│   │                   │   │   │   ├── XliffFileLoaderTest.php
│   │                   │   │   │   └── YamlFileLoaderTest.php
│   │                   │   │   ├── LoggingTranslatorTest.php
│   │                   │   │   ├── MessageCatalogueTest.php
│   │                   │   │   ├── MessageSelectorTest.php
│   │                   │   │   ├── PluralizationRulesTest.php
│   │                   │   │   ├── TranslatorCacheTest.php
│   │                   │   │   ├── TranslatorTest.php
│   │                   │   │   ├── Util
│   │                   │   │   │   └── ArrayConverterTest.php
│   │                   │   │   ├── Writer
│   │                   │   │   │   └── TranslationWriterTest.php
│   │                   │   │   └── fixtures
│   │                   │   │       ├── empty-translation.mo
│   │                   │   │       ├── empty-translation.po
│   │                   │   │       ├── empty.csv
│   │                   │   │       ├── empty.ini
│   │                   │   │       ├── empty.json
│   │                   │   │       ├── empty.mo
│   │                   │   │       ├── empty.po
│   │                   │   │       ├── empty.xlf
│   │                   │   │       ├── empty.yml
│   │                   │   │       ├── encoding.xlf
│   │                   │   │       ├── escaped-id-plurals.po
│   │                   │   │       ├── escaped-id.po
│   │                   │   │       ├── fuzzy-translations.po
│   │                   │   │       ├── invalid-xml-resources.xlf
│   │                   │   │       ├── malformed.json
│   │                   │   │       ├── messages.yml
│   │                   │   │       ├── messages_linear.yml
│   │                   │   │       ├── non-valid.xlf
│   │                   │   │       ├── non-valid.yml
│   │                   │   │       ├── plurals.mo
│   │                   │   │       ├── plurals.po
│   │                   │   │       ├── resname.xlf
│   │                   │   │       ├── resourcebundle
│   │                   │   │       │   ├── corrupted
│   │                   │   │       │   │   └── resources.dat
│   │                   │   │       │   ├── dat
│   │                   │   │       │   │   ├── en.res
│   │                   │   │       │   │   ├── en.txt
│   │                   │   │       │   │   ├── fr.res
│   │                   │   │       │   │   ├── fr.txt
│   │                   │   │       │   │   ├── packagelist.txt
│   │                   │   │       │   │   └── resources.dat
│   │                   │   │       │   └── res
│   │                   │   │       │       └── en.res
│   │                   │   │       ├── resources-2.0-clean.xlf
│   │                   │   │       ├── resources-2.0.xlf
│   │                   │   │       ├── resources-clean.xlf
│   │                   │   │       ├── resources-target-attributes.xlf
│   │                   │   │       ├── resources-tool-info.xlf
│   │                   │   │       ├── resources.csv
│   │                   │   │       ├── resources.dump.json
│   │                   │   │       ├── resources.ini
│   │                   │   │       ├── resources.json
│   │                   │   │       ├── resources.mo
│   │                   │   │       ├── resources.php
│   │                   │   │       ├── resources.po
│   │                   │   │       ├── resources.ts
│   │                   │   │       ├── resources.xlf
│   │                   │   │       ├── resources.yml
│   │                   │   │       ├── valid.csv
│   │                   │   │       ├── with-attributes.xlf
│   │                   │   │       ├── withdoctype.xlf
│   │                   │   │       └── withnote.xlf
│   │                   │   ├── Translator.php
│   │                   │   ├── TranslatorBagInterface.php
│   │                   │   ├── TranslatorInterface.php
│   │                   │   ├── Util
│   │                   │   │   └── ArrayConverter.php
│   │                   │   ├── Writer
│   │                   │   │   └── TranslationWriter.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Validator
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Constraint.php
│   │                   │   ├── ConstraintValidator.php
│   │                   │   ├── ConstraintValidatorFactory.php
│   │                   │   ├── ConstraintValidatorFactoryInterface.php
│   │                   │   ├── ConstraintValidatorInterface.php
│   │                   │   ├── ConstraintViolation.php
│   │                   │   ├── ConstraintViolationInterface.php
│   │                   │   ├── ConstraintViolationList.php
│   │                   │   ├── ConstraintViolationListInterface.php
│   │                   │   ├── Constraints
│   │                   │   │   ├── AbstractComparison.php
│   │                   │   │   ├── AbstractComparisonValidator.php
│   │                   │   │   ├── All.php
│   │                   │   │   ├── AllValidator.php
│   │                   │   │   ├── Bic.php
│   │                   │   │   ├── BicValidator.php
│   │                   │   │   ├── Blank.php
│   │                   │   │   ├── BlankValidator.php
│   │                   │   │   ├── Callback.php
│   │                   │   │   ├── CallbackValidator.php
│   │                   │   │   ├── CardScheme.php
│   │                   │   │   ├── CardSchemeValidator.php
│   │                   │   │   ├── Choice.php
│   │                   │   │   ├── ChoiceValidator.php
│   │                   │   │   ├── Collection.php
│   │                   │   │   ├── CollectionValidator.php
│   │                   │   │   ├── Composite.php
│   │                   │   │   ├── Count.php
│   │                   │   │   ├── CountValidator.php
│   │                   │   │   ├── Country.php
│   │                   │   │   ├── CountryValidator.php
│   │                   │   │   ├── Currency.php
│   │                   │   │   ├── CurrencyValidator.php
│   │                   │   │   ├── Date.php
│   │                   │   │   ├── DateTime.php
│   │                   │   │   ├── DateTimeValidator.php
│   │                   │   │   ├── DateValidator.php
│   │                   │   │   ├── Email.php
│   │                   │   │   ├── EmailValidator.php
│   │                   │   │   ├── EqualTo.php
│   │                   │   │   ├── EqualToValidator.php
│   │                   │   │   ├── Existence.php
│   │                   │   │   ├── Expression.php
│   │                   │   │   ├── ExpressionValidator.php
│   │                   │   │   ├── File.php
│   │                   │   │   ├── FileValidator.php
│   │                   │   │   ├── GreaterThan.php
│   │                   │   │   ├── GreaterThanOrEqual.php
│   │                   │   │   ├── GreaterThanOrEqualValidator.php
│   │                   │   │   ├── GreaterThanValidator.php
│   │                   │   │   ├── GroupSequence.php
│   │                   │   │   ├── GroupSequenceProvider.php
│   │                   │   │   ├── Iban.php
│   │                   │   │   ├── IbanValidator.php
│   │                   │   │   ├── IdenticalTo.php
│   │                   │   │   ├── IdenticalToValidator.php
│   │                   │   │   ├── Image.php
│   │                   │   │   ├── ImageValidator.php
│   │                   │   │   ├── Ip.php
│   │                   │   │   ├── IpValidator.php
│   │                   │   │   ├── IsFalse.php
│   │                   │   │   ├── IsFalseValidator.php
│   │                   │   │   ├── IsNull.php
│   │                   │   │   ├── IsNullValidator.php
│   │                   │   │   ├── IsTrue.php
│   │                   │   │   ├── IsTrueValidator.php
│   │                   │   │   ├── Isbn.php
│   │                   │   │   ├── IsbnValidator.php
│   │                   │   │   ├── Issn.php
│   │                   │   │   ├── IssnValidator.php
│   │                   │   │   ├── Language.php
│   │                   │   │   ├── LanguageValidator.php
│   │                   │   │   ├── Length.php
│   │                   │   │   ├── LengthValidator.php
│   │                   │   │   ├── LessThan.php
│   │                   │   │   ├── LessThanOrEqual.php
│   │                   │   │   ├── LessThanOrEqualValidator.php
│   │                   │   │   ├── LessThanValidator.php
│   │                   │   │   ├── Locale.php
│   │                   │   │   ├── LocaleValidator.php
│   │                   │   │   ├── Luhn.php
│   │                   │   │   ├── LuhnValidator.php
│   │                   │   │   ├── NotBlank.php
│   │                   │   │   ├── NotBlankValidator.php
│   │                   │   │   ├── NotEqualTo.php
│   │                   │   │   ├── NotEqualToValidator.php
│   │                   │   │   ├── NotIdenticalTo.php
│   │                   │   │   ├── NotIdenticalToValidator.php
│   │                   │   │   ├── NotNull.php
│   │                   │   │   ├── NotNullValidator.php
│   │                   │   │   ├── Optional.php
│   │                   │   │   ├── Range.php
│   │                   │   │   ├── RangeValidator.php
│   │                   │   │   ├── Regex.php
│   │                   │   │   ├── RegexValidator.php
│   │                   │   │   ├── Required.php
│   │                   │   │   ├── Time.php
│   │                   │   │   ├── TimeValidator.php
│   │                   │   │   ├── Traverse.php
│   │                   │   │   ├── Type.php
│   │                   │   │   ├── TypeValidator.php
│   │                   │   │   ├── Url.php
│   │                   │   │   ├── UrlValidator.php
│   │                   │   │   ├── Uuid.php
│   │                   │   │   ├── UuidValidator.php
│   │                   │   │   └── Valid.php
│   │                   │   ├── Context
│   │                   │   │   ├── ExecutionContext.php
│   │                   │   │   ├── ExecutionContextFactory.php
│   │                   │   │   ├── ExecutionContextFactoryInterface.php
│   │                   │   │   └── ExecutionContextInterface.php
│   │                   │   ├── Exception
│   │                   │   │   ├── BadMethodCallException.php
│   │                   │   │   ├── ConstraintDefinitionException.php
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── GroupDefinitionException.php
│   │                   │   │   ├── InvalidArgumentException.php
│   │                   │   │   ├── InvalidOptionsException.php
│   │                   │   │   ├── MappingException.php
│   │                   │   │   ├── MissingOptionsException.php
│   │                   │   │   ├── NoSuchMetadataException.php
│   │                   │   │   ├── OutOfBoundsException.php
│   │                   │   │   ├── RuntimeException.php
│   │                   │   │   ├── UnexpectedTypeException.php
│   │                   │   │   ├── UnsupportedMetadataException.php
│   │                   │   │   └── ValidatorException.php
│   │                   │   ├── GroupSequenceProviderInterface.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Mapping
│   │                   │   │   ├── Cache
│   │                   │   │   │   ├── CacheInterface.php
│   │                   │   │   │   ├── DoctrineCache.php
│   │                   │   │   │   └── Psr6Cache.php
│   │                   │   │   ├── CascadingStrategy.php
│   │                   │   │   ├── ClassMetadata.php
│   │                   │   │   ├── ClassMetadataInterface.php
│   │                   │   │   ├── Factory
│   │                   │   │   │   ├── BlackHoleMetadataFactory.php
│   │                   │   │   │   ├── LazyLoadingMetadataFactory.php
│   │                   │   │   │   └── MetadataFactoryInterface.php
│   │                   │   │   ├── GenericMetadata.php
│   │                   │   │   ├── GetterMetadata.php
│   │                   │   │   ├── Loader
│   │                   │   │   │   ├── AbstractLoader.php
│   │                   │   │   │   ├── AnnotationLoader.php
│   │                   │   │   │   ├── FileLoader.php
│   │                   │   │   │   ├── FilesLoader.php
│   │                   │   │   │   ├── LoaderChain.php
│   │                   │   │   │   ├── LoaderInterface.php
│   │                   │   │   │   ├── StaticMethodLoader.php
│   │                   │   │   │   ├── XmlFileLoader.php
│   │                   │   │   │   ├── XmlFilesLoader.php
│   │                   │   │   │   ├── YamlFileLoader.php
│   │                   │   │   │   ├── YamlFilesLoader.php
│   │                   │   │   │   └── schema
│   │                   │   │   │       └── dic
│   │                   │   │   │           └── constraint-mapping
│   │                   │   │   │               └── constraint-mapping-1.0.xsd
│   │                   │   │   ├── MemberMetadata.php
│   │                   │   │   ├── MetadataInterface.php
│   │                   │   │   ├── PropertyMetadata.php
│   │                   │   │   ├── PropertyMetadataInterface.php
│   │                   │   │   └── TraversalStrategy.php
│   │                   │   ├── ObjectInitializerInterface.php
│   │                   │   ├── README.md
│   │                   │   ├── Resources
│   │                   │   │   └── translations
│   │                   │   │       ├── validators.af.xlf
│   │                   │   │       ├── validators.ar.xlf
│   │                   │   │       ├── validators.az.xlf
│   │                   │   │       ├── validators.bg.xlf
│   │                   │   │       ├── validators.ca.xlf
│   │                   │   │       ├── validators.cs.xlf
│   │                   │   │       ├── validators.cy.xlf
│   │                   │   │       ├── validators.da.xlf
│   │                   │   │       ├── validators.de.xlf
│   │                   │   │       ├── validators.el.xlf
│   │                   │   │       ├── validators.en.xlf
│   │                   │   │       ├── validators.es.xlf
│   │                   │   │       ├── validators.et.xlf
│   │                   │   │       ├── validators.eu.xlf
│   │                   │   │       ├── validators.fa.xlf
│   │                   │   │       ├── validators.fi.xlf
│   │                   │   │       ├── validators.fr.xlf
│   │                   │   │       ├── validators.gl.xlf
│   │                   │   │       ├── validators.he.xlf
│   │                   │   │       ├── validators.hr.xlf
│   │                   │   │       ├── validators.hu.xlf
│   │                   │   │       ├── validators.hy.xlf
│   │                   │   │       ├── validators.id.xlf
│   │                   │   │       ├── validators.it.xlf
│   │                   │   │       ├── validators.ja.xlf
│   │                   │   │       ├── validators.lb.xlf
│   │                   │   │       ├── validators.lt.xlf
│   │                   │   │       ├── validators.lv.xlf
│   │                   │   │       ├── validators.mn.xlf
│   │                   │   │       ├── validators.nl.xlf
│   │                   │   │       ├── validators.nn.xlf
│   │                   │   │       ├── validators.no.xlf
│   │                   │   │       ├── validators.pl.xlf
│   │                   │   │       ├── validators.pt.xlf
│   │                   │   │       ├── validators.pt_BR.xlf
│   │                   │   │       ├── validators.ro.xlf
│   │                   │   │       ├── validators.ru.xlf
│   │                   │   │       ├── validators.sk.xlf
│   │                   │   │       ├── validators.sl.xlf
│   │                   │   │       ├── validators.sq.xlf
│   │                   │   │       ├── validators.sr_Cyrl.xlf
│   │                   │   │       ├── validators.sr_Latn.xlf
│   │                   │   │       ├── validators.sv.xlf
│   │                   │   │       ├── validators.th.xlf
│   │                   │   │       ├── validators.tr.xlf
│   │                   │   │       ├── validators.uk.xlf
│   │                   │   │       ├── validators.vi.xlf
│   │                   │   │       ├── validators.zh_CN.xlf
│   │                   │   │       └── validators.zh_TW.xlf
│   │                   │   ├── Test
│   │                   │   │   └── ConstraintValidatorTestCase.php
│   │                   │   ├── Tests
│   │                   │   │   ├── ConstraintTest.php
│   │                   │   │   ├── ConstraintViolationListTest.php
│   │                   │   │   ├── ConstraintViolationTest.php
│   │                   │   │   ├── Constraints
│   │                   │   │   │   ├── AbstractComparisonValidatorTestCase.php
│   │                   │   │   │   ├── AbstractConstraintValidatorTest.php
│   │                   │   │   │   ├── AllTest.php
│   │                   │   │   │   ├── AllValidatorTest.php
│   │                   │   │   │   ├── BicValidatorTest.php
│   │                   │   │   │   ├── BlankValidatorTest.php
│   │                   │   │   │   ├── CallbackValidatorTest.php
│   │                   │   │   │   ├── CardSchemeValidatorTest.php
│   │                   │   │   │   ├── ChoiceValidatorTest.php
│   │                   │   │   │   ├── CollectionTest.php
│   │                   │   │   │   ├── CollectionValidatorArrayObjectTest.php
│   │                   │   │   │   ├── CollectionValidatorArrayTest.php
│   │                   │   │   │   ├── CollectionValidatorCustomArrayObjectTest.php
│   │                   │   │   │   ├── CollectionValidatorTest.php
│   │                   │   │   │   ├── CompositeTest.php
│   │                   │   │   │   ├── CountValidatorArrayTest.php
│   │                   │   │   │   ├── CountValidatorCountableTest.php
│   │                   │   │   │   ├── CountValidatorTest.php
│   │                   │   │   │   ├── CountryValidatorTest.php
│   │                   │   │   │   ├── CurrencyValidatorTest.php
│   │                   │   │   │   ├── DateTimeValidatorTest.php
│   │                   │   │   │   ├── DateValidatorTest.php
│   │                   │   │   │   ├── EmailValidatorTest.php
│   │                   │   │   │   ├── EqualToValidatorTest.php
│   │                   │   │   │   ├── ExpressionValidatorTest.php
│   │                   │   │   │   ├── FileTest.php
│   │                   │   │   │   ├── FileValidatorObjectTest.php
│   │                   │   │   │   ├── FileValidatorPathTest.php
│   │                   │   │   │   ├── FileValidatorTest.php
│   │                   │   │   │   ├── Fixtures
│   │                   │   │   │   │   ├── ChildA.php
│   │                   │   │   │   │   ├── ChildB.php
│   │                   │   │   │   │   ├── foo
│   │                   │   │   │   │   ├── test.gif
│   │                   │   │   │   │   ├── test_4by3.gif
│   │                   │   │   │   │   ├── test_corrupted.gif
│   │                   │   │   │   │   ├── test_landscape.gif
│   │                   │   │   │   │   └── test_portrait.gif
│   │                   │   │   │   ├── GreaterThanOrEqualValidatorTest.php
│   │                   │   │   │   ├── GreaterThanValidatorTest.php
│   │                   │   │   │   ├── GroupSequenceTest.php
│   │                   │   │   │   ├── IbanValidatorTest.php
│   │                   │   │   │   ├── IdenticalToValidatorTest.php
│   │                   │   │   │   ├── ImageValidatorTest.php
│   │                   │   │   │   ├── IpValidatorTest.php
│   │                   │   │   │   ├── IsFalseValidatorTest.php
│   │                   │   │   │   ├── IsNullValidatorTest.php
│   │                   │   │   │   ├── IsTrueValidatorTest.php
│   │                   │   │   │   ├── IsbnValidatorTest.php
│   │                   │   │   │   ├── IssnValidatorTest.php
│   │                   │   │   │   ├── LanguageValidatorTest.php
│   │                   │   │   │   ├── LengthValidatorTest.php
│   │                   │   │   │   ├── LessThanOrEqualValidatorTest.php
│   │                   │   │   │   ├── LessThanValidatorTest.php
│   │                   │   │   │   ├── LocaleValidatorTest.php
│   │                   │   │   │   ├── LuhnValidatorTest.php
│   │                   │   │   │   ├── NotBlankValidatorTest.php
│   │                   │   │   │   ├── NotEqualToValidatorTest.php
│   │                   │   │   │   ├── NotIdenticalToValidatorTest.php
│   │                   │   │   │   ├── NotNullValidatorTest.php
│   │                   │   │   │   ├── RangeValidatorTest.php
│   │                   │   │   │   ├── RegexTest.php
│   │                   │   │   │   ├── RegexValidatorTest.php
│   │                   │   │   │   ├── TimeValidatorTest.php
│   │                   │   │   │   ├── TypeValidatorTest.php
│   │                   │   │   │   ├── UrlValidatorTest.php
│   │                   │   │   │   ├── UuidValidatorTest.php
│   │                   │   │   │   └── ValidTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── CallbackClass.php
│   │                   │   │   │   ├── ClassConstraint.php
│   │                   │   │   │   ├── ConstraintA.php
│   │                   │   │   │   ├── ConstraintAValidator.php
│   │                   │   │   │   ├── ConstraintB.php
│   │                   │   │   │   ├── ConstraintC.php
│   │                   │   │   │   ├── ConstraintWithValue.php
│   │                   │   │   │   ├── ConstraintWithValueAsDefault.php
│   │                   │   │   │   ├── Countable.php
│   │                   │   │   │   ├── CustomArrayObject.php
│   │                   │   │   │   ├── Entity.php
│   │                   │   │   │   ├── EntityInterfaceA.php
│   │                   │   │   │   ├── EntityInterfaceB.php
│   │                   │   │   │   ├── EntityParent.php
│   │                   │   │   │   ├── EntityParentInterface.php
│   │                   │   │   │   ├── FailingConstraint.php
│   │                   │   │   │   ├── FailingConstraintValidator.php
│   │                   │   │   │   ├── FakeClassMetadata.php
│   │                   │   │   │   ├── FakeMetadataFactory.php
│   │                   │   │   │   ├── FilesLoader.php
│   │                   │   │   │   ├── GroupSequenceProviderEntity.php
│   │                   │   │   │   ├── InvalidConstraint.php
│   │                   │   │   │   ├── InvalidConstraintValidator.php
│   │                   │   │   │   ├── PropertyConstraint.php
│   │                   │   │   │   └── Reference.php
│   │                   │   │   ├── Mapping
│   │                   │   │   │   ├── Cache
│   │                   │   │   │   │   ├── AbstractCacheTest.php
│   │                   │   │   │   │   ├── DoctrineCacheTest.php
│   │                   │   │   │   │   └── Psr6CacheTest.php
│   │                   │   │   │   ├── ClassMetadataTest.php
│   │                   │   │   │   ├── Factory
│   │                   │   │   │   │   ├── BlackHoleMetadataFactoryTest.php
│   │                   │   │   │   │   └── LazyLoadingMetadataFactoryTest.php
│   │                   │   │   │   ├── GetterMetadataTest.php
│   │                   │   │   │   ├── Loader
│   │                   │   │   │   │   ├── AbstractStaticMethodLoader.php
│   │                   │   │   │   │   ├── AnnotationLoaderTest.php
│   │                   │   │   │   │   ├── FilesLoaderTest.php
│   │                   │   │   │   │   ├── LoaderChainTest.php
│   │                   │   │   │   │   ├── StaticMethodLoaderTest.php
│   │                   │   │   │   │   ├── XmlFileLoaderTest.php
│   │                   │   │   │   │   ├── YamlFileLoaderTest.php
│   │                   │   │   │   │   ├── bad-format.yml
│   │                   │   │   │   │   ├── constraint-mapping-non-strings.xml
│   │                   │   │   │   │   ├── constraint-mapping.xml
│   │                   │   │   │   │   ├── constraint-mapping.yml
│   │                   │   │   │   │   ├── empty-mapping.yml
│   │                   │   │   │   │   ├── nonvalid-mapping.yml
│   │                   │   │   │   │   └── withdoctype.xml
│   │                   │   │   │   ├── MemberMetadataTest.php
│   │                   │   │   │   └── PropertyMetadataTest.php
│   │                   │   │   ├── Resources
│   │                   │   │   │   └── TranslationFilesTest.php
│   │                   │   │   ├── Util
│   │                   │   │   │   └── PropertyPathTest.php
│   │                   │   │   ├── Validator
│   │                   │   │   │   ├── AbstractTest.php
│   │                   │   │   │   ├── AbstractValidatorTest.php
│   │                   │   │   │   └── RecursiveValidatorTest.php
│   │                   │   │   └── ValidatorBuilderTest.php
│   │                   │   ├── Util
│   │                   │   │   └── PropertyPath.php
│   │                   │   ├── Validation.php
│   │                   │   ├── Validator
│   │                   │   │   ├── ContextualValidatorInterface.php
│   │                   │   │   ├── RecursiveContextualValidator.php
│   │                   │   │   ├── RecursiveValidator.php
│   │                   │   │   └── ValidatorInterface.php
│   │                   │   ├── ValidatorBuilder.php
│   │                   │   ├── ValidatorBuilderInterface.php
│   │                   │   ├── Violation
│   │                   │   │   ├── ConstraintViolationBuilder.php
│   │                   │   │   └── ConstraintViolationBuilderInterface.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── VarDumper
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Caster
│   │                   │   │   ├── AmqpCaster.php
│   │                   │   │   ├── ArgsStub.php
│   │                   │   │   ├── Caster.php
│   │                   │   │   ├── ClassStub.php
│   │                   │   │   ├── ConstStub.php
│   │                   │   │   ├── CutArrayStub.php
│   │                   │   │   ├── CutStub.php
│   │                   │   │   ├── DOMCaster.php
│   │                   │   │   ├── DoctrineCaster.php
│   │                   │   │   ├── EnumStub.php
│   │                   │   │   ├── ExceptionCaster.php
│   │                   │   │   ├── FrameStub.php
│   │                   │   │   ├── LinkStub.php
│   │                   │   │   ├── MongoCaster.php
│   │                   │   │   ├── PdoCaster.php
│   │                   │   │   ├── PgSqlCaster.php
│   │                   │   │   ├── RedisCaster.php
│   │                   │   │   ├── ReflectionCaster.php
│   │                   │   │   ├── ResourceCaster.php
│   │                   │   │   ├── SplCaster.php
│   │                   │   │   ├── StubCaster.php
│   │                   │   │   ├── TraceStub.php
│   │                   │   │   ├── XmlReaderCaster.php
│   │                   │   │   └── XmlResourceCaster.php
│   │                   │   ├── Cloner
│   │                   │   │   ├── AbstractCloner.php
│   │                   │   │   ├── ClonerInterface.php
│   │                   │   │   ├── Cursor.php
│   │                   │   │   ├── Data.php
│   │                   │   │   ├── DumperInterface.php
│   │                   │   │   ├── Stub.php
│   │                   │   │   └── VarCloner.php
│   │                   │   ├── Dumper
│   │                   │   │   ├── AbstractDumper.php
│   │                   │   │   ├── CliDumper.php
│   │                   │   │   ├── DataDumperInterface.php
│   │                   │   │   └── HtmlDumper.php
│   │                   │   ├── Exception
│   │                   │   │   └── ThrowingCasterException.php
│   │                   │   ├── LICENSE
│   │                   │   ├── README.md
│   │                   │   ├── Resources
│   │                   │   │   └── functions
│   │                   │   │       └── dump.php
│   │                   │   ├── Test
│   │                   │   │   └── VarDumperTestTrait.php
│   │                   │   ├── Tests
│   │                   │   │   ├── Caster
│   │                   │   │   │   ├── CasterTest.php
│   │                   │   │   │   ├── ExceptionCasterTest.php
│   │                   │   │   │   ├── PdoCasterTest.php
│   │                   │   │   │   ├── RedisCasterTest.php
│   │                   │   │   │   ├── ReflectionCasterTest.php
│   │                   │   │   │   ├── SplCasterTest.php
│   │                   │   │   │   ├── StubCasterTest.php
│   │                   │   │   │   └── XmlReaderCasterTest.php
│   │                   │   │   ├── CliDumperTest.php
│   │                   │   │   ├── Fixtures
│   │                   │   │   │   ├── FooInterface.php
│   │                   │   │   │   ├── GeneratorDemo.php
│   │                   │   │   │   ├── NotLoadableClass.php
│   │                   │   │   │   ├── Twig.php
│   │                   │   │   │   ├── dumb-var.php
│   │                   │   │   │   └── xml_reader.xml
│   │                   │   │   ├── HtmlDumperTest.php
│   │                   │   │   ├── Test
│   │                   │   │   │   └── VarDumperTestTraitTest.php
│   │                   │   │   └── VarClonerTest.php
│   │                   │   ├── VarDumper.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   ├── Workflow
│   │                   │   ├── CHANGELOG.md
│   │                   │   ├── Definition.php
│   │                   │   ├── DefinitionBuilder.php
│   │                   │   ├── Dumper
│   │                   │   │   ├── DumperInterface.php
│   │                   │   │   ├── GraphvizDumper.php
│   │                   │   │   └── StateMachineGraphvizDumper.php
│   │                   │   ├── Event
│   │                   │   │   ├── Event.php
│   │                   │   │   ├── GuardEvent.php
│   │                   │   │   └── TransitionEvent.php
│   │                   │   ├── EventListener
│   │                   │   │   └── AuditTrailListener.php
│   │                   │   ├── Exception
│   │                   │   │   ├── ExceptionInterface.php
│   │                   │   │   ├── InvalidArgumentException.php
│   │                   │   │   ├── InvalidDefinitionException.php
│   │                   │   │   └── LogicException.php
│   │                   │   ├── LICENSE
│   │                   │   ├── Marking.php
│   │                   │   ├── MarkingStore
│   │                   │   │   ├── MarkingStoreInterface.php
│   │                   │   │   ├── MultipleStateMarkingStore.php
│   │                   │   │   └── SingleStateMarkingStore.php
│   │                   │   ├── README.md
│   │                   │   ├── Registry.php
│   │                   │   ├── StateMachine.php
│   │                   │   ├── Tests
│   │                   │   │   ├── DefinitionBuilderTest.php
│   │                   │   │   ├── DefinitionTest.php
│   │                   │   │   ├── Dumper
│   │                   │   │   │   ├── GraphvizDumperTest.php
│   │                   │   │   │   └── StateMachineGraphvizDumperTest.php
│   │                   │   │   ├── EventListener
│   │                   │   │   │   └── AuditTrailListenerTest.php
│   │                   │   │   ├── MarkingStore
│   │                   │   │   │   ├── MultipleStateMarkingStoreTest.php
│   │                   │   │   │   └── SingleStateMarkingStoreTest.php
│   │                   │   │   ├── MarkingTest.php
│   │                   │   │   ├── RegistryTest.php
│   │                   │   │   ├── StateMachineTest.php
│   │                   │   │   ├── TransitionTest.php
│   │                   │   │   ├── Validator
│   │                   │   │   │   ├── StateMachineValidatorTest.php
│   │                   │   │   │   └── WorkflowValidatorTest.php
│   │                   │   │   ├── WorkflowBuilderTrait.php
│   │                   │   │   └── WorkflowTest.php
│   │                   │   ├── Transition.php
│   │                   │   ├── Validator
│   │                   │   │   ├── DefinitionValidatorInterface.php
│   │                   │   │   ├── StateMachineValidator.php
│   │                   │   │   └── WorkflowValidator.php
│   │                   │   ├── Workflow.php
│   │                   │   ├── composer.json
│   │                   │   └── phpunit.xml.dist
│   │                   └── Yaml
│   │                       ├── CHANGELOG.md
│   │                       ├── Command
│   │                       │   └── LintCommand.php
│   │                       ├── Dumper.php
│   │                       ├── Escaper.php
│   │                       ├── Exception
│   │                       │   ├── DumpException.php
│   │                       │   ├── ExceptionInterface.php
│   │                       │   ├── ParseException.php
│   │                       │   └── RuntimeException.php
│   │                       ├── Inline.php
│   │                       ├── LICENSE
│   │                       ├── Parser.php
│   │                       ├── README.md
│   │                       ├── Tests
│   │                       │   ├── Command
│   │                       │   │   └── LintCommandTest.php
│   │                       │   ├── DumperTest.php
│   │                       │   ├── Fixtures
│   │                       │   │   ├── YtsAnchorAlias.yml
│   │                       │   │   ├── YtsBasicTests.yml
│   │                       │   │   ├── YtsBlockMapping.yml
│   │                       │   │   ├── YtsDocumentSeparator.yml
│   │                       │   │   ├── YtsErrorTests.yml
│   │                       │   │   ├── YtsFlowCollections.yml
│   │                       │   │   ├── YtsFoldedScalars.yml
│   │                       │   │   ├── YtsNullsAndEmpties.yml
│   │                       │   │   ├── YtsSpecificationExamples.yml
│   │                       │   │   ├── YtsTypeTransfers.yml
│   │                       │   │   ├── arrow.gif
│   │                       │   │   ├── embededPhp.yml
│   │                       │   │   ├── escapedCharacters.yml
│   │                       │   │   ├── index.yml
│   │                       │   │   ├── multiple_lines_as_literal_block.yml
│   │                       │   │   ├── sfComments.yml
│   │                       │   │   ├── sfCompact.yml
│   │                       │   │   ├── sfMergeKey.yml
│   │                       │   │   ├── sfObjects.yml
│   │                       │   │   ├── sfQuotes.yml
│   │                       │   │   ├── sfTests.yml
│   │                       │   │   └── unindentedCollections.yml
│   │                       │   ├── InlineTest.php
│   │                       │   ├── ParseExceptionTest.php
│   │                       │   ├── ParserTest.php
│   │                       │   └── YamlTest.php
│   │                       ├── Unescaper.php
│   │                       ├── Yaml.php
│   │                       ├── composer.json
│   │                       └── phpunit.xml.dist
│   ├── theseer
│   │   └── fdomdocument
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── build.xml
│   │       ├── composer.json
│   │       ├── fDOMDocument.spec
│   │       ├── package.xml
│   │       ├── pear.sh
│   │       ├── phpcs.xml
│   │       ├── phpunit.xml.dist
│   │       ├── src
│   │       │   ├── XPathQuery.php
│   │       │   ├── XPathQueryException.php
│   │       │   ├── autoload.php
│   │       │   ├── css
│   │       │   │   ├── DollarEqualRule.php
│   │       │   │   ├── NotRule.php
│   │       │   │   ├── NthChildRule.php
│   │       │   │   ├── RegexRule.php
│   │       │   │   ├── RuleInterface.php
│   │       │   │   └── Translator.php
│   │       │   ├── fDOMDocument.php
│   │       │   ├── fDOMDocumentFragment.php
│   │       │   ├── fDOMElement.php
│   │       │   ├── fDOMException.php
│   │       │   ├── fDOMNode.php
│   │       │   └── fDOMXPath.php
│   │       └── tests
│   │           ├── Translator.test.php
│   │           ├── XPathQuery.test.php
│   │           ├── _data
│   │           │   ├── broken.xml
│   │           │   ├── selector.xml
│   │           │   ├── undefentity.xml
│   │           │   └── valid.xml
│   │           ├── fDOMDocument.test.php
│   │           ├── fDOMDocumentFragment.test.php
│   │           ├── fDOMElement.test.php
│   │           └── fDOMXPath.test.php
│   ├── twig
│   │   └── twig
│   │       ├── CHANGELOG
│   │       ├── LICENSE
│   │       ├── README.rst
│   │       ├── composer.json
│   │       ├── doc
│   │       │   ├── advanced.rst
│   │       │   ├── api.rst
│   │       │   ├── coding_standards.rst
│   │       │   ├── deprecated.rst
│   │       │   ├── filters
│   │       │   │   ├── abs.rst
│   │       │   │   ├── batch.rst
│   │       │   │   ├── capitalize.rst
│   │       │   │   ├── convert_encoding.rst
│   │       │   │   ├── date.rst
│   │       │   │   ├── date_modify.rst
│   │       │   │   ├── default.rst
│   │       │   │   ├── escape.rst
│   │       │   │   ├── first.rst
│   │       │   │   ├── format.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── join.rst
│   │       │   │   ├── json_encode.rst
│   │       │   │   ├── keys.rst
│   │       │   │   ├── last.rst
│   │       │   │   ├── length.rst
│   │       │   │   ├── lower.rst
│   │       │   │   ├── merge.rst
│   │       │   │   ├── nl2br.rst
│   │       │   │   ├── number_format.rst
│   │       │   │   ├── raw.rst
│   │       │   │   ├── replace.rst
│   │       │   │   ├── reverse.rst
│   │       │   │   ├── round.rst
│   │       │   │   ├── slice.rst
│   │       │   │   ├── sort.rst
│   │       │   │   ├── split.rst
│   │       │   │   ├── striptags.rst
│   │       │   │   ├── title.rst
│   │       │   │   ├── trim.rst
│   │       │   │   ├── upper.rst
│   │       │   │   └── url_encode.rst
│   │       │   ├── functions
│   │       │   │   ├── attribute.rst
│   │       │   │   ├── block.rst
│   │       │   │   ├── constant.rst
│   │       │   │   ├── cycle.rst
│   │       │   │   ├── date.rst
│   │       │   │   ├── dump.rst
│   │       │   │   ├── include.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── max.rst
│   │       │   │   ├── min.rst
│   │       │   │   ├── parent.rst
│   │       │   │   ├── random.rst
│   │       │   │   ├── range.rst
│   │       │   │   ├── source.rst
│   │       │   │   └── template_from_string.rst
│   │       │   ├── index.rst
│   │       │   ├── installation.rst
│   │       │   ├── internals.rst
│   │       │   ├── intro.rst
│   │       │   ├── recipes.rst
│   │       │   ├── tags
│   │       │   │   ├── autoescape.rst
│   │       │   │   ├── block.rst
│   │       │   │   ├── do.rst
│   │       │   │   ├── embed.rst
│   │       │   │   ├── extends.rst
│   │       │   │   ├── filter.rst
│   │       │   │   ├── flush.rst
│   │       │   │   ├── for.rst
│   │       │   │   ├── from.rst
│   │       │   │   ├── if.rst
│   │       │   │   ├── import.rst
│   │       │   │   ├── include.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── macro.rst
│   │       │   │   ├── sandbox.rst
│   │       │   │   ├── set.rst
│   │       │   │   ├── spaceless.rst
│   │       │   │   ├── use.rst
│   │       │   │   ├── verbatim.rst
│   │       │   │   └── with.rst
│   │       │   ├── templates.rst
│   │       │   └── tests
│   │       │       ├── constant.rst
│   │       │       ├── defined.rst
│   │       │       ├── divisibleby.rst
│   │       │       ├── empty.rst
│   │       │       ├── even.rst
│   │       │       ├── index.rst
│   │       │       ├── iterable.rst
│   │       │       ├── null.rst
│   │       │       ├── odd.rst
│   │       │       └── sameas.rst
│   │       ├── lib
│   │       │   └── Twig
│   │       │       ├── BaseNodeVisitor.php
│   │       │       ├── Cache
│   │       │       │   ├── Filesystem.php
│   │       │       │   └── Null.php
│   │       │       ├── CacheInterface.php
│   │       │       ├── Compiler.php
│   │       │       ├── Environment.php
│   │       │       ├── Error
│   │       │       │   ├── Loader.php
│   │       │       │   ├── Runtime.php
│   │       │       │   └── Syntax.php
│   │       │       ├── Error.php
│   │       │       ├── ExistsLoaderInterface.php
│   │       │       ├── ExpressionParser.php
│   │       │       ├── Extension
│   │       │       │   ├── Core.php
│   │       │       │   ├── Debug.php
│   │       │       │   ├── Escaper.php
│   │       │       │   ├── GlobalsInterface.php
│   │       │       │   ├── InitRuntimeInterface.php
│   │       │       │   ├── Optimizer.php
│   │       │       │   ├── Profiler.php
│   │       │       │   ├── Sandbox.php
│   │       │       │   ├── Staging.php
│   │       │       │   └── StringLoader.php
│   │       │       ├── Extension.php
│   │       │       ├── ExtensionInterface.php
│   │       │       ├── ExtensionSet.php
│   │       │       ├── FactoryRuntimeLoader.php
│   │       │       ├── FileExtensionEscapingStrategy.php
│   │       │       ├── Filter.php
│   │       │       ├── Function.php
│   │       │       ├── Lexer.php
│   │       │       ├── Loader
│   │       │       │   ├── Array.php
│   │       │       │   ├── Chain.php
│   │       │       │   └── Filesystem.php
│   │       │       ├── LoaderInterface.php
│   │       │       ├── Markup.php
│   │       │       ├── Node
│   │       │       │   ├── AutoEscape.php
│   │       │       │   ├── Block.php
│   │       │       │   ├── BlockReference.php
│   │       │       │   ├── Body.php
│   │       │       │   ├── CheckSecurity.php
│   │       │       │   ├── Do.php
│   │       │       │   ├── Embed.php
│   │       │       │   ├── Expression
│   │       │       │   │   ├── Array.php
│   │       │       │   │   ├── AssignName.php
│   │       │       │   │   ├── Binary
│   │       │       │   │   │   ├── Add.php
│   │       │       │   │   │   ├── And.php
│   │       │       │   │   │   ├── BitwiseAnd.php
│   │       │       │   │   │   ├── BitwiseOr.php
│   │       │       │   │   │   ├── BitwiseXor.php
│   │       │       │   │   │   ├── Concat.php
│   │       │       │   │   │   ├── Div.php
│   │       │       │   │   │   ├── EndsWith.php
│   │       │       │   │   │   ├── Equal.php
│   │       │       │   │   │   ├── FloorDiv.php
│   │       │       │   │   │   ├── Greater.php
│   │       │       │   │   │   ├── GreaterEqual.php
│   │       │       │   │   │   ├── In.php
│   │       │       │   │   │   ├── Less.php
│   │       │       │   │   │   ├── LessEqual.php
│   │       │       │   │   │   ├── Matches.php
│   │       │       │   │   │   ├── Mod.php
│   │       │       │   │   │   ├── Mul.php
│   │       │       │   │   │   ├── NotEqual.php
│   │       │       │   │   │   ├── NotIn.php
│   │       │       │   │   │   ├── Or.php
│   │       │       │   │   │   ├── Power.php
│   │       │       │   │   │   ├── Range.php
│   │       │       │   │   │   ├── StartsWith.php
│   │       │       │   │   │   └── Sub.php
│   │       │       │   │   ├── Binary.php
│   │       │       │   │   ├── BlockReference.php
│   │       │       │   │   ├── Call.php
│   │       │       │   │   ├── Conditional.php
│   │       │       │   │   ├── Constant.php
│   │       │       │   │   ├── Filter
│   │       │       │   │   │   └── Default.php
│   │       │       │   │   ├── Filter.php
│   │       │       │   │   ├── Function.php
│   │       │       │   │   ├── GetAttr.php
│   │       │       │   │   ├── MethodCall.php
│   │       │       │   │   ├── Name.php
│   │       │       │   │   ├── NullCoalesce.php
│   │       │       │   │   ├── Parent.php
│   │       │       │   │   ├── TempName.php
│   │       │       │   │   ├── Test
│   │       │       │   │   │   ├── Constant.php
│   │       │       │   │   │   ├── Defined.php
│   │       │       │   │   │   ├── Divisibleby.php
│   │       │       │   │   │   ├── Even.php
│   │       │       │   │   │   ├── Null.php
│   │       │       │   │   │   ├── Odd.php
│   │       │       │   │   │   └── Sameas.php
│   │       │       │   │   ├── Test.php
│   │       │       │   │   ├── Unary
│   │       │       │   │   │   ├── Neg.php
│   │       │       │   │   │   ├── Not.php
│   │       │       │   │   │   └── Pos.php
│   │       │       │   │   └── Unary.php
│   │       │       │   ├── Expression.php
│   │       │       │   ├── Flush.php
│   │       │       │   ├── For.php
│   │       │       │   ├── ForLoop.php
│   │       │       │   ├── If.php
│   │       │       │   ├── Import.php
│   │       │       │   ├── Include.php
│   │       │       │   ├── Macro.php
│   │       │       │   ├── Module.php
│   │       │       │   ├── Print.php
│   │       │       │   ├── Sandbox.php
│   │       │       │   ├── SandboxedPrint.php
│   │       │       │   ├── Set.php
│   │       │       │   ├── Spaceless.php
│   │       │       │   ├── Text.php
│   │       │       │   └── With.php
│   │       │       ├── Node.php
│   │       │       ├── NodeCaptureInterface.php
│   │       │       ├── NodeOutputInterface.php
│   │       │       ├── NodeTraverser.php
│   │       │       ├── NodeVisitor
│   │       │       │   ├── Escaper.php
│   │       │       │   ├── Optimizer.php
│   │       │       │   ├── SafeAnalysis.php
│   │       │       │   └── Sandbox.php
│   │       │       ├── NodeVisitorInterface.php
│   │       │       ├── Parser.php
│   │       │       ├── Profiler
│   │       │       │   ├── Dumper
│   │       │       │   │   ├── Blackfire.php
│   │       │       │   │   ├── Html.php
│   │       │       │   │   └── Text.php
│   │       │       │   ├── Node
│   │       │       │   │   ├── EnterProfile.php
│   │       │       │   │   └── LeaveProfile.php
│   │       │       │   ├── NodeVisitor
│   │       │       │   │   └── Profiler.php
│   │       │       │   └── Profile.php
│   │       │       ├── RuntimeLoaderInterface.php
│   │       │       ├── Sandbox
│   │       │       │   ├── SecurityError.php
│   │       │       │   ├── SecurityNotAllowedFilterError.php
│   │       │       │   ├── SecurityNotAllowedFunctionError.php
│   │       │       │   ├── SecurityNotAllowedMethodError.php
│   │       │       │   ├── SecurityNotAllowedPropertyError.php
│   │       │       │   ├── SecurityNotAllowedTagError.php
│   │       │       │   ├── SecurityPolicy.php
│   │       │       │   └── SecurityPolicyInterface.php
│   │       │       ├── SimpleFilter.php
│   │       │       ├── SimpleFunction.php
│   │       │       ├── SimpleTest.php
│   │       │       ├── Source.php
│   │       │       ├── SourceContextLoaderInterface.php
│   │       │       ├── Template.php
│   │       │       ├── TemplateWrapper.php
│   │       │       ├── Test
│   │       │       │   ├── IntegrationTestCase.php
│   │       │       │   └── NodeTestCase.php
│   │       │       ├── Test.php
│   │       │       ├── Token.php
│   │       │       ├── TokenParser
│   │       │       │   ├── AutoEscape.php
│   │       │       │   ├── Block.php
│   │       │       │   ├── Do.php
│   │       │       │   ├── Embed.php
│   │       │       │   ├── Extends.php
│   │       │       │   ├── Filter.php
│   │       │       │   ├── Flush.php
│   │       │       │   ├── For.php
│   │       │       │   ├── From.php
│   │       │       │   ├── If.php
│   │       │       │   ├── Import.php
│   │       │       │   ├── Include.php
│   │       │       │   ├── Macro.php
│   │       │       │   ├── Sandbox.php
│   │       │       │   ├── Set.php
│   │       │       │   ├── Spaceless.php
│   │       │       │   ├── Use.php
│   │       │       │   └── With.php
│   │       │       ├── TokenParser.php
│   │       │       ├── TokenParserInterface.php
│   │       │       ├── TokenStream.php
│   │       │       └── Util
│   │       │           ├── DeprecationCollector.php
│   │       │           └── TemplateDirIterator.php
│   │       ├── phpunit.xml.dist
│   │       └── test
│   │           └── Twig
│   │               └── Tests
│   │                   ├── Cache
│   │                   │   └── FilesystemTest.php
│   │                   ├── CompilerTest.php
│   │                   ├── CustomExtensionTest.php
│   │                   ├── EnvironmentTest.php
│   │                   ├── ErrorTest.php
│   │                   ├── ExpressionParserTest.php
│   │                   ├── Extension
│   │                   │   ├── CoreTest.php
│   │                   │   └── SandboxTest.php
│   │                   ├── FileExtensionEscapingStrategyTest.php
│   │                   ├── FilesystemHelper.php
│   │                   ├── Fixtures
│   │                   │   ├── autoescape
│   │                   │   │   ├── block.test
│   │                   │   │   └── name.test
│   │                   │   ├── errors
│   │                   │   │   ├── base.html
│   │                   │   │   └── index.html
│   │                   │   ├── exceptions
│   │                   │   │   ├── child_contents_outside_blocks.test
│   │                   │   │   ├── multiline_array_with_undefined_variable.test
│   │                   │   │   ├── multiline_array_with_undefined_variable_again.test
│   │                   │   │   ├── multiline_function_with_undefined_variable.test
│   │                   │   │   ├── multiline_function_with_unknown_argument.test
│   │                   │   │   ├── multiline_tag_with_undefined_variable.test
│   │                   │   │   ├── syntax_error_in_reused_template.test
│   │                   │   │   ├── unclosed_tag.test
│   │                   │   │   ├── undefined_parent.test
│   │                   │   │   ├── undefined_template_in_child_template.test
│   │                   │   │   └── undefined_trait.test
│   │                   │   ├── expressions
│   │                   │   │   ├── _self.test
│   │                   │   │   ├── array.test
│   │                   │   │   ├── array_call.test
│   │                   │   │   ├── binary.test
│   │                   │   │   ├── bitwise.test
│   │                   │   │   ├── comparison.test
│   │                   │   │   ├── divisibleby.test
│   │                   │   │   ├── dotdot.test
│   │                   │   │   ├── ends_with.test
│   │                   │   │   ├── grouping.test
│   │                   │   │   ├── literals.test
│   │                   │   │   ├── magic_call.test
│   │                   │   │   ├── matches.test
│   │                   │   │   ├── method_call.test
│   │                   │   │   ├── negative_numbers.test
│   │                   │   │   ├── operators_as_variables.test
│   │                   │   │   ├── postfix.test
│   │                   │   │   ├── power.test
│   │                   │   │   ├── sameas.test
│   │                   │   │   ├── starts_with.test
│   │                   │   │   ├── strings.test
│   │                   │   │   ├── ternary_operator.test
│   │                   │   │   ├── ternary_operator_noelse.test
│   │                   │   │   ├── ternary_operator_nothen.test
│   │                   │   │   ├── two_word_operators_as_variables.test
│   │                   │   │   ├── unary.test
│   │                   │   │   ├── unary_macro_arguments.test
│   │                   │   │   └── unary_precedence.test
│   │                   │   ├── extensions
│   │                   │   │   └── anonymous_functions.test
│   │                   │   ├── filters
│   │                   │   │   ├── abs.test
│   │                   │   │   ├── batch.test
│   │                   │   │   ├── batch_float.test
│   │                   │   │   ├── batch_with_empty_fill.test
│   │                   │   │   ├── batch_with_exact_elements.test
│   │                   │   │   ├── batch_with_fill.test
│   │                   │   │   ├── batch_with_keys.test
│   │                   │   │   ├── batch_with_zero_elements.test
│   │                   │   │   ├── convert_encoding.test
│   │                   │   │   ├── date.test
│   │                   │   │   ├── date_default_format.test
│   │                   │   │   ├── date_default_format_interval.test
│   │                   │   │   ├── date_immutable.test
│   │                   │   │   ├── date_interval.test
│   │                   │   │   ├── date_modify.test
│   │                   │   │   ├── date_namedargs.test
│   │                   │   │   ├── default.test
│   │                   │   │   ├── dynamic_filter.test
│   │                   │   │   ├── escape.test
│   │                   │   │   ├── escape_html_attr.test
│   │                   │   │   ├── escape_non_supported_charset.test
│   │                   │   │   ├── first.test
│   │                   │   │   ├── force_escape.test
│   │                   │   │   ├── format.test
│   │                   │   │   ├── join.test
│   │                   │   │   ├── json_encode.test
│   │                   │   │   ├── last.test
│   │                   │   │   ├── length.test
│   │                   │   │   ├── length_utf8.test
│   │                   │   │   ├── merge.test
│   │                   │   │   ├── nl2br.test
│   │                   │   │   ├── number_format.test
│   │                   │   │   ├── number_format_default.test
│   │                   │   │   ├── replace.test
│   │                   │   │   ├── replace_invalid_arg.test
│   │                   │   │   ├── reverse.test
│   │                   │   │   ├── round.test
│   │                   │   │   ├── slice.test
│   │                   │   │   ├── sort.test
│   │                   │   │   ├── special_chars.test
│   │                   │   │   ├── split.test
│   │                   │   │   ├── split_utf8.test
│   │                   │   │   ├── static_calls.test
│   │                   │   │   ├── trim.test
│   │                   │   │   └── urlencode.test
│   │                   │   ├── functions
│   │                   │   │   ├── attribute.test
│   │                   │   │   ├── block.test
│   │                   │   │   ├── block_with_template.test
│   │                   │   │   ├── block_without_name.test
│   │                   │   │   ├── constant.test
│   │                   │   │   ├── cycle.test
│   │                   │   │   ├── date.test
│   │                   │   │   ├── date_namedargs.test
│   │                   │   │   ├── dump.test
│   │                   │   │   ├── dump_array.test
│   │                   │   │   ├── dynamic_function.test
│   │                   │   │   ├── include
│   │                   │   │   │   ├── assignment.test
│   │                   │   │   │   ├── autoescaping.test
│   │                   │   │   │   ├── basic.test
│   │                   │   │   │   ├── expression.test
│   │                   │   │   │   ├── ignore_missing.test
│   │                   │   │   │   ├── missing.test
│   │                   │   │   │   ├── missing_nested.test
│   │                   │   │   │   ├── sandbox.test
│   │                   │   │   │   ├── sandbox_disabling.test
│   │                   │   │   │   ├── sandbox_disabling_ignore_missing.test
│   │                   │   │   │   ├── template_instance.test
│   │                   │   │   │   ├── templates_as_array.test
│   │                   │   │   │   ├── with_context.test
│   │                   │   │   │   └── with_variables.test
│   │                   │   │   ├── magic_call.test
│   │                   │   │   ├── magic_static_call.test
│   │                   │   │   ├── max.test
│   │                   │   │   ├── min.test
│   │                   │   │   ├── range.test
│   │                   │   │   ├── recursive_block_with_inheritance.test
│   │                   │   │   ├── source.test
│   │                   │   │   ├── special_chars.test
│   │                   │   │   ├── static_calls.test
│   │                   │   │   └── template_from_string.test
│   │                   │   ├── macros
│   │                   │   │   ├── default_values.test
│   │                   │   │   ├── nested_calls.test
│   │                   │   │   ├── reserved_variables.test
│   │                   │   │   ├── simple.test
│   │                   │   │   ├── varargs.test
│   │                   │   │   ├── varargs_argument.test
│   │                   │   │   └── with_filters.test
│   │                   │   ├── regression
│   │                   │   │   ├── combined_debug_info.test
│   │                   │   │   ├── empty_token.test
│   │                   │   │   ├── issue_1143.test
│   │                   │   │   ├── multi_word_tests.test
│   │                   │   │   ├── simple_xml_element.test
│   │                   │   │   └── strings_like_numbers.test
│   │                   │   ├── tags
│   │                   │   │   ├── autoescape
│   │                   │   │   │   ├── basic.test
│   │                   │   │   │   ├── blocks.test
│   │                   │   │   │   ├── double_escaping.test
│   │                   │   │   │   ├── functions.test
│   │                   │   │   │   ├── literal.test
│   │                   │   │   │   ├── nested.test
│   │                   │   │   │   ├── objects.test
│   │                   │   │   │   ├── raw.test
│   │                   │   │   │   ├── strategy.test
│   │                   │   │   │   ├── type.test
│   │                   │   │   │   ├── with_filters.test
│   │                   │   │   │   ├── with_filters_arguments.test
│   │                   │   │   │   ├── with_pre_escape_filters.test
│   │                   │   │   │   └── with_preserves_safety_filters.test
│   │                   │   │   ├── block
│   │                   │   │   │   ├── basic.test
│   │                   │   │   │   ├── block_unique_name.test
│   │                   │   │   │   └── special_chars.test
│   │                   │   │   ├── embed
│   │                   │   │   │   ├── basic.test
│   │                   │   │   │   ├── complex_dynamic_parent.test
│   │                   │   │   │   ├── dynamic_parent.test
│   │                   │   │   │   ├── error_line.test
│   │                   │   │   │   ├── multiple.test
│   │                   │   │   │   ├── nested.test
│   │                   │   │   │   └── with_extends.test
│   │                   │   │   ├── filter
│   │                   │   │   │   ├── basic.test
│   │                   │   │   │   ├── json_encode.test
│   │                   │   │   │   ├── multiple.test
│   │                   │   │   │   ├── nested.test
│   │                   │   │   │   ├── with_for_tag.test
│   │                   │   │   │   └── with_if_tag.test
│   │                   │   │   ├── for
│   │                   │   │   │   ├── condition.test
│   │                   │   │   │   ├── context.test
│   │                   │   │   │   ├── else.test
│   │                   │   │   │   ├── inner_variables.test
│   │                   │   │   │   ├── keys.test
│   │                   │   │   │   ├── keys_and_values.test
│   │                   │   │   │   ├── loop_context.test
│   │                   │   │   │   ├── loop_context_local.test
│   │                   │   │   │   ├── loop_not_defined.test
│   │                   │   │   │   ├── loop_not_defined_cond.test
│   │                   │   │   │   ├── nested_else.test
│   │                   │   │   │   ├── objects.test
│   │                   │   │   │   ├── objects_countable.test
│   │                   │   │   │   ├── recursive.test
│   │                   │   │   │   └── values.test
│   │                   │   │   ├── from.test
│   │                   │   │   ├── if
│   │                   │   │   │   ├── basic.test
│   │                   │   │   │   └── expression.test
│   │                   │   │   ├── include
│   │                   │   │   │   ├── basic.test
│   │                   │   │   │   ├── expression.test
│   │                   │   │   │   ├── ignore_missing.test
│   │                   │   │   │   ├── missing.test
│   │                   │   │   │   ├── missing_nested.test
│   │                   │   │   │   ├── only.test
│   │                   │   │   │   ├── template_instance.test
│   │                   │   │   │   ├── templates_as_array.test
│   │                   │   │   │   └── with_variables.test
│   │                   │   │   ├── inheritance
│   │                   │   │   │   ├── basic.test
│   │                   │   │   │   ├── block_expr.test
│   │                   │   │   │   ├── block_expr2.test
│   │                   │   │   │   ├── conditional.test
│   │                   │   │   │   ├── dynamic.test
│   │                   │   │   │   ├── empty.test
│   │                   │   │   │   ├── extends_as_array.test
│   │                   │   │   │   ├── extends_as_array_with_empty_name.test
│   │                   │   │   │   ├── extends_as_array_with_null_name.test
│   │                   │   │   │   ├── multiple.test
│   │                   │   │   │   ├── multiple_dynamic.test
│   │                   │   │   │   ├── nested_blocks.test
│   │                   │   │   │   ├── nested_blocks_parent_only.test
│   │                   │   │   │   ├── nested_inheritance.test
│   │                   │   │   │   ├── parent.test
│   │                   │   │   │   ├── parent_change.test
│   │                   │   │   │   ├── parent_in_a_block.test
│   │                   │   │   │   ├── parent_isolation.test
│   │                   │   │   │   ├── parent_nested.test
│   │                   │   │   │   ├── parent_without_extends.test
│   │                   │   │   │   ├── parent_without_extends_but_traits.test
│   │                   │   │   │   ├── template_instance.test
│   │                   │   │   │   └── use.test
│   │                   │   │   ├── macro
│   │                   │   │   │   ├── basic.test
│   │                   │   │   │   ├── endmacro_name.test
│   │                   │   │   │   ├── external.test
│   │                   │   │   │   ├── from.test
│   │                   │   │   │   ├── global.test
│   │                   │   │   │   ├── self_import.test
│   │                   │   │   │   ├── special_chars.test
│   │                   │   │   │   └── super_globals.test
│   │                   │   │   ├── sandbox
│   │                   │   │   │   ├── not_valid1.test
│   │                   │   │   │   ├── not_valid2.test
│   │                   │   │   │   └── simple.test
│   │                   │   │   ├── set
│   │                   │   │   │   ├── basic.test
│   │                   │   │   │   ├── capture-empty.test
│   │                   │   │   │   ├── capture.test
│   │                   │   │   │   └── expression.test
│   │                   │   │   ├── spaceless
│   │                   │   │   │   └── simple.test
│   │                   │   │   ├── special_chars.test
│   │                   │   │   ├── trim_block.test
│   │                   │   │   ├── use
│   │                   │   │   │   ├── aliases.test
│   │                   │   │   │   ├── basic.test
│   │                   │   │   │   ├── deep.test
│   │                   │   │   │   ├── deep_empty.test
│   │                   │   │   │   ├── inheritance.test
│   │                   │   │   │   ├── inheritance2.test
│   │                   │   │   │   ├── multiple.test
│   │                   │   │   │   ├── multiple_aliases.test
│   │                   │   │   │   ├── parent_block.test
│   │                   │   │   │   ├── parent_block2.test
│   │                   │   │   │   └── parent_block3.test
│   │                   │   │   ├── verbatim
│   │                   │   │   │   ├── basic.test
│   │                   │   │   │   └── whitespace_control.test
│   │                   │   │   └── with
│   │                   │   │       ├── basic.test
│   │                   │   │       ├── expression.test
│   │                   │   │       ├── nested.test
│   │                   │   │       ├── with_no_hash.test
│   │                   │   │       └── with_only.test
│   │                   │   └── tests
│   │                   │       ├── array.test
│   │                   │       ├── constant.test
│   │                   │       ├── defined.test
│   │                   │       ├── defined_for_attribute.test
│   │                   │       ├── defined_for_blocks.test
│   │                   │       ├── defined_for_blocks_with_template.test
│   │                   │       ├── defined_for_constants.test
│   │                   │       ├── empty.test
│   │                   │       ├── even.test
│   │                   │       ├── in.test
│   │                   │       ├── in_with_objects.test
│   │                   │       ├── iterable.test
│   │                   │       ├── null_coalesce.test
│   │                   │       └── odd.test
│   │                   ├── IntegrationTest.php
│   │                   ├── LegacyFixtures
│   │                   │   ├── autoescape
│   │                   │   │   └── filename.legacy.test
│   │                   │   └── functions
│   │                   │       └── undefined_block.legacy.test
│   │                   ├── LexerTest.php
│   │                   ├── Loader
│   │                   │   ├── ArrayTest.php
│   │                   │   ├── ChainTest.php
│   │                   │   ├── FilesystemTest.php
│   │                   │   └── Fixtures
│   │                   │       ├── inheritance
│   │                   │       │   ├── array_inheritance_empty_parent.html.twig
│   │                   │       │   ├── array_inheritance_nonexistent_parent.html.twig
│   │                   │       │   ├── array_inheritance_null_parent.html.twig
│   │                   │       │   ├── array_inheritance_valid_parent.html.twig
│   │                   │       │   ├── parent.html.twig
│   │                   │       │   └── spare_parent.html.twig
│   │                   │       ├── named
│   │                   │       │   └── index.html
│   │                   │       ├── named_bis
│   │                   │       │   └── index.html
│   │                   │       ├── named_final
│   │                   │       │   └── index.html
│   │                   │       ├── named_quater
│   │                   │       │   └── named_absolute.html
│   │                   │       ├── named_ter
│   │                   │       │   └── index.html
│   │                   │       ├── normal
│   │                   │       │   └── index.html
│   │                   │       ├── normal_bis
│   │                   │       │   └── index.html
│   │                   │       ├── normal_final
│   │                   │       │   └── index.html
│   │                   │       ├── normal_ter
│   │                   │       │   └── index.html
│   │                   │       ├── phar
│   │                   │       │   └── phar-sample.phar
│   │                   │       └── themes
│   │                   │           ├── theme1
│   │                   │           │   └── blocks.html.twig
│   │                   │           └── theme2
│   │                   │               └── blocks.html.twig
│   │                   ├── NativeExtensionTest.php
│   │                   ├── Node
│   │                   │   ├── AutoEscapeTest.php
│   │                   │   ├── BlockReferenceTest.php
│   │                   │   ├── BlockTest.php
│   │                   │   ├── DoTest.php
│   │                   │   ├── Expression
│   │                   │   │   ├── ArrayTest.php
│   │                   │   │   ├── AssignNameTest.php
│   │                   │   │   ├── Binary
│   │                   │   │   │   ├── AddTest.php
│   │                   │   │   │   ├── AndTest.php
│   │                   │   │   │   ├── ConcatTest.php
│   │                   │   │   │   ├── DivTest.php
│   │                   │   │   │   ├── FloorDivTest.php
│   │                   │   │   │   ├── ModTest.php
│   │                   │   │   │   ├── MulTest.php
│   │                   │   │   │   ├── OrTest.php
│   │                   │   │   │   └── SubTest.php
│   │                   │   │   ├── CallTest.php
│   │                   │   │   ├── ConditionalTest.php
│   │                   │   │   ├── ConstantTest.php
│   │                   │   │   ├── FilterTest.php
│   │                   │   │   ├── FunctionTest.php
│   │                   │   │   ├── GetAttrTest.php
│   │                   │   │   ├── NameTest.php
│   │                   │   │   ├── NullCoalesceTest.php
│   │                   │   │   ├── ParentTest.php
│   │                   │   │   ├── TestTest.php
│   │                   │   │   └── Unary
│   │                   │   │       ├── NegTest.php
│   │                   │   │       ├── NotTest.php
│   │                   │   │       └── PosTest.php
│   │                   │   ├── ForTest.php
│   │                   │   ├── IfTest.php
│   │                   │   ├── ImportTest.php
│   │                   │   ├── IncludeTest.php
│   │                   │   ├── MacroTest.php
│   │                   │   ├── ModuleTest.php
│   │                   │   ├── PrintTest.php
│   │                   │   ├── SandboxTest.php
│   │                   │   ├── SandboxedPrintTest.php
│   │                   │   ├── SetTest.php
│   │                   │   ├── SpacelessTest.php
│   │                   │   └── TextTest.php
│   │                   ├── NodeVisitor
│   │                   │   └── OptimizerTest.php
│   │                   ├── ParserTest.php
│   │                   ├── Profiler
│   │                   │   ├── Dumper
│   │                   │   │   ├── AbstractTest.php
│   │                   │   │   ├── BlackfireTest.php
│   │                   │   │   ├── HtmlTest.php
│   │                   │   │   └── TextTest.php
│   │                   │   └── ProfileTest.php
│   │                   ├── RuntimeFactoryLoaderTest.php
│   │                   ├── TemplateTest.php
│   │                   ├── TemplateWrapperTest.php
│   │                   ├── TokenStreamTest.php
│   │                   └── escapingTest.php
│   ├── webmozart
│   │   └── assert
│   │       ├── CHANGELOG.md
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── appveyor.yml
│   │       ├── composer.json
│   │       ├── phpunit.xml.dist
│   │       ├── src
│   │       │   └── Assert.php
│   │       └── tests
│   │           └── AssertTest.php
│   └── willdurand
│       ├── jsonp-callback-validator
│       │   ├── CONTRIBUTING.md
│       │   ├── LICENSE
│       │   ├── README.md
│       │   ├── composer.json
│       │   ├── phpunit.xml.dist
│       │   ├── src
│       │   │   └── JsonpCallbackValidator.php
│       │   └── tests
│       │       ├── JsonpCallbackValidatorTest.php
│       │       └── bootstrap.php
│       └── negotiation
│           ├── CONTRIBUTING.md
│           ├── LICENSE
│           ├── README.md
│           ├── appveyor.yml
│           ├── composer.json
│           ├── phpunit.xml.dist
│           ├── src
│           │   └── Negotiation
│           │       ├── AbstractNegotiator.php
│           │       ├── Accept.php
│           │       ├── AcceptCharset.php
│           │       ├── AcceptEncoding.php
│           │       ├── AcceptHeader.php
│           │       ├── AcceptLanguage.php
│           │       ├── BaseAccept.php
│           │       ├── CharsetNegotiator.php
│           │       ├── EncodingNegotiator.php
│           │       ├── Exception
│           │       │   ├── Exception.php
│           │       │   ├── InvalidArgument.php
│           │       │   ├── InvalidHeader.php
│           │       │   ├── InvalidLanguage.php
│           │       │   └── InvalidMediaType.php
│           │       ├── LanguageNegotiator.php
│           │       ├── Match.php
│           │       └── Negotiator.php
│           └── tests
│               ├── Negotiation
│               │   └── Tests
│               │       ├── AcceptLanguageTest.php
│               │       ├── AcceptTest.php
│               │       ├── BaseAcceptTest.php
│               │       ├── CharsetNegotiatorTest.php
│               │       ├── EncodingNegotiatorTest.php
│               │       ├── LanguageNegotiatorTest.php
│               │       ├── MatchTest.php
│               │       ├── NegotiatorTest.php
│               │       └── TestCase.php
│               └── bootstrap.php
└── web
    ├── app.php
    ├── app_dev.php
    ├── apple-touch-icon.png
    ├── bundles
    ├── config.php
    ├── favicon.ico
    └── robots.txt

3041 directories, 14556 files
