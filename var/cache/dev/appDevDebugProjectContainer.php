<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'rtecabundle\\controller\\defaultcontroller' => 'RtecaBundle\\Controller\\DefaultController',
            'rtecabundle\\controller\\securitycontroller' => 'RtecaBundle\\Controller\\SecurityController',
        );
        $this->methodMap = array(
            '1_8d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65e' => 'get18d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65eService',
            '2_8d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65e' => 'get28d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65eService',
            'RtecaBundle\\Controller\\DefaultController' => 'getRtecaBundle_Controller_DefaultControllerService',
            'RtecaBundle\\Controller\\SecurityController' => 'getRtecaBundle_Controller_SecurityControllerService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService',
            'argument_resolver.request' => 'getArgumentResolver_RequestService',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService',
            'argument_resolver.session' => 'getArgumentResolver_SessionService',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.annotations.recorder_inner' => 'getCache_Annotations_RecorderInnerService',
            'cache.app' => 'getCache_AppService',
            'cache.app.recorder_inner' => 'getCache_App_RecorderInnerService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.serializer.recorder_inner' => 'getCache_Serializer_RecorderInnerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system.recorder_inner' => 'getCache_System_RecorderInnerService',
            'cache.validator' => 'getCache_ValidatorService',
            'cache.validator.recorder_inner' => 'getCache_Validator_RecorderInnerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerruncommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerstartcommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerstatuscommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerstopcommandService',
            'console.error_listener' => 'getConsole_ErrorListenerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'easy_deploy.command.deploy' => 'getEasyDeploy_Command_DeployService',
            'easy_deploy.command.rollback' => 'getEasyDeploy_Command_RollbackService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'httplug.async_client.default' => 'getHttplug_AsyncClient_DefaultService',
            'httplug.auto_discovery.auto_discovered_client' => 'getHttplug_AutoDiscovery_AutoDiscoveredClientService',
            'httplug.client.default' => 'getHttplug_Client_DefaultService',
            'httplug.collector.collector' => 'getHttplug_Collector_CollectorService',
            'httplug.message_factory.default' => 'getHttplug_MessageFactory_DefaultService',
            'httplug.strategy' => 'getHttplug_StrategyService',
            'httplug.stream_factory.default' => 'getHttplug_StreamFactory_DefaultService',
            'httplug.uri_factory.default' => 'getHttplug_UriFactory_DefaultService',
            'ivory.google_map.form.type.place_autocomplete' => 'getIvory_GoogleMap_Form_Type_PlaceAutocompleteService',
            'ivory.google_map.helper.api' => 'getIvory_GoogleMap_Helper_ApiService',
            'ivory.google_map.helper.api.event_dispatcher' => 'getIvory_GoogleMap_Helper_Api_EventDispatcherService',
            'ivory.google_map.helper.collector.base.bound' => 'getIvory_GoogleMap_Helper_Collector_Base_BoundService',
            'ivory.google_map.helper.collector.base.coordinate' => 'getIvory_GoogleMap_Helper_Collector_Base_CoordinateService',
            'ivory.google_map.helper.collector.base.point' => 'getIvory_GoogleMap_Helper_Collector_Base_PointService',
            'ivory.google_map.helper.collector.base.size' => 'getIvory_GoogleMap_Helper_Collector_Base_SizeService',
            'ivory.google_map.helper.collector.control.custom' => 'getIvory_GoogleMap_Helper_Collector_Control_CustomService',
            'ivory.google_map.helper.collector.event.dom_event' => 'getIvory_GoogleMap_Helper_Collector_Event_DomEventService',
            'ivory.google_map.helper.collector.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Collector_Event_DomEventOnceService',
            'ivory.google_map.helper.collector.event.event' => 'getIvory_GoogleMap_Helper_Collector_Event_EventService',
            'ivory.google_map.helper.collector.event.event_once' => 'getIvory_GoogleMap_Helper_Collector_Event_EventOnceService',
            'ivory.google_map.helper.collector.layer.geo_json' => 'getIvory_GoogleMap_Helper_Collector_Layer_GeoJsonService',
            'ivory.google_map.helper.collector.layer.heatmap' => 'getIvory_GoogleMap_Helper_Collector_Layer_HeatmapService',
            'ivory.google_map.helper.collector.layer.kml' => 'getIvory_GoogleMap_Helper_Collector_Layer_KmlService',
            'ivory.google_map.helper.collector.overlay.circle' => 'getIvory_GoogleMap_Helper_Collector_Overlay_CircleService',
            'ivory.google_map.helper.collector.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Collector_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.collector.overlay.extendable' => 'getIvory_GoogleMap_Helper_Collector_Overlay_ExtendableService',
            'ivory.google_map.helper.collector.overlay.ground_overlay' => 'getIvory_GoogleMap_Helper_Collector_Overlay_GroundOverlayService',
            'ivory.google_map.helper.collector.overlay.icon' => 'getIvory_GoogleMap_Helper_Collector_Overlay_IconService',
            'ivory.google_map.helper.collector.overlay.icon_sequence' => 'getIvory_GoogleMap_Helper_Collector_Overlay_IconSequenceService',
            'ivory.google_map.helper.collector.overlay.info_box' => 'getIvory_GoogleMap_Helper_Collector_Overlay_InfoBoxService',
            'ivory.google_map.helper.collector.overlay.info_window' => 'getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindowService',
            'ivory.google_map.helper.collector.overlay.info_window.default' => 'getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindow_DefaultService',
            'ivory.google_map.helper.collector.overlay.marker' => 'getIvory_GoogleMap_Helper_Collector_Overlay_MarkerService',
            'ivory.google_map.helper.collector.overlay.marker_shape' => 'getIvory_GoogleMap_Helper_Collector_Overlay_MarkerShapeService',
            'ivory.google_map.helper.collector.overlay.polygon' => 'getIvory_GoogleMap_Helper_Collector_Overlay_PolygonService',
            'ivory.google_map.helper.collector.overlay.polyline' => 'getIvory_GoogleMap_Helper_Collector_Overlay_PolylineService',
            'ivory.google_map.helper.collector.overlay.rectangle' => 'getIvory_GoogleMap_Helper_Collector_Overlay_RectangleService',
            'ivory.google_map.helper.collector.overlay.symbol' => 'getIvory_GoogleMap_Helper_Collector_Overlay_SymbolService',
            'ivory.google_map.helper.collector.place.autocomplete.base.bound' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_BoundService',
            'ivory.google_map.helper.collector.place.autocomplete.base.coordinate' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_CoordinateService',
            'ivory.google_map.helper.collector.place.autocomplete.event.dom_event' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventService',
            'ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventOnceService',
            'ivory.google_map.helper.collector.place.autocomplete.event.event' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventService',
            'ivory.google_map.helper.collector.place.autocomplete.event.event_once' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventOnceService',
            'ivory.google_map.helper.collector.static.encoded_polyline' => 'getIvory_GoogleMap_Helper_Collector_Static_EncodedPolylineService',
            'ivory.google_map.helper.collector.static.extendable' => 'getIvory_GoogleMap_Helper_Collector_Static_ExtendableService',
            'ivory.google_map.helper.collector.static.marker' => 'getIvory_GoogleMap_Helper_Collector_Static_MarkerService',
            'ivory.google_map.helper.collector.static.polyline' => 'getIvory_GoogleMap_Helper_Collector_Static_PolylineService',
            'ivory.google_map.helper.formatter' => 'getIvory_GoogleMap_Helper_FormatterService',
            'ivory.google_map.helper.json_builder' => 'getIvory_GoogleMap_Helper_JsonBuilderService',
            'ivory.google_map.helper.map' => 'getIvory_GoogleMap_Helper_MapService',
            'ivory.google_map.helper.map.event_dispatcher' => 'getIvory_GoogleMap_Helper_Map_EventDispatcherService',
            'ivory.google_map.helper.map.static' => 'getIvory_GoogleMap_Helper_Map_StaticService',
            'ivory.google_map.helper.map.static.event_dispatcher' => 'getIvory_GoogleMap_Helper_Map_Static_EventDispatcherService',
            'ivory.google_map.helper.place_autocomplete' => 'getIvory_GoogleMap_Helper_PlaceAutocompleteService',
            'ivory.google_map.helper.place_autocomplete.event_dispatcher' => 'getIvory_GoogleMap_Helper_PlaceAutocomplete_EventDispatcherService',
            'ivory.google_map.helper.renderer.api' => 'getIvory_GoogleMap_Helper_Renderer_ApiService',
            'ivory.google_map.helper.renderer.api_init' => 'getIvory_GoogleMap_Helper_Renderer_ApiInitService',
            'ivory.google_map.helper.renderer.base.bound' => 'getIvory_GoogleMap_Helper_Renderer_Base_BoundService',
            'ivory.google_map.helper.renderer.base.coordinate' => 'getIvory_GoogleMap_Helper_Renderer_Base_CoordinateService',
            'ivory.google_map.helper.renderer.base.point' => 'getIvory_GoogleMap_Helper_Renderer_Base_PointService',
            'ivory.google_map.helper.renderer.base.size' => 'getIvory_GoogleMap_Helper_Renderer_Base_SizeService',
            'ivory.google_map.helper.renderer.control.custom' => 'getIvory_GoogleMap_Helper_Renderer_Control_CustomService',
            'ivory.google_map.helper.renderer.control.fullscreen' => 'getIvory_GoogleMap_Helper_Renderer_Control_FullscreenService',
            'ivory.google_map.helper.renderer.control.manager' => 'getIvory_GoogleMap_Helper_Renderer_Control_ManagerService',
            'ivory.google_map.helper.renderer.control.map_type' => 'getIvory_GoogleMap_Helper_Renderer_Control_MapTypeService',
            'ivory.google_map.helper.renderer.control.map_type_style' => 'getIvory_GoogleMap_Helper_Renderer_Control_MapTypeStyleService',
            'ivory.google_map.helper.renderer.control.position' => 'getIvory_GoogleMap_Helper_Renderer_Control_PositionService',
            'ivory.google_map.helper.renderer.control.rotate' => 'getIvory_GoogleMap_Helper_Renderer_Control_RotateService',
            'ivory.google_map.helper.renderer.control.scale' => 'getIvory_GoogleMap_Helper_Renderer_Control_ScaleService',
            'ivory.google_map.helper.renderer.control.scale_style' => 'getIvory_GoogleMap_Helper_Renderer_Control_ScaleStyleService',
            'ivory.google_map.helper.renderer.control.street_view' => 'getIvory_GoogleMap_Helper_Renderer_Control_StreetViewService',
            'ivory.google_map.helper.renderer.control.zoom' => 'getIvory_GoogleMap_Helper_Renderer_Control_ZoomService',
            'ivory.google_map.helper.renderer.control.zoom_style' => 'getIvory_GoogleMap_Helper_Renderer_Control_ZoomStyleService',
            'ivory.google_map.helper.renderer.event.dom_event' => 'getIvory_GoogleMap_Helper_Renderer_Event_DomEventService',
            'ivory.google_map.helper.renderer.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Renderer_Event_DomEventOnceService',
            'ivory.google_map.helper.renderer.event.event' => 'getIvory_GoogleMap_Helper_Renderer_Event_EventService',
            'ivory.google_map.helper.renderer.event.event_once' => 'getIvory_GoogleMap_Helper_Renderer_Event_EventOnceService',
            'ivory.google_map.helper.renderer.geometry.encoding' => 'getIvory_GoogleMap_Helper_Renderer_Geometry_EncodingService',
            'ivory.google_map.helper.renderer.html.javascript_tag' => 'getIvory_GoogleMap_Helper_Renderer_Html_JavascriptTagService',
            'ivory.google_map.helper.renderer.html.stylesheet' => 'getIvory_GoogleMap_Helper_Renderer_Html_StylesheetService',
            'ivory.google_map.helper.renderer.html.stylesheet_tag' => 'getIvory_GoogleMap_Helper_Renderer_Html_StylesheetTagService',
            'ivory.google_map.helper.renderer.html.tag' => 'getIvory_GoogleMap_Helper_Renderer_Html_TagService',
            'ivory.google_map.helper.renderer.layer.geo_json' => 'getIvory_GoogleMap_Helper_Renderer_Layer_GeoJsonService',
            'ivory.google_map.helper.renderer.layer.heatmap' => 'getIvory_GoogleMap_Helper_Renderer_Layer_HeatmapService',
            'ivory.google_map.helper.renderer.layer.kml' => 'getIvory_GoogleMap_Helper_Renderer_Layer_KmlService',
            'ivory.google_map.helper.renderer.loader' => 'getIvory_GoogleMap_Helper_Renderer_LoaderService',
            'ivory.google_map.helper.renderer.map' => 'getIvory_GoogleMap_Helper_Renderer_MapService',
            'ivory.google_map.helper.renderer.map_bound' => 'getIvory_GoogleMap_Helper_Renderer_MapBoundService',
            'ivory.google_map.helper.renderer.map_center' => 'getIvory_GoogleMap_Helper_Renderer_MapCenterService',
            'ivory.google_map.helper.renderer.map_container' => 'getIvory_GoogleMap_Helper_Renderer_MapContainerService',
            'ivory.google_map.helper.renderer.map_html' => 'getIvory_GoogleMap_Helper_Renderer_MapHtmlService',
            'ivory.google_map.helper.renderer.map_type_id' => 'getIvory_GoogleMap_Helper_Renderer_MapTypeIdService',
            'ivory.google_map.helper.renderer.overlay.animation' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_AnimationService',
            'ivory.google_map.helper.renderer.overlay.circle' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_CircleService',
            'ivory.google_map.helper.renderer.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.renderer.overlay.extendable' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_ExtendableService',
            'ivory.google_map.helper.renderer.overlay.extendable.bounds' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_BoundsService',
            'ivory.google_map.helper.renderer.overlay.extendable.default_viewport' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_DefaultViewportService',
            'ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_HeatmapLayerService',
            'ivory.google_map.helper.renderer.overlay.extendable.path' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PathService',
            'ivory.google_map.helper.renderer.overlay.extendable.position' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PositionService',
            'ivory.google_map.helper.renderer.overlay.ground_overlay' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_GroundOverlayService',
            'ivory.google_map.helper.renderer.overlay.icon' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_IconService',
            'ivory.google_map.helper.renderer.overlay.icon_sequence' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_IconSequenceService',
            'ivory.google_map.helper.renderer.overlay.info_box' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoBoxService',
            'ivory.google_map.helper.renderer.overlay.info_window.close' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_CloseService',
            'ivory.google_map.helper.renderer.overlay.info_window.default' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_DefaultService',
            'ivory.google_map.helper.renderer.overlay.info_window.open' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_OpenService',
            'ivory.google_map.helper.renderer.overlay.marker' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerService',
            'ivory.google_map.helper.renderer.overlay.marker_clusterer' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerClustererService',
            'ivory.google_map.helper.renderer.overlay.marker_shape' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerShapeService',
            'ivory.google_map.helper.renderer.overlay.polygon' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_PolygonService',
            'ivory.google_map.helper.renderer.overlay.polyline' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_PolylineService',
            'ivory.google_map.helper.renderer.overlay.rectangle' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_RectangleService',
            'ivory.google_map.helper.renderer.overlay.symbol' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolService',
            'ivory.google_map.helper.renderer.overlay.symbol_path' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolPathService',
            'ivory.google_map.helper.renderer.place.autocomplete' => 'getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteService',
            'ivory.google_map.helper.renderer.place.autocomplete_container' => 'getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteContainerService',
            'ivory.google_map.helper.renderer.place.autocomplete_html' => 'getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteHtmlService',
            'ivory.google_map.helper.renderer.static.base.coordinate' => 'getIvory_GoogleMap_Helper_Renderer_Static_Base_CoordinateService',
            'ivory.google_map.helper.renderer.static.base.point' => 'getIvory_GoogleMap_Helper_Renderer_Static_Base_PointService',
            'ivory.google_map.helper.renderer.static.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_StyleService',
            'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_ValueService',
            'ivory.google_map.helper.renderer.static.overlay.extendable' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_ExtendableService',
            'ivory.google_map.helper.renderer.static.overlay.marker' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_MarkerService',
            'ivory.google_map.helper.renderer.static.overlay.marker.location' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_LocationService',
            'ivory.google_map.helper.renderer.static.overlay.marker.style' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_StyleService',
            'ivory.google_map.helper.renderer.static.overlay.polyline' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_PolylineService',
            'ivory.google_map.helper.renderer.static.overlay.polyline.location' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_LocationService',
            'ivory.google_map.helper.renderer.static.overlay.polyline.style' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_StyleService',
            'ivory.google_map.helper.renderer.static.size' => 'getIvory_GoogleMap_Helper_Renderer_Static_SizeService',
            'ivory.google_map.helper.renderer.utility.callback' => 'getIvory_GoogleMap_Helper_Renderer_Utility_CallbackService',
            'ivory.google_map.helper.renderer.utility.object_to_array' => 'getIvory_GoogleMap_Helper_Renderer_Utility_ObjectToArrayService',
            'ivory.google_map.helper.renderer.utility.requirement' => 'getIvory_GoogleMap_Helper_Renderer_Utility_RequirementService',
            'ivory.google_map.helper.renderer.utility.requirement_loader' => 'getIvory_GoogleMap_Helper_Renderer_Utility_RequirementLoaderService',
            'ivory.google_map.helper.renderer.utility.source' => 'getIvory_GoogleMap_Helper_Renderer_Utility_SourceService',
            'ivory.google_map.helper.subscriber.api_javascript' => 'getIvory_GoogleMap_Helper_Subscriber_ApiJavascriptService',
            'ivory.google_map.helper.subscriber.base' => 'getIvory_GoogleMap_Helper_Subscriber_BaseService',
            'ivory.google_map.helper.subscriber.base.bound' => 'getIvory_GoogleMap_Helper_Subscriber_Base_BoundService',
            'ivory.google_map.helper.subscriber.base.coordinate' => 'getIvory_GoogleMap_Helper_Subscriber_Base_CoordinateService',
            'ivory.google_map.helper.subscriber.base.point' => 'getIvory_GoogleMap_Helper_Subscriber_Base_PointService',
            'ivory.google_map.helper.subscriber.base.size' => 'getIvory_GoogleMap_Helper_Subscriber_Base_SizeService',
            'ivory.google_map.helper.subscriber.control' => 'getIvory_GoogleMap_Helper_Subscriber_ControlService',
            'ivory.google_map.helper.subscriber.control.custom' => 'getIvory_GoogleMap_Helper_Subscriber_Control_CustomService',
            'ivory.google_map.helper.subscriber.event' => 'getIvory_GoogleMap_Helper_Subscriber_EventService',
            'ivory.google_map.helper.subscriber.event.dom_event' => 'getIvory_GoogleMap_Helper_Subscriber_Event_DomEventService',
            'ivory.google_map.helper.subscriber.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Event_DomEventOnceService',
            'ivory.google_map.helper.subscriber.event.event' => 'getIvory_GoogleMap_Helper_Subscriber_Event_EventService',
            'ivory.google_map.helper.subscriber.event.event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Event_EventOnceService',
            'ivory.google_map.helper.subscriber.layer' => 'getIvory_GoogleMap_Helper_Subscriber_LayerService',
            'ivory.google_map.helper.subscriber.layer.geo_json' => 'getIvory_GoogleMap_Helper_Subscriber_Layer_GeoJsonService',
            'ivory.google_map.helper.subscriber.layer.heatmap' => 'getIvory_GoogleMap_Helper_Subscriber_Layer_HeatmapService',
            'ivory.google_map.helper.subscriber.layer.kml' => 'getIvory_GoogleMap_Helper_Subscriber_Layer_KmlService',
            'ivory.google_map.helper.subscriber.map' => 'getIvory_GoogleMap_Helper_Subscriber_MapService',
            'ivory.google_map.helper.subscriber.map_bound' => 'getIvory_GoogleMap_Helper_Subscriber_MapBoundService',
            'ivory.google_map.helper.subscriber.map_center' => 'getIvory_GoogleMap_Helper_Subscriber_MapCenterService',
            'ivory.google_map.helper.subscriber.map_container' => 'getIvory_GoogleMap_Helper_Subscriber_MapContainerService',
            'ivory.google_map.helper.subscriber.map_html' => 'getIvory_GoogleMap_Helper_Subscriber_MapHtmlService',
            'ivory.google_map.helper.subscriber.map_init' => 'getIvory_GoogleMap_Helper_Subscriber_MapInitService',
            'ivory.google_map.helper.subscriber.map_javascript' => 'getIvory_GoogleMap_Helper_Subscriber_MapJavascriptService',
            'ivory.google_map.helper.subscriber.map_stylehseet' => 'getIvory_GoogleMap_Helper_Subscriber_MapStylehseetService',
            'ivory.google_map.helper.subscriber.overlay' => 'getIvory_GoogleMap_Helper_Subscriber_OverlayService',
            'ivory.google_map.helper.subscriber.overlay.circle' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_CircleService',
            'ivory.google_map.helper.subscriber.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.subscriber.overlay.extendable' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_ExtendableService',
            'ivory.google_map.helper.subscriber.overlay.ground_overlay' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_GroundOverlayService',
            'ivory.google_map.helper.subscriber.overlay.icon' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_IconService',
            'ivory.google_map.helper.subscriber.overlay.icon_sequence' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_IconSequenceService',
            'ivory.google_map.helper.subscriber.overlay.info_box' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoBoxService',
            'ivory.google_map.helper.subscriber.overlay.info_window.close' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_CloseService',
            'ivory.google_map.helper.subscriber.overlay.info_window.default' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_DefaultService',
            'ivory.google_map.helper.subscriber.overlay.info_window.open' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_OpenService',
            'ivory.google_map.helper.subscriber.overlay.marker' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerService',
            'ivory.google_map.helper.subscriber.overlay.marker.info_window.open' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_Marker_InfoWindow_OpenService',
            'ivory.google_map.helper.subscriber.overlay.marker_clusterer' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerClustererService',
            'ivory.google_map.helper.subscriber.overlay.marker_shape' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerShapeService',
            'ivory.google_map.helper.subscriber.overlay.polygon' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_PolygonService',
            'ivory.google_map.helper.subscriber.overlay.polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_PolylineService',
            'ivory.google_map.helper.subscriber.overlay.rectangle' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_RectangleService',
            'ivory.google_map.helper.subscriber.overlay.symbol' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_SymbolService',
            'ivory.google_map.helper.subscriber.place.autocomplete' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteService',
            'ivory.google_map.helper.subscriber.place.autocomplete.base' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_BaseService',
            'ivory.google_map.helper.subscriber.place.autocomplete.base.bound' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_BoundService',
            'ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_CoordinateService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_EventService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventOnceService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.event' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventOnceService',
            'ivory.google_map.helper.subscriber.place.autocomplete_container' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteContainerService',
            'ivory.google_map.helper.subscriber.place.autocomplete_html' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteHtmlService',
            'ivory.google_map.helper.subscriber.place.autocomplete_init' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteInitService',
            'ivory.google_map.helper.subscriber.place.autocomplete_javascript' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteJavascriptService',
            'ivory.google_map.helper.subscriber.static' => 'getIvory_GoogleMap_Helper_Subscriber_StaticService',
            'ivory.google_map.helper.subscriber.static.center' => 'getIvory_GoogleMap_Helper_Subscriber_Static_CenterService',
            'ivory.google_map.helper.subscriber.static.encoded_polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Static_EncodedPolylineService',
            'ivory.google_map.helper.subscriber.static.extendable' => 'getIvory_GoogleMap_Helper_Subscriber_Static_ExtendableService',
            'ivory.google_map.helper.subscriber.static.format' => 'getIvory_GoogleMap_Helper_Subscriber_Static_FormatService',
            'ivory.google_map.helper.subscriber.static.key' => 'getIvory_GoogleMap_Helper_Subscriber_Static_KeyService',
            'ivory.google_map.helper.subscriber.static.marker' => 'getIvory_GoogleMap_Helper_Subscriber_Static_MarkerService',
            'ivory.google_map.helper.subscriber.static.polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Static_PolylineService',
            'ivory.google_map.helper.subscriber.static.scale' => 'getIvory_GoogleMap_Helper_Subscriber_Static_ScaleService',
            'ivory.google_map.helper.subscriber.static.size' => 'getIvory_GoogleMap_Helper_Subscriber_Static_SizeService',
            'ivory.google_map.helper.subscriber.static.type' => 'getIvory_GoogleMap_Helper_Subscriber_Static_TypeService',
            'ivory.google_map.helper.subscriber.static.zoom' => 'getIvory_GoogleMap_Helper_Subscriber_Static_ZoomService',
            'ivory.google_map.helper.subscriber.utility.object_to_array' => 'getIvory_GoogleMap_Helper_Subscriber_Utility_ObjectToArrayService',
            'ivory.google_map.twig.extension.api' => 'getIvory_GoogleMap_Twig_Extension_ApiService',
            'ivory.google_map.twig.extension.map' => 'getIvory_GoogleMap_Twig_Extension_MapService',
            'ivory.google_map.twig.extension.map.static' => 'getIvory_GoogleMap_Twig_Extension_Map_StaticService',
            'ivory.google_map.twig.extension.place_autocomplete' => 'getIvory_GoogleMap_Twig_Extension_PlaceAutocompleteService',
            'ivory.serializer' => 'getIvory_SerializerService',
            'ivory.serializer.accessor' => 'getIvory_Serializer_AccessorService',
            'ivory.serializer.event.dispatcher' => 'getIvory_Serializer_Event_DispatcherService',
            'ivory.serializer.instantiator' => 'getIvory_Serializer_InstantiatorService',
            'ivory.serializer.mapping.factory.default' => 'getIvory_Serializer_Mapping_Factory_DefaultService',
            'ivory.serializer.mapping.factory.event' => 'getIvory_Serializer_Mapping_Factory_EventService',
            'ivory.serializer.mapping.loader' => 'getIvory_Serializer_Mapping_LoaderService',
            'ivory.serializer.mapping.loader.annotation' => 'getIvory_Serializer_Mapping_Loader_AnnotationService',
            'ivory.serializer.mapping.loader.reflection' => 'getIvory_Serializer_Mapping_Loader_ReflectionService',
            'ivory.serializer.mutator' => 'getIvory_Serializer_MutatorService',
            'ivory.serializer.navigator.default' => 'getIvory_Serializer_Navigator_DefaultService',
            'ivory.serializer.navigator.event' => 'getIvory_Serializer_Navigator_EventService',
            'ivory.serializer.registry.type' => 'getIvory_Serializer_Registry_TypeService',
            'ivory.serializer.registry.visitor' => 'getIvory_Serializer_Registry_VisitorService',
            'ivory.serializer.type.array' => 'getIvory_Serializer_Type_ArrayService',
            'ivory.serializer.type.boolean' => 'getIvory_Serializer_Type_BooleanService',
            'ivory.serializer.type.closure' => 'getIvory_Serializer_Type_ClosureService',
            'ivory.serializer.type.date_time' => 'getIvory_Serializer_Type_DateTimeService',
            'ivory.serializer.type.exception' => 'getIvory_Serializer_Type_ExceptionService',
            'ivory.serializer.type.float' => 'getIvory_Serializer_Type_FloatService',
            'ivory.serializer.type.form' => 'getIvory_Serializer_Type_FormService',
            'ivory.serializer.type.form_error' => 'getIvory_Serializer_Type_FormErrorService',
            'ivory.serializer.type.guesser' => 'getIvory_Serializer_Type_GuesserService',
            'ivory.serializer.type.integer' => 'getIvory_Serializer_Type_IntegerService',
            'ivory.serializer.type.lexer' => 'getIvory_Serializer_Type_LexerService',
            'ivory.serializer.type.null' => 'getIvory_Serializer_Type_NullService',
            'ivory.serializer.type.object' => 'getIvory_Serializer_Type_ObjectService',
            'ivory.serializer.type.parser' => 'getIvory_Serializer_Type_ParserService',
            'ivory.serializer.type.resource' => 'getIvory_Serializer_Type_ResourceService',
            'ivory.serializer.type.std_class' => 'getIvory_Serializer_Type_StdClassService',
            'ivory.serializer.type.string' => 'getIvory_Serializer_Type_StringService',
            'ivory.serializer.visitor.csv.deserialization' => 'getIvory_Serializer_Visitor_Csv_DeserializationService',
            'ivory.serializer.visitor.csv.serialization' => 'getIvory_Serializer_Visitor_Csv_SerializationService',
            'ivory.serializer.visitor.json.deserialization' => 'getIvory_Serializer_Visitor_Json_DeserializationService',
            'ivory.serializer.visitor.json.serialization' => 'getIvory_Serializer_Visitor_Json_SerializationService',
            'ivory.serializer.visitor.xml.deserialization' => 'getIvory_Serializer_Visitor_Xml_DeserializationService',
            'ivory.serializer.visitor.xml.serialization' => 'getIvory_Serializer_Visitor_Xml_SerializationService',
            'ivory.serializer.visitor.yaml.deserialization' => 'getIvory_Serializer_Visitor_Yaml_DeserializationService',
            'ivory.serializer.visitor.yaml.serialization' => 'getIvory_Serializer_Visitor_Yaml_SerializationService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.handler.server_log' => 'getMonolog_Handler_ServerLogService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService',
            'security.access.simple_role_voter' => 'getSecurity_Access_SimpleRoleVoterService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.provider.anonymous.main' => 'getSecurity_Authentication_Provider_Anonymous_MainService',
            'security.authentication.provider.dao.main' => 'getSecurity_Authentication_Provider_Dao_MainService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => 'getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user.provider.concrete.in_memory' => 'getSecurity_User_Provider_Concrete_InMemoryService',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_locator.adb387edf44001656cf7d6606ecd3a0f' => 'getServiceLocator_Adb387edf44001656cf7d6606ecd3a0fService',
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => 'getServiceLocator_E64d23c3bf770e2cf44b71643280668dService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->privates = array(
            '1_8d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65e' => true,
            '2_8d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65e' => true,
            'annotations.reader' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'cache.annotations' => true,
            'cache.annotations.recorder_inner' => true,
            'cache.app.recorder_inner' => true,
            'cache.serializer.recorder_inner' => true,
            'cache.system.recorder_inner' => true,
            'cache.validator' => true,
            'cache.validator.recorder_inner' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'debug.file_link_formatter' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.data_collector' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.validator' => true,
            'httplug.collector.collector' => true,
            'resolve_controller_name_subscriber' => true,
            'router.request_context' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.simple_role_voter' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.provider.dao.main' => true,
            'security.authentication.trust_resolver' => true,
            'security.firewall.map' => true,
            'security.logout_url_generator' => true,
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => true,
            'security.role_hierarchy' => true,
            'security.user.provider.concrete.in_memory' => true,
            'security.user_value_resolver' => true,
            'service_locator.adb387edf44001656cf7d6606ecd3a0f' => true,
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => true,
            'session.storage.metadata_bag' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.locator' => true,
            'web_profiler.csp.handler' => true,
        );
        $this->aliases = array(
            'cache.app_clearer' => 'cache.default_clearer',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'httplug.client' => 'httplug.client.default',
            'httplug.message_factory' => 'httplug.message_factory.default',
            'httplug.stream_factory' => 'httplug.stream_factory.default',
            'httplug.uri_factory' => 'httplug.uri_factory.default',
            'ivory.serializer.mapping.factory' => 'ivory.serializer.mapping.factory.default',
            'ivory.serializer.navigator' => 'ivory.serializer.navigator.event',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    /**
     * {@inheritdoc}
     */
    public function isCompiled()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'RtecaBundle\Controller\DefaultController' shared autowired service.
     *
     * @return \RtecaBundle\Controller\DefaultController
     */
    protected function getRtecaBundle_Controller_DefaultControllerService()
    {
        return $this->services['RtecaBundle\Controller\DefaultController'] = new \RtecaBundle\Controller\DefaultController();
    }

    /**
     * Gets the public 'RtecaBundle\Controller\SecurityController' shared autowired service.
     *
     * @return \RtecaBundle\Controller\SecurityController
     */
    protected function getRtecaBundle_Controller_SecurityControllerService()
    {
        return $this->services['RtecaBundle\Controller\SecurityController'] = new \RtecaBundle\Controller\SecurityController();
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), true);
    }

    /**
     * Gets the public 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->get('assets.context')) && false ?: '_'}), array());
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.app.recorder_inner']) ? $this->services['cache.app.recorder_inner'] : $this->getCache_App_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'cache.default_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_DefaultClearerService()
    {
        return $this->services['cache.default_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.system.recorder_inner']) ? $this->services['cache.system.recorder_inner'] : $this->getCache_System_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => ${($_ = isset($this->services['cache.default_clearer']) ? $this->services['cache.default_clearer'] : $this->get('cache.default_clearer')) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        $a = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};
        $b = ${($_ = isset($this->services['templating.filename_parser']) ? $this->services['templating.filename_parser'] : $this->get('templating.filename_parser')) && false ?: '_'};

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'/app/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 1 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}, (__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function () {
            $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
        })), $c, array()), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this, new \Symfony\Bundle\TwigBundle\TemplateIterator($a, ($this->targetDirs[3].'/app'), array())), 6 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'})));
    }

    /**
     * Gets the public 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['1_8d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65e']) ? $this->services['1_8d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65e'] : $this->get18d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65eService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['2_8d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65e']) ? $this->services['2_8d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65e'] : $this->get28d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65eService()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the public 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService()
    {
        return $this->services['console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand'] = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, array(0 => 'Symfony\\Component\\Security\\Core\\User\\User'));
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverruncommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerruncommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverruncommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand(($this->targetDirs[3].'/public'), 'dev');
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerstartcommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverstartcommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand(($this->targetDirs[3].'/public'), 'dev');
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerstatuscommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverstatuscommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand();
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerstopcommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverstopcommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand();
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(${($_ = isset($this->services['data_collector.form.extractor']) ? $this->services['data_collector.form.extractor'] : $this->get('data_collector.form.extractor')) && false ?: '_'});
    }

    /**
     * Gets the public 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the public 'data_collector.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the public 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the public 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->getArgumentResolver_RequestAttributeService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->getArgumentResolver_RequestService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->getArgumentResolver_SessionService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->getSecurity_UserValueResolverService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->getArgumentResolver_ServiceService()) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->getArgumentResolver_DefaultService()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->getArgumentResolver_VariadicService()) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->get('debug.argument_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->get('var_dumper.cloner')) && false ?: '_'}, ${($_ = isset($this->services['var_dumper.cli_dumper']) ? $this->services['var_dumper.cli_dumper'] : $this->get('var_dumper.cli_dumper')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->get('data_collector.router')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->get('response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->get('streamed_response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->get('validate_request_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->get('session_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->get('session.save_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->get('fragment.listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->get('security.rememberme.response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->get('twig.exception_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->get('sensio_framework_extra.controller.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->get('sensio_framework_extra.converter.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->get('sensio_framework_extra.security.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['httplug.strategy']) ? $this->services['httplug.strategy'] : $this->get('httplug.strategy')) && false ?: '_'};
        }, 1 => 'onEvent'), 1024);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['httplug.strategy']) ? $this->services['httplug.strategy'] : $this->get('httplug.strategy')) && false ?: '_'};
        }, 1 => 'onEvent'), 1024);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->get('debug.dump_listener')) && false ?: '_'};
        }, 1 => 'configure'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['web_profiler.debug_toolbar']) ? $this->services['web_profiler.debug_toolbar'] : $this->get('web_profiler.debug_toolbar')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -128);

        return $instance;
    }

    /**
     * Gets the public 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the public 'deprecated.form.registry' shared service.
     *
     * @return \stdClass
     *
     * @deprecated The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_RegistryService()
    {
        @trigger_error('The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'}, 5 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'}, 6 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'}, 7 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'deprecated.form.registry.csrf' shared service.
     *
     * @return \stdClass
     *
     * @deprecated The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_Registry_CsrfService()
    {
        @trigger_error('The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry.csrf'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->getForm_TypeExtension_CsrfService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(${($_ = isset($this->services['monolog.logger.doctrine']) ? $this->services['monolog.logger.doctrine'] : $this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $a->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->getDoctrine_Dbal_Logger_Profiling_DefaultService()) && false ?: '_'});

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.default_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] : $this->get('doctrine.orm.default_listeners.attach_entity_listeners')) && false ?: '_'});

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->get('doctrine.dbal.connection_factory')) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => 3306, 'dbname' => 'rastreiateca', 'user' => 'root', 'password' => 'm230889m', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $b, $c, array());
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}, array(0 => ($this->targetDirs[3].'/src/RtecaBundle/Entity'))), 'RtecaBundle\\Entity');

        $b = new \Doctrine\ORM\Configuration();
        $b->setEntityNamespaces(array('RtecaBundle' => 'RtecaBundle\\Entity'));
        $b->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache')) && false ?: '_'});
        $b->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_query_cache')) && false ?: '_'});
        $b->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_result_cache')) && false ?: '_'});
        $b->setMetadataDriverImpl($a);
        $b->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $b->setProxyNamespace('Proxies');
        $b->setAutoGenerateProxyClasses(true);
        $b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $b->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $b->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $b->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->get('doctrine.orm.default_entity_listener_resolver')) && false ?: '_'});

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->get('doctrine.dbal.default_connection')) && false ?: '_'}, $b);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->get('doctrine.orm.default_manager_configurator')) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}->getMetadataFactory());
    }

    /**
     * Gets the public 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the public 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the public 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_04cd3f37b9b6e23344295015b2a18e0c0337fef82bb3bc9410c8ad2af6e9c086');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_04cd3f37b9b6e23344295015b2a18e0c0337fef82bb3bc9410c8ad2af6e9c086');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_04cd3f37b9b6e23344295015b2a18e0c0337fef82bb3bc9410c8ad2af6e9c086');

        return $instance;
    }

    /**
     * Gets the public 'easy_deploy.command.deploy' shared service.
     *
     * @return \EasyCorp\Bundle\EasyDeployBundle\Command\DeployCommand
     */
    protected function getEasyDeploy_Command_DeployService()
    {
        return $this->services['easy_deploy.command.deploy'] = new \EasyCorp\Bundle\EasyDeployBundle\Command\DeployCommand(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'}, (($this->hasParameter("kernel.project_dir")) ? ($this->getParameter("kernel.project_dir")) : (($this->getParameter("kernel.root_dir") . "/.."))), ($this->targetDirs[2].'/logs'));
    }

    /**
     * Gets the public 'easy_deploy.command.rollback' shared service.
     *
     * @return \EasyCorp\Bundle\EasyDeployBundle\Command\RollbackCommand
     */
    protected function getEasyDeploy_Command_RollbackService()
    {
        return $this->services['easy_deploy.command.rollback'] = new \EasyCorp\Bundle\EasyDeployBundle\Command\RollbackCommand((($this->hasParameter("kernel.project_dir")) ? ($this->getParameter("kernel.project_dir")) : (($this->getParameter("kernel.root_dir") . "/.."))), ($this->targetDirs[2].'/logs'));
    }

    /**
     * Gets the public 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')));
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->get('form.registry')) && false ?: '_'}, ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Ivory\\GoogleMapBundle\\Form\\Type\\PlaceAutocompleteType' => function () {
            return ${($_ = isset($this->services['ivory.google_map.form.type.place_autocomplete']) ? $this->services['ivory.google_map.form.type.place_autocomplete'] : $this->get('ivory.google_map.form.type.place_autocomplete')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
            return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->get('form.type.entity')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
            return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
            return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'};
        })), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->getForm_TypeExtension_CsrfService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['form.type_extension.form.data_collector']) ? $this->services['form.type_extension.form.data_collector'] : $this->getForm_TypeExtension_Form_DataCollectorService()) && false ?: '_'};
        }, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'};
        }, 1)), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->get('form.type_guesser.doctrine')) && false ?: '_'};
        }, 2), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type.birthday' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the public 'form.type.button' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the public 'form.type.checkbox' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the public 'form.type.collection' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the public 'form.type.country' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the public 'form.type.currency' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the public 'form.type.date' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the public 'form.type.datetime' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the public 'form.type.email' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the public 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the public 'form.type.hidden' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the public 'form.type.integer' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the public 'form.type.language' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the public 'form.type.locale' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the public 'form.type.money' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the public 'form.type.number' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the public 'form.type.password' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the public 'form.type.percent' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the public 'form.type.radio' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the public 'form.type.range' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the public 'form.type.repeated' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the public 'form.type.reset' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the public 'form.type.search' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the public 'form.type.submit' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the public 'form.type.text' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the public 'form.type.textarea' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the public 'form.type.time' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the public 'form.type.timezone' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the public 'form.type.url' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the public 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        return $this->services['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(${($_ = isset($this->services['service_locator.e64d23c3bf770e2cf44b71643280668d']) ? $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] : $this->getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, '/_fragment');
    }

    /**
     * Gets the public 'fragment.renderer.esi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.hinclude' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.ssi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->get('debug.controller_resolver')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->get('debug.argument_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'httplug.async_client.default' shared service.
     *
     * @return \Http\Client\HttpAsyncClient
     */
    protected function getHttplug_AsyncClient_DefaultService()
    {
        return $this->services['httplug.async_client.default'] = \Http\Discovery\HttpAsyncClientDiscovery::find();
    }

    /**
     * Gets the public 'httplug.auto_discovery.auto_discovered_client' shared service.
     *
     * @return \Http\Client\Common\PluginClient
     */
    protected function getHttplug_AutoDiscovery_AutoDiscoveredClientService()
    {
        $a = ${($_ = isset($this->services['httplug.collector.collector']) ? $this->services['httplug.collector.collector'] : $this->getHttplug_Collector_CollectorService()) && false ?: '_'};

        $b = new \Http\Message\Formatter\FullHttpMessageFormatter(0);

        $c = new \Http\Message\Formatter\CurlCommandFormatter();

        $d = new \Http\HttplugBundle\Collector\Formatter($b, $c);

        return $this->services['httplug.auto_discovery.auto_discovered_client'] = new \Http\Client\Common\PluginClient(new \Http\HttplugBundle\Collector\ProfileClient(\Http\Discovery\HttpClientDiscovery::find(), $a, $d, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}), array(0 => new \Http\HttplugBundle\Collector\StackPlugin($a, $d, 'auto_discovered_client')));
    }

    /**
     * Gets the public 'httplug.client.default' shared service.
     *
     * @return \Http\Client\HttpClient
     */
    protected function getHttplug_Client_DefaultService()
    {
        return $this->services['httplug.client.default'] = \Http\Discovery\HttpClientDiscovery::find();
    }

    /**
     * Gets the public 'httplug.message_factory.default' shared service.
     *
     * @return \Http\Message\MessageFactory
     */
    protected function getHttplug_MessageFactory_DefaultService()
    {
        return $this->services['httplug.message_factory.default'] = \Http\Discovery\MessageFactoryDiscovery::find();
    }

    /**
     * Gets the public 'httplug.strategy' shared service.
     *
     * @return \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy
     */
    protected function getHttplug_StrategyService()
    {
        return $this->services['httplug.strategy'] = new \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy(${($_ = isset($this->services['httplug.auto_discovery.auto_discovered_client']) ? $this->services['httplug.auto_discovery.auto_discovered_client'] : $this->get('httplug.auto_discovery.auto_discovered_client', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'httplug.stream_factory.default' shared service.
     *
     * @return \Http\Message\StreamFactory
     */
    protected function getHttplug_StreamFactory_DefaultService()
    {
        return $this->services['httplug.stream_factory.default'] = \Http\Discovery\StreamFactoryDiscovery::find();
    }

    /**
     * Gets the public 'httplug.uri_factory.default' shared service.
     *
     * @return \Http\Message\UriFactory
     */
    protected function getHttplug_UriFactory_DefaultService()
    {
        return $this->services['httplug.uri_factory.default'] = \Http\Discovery\UriFactoryDiscovery::find();
    }

    /**
     * Gets the public 'ivory.google_map.form.type.place_autocomplete' shared service.
     *
     * @return \Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType
     */
    protected function getIvory_GoogleMap_Form_Type_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.form.type.place_autocomplete'] = new \Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType();
    }

    /**
     * Gets the public 'ivory.google_map.helper.api' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\ApiHelper
     */
    protected function getIvory_GoogleMap_Helper_ApiService()
    {
        return $this->services['ivory.google_map.helper.api'] = new \Ivory\GoogleMap\Helper\ApiHelper(${($_ = isset($this->services['ivory.google_map.helper.api.event_dispatcher']) ? $this->services['ivory.google_map.helper.api.event_dispatcher'] : $this->get('ivory.google_map.helper.api.event_dispatcher')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.api.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getIvory_GoogleMap_Helper_Api_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.api.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListener('api.javascript', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.api_javascript']) ? $this->services['ivory.google_map.helper.subscriber.api_javascript'] : $this->get('ivory.google_map.helper.subscriber.api_javascript')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('api.javascript.map', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.layer.heatmap']) ? $this->services['ivory.google_map.helper.subscriber.layer.heatmap'] : $this->get('ivory.google_map.helper.subscriber.layer.heatmap')) && false ?: '_'};
        }, 1 => 'handleApi'), 0);
        $instance->addListener('map.javascript.layer.heatmap_layer', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.layer.heatmap']) ? $this->services['ivory.google_map.helper.subscriber.layer.heatmap'] : $this->get('ivory.google_map.helper.subscriber.layer.heatmap')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('api.javascript.map', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.map_javascript']) ? $this->services['ivory.google_map.helper.subscriber.map_javascript'] : $this->get('ivory.google_map.helper.subscriber.map_javascript')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('map.javascript', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.map_javascript']) ? $this->services['ivory.google_map.helper.subscriber.map_javascript'] : $this->get('ivory.google_map.helper.subscriber.map_javascript')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('api.javascript.map', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline']) ? $this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline'] : $this->get('ivory.google_map.helper.subscriber.overlay.encoded_polyline')) && false ?: '_'};
        }, 1 => 'handleApi'), 0);
        $instance->addListener('map.javascript.overlay.encoded_polyline', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline']) ? $this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline'] : $this->get('ivory.google_map.helper.subscriber.overlay.encoded_polyline')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('api.javascript.map', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.info_box']) ? $this->services['ivory.google_map.helper.subscriber.overlay.info_box'] : $this->get('ivory.google_map.helper.subscriber.overlay.info_box')) && false ?: '_'};
        }, 1 => 'handleApi'), 0);
        $instance->addListener('map.javascript.overlay.info_window', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.info_box']) ? $this->services['ivory.google_map.helper.subscriber.overlay.info_box'] : $this->get('ivory.google_map.helper.subscriber.overlay.info_box')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('api.javascript.map', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer']) ? $this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer'] : $this->get('ivory.google_map.helper.subscriber.overlay.marker_clusterer')) && false ?: '_'};
        }, 1 => 'handleApi'), 0);
        $instance->addListener('map.javascript.overlay.marker_cluster', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer']) ? $this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer'] : $this->get('ivory.google_map.helper.subscriber.overlay.marker_clusterer')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('api.javascript.autocomplete', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete_javascript')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('place_autocomplete.javascript', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete_javascript')) && false ?: '_'};
        }, 1 => 'handle'), 0);

        return $instance;
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.base.bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\BoundCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.collector.base.bound'] = new \Ivory\GoogleMap\Helper\Collector\Base\BoundCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.ground_overlay']) ? $this->services['ivory.google_map.helper.collector.overlay.ground_overlay'] : $this->get('ivory.google_map.helper.collector.overlay.ground_overlay')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.rectangle']) ? $this->services['ivory.google_map.helper.collector.overlay.rectangle'] : $this->get('ivory.google_map.helper.collector.overlay.rectangle')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\CoordinateCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.collector.base.coordinate'] = new \Ivory\GoogleMap\Helper\Collector\Base\CoordinateCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.base.bound']) ? $this->services['ivory.google_map.helper.collector.base.bound'] : $this->get('ivory.google_map.helper.collector.base.bound')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.circle']) ? $this->services['ivory.google_map.helper.collector.overlay.circle'] : $this->get('ivory.google_map.helper.collector.overlay.circle')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.info_window']) ? $this->services['ivory.google_map.helper.collector.overlay.info_window'] : $this->get('ivory.google_map.helper.collector.overlay.info_window')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.marker']) ? $this->services['ivory.google_map.helper.collector.overlay.marker'] : $this->get('ivory.google_map.helper.collector.overlay.marker')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.polygon']) ? $this->services['ivory.google_map.helper.collector.overlay.polygon'] : $this->get('ivory.google_map.helper.collector.overlay.polygon')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.polyline']) ? $this->services['ivory.google_map.helper.collector.overlay.polyline'] : $this->get('ivory.google_map.helper.collector.overlay.polyline')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.layer.heatmap']) ? $this->services['ivory.google_map.helper.collector.layer.heatmap'] : $this->get('ivory.google_map.helper.collector.layer.heatmap')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.base.point' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\PointCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.collector.base.point'] = new \Ivory\GoogleMap\Helper\Collector\Base\PointCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.marker']) ? $this->services['ivory.google_map.helper.collector.overlay.marker'] : $this->get('ivory.google_map.helper.collector.overlay.marker')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.base.size' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\SizeCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.collector.base.size'] = new \Ivory\GoogleMap\Helper\Collector\Base\SizeCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.info_window']) ? $this->services['ivory.google_map.helper.collector.overlay.info_window'] : $this->get('ivory.google_map.helper.collector.overlay.info_window')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.icon']) ? $this->services['ivory.google_map.helper.collector.overlay.icon'] : $this->get('ivory.google_map.helper.collector.overlay.icon')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.control.custom' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Control\CustomControlCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.collector.control.custom'] = new \Ivory\GoogleMap\Helper\Collector\Control\CustomControlCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.event.dom_event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\DomEventCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.collector.event.dom_event'] = new \Ivory\GoogleMap\Helper\Collector\Event\DomEventCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.event.dom_event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\DomEventOnceCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Collector\Event\DomEventOnceCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.event.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\EventCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.collector.event.event'] = new \Ivory\GoogleMap\Helper\Collector\Event\EventCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.event.event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\EventOnceCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.event.event_once'] = new \Ivory\GoogleMap\Helper\Collector\Event\EventOnceCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.layer.geo_json' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Layer\GeoJsonLayerCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Collector\Layer\GeoJsonLayerCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.layer.heatmap' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.layer.kml' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Layer\KmlLayerCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.kml'] = new \Ivory\GoogleMap\Helper\Collector\Layer\KmlLayerCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.circle' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\CircleCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.circle'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\CircleCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.encoded_polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\EncodedPolylineCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\EncodedPolylineCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.extendable' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\ExtendableCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\ExtendableCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.ground_overlay' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\GroundOverlayCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\GroundOverlayCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.icon' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\IconCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.icon'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\IconCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.marker']) ? $this->services['ivory.google_map.helper.collector.overlay.marker'] : $this->get('ivory.google_map.helper.collector.overlay.marker')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.icon_sequence' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\IconSequenceCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\IconSequenceCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.polyline']) ? $this->services['ivory.google_map.helper.collector.overlay.polyline'] : $this->get('ivory.google_map.helper.collector.overlay.polyline')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.info_box' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\InfoBoxCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\InfoBoxCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.marker']) ? $this->services['ivory.google_map.helper.collector.overlay.marker'] : $this->get('ivory.google_map.helper.collector.overlay.marker')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.info_window' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\InfoWindowCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindowService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_window'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\InfoWindowCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.marker']) ? $this->services['ivory.google_map.helper.collector.overlay.marker'] : $this->get('ivory.google_map.helper.collector.overlay.marker')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.info_window.default' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\DefaultInfoWindowCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\DefaultInfoWindowCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.marker']) ? $this->services['ivory.google_map.helper.collector.overlay.marker'] : $this->get('ivory.google_map.helper.collector.overlay.marker')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.marker' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.marker'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.marker_shape' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerShapeCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerShapeCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.marker']) ? $this->services['ivory.google_map.helper.collector.overlay.marker'] : $this->get('ivory.google_map.helper.collector.overlay.marker')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.polygon' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\PolygonCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolygonCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.rectangle' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\RectangleCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\RectangleCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.symbol' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\SymbolCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\SymbolCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.marker']) ? $this->services['ivory.google_map.helper.collector.overlay.marker'] : $this->get('ivory.google_map.helper.collector.overlay.marker')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.icon_sequence']) ? $this->services['ivory.google_map.helper.collector.overlay.icon_sequence'] : $this->get('ivory.google_map.helper.collector.overlay.icon_sequence')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.place.autocomplete.base.bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteBoundCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.base.bound'] = new \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteBoundCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.place.autocomplete.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteCoordinateCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.base.coordinate'] = new \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteCoordinateCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.place.autocomplete.base.bound']) ? $this->services['ivory.google_map.helper.collector.place.autocomplete.base.bound'] : $this->get('ivory.google_map.helper.collector.place.autocomplete.base.bound')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.place.autocomplete.event.dom_event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventOnceCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventOnceCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.place.autocomplete.event.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.event'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.place.autocomplete.event.event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventOnceCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.event_once'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventOnceCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.static.encoded_polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\EncodedPolylineCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.static.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Collector\Image\EncodedPolylineCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.static.extendable' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\ExtendableCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.collector.static.extendable'] = new \Ivory\GoogleMap\Helper\Collector\Image\ExtendableCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.static.marker' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\MarkerCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_MarkerService()
    {
        return $this->services['ivory.google_map.helper.collector.static.marker'] = new \Ivory\GoogleMap\Helper\Collector\Image\MarkerCollector(${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.marker.style']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.marker.style'] : $this->get('ivory.google_map.helper.renderer.static.overlay.marker.style')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.static.polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\PolylineCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_PolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.static.polyline'] = new \Ivory\GoogleMap\Helper\Collector\Image\PolylineCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.formatter' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Formatter\Formatter
     */
    protected function getIvory_GoogleMap_Helper_FormatterService()
    {
        return $this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true);
    }

    /**
     * Gets the public 'ivory.google_map.helper.json_builder' shared service.
     *
     * @return \Ivory\JsonBuilder\JsonBuilder
     */
    protected function getIvory_GoogleMap_Helper_JsonBuilderService()
    {
        return $this->services['ivory.google_map.helper.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder();
    }

    /**
     * Gets the public 'ivory.google_map.helper.map' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\MapHelper
     */
    protected function getIvory_GoogleMap_Helper_MapService()
    {
        return $this->services['ivory.google_map.helper.map'] = new \Ivory\GoogleMap\Helper\MapHelper(${($_ = isset($this->services['ivory.google_map.helper.map.event_dispatcher']) ? $this->services['ivory.google_map.helper.map.event_dispatcher'] : $this->get('ivory.google_map.helper.map.event_dispatcher')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.map.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getIvory_GoogleMap_Helper_Map_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.map.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListener('map.javascript.base', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.base']) ? $this->services['ivory.google_map.helper.subscriber.base'] : $this->get('ivory.google_map.helper.subscriber.base')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('map.javascript.base.bound', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.base.bound']) ? $this->services['ivory.google_map.helper.subscriber.base.bound'] : $this->get('ivory.google_map.helper.subscriber.base.bound')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.base.coordinate', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.base.coordinate']) ? $this->services['ivory.google_map.helper.subscriber.base.coordinate'] : $this->get('ivory.google_map.helper.subscriber.base.coordinate')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.base.point', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.base.point']) ? $this->services['ivory.google_map.helper.subscriber.base.point'] : $this->get('ivory.google_map.helper.subscriber.base.point')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.base.size', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.base.size']) ? $this->services['ivory.google_map.helper.subscriber.base.size'] : $this->get('ivory.google_map.helper.subscriber.base.size')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.control', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.control']) ? $this->services['ivory.google_map.helper.subscriber.control'] : $this->get('ivory.google_map.helper.subscriber.control')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('map.javascript.control.custom', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.control.custom']) ? $this->services['ivory.google_map.helper.subscriber.control.custom'] : $this->get('ivory.google_map.helper.subscriber.control.custom')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.event', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.event']) ? $this->services['ivory.google_map.helper.subscriber.event'] : $this->get('ivory.google_map.helper.subscriber.event')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('map.javascript.event.dom_event', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.event.dom_event']) ? $this->services['ivory.google_map.helper.subscriber.event.dom_event'] : $this->get('ivory.google_map.helper.subscriber.event.dom_event')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.event.dom_event_once', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.event.dom_event_once']) ? $this->services['ivory.google_map.helper.subscriber.event.dom_event_once'] : $this->get('ivory.google_map.helper.subscriber.event.dom_event_once')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.event.event', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.event.event']) ? $this->services['ivory.google_map.helper.subscriber.event.event'] : $this->get('ivory.google_map.helper.subscriber.event.event')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.event.event_once', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.event.event_once']) ? $this->services['ivory.google_map.helper.subscriber.event.event_once'] : $this->get('ivory.google_map.helper.subscriber.event.event_once')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.layer', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.layer']) ? $this->services['ivory.google_map.helper.subscriber.layer'] : $this->get('ivory.google_map.helper.subscriber.layer')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('map.javascript.layer.geo_json_layer', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.layer.geo_json']) ? $this->services['ivory.google_map.helper.subscriber.layer.geo_json'] : $this->get('ivory.google_map.helper.subscriber.layer.geo_json')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('api.javascript.map', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.layer.heatmap']) ? $this->services['ivory.google_map.helper.subscriber.layer.heatmap'] : $this->get('ivory.google_map.helper.subscriber.layer.heatmap')) && false ?: '_'};
        }, 1 => 'handleApi'), 0);
        $instance->addListener('map.javascript.layer.heatmap_layer', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.layer.heatmap']) ? $this->services['ivory.google_map.helper.subscriber.layer.heatmap'] : $this->get('ivory.google_map.helper.subscriber.layer.heatmap')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.layer.kml_layer', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.layer.kml']) ? $this->services['ivory.google_map.helper.subscriber.layer.kml'] : $this->get('ivory.google_map.helper.subscriber.layer.kml')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.map', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.map']) ? $this->services['ivory.google_map.helper.subscriber.map'] : $this->get('ivory.google_map.helper.subscriber.map')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.finish', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.map_bound']) ? $this->services['ivory.google_map.helper.subscriber.map_bound'] : $this->get('ivory.google_map.helper.subscriber.map_bound')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.finish', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.map_center']) ? $this->services['ivory.google_map.helper.subscriber.map_center'] : $this->get('ivory.google_map.helper.subscriber.map_center')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.init.container', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.map_container']) ? $this->services['ivory.google_map.helper.subscriber.map_container'] : $this->get('ivory.google_map.helper.subscriber.map_container')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.html', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.map_html']) ? $this->services['ivory.google_map.helper.subscriber.map_html'] : $this->get('ivory.google_map.helper.subscriber.map_html')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.init', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.map_init']) ? $this->services['ivory.google_map.helper.subscriber.map_init'] : $this->get('ivory.google_map.helper.subscriber.map_init')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('api.javascript.map', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.map_javascript']) ? $this->services['ivory.google_map.helper.subscriber.map_javascript'] : $this->get('ivory.google_map.helper.subscriber.map_javascript')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('map.javascript', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.map_javascript']) ? $this->services['ivory.google_map.helper.subscriber.map_javascript'] : $this->get('ivory.google_map.helper.subscriber.map_javascript')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('map.stylesheet', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.map_stylehseet']) ? $this->services['ivory.google_map.helper.subscriber.map_stylehseet'] : $this->get('ivory.google_map.helper.subscriber.map_stylehseet')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.overlay', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay']) ? $this->services['ivory.google_map.helper.subscriber.overlay'] : $this->get('ivory.google_map.helper.subscriber.overlay')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('map.javascript.overlay.circle', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.circle']) ? $this->services['ivory.google_map.helper.subscriber.overlay.circle'] : $this->get('ivory.google_map.helper.subscriber.overlay.circle')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('api.javascript.map', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline']) ? $this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline'] : $this->get('ivory.google_map.helper.subscriber.overlay.encoded_polyline')) && false ?: '_'};
        }, 1 => 'handleApi'), 0);
        $instance->addListener('map.javascript.overlay.encoded_polyline', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline']) ? $this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline'] : $this->get('ivory.google_map.helper.subscriber.overlay.encoded_polyline')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.finish', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.extendable']) ? $this->services['ivory.google_map.helper.subscriber.overlay.extendable'] : $this->get('ivory.google_map.helper.subscriber.overlay.extendable')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.overlay.ground_overlay', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.ground_overlay']) ? $this->services['ivory.google_map.helper.subscriber.overlay.ground_overlay'] : $this->get('ivory.google_map.helper.subscriber.overlay.ground_overlay')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.overlay.icon', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.icon']) ? $this->services['ivory.google_map.helper.subscriber.overlay.icon'] : $this->get('ivory.google_map.helper.subscriber.overlay.icon')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.overlay.icon_sequence', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.icon_sequence']) ? $this->services['ivory.google_map.helper.subscriber.overlay.icon_sequence'] : $this->get('ivory.google_map.helper.subscriber.overlay.icon_sequence')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('api.javascript.map', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.info_box']) ? $this->services['ivory.google_map.helper.subscriber.overlay.info_box'] : $this->get('ivory.google_map.helper.subscriber.overlay.info_box')) && false ?: '_'};
        }, 1 => 'handleApi'), 0);
        $instance->addListener('map.javascript.overlay.info_window', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.info_box']) ? $this->services['ivory.google_map.helper.subscriber.overlay.info_box'] : $this->get('ivory.google_map.helper.subscriber.overlay.info_box')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.init.function', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.info_window.close']) ? $this->services['ivory.google_map.helper.subscriber.overlay.info_window.close'] : $this->get('ivory.google_map.helper.subscriber.overlay.info_window.close')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.finish', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.info_window.open']) ? $this->services['ivory.google_map.helper.subscriber.overlay.info_window.open'] : $this->get('ivory.google_map.helper.subscriber.overlay.info_window.open')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.overlay.info_window', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.info_window.default']) ? $this->services['ivory.google_map.helper.subscriber.overlay.info_window.default'] : $this->get('ivory.google_map.helper.subscriber.overlay.info_window.default')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.overlay.marker', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.marker']) ? $this->services['ivory.google_map.helper.subscriber.overlay.marker'] : $this->get('ivory.google_map.helper.subscriber.overlay.marker')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('api.javascript.map', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer']) ? $this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer'] : $this->get('ivory.google_map.helper.subscriber.overlay.marker_clusterer')) && false ?: '_'};
        }, 1 => 'handleApi'), 0);
        $instance->addListener('map.javascript.overlay.marker_cluster', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer']) ? $this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer'] : $this->get('ivory.google_map.helper.subscriber.overlay.marker_clusterer')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.overlay.marker_shape', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.marker_shape']) ? $this->services['ivory.google_map.helper.subscriber.overlay.marker_shape'] : $this->get('ivory.google_map.helper.subscriber.overlay.marker_shape')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.event', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.marker.info_window.open']) ? $this->services['ivory.google_map.helper.subscriber.overlay.marker.info_window.open'] : $this->get('ivory.google_map.helper.subscriber.overlay.marker.info_window.open')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.overlay.polygon', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.polygon']) ? $this->services['ivory.google_map.helper.subscriber.overlay.polygon'] : $this->get('ivory.google_map.helper.subscriber.overlay.polygon')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.overlay.polyline', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.polyline']) ? $this->services['ivory.google_map.helper.subscriber.overlay.polyline'] : $this->get('ivory.google_map.helper.subscriber.overlay.polyline')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.overlay.rectangle', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.rectangle']) ? $this->services['ivory.google_map.helper.subscriber.overlay.rectangle'] : $this->get('ivory.google_map.helper.subscriber.overlay.rectangle')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.overlay.symbol', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.overlay.symbol']) ? $this->services['ivory.google_map.helper.subscriber.overlay.symbol'] : $this->get('ivory.google_map.helper.subscriber.overlay.symbol')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.javascript.init.function', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.utility.object_to_array']) ? $this->services['ivory.google_map.helper.subscriber.utility.object_to_array'] : $this->get('ivory.google_map.helper.subscriber.utility.object_to_array')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);

        return $instance;
    }

    /**
     * Gets the public 'ivory.google_map.helper.map.static' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\StaticMapHelper
     */
    protected function getIvory_GoogleMap_Helper_Map_StaticService()
    {
        return $this->services['ivory.google_map.helper.map.static'] = new \Ivory\GoogleMap\Helper\StaticMapHelper(${($_ = isset($this->services['ivory.google_map.helper.map.static.event_dispatcher']) ? $this->services['ivory.google_map.helper.map.static.event_dispatcher'] : $this->get('ivory.google_map.helper.map.static.event_dispatcher')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.map.static.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getIvory_GoogleMap_Helper_Map_Static_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.map.static.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListener('map.static', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.static']) ? $this->services['ivory.google_map.helper.subscriber.static'] : $this->get('ivory.google_map.helper.subscriber.static')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('map.static.center', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.static.center']) ? $this->services['ivory.google_map.helper.subscriber.static.center'] : $this->get('ivory.google_map.helper.subscriber.static.center')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.static.encoded_polyline', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.static.encoded_polyline']) ? $this->services['ivory.google_map.helper.subscriber.static.encoded_polyline'] : $this->get('ivory.google_map.helper.subscriber.static.encoded_polyline')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.static.extendable', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.static.extendable']) ? $this->services['ivory.google_map.helper.subscriber.static.extendable'] : $this->get('ivory.google_map.helper.subscriber.static.extendable')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.static.format', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.static.format']) ? $this->services['ivory.google_map.helper.subscriber.static.format'] : $this->get('ivory.google_map.helper.subscriber.static.format')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.static.key', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.static.key']) ? $this->services['ivory.google_map.helper.subscriber.static.key'] : $this->get('ivory.google_map.helper.subscriber.static.key')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.static.marker', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.static.marker']) ? $this->services['ivory.google_map.helper.subscriber.static.marker'] : $this->get('ivory.google_map.helper.subscriber.static.marker')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.static.polyline', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.static.polyline']) ? $this->services['ivory.google_map.helper.subscriber.static.polyline'] : $this->get('ivory.google_map.helper.subscriber.static.polyline')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.static.scale', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.static.scale']) ? $this->services['ivory.google_map.helper.subscriber.static.scale'] : $this->get('ivory.google_map.helper.subscriber.static.scale')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.static.size', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.static.size']) ? $this->services['ivory.google_map.helper.subscriber.static.size'] : $this->get('ivory.google_map.helper.subscriber.static.size')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.static.type', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.static.type']) ? $this->services['ivory.google_map.helper.subscriber.static.type'] : $this->get('ivory.google_map.helper.subscriber.static.type')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);
        $instance->addListener('map.static.zoom', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.static.zoom']) ? $this->services['ivory.google_map.helper.subscriber.static.zoom'] : $this->get('ivory.google_map.helper.subscriber.static.zoom')) && false ?: '_'};
        }, 1 => 'handleMap'), 0);

        return $instance;
    }

    /**
     * Gets the public 'ivory.google_map.helper.place_autocomplete' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\PlaceAutocompleteHelper
     */
    protected function getIvory_GoogleMap_Helper_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.helper.place_autocomplete'] = new \Ivory\GoogleMap\Helper\PlaceAutocompleteHelper(${($_ = isset($this->services['ivory.google_map.helper.place_autocomplete.event_dispatcher']) ? $this->services['ivory.google_map.helper.place_autocomplete.event_dispatcher'] : $this->get('ivory.google_map.helper.place_autocomplete.event_dispatcher')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.place_autocomplete.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getIvory_GoogleMap_Helper_PlaceAutocomplete_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.place_autocomplete.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListener('place_autocomplete.javascript.autocomplete', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete')) && false ?: '_'};
        }, 1 => 'handleAutocomplete'), 0);
        $instance->addListener('place_autocomplete.javascript.init.container', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete_container']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete_container'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete_container')) && false ?: '_'};
        }, 1 => 'handleAutocomplete'), 0);
        $instance->addListener('place_autocomplete.renderHtml', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete_html']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete_html'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete_html')) && false ?: '_'};
        }, 1 => 'handleAutocomplete'), 0);
        $instance->addListener('place_autocomplete.javascript.init', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete_init']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete_init'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete_init')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('api.javascript.autocomplete', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete_javascript')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('place_autocomplete.javascript', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete_javascript')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('place_autocomplete.javascript.base', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete.base']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete.base')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('place_autocomplete.javascript.base.bound', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.bound']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.bound'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete.base.bound')) && false ?: '_'};
        }, 1 => 'handleAutocomplete'), 0);
        $instance->addListener('place_autocomplete.javascript.base.coordinate', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate')) && false ?: '_'};
        }, 1 => 'handleAutocomplete'), 0);
        $instance->addListener('place_autocomplete.javascript.event', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete.event']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete.event')) && false ?: '_'};
        }, 1 => 'handle'), 0);
        $instance->addListener('place_autocomplete.javascript.event.dom_event', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event')) && false ?: '_'};
        }, 1 => 'handleAutocomplete'), 0);
        $instance->addListener('place_autocomplete.javascript.event.dom_event_once', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once')) && false ?: '_'};
        }, 1 => 'handleAutocomplete'), 0);
        $instance->addListener('place_autocomplete.javascript.event.event', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete.event.event')) && false ?: '_'};
        }, 1 => 'handleAutocomplete'), 0);
        $instance->addListener('place_autocomplete.javascript.event.event_once', array(0 => function () {
            return ${($_ = isset($this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event_once']) ? $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event_once'] : $this->get('ivory.google_map.helper.subscriber.place.autocomplete.event.event_once')) && false ?: '_'};
        }, 1 => 'handleAutocomplete'), 0);

        return $instance;
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.api' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\ApiRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_ApiService()
    {
        return $this->services['ivory.google_map.helper.renderer.api'] = new \Ivory\GoogleMap\Helper\Renderer\ApiRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.api_init']) ? $this->services['ivory.google_map.helper.renderer.api_init'] : $this->get('ivory.google_map.helper.renderer.api_init')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.loader']) ? $this->services['ivory.google_map.helper.renderer.loader'] : $this->get('ivory.google_map.helper.renderer.loader')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.utility.requirement_loader']) ? $this->services['ivory.google_map.helper.renderer.utility.requirement_loader'] : $this->get('ivory.google_map.helper.renderer.utility.requirement_loader')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.utility.source']) ? $this->services['ivory.google_map.helper.renderer.utility.source'] : $this->get('ivory.google_map.helper.renderer.utility.source')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.api_init' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\ApiInitRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_ApiInitService()
    {
        return $this->services['ivory.google_map.helper.renderer.api_init'] = new \Ivory\GoogleMap\Helper\Renderer\ApiInitRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.base.bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\BoundRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.bound'] = new \Ivory\GoogleMap\Helper\Renderer\Base\BoundRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\CoordinateRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.coordinate'] = new \Ivory\GoogleMap\Helper\Renderer\Base\CoordinateRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.base.point' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\PointRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.point'] = new \Ivory\GoogleMap\Helper\Renderer\Base\PointRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.base.size' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\SizeRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.size'] = new \Ivory\GoogleMap\Helper\Renderer\Base\SizeRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.custom' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\CustomControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.custom'] = new \Ivory\GoogleMap\Helper\Renderer\Control\CustomControlRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.position']) ? $this->services['ivory.google_map.helper.renderer.control.position'] : $this->get('ivory.google_map.helper.renderer.control.position')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.fullscreen' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\FullscreenControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_FullscreenService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.fullscreen'] = new \Ivory\GoogleMap\Helper\Renderer\Control\FullscreenControlRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.position']) ? $this->services['ivory.google_map.helper.renderer.control.position'] : $this->get('ivory.google_map.helper.renderer.control.position')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.manager' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ControlManagerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ManagerService()
    {
        $this->services['ivory.google_map.helper.renderer.control.manager'] = $instance = new \Ivory\GoogleMap\Helper\Renderer\Control\ControlManagerRenderer();

        $instance->addRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.control.fullscreen']) ? $this->services['ivory.google_map.helper.renderer.control.fullscreen'] : $this->get('ivory.google_map.helper.renderer.control.fullscreen')) && false ?: '_'});
        $instance->addRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.control.map_type']) ? $this->services['ivory.google_map.helper.renderer.control.map_type'] : $this->get('ivory.google_map.helper.renderer.control.map_type')) && false ?: '_'});
        $instance->addRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.control.rotate']) ? $this->services['ivory.google_map.helper.renderer.control.rotate'] : $this->get('ivory.google_map.helper.renderer.control.rotate')) && false ?: '_'});
        $instance->addRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.control.scale']) ? $this->services['ivory.google_map.helper.renderer.control.scale'] : $this->get('ivory.google_map.helper.renderer.control.scale')) && false ?: '_'});
        $instance->addRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.control.street_view']) ? $this->services['ivory.google_map.helper.renderer.control.street_view'] : $this->get('ivory.google_map.helper.renderer.control.street_view')) && false ?: '_'});
        $instance->addRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.control.zoom']) ? $this->services['ivory.google_map.helper.renderer.control.zoom'] : $this->get('ivory.google_map.helper.renderer.control.zoom')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.map_type' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_MapTypeService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.map_type'] = new \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.map_type_id']) ? $this->services['ivory.google_map.helper.renderer.map_type_id'] : $this->get('ivory.google_map.helper.renderer.map_type_id')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.position']) ? $this->services['ivory.google_map.helper.renderer.control.position'] : $this->get('ivory.google_map.helper.renderer.control.position')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.map_type_style']) ? $this->services['ivory.google_map.helper.renderer.control.map_type_style'] : $this->get('ivory.google_map.helper.renderer.control.map_type_style')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.map_type_style' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlStyleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_MapTypeStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.map_type_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlStyleRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.position' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ControlPositionRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_PositionService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.position'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ControlPositionRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.rotate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\RotateControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_RotateService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.rotate'] = new \Ivory\GoogleMap\Helper\Renderer\Control\RotateControlRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.position']) ? $this->services['ivory.google_map.helper.renderer.control.position'] : $this->get('ivory.google_map.helper.renderer.control.position')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.scale' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ScaleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.scale'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.position']) ? $this->services['ivory.google_map.helper.renderer.control.position'] : $this->get('ivory.google_map.helper.renderer.control.position')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.scale_style']) ? $this->services['ivory.google_map.helper.renderer.control.scale_style'] : $this->get('ivory.google_map.helper.renderer.control.scale_style')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.scale_style' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlStyleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ScaleStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.scale_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlStyleRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.street_view' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\StreetViewControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_StreetViewService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.street_view'] = new \Ivory\GoogleMap\Helper\Renderer\Control\StreetViewControlRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.position']) ? $this->services['ivory.google_map.helper.renderer.control.position'] : $this->get('ivory.google_map.helper.renderer.control.position')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.zoom' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ZoomService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.zoom'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.position']) ? $this->services['ivory.google_map.helper.renderer.control.position'] : $this->get('ivory.google_map.helper.renderer.control.position')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.zoom_style']) ? $this->services['ivory.google_map.helper.renderer.control.zoom_style'] : $this->get('ivory.google_map.helper.renderer.control.zoom_style')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.zoom_style' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlStyleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ZoomStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.zoom_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlStyleRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.event.dom_event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\DomEventRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.dom_event'] = new \Ivory\GoogleMap\Helper\Renderer\Event\DomEventRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.event.dom_event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\DomEventOnceRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Renderer\Event\DomEventOnceRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.event.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\EventRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.event'] = new \Ivory\GoogleMap\Helper\Renderer\Event\EventRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.event.event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\EventOnceRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.event_once'] = new \Ivory\GoogleMap\Helper\Renderer\Event\EventOnceRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.geometry.encoding' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Geometry\EncodingRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Geometry_EncodingService()
    {
        return $this->services['ivory.google_map.helper.renderer.geometry.encoding'] = new \Ivory\GoogleMap\Helper\Renderer\Geometry\EncodingRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.html.javascript_tag' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\JavascriptTagRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_JavascriptTagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.javascript_tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\JavascriptTagRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.tag']) ? $this->services['ivory.google_map.helper.renderer.html.tag'] : $this->get('ivory.google_map.helper.renderer.html.tag')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.html.stylesheet' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_StylesheetService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.stylesheet'] = new \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.html.stylesheet_tag' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetTagRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_StylesheetTagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.stylesheet_tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetTagRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.tag']) ? $this->services['ivory.google_map.helper.renderer.html.tag'] : $this->get('ivory.google_map.helper.renderer.html.tag')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.stylesheet']) ? $this->services['ivory.google_map.helper.renderer.html.stylesheet'] : $this->get('ivory.google_map.helper.renderer.html.stylesheet')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.html.tag' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\TagRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_TagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\TagRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.layer.geo_json' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Layer\GeoJsonLayerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\GeoJsonLayerRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.layer.heatmap' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Layer\HeatmapLayerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\HeatmapLayerRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.layer.kml' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Layer\KmlLayerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.kml'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\KmlLayerRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.loader' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\LoaderRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_LoaderService()
    {
        return $this->services['ivory.google_map.helper.renderer.loader'] = new \Ivory\GoogleMap\Helper\Renderer\LoaderRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, 'en');
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.map' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapService()
    {
        return $this->services['ivory.google_map.helper.renderer.map'] = new \Ivory\GoogleMap\Helper\Renderer\MapRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.map_type_id']) ? $this->services['ivory.google_map.helper.renderer.map_type_id'] : $this->get('ivory.google_map.helper.renderer.map_type_id')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.manager']) ? $this->services['ivory.google_map.helper.renderer.control.manager'] : $this->get('ivory.google_map.helper.renderer.control.manager')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.utility.requirement']) ? $this->services['ivory.google_map.helper.renderer.utility.requirement'] : $this->get('ivory.google_map.helper.renderer.utility.requirement')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.map_bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapBoundRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapBoundService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_bound'] = new \Ivory\GoogleMap\Helper\Renderer\MapBoundRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.map_center' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapCenterRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapCenterService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_center'] = new \Ivory\GoogleMap\Helper\Renderer\MapCenterRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.map_container' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapContainerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapContainerService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_container'] = new \Ivory\GoogleMap\Helper\Renderer\MapContainerRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.map_html' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapHtmlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapHtmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_html'] = new \Ivory\GoogleMap\Helper\Renderer\MapHtmlRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.tag']) ? $this->services['ivory.google_map.helper.renderer.html.tag'] : $this->get('ivory.google_map.helper.renderer.html.tag')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.stylesheet']) ? $this->services['ivory.google_map.helper.renderer.html.stylesheet'] : $this->get('ivory.google_map.helper.renderer.html.stylesheet')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.map_type_id' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapTypeIdRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapTypeIdService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_type_id'] = new \Ivory\GoogleMap\Helper\Renderer\MapTypeIdRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.animation' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\AnimationRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_AnimationService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.animation'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\AnimationRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.circle' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\CircleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.circle'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\CircleRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.encoded_polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\EncodedPolylineRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\EncodedPolylineRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.geometry.encoding']) ? $this->services['ivory.google_map.helper.renderer.geometry.encoding'] : $this->get('ivory.google_map.helper.renderer.geometry.encoding')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.extendable' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\ExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_ExtendableService()
    {
        $a = ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.extendable.path']) ? $this->services['ivory.google_map.helper.renderer.overlay.extendable.path'] : $this->get('ivory.google_map.helper.renderer.overlay.extendable.path')) && false ?: '_'};
        $b = ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.extendable.position']) ? $this->services['ivory.google_map.helper.renderer.overlay.extendable.position'] : $this->get('ivory.google_map.helper.renderer.overlay.extendable.position')) && false ?: '_'};
        $c = ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.extendable.bounds']) ? $this->services['ivory.google_map.helper.renderer.overlay.extendable.bounds'] : $this->get('ivory.google_map.helper.renderer.overlay.extendable.bounds')) && false ?: '_'};

        $this->services['ivory.google_map.helper.renderer.overlay.extendable'] = $instance = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\ExtendableRenderer();

        $instance->setRenderer('Ivory\\GoogleMap\\Layer\\KmlLayer', ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.extendable.default_viewport']) ? $this->services['ivory.google_map.helper.renderer.overlay.extendable.default_viewport'] : $this->get('ivory.google_map.helper.renderer.overlay.extendable.default_viewport')) && false ?: '_'});
        $instance->setRenderer('Ivory\\GoogleMap\\Layer\\HeatmapLayer', ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer']) ? $this->services['ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer'] : $this->get('ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer')) && false ?: '_'});
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\EncodedPolyline', $a);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Polyline', $a);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Polygon', $a);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\InfoWindow', $b);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Marker', $b);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Circle', $c);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\GroundOverlay', $c);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Rectangle', $c);

        return $instance;
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.extendable.bounds' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\BoundsExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_BoundsService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.bounds'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\BoundsExtendableRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.extendable.default_viewport' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\DefaultViewportExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_DefaultViewportService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.default_viewport'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\DefaultViewportExtendableRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\HeatmapLayerExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_HeatmapLayerService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\HeatmapLayerExtendableRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.extendable.path' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PathExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PathService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.path'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PathExtendableRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.extendable.position' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PositionExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PositionService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.position'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PositionExtendableRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.ground_overlay' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\GroundOverlayRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\GroundOverlayRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.icon' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\IconRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.icon'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\IconRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.icon_sequence' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\IconSequenceRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\IconSequenceRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.info_box' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoBoxRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoBoxRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.utility.requirement']) ? $this->services['ivory.google_map.helper.renderer.utility.requirement'] : $this->get('ivory.google_map.helper.renderer.utility.requirement')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.info_window.close' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowCloseRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_CloseService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.close'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowCloseRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.info_window.default' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\DefaultInfoWindowRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\DefaultInfoWindowRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.info_window.open' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowOpenRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.open'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowOpenRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.marker' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.animation']) ? $this->services['ivory.google_map.helper.renderer.overlay.animation'] : $this->get('ivory.google_map.helper.renderer.overlay.animation')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.marker_clusterer' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerClustererRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerClustererService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker_clusterer'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerClustererRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.utility.requirement']) ? $this->services['ivory.google_map.helper.renderer.utility.requirement'] : $this->get('ivory.google_map.helper.renderer.utility.requirement')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.marker_shape' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerShapeRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerShapeRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.polygon' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\PolygonRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\PolygonRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\PolylineRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\PolylineRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.rectangle' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\RectangleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\RectangleRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.symbol' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.symbol_path']) ? $this->services['ivory.google_map.helper.renderer.overlay.symbol_path'] : $this->get('ivory.google_map.helper.renderer.overlay.symbol_path')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.symbol_path' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolPathRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolPathService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.symbol_path'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolPathRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.place.autocomplete' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.utility.requirement']) ? $this->services['ivory.google_map.helper.renderer.utility.requirement'] : $this->get('ivory.google_map.helper.renderer.utility.requirement')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.place.autocomplete_container' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteContainerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteContainerService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete_container'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteContainerRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : $this->get('ivory.google_map.helper.json_builder')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.tag']) ? $this->services['ivory.google_map.helper.renderer.html.tag'] : $this->get('ivory.google_map.helper.renderer.html.tag')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.place.autocomplete_html' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteHtmlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteHtmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete_html'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteHtmlRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.tag']) ? $this->services['ivory.google_map.helper.renderer.html.tag'] : $this->get('ivory.google_map.helper.renderer.html.tag')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Base\CoordinateRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.base.coordinate'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Base\CoordinateRenderer();
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.base.point' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Base\PointRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.base.point'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Base\PointRenderer();
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.encoded_polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style'] : $this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value'] : $this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineStyleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineStyleRenderer();
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineValueRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_ValueService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineValueRenderer();
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.extendable' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\ExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\ExtendableRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.static.base.coordinate']) ? $this->services['ivory.google_map.helper.renderer.static.base.coordinate'] : $this->get('ivory.google_map.helper.renderer.static.base.coordinate')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.marker.location']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.marker.location'] : $this->get('ivory.google_map.helper.renderer.static.overlay.marker.location')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.polyline.location']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.location'] : $this->get('ivory.google_map.helper.renderer.static.overlay.polyline.location')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.marker' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.marker.style']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.marker.style'] : $this->get('ivory.google_map.helper.renderer.static.overlay.marker.style')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.marker.location']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.marker.location'] : $this->get('ivory.google_map.helper.renderer.static.overlay.marker.location')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.marker.location' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerLocationRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_LocationService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker.location'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerLocationRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.static.base.coordinate']) ? $this->services['ivory.google_map.helper.renderer.static.base.coordinate'] : $this->get('ivory.google_map.helper.renderer.static.base.coordinate')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.marker.style' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerStyleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerStyleRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.static.base.point']) ? $this->services['ivory.google_map.helper.renderer.static.base.point'] : $this->get('ivory.google_map.helper.renderer.static.base.point')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.polyline.style']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.style'] : $this->get('ivory.google_map.helper.renderer.static.overlay.polyline.style')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.polyline.location']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.location'] : $this->get('ivory.google_map.helper.renderer.static.overlay.polyline.location')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.polyline.location' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineLocationRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_LocationService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.location'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineLocationRenderer(${($_ = isset($this->services['ivory.google_map.helper.renderer.static.base.coordinate']) ? $this->services['ivory.google_map.helper.renderer.static.base.coordinate'] : $this->get('ivory.google_map.helper.renderer.static.base.coordinate')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.polyline.style' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineStyleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineStyleRenderer();
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.size' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\SizeRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_SizeService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.size'] = new \Ivory\GoogleMap\Helper\Renderer\Image\SizeRenderer();
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.utility.callback' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\CallbackRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_CallbackService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.callback'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\CallbackRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.utility.object_to_array' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\ObjectToArrayRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_ObjectToArrayService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.object_to_array'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\ObjectToArrayRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.utility.requirement' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_RequirementService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.requirement'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.utility.requirement_loader' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementLoaderRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_RequirementLoaderService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.requirement_loader'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementLoaderRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.utility.source' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\SourceRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_SourceService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.source'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\SourceRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.api_javascript' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\ApiJavascriptSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_ApiJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.api_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\ApiJavascriptSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.api']) ? $this->services['ivory.google_map.helper.renderer.api'] : $this->get('ivory.google_map.helper.renderer.api')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.javascript_tag']) ? $this->services['ivory.google_map.helper.renderer.html.javascript_tag'] : $this->get('ivory.google_map.helper.renderer.html.javascript_tag')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.base' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\BaseSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_BaseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\BaseSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.base.bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\BoundSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.bound'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\BoundSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.base.bound']) ? $this->services['ivory.google_map.helper.collector.base.bound'] : $this->get('ivory.google_map.helper.collector.base.bound')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.base.bound']) ? $this->services['ivory.google_map.helper.renderer.base.bound'] : $this->get('ivory.google_map.helper.renderer.base.bound')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.coordinate'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.base.coordinate']) ? $this->services['ivory.google_map.helper.collector.base.coordinate'] : $this->get('ivory.google_map.helper.collector.base.coordinate')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.base.coordinate']) ? $this->services['ivory.google_map.helper.renderer.base.coordinate'] : $this->get('ivory.google_map.helper.renderer.base.coordinate')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.base.point' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\PointSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.point'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\PointSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.base.point']) ? $this->services['ivory.google_map.helper.collector.base.point'] : $this->get('ivory.google_map.helper.collector.base.point')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.base.point']) ? $this->services['ivory.google_map.helper.renderer.base.point'] : $this->get('ivory.google_map.helper.renderer.base.point')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.base.size' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\SizeSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.size'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\SizeSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.base.size']) ? $this->services['ivory.google_map.helper.collector.base.size'] : $this->get('ivory.google_map.helper.collector.base.size')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.base.size']) ? $this->services['ivory.google_map.helper.renderer.base.size'] : $this->get('ivory.google_map.helper.renderer.base.size')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.control' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Control\ControlSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_ControlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.control'] = new \Ivory\GoogleMap\Helper\Subscriber\Control\ControlSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.control.custom' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Control\CustomControlSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.subscriber.control.custom'] = new \Ivory\GoogleMap\Helper\Subscriber\Control\CustomControlSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.control.custom']) ? $this->services['ivory.google_map.helper.collector.control.custom'] : $this->get('ivory.google_map.helper.collector.control.custom')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.custom']) ? $this->services['ivory.google_map.helper.renderer.control.custom'] : $this->get('ivory.google_map.helper.renderer.control.custom')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\EventSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\EventSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.event.dom_event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.dom_event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.event.dom_event']) ? $this->services['ivory.google_map.helper.collector.event.dom_event'] : $this->get('ivory.google_map.helper.collector.event.dom_event')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.event.dom_event']) ? $this->services['ivory.google_map.helper.renderer.event.dom_event'] : $this->get('ivory.google_map.helper.renderer.event.dom_event')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.event.dom_event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventOnceSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventOnceSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.event.dom_event_once']) ? $this->services['ivory.google_map.helper.collector.event.dom_event_once'] : $this->get('ivory.google_map.helper.collector.event.dom_event_once')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.event.dom_event_once']) ? $this->services['ivory.google_map.helper.renderer.event.dom_event_once'] : $this->get('ivory.google_map.helper.renderer.event.dom_event_once')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.event.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\SimpleEventSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\SimpleEventSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.event.event']) ? $this->services['ivory.google_map.helper.collector.event.event'] : $this->get('ivory.google_map.helper.collector.event.event')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.event.event']) ? $this->services['ivory.google_map.helper.renderer.event.event'] : $this->get('ivory.google_map.helper.renderer.event.event')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.event.event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\EventOnceSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\EventOnceSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.event.event_once']) ? $this->services['ivory.google_map.helper.collector.event.event_once'] : $this->get('ivory.google_map.helper.collector.event.event_once')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.event.event_once']) ? $this->services['ivory.google_map.helper.renderer.event.event_once'] : $this->get('ivory.google_map.helper.renderer.event.event_once')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.layer' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\LayerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_LayerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\LayerSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.layer.geo_json' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\GeoJsonLayerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\GeoJsonLayerSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.layer.geo_json']) ? $this->services['ivory.google_map.helper.collector.layer.geo_json'] : $this->get('ivory.google_map.helper.collector.layer.geo_json')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.layer.geo_json']) ? $this->services['ivory.google_map.helper.renderer.layer.geo_json'] : $this->get('ivory.google_map.helper.renderer.layer.geo_json')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.layer.heatmap' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.layer.heatmap']) ? $this->services['ivory.google_map.helper.collector.layer.heatmap'] : $this->get('ivory.google_map.helper.collector.layer.heatmap')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.layer.heatmap']) ? $this->services['ivory.google_map.helper.renderer.layer.heatmap'] : $this->get('ivory.google_map.helper.renderer.layer.heatmap')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.layer.kml' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\KmlLayerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.kml'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\KmlLayerSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.layer.kml']) ? $this->services['ivory.google_map.helper.collector.layer.kml'] : $this->get('ivory.google_map.helper.collector.layer.kml')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.layer.kml']) ? $this->services['ivory.google_map.helper.renderer.layer.kml'] : $this->get('ivory.google_map.helper.renderer.layer.kml')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map'] = new \Ivory\GoogleMap\Helper\Subscriber\MapSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.map']) ? $this->services['ivory.google_map.helper.renderer.map'] : $this->get('ivory.google_map.helper.renderer.map')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapBoundSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapBoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_bound'] = new \Ivory\GoogleMap\Helper\Subscriber\MapBoundSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.map_bound']) ? $this->services['ivory.google_map.helper.renderer.map_bound'] : $this->get('ivory.google_map.helper.renderer.map_bound')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_center' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapCenterService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_center'] = new \Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.map_center']) ? $this->services['ivory.google_map.helper.renderer.map_center'] : $this->get('ivory.google_map.helper.renderer.map_center')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_container' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapContainerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapContainerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_container'] = new \Ivory\GoogleMap\Helper\Subscriber\MapContainerSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.map_container']) ? $this->services['ivory.google_map.helper.renderer.map_container'] : $this->get('ivory.google_map.helper.renderer.map_container')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_html' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapHtmlSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapHtmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_html'] = new \Ivory\GoogleMap\Helper\Subscriber\MapHtmlSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.map_html']) ? $this->services['ivory.google_map.helper.renderer.map_html'] : $this->get('ivory.google_map.helper.renderer.map_html')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_init' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapInitSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapInitService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_init'] = new \Ivory\GoogleMap\Helper\Subscriber\MapInitSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_javascript' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapJavascriptSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\MapJavascriptSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.map']) ? $this->services['ivory.google_map.helper.renderer.map'] : $this->get('ivory.google_map.helper.renderer.map')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.utility.callback']) ? $this->services['ivory.google_map.helper.renderer.utility.callback'] : $this->get('ivory.google_map.helper.renderer.utility.callback')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.javascript_tag']) ? $this->services['ivory.google_map.helper.renderer.html.javascript_tag'] : $this->get('ivory.google_map.helper.renderer.html.javascript_tag')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_stylehseet' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapStylesheetSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapStylehseetService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_stylehseet'] = new \Ivory\GoogleMap\Helper\Subscriber\MapStylesheetSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.stylesheet_tag']) ? $this->services['ivory.google_map.helper.renderer.html.stylesheet_tag'] : $this->get('ivory.google_map.helper.renderer.html.stylesheet_tag')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\OverlaySubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_OverlayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\OverlaySubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.circle' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\CircleSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.circle'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\CircleSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.circle']) ? $this->services['ivory.google_map.helper.collector.overlay.circle'] : $this->get('ivory.google_map.helper.collector.overlay.circle')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.circle']) ? $this->services['ivory.google_map.helper.renderer.overlay.circle'] : $this->get('ivory.google_map.helper.renderer.overlay.circle')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.encoded_polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\EncodedPolylineSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\EncodedPolylineSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.encoded_polyline']) ? $this->services['ivory.google_map.helper.collector.overlay.encoded_polyline'] : $this->get('ivory.google_map.helper.collector.overlay.encoded_polyline')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.encoded_polyline']) ? $this->services['ivory.google_map.helper.renderer.overlay.encoded_polyline'] : $this->get('ivory.google_map.helper.renderer.overlay.encoded_polyline')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.extendable' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\ExtendableSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\ExtendableSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.extendable']) ? $this->services['ivory.google_map.helper.collector.overlay.extendable'] : $this->get('ivory.google_map.helper.collector.overlay.extendable')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.extendable']) ? $this->services['ivory.google_map.helper.renderer.overlay.extendable'] : $this->get('ivory.google_map.helper.renderer.overlay.extendable')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.ground_overlay' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\GroundOverlaySubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\GroundOverlaySubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.ground_overlay']) ? $this->services['ivory.google_map.helper.collector.overlay.ground_overlay'] : $this->get('ivory.google_map.helper.collector.overlay.ground_overlay')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.ground_overlay']) ? $this->services['ivory.google_map.helper.renderer.overlay.ground_overlay'] : $this->get('ivory.google_map.helper.renderer.overlay.ground_overlay')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.icon' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.icon'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.icon']) ? $this->services['ivory.google_map.helper.collector.overlay.icon'] : $this->get('ivory.google_map.helper.collector.overlay.icon')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.icon']) ? $this->services['ivory.google_map.helper.renderer.overlay.icon'] : $this->get('ivory.google_map.helper.renderer.overlay.icon')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.icon_sequence' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSequenceSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSequenceSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.icon_sequence']) ? $this->services['ivory.google_map.helper.collector.overlay.icon_sequence'] : $this->get('ivory.google_map.helper.collector.overlay.icon_sequence')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.icon_sequence']) ? $this->services['ivory.google_map.helper.renderer.overlay.icon_sequence'] : $this->get('ivory.google_map.helper.renderer.overlay.icon_sequence')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.info_box' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.info_box']) ? $this->services['ivory.google_map.helper.collector.overlay.info_box'] : $this->get('ivory.google_map.helper.collector.overlay.info_box')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.info_box']) ? $this->services['ivory.google_map.helper.renderer.overlay.info_box'] : $this->get('ivory.google_map.helper.renderer.overlay.info_box')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.info_window.close' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowCloseSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_CloseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.close'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowCloseSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.info_window']) ? $this->services['ivory.google_map.helper.collector.overlay.info_window'] : $this->get('ivory.google_map.helper.collector.overlay.info_window')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.info_window.close']) ? $this->services['ivory.google_map.helper.renderer.overlay.info_window.close'] : $this->get('ivory.google_map.helper.renderer.overlay.info_window.close')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.info_window.default' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\DefaultInfoWindowSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\DefaultInfoWindowSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.info_window.default']) ? $this->services['ivory.google_map.helper.collector.overlay.info_window.default'] : $this->get('ivory.google_map.helper.collector.overlay.info_window.default')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.info_window.default']) ? $this->services['ivory.google_map.helper.renderer.overlay.info_window.default'] : $this->get('ivory.google_map.helper.renderer.overlay.info_window.default')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.info_window.open' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowOpenSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.open'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowOpenSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.info_window']) ? $this->services['ivory.google_map.helper.collector.overlay.info_window'] : $this->get('ivory.google_map.helper.collector.overlay.info_window')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.info_window.open']) ? $this->services['ivory.google_map.helper.renderer.overlay.info_window.open'] : $this->get('ivory.google_map.helper.renderer.overlay.info_window.open')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.marker' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.marker']) ? $this->services['ivory.google_map.helper.collector.overlay.marker'] : $this->get('ivory.google_map.helper.collector.overlay.marker')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.marker']) ? $this->services['ivory.google_map.helper.renderer.overlay.marker'] : $this->get('ivory.google_map.helper.renderer.overlay.marker')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.marker.info_window.open' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerInfoWindowOpenSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_Marker_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker.info_window.open'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerInfoWindowOpenSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.marker']) ? $this->services['ivory.google_map.helper.collector.overlay.marker'] : $this->get('ivory.google_map.helper.collector.overlay.marker')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.info_window.open']) ? $this->services['ivory.google_map.helper.renderer.overlay.info_window.open'] : $this->get('ivory.google_map.helper.renderer.overlay.info_window.open')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.event.event']) ? $this->services['ivory.google_map.helper.renderer.event.event'] : $this->get('ivory.google_map.helper.renderer.event.event')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.marker_clusterer' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerClustererSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerClustererService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerClustererSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.marker_clusterer']) ? $this->services['ivory.google_map.helper.renderer.overlay.marker_clusterer'] : $this->get('ivory.google_map.helper.renderer.overlay.marker_clusterer')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.marker_shape' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerShapeSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerShapeSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.marker_shape']) ? $this->services['ivory.google_map.helper.collector.overlay.marker_shape'] : $this->get('ivory.google_map.helper.collector.overlay.marker_shape')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.marker_shape']) ? $this->services['ivory.google_map.helper.renderer.overlay.marker_shape'] : $this->get('ivory.google_map.helper.renderer.overlay.marker_shape')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.polygon' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolygonSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolygonSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.polygon']) ? $this->services['ivory.google_map.helper.collector.overlay.polygon'] : $this->get('ivory.google_map.helper.collector.overlay.polygon')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.polygon']) ? $this->services['ivory.google_map.helper.renderer.overlay.polygon'] : $this->get('ivory.google_map.helper.renderer.overlay.polygon')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolylineSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolylineSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.polyline']) ? $this->services['ivory.google_map.helper.collector.overlay.polyline'] : $this->get('ivory.google_map.helper.collector.overlay.polyline')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.polyline']) ? $this->services['ivory.google_map.helper.renderer.overlay.polyline'] : $this->get('ivory.google_map.helper.renderer.overlay.polyline')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.rectangle' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\RectangleSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\RectangleSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.rectangle']) ? $this->services['ivory.google_map.helper.collector.overlay.rectangle'] : $this->get('ivory.google_map.helper.collector.overlay.rectangle')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.rectangle']) ? $this->services['ivory.google_map.helper.renderer.overlay.rectangle'] : $this->get('ivory.google_map.helper.renderer.overlay.rectangle')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.symbol' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\SymbolSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\SymbolSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.symbol']) ? $this->services['ivory.google_map.helper.collector.overlay.symbol'] : $this->get('ivory.google_map.helper.collector.overlay.symbol')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.symbol']) ? $this->services['ivory.google_map.helper.renderer.overlay.symbol'] : $this->get('ivory.google_map.helper.renderer.overlay.symbol')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.place.autocomplete']) ? $this->services['ivory.google_map.helper.renderer.place.autocomplete'] : $this->get('ivory.google_map.helper.renderer.place.autocomplete')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.base' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBaseSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_BaseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBaseSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.base.bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBoundSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.bound'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBoundSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.place.autocomplete.base.bound']) ? $this->services['ivory.google_map.helper.collector.place.autocomplete.base.bound'] : $this->get('ivory.google_map.helper.collector.place.autocomplete.base.bound')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.base.bound']) ? $this->services['ivory.google_map.helper.renderer.base.bound'] : $this->get('ivory.google_map.helper.renderer.base.bound')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteCoordinateSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteCoordinateSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.place.autocomplete.base.coordinate']) ? $this->services['ivory.google_map.helper.collector.place.autocomplete.base.coordinate'] : $this->get('ivory.google_map.helper.collector.place.autocomplete.base.coordinate')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.base.coordinate']) ? $this->services['ivory.google_map.helper.renderer.base.coordinate'] : $this->get('ivory.google_map.helper.renderer.base.coordinate')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event']) ? $this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event'] : $this->get('ivory.google_map.helper.collector.place.autocomplete.event.dom_event')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.event.dom_event']) ? $this->services['ivory.google_map.helper.renderer.event.dom_event'] : $this->get('ivory.google_map.helper.renderer.event.dom_event')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventOnceSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventOnceSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once']) ? $this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once'] : $this->get('ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.event.dom_event_once']) ? $this->services['ivory.google_map.helper.renderer.event.dom_event_once'] : $this->get('ivory.google_map.helper.renderer.event.dom_event_once')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.event.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteSimpleEventSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteSimpleEventSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.place.autocomplete.event.event']) ? $this->services['ivory.google_map.helper.collector.place.autocomplete.event.event'] : $this->get('ivory.google_map.helper.collector.place.autocomplete.event.event')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.event.event']) ? $this->services['ivory.google_map.helper.renderer.event.event'] : $this->get('ivory.google_map.helper.renderer.event.event')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.event.event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventOnceSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventOnceSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.place.autocomplete.event.event_once']) ? $this->services['ivory.google_map.helper.collector.place.autocomplete.event.event_once'] : $this->get('ivory.google_map.helper.collector.place.autocomplete.event.event_once')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.event.event_once']) ? $this->services['ivory.google_map.helper.renderer.event.event_once'] : $this->get('ivory.google_map.helper.renderer.event.event_once')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete_container' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteContainerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteContainerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_container'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteContainerSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.place.autocomplete_container']) ? $this->services['ivory.google_map.helper.renderer.place.autocomplete_container'] : $this->get('ivory.google_map.helper.renderer.place.autocomplete_container')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete_html' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteHtmlSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteHtmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_html'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteHtmlSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.place.autocomplete_html']) ? $this->services['ivory.google_map.helper.renderer.place.autocomplete_html'] : $this->get('ivory.google_map.helper.renderer.place.autocomplete_html')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete_init' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteInitSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteInitService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_init'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteInitSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete_javascript' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteJavascriptSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteJavascriptSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.place.autocomplete']) ? $this->services['ivory.google_map.helper.renderer.place.autocomplete'] : $this->get('ivory.google_map.helper.renderer.place.autocomplete')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.utility.callback']) ? $this->services['ivory.google_map.helper.renderer.utility.callback'] : $this->get('ivory.google_map.helper.renderer.utility.callback')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.javascript_tag']) ? $this->services['ivory.google_map.helper.renderer.html.javascript_tag'] : $this->get('ivory.google_map.helper.renderer.html.javascript_tag')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\StaticSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_StaticService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\StaticSubscriber();
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.center' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\CenterSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_CenterService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.center'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\CenterSubscriber(${($_ = isset($this->services['ivory.google_map.helper.renderer.static.base.coordinate']) ? $this->services['ivory.google_map.helper.renderer.static.base.coordinate'] : $this->get('ivory.google_map.helper.renderer.static.base.coordinate')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.encoded_polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\EncodedPolylineSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\EncodedPolylineSubscriber(${($_ = isset($this->services['ivory.google_map.helper.collector.static.encoded_polyline']) ? $this->services['ivory.google_map.helper.collector.static.encoded_polyline'] : $this->get('ivory.google_map.helper.collector.static.encoded_polyline')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline'] : $this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.extendable' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\ExtendableSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.extendable'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ExtendableSubscriber(${($_ = isset($this->services['ivory.google_map.helper.collector.static.extendable']) ? $this->services['ivory.google_map.helper.collector.static.extendable'] : $this->get('ivory.google_map.helper.collector.static.extendable')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.extendable']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.extendable'] : $this->get('ivory.google_map.helper.renderer.static.overlay.extendable')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.format' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\FormatSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_FormatService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.format'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\FormatSubscriber();
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.key' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\KeySubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_KeyService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.key'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\KeySubscriber();
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.marker' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\MarkerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_MarkerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.marker'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\MarkerSubscriber(${($_ = isset($this->services['ivory.google_map.helper.collector.static.marker']) ? $this->services['ivory.google_map.helper.collector.static.marker'] : $this->get('ivory.google_map.helper.collector.static.marker')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.marker']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.marker'] : $this->get('ivory.google_map.helper.renderer.static.overlay.marker')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\PolylineSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_PolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\PolylineSubscriber(${($_ = isset($this->services['ivory.google_map.helper.collector.static.polyline']) ? $this->services['ivory.google_map.helper.collector.static.polyline'] : $this->get('ivory.google_map.helper.collector.static.polyline')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.static.overlay.polyline']) ? $this->services['ivory.google_map.helper.renderer.static.overlay.polyline'] : $this->get('ivory.google_map.helper.renderer.static.overlay.polyline')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.scale' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\ScaleSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ScaleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.scale'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ScaleSubscriber();
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.size' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\SizeSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_SizeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.size'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\SizeSubscriber(${($_ = isset($this->services['ivory.google_map.helper.renderer.static.size']) ? $this->services['ivory.google_map.helper.renderer.static.size'] : $this->get('ivory.google_map.helper.renderer.static.size')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.type' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\TypeSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_TypeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.type'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\TypeSubscriber();
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.zoom' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\ZoomSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ZoomService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.zoom'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ZoomSubscriber();
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.utility.object_to_array' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Utility\ObjectToArraySubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Utility_ObjectToArrayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.utility.object_to_array'] = new \Ivory\GoogleMap\Helper\Subscriber\Utility\ObjectToArraySubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : $this->get('ivory.google_map.helper.formatter')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.utility.object_to_array']) ? $this->services['ivory.google_map.helper.renderer.utility.object_to_array'] : $this->get('ivory.google_map.helper.renderer.utility.object_to_array')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.twig.extension.api' shared service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\ApiExtension
     */
    protected function getIvory_GoogleMap_Twig_Extension_ApiService()
    {
        return $this->services['ivory.google_map.twig.extension.api'] = new \Ivory\GoogleMapBundle\Twig\ApiExtension(${($_ = isset($this->services['ivory.google_map.helper.api']) ? $this->services['ivory.google_map.helper.api'] : $this->get('ivory.google_map.helper.api')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.twig.extension.map' shared service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\MapExtension
     */
    protected function getIvory_GoogleMap_Twig_Extension_MapService()
    {
        return $this->services['ivory.google_map.twig.extension.map'] = new \Ivory\GoogleMapBundle\Twig\MapExtension(${($_ = isset($this->services['ivory.google_map.helper.map']) ? $this->services['ivory.google_map.helper.map'] : $this->get('ivory.google_map.helper.map')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.twig.extension.map.static' shared service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\StaticMapExtension
     */
    protected function getIvory_GoogleMap_Twig_Extension_Map_StaticService()
    {
        return $this->services['ivory.google_map.twig.extension.map.static'] = new \Ivory\GoogleMapBundle\Twig\StaticMapExtension(${($_ = isset($this->services['ivory.google_map.helper.map.static']) ? $this->services['ivory.google_map.helper.map.static'] : $this->get('ivory.google_map.helper.map.static')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.google_map.twig.extension.place_autocomplete' shared service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension
     */
    protected function getIvory_GoogleMap_Twig_Extension_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.twig.extension.place_autocomplete'] = new \Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension(${($_ = isset($this->services['ivory.google_map.helper.place_autocomplete']) ? $this->services['ivory.google_map.helper.place_autocomplete'] : $this->get('ivory.google_map.helper.place_autocomplete')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.serializer' shared service.
     *
     * @return \Ivory\Serializer\Serializer
     */
    protected function getIvory_SerializerService()
    {
        return $this->services['ivory.serializer'] = new \Ivory\Serializer\Serializer(${($_ = isset($this->services['ivory.serializer.navigator.event']) ? $this->services['ivory.serializer.navigator.event'] : $this->get('ivory.serializer.navigator.event')) && false ?: '_'}, ${($_ = isset($this->services['ivory.serializer.registry.visitor']) ? $this->services['ivory.serializer.registry.visitor'] : $this->get('ivory.serializer.registry.visitor')) && false ?: '_'}, ${($_ = isset($this->services['ivory.serializer.type.parser']) ? $this->services['ivory.serializer.type.parser'] : $this->get('ivory.serializer.type.parser')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.serializer.accessor' shared service.
     *
     * @return \Ivory\Serializer\Accessor\ReflectionAccessor
     */
    protected function getIvory_Serializer_AccessorService()
    {
        return $this->services['ivory.serializer.accessor'] = new \Ivory\Serializer\Accessor\ReflectionAccessor();
    }

    /**
     * Gets the public 'ivory.serializer.event.dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getIvory_Serializer_Event_DispatcherService()
    {
        return $this->services['ivory.serializer.event.dispatcher'] = new \Symfony\Component\EventDispatcher\EventDispatcher();
    }

    /**
     * Gets the public 'ivory.serializer.instantiator' shared service.
     *
     * @return \Ivory\Serializer\Instantiator\DoctrineInstantiator
     */
    protected function getIvory_Serializer_InstantiatorService()
    {
        return $this->services['ivory.serializer.instantiator'] = new \Ivory\Serializer\Instantiator\DoctrineInstantiator();
    }

    /**
     * Gets the public 'ivory.serializer.mapping.factory.default' shared service.
     *
     * @return \Ivory\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getIvory_Serializer_Mapping_Factory_DefaultService()
    {
        return $this->services['ivory.serializer.mapping.factory.default'] = new \Ivory\Serializer\Mapping\Factory\ClassMetadataFactory(${($_ = isset($this->services['ivory.serializer.mapping.loader']) ? $this->services['ivory.serializer.mapping.loader'] : $this->get('ivory.serializer.mapping.loader')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.serializer.mapping.factory.event' shared service.
     *
     * @return \Ivory\Serializer\Mapping\Factory\EventClassMetadataFactory
     */
    protected function getIvory_Serializer_Mapping_Factory_EventService()
    {
        return $this->services['ivory.serializer.mapping.factory.event'] = new \Ivory\Serializer\Mapping\Factory\EventClassMetadataFactory(${($_ = isset($this->services['ivory.serializer.mapping.factory.default']) ? $this->services['ivory.serializer.mapping.factory.default'] : $this->get('ivory.serializer.mapping.factory.default')) && false ?: '_'}, ${($_ = isset($this->services['ivory.serializer.event.dispatcher']) ? $this->services['ivory.serializer.event.dispatcher'] : $this->get('ivory.serializer.event.dispatcher')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.serializer.mapping.loader' shared service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\ChainClassMetadataLoader
     */
    protected function getIvory_Serializer_Mapping_LoaderService()
    {
        return $this->services['ivory.serializer.mapping.loader'] = new \Ivory\Serializer\Mapping\Loader\ChainClassMetadataLoader(array(0 => ${($_ = isset($this->services['ivory.serializer.mapping.loader.reflection']) ? $this->services['ivory.serializer.mapping.loader.reflection'] : $this->get('ivory.serializer.mapping.loader.reflection')) && false ?: '_'}, 1 => ${($_ = isset($this->services['ivory.serializer.mapping.loader.annotation']) ? $this->services['ivory.serializer.mapping.loader.annotation'] : $this->get('ivory.serializer.mapping.loader.annotation')) && false ?: '_'}), ${($_ = isset($this->services['ivory.serializer.type.parser']) ? $this->services['ivory.serializer.type.parser'] : $this->get('ivory.serializer.type.parser')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.serializer.mapping.loader.annotation' shared service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\AnnotationClassMetadataLoader
     */
    protected function getIvory_Serializer_Mapping_Loader_AnnotationService()
    {
        return $this->services['ivory.serializer.mapping.loader.annotation'] = new \Ivory\Serializer\Mapping\Loader\AnnotationClassMetadataLoader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}, ${($_ = isset($this->services['ivory.serializer.type.parser']) ? $this->services['ivory.serializer.type.parser'] : $this->get('ivory.serializer.type.parser')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.serializer.mapping.loader.reflection' shared service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\ReflectionClassMetadataLoader
     */
    protected function getIvory_Serializer_Mapping_Loader_ReflectionService()
    {
        return $this->services['ivory.serializer.mapping.loader.reflection'] = new \Ivory\Serializer\Mapping\Loader\ReflectionClassMetadataLoader(NULL, ${($_ = isset($this->services['ivory.serializer.type.parser']) ? $this->services['ivory.serializer.type.parser'] : $this->get('ivory.serializer.type.parser')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.serializer.mutator' shared service.
     *
     * @return \Ivory\Serializer\Mutator\ReflectionMutator
     */
    protected function getIvory_Serializer_MutatorService()
    {
        return $this->services['ivory.serializer.mutator'] = new \Ivory\Serializer\Mutator\ReflectionMutator();
    }

    /**
     * Gets the public 'ivory.serializer.navigator.default' shared service.
     *
     * @return \Ivory\Serializer\Navigator\Navigator
     */
    protected function getIvory_Serializer_Navigator_DefaultService()
    {
        return $this->services['ivory.serializer.navigator.default'] = new \Ivory\Serializer\Navigator\Navigator(${($_ = isset($this->services['ivory.serializer.registry.type']) ? $this->services['ivory.serializer.registry.type'] : $this->get('ivory.serializer.registry.type')) && false ?: '_'}, ${($_ = isset($this->services['ivory.serializer.type.guesser']) ? $this->services['ivory.serializer.type.guesser'] : $this->get('ivory.serializer.type.guesser')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.serializer.navigator.event' shared service.
     *
     * @return \Ivory\Serializer\Navigator\EventNavigator
     */
    protected function getIvory_Serializer_Navigator_EventService()
    {
        return $this->services['ivory.serializer.navigator.event'] = new \Ivory\Serializer\Navigator\EventNavigator(${($_ = isset($this->services['ivory.serializer.navigator.default']) ? $this->services['ivory.serializer.navigator.default'] : $this->get('ivory.serializer.navigator.default')) && false ?: '_'}, ${($_ = isset($this->services['ivory.serializer.event.dispatcher']) ? $this->services['ivory.serializer.event.dispatcher'] : $this->get('ivory.serializer.event.dispatcher')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.serializer.registry.type' shared service.
     *
     * @return \Ivory\Serializer\Registry\TypeRegistry
     */
    protected function getIvory_Serializer_Registry_TypeService()
    {
        $a = ${($_ = isset($this->services['ivory.serializer.type.array']) ? $this->services['ivory.serializer.type.array'] : $this->get('ivory.serializer.type.array')) && false ?: '_'};
        $b = ${($_ = isset($this->services['ivory.serializer.type.boolean']) ? $this->services['ivory.serializer.type.boolean'] : $this->get('ivory.serializer.type.boolean')) && false ?: '_'};
        $c = ${($_ = isset($this->services['ivory.serializer.type.closure']) ? $this->services['ivory.serializer.type.closure'] : $this->get('ivory.serializer.type.closure')) && false ?: '_'};
        $d = ${($_ = isset($this->services['ivory.serializer.type.date_time']) ? $this->services['ivory.serializer.type.date_time'] : $this->get('ivory.serializer.type.date_time')) && false ?: '_'};
        $e = ${($_ = isset($this->services['ivory.serializer.type.exception']) ? $this->services['ivory.serializer.type.exception'] : $this->get('ivory.serializer.type.exception')) && false ?: '_'};
        $f = ${($_ = isset($this->services['ivory.serializer.type.float']) ? $this->services['ivory.serializer.type.float'] : $this->get('ivory.serializer.type.float')) && false ?: '_'};
        $g = ${($_ = isset($this->services['ivory.serializer.type.form']) ? $this->services['ivory.serializer.type.form'] : $this->get('ivory.serializer.type.form')) && false ?: '_'};
        $h = ${($_ = isset($this->services['ivory.serializer.type.form_error']) ? $this->services['ivory.serializer.type.form_error'] : $this->get('ivory.serializer.type.form_error')) && false ?: '_'};
        $i = ${($_ = isset($this->services['ivory.serializer.type.integer']) ? $this->services['ivory.serializer.type.integer'] : $this->get('ivory.serializer.type.integer')) && false ?: '_'};
        $j = ${($_ = isset($this->services['ivory.serializer.type.null']) ? $this->services['ivory.serializer.type.null'] : $this->get('ivory.serializer.type.null')) && false ?: '_'};
        $k = ${($_ = isset($this->services['ivory.serializer.type.object']) ? $this->services['ivory.serializer.type.object'] : $this->get('ivory.serializer.type.object')) && false ?: '_'};
        $l = ${($_ = isset($this->services['ivory.serializer.type.resource']) ? $this->services['ivory.serializer.type.resource'] : $this->get('ivory.serializer.type.resource')) && false ?: '_'};
        $m = ${($_ = isset($this->services['ivory.serializer.type.std_class']) ? $this->services['ivory.serializer.type.std_class'] : $this->get('ivory.serializer.type.std_class')) && false ?: '_'};
        $n = ${($_ = isset($this->services['ivory.serializer.type.string']) ? $this->services['ivory.serializer.type.string'] : $this->get('ivory.serializer.type.string')) && false ?: '_'};

        $this->services['ivory.serializer.registry.type'] = $instance = new \Ivory\Serializer\Registry\TypeRegistry();

        $instance->registerType('array', 1, $a);
        $instance->registerType('bool', 1, $b);
        $instance->registerType('boolean', 1, $b);
        $instance->registerType('closure', 1, $c);
        $instance->registerType('DateTimeInterface', 1, $d);
        $instance->registerType('Exception', 1, $e);
        $instance->registerType('double', 1, $f);
        $instance->registerType('float', 1, $f);
        $instance->registerType('numeric', 1, $f);
        $instance->registerType('Symfony\\Component\\Form\\Form', 1, $g);
        $instance->registerType('Symfony\\Component\\Form\\FormError', 1, $h);
        $instance->registerType('int', 1, $i);
        $instance->registerType('integer', 1, $i);
        $instance->registerType('null', 1, $j);
        $instance->registerType('object', 1, $k);
        $instance->registerType('resource', 1, $l);
        $instance->registerType('stdClass', 1, $m);
        $instance->registerType('string', 1, $n);
        $instance->registerType('array', 2, $a);
        $instance->registerType('bool', 2, $b);
        $instance->registerType('boolean', 2, $b);
        $instance->registerType('closure', 2, $c);
        $instance->registerType('DateTimeInterface', 2, $d);
        $instance->registerType('Exception', 2, $e);
        $instance->registerType('double', 2, $f);
        $instance->registerType('float', 2, $f);
        $instance->registerType('numeric', 2, $f);
        $instance->registerType('Symfony\\Component\\Form\\Form', 2, $g);
        $instance->registerType('Symfony\\Component\\Form\\FormError', 2, $h);
        $instance->registerType('int', 2, $i);
        $instance->registerType('integer', 2, $i);
        $instance->registerType('null', 2, $j);
        $instance->registerType('object', 2, $k);
        $instance->registerType('resource', 2, $l);
        $instance->registerType('stdClass', 2, $m);
        $instance->registerType('string', 2, $n);

        return $instance;
    }

    /**
     * Gets the public 'ivory.serializer.registry.visitor' shared service.
     *
     * @return \Ivory\Serializer\Registry\VisitorRegistry
     */
    protected function getIvory_Serializer_Registry_VisitorService()
    {
        $this->services['ivory.serializer.registry.visitor'] = $instance = new \Ivory\Serializer\Registry\VisitorRegistry();

        $instance->registerVisitor(1, 'csv', ${($_ = isset($this->services['ivory.serializer.visitor.csv.serialization']) ? $this->services['ivory.serializer.visitor.csv.serialization'] : $this->get('ivory.serializer.visitor.csv.serialization')) && false ?: '_'});
        $instance->registerVisitor(2, 'csv', ${($_ = isset($this->services['ivory.serializer.visitor.csv.deserialization']) ? $this->services['ivory.serializer.visitor.csv.deserialization'] : $this->get('ivory.serializer.visitor.csv.deserialization')) && false ?: '_'});
        $instance->registerVisitor(1, 'json', ${($_ = isset($this->services['ivory.serializer.visitor.json.serialization']) ? $this->services['ivory.serializer.visitor.json.serialization'] : $this->get('ivory.serializer.visitor.json.serialization')) && false ?: '_'});
        $instance->registerVisitor(2, 'json', ${($_ = isset($this->services['ivory.serializer.visitor.json.deserialization']) ? $this->services['ivory.serializer.visitor.json.deserialization'] : $this->get('ivory.serializer.visitor.json.deserialization')) && false ?: '_'});
        $instance->registerVisitor(1, 'xml', ${($_ = isset($this->services['ivory.serializer.visitor.xml.serialization']) ? $this->services['ivory.serializer.visitor.xml.serialization'] : $this->get('ivory.serializer.visitor.xml.serialization')) && false ?: '_'});
        $instance->registerVisitor(2, 'xml', ${($_ = isset($this->services['ivory.serializer.visitor.xml.deserialization']) ? $this->services['ivory.serializer.visitor.xml.deserialization'] : $this->get('ivory.serializer.visitor.xml.deserialization')) && false ?: '_'});
        $instance->registerVisitor(1, 'yaml', ${($_ = isset($this->services['ivory.serializer.visitor.yaml.serialization']) ? $this->services['ivory.serializer.visitor.yaml.serialization'] : $this->get('ivory.serializer.visitor.yaml.serialization')) && false ?: '_'});
        $instance->registerVisitor(2, 'yaml', ${($_ = isset($this->services['ivory.serializer.visitor.yaml.deserialization']) ? $this->services['ivory.serializer.visitor.yaml.deserialization'] : $this->get('ivory.serializer.visitor.yaml.deserialization')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'ivory.serializer.type.array' shared service.
     *
     * @return \Ivory\Serializer\Type\ArrayType
     */
    protected function getIvory_Serializer_Type_ArrayService()
    {
        return $this->services['ivory.serializer.type.array'] = new \Ivory\Serializer\Type\ArrayType();
    }

    /**
     * Gets the public 'ivory.serializer.type.boolean' shared service.
     *
     * @return \Ivory\Serializer\Type\BooleanType
     */
    protected function getIvory_Serializer_Type_BooleanService()
    {
        return $this->services['ivory.serializer.type.boolean'] = new \Ivory\Serializer\Type\BooleanType();
    }

    /**
     * Gets the public 'ivory.serializer.type.closure' shared service.
     *
     * @return \Ivory\Serializer\Type\ClosureType
     */
    protected function getIvory_Serializer_Type_ClosureService()
    {
        return $this->services['ivory.serializer.type.closure'] = new \Ivory\Serializer\Type\ClosureType();
    }

    /**
     * Gets the public 'ivory.serializer.type.date_time' shared service.
     *
     * @return \Ivory\Serializer\Type\DateTimeType
     */
    protected function getIvory_Serializer_Type_DateTimeService()
    {
        return $this->services['ivory.serializer.type.date_time'] = new \Ivory\Serializer\Type\DateTimeType('Y-m-d\\TH:i:sP', 'America/Sao_Paulo');
    }

    /**
     * Gets the public 'ivory.serializer.type.exception' shared service.
     *
     * @return \Ivory\Serializer\Type\ExceptionType
     */
    protected function getIvory_Serializer_Type_ExceptionService()
    {
        return $this->services['ivory.serializer.type.exception'] = new \Ivory\Serializer\Type\ExceptionType(true);
    }

    /**
     * Gets the public 'ivory.serializer.type.float' shared service.
     *
     * @return \Ivory\Serializer\Type\FloatType
     */
    protected function getIvory_Serializer_Type_FloatService()
    {
        return $this->services['ivory.serializer.type.float'] = new \Ivory\Serializer\Type\FloatType();
    }

    /**
     * Gets the public 'ivory.serializer.type.form' shared service.
     *
     * @return \Ivory\SerializerBundle\Type\FormType
     */
    protected function getIvory_Serializer_Type_FormService()
    {
        return $this->services['ivory.serializer.type.form'] = new \Ivory\SerializerBundle\Type\FormType();
    }

    /**
     * Gets the public 'ivory.serializer.type.form_error' shared service.
     *
     * @return \Ivory\SerializerBundle\Type\FormErrorType
     */
    protected function getIvory_Serializer_Type_FormErrorService()
    {
        return $this->services['ivory.serializer.type.form_error'] = new \Ivory\SerializerBundle\Type\FormErrorType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.serializer.type.guesser' shared service.
     *
     * @return \Ivory\Serializer\Type\Guesser\TypeGuesser
     */
    protected function getIvory_Serializer_Type_GuesserService()
    {
        return $this->services['ivory.serializer.type.guesser'] = new \Ivory\Serializer\Type\Guesser\TypeGuesser();
    }

    /**
     * Gets the public 'ivory.serializer.type.integer' shared service.
     *
     * @return \Ivory\Serializer\Type\IntegerType
     */
    protected function getIvory_Serializer_Type_IntegerService()
    {
        return $this->services['ivory.serializer.type.integer'] = new \Ivory\Serializer\Type\IntegerType();
    }

    /**
     * Gets the public 'ivory.serializer.type.lexer' shared service.
     *
     * @return \Ivory\Serializer\Type\Parser\TypeLexer
     */
    protected function getIvory_Serializer_Type_LexerService()
    {
        return $this->services['ivory.serializer.type.lexer'] = new \Ivory\Serializer\Type\Parser\TypeLexer();
    }

    /**
     * Gets the public 'ivory.serializer.type.null' shared service.
     *
     * @return \Ivory\Serializer\Type\NullType
     */
    protected function getIvory_Serializer_Type_NullService()
    {
        return $this->services['ivory.serializer.type.null'] = new \Ivory\Serializer\Type\NullType();
    }

    /**
     * Gets the public 'ivory.serializer.type.object' shared service.
     *
     * @return \Ivory\Serializer\Type\ObjectType
     */
    protected function getIvory_Serializer_Type_ObjectService()
    {
        return $this->services['ivory.serializer.type.object'] = new \Ivory\Serializer\Type\ObjectType(${($_ = isset($this->services['ivory.serializer.mapping.factory.default']) ? $this->services['ivory.serializer.mapping.factory.default'] : $this->get('ivory.serializer.mapping.factory.default')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.serializer.type.parser' shared service.
     *
     * @return \Ivory\Serializer\Type\Parser\TypeParser
     */
    protected function getIvory_Serializer_Type_ParserService()
    {
        return $this->services['ivory.serializer.type.parser'] = new \Ivory\Serializer\Type\Parser\TypeParser(${($_ = isset($this->services['ivory.serializer.type.lexer']) ? $this->services['ivory.serializer.type.lexer'] : $this->get('ivory.serializer.type.lexer')) && false ?: '_'});
    }

    /**
     * Gets the public 'ivory.serializer.type.resource' shared service.
     *
     * @return \Ivory\Serializer\Type\ResourceType
     */
    protected function getIvory_Serializer_Type_ResourceService()
    {
        return $this->services['ivory.serializer.type.resource'] = new \Ivory\Serializer\Type\ResourceType();
    }

    /**
     * Gets the public 'ivory.serializer.type.std_class' shared service.
     *
     * @return \Ivory\Serializer\Type\StdClassType
     */
    protected function getIvory_Serializer_Type_StdClassService()
    {
        return $this->services['ivory.serializer.type.std_class'] = new \Ivory\Serializer\Type\StdClassType();
    }

    /**
     * Gets the public 'ivory.serializer.type.string' shared service.
     *
     * @return \Ivory\Serializer\Type\StringType
     */
    protected function getIvory_Serializer_Type_StringService()
    {
        return $this->services['ivory.serializer.type.string'] = new \Ivory\Serializer\Type\StringType();
    }

    /**
     * Gets the public 'ivory.serializer.visitor.csv.deserialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Csv\CsvDeserializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Csv_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.csv.deserialization'] = new \Ivory\Serializer\Visitor\Csv\CsvDeserializationVisitor(${($_ = isset($this->services['ivory.serializer.instantiator']) ? $this->services['ivory.serializer.instantiator'] : $this->get('ivory.serializer.instantiator')) && false ?: '_'}, ${($_ = isset($this->services['ivory.serializer.mutator']) ? $this->services['ivory.serializer.mutator'] : $this->get('ivory.serializer.mutator')) && false ?: '_'}, ',', '"', '\\', '.');
    }

    /**
     * Gets the public 'ivory.serializer.visitor.csv.serialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Csv\CsvSerializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Csv_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.csv.serialization'] = new \Ivory\Serializer\Visitor\Csv\CsvSerializationVisitor(${($_ = isset($this->services['ivory.serializer.accessor']) ? $this->services['ivory.serializer.accessor'] : $this->get('ivory.serializer.accessor')) && false ?: '_'}, ',', '"', '\\', '.');
    }

    /**
     * Gets the public 'ivory.serializer.visitor.json.deserialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Json\JsonDeserializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Json_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.json.deserialization'] = new \Ivory\Serializer\Visitor\Json\JsonDeserializationVisitor(${($_ = isset($this->services['ivory.serializer.instantiator']) ? $this->services['ivory.serializer.instantiator'] : $this->get('ivory.serializer.instantiator')) && false ?: '_'}, ${($_ = isset($this->services['ivory.serializer.mutator']) ? $this->services['ivory.serializer.mutator'] : $this->get('ivory.serializer.mutator')) && false ?: '_'}, 512, 0);
    }

    /**
     * Gets the public 'ivory.serializer.visitor.json.serialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Json\JsonSerializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Json_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.json.serialization'] = new \Ivory\Serializer\Visitor\Json\JsonSerializationVisitor(${($_ = isset($this->services['ivory.serializer.accessor']) ? $this->services['ivory.serializer.accessor'] : $this->get('ivory.serializer.accessor')) && false ?: '_'}, 0);
    }

    /**
     * Gets the public 'ivory.serializer.visitor.xml.deserialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Xml\XmlDeserializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Xml_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.xml.deserialization'] = new \Ivory\Serializer\Visitor\Xml\XmlDeserializationVisitor(${($_ = isset($this->services['ivory.serializer.instantiator']) ? $this->services['ivory.serializer.instantiator'] : $this->get('ivory.serializer.instantiator')) && false ?: '_'}, ${($_ = isset($this->services['ivory.serializer.mutator']) ? $this->services['ivory.serializer.mutator'] : $this->get('ivory.serializer.mutator')) && false ?: '_'}, 'entry', 'key');
    }

    /**
     * Gets the public 'ivory.serializer.visitor.xml.serialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Xml\XmlSerializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Xml_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.xml.serialization'] = new \Ivory\Serializer\Visitor\Xml\XmlSerializationVisitor(${($_ = isset($this->services['ivory.serializer.accessor']) ? $this->services['ivory.serializer.accessor'] : $this->get('ivory.serializer.accessor')) && false ?: '_'}, '1.0', 'UTF-8', true, 'result', 'entry', 'key');
    }

    /**
     * Gets the public 'ivory.serializer.visitor.yaml.deserialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Yaml\YamlDeserializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Yaml_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.yaml.deserialization'] = new \Ivory\Serializer\Visitor\Yaml\YamlDeserializationVisitor(${($_ = isset($this->services['ivory.serializer.instantiator']) ? $this->services['ivory.serializer.instantiator'] : $this->get('ivory.serializer.instantiator')) && false ?: '_'}, ${($_ = isset($this->services['ivory.serializer.mutator']) ? $this->services['ivory.serializer.mutator'] : $this->get('ivory.serializer.mutator')) && false ?: '_'}, 0);
    }

    /**
     * Gets the public 'ivory.serializer.visitor.yaml.serialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Yaml\YamlSerializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Yaml_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.yaml.serialization'] = new \Ivory\Serializer\Visitor\Yaml\YamlSerializationVisitor(${($_ = isset($this->services['ivory.serializer.accessor']) ? $this->services['ivory.serializer.accessor'] : $this->get('ivory.serializer.accessor')) && false ?: '_'}, 2, 4, 0);
    }

    /**
     * Gets the public 'kernel.class_cache.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer
     *
     * @deprecated The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        @trigger_error('The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel'));
    }

    /**
     * Gets the public 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.activation_strategy.not_found' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy
     */
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }

    /**
     * Gets the public 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /**
     * Gets the public 'monolog.handler.fingers_crossed.error_level_activation_strategy' shared service.
     *
     * @return \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy
     */
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }

    /**
     * Gets the public 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the public 'monolog.handler.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ServerLogHandler
     */
    protected function getMonolog_Handler_ServerLogService()
    {
        return $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true);
    }

    /**
     * Gets the public 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ConsoleService()
    {
        $this->services['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.router' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.templating' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};

        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.serializer.recorder_inner']) ? $this->services['cache.serializer.recorder_inner'] : $this->getCache_Serializer_RecorderInnerService()) && false ?: '_'}));
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
        $d->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->getDoctrine_Dbal_Logger_Profiling_DefaultService()) && false ?: '_'});

        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler')), $a);

        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, (__DIR__.'/appDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->get('data_collector.router')) && false ?: '_'});
        $instance->add($c);
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->get('twig.profile')) && false ?: '_'}));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['data_collector.dump']) ? $this->services['data_collector.dump'] : $this->get('data_collector.dump')) && false ?: '_'});
        $instance->add(${($_ = isset($this->services['httplug.collector.collector']) ? $this->services['httplug.collector.collector'] : $this->getHttplug_Collector_CollectorService()) && false ?: '_'});
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the public 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.router']) ? $this->services['monolog.logger.router'] : $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->get('config_cache_factory')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'};
        $b = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'};

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Config\Loader\GlobFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $d);
    }

    /**
     * Gets the public 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session')) && false ?: '_'}));
    }

    /**
     * Gets the public 'security.encoder_factory' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Symfony\\Component\\Security\\Core\\User\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder', 'arguments' => array(0 => false))));
    }

    /**
     * Gets the public 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d', false, '', '', '', '', '', '', array()));
    }

    /**
     * Gets the public 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $c = ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $d = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $e = ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $f = ${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'};
        $g = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};

        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin');

        $i = new \Symfony\Component\Security\Http\AccessMap();
        $i->add($h, array(0 => 'ROLE_ADMIN'), NULL);

        $j = new \Symfony\Component\Security\Http\HttpUtils($e, $e);

        $k = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $j, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($j, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout'));
        $k->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $l = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($j, array());
        $l->setOptions(array('login_path' => 'login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $l->setProviderKey('main');

        $m = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $j, array(), $a);
        $m->setOptions(array('login_path' => 'login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($i, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => ${($_ = isset($this->services['security.user.provider.concrete.in_memory']) ? $this->services['security.user.provider.concrete.in_memory'] : $this->getSecurity_User_Provider_Concrete_InMemoryService()) && false ?: '_'}), 'main', $a, $c, $d), 2 => $k, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $g, new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $j, 'main', $l, $m, array('check_path' => 'login', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $c, NULL), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '59863b586f39f1.61493256', $a, $g), 5 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, $i, $g)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $d, $j, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $j, 'login', false), NULL, NULL, $a, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'security.user.provider.concrete.in_memory', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, array(0 => 'logout', 1 => 'form_login', 2 => 'anonymous')));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_distribution.security_checker' shared service.
     *
     * @return \SensioLabs\Security\SecurityChecker
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the public 'sensio_distribution.security_checker.command' shared service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand(${($_ = isset($this->services['sensio_distribution.security_checker']) ? $this->services['sensio_distribution.security_checker'] : $this->get('sensio_distribution.security_checker')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the public 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->get('sensio_framework_extra.converter.manager')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.doctrine.orm']) ? $this->services['sensio_framework_extra.converter.doctrine.orm'] : $this->get('sensio_framework_extra.converter.doctrine.orm')) && false ?: '_'}, 0, 'doctrine.orm');
        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.datetime']) ? $this->services['sensio_framework_extra.converter.datetime'] : $this->get('sensio_framework_extra.converter.datetime')) && false ?: '_'}, 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the public 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.native']) ? $this->services['session.storage.native'] : $this->get('session.storage.native')) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'session.handler' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[2].'/sessions/dev'));
    }

    /**
     * Gets the public 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the public 'session.storage.filesystem' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), ${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session.storage.php_bridge' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        })));
    }

    /**
     * Gets the public 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the public 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(${($_ = isset($this->services['swiftmailer.mailer.default.transport']) ? $this->services['swiftmailer.mailer.default.transport'] : $this->get('swiftmailer.mailer.default.transport')) && false ?: '_'});
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.spool' shared service.
     *
     * @return \Swift_MemorySpool
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['swiftmailer.mailer.default.spool']) ? $this->services['swiftmailer.mailer.default.spool'] : $this->get('swiftmailer.mailer.default.spool')) && false ?: '_'});

        $instance->registerPlugin(${($_ = isset($this->services['swiftmailer.mailer.default.plugin.messagelogger']) ? $this->services['swiftmailer.mailer.default.plugin.messagelogger'] : $this->get('swiftmailer.mailer.default.plugin.messagelogger')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport_EsmtpTransport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), ${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'});

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.filename_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the public 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\IdentityTranslator(new \Symfony\Component\Translation\MessageSelector());
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'};

        $d = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $d->setDisplayOptions(array('fileLinkFormat' => $b));

        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $b));

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($c);
        }

        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->get('twig.loader')) && false ?: '_'}, array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->get('twig.profile')) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->get('assets.packages')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(${($_ = isset($this->services['ivory.google_map.twig.extension.api']) ? $this->services['ivory.google_map.twig.extension.api'] : $this->get('ivory.google_map.twig.extension.api')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['ivory.google_map.twig.extension.map']) ? $this->services['ivory.google_map.twig.extension.map'] : $this->get('ivory.google_map.twig.extension.map')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['ivory.google_map.twig.extension.map.static']) ? $this->services['ivory.google_map.twig.extension.map.static'] : $this->get('ivory.google_map.twig.extension.map.static')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['ivory.google_map.twig.extension.place_autocomplete']) ? $this->services['ivory.google_map.twig.extension.place_autocomplete'] : $this->get('ivory.google_map.twig.extension.place_autocomplete')) && false ?: '_'});
        $instance->addExtension(new \Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->get('var_dumper.cloner')) && false ?: '_'}, $d));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->get('twig.runtime.httpkernel')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->get('twig.form.renderer')) && false ?: '_'};
        }))));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, 'twig.controller.exception:showAction');
    }

    /**
     * Gets the public 'twig.exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig', 1 => 'form_div_layout.html.twig'), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}), ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/src/RtecaBundle/Resources/views'), 'Rteca');
        $instance->addPath(($this->targetDirs[3].'/vendor/egeloen/google-map-bundle/Resources/views'), 'IvoryGoogleMap');
        $instance->addPath(($this->targetDirs[3].'/vendor/php-http/httplug-bundle/Resources/views'), 'Httplug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the public 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the public 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(${($_ = isset($this->services['fragment.handler']) ? $this->services['fragment.handler'] : $this->get('fragment.handler')) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
    }

    /**
     * Gets the public 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('eb9b57884418df5e37476bf2527eb660448bad42');
    }

    /**
     * Gets the public 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}->getValidator();
    }

    /**
     * Gets the public 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->get('validator.email')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }))));
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->get('doctrine.orm.validator_initializer')) && false ?: '_'}));

        return $instance;
    }

    /**
     * Gets the public 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the public 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the public 'var_dumper.cli_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.cache' => array(0 => 'cache', 1 => '@WebProfiler/Collector/cache.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig'), 'httplug.collector.collector' => array(0 => 'httplug', 1 => '@Httplug/webprofiler.html.twig'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'}, $this->targetDirs[3]);
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, false, 2, 'bottom', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, '^/(app(_[\\w]+)?\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    /**
     * Gets the private '1_8d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker
     */
    protected function get18d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65eService()
    {
        return $this->services['1_8d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65e'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this);
    }

    /**
     * Gets the private '2_8d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65e' shared service.
     *
     * @return \Symfony\Component\Config\Resource\SelfCheckingResourceChecker
     */
    protected function get28d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65eService()
    {
        return $this->services['2_8d318ec58a9a63a1b368c56cdcec0d9ccf6d87675fa045943146452fd212e65e'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker();
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    protected function getArgumentResolver_DefaultService()
    {
        return $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver
     */
    protected function getArgumentResolver_RequestService()
    {
        return $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver
     */
    protected function getArgumentResolver_RequestAttributeService()
    {
        return $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('RtecaBundle\\Controller\\SecurityController:loginAction' => function () {
            return ${($_ = isset($this->services['service_locator.adb387edf44001656cf7d6606ecd3a0f']) ? $this->services['service_locator.adb387edf44001656cf7d6606ecd3a0f'] : $this->getServiceLocator_Adb387edf44001656cf7d6606ecd3a0fService()) && false ?: '_'};
        }, 'RtecaBundle\\Controller\\SecurityController::loginAction' => function () {
            return ${($_ = isset($this->services['service_locator.adb387edf44001656cf7d6606ecd3a0f']) ? $this->services['service_locator.adb387edf44001656cf7d6606ecd3a0f'] : $this->getServiceLocator_Adb387edf44001656cf7d6606ecd3a0fService()) && false ?: '_'};
        })));
    }

    /**
     * Gets the private 'argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver
     */
    protected function getArgumentResolver_SessionService()
    {
        return $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver
     */
    protected function getArgumentResolver_VariadicService()
    {
        return $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.annotations.recorder_inner']) ? $this->services['cache.annotations.recorder_inner'] : $this->getCache_Annotations_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.annotations.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Annotations_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.annotations.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('zS4RMZW+8e', 0, 'cPEKxAOpapdNWa1wsyAUI4', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.app.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_App_RecorderInnerService($lazyLoad = true)
    {
        $this->services['cache.app.recorder_inner'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('3fXnuXOleF', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }

        return $instance;
    }

    /**
     * Gets the private 'cache.serializer.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Serializer_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.serializer.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('3+NmF9LlL1', 0, 'cPEKxAOpapdNWa1wsyAUI4', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.system.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_System_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.system.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Qxs4FuOOoq', 0, 'cPEKxAOpapdNWa1wsyAUI4', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.validator.recorder_inner']) ? $this->services['cache.validator.recorder_inner'] : $this->getCache_Validator_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.validator.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Validator_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.validator.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('1GdwBfhULn', 0, 'cPEKxAOpapdNWa1wsyAUI4', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        return $this->services['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(${($_ = isset($this->services['monolog.logger.console']) ? $this->services['monolog.logger.console'] : $this->get('monolog.logger.console', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, $this->targetDirs[3], '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->getSecurity_Access_AuthenticatedVoterService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.simple_role_voter']) ? $this->services['security.access.simple_role_voter'] : $this->getSecurity_Access_SimpleRoleVoterService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->getSecurity_Access_ExpressionVoterService()) && false ?: '_'};
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'})));
    }

    /**
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager')) && false ?: '_'}, true, '_token', ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the private 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, 'validators');
    }

    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the private 'httplug.collector.collector' shared service.
     *
     * @return \Http\HttplugBundle\Collector\Collector
     */
    protected function getHttplug_Collector_CollectorService()
    {
        return $this->services['httplug.collector.collector'] = new \Http\HttplugBundle\Collector\Collector();
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        return $this->services['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        return $this->services['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.access.simple_role_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter
     */
    protected function getSecurity_Access_SimpleRoleVoterService()
    {
        return $this->services['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter();
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.main']) ? $this->services['security.authentication.provider.dao.main'] : $this->getSecurity_Authentication_Provider_Dao_MainService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : $this->getSecurity_Authentication_Provider_Anonymous_MainService()) && false ?: '_'};
        }, 2), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_MainService()
    {
        return $this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('59863b586f39f1.61493256');
    }

    /**
     * Gets the private 'security.authentication.provider.dao.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_MainService()
    {
        return $this->services['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['security.user.provider.concrete.in_memory']) ? $this->services['security.user.provider.concrete.in_memory'] : $this->getSecurity_User_Provider_Concrete_InMemoryService()) && false ?: '_'}, new \Symfony\Component\Security\Core\User\UserChecker(), 'main', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->get('security.firewall.map.context.dev')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->get('security.firewall.map.context.main')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d']) ? $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] : $this->getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()) && false ?: '_'};
            yield 'security.firewall.map.context.main' => NULL;
        }, 2));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()
    {
        return $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/');
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /**
     * Gets the private 'security.user.provider.concrete.in_memory' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\InMemoryUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_InMemoryService()
    {
        $this->services['security.user.provider.concrete.in_memory'] = $instance = new \Symfony\Component\Security\Core\User\InMemoryUserProvider();

        $instance->createUser(new \Symfony\Component\Security\Core\User\User('admin', 'kitten', array(0 => 'ROLE_ADMIN')));

        return $instance;
    }

    /**
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver
     */
    protected function getSecurity_UserValueResolverService()
    {
        return $this->services['security.user_value_resolver'] = new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'});
    }

    /**
     * Gets the private 'service_locator.adb387edf44001656cf7d6606ecd3a0f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_Adb387edf44001656cf7d6606ecd3a0fService()
    {
        return $this->services['service_locator.adb387edf44001656cf7d6606ecd3a0f'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('authUtils' => function () {
            return ${($_ = isset($this->services['security.authentication_utils']) ? $this->services['security.authentication_utils'] : $this->get('security.authentication_utils', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        }));
    }

    /**
     * Gets the private 'service_locator.e64d23c3bf770e2cf44b71643280668d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()
    {
        return $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('esi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.esi']) ? $this->services['fragment.renderer.esi'] : $this->get('fragment.renderer.esi')) && false ?: '_'};
        }, 'hinclude' => function () {
            return ${($_ = isset($this->services['fragment.renderer.hinclude']) ? $this->services['fragment.renderer.hinclude'] : $this->get('fragment.renderer.hinclude')) && false ?: '_'};
        }, 'inline' => function () {
            return ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'};
        }, 'ssi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.ssi']) ? $this->services['fragment.renderer.ssi'] : $this->get('fragment.renderer.ssi')) && false ?: '_'};
        }));
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the private 'swiftmailer.mailer.default.transport.eventdispatcher' shared service.
     *
     * @return \Swift_Events_SimpleEventDispatcher
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'}, __DIR__);
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'router.resource' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'RtecaBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/RtecaBundle'),
                    'namespace' => 'RtecaBundle',
                ),
                'IvoryGoogleMapBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/egeloen/google-map-bundle'),
                    'namespace' => 'Ivory\\GoogleMapBundle',
                ),
                'IvorySerializerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/egeloen/serializer-bundle'),
                    'namespace' => 'Ivory\\SerializerBundle',
                ),
                'HttplugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/php-http/httplug-bundle'),
                    'namespace' => 'Http\\HttplugBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'EasyDeployBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/easycorp/easy-deploy-bundle/src'),
                    'namespace' => 'EasyCorp\\Bundle\\EasyDeployBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
                'WebServerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebServerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
            ); break;
            case 'session.save_path': $value = ($this->targetDirs[2].'/sessions/dev'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/app/config/routing_dev.yml'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'RtecaBundle' => 'RtecaBundle\\RtecaBundle',
                'IvoryGoogleMapBundle' => 'Ivory\\GoogleMapBundle\\IvoryGoogleMapBundle',
                'IvorySerializerBundle' => 'Ivory\\SerializerBundle\\IvorySerializerBundle',
                'HttplugBundle' => 'Http\\HttplugBundle\\HttplugBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'EasyDeployBundle' => 'EasyCorp\\Bundle\\EasyDeployBundle\\EasyDeployBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_host' => 'localhost',
            'database_port' => 3306,
            'database_name' => 'rastreiateca',
            'database_user' => 'root',
            'database_password' => 'm230889m',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'eb9b57884418df5e37476bf2527eb660448bad42',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'eb9b57884418df5e37476bf2527eb660448bad42',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.cache.file' => (__DIR__.'/validation.php'),
            'validator.translation_domain' => 'validators',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'debug.error_handler.throw_at' => -1,
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(

            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig',
                1 => 'form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.server_log' => NULL,
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'httplug.collector.collector' => array(
                    0 => 'httplug',
                    1 => '@Httplug/webprofiler.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
                'console.command.easycorp_bundle_easydeploybundle_command_deploycommand' => 'easy_deploy.command.deploy',
                'console.command.easycorp_bundle_easydeploybundle_command_rollbackcommand' => 'easy_deploy.command.rollback',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'console.command.symfony_bundle_webserverbundle_command_serverruncommand',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'console.command.symfony_bundle_webserverbundle_command_serverstartcommand',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'console.command.symfony_bundle_webserverbundle_command_serverstopcommand',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand',
            ),
        );
    }
}
