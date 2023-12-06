<?php

namespace {
    class ACFE_World_Data
    {
        public $countries;
        public $languages;
        public $currencies;
        function __construct()
        {
        }
    }
    class ACFE_World_Query
    {
        // Vars
        public $type;
        public $args;
        public $data;
        /*
         * Construct
         */
        function __construct($args)
        {
        }
        /*
         * Validate
         */
        function validate()
        {
        }
        /*
         * Filter
         */
        function filter()
        {
        }
        /*
         * Order
         */
        function order()
        {
        }
        /*
         * Get
         */
        function get()
        {
        }
    }
    class acfe_pro_hooks
    {
        function __construct()
        {
        }
        function load_field($field)
        {
        }
        function prepare_field($field)
        {
        }
        function pre_render_field($field)
        {
        }
        function replace_render_field($field)
        {
        }
        function render_field($field)
        {
        }
        function load_value($value, $post_id, $field)
        {
        }
        function update_value($value, $post_id, $field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
        function validate_value($valid, $value, $field, $input)
        {
        }
        function delete_value($post_id, $field_name, $field)
        {
        }
        function validate_hook($field, $hook_name)
        {
        }
    }
    class acfe_pro_field_group_hide_on_screen
    {
        function __construct()
        {
        }
        function admin_head()
        {
        }
        /*
         * Hide on screen: Settings
         */
        function prepare_hide_on_screen($field)
        {
        }
        /*
         * Hide on screen: Styles
         */
        function get_field_group_style($style, $field_group)
        {
        }
    }
    class acfe_field_group_ui
    {
        function __construct()
        {
        }
        /*
         * Admin Head
         */
        function admin_head()
        {
        }
        function prepare_data()
        {
        }
        /*
         * Render Settings
         */
        function render_settings($field_group)
        {
        }
        /*
         * Render: Data button
         */
        function render_data($field)
        {
        }
        /*
         * Prepare Meta
         */
        function prepare_meta()
        {
        }
    }
    class acfe_settings_export extends \ACF_Admin_Tool
    {
        function initialize()
        {
        }
        function html()
        {
        }
        function html_archive()
        {
        }
        function html_single()
        {
        }
        function load()
        {
        }
        function submit()
        {
        }
        function get_data()
        {
        }
        function get_action()
        {
        }
    }
    class acfe_module_export extends \ACF_Admin_Tool
    {
        public $instance;
        public $action;
        public $data = array();
        public $description;
        public $select;
        public $default_action;
        public $allowed_actions = array();
        public $file;
        public $files;
        public $messages = array();
        function html()
        {
        }
        function html_archive()
        {
        }
        function html_single()
        {
        }
        function load()
        {
        }
        function submit()
        {
        }
        function get_data()
        {
        }
        function get_keys()
        {
        }
        function get_action()
        {
        }
    }
    class acfe_dynamic_templates_export extends \acfe_module_export
    {
        function initialize()
        {
        }
    }
    class acfe_rewrite_rules_export extends \ACF_Admin_Tool
    {
        function initialize()
        {
        }
        function html()
        {
        }
        function html_archive()
        {
        }
        function html_single()
        {
        }
        function load()
        {
        }
        function submit()
        {
        }
        function get_data()
        {
        }
        function get_action()
        {
        }
    }
    class acfe_settings_import extends \ACF_Admin_Tool
    {
        function initialize()
        {
        }
        function html()
        {
        }
        function submit()
        {
        }
        function validate_file()
        {
        }
    }
    class acfe_module_import extends \ACF_Admin_Tool
    {
        public $hook;
        public $description;
        public $instance;
        public $messages = array();
        function html()
        {
        }
        function submit()
        {
        }
        function validate_file()
        {
        }
    }
    class acfe_dynamic_templates_import extends \acfe_module_import
    {
        function initialize()
        {
        }
    }
    class acfe_pro_admin_settings
    {
        public $defaults = array();
        public $updated = array();
        public $fields = array();
        function __construct()
        {
        }
        /*
         * ACF Init
         */
        function acf_init()
        {
        }
        /*
         * Load
         */
        function load()
        {
        }
        /*
         * Save Post
         */
        function save_post()
        {
        }
        /*
         * Get Setting
         */
        function get_setting($name)
        {
        }
        /*
         * Validate Setting
         */
        function validate_setting($setting)
        {
        }
        /*
         * Prepare Setting
         */
        function prepare_setting($setting)
        {
        }
        /*
         * HTML
         */
        function html()
        {
        }
        /*
         * Render Fields
         */
        function render_fields()
        {
        }
        /*
         * Register Fields
         */
        function register_fields()
        {
        }
    }
    class acfe_pro_admin_menu
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        function admin_menu()
        {
        }
    }
    class ACFE_Paypal
    {
        // https://developer.paypal.com/docs/archive/express-checkout/ec-initiate-payment/#request
        // https://developer.paypal.com/docs/nvp-soap-api/set-express-checkout-soap/
        // https://developer.paypal.com/developer/accounts/
        // https://developer.paypal.com/docs/nvp-soap-api/errors/
        // https://developer.paypal.com/docs/nvp-soap-api/endpoints/
        // https://developer.paypal.com/docs/archive/express-checkout/ec-initiate-payment/#redirect-the-buyer-to-paypal
        public function request($url, $args)
        {
        }
        public function confirm($url, $args)
        {
        }
        function send_request($url, $data)
        {
        }
        function convert_result($result)
        {
        }
    }
}
namespace Stripe {
    /**
     * Class StripeObject.
     */
    class StripeObject implements \ArrayAccess, \Countable, \JsonSerializable
    {
        /** @var Util\RequestOptions */
        protected $_opts;
        /** @var array */
        protected $_originalValues;
        /** @var array */
        protected $_values;
        /** @var Util\Set */
        protected $_unsavedValues;
        /** @var Util\Set */
        protected $_transientValues;
        /** @var null|array */
        protected $_retrieveOptions;
        /** @var null|ApiResponse */
        protected $_lastResponse;
        /**
         * @return Util\Set Attributes that should not be sent to the API because
         *    they're not updatable (e.g. ID).
         */
        public static function getPermanentAttributes()
        {
        }
        /**
         * Additive objects are subobjects in the API that don't have the same
         * semantics as most subobjects, which are fully replaced when they're set.
         *
         * This is best illustrated by example. The `source` parameter sent when
         * updating a subscription is *not* additive; if we set it:
         *
         *     source[object]=card&source[number]=123
         *
         * We expect the old `source` object to have been overwritten completely. If
         * the previous source had an `address_state` key associated with it and we
         * didn't send one this time, that value of `address_state` is gone.
         *
         * By contrast, additive objects are those that will have new data added to
         * them while keeping any existing data in place. The only known case of its
         * use is for `metadata`, but it could in theory be more general. As an
         * example, say we have a `metadata` object that looks like this on the
         * server side:
         *
         *     metadata = ["old" => "old_value"]
         *
         * If we update the object with `metadata[new]=new_value`, the server side
         * object now has *both* fields:
         *
         *     metadata = ["old" => "old_value", "new" => "new_value"]
         *
         * This is okay in itself because usually users will want to treat it as
         * additive:
         *
         *     $obj->metadata["new"] = "new_value";
         *     $obj->save();
         *
         * However, in other cases, they may want to replace the entire existing
         * contents:
         *
         *     $obj->metadata = ["new" => "new_value"];
         *     $obj->save();
         *
         * This is where things get a little bit tricky because in order to clear
         * any old keys that may have existed, we actually have to send an explicit
         * empty string to the server. So the operation above would have to send
         * this form to get the intended behavior:
         *
         *     metadata[old]=&metadata[new]=new_value
         *
         * This method allows us to track which parameters are considered additive,
         * and lets us behave correctly where appropriate when serializing
         * parameters to be sent.
         *
         * @return Util\Set Set of additive parameters
         */
        public static function getAdditiveParams()
        {
        }
        public function __construct($id = null, $opts = null)
        {
        }
        // Standard accessor magic methods
        public function __set($k, $v)
        {
        }
        public function __isset($k)
        {
        }
        public function __unset($k)
        {
        }
        public function &__get($k)
        {
        }
        // Magic method for var_dump output. Only works with PHP >= 5.6
        public function __debugInfo()
        {
        }
        // ArrayAccess methods
        public function offsetSet($k, $v)
        {
        }
        public function offsetExists($k)
        {
        }
        public function offsetUnset($k)
        {
        }
        public function offsetGet($k)
        {
        }
        // Countable method
        public function count()
        {
        }
        public function keys()
        {
        }
        public function values()
        {
        }
        /**
         * This unfortunately needs to be public to be used in Util\Util.
         *
         * @param array $values
         * @param null|array|string|Util\RequestOptions $opts
         *
         * @return static the object constructed from the given values
         */
        public static function constructFrom($values, $opts = null)
        {
        }
        /**
         * Refreshes this object using the provided values.
         *
         * @param array $values
         * @param null|array|string|Util\RequestOptions $opts
         * @param bool $partial defaults to false
         */
        public function refreshFrom($values, $opts, $partial = false)
        {
        }
        /**
         * Mass assigns attributes on the model.
         *
         * @param array $values
         * @param null|array|string|Util\RequestOptions $opts
         * @param bool $dirty defaults to true
         */
        public function updateAttributes($values, $opts = null, $dirty = true)
        {
        }
        /**
         * @param bool $force defaults to false
         *
         * @return array a recursive mapping of attributes to values for this object,
         *    including the proper value for deleted attributes
         */
        public function serializeParameters($force = false)
        {
        }
        public function serializeParamsValue($value, $original, $unsaved, $force, $key = null)
        {
        }
        public function jsonSerialize()
        {
        }
        /**
         * Returns an associative array with the key and values composing the
         * Stripe object.
         *
         * @return array the associative array
         */
        public function toArray()
        {
        }
        /**
         * Returns a pretty JSON representation of the Stripe object.
         *
         * @return string the JSON representation of the Stripe object
         */
        public function toJSON()
        {
        }
        public function __toString()
        {
        }
        /**
         * Sets all keys within the StripeObject as unsaved so that they will be
         * included with an update when `serializeParameters` is called. This
         * method is also recursive, so any StripeObjects contained as values or
         * which are values in a tenant array are also marked as dirty.
         */
        public function dirty()
        {
        }
        protected function dirtyValue($value)
        {
        }
        /**
         * Produces a deep copy of the given object including support for arrays
         * and StripeObjects.
         *
         * @param mixed $obj
         */
        protected static function deepCopy($obj)
        {
        }
        /**
         * Returns a hash of empty values for all the values that are in the given
         * StripeObject.
         *
         * @param mixed $obj
         */
        public static function emptyValues($obj)
        {
        }
        /**
         * @return null|ApiResponse The last response from the Stripe API
         */
        public function getLastResponse()
        {
        }
        /**
         * Sets the last response from the Stripe API.
         *
         * @param ApiResponse $resp
         */
        public function setLastResponse($resp)
        {
        }
        /**
         * Indicates whether or not the resource has been deleted on the server.
         * Note that some, but not all, resources can indicate whether they have
         * been deleted.
         *
         * @return bool whether the resource is deleted
         */
        public function isDeleted()
        {
        }
    }
}
namespace Stripe\ApiOperations {
    /**
     * Trait for resources that need to make API requests.
     *
     * This trait should only be applied to classes that derive from StripeObject.
     */
    trait Request
    {
        /**
         * @param null|array|mixed $params The list of parameters to validate
         *
         * @throws \Stripe\Exception\InvalidArgumentException if $params exists and is not an array
         */
        protected static function _validateParams($params = null)
        {
        }
        /**
         * @param string $method HTTP method ('get', 'post', etc.)
         * @param string $url URL for the request
         * @param array $params list of parameters for the request
         * @param null|array|string $options
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return array tuple containing (the JSON response, $options)
         */
        protected function _request($method, $url, $params = [], $options = null)
        {
        }
        /**
         * @param string $method HTTP method ('get', 'post', etc.)
         * @param string $url URL for the request
         * @param callable $readBodyChunk function that will receive chunks of data from a successful request body
         * @param array $params list of parameters for the request
         * @param null|array|string $options
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return array tuple containing (the JSON response, $options)
         */
        protected function _requestStream($method, $url, $readBodyChunk, $params = [], $options = null)
        {
        }
        /**
         * @param string $method HTTP method ('get', 'post', etc.)
         * @param string $url URL for the request
         * @param array $params list of parameters for the request
         * @param null|array|string $options
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return array tuple containing (the JSON response, $options)
         */
        protected static function _staticRequest($method, $url, $params, $options)
        {
        }
        /**
         * @param string $method HTTP method ('get', 'post', etc.)
         * @param string $url URL for the request
         * @param callable $readBodyChunk function that will receive chunks of data from a successful request body
         * @param array $params list of parameters for the request
         * @param null|array|string $options
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         */
        protected static function _staticStreamingRequest($method, $url, $readBodyChunk, $params, $options)
        {
        }
    }
}
namespace Stripe {
    /**
     * Class ApiResource.
     */
    abstract class ApiResource extends \Stripe\StripeObject
    {
        use \Stripe\ApiOperations\Request;
        /**
         * @return \Stripe\Util\Set A list of fields that can be their own type of
         * API resource (say a nested card under an account for example), and if
         * that resource is set, it should be transmitted to the API on a create or
         * update. Doing so is not the default behavior because API resources
         * should normally be persisted on their own RESTful endpoints.
         */
        public static function getSavedNestedResources()
        {
        }
        /**
         * @var bool A flag that can be set a behavior that will cause this
         * resource to be encoded and sent up along with an update of its parent
         * resource. This is usually not desirable because resources are updated
         * individually on their own endpoints, but there are certain cases,
         * replacing a customer's source for example, where this is allowed.
         */
        public $saveWithParent = false;
        public function __set($k, $v)
        {
        }
        /**
         * @throws Exception\ApiErrorException
         *
         * @return ApiResource the refreshed resource
         */
        public function refresh()
        {
        }
        /**
         * @return string the base URL for the given class
         */
        public static function baseUrl()
        {
        }
        /**
         * @return string the endpoint URL for the given class
         */
        public static function classUrl()
        {
        }
        /**
         * @param null|string $id the ID of the resource
         *
         * @throws Exception\UnexpectedValueException if $id is null
         *
         * @return string the instance endpoint URL for the given class
         */
        public static function resourceUrl($id)
        {
        }
        /**
         * @return string the full API URL for this API resource
         */
        public function instanceUrl()
        {
        }
    }
}
namespace Stripe\ApiOperations {
    /**
     * Trait for deletable resources. Adds a `delete()` method to the class.
     *
     * This trait should only be applied to classes that derive from StripeObject.
     */
    trait Delete
    {
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return static the deleted resource
         */
        public function delete($params = null, $opts = null)
        {
        }
    }
    /**
     * Trait for updatable resources. Adds an `update()` static method and a
     * `save()` method to the class.
     *
     * This trait should only be applied to classes that derive from StripeObject.
     */
    trait Update
    {
        /**
         * @param string $id the ID of the resource to update
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return static the updated resource
         */
        public static function update($id, $params = null, $opts = null)
        {
        }
        /**
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return static the saved resource
         */
        public function save($opts = null)
        {
        }
    }
}
namespace Stripe {
    /**
     * You can store multiple cards on a customer in order to charge the customer
     * later. You can also store multiple debit cards on a recipient in order to
     * transfer to those cards later.
     *
     * Related guide: <a href="https://stripe.com/docs/sources/cards">Card Payments
     * with Sources</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|string|\Stripe\Account $account The account this card belongs to. This attribute will not be in the card object if the card belongs to a customer or recipient instead.
     * @property null|string $address_city City/District/Suburb/Town/Village.
     * @property null|string $address_country Billing address country, if provided when creating card.
     * @property null|string $address_line1 Address line 1 (Street address/PO Box/Company name).
     * @property null|string $address_line1_check If <code>address_line1</code> was provided, results of the check: <code>pass</code>, <code>fail</code>, <code>unavailable</code>, or <code>unchecked</code>.
     * @property null|string $address_line2 Address line 2 (Apartment/Suite/Unit/Building).
     * @property null|string $address_state State/County/Province/Region.
     * @property null|string $address_zip ZIP or postal code.
     * @property null|string $address_zip_check If <code>address_zip</code> was provided, results of the check: <code>pass</code>, <code>fail</code>, <code>unavailable</code>, or <code>unchecked</code>.
     * @property null|string[] $available_payout_methods A set of available payout methods for this card. Only values from this set should be passed as the <code>method</code> when creating a payout.
     * @property string $brand Card brand. Can be <code>American Express</code>, <code>Diners Club</code>, <code>Discover</code>, <code>JCB</code>, <code>MasterCard</code>, <code>UnionPay</code>, <code>Visa</code>, or <code>Unknown</code>.
     * @property null|string $country Two-letter ISO code representing the country of the card. You could use this attribute to get a sense of the international breakdown of cards you've collected.
     * @property null|string $currency Three-letter <a href="https://stripe.com/docs/payouts">ISO code for currency</a>. Only applicable on accounts (not customers or recipients). The card can be used as a transfer destination for funds in this currency.
     * @property null|string|\Stripe\Customer $customer The customer that this card belongs to. This attribute will not be in the card object if the card belongs to an account or recipient instead.
     * @property null|string $cvc_check If a CVC was provided, results of the check: <code>pass</code>, <code>fail</code>, <code>unavailable</code>, or <code>unchecked</code>. A result of unchecked indicates that CVC was provided but hasn't been checked yet. Checks are typically performed when attaching a card to a Customer object, or when creating a charge. For more details, see <a href="https://support.stripe.com/questions/check-if-a-card-is-valid-without-a-charge">Check if a card is valid without a charge</a>.
     * @property null|bool $default_for_currency Whether this card is the default external account for its currency.
     * @property null|string $dynamic_last4 (For tokenized numbers only.) The last four digits of the device account number.
     * @property int $exp_month Two-digit number representing the card's expiration month.
     * @property int $exp_year Four-digit number representing the card's expiration year.
     * @property null|string $fingerprint <p>Uniquely identifies this particular card number. You can use this attribute to check whether two customers who’ve signed up with you are using the same card number, for example. For payment methods that tokenize card information (Apple Pay, Google Pay), the tokenized number might be provided instead of the underlying card number.</p><p><em>Starting May 1, 2021, card fingerprint in India for Connect will change to allow two fingerprints for the same card --- one for India and one for the rest of the world.</em></p>
     * @property string $funding Card funding type. Can be <code>credit</code>, <code>debit</code>, <code>prepaid</code>, or <code>unknown</code>.
     * @property string $last4 The last four digits of the card.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string $name Cardholder name.
     * @property null|string|\Stripe\Recipient $recipient The recipient that this card belongs to. This attribute will not be in the card object if the card belongs to a customer or account instead.
     * @property null|string $tokenization_method If the card number is tokenized, this is the method that was used. Can be <code>android_pay</code> (includes Google Pay), <code>apple_pay</code>, <code>masterpass</code>, <code>visa_checkout</code>, or null.
     */
    class Card extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'card';
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Update;
        /**
         * Possible string representations of the CVC check status.
         *
         * @see https://stripe.com/docs/api/cards/object#card_object-cvc_check
         */
        const CVC_CHECK_FAIL = 'fail';
        const CVC_CHECK_PASS = 'pass';
        const CVC_CHECK_UNAVAILABLE = 'unavailable';
        const CVC_CHECK_UNCHECKED = 'unchecked';
        /**
         * Possible string representations of the funding of the card.
         *
         * @see https://stripe.com/docs/api/cards/object#card_object-funding
         */
        const FUNDING_CREDIT = 'credit';
        const FUNDING_DEBIT = 'debit';
        const FUNDING_PREPAID = 'prepaid';
        const FUNDING_UNKNOWN = 'unknown';
        /**
         * Possible string representations of the tokenization method when using Apple Pay or Google Pay.
         *
         * @see https://stripe.com/docs/api/cards/object#card_object-tokenization_method
         */
        const TOKENIZATION_METHOD_APPLE_PAY = 'apple_pay';
        const TOKENIZATION_METHOD_GOOGLE_PAY = 'google_pay';
        /**
         * @return string The instance URL for this resource. It needs to be special
         *    cased because cards are nested resources that may belong to different
         *    top-level resources.
         */
        public function instanceUrl()
        {
        }
        /**
         * @param array|string $_id
         * @param null|array|string $_opts
         *
         * @throws \Stripe\Exception\BadMethodCallException
         */
        public static function retrieve($_id, $_opts = null)
        {
        }
        /**
         * @param string $_id
         * @param null|array $_params
         * @param null|array|string $_options
         *
         * @throws \Stripe\Exception\BadMethodCallException
         */
        public static function update($_id, $_params = null, $_options = null)
        {
        }
    }
}
namespace Stripe\ApiOperations {
    /**
     * Trait for listable resources. Adds a `all()` static method to the class.
     *
     * This trait should only be applied to classes that derive from StripeObject.
     */
    trait All
    {
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection of ApiResources
         */
        public static function all($params = null, $opts = null)
        {
        }
    }
    /**
     * Trait for creatable resources. Adds a `create()` static method to the class.
     *
     * This trait should only be applied to classes that derive from StripeObject.
     */
    trait Create
    {
        /**
         * @param null|array $params
         * @param null|array|string $options
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return static the created resource
         */
        public static function create($params = null, $options = null)
        {
        }
    }
    /**
     * Trait for retrievable resources. Adds a `retrieve()` static method to the
     * class.
     *
     * This trait should only be applied to classes that derive from StripeObject.
     */
    trait Retrieve
    {
        /**
         * @param array|string $id the ID of the API resource to retrieve,
         *     or an options array containing an `id` key
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return static
         */
        public static function retrieve($id, $opts = null)
        {
        }
    }
}
namespace Stripe {
    /**
     * PaymentMethod objects represent your customer's payment instruments. They can be
     * used with <a
     * href="https://stripe.com/docs/payments/payment-intents">PaymentIntents</a> to
     * collect payments or saved to Customer objects to store instrument details for
     * future payments.
     *
     * Related guides: <a
     * href="https://stripe.com/docs/payments/payment-methods">Payment Methods</a> and
     * <a href="https://stripe.com/docs/payments/more-payment-scenarios">More Payment
     * Scenarios</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property \Stripe\StripeObject $acss_debit
     * @property \Stripe\StripeObject $afterpay_clearpay
     * @property \Stripe\StripeObject $alipay
     * @property \Stripe\StripeObject $au_becs_debit
     * @property \Stripe\StripeObject $bacs_debit
     * @property \Stripe\StripeObject $bancontact
     * @property \Stripe\StripeObject $billing_details
     * @property \Stripe\StripeObject $boleto
     * @property \Stripe\StripeObject $card
     * @property \Stripe\StripeObject $card_present
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string|\Stripe\Customer $customer The ID of the Customer to which this PaymentMethod is saved. This will not be set when the PaymentMethod has not been saved to a Customer.
     * @property \Stripe\StripeObject $eps
     * @property \Stripe\StripeObject $fpx
     * @property \Stripe\StripeObject $giropay
     * @property \Stripe\StripeObject $grabpay
     * @property \Stripe\StripeObject $ideal
     * @property \Stripe\StripeObject $interac_present
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property \Stripe\StripeObject $oxxo
     * @property \Stripe\StripeObject $p24
     * @property \Stripe\StripeObject $sepa_debit
     * @property \Stripe\StripeObject $sofort
     * @property string $type The type of the PaymentMethod. An additional hash is included on the PaymentMethod with a name matching this value. It contains additional information specific to the PaymentMethod type.
     * @property \Stripe\StripeObject $wechat_pay
     */
    class PaymentMethod extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'payment_method';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentMethod the attached payment method
         */
        public function attach($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentMethod the detached payment method
         */
        public function detach($params = null, $opts = null)
        {
        }
    }
    /**
     * Class RequestTelemetry.
     *
     * Tracks client request telemetry
     */
    class RequestTelemetry
    {
        public $requestId;
        public $requestDuration;
        /**
         * Initialize a new telemetry object.
         *
         * @param string $requestId the request's request ID
         * @param int $requestDuration the request's duration in milliseconds
         */
        public function __construct($requestId, $requestDuration)
        {
        }
    }
    /**
     * Stripe needs to collect certain pieces of information about each account
     * created. These requirements can differ depending on the account's country. The
     * Country Specs API makes these rules available to your integration.
     *
     * You can also view the information from this API call as <a
     * href="/docs/connect/required-verification-information">an online guide</a>.
     *
     * @property string $id Unique identifier for the object. Represented as the ISO country code for this country.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property string $default_currency The default currency for this country. This applies to both payment methods and bank accounts.
     * @property \Stripe\StripeObject $supported_bank_account_currencies Currencies that can be accepted in the specific country (for transfers).
     * @property string[] $supported_payment_currencies Currencies that can be accepted in the specified country (for payments).
     * @property string[] $supported_payment_methods Payment methods available in the specified country. You may need to enable some payment methods (e.g., <a href="https://stripe.com/docs/ach">ACH</a>) on your account before they appear in this list. The <code>stripe</code> payment method refers to <a href="https://stripe.com/docs/connect/destination-charges">charging through your platform</a>.
     * @property string[] $supported_transfer_countries Countries that can accept transfers from the specified country.
     * @property \Stripe\StripeObject $verification_fields
     */
    class CountrySpec extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'country_spec';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
    }
    /**
     * Subscriptions allow you to charge a customer on a recurring basis.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/billing/subscriptions/creating">Creating
     * Subscriptions</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|float $application_fee_percent A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice subtotal that will be transferred to the application owner's Stripe account.
     * @property \Stripe\StripeObject $automatic_tax
     * @property int $billing_cycle_anchor Determines the date of the first full invoice, and, for plans with <code>month</code> or <code>year</code> intervals, the day of the month for subsequent invoices.
     * @property null|\Stripe\StripeObject $billing_thresholds Define thresholds at which an invoice will be sent, and the subscription advanced to a new billing period
     * @property null|int $cancel_at A date in the future at which the subscription will automatically get canceled
     * @property bool $cancel_at_period_end If the subscription has been canceled with the <code>at_period_end</code> flag set to <code>true</code>, <code>cancel_at_period_end</code> on the subscription will be true. You can use this attribute to determine whether a subscription that has a status of active is scheduled to be canceled at the end of the current period.
     * @property null|int $canceled_at If the subscription has been canceled, the date of that cancellation. If the subscription was canceled with <code>cancel_at_period_end</code>, <code>canceled_at</code> will reflect the time of the most recent update request, not the end of the subscription period when the subscription is automatically moved to a canceled state.
     * @property null|string $collection_method Either <code>charge_automatically</code>, or <code>send_invoice</code>. When charging automatically, Stripe will attempt to pay this subscription at the end of the cycle using the default source attached to the customer. When sending an invoice, Stripe will email your customer an invoice with payment instructions.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property int $current_period_end End of the current period that the subscription has been invoiced for. At the end of this period, a new invoice will be created.
     * @property int $current_period_start Start of the current period that the subscription has been invoiced for.
     * @property string|\Stripe\Customer $customer ID of the customer who owns the subscription.
     * @property null|int $days_until_due Number of days a customer has to pay invoices generated by this subscription. This value will be <code>null</code> for subscriptions where <code>collection_method=charge_automatically</code>.
     * @property null|string|\Stripe\PaymentMethod $default_payment_method ID of the default payment method for the subscription. It must belong to the customer associated with the subscription. This takes precedence over <code>default_source</code>. If neither are set, invoices will use the customer's <a href="https://stripe.com/docs/api/customers/object#customer_object-invoice_settings-default_payment_method">invoice_settings.default_payment_method</a> or <a href="https://stripe.com/docs/api/customers/object#customer_object-default_source">default_source</a>.
     * @property null|string|\Stripe\Account|\Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source $default_source ID of the default payment source for the subscription. It must belong to the customer associated with the subscription and be in a chargeable state. If <code>default_payment_method</code> is also set, <code>default_payment_method</code> will take precedence. If neither are set, invoices will use the customer's <a href="https://stripe.com/docs/api/customers/object#customer_object-invoice_settings-default_payment_method">invoice_settings.default_payment_method</a> or <a href="https://stripe.com/docs/api/customers/object#customer_object-default_source">default_source</a>.
     * @property null|\Stripe\TaxRate[] $default_tax_rates The tax rates that will apply to any subscription item that does not have <code>tax_rates</code> set. Invoices created will have their <code>default_tax_rates</code> populated from the subscription.
     * @property null|\Stripe\Discount $discount Describes the current discount applied to this subscription, if there is one. When billing, a discount applied to a subscription overrides a discount applied on a customer-wide basis.
     * @property null|int $ended_at If the subscription has ended, the date the subscription ended.
     * @property \Stripe\Collection $items List of subscription items, each with an attached price.
     * @property null|string|\Stripe\Invoice $latest_invoice The most recent invoice this subscription has generated.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|int $next_pending_invoice_item_invoice Specifies the approximate timestamp on which any pending invoice items will be billed according to the schedule provided at <code>pending_invoice_item_interval</code>.
     * @property null|\Stripe\StripeObject $pause_collection If specified, payment collection for this subscription will be paused.
     * @property null|\Stripe\StripeObject $payment_settings Payment settings passed on to invoices created by the subscription.
     * @property null|\Stripe\StripeObject $pending_invoice_item_interval Specifies an interval for how often to bill for any pending invoice items. It is analogous to calling <a href="https://stripe.com/docs/api#create_invoice">Create an invoice</a> for the given subscription at the specified interval.
     * @property null|string|\Stripe\SetupIntent $pending_setup_intent You can use this <a href="https://stripe.com/docs/api/setup_intents">SetupIntent</a> to collect user authentication when creating a subscription without immediate payment or updating a subscription's payment method, allowing you to optimize for off-session payments. Learn more in the <a href="https://stripe.com/docs/billing/migration/strong-customer-authentication#scenario-2">SCA Migration Guide</a>.
     * @property null|\Stripe\StripeObject $pending_update If specified, <a href="https://stripe.com/docs/billing/subscriptions/pending-updates">pending updates</a> that will be applied to the subscription once the <code>latest_invoice</code> has been paid.
     * @property null|string|\Stripe\SubscriptionSchedule $schedule The schedule attached to the subscription
     * @property int $start_date Date when the subscription was first created. The date might differ from the <code>created</code> date due to backdating.
     * @property string $status <p>Possible values are <code>incomplete</code>, <code>incomplete_expired</code>, <code>trialing</code>, <code>active</code>, <code>past_due</code>, <code>canceled</code>, or <code>unpaid</code>.</p><p>For <code>collection_method=charge_automatically</code> a subscription moves into <code>incomplete</code> if the initial payment attempt fails. A subscription in this state can only have metadata and default_source updated. Once the first invoice is paid, the subscription moves into an <code>active</code> state. If the first invoice is not paid within 23 hours, the subscription transitions to <code>incomplete_expired</code>. This is a terminal state, the open invoice will be voided and no further invoices will be generated.</p><p>A subscription that is currently in a trial period is <code>trialing</code> and moves to <code>active</code> when the trial period is over.</p><p>If subscription <code>collection_method=charge_automatically</code> it becomes <code>past_due</code> when payment to renew it fails and <code>canceled</code> or <code>unpaid</code> (depending on your subscriptions settings) when Stripe has exhausted all payment retry attempts.</p><p>If subscription <code>collection_method=send_invoice</code> it becomes <code>past_due</code> when its invoice is not paid by the due date, and <code>canceled</code> or <code>unpaid</code> if it is still not paid by an additional deadline after that. Note that when a subscription has a status of <code>unpaid</code>, no subsequent invoices will be attempted (invoices will be created, but then immediately automatically closed). After receiving updated payment information from a customer, you may choose to reopen and pay their closed invoices.</p>
     * @property null|int $trial_end If the subscription has a trial, the end of that trial.
     * @property null|int $trial_start If the subscription has a trial, the beginning of that trial.
     */
    class Subscription extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'subscription';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const PAYMENT_BEHAVIOR_ALLOW_INCOMPLETE = 'allow_incomplete';
        const PAYMENT_BEHAVIOR_ERROR_IF_INCOMPLETE = 'error_if_incomplete';
        const PAYMENT_BEHAVIOR_PENDING_IF_INCOMPLETE = 'pending_if_incomplete';
        const PRORATION_BEHAVIOR_ALWAYS_INVOICE = 'always_invoice';
        const PRORATION_BEHAVIOR_CREATE_PRORATIONS = 'create_prorations';
        const PRORATION_BEHAVIOR_NONE = 'none';
        const STATUS_ACTIVE = 'active';
        const STATUS_CANCELED = 'canceled';
        const STATUS_INCOMPLETE = 'incomplete';
        const STATUS_INCOMPLETE_EXPIRED = 'incomplete_expired';
        const STATUS_PAST_DUE = 'past_due';
        const STATUS_TRIALING = 'trialing';
        const STATUS_UNPAID = 'unpaid';
        use \Stripe\ApiOperations\Delete {
            delete as protected _delete;
        }
        public static function getSavedNestedResources()
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Subscription the deleted subscription
         */
        public function cancel($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Subscription the updated subscription
         */
        public function deleteDiscount($params = null, $opts = null)
        {
        }
    }
    /**
     * Interface for a Stripe client.
     */
    interface BaseStripeClientInterface
    {
        /**
         * Gets the API key used by the client to send requests.
         *
         * @return null|string the API key used by the client to send requests
         */
        public function getApiKey();
        /**
         * Gets the client ID used by the client in OAuth requests.
         *
         * @return null|string the client ID used by the client in OAuth requests
         */
        public function getClientId();
        /**
         * Gets the base URL for Stripe's API.
         *
         * @return string the base URL for Stripe's API
         */
        public function getApiBase();
        /**
         * Gets the base URL for Stripe's OAuth API.
         *
         * @return string the base URL for Stripe's OAuth API
         */
        public function getConnectBase();
        /**
         * Gets the base URL for Stripe's Files API.
         *
         * @return string the base URL for Stripe's Files API
         */
        public function getFilesBase();
    }
    /**
     * Interface for a Stripe client.
     */
    interface StripeClientInterface extends \Stripe\BaseStripeClientInterface
    {
        /**
         * Sends a request to Stripe's API.
         *
         * @param string $method the HTTP method
         * @param string $path the path of the request
         * @param array $params the parameters of the request
         * @param array|\Stripe\Util\RequestOptions $opts the special modifiers of the request
         *
         * @return \Stripe\StripeObject the object returned by Stripe's API
         */
        public function request($method, $path, $params, $opts);
    }
    /**
     * Interface for a Stripe client.
     */
    interface StripeStreamingClientInterface extends \Stripe\BaseStripeClientInterface
    {
        public function requestStream($method, $path, $readBodyChunkCallable, $params, $opts);
    }
    class BaseStripeClient implements \Stripe\StripeClientInterface, \Stripe\StripeStreamingClientInterface
    {
        /** @var string default base URL for Stripe's API */
        const DEFAULT_API_BASE = 'https://api.stripe.com';
        /** @var string default base URL for Stripe's OAuth API */
        const DEFAULT_CONNECT_BASE = 'https://connect.stripe.com';
        /** @var string default base URL for Stripe's Files API */
        const DEFAULT_FILES_BASE = 'https://files.stripe.com';
        /**
         * Initializes a new instance of the {@link BaseStripeClient} class.
         *
         * The constructor takes a single argument. The argument can be a string, in which case it
         * should be the API key. It can also be an array with various configuration settings.
         *
         * Configuration settings include the following options:
         *
         * - api_key (null|string): the Stripe API key, to be used in regular API requests.
         * - client_id (null|string): the Stripe client ID, to be used in OAuth requests.
         * - stripe_account (null|string): a Stripe account ID. If set, all requests sent by the client
         *   will automatically use the {@code Stripe-Account} header with that account ID.
         * - stripe_version (null|string): a Stripe API verion. If set, all requests sent by the client
         *   will include the {@code Stripe-Version} header with that API version.
         *
         * The following configuration settings are also available, though setting these should rarely be necessary
         * (only useful if you want to send requests to a mock server like stripe-mock):
         *
         * - api_base (string): the base URL for regular API requests. Defaults to
         *   {@link DEFAULT_API_BASE}.
         * - connect_base (string): the base URL for OAuth requests. Defaults to
         *   {@link DEFAULT_CONNECT_BASE}.
         * - files_base (string): the base URL for file creation requests. Defaults to
         *   {@link DEFAULT_FILES_BASE}.
         *
         * @param array<string, mixed>|string $config the API key as a string, or an array containing
         *   the client configuration settings
         */
        public function __construct($config = [])
        {
        }
        /**
         * Gets the API key used by the client to send requests.
         *
         * @return null|string the API key used by the client to send requests
         */
        public function getApiKey()
        {
        }
        /**
         * Gets the client ID used by the client in OAuth requests.
         *
         * @return null|string the client ID used by the client in OAuth requests
         */
        public function getClientId()
        {
        }
        /**
         * Gets the base URL for Stripe's API.
         *
         * @return string the base URL for Stripe's API
         */
        public function getApiBase()
        {
        }
        /**
         * Gets the base URL for Stripe's OAuth API.
         *
         * @return string the base URL for Stripe's OAuth API
         */
        public function getConnectBase()
        {
        }
        /**
         * Gets the base URL for Stripe's Files API.
         *
         * @return string the base URL for Stripe's Files API
         */
        public function getFilesBase()
        {
        }
        /**
         * Sends a request to Stripe's API.
         *
         * @param string $method the HTTP method
         * @param string $path the path of the request
         * @param array $params the parameters of the request
         * @param array|\Stripe\Util\RequestOptions $opts the special modifiers of the request
         *
         * @return \Stripe\StripeObject the object returned by Stripe's API
         */
        public function request($method, $path, $params, $opts)
        {
        }
        /**
         * Sends a request to Stripe's API, passing chunks of the streamed response
         * into a user-provided $readBodyChunkCallable callback.
         *
         * @param string $method the HTTP method
         * @param string $path the path of the request
         * @param callable $readBodyChunkCallable a function that will be called
         * @param array $params the parameters of the request
         * @param array|\Stripe\Util\RequestOptions $opts the special modifiers of the request
         * with chunks of bytes from the body if the request is successful
         */
        public function requestStream($method, $path, $readBodyChunkCallable, $params, $opts)
        {
        }
        /**
         * Sends a request to Stripe's API.
         *
         * @param string $method the HTTP method
         * @param string $path the path of the request
         * @param array $params the parameters of the request
         * @param array|\Stripe\Util\RequestOptions $opts the special modifiers of the request
         *
         * @return \Stripe\Collection of ApiResources
         */
        public function requestCollection($method, $path, $params, $opts)
        {
        }
    }
    /**
     * Client used to send requests to Stripe's API.
     *
     * @property \Stripe\Service\AccountLinkService $accountLinks
     * @property \Stripe\Service\AccountService $accounts
     * @property \Stripe\Service\ApplePayDomainService $applePayDomains
     * @property \Stripe\Service\ApplicationFeeService $applicationFees
     * @property \Stripe\Service\BalanceService $balance
     * @property \Stripe\Service\BalanceTransactionService $balanceTransactions
     * @property \Stripe\Service\BillingPortal\BillingPortalServiceFactory $billingPortal
     * @property \Stripe\Service\ChargeService $charges
     * @property \Stripe\Service\Checkout\CheckoutServiceFactory $checkout
     * @property \Stripe\Service\CountrySpecService $countrySpecs
     * @property \Stripe\Service\CouponService $coupons
     * @property \Stripe\Service\CreditNoteService $creditNotes
     * @property \Stripe\Service\CustomerService $customers
     * @property \Stripe\Service\DisputeService $disputes
     * @property \Stripe\Service\EphemeralKeyService $ephemeralKeys
     * @property \Stripe\Service\EventService $events
     * @property \Stripe\Service\ExchangeRateService $exchangeRates
     * @property \Stripe\Service\FileLinkService $fileLinks
     * @property \Stripe\Service\FileService $files
     * @property \Stripe\Service\Identity\IdentityServiceFactory $identity
     * @property \Stripe\Service\InvoiceItemService $invoiceItems
     * @property \Stripe\Service\InvoiceService $invoices
     * @property \Stripe\Service\Issuing\IssuingServiceFactory $issuing
     * @property \Stripe\Service\MandateService $mandates
     * @property \Stripe\Service\OAuthService $oauth
     * @property \Stripe\Service\OrderReturnService $orderReturns
     * @property \Stripe\Service\OrderService $orders
     * @property \Stripe\Service\PaymentIntentService $paymentIntents
     * @property \Stripe\Service\PaymentMethodService $paymentMethods
     * @property \Stripe\Service\PayoutService $payouts
     * @property \Stripe\Service\PlanService $plans
     * @property \Stripe\Service\PriceService $prices
     * @property \Stripe\Service\ProductService $products
     * @property \Stripe\Service\PromotionCodeService $promotionCodes
     * @property \Stripe\Service\QuoteService $quotes
     * @property \Stripe\Service\Radar\RadarServiceFactory $radar
     * @property \Stripe\Service\RefundService $refunds
     * @property \Stripe\Service\Reporting\ReportingServiceFactory $reporting
     * @property \Stripe\Service\ReviewService $reviews
     * @property \Stripe\Service\SetupAttemptService $setupAttempts
     * @property \Stripe\Service\SetupIntentService $setupIntents
     * @property \Stripe\Service\Sigma\SigmaServiceFactory $sigma
     * @property \Stripe\Service\SkuService $skus
     * @property \Stripe\Service\SourceService $sources
     * @property \Stripe\Service\SubscriptionItemService $subscriptionItems
     * @property \Stripe\Service\SubscriptionScheduleService $subscriptionSchedules
     * @property \Stripe\Service\SubscriptionService $subscriptions
     * @property \Stripe\Service\TaxCodeService $taxCodes
     * @property \Stripe\Service\TaxRateService $taxRates
     * @property \Stripe\Service\Terminal\TerminalServiceFactory $terminal
     * @property \Stripe\Service\TokenService $tokens
     * @property \Stripe\Service\TopupService $topups
     * @property \Stripe\Service\TransferService $transfers
     * @property \Stripe\Service\WebhookEndpointService $webhookEndpoints
     */
    class StripeClient extends \Stripe\BaseStripeClient
    {
        public function __get($name)
        {
        }
    }
    /**
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property int $expires Time at which the key will expire. Measured in seconds since the Unix epoch.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property string $secret The key's secret. You can use this value to make authorized requests to the Stripe API.
     * @property array $associated_objects
     */
    class EphemeralKey extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'ephemeral_key';
        use \Stripe\ApiOperations\Create {
            create as protected _create;
        }
        use \Stripe\ApiOperations\Delete;
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\InvalidArgumentException if stripe_version is missing
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\EphemeralKey the created key
         */
        public static function create($params = null, $opts = null)
        {
        }
    }
    /**
     * A <code>Payout</code> object is created when you receive funds from Stripe, or
     * when you initiate a payout to either a bank account or debit card of a <a
     * href="/docs/connect/bank-debit-card-payouts">connected Stripe account</a>. You
     * can retrieve individual payouts, as well as list all payouts. Payouts are made
     * on <a href="/docs/connect/manage-payout-schedule">varying schedules</a>,
     * depending on your country and industry.
     *
     * Related guide: <a href="https://stripe.com/docs/payouts">Receiving Payouts</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Amount (in %s) to be transferred to your bank account or debit card.
     * @property int $arrival_date Date the payout is expected to arrive in the bank. This factors in delays like weekends or bank holidays.
     * @property bool $automatic Returns <code>true</code> if the payout was created by an <a href="https://stripe.com/docs/payouts#payout-schedule">automated payout schedule</a>, and <code>false</code> if it was <a href="https://stripe.com/docs/payouts#manual-payouts">requested manually</a>.
     * @property null|string|\Stripe\BalanceTransaction $balance_transaction ID of the balance transaction that describes the impact of this payout on your account balance.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property null|string|\Stripe\BankAccount|\Stripe\Card $destination ID of the bank account or card the payout was sent to.
     * @property null|string|\Stripe\BalanceTransaction $failure_balance_transaction If the payout failed or was canceled, this will be the ID of the balance transaction that reversed the initial balance transaction, and puts the funds from the failed payout back in your balance.
     * @property null|string $failure_code Error code explaining reason for payout failure if available. See <a href="https://stripe.com/docs/api#payout_failures">Types of payout failures</a> for a list of failure codes.
     * @property null|string $failure_message Message to user further explaining reason for payout failure if available.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property string $method The method used to send this payout, which can be <code>standard</code> or <code>instant</code>. <code>instant</code> is only supported for payouts to debit cards. (See <a href="https://stripe.com/blog/instant-payouts-for-marketplaces">Instant payouts for marketplaces</a> for more information.)
     * @property null|string|\Stripe\Payout $original_payout If the payout reverses another, this is the ID of the original payout.
     * @property null|string|\Stripe\Payout $reversed_by If the payout was reversed, this is the ID of the payout that reverses this payout.
     * @property string $source_type The source balance this payout came from. One of <code>card</code>, <code>fpx</code>, or <code>bank_account</code>.
     * @property null|string $statement_descriptor Extra information about a payout to be displayed on the user's bank statement.
     * @property string $status Current status of the payout: <code>paid</code>, <code>pending</code>, <code>in_transit</code>, <code>canceled</code> or <code>failed</code>. A payout is <code>pending</code> until it is submitted to the bank, when it becomes <code>in_transit</code>. The status then changes to <code>paid</code> if the transaction goes through, or to <code>failed</code> or <code>canceled</code> (within 5 business days). Some failed payouts may initially show as <code>paid</code> but then change to <code>failed</code>.
     * @property string $type Can be <code>bank_account</code> or <code>card</code>.
     */
    class Payout extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'payout';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const FAILURE_ACCOUNT_CLOSED = 'account_closed';
        const FAILURE_ACCOUNT_FROZEN = 'account_frozen';
        const FAILURE_BANK_ACCOUNT_RESTRICTED = 'bank_account_restricted';
        const FAILURE_BANK_OWNERSHIP_CHANGED = 'bank_ownership_changed';
        const FAILURE_COULD_NOT_PROCESS = 'could_not_process';
        const FAILURE_DEBIT_NOT_AUTHORIZED = 'debit_not_authorized';
        const FAILURE_DECLINED = 'declined';
        const FAILURE_INCORRECT_ACCOUNT_HOLDER_NAME = 'incorrect_account_holder_name';
        const FAILURE_INSUFFICIENT_FUNDS = 'insufficient_funds';
        const FAILURE_INVALID_ACCOUNT_NUMBER = 'invalid_account_number';
        const FAILURE_INVALID_CURRENCY = 'invalid_currency';
        const FAILURE_NO_ACCOUNT = 'no_account';
        const FAILURE_UNSUPPORTED_CARD = 'unsupported_card';
        const METHOD_INSTANT = 'instant';
        const METHOD_STANDARD = 'standard';
        const STATUS_CANCELED = 'canceled';
        const STATUS_FAILED = 'failed';
        const STATUS_IN_TRANSIT = 'in_transit';
        const STATUS_PAID = 'paid';
        const STATUS_PENDING = 'pending';
        const TYPE_BANK_ACCOUNT = 'bank_account';
        const TYPE_CARD = 'card';
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Payout the canceled payout
         */
        public function cancel($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Payout the reversed payout
         */
        public function reverse($params = null, $opts = null)
        {
        }
    }
    /**
     * Class AlipayAccount.
     *
     * @deprecated Alipay accounts are deprecated. Please use the sources API instead.
     * @see https://stripe.com/docs/sources/alipay
     */
    class AlipayAccount extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'alipay_account';
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Update;
        /**
         * @return string The instance URL for this resource. It needs to be special
         *    cased because it doesn't fit into the standard resource pattern.
         */
        public function instanceUrl()
        {
        }
        /**
         * @param array|string $_id
         * @param null|array|string $_opts
         *
         * @throws \Stripe\Exception\BadMethodCallException
         *
         * @deprecated Alipay accounts are deprecated. Please use the sources API instead.
         * @see https://stripe.com/docs/sources/alipay
         */
        public static function retrieve($_id, $_opts = null)
        {
        }
        /**
         * @param string $_id
         * @param null|array $_params
         * @param null|array|string $_options
         *
         * @throws \Stripe\Exception\BadMethodCallException
         *
         * @deprecated Alipay accounts are deprecated. Please use the sources API instead.
         * @see https://stripe.com/docs/sources/alipay
         */
        public static function update($_id, $_params = null, $_options = null)
        {
        }
    }
}
namespace Stripe\ApiOperations {
    /**
     * Trait for resources that have nested resources.
     *
     * This trait should only be applied to classes that derive from StripeObject.
     */
    trait NestedResource
    {
        /**
         * @param string $method
         * @param string $url
         * @param null|array $params
         * @param null|array|string $options
         *
         * @return \Stripe\StripeObject
         */
        protected static function _nestedResourceOperation($method, $url, $params = null, $options = null)
        {
        }
        /**
         * @param string $id
         * @param string $nestedPath
         * @param null|string $nestedId
         *
         * @return string
         */
        protected static function _nestedResourceUrl($id, $nestedPath, $nestedId = null)
        {
        }
        /**
         * @param string $id
         * @param string $nestedPath
         * @param null|array $params
         * @param null|array|string $options
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\StripeObject
         */
        protected static function _createNestedResource($id, $nestedPath, $params = null, $options = null)
        {
        }
        /**
         * @param string $id
         * @param string $nestedPath
         * @param null|string $nestedId
         * @param null|array $params
         * @param null|array|string $options
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\StripeObject
         */
        protected static function _retrieveNestedResource($id, $nestedPath, $nestedId, $params = null, $options = null)
        {
        }
        /**
         * @param string $id
         * @param string $nestedPath
         * @param null|string $nestedId
         * @param null|array $params
         * @param null|array|string $options
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\StripeObject
         */
        protected static function _updateNestedResource($id, $nestedPath, $nestedId, $params = null, $options = null)
        {
        }
        /**
         * @param string $id
         * @param string $nestedPath
         * @param null|string $nestedId
         * @param null|array $params
         * @param null|array|string $options
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\StripeObject
         */
        protected static function _deleteNestedResource($id, $nestedPath, $nestedId, $params = null, $options = null)
        {
        }
        /**
         * @param string $id
         * @param string $nestedPath
         * @param null|array $params
         * @param null|array|string $options
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\StripeObject
         */
        protected static function _allNestedResources($id, $nestedPath, $params = null, $options = null)
        {
        }
    }
}
namespace Stripe\Reporting {
    /**
     * The Report Run object represents an instance of a report type generated with
     * specific run parameters. Once the object is created, Stripe begins processing
     * the report. When the report has finished running, it will give you a reference
     * to a file where you can retrieve your results. For an overview, see <a
     * href="https://stripe.com/docs/reporting/statements/api">API Access to
     * Reports</a>.
     *
     * Note that certain report types can only be run based on your live-mode data (not
     * test-mode data), and will error when queried without a <a
     * href="https://stripe.com/docs/keys#test-live-modes">live-mode API key</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string $error If something should go wrong during the run, a message about the failure (populated when <code>status=failed</code>).
     * @property bool $livemode <code>true</code> if the report is run on live mode data and <code>false</code> if it is run on test mode data.
     * @property \Stripe\StripeObject $parameters
     * @property string $report_type The ID of the <a href="https://stripe.com/docs/reports/report-types">report type</a> to run, such as <code>&quot;balance.summary.1&quot;</code>.
     * @property null|\Stripe\File $result The file object representing the result of the report run (populated when <code>status=succeeded</code>).
     * @property string $status Status of this report run. This will be <code>pending</code> when the run is initially created. When the run finishes, this will be set to <code>succeeded</code> and the <code>result</code> field will be populated. Rarely, we may encounter an error, at which point this will be set to <code>failed</code> and the <code>error</code> field will be populated.
     * @property null|int $succeeded_at Timestamp at which this run successfully finished (populated when <code>status=succeeded</code>). Measured in seconds since the Unix epoch.
     */
    class ReportRun extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'reporting.report_run';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
    }
    /**
     * The Report Type resource corresponds to a particular type of report, such as the
     * &quot;Activity summary&quot; or &quot;Itemized payouts&quot; reports. These
     * objects are identified by an ID belonging to a set of enumerated values. See <a
     * href="https://stripe.com/docs/reporting/statements/api">API Access to Reports
     * documentation</a> for those Report Type IDs, along with required and optional
     * parameters.
     *
     * Note that certain report types can only be run based on your live-mode data (not
     * test-mode data), and will error when queried without a <a
     * href="https://stripe.com/docs/keys#test-live-modes">live-mode API key</a>.
     *
     * @property string $id The <a href="https://stripe.com/docs/reporting/statements/api#available-report-types">ID of the Report Type</a>, such as <code>balance.summary.1</code>.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $data_available_end Most recent time for which this Report Type is available. Measured in seconds since the Unix epoch.
     * @property int $data_available_start Earliest time for which this Report Type is available. Measured in seconds since the Unix epoch.
     * @property null|string[] $default_columns List of column names that are included by default when this Report Type gets run. (If the Report Type doesn't support the <code>columns</code> parameter, this will be null.)
     * @property string $name Human-readable name of the Report Type
     * @property int $updated When this Report Type was latest updated. Measured in seconds since the Unix epoch.
     * @property int $version Version of the Report Type. Different versions report with the same ID will have the same purpose, but may take different run parameters or have different result schemas.
     */
    class ReportType extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'reporting.report_type';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
    }
}
namespace Stripe {
    /**
     * With <code>Recipient</code> objects, you can transfer money from your Stripe
     * account to a third-party bank account or debit card. The API allows you to
     * create, delete, and update your recipients. You can retrieve individual
     * recipients as well as a list of all your recipients.
     *
     * <strong><code>Recipient</code> objects have been deprecated in favor of <a
     * href="https://stripe.com/docs/connect">Connect</a>, specifically Connect's much
     * more powerful <a href="https://stripe.com/docs/api#account">Account objects</a>.
     * Stripe accounts that don't already use recipients can no longer begin doing so.
     * Please use <code>Account</code> objects instead.</strong>
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|\Stripe\BankAccount $active_account Hash describing the current account on the recipient, if there is one.
     * @property null|\Stripe\Collection $cards
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string|\Stripe\Card $default_card The default card to use for creating transfers to this recipient.
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property null|string $email
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string|\Stripe\Account $migrated_to The ID of the <a href="https://stripe.com/docs/connect/custom-accounts">Custom account</a> this recipient was migrated to. If set, the recipient can no longer be updated, nor can transfers be made to it: use the Custom account instead.
     * @property null|string $name Full, legal name of the recipient.
     * @property string|\Stripe\Account $rolled_back_from
     * @property string $type Type of the recipient, one of <code>individual</code> or <code>corporation</code>.
     * @property bool $verified Whether the recipient has been verified. This field is non-standard, and maybe removed in the future
     */
    class Recipient extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'recipient';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
    /**
     * <code>Refund</code> objects allow you to refund a charge that has previously
     * been created but not yet refunded. Funds will be refunded to the credit or debit
     * card that was originally charged.
     *
     * Related guide: <a href="https://stripe.com/docs/refunds">Refunds</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Amount, in %s.
     * @property null|string|\Stripe\BalanceTransaction $balance_transaction Balance transaction that describes the impact on your account balance.
     * @property null|string|\Stripe\Charge $charge ID of the charge that was refunded.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property string $description An arbitrary string attached to the object. Often useful for displaying to users. (Available on non-card refunds only)
     * @property string|\Stripe\BalanceTransaction $failure_balance_transaction If the refund failed, this balance transaction describes the adjustment made on your account balance that reverses the initial balance transaction.
     * @property string $failure_reason If the refund failed, the reason for refund failure if known. Possible values are <code>lost_or_stolen_card</code>, <code>expired_or_canceled_card</code>, or <code>unknown</code>.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string|\Stripe\PaymentIntent $payment_intent ID of the PaymentIntent that was refunded.
     * @property null|string $reason Reason for the refund, either user-provided (<code>duplicate</code>, <code>fraudulent</code>, or <code>requested_by_customer</code>) or generated by Stripe internally (<code>expired_uncaptured_charge</code>).
     * @property null|string $receipt_number This is the transaction number that appears on email receipts sent for this refund.
     * @property null|string|\Stripe\TransferReversal $source_transfer_reversal The transfer reversal that is associated with the refund. Only present if the charge came from another Stripe account. See the Connect documentation for details.
     * @property null|string $status Status of the refund. For credit card refunds, this can be <code>pending</code>, <code>succeeded</code>, or <code>failed</code>. For other types of refunds, it can be <code>pending</code>, <code>succeeded</code>, <code>failed</code>, or <code>canceled</code>. Refer to our <a href="https://stripe.com/docs/refunds#failed-refunds">refunds</a> documentation for more details.
     * @property null|string|\Stripe\TransferReversal $transfer_reversal If the accompanying transfer was reversed, the transfer reversal object. Only applicable if the charge was created using the destination parameter.
     */
    class Refund extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'refund';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const FAILURE_REASON_EXPIRED_OR_CANCELED_CARD = 'expired_or_canceled_card';
        const FAILURE_REASON_LOST_OR_STOLEN_CARD = 'lost_or_stolen_card';
        const FAILURE_REASON_UNKNOWN = 'unknown';
        const REASON_DUPLICATE = 'duplicate';
        const REASON_FRAUDULENT = 'fraudulent';
        const REASON_REQUESTED_BY_CUSTOMER = 'requested_by_customer';
        const STATUS_CANCELED = 'canceled';
        const STATUS_FAILED = 'failed';
        const STATUS_PENDING = 'pending';
        const STATUS_SUCCEEDED = 'succeeded';
        /**
         * @deprecated use FAILURE_REASON_EXPIRED_OR_CANCELED_CARD instead
         */
        const FAILURE_REASON = 'expired_or_canceled_card';
    }
    /**
     * Events are our way of letting you know when something interesting happens in
     * your account. When an interesting event occurs, we create a new
     * <code>Event</code> object. For example, when a charge succeeds, we create a
     * <code>charge.succeeded</code> event; and when an invoice payment attempt fails,
     * we create an <code>invoice.payment_failed</code> event. Note that many API
     * requests may cause multiple events to be created. For example, if you create a
     * new subscription for a customer, you will receive both a
     * <code>customer.subscription.created</code> event and a
     * <code>charge.succeeded</code> event.
     *
     * Events occur when the state of another API resource changes. The state of that
     * resource at the time of the change is embedded in the event's data field. For
     * example, a <code>charge.succeeded</code> event will contain a charge, and an
     * <code>invoice.payment_failed</code> event will contain an invoice.
     *
     * As with other API resources, you can use endpoints to retrieve an <a
     * href="https://stripe.com/docs/api#retrieve_event">individual event</a> or a <a
     * href="https://stripe.com/docs/api#list_events">list of events</a> from the API.
     * We also have a separate <a
     * href="http://en.wikipedia.org/wiki/Webhook">webhooks</a> system for sending the
     * <code>Event</code> objects directly to an endpoint on your server. Webhooks are
     * managed in your <a href="https://dashboard.stripe.com/account/webhooks">account
     * settings</a>, and our <a href="https://stripe.com/docs/webhooks">Using
     * Webhooks</a> guide will help you get set up.
     *
     * When using <a href="https://stripe.com/docs/connect">Connect</a>, you can also
     * receive notifications of events that occur in connected accounts. For these
     * events, there will be an additional <code>account</code> attribute in the
     * received <code>Event</code> object.
     *
     * <strong>NOTE:</strong> Right now, access to events through the <a
     * href="https://stripe.com/docs/api#retrieve_event">Retrieve Event API</a> is
     * guaranteed only for 30 days.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property string $account The connected account that originated the event.
     * @property null|string $api_version The Stripe API version used to render <code>data</code>. <em>Note: This property is populated only for events on or after October 31, 2014</em>.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property \Stripe\StripeObject $data
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property int $pending_webhooks Number of webhooks that have yet to be successfully delivered (i.e., to return a 20x response) to the URLs you've specified.
     * @property null|\Stripe\StripeObject $request Information on the API request that instigated the event.
     * @property string $type Description of the event (e.g., <code>invoice.created</code> or <code>charge.refunded</code>).
     */
    class Event extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'event';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
        /**
         * Possible string representations of event types.
         *
         * @see https://stripe.com/docs/api#event_types
         */
        const ACCOUNT_UPDATED = 'account.updated';
        const ACCOUNT_APPLICATION_AUTHORIZED = 'account.application.authorized';
        const ACCOUNT_APPLICATION_DEAUTHORIZED = 'account.application.deauthorized';
        const ACCOUNT_EXTERNAL_ACCOUNT_CREATED = 'account.external_account.created';
        const ACCOUNT_EXTERNAL_ACCOUNT_DELETED = 'account.external_account.deleted';
        const ACCOUNT_EXTERNAL_ACCOUNT_UPDATED = 'account.external_account.updated';
        const APPLICATION_FEE_CREATED = 'application_fee.created';
        const APPLICATION_FEE_REFUNDED = 'application_fee.refunded';
        const APPLICATION_FEE_REFUND_UPDATED = 'application_fee.refund.updated';
        const BALANCE_AVAILABLE = 'balance.available';
        const BILLING_PORTAL_CONFIGURATION_CREATED = 'billing_portal.configuration.created';
        const BILLING_PORTAL_CONFIGURATION_UPDATED = 'billing_portal.configuration.updated';
        const CAPABILITY_UPDATED = 'capability.updated';
        const CHARGE_CAPTURED = 'charge.captured';
        const CHARGE_EXPIRED = 'charge.expired';
        const CHARGE_FAILED = 'charge.failed';
        const CHARGE_PENDING = 'charge.pending';
        const CHARGE_REFUNDED = 'charge.refunded';
        const CHARGE_SUCCEEDED = 'charge.succeeded';
        const CHARGE_UPDATED = 'charge.updated';
        const CHARGE_DISPUTE_CLOSED = 'charge.dispute.closed';
        const CHARGE_DISPUTE_CREATED = 'charge.dispute.created';
        const CHARGE_DISPUTE_FUNDS_REINSTATED = 'charge.dispute.funds_reinstated';
        const CHARGE_DISPUTE_FUNDS_WITHDRAWN = 'charge.dispute.funds_withdrawn';
        const CHARGE_DISPUTE_UPDATED = 'charge.dispute.updated';
        const CHARGE_REFUND_UPDATED = 'charge.refund.updated';
        const CHECKOUT_SESSION_ASYNC_PAYMENT_FAILED = 'checkout.session.async_payment_failed';
        const CHECKOUT_SESSION_ASYNC_PAYMENT_SUCCEEDED = 'checkout.session.async_payment_succeeded';
        const CHECKOUT_SESSION_COMPLETED = 'checkout.session.completed';
        const COUPON_CREATED = 'coupon.created';
        const COUPON_DELETED = 'coupon.deleted';
        const COUPON_UPDATED = 'coupon.updated';
        const CREDIT_NOTE_CREATED = 'credit_note.created';
        const CREDIT_NOTE_UPDATED = 'credit_note.updated';
        const CREDIT_NOTE_VOIDED = 'credit_note.voided';
        const CUSTOMER_CREATED = 'customer.created';
        const CUSTOMER_DELETED = 'customer.deleted';
        const CUSTOMER_UPDATED = 'customer.updated';
        const CUSTOMER_DISCOUNT_CREATED = 'customer.discount.created';
        const CUSTOMER_DISCOUNT_DELETED = 'customer.discount.deleted';
        const CUSTOMER_DISCOUNT_UPDATED = 'customer.discount.updated';
        const CUSTOMER_SOURCE_CREATED = 'customer.source.created';
        const CUSTOMER_SOURCE_DELETED = 'customer.source.deleted';
        const CUSTOMER_SOURCE_EXPIRING = 'customer.source.expiring';
        const CUSTOMER_SOURCE_UPDATED = 'customer.source.updated';
        const CUSTOMER_SUBSCRIPTION_CREATED = 'customer.subscription.created';
        const CUSTOMER_SUBSCRIPTION_DELETED = 'customer.subscription.deleted';
        const CUSTOMER_SUBSCRIPTION_PENDING_UPDATE_APPLIED = 'customer.subscription.pending_update_applied';
        const CUSTOMER_SUBSCRIPTION_PENDING_UPDATE_EXPIRED = 'customer.subscription.pending_update_expired';
        const CUSTOMER_SUBSCRIPTION_TRIAL_WILL_END = 'customer.subscription.trial_will_end';
        const CUSTOMER_SUBSCRIPTION_UPDATED = 'customer.subscription.updated';
        const CUSTOMER_TAX_ID_CREATED = 'customer.tax_id.created';
        const CUSTOMER_TAX_ID_DELETED = 'customer.tax_id.deleted';
        const CUSTOMER_TAX_ID_UPDATED = 'customer.tax_id.updated';
        const FILE_CREATED = 'file.created';
        const IDENTITY_VERIFICATION_SESSION_CANCELED = 'identity.verification_session.canceled';
        const IDENTITY_VERIFICATION_SESSION_CREATED = 'identity.verification_session.created';
        const IDENTITY_VERIFICATION_SESSION_PROCESSING = 'identity.verification_session.processing';
        const IDENTITY_VERIFICATION_SESSION_REDACTED = 'identity.verification_session.redacted';
        const IDENTITY_VERIFICATION_SESSION_REQUIRES_INPUT = 'identity.verification_session.requires_input';
        const IDENTITY_VERIFICATION_SESSION_VERIFIED = 'identity.verification_session.verified';
        const INVOICE_CREATED = 'invoice.created';
        const INVOICE_DELETED = 'invoice.deleted';
        const INVOICE_FINALIZATION_FAILED = 'invoice.finalization_failed';
        const INVOICE_FINALIZED = 'invoice.finalized';
        const INVOICE_MARKED_UNCOLLECTIBLE = 'invoice.marked_uncollectible';
        const INVOICE_PAID = 'invoice.paid';
        const INVOICE_PAYMENT_ACTION_REQUIRED = 'invoice.payment_action_required';
        const INVOICE_PAYMENT_FAILED = 'invoice.payment_failed';
        const INVOICE_PAYMENT_SUCCEEDED = 'invoice.payment_succeeded';
        const INVOICE_SENT = 'invoice.sent';
        const INVOICE_UPCOMING = 'invoice.upcoming';
        const INVOICE_UPDATED = 'invoice.updated';
        const INVOICE_VOIDED = 'invoice.voided';
        const INVOICEITEM_CREATED = 'invoiceitem.created';
        const INVOICEITEM_DELETED = 'invoiceitem.deleted';
        const INVOICEITEM_UPDATED = 'invoiceitem.updated';
        const ISSUER_FRAUD_RECORD_CREATED = 'issuer_fraud_record.created';
        const ISSUING_AUTHORIZATION_CREATED = 'issuing_authorization.created';
        const ISSUING_AUTHORIZATION_REQUEST = 'issuing_authorization.request';
        const ISSUING_AUTHORIZATION_UPDATED = 'issuing_authorization.updated';
        const ISSUING_CARD_CREATED = 'issuing_card.created';
        const ISSUING_CARD_UPDATED = 'issuing_card.updated';
        const ISSUING_CARDHOLDER_CREATED = 'issuing_cardholder.created';
        const ISSUING_CARDHOLDER_UPDATED = 'issuing_cardholder.updated';
        const ISSUING_DISPUTE_CLOSED = 'issuing_dispute.closed';
        const ISSUING_DISPUTE_CREATED = 'issuing_dispute.created';
        const ISSUING_DISPUTE_FUNDS_REINSTATED = 'issuing_dispute.funds_reinstated';
        const ISSUING_DISPUTE_SUBMITTED = 'issuing_dispute.submitted';
        const ISSUING_DISPUTE_UPDATED = 'issuing_dispute.updated';
        const ISSUING_TRANSACTION_CREATED = 'issuing_transaction.created';
        const ISSUING_TRANSACTION_UPDATED = 'issuing_transaction.updated';
        const MANDATE_UPDATED = 'mandate.updated';
        const ORDER_CREATED = 'order.created';
        const ORDER_PAYMENT_FAILED = 'order.payment_failed';
        const ORDER_PAYMENT_SUCCEEDED = 'order.payment_succeeded';
        const ORDER_UPDATED = 'order.updated';
        const ORDER_RETURN_CREATED = 'order_return.created';
        const PAYMENT_INTENT_AMOUNT_CAPTURABLE_UPDATED = 'payment_intent.amount_capturable_updated';
        const PAYMENT_INTENT_CANCELED = 'payment_intent.canceled';
        const PAYMENT_INTENT_CREATED = 'payment_intent.created';
        const PAYMENT_INTENT_PAYMENT_FAILED = 'payment_intent.payment_failed';
        const PAYMENT_INTENT_PROCESSING = 'payment_intent.processing';
        const PAYMENT_INTENT_REQUIRES_ACTION = 'payment_intent.requires_action';
        const PAYMENT_INTENT_SUCCEEDED = 'payment_intent.succeeded';
        const PAYMENT_METHOD_ATTACHED = 'payment_method.attached';
        const PAYMENT_METHOD_AUTOMATICALLY_UPDATED = 'payment_method.automatically_updated';
        const PAYMENT_METHOD_CARD_AUTOMATICALLY_UPDATED = 'payment_method.card_automatically_updated';
        const PAYMENT_METHOD_DETACHED = 'payment_method.detached';
        const PAYMENT_METHOD_UPDATED = 'payment_method.updated';
        const PAYOUT_CANCELED = 'payout.canceled';
        const PAYOUT_CREATED = 'payout.created';
        const PAYOUT_FAILED = 'payout.failed';
        const PAYOUT_PAID = 'payout.paid';
        const PAYOUT_UPDATED = 'payout.updated';
        const PERSON_CREATED = 'person.created';
        const PERSON_DELETED = 'person.deleted';
        const PERSON_UPDATED = 'person.updated';
        const PING = 'ping';
        const PLAN_CREATED = 'plan.created';
        const PLAN_DELETED = 'plan.deleted';
        const PLAN_UPDATED = 'plan.updated';
        const PRICE_CREATED = 'price.created';
        const PRICE_DELETED = 'price.deleted';
        const PRICE_UPDATED = 'price.updated';
        const PRODUCT_CREATED = 'product.created';
        const PRODUCT_DELETED = 'product.deleted';
        const PRODUCT_UPDATED = 'product.updated';
        const PROMOTION_CODE_CREATED = 'promotion_code.created';
        const PROMOTION_CODE_DELETED = 'promotion_code.deleted';
        const PROMOTION_CODE_UPDATED = 'promotion_code.updated';
        const RADAR_EARLY_FRAUD_WARNING_CREATED = 'radar.early_fraud_warning.created';
        const RADAR_EARLY_FRAUD_WARNING_UPDATED = 'radar.early_fraud_warning.updated';
        const RECIPIENT_CREATED = 'recipient.created';
        const RECIPIENT_DELETED = 'recipient.deleted';
        const RECIPIENT_UPDATED = 'recipient.updated';
        const REPORTING_REPORT_RUN_FAILED = 'reporting.report_run.failed';
        const REPORTING_REPORT_RUN_SUCCEEDED = 'reporting.report_run.succeeded';
        const REPORTING_REPORT_TYPE_UPDATED = 'reporting.report_type.updated';
        const REVIEW_CLOSED = 'review.closed';
        const REVIEW_OPENED = 'review.opened';
        const SETUP_INTENT_CANCELED = 'setup_intent.canceled';
        const SETUP_INTENT_CREATED = 'setup_intent.created';
        const SETUP_INTENT_REQUIRES_ACTION = 'setup_intent.requires_action';
        const SETUP_INTENT_SETUP_FAILED = 'setup_intent.setup_failed';
        const SETUP_INTENT_SUCCEEDED = 'setup_intent.succeeded';
        const SIGMA_SCHEDULED_QUERY_RUN_CREATED = 'sigma.scheduled_query_run.created';
        const SKU_CREATED = 'sku.created';
        const SKU_DELETED = 'sku.deleted';
        const SKU_UPDATED = 'sku.updated';
        const SOURCE_CANCELED = 'source.canceled';
        const SOURCE_CHARGEABLE = 'source.chargeable';
        const SOURCE_FAILED = 'source.failed';
        const SOURCE_MANDATE_NOTIFICATION = 'source.mandate_notification';
        const SOURCE_REFUND_ATTRIBUTES_REQUIRED = 'source.refund_attributes_required';
        const SOURCE_TRANSACTION_CREATED = 'source.transaction.created';
        const SOURCE_TRANSACTION_UPDATED = 'source.transaction.updated';
        const SUBSCRIPTION_SCHEDULE_ABORTED = 'subscription_schedule.aborted';
        const SUBSCRIPTION_SCHEDULE_CANCELED = 'subscription_schedule.canceled';
        const SUBSCRIPTION_SCHEDULE_COMPLETED = 'subscription_schedule.completed';
        const SUBSCRIPTION_SCHEDULE_CREATED = 'subscription_schedule.created';
        const SUBSCRIPTION_SCHEDULE_EXPIRING = 'subscription_schedule.expiring';
        const SUBSCRIPTION_SCHEDULE_RELEASED = 'subscription_schedule.released';
        const SUBSCRIPTION_SCHEDULE_UPDATED = 'subscription_schedule.updated';
        const TAX_RATE_CREATED = 'tax_rate.created';
        const TAX_RATE_UPDATED = 'tax_rate.updated';
        const TOPUP_CANCELED = 'topup.canceled';
        const TOPUP_CREATED = 'topup.created';
        const TOPUP_FAILED = 'topup.failed';
        const TOPUP_REVERSED = 'topup.reversed';
        const TOPUP_SUCCEEDED = 'topup.succeeded';
        const TRANSFER_CREATED = 'transfer.created';
        const TRANSFER_REVERSED = 'transfer.reversed';
        const TRANSFER_UPDATED = 'transfer.updated';
    }
    /**
     * You can add one or multiple tax IDs to a <a
     * href="https://stripe.com/docs/api/customers">customer</a>. A customer's tax IDs
     * are displayed on invoices and credit notes issued for the customer.
     *
     * Related guide: <a href="https://stripe.com/docs/billing/taxes/tax-ids">Customer
     * Tax Identification Numbers</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|string $country Two-letter ISO code representing the country of the tax ID.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string|\Stripe\Customer $customer ID of the customer.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property string $type Type of the tax ID, one of <code>ae_trn</code>, <code>au_abn</code>, <code>br_cnpj</code>, <code>br_cpf</code>, <code>ca_bn</code>, <code>ca_gst_hst</code>, <code>ca_pst_bc</code>, <code>ca_pst_mb</code>, <code>ca_pst_sk</code>, <code>ca_qst</code>, <code>ch_vat</code>, <code>cl_tin</code>, <code>es_cif</code>, <code>eu_vat</code>, <code>gb_vat</code>, <code>hk_br</code>, <code>id_npwp</code>, <code>il_vat</code>, <code>in_gst</code>, <code>jp_cn</code>, <code>jp_rn</code>, <code>kr_brn</code>, <code>li_uid</code>, <code>mx_rfc</code>, <code>my_frp</code>, <code>my_itn</code>, <code>my_sst</code>, <code>no_vat</code>, <code>nz_gst</code>, <code>ru_inn</code>, <code>ru_kpp</code>, <code>sa_vat</code>, <code>sg_gst</code>, <code>sg_uen</code>, <code>th_vat</code>, <code>tw_vat</code>, <code>us_ein</code>, or <code>za_vat</code>. Note that some legacy tax IDs have type <code>unknown</code>
     * @property string $value Value of the tax ID.
     * @property null|\Stripe\StripeObject $verification Tax ID verification information.
     */
    class TaxId extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'tax_id';
        use \Stripe\ApiOperations\Delete;
        const TYPE_AE_TRN = 'ae_trn';
        const TYPE_AU_ABN = 'au_abn';
        const TYPE_BR_CNPJ = 'br_cnpj';
        const TYPE_BR_CPF = 'br_cpf';
        const TYPE_CA_BN = 'ca_bn';
        const TYPE_CA_GST_HST = 'ca_gst_hst';
        const TYPE_CA_PST_BC = 'ca_pst_bc';
        const TYPE_CA_PST_MB = 'ca_pst_mb';
        const TYPE_CA_PST_SK = 'ca_pst_sk';
        const TYPE_CA_QST = 'ca_qst';
        const TYPE_CH_VAT = 'ch_vat';
        const TYPE_CL_TIN = 'cl_tin';
        const TYPE_ES_CIF = 'es_cif';
        const TYPE_EU_VAT = 'eu_vat';
        const TYPE_GB_VAT = 'gb_vat';
        const TYPE_HK_BR = 'hk_br';
        const TYPE_ID_NPWP = 'id_npwp';
        const TYPE_IL_VAT = 'il_vat';
        const TYPE_IN_GST = 'in_gst';
        const TYPE_JP_CN = 'jp_cn';
        const TYPE_JP_RN = 'jp_rn';
        const TYPE_KR_BRN = 'kr_brn';
        const TYPE_LI_UID = 'li_uid';
        const TYPE_MX_RFC = 'mx_rfc';
        const TYPE_MY_FRP = 'my_frp';
        const TYPE_MY_ITN = 'my_itn';
        const TYPE_MY_SST = 'my_sst';
        const TYPE_NO_VAT = 'no_vat';
        const TYPE_NZ_GST = 'nz_gst';
        const TYPE_RU_INN = 'ru_inn';
        const TYPE_RU_KPP = 'ru_kpp';
        const TYPE_SA_VAT = 'sa_vat';
        const TYPE_SG_GST = 'sg_gst';
        const TYPE_SG_UEN = 'sg_uen';
        const TYPE_TH_VAT = 'th_vat';
        const TYPE_TW_VAT = 'tw_vat';
        const TYPE_UNKNOWN = 'unknown';
        const TYPE_US_EIN = 'us_ein';
        const TYPE_ZA_VAT = 'za_vat';
        const VERIFICATION_STATUS_PENDING = 'pending';
        const VERIFICATION_STATUS_UNAVAILABLE = 'unavailable';
        const VERIFICATION_STATUS_UNVERIFIED = 'unverified';
        const VERIFICATION_STATUS_VERIFIED = 'verified';
        /**
         * @return string the API URL for this tax id
         */
        public function instanceUrl()
        {
        }
        /**
         * @param array|string $_id
         * @param null|array|string $_opts
         *
         * @throws \Stripe\Exception\BadMethodCallException
         */
        public static function retrieve($_id, $_opts = null)
        {
        }
    }
    /**
     * A PaymentIntent guides you through the process of collecting a payment from your
     * customer. We recommend that you create exactly one PaymentIntent for each order
     * or customer session in your system. You can reference the PaymentIntent later to
     * see the history of payment attempts for a particular session.
     *
     * A PaymentIntent transitions through <a
     * href="https://stripe.com/docs/payments/intents#intent-statuses">multiple
     * statuses</a> throughout its lifetime as it interfaces with Stripe.js to perform
     * authentication flows and ultimately creates at most one successful charge.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/payments/payment-intents">Payment Intents API</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Amount intended to be collected by this PaymentIntent. A positive integer representing how much to charge in the <a href="https://stripe.com/docs/currencies#zero-decimal">smallest currency unit</a> (e.g., 100 cents to charge $1.00 or 100 to charge ¥100, a zero-decimal currency). The minimum amount is $0.50 US or <a href="https://stripe.com/docs/currencies#minimum-and-maximum-charge-amounts">equivalent in charge currency</a>. The amount value supports up to eight digits (e.g., a value of 99999999 for a USD charge of $999,999.99).
     * @property int $amount_capturable Amount that can be captured from this PaymentIntent.
     * @property int $amount_received Amount that was collected by this PaymentIntent.
     * @property null|string|\Stripe\StripeObject $application ID of the Connect application that created the PaymentIntent.
     * @property null|int $application_fee_amount The amount of the application fee (if any) that will be requested to be applied to the payment and transferred to the application owner's Stripe account. The amount of the application fee collected will be capped at the total payment amount. For more information, see the PaymentIntents <a href="https://stripe.com/docs/payments/connected-accounts">use case for connected accounts</a>.
     * @property null|int $canceled_at Populated when <code>status</code> is <code>canceled</code>, this is the time at which the PaymentIntent was canceled. Measured in seconds since the Unix epoch.
     * @property null|string $cancellation_reason Reason for cancellation of this PaymentIntent, either user-provided (<code>duplicate</code>, <code>fraudulent</code>, <code>requested_by_customer</code>, or <code>abandoned</code>) or generated by Stripe internally (<code>failed_invoice</code>, <code>void_invoice</code>, or <code>automatic</code>).
     * @property string $capture_method Controls when the funds will be captured from the customer's account.
     * @property \Stripe\Collection $charges Charges that were created by this PaymentIntent, if any.
     * @property null|string $client_secret <p>The client secret of this PaymentIntent. Used for client-side retrieval using a publishable key.</p><p>The client secret can be used to complete a payment from your frontend. It should not be stored, logged, embedded in URLs, or exposed to anyone other than the customer. Make sure that you have TLS enabled on any page that includes the client secret.</p><p>Refer to our docs to <a href="https://stripe.com/docs/payments/accept-a-payment?integration=elements">accept a payment</a> and learn about how <code>client_secret</code> should be handled.</p>
     * @property string $confirmation_method
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string|\Stripe\Customer $customer <p>ID of the Customer this PaymentIntent belongs to, if one exists.</p><p>Payment methods attached to other Customers cannot be used with this PaymentIntent.</p><p>If present in combination with <a href="https://stripe.com/docs/api#payment_intent_object-setup_future_usage">setup_future_usage</a>, this PaymentIntent's payment method will be attached to the Customer after the PaymentIntent has been confirmed and any required actions from the user are complete.</p>
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property null|string|\Stripe\Invoice $invoice ID of the invoice that created this PaymentIntent, if it exists.
     * @property null|\Stripe\ErrorObject $last_payment_error The payment error encountered in the previous PaymentIntent confirmation. It will be cleared if the PaymentIntent is later updated for any reason.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format. For more information, see the <a href="https://stripe.com/docs/payments/payment-intents/creating-payment-intents#storing-information-in-metadata">documentation</a>.
     * @property null|\Stripe\StripeObject $next_action If present, this property tells you what actions you need to take in order for your customer to fulfill a payment using the provided source.
     * @property null|string|\Stripe\Account $on_behalf_of The account (if any) for which the funds of the PaymentIntent are intended. See the PaymentIntents <a href="https://stripe.com/docs/payments/connected-accounts">use case for connected accounts</a> for details.
     * @property null|string|\Stripe\PaymentMethod $payment_method ID of the payment method used in this PaymentIntent.
     * @property null|\Stripe\StripeObject $payment_method_options Payment-method-specific configuration for this PaymentIntent.
     * @property string[] $payment_method_types The list of payment method types (e.g. card) that this PaymentIntent is allowed to use.
     * @property null|string $receipt_email Email address that the receipt for the resulting payment will be sent to. If <code>receipt_email</code> is specified for a payment in live mode, a receipt will be sent regardless of your <a href="https://dashboard.stripe.com/account/emails">email settings</a>.
     * @property null|string|\Stripe\Review $review ID of the review associated with this PaymentIntent, if any.
     * @property null|string $setup_future_usage <p>Indicates that you intend to make future payments with this PaymentIntent's payment method.</p><p>Providing this parameter will <a href="https://stripe.com/docs/payments/save-during-payment">attach the payment method</a> to the PaymentIntent's Customer, if present, after the PaymentIntent is confirmed and any required actions from the user are complete. If no Customer was provided, the payment method can still be <a href="https://stripe.com/docs/api/payment_methods/attach">attached</a> to a Customer after the transaction completes.</p><p>When processing card payments, Stripe also uses <code>setup_future_usage</code> to dynamically optimize your payment flow and comply with regional legislation and network rules, such as <a href="https://stripe.com/docs/strong-customer-authentication">SCA</a>.</p>
     * @property null|\Stripe\StripeObject $shipping Shipping information for this PaymentIntent.
     * @property null|string|\Stripe\Account|\Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source $source This is a legacy field that will be removed in the future. It is the ID of the Source object that is associated with this PaymentIntent, if one was supplied.
     * @property null|string $statement_descriptor For non-card charges, you can use this value as the complete description that appears on your customers’ statements. Must contain at least one letter, maximum 22 characters.
     * @property null|string $statement_descriptor_suffix Provides information about a card payment that customers see on their statements. Concatenated with the prefix (shortened descriptor) or statement descriptor that’s set on the account to form the complete statement descriptor. Maximum 22 characters for the concatenated descriptor.
     * @property string $status Status of this PaymentIntent, one of <code>requires_payment_method</code>, <code>requires_confirmation</code>, <code>requires_action</code>, <code>processing</code>, <code>requires_capture</code>, <code>canceled</code>, or <code>succeeded</code>. Read more about each PaymentIntent <a href="https://stripe.com/docs/payments/intents#intent-statuses">status</a>.
     * @property null|\Stripe\StripeObject $transfer_data The data with which to automatically create a Transfer when the payment is finalized. See the PaymentIntents <a href="https://stripe.com/docs/payments/connected-accounts">use case for connected accounts</a> for details.
     * @property null|string $transfer_group A string that identifies the resulting payment as part of a group. See the PaymentIntents <a href="https://stripe.com/docs/payments/connected-accounts">use case for connected accounts</a> for details.
     */
    class PaymentIntent extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'payment_intent';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const STATUS_CANCELED = 'canceled';
        const STATUS_PROCESSING = 'processing';
        const STATUS_REQUIRES_ACTION = 'requires_action';
        const STATUS_REQUIRES_CAPTURE = 'requires_capture';
        const STATUS_REQUIRES_CONFIRMATION = 'requires_confirmation';
        const STATUS_REQUIRES_PAYMENT_METHOD = 'requires_payment_method';
        const STATUS_SUCCEEDED = 'succeeded';
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentIntent the canceled payment intent
         */
        public function cancel($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentIntent the captured payment intent
         */
        public function capture($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentIntent the confirmed payment intent
         */
        public function confirm($params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\HttpClient {
    interface StreamingClientInterface
    {
        /**
         * @param string $method The HTTP method being used
         * @param string $absUrl The URL being requested, including domain and protocol
         * @param array $headers Headers to be used in the request (full strings, not KV pairs)
         * @param array $params KV pairs for parameters. Can be nested for arrays and hashes
         * @param bool $hasFile Whether or not $params references a file (via an @ prefix or
         *                         CURLFile)
         * @param callable $readBodyChunkCallable a function that will be called with chunks of bytes from the body if the request is successful
         *
         * @throws \Stripe\Exception\ApiConnectionException
         * @throws \Stripe\Exception\UnexpectedValueException
         *
         * @return array an array whose first element is raw request body, second
         *    element is HTTP status code and third array of HTTP headers
         */
        public function requestStream($method, $absUrl, $headers, $params, $hasFile, $readBodyChunkCallable);
    }
    interface ClientInterface
    {
        /**
         * @param string $method The HTTP method being used
         * @param string $absUrl The URL being requested, including domain and protocol
         * @param array $headers Headers to be used in the request (full strings, not KV pairs)
         * @param array $params KV pairs for parameters. Can be nested for arrays and hashes
         * @param bool $hasFile Whether or not $params references a file (via an @ prefix or
         *                         CURLFile)
         *
         * @throws \Stripe\Exception\ApiConnectionException
         * @throws \Stripe\Exception\UnexpectedValueException
         *
         * @return array an array whose first element is raw request body, second
         *    element is HTTP status code and third array of HTTP headers
         */
        public function request($method, $absUrl, $headers, $params, $hasFile);
    }
    class CurlClient implements \Stripe\HttpClient\ClientInterface, \Stripe\HttpClient\StreamingClientInterface
    {
        protected static $instance;
        public static function instance()
        {
        }
        protected $defaultOptions;
        /** @var \Stripe\Util\RandomGenerator */
        protected $randomGenerator;
        protected $userAgentInfo;
        protected $enablePersistentConnections = true;
        protected $enableHttp2;
        protected $curlHandle;
        protected $requestStatusCallback;
        /**
         * CurlClient constructor.
         *
         * Pass in a callable to $defaultOptions that returns an array of CURLOPT_* values to start
         * off a request with, or an flat array with the same format used by curl_setopt_array() to
         * provide a static set of options. Note that many options are overridden later in the request
         * call, including timeouts, which can be set via setTimeout() and setConnectTimeout().
         *
         * Note that request() will silently ignore a non-callable, non-array $defaultOptions, and will
         * throw an exception if $defaultOptions returns a non-array value.
         *
         * @param null|array|callable $defaultOptions
         * @param null|\Stripe\Util\RandomGenerator $randomGenerator
         */
        public function __construct($defaultOptions = null, $randomGenerator = null)
        {
        }
        public function __destruct()
        {
        }
        public function initUserAgentInfo()
        {
        }
        public function getDefaultOptions()
        {
        }
        public function getUserAgentInfo()
        {
        }
        /**
         * @return bool
         */
        public function getEnablePersistentConnections()
        {
        }
        /**
         * @param bool $enable
         */
        public function setEnablePersistentConnections($enable)
        {
        }
        /**
         * @return bool
         */
        public function getEnableHttp2()
        {
        }
        /**
         * @param bool $enable
         */
        public function setEnableHttp2($enable)
        {
        }
        /**
         * @return null|callable
         */
        public function getRequestStatusCallback()
        {
        }
        /**
         * Sets a callback that is called after each request. The callback will
         * receive the following parameters:
         * <ol>
         *   <li>string $rbody The response body</li>
         *   <li>integer $rcode The response status code</li>
         *   <li>\Stripe\Util\CaseInsensitiveArray $rheaders The response headers</li>
         *   <li>integer $errno The curl error number</li>
         *   <li>string|null $message The curl error message</li>
         *   <li>boolean $shouldRetry Whether the request will be retried</li>
         *   <li>integer $numRetries The number of the retry attempt</li>
         * </ol>.
         *
         * @param null|callable $requestStatusCallback
         */
        public function setRequestStatusCallback($requestStatusCallback)
        {
        }
        // USER DEFINED TIMEOUTS
        const DEFAULT_TIMEOUT = 80;
        const DEFAULT_CONNECT_TIMEOUT = 30;
        public function setTimeout($seconds)
        {
        }
        public function setConnectTimeout($seconds)
        {
        }
        public function getTimeout()
        {
        }
        public function getConnectTimeout()
        {
        }
        public function request($method, $absUrl, $headers, $params, $hasFile)
        {
        }
        public function requestStream($method, $absUrl, $headers, $params, $hasFile, $readBodyChunk)
        {
        }
        /**
         * Like `executeRequestWithRetries` except:
         *   1. Does not buffer the body of a successful (status code < 300)
         *      response into memory -- instead, calls the caller-provided
         *      $readBodyChunk with each chunk of incoming data.
         *   2. Does not retry if a network error occurs while streaming the
         *      body of a successful response.
         *
         * @param array $opts cURL options
         * @param string $absUrl
         * @param callable @readBodyChunk
         * @param mixed $readBodyChunk
         *
         * @return array
         */
        public function executeStreamingRequestWithRetries($opts, $absUrl, $readBodyChunk)
        {
        }
        /**
         * @param array $opts cURL options
         * @param string $absUrl
         */
        public function executeRequestWithRetries($opts, $absUrl)
        {
        }
    }
}
namespace Stripe {
    /**
     * A SetupAttempt describes one attempted confirmation of a SetupIntent, whether
     * that confirmation was successful or unsuccessful. You can use SetupAttempts to
     * inspect details of a specific attempt at setting up a payment method using a
     * SetupIntent.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|string|\Stripe\StripeObject $application The value of <a href="https://stripe.com/docs/api/setup_intents/object#setup_intent_object-application">application</a> on the SetupIntent at the time of this confirmation.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string|\Stripe\Customer $customer The value of <a href="https://stripe.com/docs/api/setup_intents/object#setup_intent_object-customer">customer</a> on the SetupIntent at the time of this confirmation.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|string|\Stripe\Account $on_behalf_of The value of <a href="https://stripe.com/docs/api/setup_intents/object#setup_intent_object-on_behalf_of">on_behalf_of</a> on the SetupIntent at the time of this confirmation.
     * @property string|\Stripe\PaymentMethod $payment_method ID of the payment method used with this SetupAttempt.
     * @property \Stripe\StripeObject $payment_method_details
     * @property null|\Stripe\ErrorObject $setup_error The error encountered during this attempt to confirm the SetupIntent, if any.
     * @property string|\Stripe\SetupIntent $setup_intent ID of the SetupIntent that this attempt belongs to.
     * @property string $status Status of this SetupAttempt, one of <code>requires_confirmation</code>, <code>requires_action</code>, <code>processing</code>, <code>succeeded</code>, <code>failed</code>, or <code>abandoned</code>.
     * @property string $usage The value of <a href="https://stripe.com/docs/api/setup_intents/object#setup_intent_object-usage">usage</a> on the SetupIntent at the time of this confirmation, one of <code>off_session</code> or <code>on_session</code>.
     */
    class SetupAttempt extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'setup_attempt';
        use \Stripe\ApiOperations\All;
    }
    /**
     * Tokenization is the process Stripe uses to collect sensitive card or bank
     * account details, or personally identifiable information (PII), directly from
     * your customers in a secure manner. A token representing this information is
     * returned to your server to use. You should use our <a
     * href="https://stripe.com/docs/payments">recommended payments integrations</a> to
     * perform this process client-side. This ensures that no sensitive card data
     * touches your server, and allows your integration to operate in a PCI-compliant
     * way.
     *
     * If you cannot use client-side tokenization, you can also create tokens using the
     * API with either your publishable or secret API key. Keep in mind that if your
     * integration uses this method, you are responsible for any PCI compliance that
     * may be required, and you must keep your secret API key safe. Unlike with
     * client-side tokenization, your customer's information is not sent directly to
     * Stripe, so we cannot determine how it is handled or stored.
     *
     * Tokens cannot be stored or used more than once. To store card or bank account
     * information for later use, you can create <a
     * href="https://stripe.com/docs/api#customers">Customer</a> objects or <a
     * href="https://stripe.com/docs/api#external_accounts">Custom accounts</a>. Note
     * that <a href="https://stripe.com/docs/radar">Radar</a>, our integrated solution
     * for automatic fraud protection, performs best with integrations that use
     * client-side tokenization.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/payments/accept-a-payment-charges#web-create-token">Accept
     * a payment</a>
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property \Stripe\BankAccount $bank_account <p>These bank accounts are payment methods on <code>Customer</code> objects.</p><p>On the other hand <a href="https://stripe.com/docs/api#external_accounts">External Accounts</a> are transfer destinations on <code>Account</code> objects for <a href="https://stripe.com/docs/connect/custom-accounts">Custom accounts</a>. They can be bank accounts or debit cards as well, and are documented in the links above.</p><p>Related guide: <a href="https://stripe.com/docs/payments/bank-debits-transfers">Bank Debits and Transfers</a>.</p>
     * @property \Stripe\Card $card <p>You can store multiple cards on a customer in order to charge the customer later. You can also store multiple debit cards on a recipient in order to transfer to those cards later.</p><p>Related guide: <a href="https://stripe.com/docs/sources/cards">Card Payments with Sources</a>.</p>
     * @property null|string $client_ip IP address of the client that generated the token.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property string $type Type of the token: <code>account</code>, <code>bank_account</code>, <code>card</code>, or <code>pii</code>.
     * @property bool $used Whether this token has already been used (tokens can be used only once).
     */
    class Token extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'token';
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        const TYPE_ACCOUNT = 'account';
        const TYPE_BANK_ACCOUNT = 'bank_account';
        const TYPE_CARD = 'card';
        const TYPE_PII = 'pii';
    }
}
namespace Stripe\Identity {
    /**
     * A VerificationSession guides you through the process of collecting and verifying
     * the identities of your users. It contains details about the type of
     * verification, such as what <a
     * href="/docs/identity/verification-checks">verification check</a> to perform.
     * Only create one VerificationSession for each verification in your system.
     *
     * A VerificationSession transitions through <a
     * href="/docs/identity/how-sessions-work">multiple statuses</a> throughout its
     * lifetime as it progresses through the verification flow. The VerificationSession
     * contains the user’s verified data after verification checks are complete.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/identity/verification-sessions">The Verification
     * Sessions API</a>
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|string $client_secret The short-lived client secret used by Stripe.js to <a href="https://stripe.com/docs/js/identity/modal">show a verification modal</a> inside your app. This client secret expires after 24 hours and can only be used once. Don’t store it, log it, embed it in a URL, or expose it to anyone other than the user. Make sure that you have TLS enabled on any page that includes the client secret. Refer to our docs on <a href="https://stripe.com/docs/identity/verification-sessions#client-secret">passing the client secret to the frontend</a> to learn more.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|\Stripe\StripeObject $last_error If present, this property tells you the last error encountered when processing the verification.
     * @property null|string|\Stripe\Identity\VerificationReport $last_verification_report ID of the most recent VerificationReport. <a href="https://stripe.com/docs/identity/verification-sessions#results">Learn more about accessing detailed verification results.</a>
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property \Stripe\StripeObject $options
     * @property null|\Stripe\StripeObject $redaction Redaction status of this VerificationSession. If the VerificationSession is not redacted, this field will be null.
     * @property string $status Status of this VerificationSession. <a href="https://stripe.com/docs/identity/how-sessions-work">Learn more about the lifecycle of sessions</a>.
     * @property string $type The type of <a href="https://stripe.com/docs/identity/verification-checks">verification check</a> to be performed.
     * @property null|string $url The short-lived URL that you use to redirect a user to Stripe to submit their identity information. This URL expires after 24 hours and can only be used once. Don’t store it, log it, send it in emails or expose it to anyone other than the user. Refer to our docs on <a href="https://stripe.com/docs/identity/verify-identity-documents?platform=web&amp;type=redirect">verifying identity documents</a> to learn how to redirect users to Stripe.
     * @property null|\Stripe\StripeObject $verified_outputs The user’s verified data.
     */
    class VerificationSession extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'identity.verification_session';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const STATUS_CANCELED = 'canceled';
        const STATUS_PROCESSING = 'processing';
        const STATUS_REQUIRES_INPUT = 'requires_input';
        const STATUS_VERIFIED = 'verified';
        const TYPE_DOCUMENT = 'document';
        const TYPE_ID_NUMBER = 'id_number';
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\VerificationSession the canceled verification session
         */
        public function cancel($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\VerificationSession the redacted verification session
         */
        public function redact($params = null, $opts = null)
        {
        }
    }
    /**
     * A VerificationReport is the result of an attempt to collect and verify data from
     * a user. The collection of verification checks performed is determined from the
     * <code>type</code> and <code>options</code> parameters used. You can find the
     * result of each verification check performed in the appropriate sub-resource:
     * <code>document</code>, <code>id_number</code>, <code>selfie</code>.
     *
     * Each VerificationReport contains a copy of any data collected by the user as
     * well as reference IDs which can be used to access collected images through the
     * <a href="https://stripe.com/docs/api/files">FileUpload</a> API. To configure and
     * create VerificationReports, use the <a
     * href="https://stripe.com/docs/api/identity/verification_sessions">VerificationSession</a>
     * API.
     *
     * Related guides: <a
     * href="https://stripe.com/docs/identity/verification-sessions#results">Accessing
     * verification results</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property \Stripe\StripeObject $document Result from a document check
     * @property \Stripe\StripeObject $id_number Result from an id_number check
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $options
     * @property \Stripe\StripeObject $selfie Result from a selfie check
     * @property string $type Type of report.
     * @property null|string $verification_session ID of the VerificationSession that created this report.
     */
    class VerificationReport extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'identity.verification_report';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
        const TYPE_DOCUMENT = 'document';
        const TYPE_ID_NUMBER = 'id_number';
    }
}
namespace Stripe {
    /**
     * Class Discount.
     *
     * @property string $checkout_session The Checkout session that this coupon is applied to, if it is applied to a particular session in payment mode. Will not be present for subscription mode.
     * @property \Stripe\Coupon $coupon Hash describing the coupon applied to create this discount.
     * @property string|\Stripe\Customer $customer The ID of the customer associated with this discount.
     * @property int $end If the coupon has a duration of repeating, the date that this discount will end. If the coupon has a duration of once or forever, this attribute will be null.
     * @property string $id The ID of the discount object.
     * @property string $invoice The invoice that the discount’s coupon was applied to, if it was applied directly to a particular invoice.
     * @property string $invoice_item The invoice item id (or invoice line item id for invoice line items of type=‘subscription’) that the discount’s coupon was applied to, if it was applied directly to a particular invoice item or invoice line item.
     * @property string $object String representing the object’s type. Objects of the same type share the same value.
     * @property string $promotion_code The promotion code applied to create this discount.
     * @property int $start Date that the coupon was applied.
     * @property string $subscription The subscription that this coupon is applied to, if it is applied to a particular subscription.
     */
    class Discount extends \Stripe\StripeObject
    {
        const OBJECT_NAME = 'discount';
    }
    /**
     * Products describe the specific goods or services you offer to your customers.
     * For example, you might offer a Standard and Premium version of your goods or
     * service; each version would be a separate Product. They can be used in
     * conjunction with <a href="https://stripe.com/docs/api#prices">Prices</a> to
     * configure pricing in Checkout and Subscriptions.
     *
     * Related guides: <a
     * href="https://stripe.com/docs/billing/subscriptions/set-up-subscription">Set up
     * a subscription</a> or accept <a
     * href="https://stripe.com/docs/payments/checkout/client#create-products">one-time
     * payments with Checkout</a> and more about <a
     * href="https://stripe.com/docs/billing/prices-guide">Products and Prices</a>
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property bool $active Whether the product is currently available for purchase.
     * @property null|string[] $attributes A list of up to 5 attributes that each SKU can provide values for (e.g., <code>[&quot;color&quot;, &quot;size&quot;]</code>).
     * @property null|string $caption A short one-line description of the product, meant to be displayable to the customer. Only applicable to products of <code>type=good</code>.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string[] $deactivate_on An array of connect application identifiers that cannot purchase this product. Only applicable to products of <code>type=good</code>.
     * @property null|string $description The product's description, meant to be displayable to the customer. Use this field to optionally store a long form explanation of the product being sold for your own rendering purposes.
     * @property string[] $images A list of up to 8 URLs of images for this product, meant to be displayable to the customer.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property string $name The product's name, meant to be displayable to the customer. Whenever this product is sold via a subscription, name will show up on associated invoice line item descriptions.
     * @property null|\Stripe\StripeObject $package_dimensions The dimensions of this product for shipping purposes.
     * @property null|bool $shippable Whether this product is shipped (i.e., physical goods).
     * @property null|string $statement_descriptor Extra information about a product which will appear on your customer's credit card statement. In the case that multiple products are billed at once, the first statement descriptor will be used.
     * @property null|string|\Stripe\TaxCode $tax_code A <a href="https://stripe.com/docs/tax/tax-codes">tax code</a> ID.
     * @property string $type The type of the product. The product is either of type <code>good</code>, which is eligible for use with Orders and SKUs, or <code>service</code>, which is eligible for use with Subscriptions and Plans.
     * @property null|string $unit_label A label that represents units of this product in Stripe and on customers’ receipts and invoices. When set, this will be included in associated invoice line item descriptions.
     * @property int $updated Time at which the object was last updated. Measured in seconds since the Unix epoch.
     * @property null|string $url A URL of a publicly-accessible webpage for this product.
     */
    class Product extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'product';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const TYPE_GOOD = 'good';
        const TYPE_SERVICE = 'service';
    }
    /**
     * Order objects are created to handle end customers' purchases of previously
     * defined <a href="https://stripe.com/docs/api#products">products</a>. You can
     * create, retrieve, and pay individual orders, as well as list all orders. Orders
     * are identified by a unique, random ID.
     *
     * Related guide: <a href="https://stripe.com/docs/orders">Tax, Shipping, and
     * Inventory</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount A positive integer in the smallest currency unit (that is, 100 cents for $1.00, or 1 for ¥1, Japanese Yen being a zero-decimal currency) representing the total amount for the order.
     * @property null|int $amount_returned The total amount that was returned to the customer.
     * @property null|string $application ID of the Connect Application that created the order.
     * @property null|int $application_fee A fee in cents that will be applied to the order and transferred to the application owner’s Stripe account. The request must be made with an OAuth key or the Stripe-Account header in order to take an application fee. For more information, see the application fees documentation.
     * @property null|string|\Stripe\Charge $charge The ID of the payment used to pay for the order. Present if the order status is <code>paid</code>, <code>fulfilled</code>, or <code>refunded</code>.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string|\Stripe\Customer $customer The customer used for the order.
     * @property null|string $email The email address of the customer placing the order.
     * @property string $external_coupon_code External coupon code to load for this order.
     * @property \Stripe\OrderItem[] $items List of items constituting the order. An order can have up to 25 items.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|\Stripe\Collection $returns A list of returns that have taken place for this order.
     * @property null|string $selected_shipping_method The shipping method that is currently selected for this order, if any. If present, it is equal to one of the <code>id</code>s of shipping methods in the <code>shipping_methods</code> array. At order creation time, if there are multiple shipping methods, Stripe will automatically selected the first method.
     * @property null|\Stripe\StripeObject $shipping The shipping address for the order. Present if the order is for goods to be shipped.
     * @property null|\Stripe\StripeObject[] $shipping_methods A list of supported shipping methods for this order. The desired shipping method can be specified either by updating the order, or when paying it.
     * @property string $status Current order status. One of <code>created</code>, <code>paid</code>, <code>canceled</code>, <code>fulfilled</code>, or <code>returned</code>. More details in the <a href="https://stripe.com/docs/orders/guide#understanding-order-statuses">Orders Guide</a>.
     * @property null|\Stripe\StripeObject $status_transitions The timestamps at which the order status was updated.
     * @property null|int $updated Time at which the object was last updated. Measured in seconds since the Unix epoch.
     * @property string $upstream_id The user's order ID if it is different from the Stripe order ID.
     */
    class Order extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'order';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\OrderReturn the newly created return
         */
        public function returnOrder($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Order the paid order
         */
        public function pay($params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Util {
    class ObjectTypes
    {
        /**
         * @var array Mapping from object types to resource classes
         */
        const mapping = [\Stripe\Account::OBJECT_NAME => \Stripe\Account::class, \Stripe\AccountLink::OBJECT_NAME => \Stripe\AccountLink::class, \Stripe\AlipayAccount::OBJECT_NAME => \Stripe\AlipayAccount::class, \Stripe\ApplePayDomain::OBJECT_NAME => \Stripe\ApplePayDomain::class, \Stripe\ApplicationFee::OBJECT_NAME => \Stripe\ApplicationFee::class, \Stripe\ApplicationFeeRefund::OBJECT_NAME => \Stripe\ApplicationFeeRefund::class, \Stripe\Balance::OBJECT_NAME => \Stripe\Balance::class, \Stripe\BalanceTransaction::OBJECT_NAME => \Stripe\BalanceTransaction::class, \Stripe\BankAccount::OBJECT_NAME => \Stripe\BankAccount::class, \Stripe\BillingPortal\Configuration::OBJECT_NAME => \Stripe\BillingPortal\Configuration::class, \Stripe\BillingPortal\Session::OBJECT_NAME => \Stripe\BillingPortal\Session::class, \Stripe\BitcoinReceiver::OBJECT_NAME => \Stripe\BitcoinReceiver::class, \Stripe\BitcoinTransaction::OBJECT_NAME => \Stripe\BitcoinTransaction::class, \Stripe\Capability::OBJECT_NAME => \Stripe\Capability::class, \Stripe\Card::OBJECT_NAME => \Stripe\Card::class, \Stripe\Charge::OBJECT_NAME => \Stripe\Charge::class, \Stripe\Checkout\Session::OBJECT_NAME => \Stripe\Checkout\Session::class, \Stripe\Collection::OBJECT_NAME => \Stripe\Collection::class, \Stripe\CountrySpec::OBJECT_NAME => \Stripe\CountrySpec::class, \Stripe\Coupon::OBJECT_NAME => \Stripe\Coupon::class, \Stripe\CreditNote::OBJECT_NAME => \Stripe\CreditNote::class, \Stripe\CreditNoteLineItem::OBJECT_NAME => \Stripe\CreditNoteLineItem::class, \Stripe\Customer::OBJECT_NAME => \Stripe\Customer::class, \Stripe\CustomerBalanceTransaction::OBJECT_NAME => \Stripe\CustomerBalanceTransaction::class, \Stripe\Discount::OBJECT_NAME => \Stripe\Discount::class, \Stripe\Dispute::OBJECT_NAME => \Stripe\Dispute::class, \Stripe\EphemeralKey::OBJECT_NAME => \Stripe\EphemeralKey::class, \Stripe\Event::OBJECT_NAME => \Stripe\Event::class, \Stripe\ExchangeRate::OBJECT_NAME => \Stripe\ExchangeRate::class, \Stripe\File::OBJECT_NAME => \Stripe\File::class, \Stripe\File::OBJECT_NAME_ALT => \Stripe\File::class, \Stripe\FileLink::OBJECT_NAME => \Stripe\FileLink::class, \Stripe\Identity\VerificationReport::OBJECT_NAME => \Stripe\Identity\VerificationReport::class, \Stripe\Identity\VerificationSession::OBJECT_NAME => \Stripe\Identity\VerificationSession::class, \Stripe\Invoice::OBJECT_NAME => \Stripe\Invoice::class, \Stripe\InvoiceItem::OBJECT_NAME => \Stripe\InvoiceItem::class, \Stripe\InvoiceLineItem::OBJECT_NAME => \Stripe\InvoiceLineItem::class, \Stripe\Issuing\Authorization::OBJECT_NAME => \Stripe\Issuing\Authorization::class, \Stripe\Issuing\Card::OBJECT_NAME => \Stripe\Issuing\Card::class, \Stripe\Issuing\CardDetails::OBJECT_NAME => \Stripe\Issuing\CardDetails::class, \Stripe\Issuing\Cardholder::OBJECT_NAME => \Stripe\Issuing\Cardholder::class, \Stripe\Issuing\Dispute::OBJECT_NAME => \Stripe\Issuing\Dispute::class, \Stripe\Issuing\Transaction::OBJECT_NAME => \Stripe\Issuing\Transaction::class, \Stripe\LineItem::OBJECT_NAME => \Stripe\LineItem::class, \Stripe\LoginLink::OBJECT_NAME => \Stripe\LoginLink::class, \Stripe\Mandate::OBJECT_NAME => \Stripe\Mandate::class, \Stripe\Order::OBJECT_NAME => \Stripe\Order::class, \Stripe\OrderItem::OBJECT_NAME => \Stripe\OrderItem::class, \Stripe\OrderReturn::OBJECT_NAME => \Stripe\OrderReturn::class, \Stripe\PaymentIntent::OBJECT_NAME => \Stripe\PaymentIntent::class, \Stripe\PaymentMethod::OBJECT_NAME => \Stripe\PaymentMethod::class, \Stripe\Payout::OBJECT_NAME => \Stripe\Payout::class, \Stripe\Person::OBJECT_NAME => \Stripe\Person::class, \Stripe\Plan::OBJECT_NAME => \Stripe\Plan::class, \Stripe\Price::OBJECT_NAME => \Stripe\Price::class, \Stripe\Product::OBJECT_NAME => \Stripe\Product::class, \Stripe\PromotionCode::OBJECT_NAME => \Stripe\PromotionCode::class, \Stripe\Quote::OBJECT_NAME => \Stripe\Quote::class, \Stripe\Radar\EarlyFraudWarning::OBJECT_NAME => \Stripe\Radar\EarlyFraudWarning::class, \Stripe\Radar\ValueList::OBJECT_NAME => \Stripe\Radar\ValueList::class, \Stripe\Radar\ValueListItem::OBJECT_NAME => \Stripe\Radar\ValueListItem::class, \Stripe\Recipient::OBJECT_NAME => \Stripe\Recipient::class, \Stripe\RecipientTransfer::OBJECT_NAME => \Stripe\RecipientTransfer::class, \Stripe\Refund::OBJECT_NAME => \Stripe\Refund::class, \Stripe\Reporting\ReportRun::OBJECT_NAME => \Stripe\Reporting\ReportRun::class, \Stripe\Reporting\ReportType::OBJECT_NAME => \Stripe\Reporting\ReportType::class, \Stripe\Review::OBJECT_NAME => \Stripe\Review::class, \Stripe\SetupAttempt::OBJECT_NAME => \Stripe\SetupAttempt::class, \Stripe\SetupIntent::OBJECT_NAME => \Stripe\SetupIntent::class, \Stripe\Sigma\ScheduledQueryRun::OBJECT_NAME => \Stripe\Sigma\ScheduledQueryRun::class, \Stripe\SKU::OBJECT_NAME => \Stripe\SKU::class, \Stripe\Source::OBJECT_NAME => \Stripe\Source::class, \Stripe\SourceTransaction::OBJECT_NAME => \Stripe\SourceTransaction::class, \Stripe\Subscription::OBJECT_NAME => \Stripe\Subscription::class, \Stripe\SubscriptionItem::OBJECT_NAME => \Stripe\SubscriptionItem::class, \Stripe\SubscriptionSchedule::OBJECT_NAME => \Stripe\SubscriptionSchedule::class, \Stripe\TaxCode::OBJECT_NAME => \Stripe\TaxCode::class, \Stripe\TaxId::OBJECT_NAME => \Stripe\TaxId::class, \Stripe\TaxRate::OBJECT_NAME => \Stripe\TaxRate::class, \Stripe\Terminal\ConnectionToken::OBJECT_NAME => \Stripe\Terminal\ConnectionToken::class, \Stripe\Terminal\Location::OBJECT_NAME => \Stripe\Terminal\Location::class, \Stripe\Terminal\Reader::OBJECT_NAME => \Stripe\Terminal\Reader::class, \Stripe\ThreeDSecure::OBJECT_NAME => \Stripe\ThreeDSecure::class, \Stripe\Token::OBJECT_NAME => \Stripe\Token::class, \Stripe\Topup::OBJECT_NAME => \Stripe\Topup::class, \Stripe\Transfer::OBJECT_NAME => \Stripe\Transfer::class, \Stripe\TransferReversal::OBJECT_NAME => \Stripe\TransferReversal::class, \Stripe\UsageRecord::OBJECT_NAME => \Stripe\UsageRecord::class, \Stripe\UsageRecordSummary::OBJECT_NAME => \Stripe\UsageRecordSummary::class, \Stripe\WebhookEndpoint::OBJECT_NAME => \Stripe\WebhookEndpoint::class];
    }
    /**
     * Describes a logger instance.
     *
     * This is a subset of the interface of the same name in the PSR-3 logger
     * interface. We guarantee to keep it compatible, but we'd redefined it here so
     * that we don't have to pull in the extra dependencies for users who don't want
     * it.
     *
     * See https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md
     * for the full interface specification.
     *
     * The message MUST be a string or object implementing __toString().
     *
     * The message MAY contain placeholders in the form: {foo} where foo
     * will be replaced by the context data in key "foo".
     *
     * The context array can contain arbitrary data, the only assumption that
     * can be made by implementors is that if an Exception instance is given
     * to produce a stack trace, it MUST be in a key named "exception".
     */
    interface LoggerInterface
    {
        /**
         * Runtime errors that do not require immediate action but should typically
         * be logged and monitored.
         *
         * @param string $message
         */
        public function error($message, array $context = []);
    }
    /**
     * A very basic implementation of LoggerInterface that has just enough
     * functionality that it can be the default for this library.
     */
    class DefaultLogger implements \Stripe\Util\LoggerInterface
    {
        /** @var int */
        public $messageType = 0;
        /** @var null|string */
        public $destination;
        public function error($message, array $context = [])
        {
        }
    }
    class RequestOptions
    {
        /**
         * @var array<string> a list of headers that should be persisted across requests
         */
        public static $HEADERS_TO_PERSIST = ['Stripe-Account', 'Stripe-Version'];
        /** @var array<string, string> */
        public $headers;
        /** @var null|string */
        public $apiKey;
        /** @var null|string */
        public $apiBase;
        /**
         * @param null|string $key
         * @param array<string, string> $headers
         * @param null|string $base
         */
        public function __construct($key = null, $headers = [], $base = null)
        {
        }
        /**
         * @return array<string, string>
         */
        public function __debugInfo()
        {
        }
        /**
         * Unpacks an options array and merges it into the existing RequestOptions
         * object.
         *
         * @param null|array|RequestOptions|string $options a key => value array
         * @param bool $strict when true, forbid string form and arbitrary keys in array form
         *
         * @return RequestOptions
         */
        public function merge($options, $strict = false)
        {
        }
        /**
         * Discards all headers that we don't want to persist across requests.
         */
        public function discardNonPersistentHeaders()
        {
        }
        /**
         * Unpacks an options array into an RequestOptions object.
         *
         * @param null|array|RequestOptions|string $options a key => value array
         * @param bool $strict when true, forbid string form and arbitrary keys in array form
         *
         * @throws \Stripe\Exception\InvalidArgumentException
         *
         * @return RequestOptions
         */
        public static function parse($options, $strict = false)
        {
        }
    }
    class Set implements \IteratorAggregate
    {
        public function __construct($members = [])
        {
        }
        public function includes($elt)
        {
        }
        public function add($elt)
        {
        }
        public function discard($elt)
        {
        }
        public function toArray()
        {
        }
        public function getIterator()
        {
        }
    }
    abstract class Util
    {
        /**
         * Whether the provided array (or other) is a list rather than a dictionary.
         * A list is defined as an array for which all the keys are consecutive
         * integers starting at 0. Empty arrays are considered to be lists.
         *
         * @param array|mixed $array
         *
         * @return bool true if the given object is a list
         */
        public static function isList($array)
        {
        }
        /**
         * Converts a response from the Stripe API to the corresponding PHP object.
         *
         * @param array $resp the response from the Stripe API
         * @param array $opts
         *
         * @return array|StripeObject
         */
        public static function convertToStripeObject($resp, $opts)
        {
        }
        /**
         * @param mixed|string $value a string to UTF8-encode
         *
         * @return mixed|string the UTF8-encoded string, or the object passed in if
         *    it wasn't a string
         */
        public static function utf8($value)
        {
        }
        /**
         * Compares two strings for equality. The time taken is independent of the
         * number of characters that match.
         *
         * @param string $a one of the strings to compare
         * @param string $b the other string to compare
         *
         * @return bool true if the strings are equal, false otherwise
         */
        public static function secureCompare($a, $b)
        {
        }
        /**
         * Recursively goes through an array of parameters. If a parameter is an instance of
         * ApiResource, then it is replaced by the resource's ID.
         * Also clears out null values.
         *
         * @param mixed $h
         *
         * @return mixed
         */
        public static function objectsToIds($h)
        {
        }
        /**
         * @param array $params
         *
         * @return string
         */
        public static function encodeParameters($params)
        {
        }
        /**
         * @param array $params
         * @param null|string $parentKey
         *
         * @return array
         */
        public static function flattenParams($params, $parentKey = null)
        {
        }
        /**
         * @param array $value
         * @param string $calculatedKey
         *
         * @return array
         */
        public static function flattenParamsList($value, $calculatedKey)
        {
        }
        /**
         * @param string $key a string to URL-encode
         *
         * @return string the URL-encoded string
         */
        public static function urlEncode($key)
        {
        }
        public static function normalizeId($id)
        {
        }
        /**
         * Returns UNIX timestamp in milliseconds.
         *
         * @return int current time in millis
         */
        public static function currentTimeMillis()
        {
        }
    }
    /**
     * CaseInsensitiveArray is an array-like class that ignores case for keys.
     *
     * It is used to store HTTP headers. Per RFC 2616, section 4.2:
     * Each header field consists of a name followed by a colon (":") and the field value. Field names
     * are case-insensitive.
     *
     * In the context of stripe-php, this is useful because the API will return headers with different
     * case depending on whether HTTP/2 is used or not (with HTTP/2, headers are always in lowercase).
     */
    class CaseInsensitiveArray implements \ArrayAccess, \Countable, \IteratorAggregate
    {
        public function __construct($initial_array = [])
        {
        }
        public function count()
        {
        }
        public function getIterator()
        {
        }
        public function offsetSet($offset, $value)
        {
        }
        public function offsetExists($offset)
        {
        }
        public function offsetUnset($offset)
        {
        }
        public function offsetGet($offset)
        {
        }
    }
    /**
     * A basic random generator. This is in a separate class so we the generator
     * can be injected as a dependency and replaced with a mock in tests.
     */
    class RandomGenerator
    {
        /**
         * Returns a random value between 0 and $max.
         *
         * @param float $max (optional)
         *
         * @return float
         */
        public function randFloat($max = 1.0)
        {
        }
        /**
         * Returns a v4 UUID.
         *
         * @return string
         */
        public function uuid()
        {
        }
    }
}
namespace Stripe {
    /**
     * To charge a credit or a debit card, you create a <code>Charge</code> object. You
     * can retrieve and refund individual charges as well as list all charges. Charges
     * are identified by a unique, random ID.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/payments/accept-a-payment-charges">Accept a
     * payment with the Charges API</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Amount intended to be collected by this payment. A positive integer representing how much to charge in the <a href="https://stripe.com/docs/currencies#zero-decimal">smallest currency unit</a> (e.g., 100 cents to charge $1.00 or 100 to charge ¥100, a zero-decimal currency). The minimum amount is $0.50 US or <a href="https://stripe.com/docs/currencies#minimum-and-maximum-charge-amounts">equivalent in charge currency</a>. The amount value supports up to eight digits (e.g., a value of 99999999 for a USD charge of $999,999.99).
     * @property int $amount_captured Amount in %s captured (can be less than the amount attribute on the charge if a partial capture was made).
     * @property int $amount_refunded Amount in %s refunded (can be less than the amount attribute on the charge if a partial refund was issued).
     * @property null|string|\Stripe\StripeObject $application ID of the Connect application that created the charge.
     * @property null|string|\Stripe\ApplicationFee $application_fee The application fee (if any) for the charge. <a href="https://stripe.com/docs/connect/direct-charges#collecting-fees">See the Connect documentation</a> for details.
     * @property null|int $application_fee_amount The amount of the application fee (if any) requested for the charge. <a href="https://stripe.com/docs/connect/direct-charges#collecting-fees">See the Connect documentation</a> for details.
     * @property null|string|\Stripe\BalanceTransaction $balance_transaction ID of the balance transaction that describes the impact of this charge on your account balance (not including refunds or disputes).
     * @property \Stripe\StripeObject $billing_details
     * @property null|string $calculated_statement_descriptor The full statement descriptor that is passed to card networks, and that is displayed on your customers' credit card and bank statements. Allows you to see what the statement descriptor looks like after the static and dynamic portions are combined.
     * @property bool $captured If the charge was created without capturing, this Boolean represents whether it is still uncaptured or has since been captured.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string|\Stripe\Customer $customer ID of the customer this charge is for if one exists.
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property null|string|\Stripe\Account $destination ID of an existing, connected Stripe account to transfer funds to if <code>transfer_data</code> was specified in the charge request.
     * @property null|string|\Stripe\Dispute $dispute Details about the dispute if the charge has been disputed.
     * @property bool $disputed Whether the charge has been disputed.
     * @property null|string $failure_code Error code explaining reason for charge failure if available (see <a href="https://stripe.com/docs/api#errors">the errors section</a> for a list of codes).
     * @property null|string $failure_message Message to user further explaining reason for charge failure if available.
     * @property null|\Stripe\StripeObject $fraud_details Information on fraud assessments for the charge.
     * @property null|string|\Stripe\Invoice $invoice ID of the invoice this charge is for if one exists.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string|\Stripe\Account $on_behalf_of The account (if any) the charge was made on behalf of without triggering an automatic transfer. See the <a href="https://stripe.com/docs/connect/charges-transfers">Connect documentation</a> for details.
     * @property null|string|\Stripe\Order $order ID of the order this charge is for if one exists.
     * @property null|\Stripe\StripeObject $outcome Details about whether the payment was accepted, and why. See <a href="https://stripe.com/docs/declines">understanding declines</a> for details.
     * @property bool $paid <code>true</code> if the charge succeeded, or was successfully authorized for later capture.
     * @property null|string|\Stripe\PaymentIntent $payment_intent ID of the PaymentIntent associated with this charge, if one exists.
     * @property null|string $payment_method ID of the payment method used in this charge.
     * @property null|\Stripe\StripeObject $payment_method_details Details about the payment method at the time of the transaction.
     * @property null|string $receipt_email This is the email address that the receipt for this charge was sent to.
     * @property null|string $receipt_number This is the transaction number that appears on email receipts sent for this charge. This attribute will be <code>null</code> until a receipt has been sent.
     * @property null|string $receipt_url This is the URL to view the receipt for this charge. The receipt is kept up-to-date to the latest state of the charge, including any refunds. If the charge is for an Invoice, the receipt will be stylized as an Invoice receipt.
     * @property bool $refunded Whether the charge has been fully refunded. If the charge is only partially refunded, this attribute will still be false.
     * @property \Stripe\Collection $refunds A list of refunds that have been applied to the charge.
     * @property null|string|\Stripe\Review $review ID of the review associated with this charge if one exists.
     * @property null|\Stripe\StripeObject $shipping Shipping information for the charge.
     * @property null|\Stripe\Account|\Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source $source This is a legacy field that will be removed in the future. It contains the Source, Card, or BankAccount object used for the charge. For details about the payment method used for this charge, refer to <code>payment_method</code> or <code>payment_method_details</code> instead.
     * @property null|string|\Stripe\Transfer $source_transfer The transfer ID which created this charge. Only present if the charge came from another Stripe account. <a href="https://stripe.com/docs/connect/destination-charges">See the Connect documentation</a> for details.
     * @property null|string $statement_descriptor For card charges, use <code>statement_descriptor_suffix</code> instead. Otherwise, you can use this value as the complete description of a charge on your customers’ statements. Must contain at least one letter, maximum 22 characters.
     * @property null|string $statement_descriptor_suffix Provides information about the charge that customers see on their statements. Concatenated with the prefix (shortened descriptor) or statement descriptor that’s set on the account to form the complete statement descriptor. Maximum 22 characters for the concatenated descriptor.
     * @property string $status The status of the payment is either <code>succeeded</code>, <code>pending</code>, or <code>failed</code>.
     * @property string|\Stripe\Transfer $transfer ID of the transfer to the <code>destination</code> account (only applicable if the charge was created using the <code>destination</code> parameter).
     * @property null|\Stripe\StripeObject $transfer_data An optional dictionary including the account to automatically transfer to as part of a destination charge. <a href="https://stripe.com/docs/connect/destination-charges">See the Connect documentation</a> for details.
     * @property null|string $transfer_group A string that identifies this transaction as part of a group. See the <a href="https://stripe.com/docs/connect/charges-transfers#transfer-options">Connect documentation</a> for details.
     */
    class Charge extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'charge';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const STATUS_FAILED = 'failed';
        const STATUS_PENDING = 'pending';
        const STATUS_SUCCEEDED = 'succeeded';
        /**
         * Possible string representations of decline codes.
         * These strings are applicable to the decline_code property of the \Stripe\Exception\CardException exception.
         *
         * @see https://stripe.com/docs/declines/codes
         */
        const DECLINED_AUTHENTICATION_REQUIRED = 'authentication_required';
        const DECLINED_APPROVE_WITH_ID = 'approve_with_id';
        const DECLINED_CALL_ISSUER = 'call_issuer';
        const DECLINED_CARD_NOT_SUPPORTED = 'card_not_supported';
        const DECLINED_CARD_VELOCITY_EXCEEDED = 'card_velocity_exceeded';
        const DECLINED_CURRENCY_NOT_SUPPORTED = 'currency_not_supported';
        const DECLINED_DO_NOT_HONOR = 'do_not_honor';
        const DECLINED_DO_NOT_TRY_AGAIN = 'do_not_try_again';
        const DECLINED_DUPLICATED_TRANSACTION = 'duplicate_transaction';
        const DECLINED_EXPIRED_CARD = 'expired_card';
        const DECLINED_FRAUDULENT = 'fraudulent';
        const DECLINED_GENERIC_DECLINE = 'generic_decline';
        const DECLINED_INCORRECT_NUMBER = 'incorrect_number';
        const DECLINED_INCORRECT_CVC = 'incorrect_cvc';
        const DECLINED_INCORRECT_PIN = 'incorrect_pin';
        const DECLINED_INCORRECT_ZIP = 'incorrect_zip';
        const DECLINED_INSUFFICIENT_FUNDS = 'insufficient_funds';
        const DECLINED_INVALID_ACCOUNT = 'invalid_account';
        const DECLINED_INVALID_AMOUNT = 'invalid_amount';
        const DECLINED_INVALID_CVC = 'invalid_cvc';
        const DECLINED_INVALID_EXPIRY_YEAR = 'invalid_expiry_year';
        const DECLINED_INVALID_NUMBER = 'invalid_number';
        const DECLINED_INVALID_PIN = 'invalid_pin';
        const DECLINED_ISSUER_NOT_AVAILABLE = 'issuer_not_available';
        const DECLINED_LOST_CARD = 'lost_card';
        const DECLINED_MERCHANT_BLACKLIST = 'merchant_blacklist';
        const DECLINED_NEW_ACCOUNT_INFORMATION_AVAILABLE = 'new_account_information_available';
        const DECLINED_NO_ACTION_TAKEN = 'no_action_taken';
        const DECLINED_NOT_PERMITTED = 'not_permitted';
        const DECLINED_OFFLINE_PIN_REQUIRED = 'offline_pin_required';
        const DECLINED_ONLINE_OR_OFFLINE_PIN_REQUIRED = 'online_or_offline_pin_required';
        const DECLINED_PICKUP_CARD = 'pickup_card';
        const DECLINED_PIN_TRY_EXCEEDED = 'pin_try_exceeded';
        const DECLINED_PROCESSING_ERROR = 'processing_error';
        const DECLINED_REENTER_TRANSACTION = 'reenter_transaction';
        const DECLINED_RESTRICTED_CARD = 'restricted_card';
        const DECLINED_REVOCATION_OF_ALL_AUTHORIZATIONS = 'revocation_of_all_authorizations';
        const DECLINED_REVOCATION_OF_AUTHORIZATION = 'revocation_of_authorization';
        const DECLINED_SECURITY_VIOLATION = 'security_violation';
        const DECLINED_SERVICE_NOT_ALLOWED = 'service_not_allowed';
        const DECLINED_STOLEN_CARD = 'stolen_card';
        const DECLINED_STOP_PAYMENT_ORDER = 'stop_payment_order';
        const DECLINED_TESTMODE_DECLINE = 'testmode_decline';
        const DECLINED_TRANSACTION_NOT_ALLOWED = 'transaction_not_allowed';
        const DECLINED_TRY_AGAIN_LATER = 'try_again_later';
        const DECLINED_WITHDRAWAL_COUNT_LIMIT_EXCEEDED = 'withdrawal_count_limit_exceeded';
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Charge the captured charge
         */
        public function capture($params = null, $opts = null)
        {
        }
    }
    /**
     * Class OAuthErrorObject.
     *
     * @property string $error
     * @property string $error_description
     */
    class OAuthErrorObject extends \Stripe\StripeObject
    {
        /**
         * Refreshes this object using the provided values.
         *
         * @param array $values
         * @param null|array|string|Util\RequestOptions $opts
         * @param bool $partial defaults to false
         */
        public function refreshFrom($values, $opts, $partial = false)
        {
        }
    }
    /**
     * Reviews can be used to supplement automated fraud detection with human
     * expertise.
     *
     * Learn more about <a href="/radar">Radar</a> and reviewing payments <a
     * href="https://stripe.com/docs/radar/reviews">here</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|string $billing_zip The ZIP or postal code of the card used, if applicable.
     * @property null|string|\Stripe\Charge $charge The charge associated with this review.
     * @property null|string $closed_reason The reason the review was closed, or null if it has not yet been closed. One of <code>approved</code>, <code>refunded</code>, <code>refunded_as_fraud</code>, <code>disputed</code>, or <code>redacted</code>.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string $ip_address The IP address where the payment originated.
     * @property null|\Stripe\StripeObject $ip_address_location Information related to the location of the payment. Note that this information is an approximation and attempts to locate the nearest population center - it should not be used to determine a specific address.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property bool $open If <code>true</code>, the review needs action.
     * @property string $opened_reason The reason the review was opened. One of <code>rule</code> or <code>manual</code>.
     * @property string|\Stripe\PaymentIntent $payment_intent The PaymentIntent ID associated with this review, if one exists.
     * @property string $reason The reason the review is currently open or closed. One of <code>rule</code>, <code>manual</code>, <code>approved</code>, <code>refunded</code>, <code>refunded_as_fraud</code>, <code>disputed</code>, or <code>redacted</code>.
     * @property null|\Stripe\StripeObject $session Information related to the browsing session of the user who initiated the payment.
     */
    class Review extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'review';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
        /**
         * Possible string representations of the current, the opening or the closure reason of the review.
         * Not all of these enumeration apply to all of the ´reason´ fields. Please consult the Review object to
         * determine where these are apply.
         *
         * @see https://stripe.com/docs/api/radar/reviews/object
         */
        const REASON_APPROVED = 'approved';
        const REASON_DISPUTED = 'disputed';
        const REASON_MANUAL = 'manual';
        const REASON_REFUNDED = 'refunded';
        const REASON_REFUNDED_AS_FRAUD = 'refunded_as_fraud';
        const REASON_RULE = 'rule';
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Review the approved review
         */
        public function approve($params = null, $opts = null)
        {
        }
    }
    /**
     * Cardholder authentication via 3D Secure is initiated by creating a <code>3D
     * Secure</code> object. Once the object has been created, you can use it to
     * authenticate the cardholder and create a charge.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Amount of the charge that you will create when authentication completes.
     * @property bool $authenticated True if the cardholder went through the authentication flow and their bank indicated that authentication succeeded.
     * @property \Stripe\Card $card <p>You can store multiple cards on a customer in order to charge the customer later. You can also store multiple debit cards on a recipient in order to transfer to those cards later.</p><p>Related guide: <a href="https://stripe.com/docs/sources/cards">Card Payments with Sources</a>.</p>
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|string $redirect_url If present, this is the URL that you should send the cardholder to for authentication. If you are going to use Stripe.js to display the authentication page in an iframe, you should use the value &quot;_callback&quot;.
     * @property string $status Possible values are <code>redirect_pending</code>, <code>succeeded</code>, or <code>failed</code>. When the cardholder can be authenticated, the object starts with status <code>redirect_pending</code>. When liability will be shifted to the cardholder's bank (either because the cardholder was successfully authenticated, or because the bank has not implemented 3D Secure, the object wlil be in status <code>succeeded</code>. <code>failed</code> indicates that authentication was attempted unsuccessfully.
     */
    class ThreeDSecure extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'three_d_secure';
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        /**
         * @return string the endpoint URL for the given class
         */
        public static function classUrl()
        {
        }
    }
    /**
     * To top up your Stripe balance, you create a top-up object. You can retrieve
     * individual top-ups, as well as list all top-ups. Top-ups are identified by a
     * unique, random ID.
     *
     * Related guide: <a href="https://stripe.com/docs/connect/top-ups">Topping Up your
     * Platform Account</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Amount transferred.
     * @property null|string|\Stripe\BalanceTransaction $balance_transaction ID of the balance transaction that describes the impact of this top-up on your account balance. May not be specified depending on status of top-up.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property null|int $expected_availability_date Date the funds are expected to arrive in your Stripe account for payouts. This factors in delays like weekends or bank holidays. May not be specified depending on status of top-up.
     * @property null|string $failure_code Error code explaining reason for top-up failure if available (see <a href="https://stripe.com/docs/api#errors">the errors section</a> for a list of codes).
     * @property null|string $failure_message Message to user further explaining reason for top-up failure if available.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property \Stripe\Source $source <p><code>Source</code> objects allow you to accept a variety of payment methods. They represent a customer's payment instrument, and can be used with the Stripe API just like a <code>Card</code> object: once chargeable, they can be charged, or can be attached to customers.</p><p>Related guides: <a href="https://stripe.com/docs/sources">Sources API</a> and <a href="https://stripe.com/docs/sources/customers">Sources &amp; Customers</a>.</p>
     * @property null|string $statement_descriptor Extra information about a top-up. This will appear on your source's bank statement. It must contain at least one letter.
     * @property string $status The status of the top-up is either <code>canceled</code>, <code>failed</code>, <code>pending</code>, <code>reversed</code>, or <code>succeeded</code>.
     * @property null|string $transfer_group A string that identifies this top-up as part of a group.
     */
    class Topup extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'topup';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const STATUS_CANCELED = 'canceled';
        const STATUS_FAILED = 'failed';
        const STATUS_PENDING = 'pending';
        const STATUS_REVERSED = 'reversed';
        const STATUS_SUCCEEDED = 'succeeded';
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Topup the canceled topup
         */
        public function cancel($params = null, $opts = null)
        {
        }
    }
    abstract class WebhookSignature
    {
        const EXPECTED_SCHEME = 'v1';
        /**
         * Verifies the signature header sent by Stripe. Throws an
         * Exception\SignatureVerificationException exception if the verification fails for
         * any reason.
         *
         * @param string $payload the payload sent by Stripe
         * @param string $header the contents of the signature header sent by
         *  Stripe
         * @param string $secret secret used to generate the signature
         * @param int $tolerance maximum difference allowed between the header's
         *  timestamp and the current time
         *
         * @throws Exception\SignatureVerificationException if the verification fails
         *
         * @return bool
         */
        public static function verifyHeader($payload, $header, $secret, $tolerance = null)
        {
        }
    }
    /**
     * Account Links are the means by which a Connect platform grants a connected
     * account permission to access Stripe-hosted applications, such as Connect
     * Onboarding.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/connect/connect-onboarding">Connect
     * Onboarding</a>.
     *
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property int $expires_at The timestamp at which this account link will expire.
     * @property string $url The URL for the account link.
     */
    class AccountLink extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'account_link';
        use \Stripe\ApiOperations\Create;
    }
    /**
     * Class RecipientTransfer.
     *
     * @property string $id
     * @property string $object
     * @property int $amount
     * @property int $amount_reversed
     * @property string $balance_transaction
     * @property string $bank_account
     * @property string $card
     * @property int $created
     * @property string $currency
     * @property int $date
     * @property string $description
     * @property string $destination
     * @property string $failure_code
     * @property string $failure_message
     * @property bool $livemode
     * @property \Stripe\StripeObject $metadata
     * @property string $method
     * @property string $recipient
     * @property \Stripe\Collection $reversals
     * @property bool $reversed
     * @property string $source_type
     * @property string $statement_descriptor
     * @property string $status
     * @property string $type
     */
    class RecipientTransfer extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'recipient_transfer';
    }
    abstract class OAuth
    {
        /**
         * Generates a URL to Stripe's OAuth form.
         *
         * @param null|array $params
         * @param null|array $opts
         *
         * @return string the URL to Stripe's OAuth form
         */
        public static function authorizeUrl($params = null, $opts = null)
        {
        }
        /**
         * Use an authoriztion code to connect an account to your platform and
         * fetch the user's credentials.
         *
         * @param null|array $params
         * @param null|array $opts
         *
         * @throws \Stripe\Exception\OAuth\OAuthErrorException if the request fails
         *
         * @return StripeObject object containing the response from the API
         */
        public static function token($params = null, $opts = null)
        {
        }
        /**
         * Disconnects an account from your platform.
         *
         * @param null|array $params
         * @param null|array $opts
         *
         * @throws \Stripe\Exception\OAuth\OAuthErrorException if the request fails
         *
         * @return StripeObject object containing the response from the API
         */
        public static function deauthorize($params = null, $opts = null)
        {
        }
    }
    /**
     * This is an object representing a file hosted on Stripe's servers. The file may
     * have been uploaded by yourself using the <a
     * href="https://stripe.com/docs/api#create_file">create file</a> request (for
     * example, when uploading dispute evidence) or it may have been created by Stripe
     * (for example, the results of a <a href="#scheduled_queries">Sigma scheduled
     * query</a>).
     *
     * Related guide: <a href="https://stripe.com/docs/file-upload">File Upload
     * Guide</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|int $expires_at The time at which the file expires and is no longer available in epoch seconds.
     * @property null|string $filename A filename for the file, suitable for saving to a filesystem.
     * @property null|\Stripe\Collection $links A list of <a href="https://stripe.com/docs/api#file_links">file links</a> that point at this file.
     * @property string $purpose The <a href="https://stripe.com/docs/file-upload#uploading-a-file">purpose</a> of the uploaded file.
     * @property int $size The size in bytes of the file object.
     * @property null|string $title A user friendly title for the document.
     * @property null|string $type The type of the file returned (e.g., <code>csv</code>, <code>pdf</code>, <code>jpg</code>, or <code>png</code>).
     * @property null|string $url The URL from which the file can be downloaded using your live secret API key.
     */
    class File extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'file';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
        const PURPOSE_ACCOUNT_REQUIREMENT = 'account_requirement';
        const PURPOSE_ADDITIONAL_VERIFICATION = 'additional_verification';
        const PURPOSE_BUSINESS_ICON = 'business_icon';
        const PURPOSE_BUSINESS_LOGO = 'business_logo';
        const PURPOSE_CUSTOMER_SIGNATURE = 'customer_signature';
        const PURPOSE_DISPUTE_EVIDENCE = 'dispute_evidence';
        const PURPOSE_DOCUMENT_PROVIDER_IDENTITY_DOCUMENT = 'document_provider_identity_document';
        const PURPOSE_FINANCE_REPORT_RUN = 'finance_report_run';
        const PURPOSE_IDENTITY_DOCUMENT = 'identity_document';
        const PURPOSE_IDENTITY_DOCUMENT_DOWNLOADABLE = 'identity_document_downloadable';
        const PURPOSE_PCI_DOCUMENT = 'pci_document';
        const PURPOSE_SELFIE = 'selfie';
        const PURPOSE_SIGMA_SCHEDULED_QUERY = 'sigma_scheduled_query';
        const PURPOSE_TAX_DOCUMENT_USER_UPLOAD = 'tax_document_user_upload';
        // This resource can have two different object names. In latter API
        // versions, only `file` is used, but since stripe-php may be used with
        // any API version, we need to support deserializing the older
        // `file_upload` object into the same class.
        const OBJECT_NAME_ALT = 'file_upload';
        use \Stripe\ApiOperations\Create {
            create as protected _create;
        }
        public static function classUrl()
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\File the created file
         */
        public static function create($params = null, $opts = null)
        {
        }
    }
    /**
     * Stores representations of <a
     * href="http://en.wikipedia.org/wiki/Stock_keeping_unit">stock keeping units</a>.
     * SKUs describe specific product variations, taking into account any combination
     * of: attributes, currency, and cost. For example, a product may be a T-shirt,
     * whereas a specific SKU represents the <code>size: large</code>, <code>color:
     * red</code> version of that shirt.
     *
     * Can also be used to manage inventory.
     *
     * Related guide: <a href="https://stripe.com/docs/orders">Tax, Shipping, and
     * Inventory</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property bool $active Whether the SKU is available for purchase.
     * @property \Stripe\StripeObject $attributes A dictionary of attributes and values for the attributes defined by the product. If, for example, a product's attributes are <code>[&quot;size&quot;, &quot;gender&quot;]</code>, a valid SKU has the following dictionary of attributes: <code>{&quot;size&quot;: &quot;Medium&quot;, &quot;gender&quot;: &quot;Unisex&quot;}</code>.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string $image The URL of an image for this SKU, meant to be displayable to the customer.
     * @property \Stripe\StripeObject $inventory
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|\Stripe\StripeObject $package_dimensions The dimensions of this SKU for shipping purposes.
     * @property int $price The cost of the item as a positive integer in the smallest currency unit (that is, 100 cents to charge $1.00, or 100 to charge ¥100, Japanese Yen being a zero-decimal currency).
     * @property string|\Stripe\Product $product The ID of the product this SKU is associated with. The product must be currently active.
     * @property int $updated Time at which the object was last updated. Measured in seconds since the Unix epoch.
     */
    class SKU extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'sku';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
    /**
     * Class OrderItem.
     *
     * @property string $object
     * @property int $amount
     * @property string $currency
     * @property string $description
     * @property string $parent
     * @property int $quantity
     * @property string $type
     */
    class OrderItem extends \Stripe\StripeObject
    {
        const OBJECT_NAME = 'order_item';
    }
    /**
     * This is an object representing a Stripe account. You can retrieve it to see
     * properties on the account like its current e-mail address or if the account is
     * enabled yet to make live charges.
     *
     * Some properties, marked below, are available only to platforms that want to <a
     * href="https://stripe.com/docs/connect/accounts">create and manage Express or
     * Custom accounts</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|\Stripe\StripeObject $business_profile Business information about the account.
     * @property null|string $business_type The business type.
     * @property \Stripe\StripeObject $capabilities
     * @property bool $charges_enabled Whether the account can create live charges.
     * @property \Stripe\StripeObject $company
     * @property \Stripe\StripeObject $controller
     * @property string $country The account's country.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $default_currency Three-letter ISO currency code representing the default currency for the account. This must be a currency that <a href="https://stripe.com/docs/payouts">Stripe supports in the account's country</a>.
     * @property bool $details_submitted Whether account details have been submitted. Standard accounts cannot receive payouts before this is true.
     * @property null|string $email An email address associated with the account. You can treat this as metadata: it is not used for authentication or messaging account holders.
     * @property \Stripe\Collection $external_accounts External accounts (bank accounts and debit cards) currently attached to this account
     * @property \Stripe\Person $individual <p>This is an object representing a person associated with a Stripe account.</p><p>A platform cannot access a Standard or Express account's persons after the account starts onboarding, such as after generating an account link for the account. See the <a href="https://stripe.com/docs/connect/standard-accounts">Standard onboarding</a> or <a href="https://stripe.com/docs/connect/express-accounts">Express onboarding documentation</a> for information about platform pre-filling and account onboarding steps.</p><p>Related guide: <a href="https://stripe.com/docs/connect/identity-verification-api#person-information">Handling Identity Verification with the API</a>.</p>
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property bool $payouts_enabled Whether Stripe can send payouts to this account.
     * @property \Stripe\StripeObject $requirements
     * @property null|\Stripe\StripeObject $settings Options for customizing how the account functions within Stripe.
     * @property \Stripe\StripeObject $tos_acceptance
     * @property string $type The Stripe account type. Can be <code>standard</code>, <code>express</code>, or <code>custom</code>.
     */
    class Account extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'account';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\NestedResource;
        use \Stripe\ApiOperations\Update;
        const BUSINESS_TYPE_COMPANY = 'company';
        const BUSINESS_TYPE_GOVERNMENT_ENTITY = 'government_entity';
        const BUSINESS_TYPE_INDIVIDUAL = 'individual';
        const BUSINESS_TYPE_NON_PROFIT = 'non_profit';
        const CAPABILITY_CARD_PAYMENTS = 'card_payments';
        const CAPABILITY_LEGACY_PAYMENTS = 'legacy_payments';
        const CAPABILITY_PLATFORM_PAYMENTS = 'platform_payments';
        const CAPABILITY_TRANSFERS = 'transfers';
        const CAPABILITY_STATUS_ACTIVE = 'active';
        const CAPABILITY_STATUS_INACTIVE = 'inactive';
        const CAPABILITY_STATUS_PENDING = 'pending';
        const TYPE_CUSTOM = 'custom';
        const TYPE_EXPRESS = 'express';
        const TYPE_STANDARD = 'standard';
        use \Stripe\ApiOperations\Retrieve {
            retrieve as protected _retrieve;
        }
        public static function getSavedNestedResources()
        {
        }
        public function instanceUrl()
        {
        }
        public function serializeParameters($force = false)
        {
        }
        /**
         * @param null|array|string $id the ID of the account to retrieve, or an
         *     options array containing an `id` key
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Account
         */
        public static function retrieve($id = null, $opts = null)
        {
        }
        /**
         * @param null|array $clientId
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\StripeObject object containing the response from the API
         */
        public function deauthorize($clientId = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of persons
         */
        public function persons($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Account the rejected account
         */
        public function reject($params = null, $opts = null)
        {
        }
        /*
         * Capabilities methods
         * We can not add the capabilities() method today as the Account object already has a
         * capabilities property which is a hash and not the sub-list of capabilities.
         */
        const PATH_CAPABILITIES = '/capabilities';
        /**
         * @param string $id the ID of the account on which to retrieve the capabilities
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of capabilities
         */
        public static function allCapabilities($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the account to which the capability belongs
         * @param string $capabilityId the ID of the capability to retrieve
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Capability
         */
        public static function retrieveCapability($id, $capabilityId, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the account to which the capability belongs
         * @param string $capabilityId the ID of the capability to update
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Capability
         */
        public static function updateCapability($id, $capabilityId, $params = null, $opts = null)
        {
        }
        const PATH_EXTERNAL_ACCOUNTS = '/external_accounts';
        /**
         * @param string $id the ID of the account on which to retrieve the external accounts
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of external accounts (BankAccount or Card)
         */
        public static function allExternalAccounts($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the account on which to create the external account
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BankAccount|\Stripe\Card
         */
        public static function createExternalAccount($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the account to which the external account belongs
         * @param string $externalAccountId the ID of the external account to delete
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BankAccount|\Stripe\Card
         */
        public static function deleteExternalAccount($id, $externalAccountId, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the account to which the external account belongs
         * @param string $externalAccountId the ID of the external account to retrieve
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BankAccount|\Stripe\Card
         */
        public static function retrieveExternalAccount($id, $externalAccountId, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the account to which the external account belongs
         * @param string $externalAccountId the ID of the external account to update
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BankAccount|\Stripe\Card
         */
        public static function updateExternalAccount($id, $externalAccountId, $params = null, $opts = null)
        {
        }
        const PATH_LOGIN_LINKS = '/login_links';
        /**
         * @param string $id the ID of the account on which to create the login link
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\LoginLink
         */
        public static function createLoginLink($id, $params = null, $opts = null)
        {
        }
        const PATH_PERSONS = '/persons';
        /**
         * @param string $id the ID of the account on which to retrieve the persons
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of persons
         */
        public static function allPersons($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the account on which to create the person
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Person
         */
        public static function createPerson($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the account to which the person belongs
         * @param string $personId the ID of the person to delete
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Person
         */
        public static function deletePerson($id, $personId, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the account to which the person belongs
         * @param string $personId the ID of the person to retrieve
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Person
         */
        public static function retrievePerson($id, $personId, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the account to which the person belongs
         * @param string $personId the ID of the person to update
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Person
         */
        public static function updatePerson($id, $personId, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Issuing {
    /**
     * You can <a href="https://stripe.com/docs/issuing/cards">create physical or
     * virtual cards</a> that are issued to cardholders.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property string $brand The brand of the card.
     * @property null|string $cancellation_reason The reason why the card was canceled.
     * @property \Stripe\Issuing\Cardholder $cardholder <p>An Issuing <code>Cardholder</code> object represents an individual or business entity who is <a href="https://stripe.com/docs/issuing">issued</a> cards.</p><p>Related guide: <a href="https://stripe.com/docs/issuing/cards#create-cardholder">How to create a Cardholder</a></p>
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property string $cvc The card's CVC. For security reasons, this is only available for virtual cards, and will be omitted unless you explicitly request it with <a href="https://stripe.com/docs/api/expanding_objects">the <code>expand</code> parameter</a>. Additionally, it's only available via the <a href="https://stripe.com/docs/api/issuing/cards/retrieve">&quot;Retrieve a card&quot; endpoint</a>, not via &quot;List all cards&quot; or any other endpoint.
     * @property int $exp_month The expiration month of the card.
     * @property int $exp_year The expiration year of the card.
     * @property string $last4 The last 4 digits of the card number.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property string $number The full unredacted card number. For security reasons, this is only available for virtual cards, and will be omitted unless you explicitly request it with <a href="https://stripe.com/docs/api/expanding_objects">the <code>expand</code> parameter</a>. Additionally, it's only available via the <a href="https://stripe.com/docs/api/issuing/cards/retrieve">&quot;Retrieve a card&quot; endpoint</a>, not via &quot;List all cards&quot; or any other endpoint.
     * @property null|string|\Stripe\Issuing\Card $replaced_by The latest card that replaces this card, if any.
     * @property null|string|\Stripe\Issuing\Card $replacement_for The card this card replaces, if any.
     * @property null|string $replacement_reason The reason why the previous card needed to be replaced.
     * @property null|\Stripe\StripeObject $shipping Where and how the card will be shipped.
     * @property \Stripe\StripeObject $spending_controls
     * @property string $status Whether authorizations can be approved on this card.
     * @property string $type The type of the card.
     */
    class Card extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'issuing.card';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\CardDetails the card details associated with that issuing card
         */
        public function details($params = null, $opts = null)
        {
        }
    }
    /**
     * Any use of an <a href="https://stripe.com/docs/issuing">issued card</a> that
     * results in funds entering or leaving your Stripe account, such as a completed
     * purchase or refund, is represented by an Issuing <code>Transaction</code>
     * object.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/issuing/purchases/transactions">Issued Card
     * Transactions</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount The transaction amount, which will be reflected in your balance. This amount is in your currency and in the <a href="https://stripe.com/docs/currencies#zero-decimal">smallest currency unit</a>.
     * @property null|\Stripe\StripeObject $amount_details Detailed breakdown of amount components. These amounts are denominated in <code>currency</code> and in the <a href="https://stripe.com/docs/currencies#zero-decimal">smallest currency unit</a>.
     * @property null|string|\Stripe\Issuing\Authorization $authorization The <code>Authorization</code> object that led to this transaction.
     * @property null|string|\Stripe\BalanceTransaction $balance_transaction ID of the <a href="https://stripe.com/docs/api/balance_transactions">balance transaction</a> associated with this transaction.
     * @property string|\Stripe\Issuing\Card $card The card used to make this transaction.
     * @property null|string|\Stripe\Issuing\Cardholder $cardholder The cardholder to whom this transaction belongs.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string|\Stripe\Issuing\Dispute $dispute If you've disputed the transaction, the ID of the dispute.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property int $merchant_amount The amount that the merchant will receive, denominated in <code>merchant_currency</code> and in the <a href="https://stripe.com/docs/currencies#zero-decimal">smallest currency unit</a>. It will be different from <code>amount</code> if the merchant is taking payment in a different currency.
     * @property string $merchant_currency The currency with which the merchant is taking payment.
     * @property \Stripe\StripeObject $merchant_data
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|\Stripe\StripeObject $purchase_details Additional purchase information that is optionally provided by the merchant.
     * @property string $type The nature of the transaction.
     * @property null|string $wallet The digital wallet used for this transaction. One of <code>apple_pay</code>, <code>google_pay</code>, or <code>samsung_pay</code>.
     */
    class Transaction extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'issuing.transaction';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
    /**
     * Class CardDetails.
     *
     * @property string $id
     * @property string $object
     * @property Card $card
     * @property string $cvc
     * @property int $exp_month
     * @property int $exp_year
     * @property string $number
     */
    class CardDetails extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'issuing.card_details';
    }
    /**
     * As a <a href="https://stripe.com/docs/issuing">card issuer</a>, you can dispute
     * transactions that the cardholder does not recognize, suspects to be fraudulent,
     * or has other issues with.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/issuing/purchases/disputes">Disputing
     * Transactions</a>
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Disputed amount. Usually the amount of the <code>transaction</code>, but can differ (usually because of currency fluctuation).
     * @property null|\Stripe\BalanceTransaction[] $balance_transactions List of balance transactions associated with the dispute.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency The currency the <code>transaction</code> was made in.
     * @property \Stripe\StripeObject $evidence
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property string $status Current status of the dispute.
     * @property string|\Stripe\Issuing\Transaction $transaction The transaction being disputed.
     */
    class Dispute extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'issuing.dispute';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Dispute the submited dispute
         */
        public function submit($params = null, $opts = null)
        {
        }
    }
    /**
     * An Issuing <code>Cardholder</code> object represents an individual or business
     * entity who is <a href="https://stripe.com/docs/issuing">issued</a> cards.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/issuing/cards#create-cardholder">How to create a
     * Cardholder</a>
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property \Stripe\StripeObject $billing
     * @property null|\Stripe\StripeObject $company Additional information about a <code>company</code> cardholder.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string $email The cardholder's email address.
     * @property null|\Stripe\StripeObject $individual Additional information about an <code>individual</code> cardholder.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property string $name The cardholder's name. This will be printed on cards issued to them.
     * @property null|string $phone_number The cardholder's phone number.
     * @property \Stripe\StripeObject $requirements
     * @property null|\Stripe\StripeObject $spending_controls Rules that control spending across this cardholder's cards. Refer to our <a href="https://stripe.com/docs/issuing/controls/spending-controls">documentation</a> for more details.
     * @property string $status Specifies whether to permit authorizations on this cardholder's cards.
     * @property string $type One of <code>individual</code> or <code>company</code>.
     */
    class Cardholder extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'issuing.cardholder';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
    /**
     * When an <a href="https://stripe.com/docs/issuing">issued card</a> is used to
     * make a purchase, an Issuing <code>Authorization</code> object is created. <a
     * href="https://stripe.com/docs/issuing/purchases/authorizations">Authorizations</a>
     * must be approved for the purchase to be completed successfully.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/issuing/purchases/authorizations">Issued Card
     * Authorizations</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount The total amount that was authorized or rejected. This amount is in the card's currency and in the <a href="https://stripe.com/docs/currencies#zero-decimal">smallest currency unit</a>.
     * @property null|\Stripe\StripeObject $amount_details Detailed breakdown of amount components. These amounts are denominated in <code>currency</code> and in the <a href="https://stripe.com/docs/currencies#zero-decimal">smallest currency unit</a>.
     * @property bool $approved Whether the authorization has been approved.
     * @property string $authorization_method How the card details were provided.
     * @property \Stripe\BalanceTransaction[] $balance_transactions List of balance transactions associated with this authorization.
     * @property \Stripe\Issuing\Card $card You can <a href="https://stripe.com/docs/issuing/cards">create physical or virtual cards</a> that are issued to cardholders.
     * @property null|string|\Stripe\Issuing\Cardholder $cardholder The cardholder to whom this authorization belongs.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property int $merchant_amount The total amount that was authorized or rejected. This amount is in the <code>merchant_currency</code> and in the <a href="https://stripe.com/docs/currencies#zero-decimal">smallest currency unit</a>.
     * @property string $merchant_currency The currency that was presented to the cardholder for the authorization. Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property \Stripe\StripeObject $merchant_data
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|\Stripe\StripeObject $pending_request The pending authorization request. This field will only be non-null during an <code>issuing_authorization.request</code> webhook.
     * @property \Stripe\StripeObject[] $request_history History of every time <code>pending_request</code> was approved/denied, either by you directly or by Stripe (e.g. based on your <code>spending_controls</code>). If the merchant changes the authorization by performing an <a href="https://stripe.com/docs/issuing/purchases/authorizations">incremental authorization</a>, you can look at this field to see the previous requests for the authorization.
     * @property string $status The current status of the authorization in its lifecycle.
     * @property \Stripe\Issuing\Transaction[] $transactions List of <a href="https://stripe.com/docs/api/issuing/transactions">transactions</a> associated with this authorization.
     * @property \Stripe\StripeObject $verification_data
     * @property null|string $wallet The digital wallet used for this authorization. One of <code>apple_pay</code>, <code>google_pay</code>, or <code>samsung_pay</code>.
     */
    class Authorization extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'issuing.authorization';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Authorization the approved authorization
         */
        public function approve($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Authorization the declined authorization
         */
        public function decline($params = null, $opts = null)
        {
        }
    }
}
namespace Stripe {
    /**
     * <a href="https://stripe.com/docs/tax/tax-codes">Tax codes</a> classify goods and
     * services for tax purposes.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property string $description A detailed description of which types of products the tax code represents.
     * @property string $name A short name for the tax code.
     */
    class TaxCode extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'tax_code';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
    }
    /**
     * Class SingletonApiResource.
     */
    abstract class SingletonApiResource extends \Stripe\ApiResource
    {
        protected static function _singletonRetrieve($options = null)
        {
        }
        /**
         * @return string the endpoint associated with this singleton class
         */
        public static function classUrl()
        {
        }
        /**
         * @return string the endpoint associated with this singleton API resource
         */
        public function instanceUrl()
        {
        }
    }
    /**
     * This is an object representing a person associated with a Stripe account.
     *
     * A platform cannot access a Standard or Express account's persons after the
     * account starts onboarding, such as after generating an account link for the
     * account. See the <a
     * href="https://stripe.com/docs/connect/standard-accounts">Standard onboarding</a>
     * or <a href="https://stripe.com/docs/connect/express-accounts">Express onboarding
     * documentation</a> for information about platform pre-filling and account
     * onboarding steps.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/connect/identity-verification-api#person-information">Handling
     * Identity Verification with the API</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property string $account The account the person is associated with.
     * @property \Stripe\StripeObject $address
     * @property null|\Stripe\StripeObject $address_kana The Kana variation of the person's address (Japan only).
     * @property null|\Stripe\StripeObject $address_kanji The Kanji variation of the person's address (Japan only).
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property \Stripe\StripeObject $dob
     * @property null|string $email The person's email address.
     * @property null|string $first_name The person's first name.
     * @property null|string $first_name_kana The Kana variation of the person's first name (Japan only).
     * @property null|string $first_name_kanji The Kanji variation of the person's first name (Japan only).
     * @property null|string $gender The person's gender (International regulations require either &quot;male&quot; or &quot;female&quot;).
     * @property bool $id_number_provided Whether the person's <code>id_number</code> was provided.
     * @property null|string $last_name The person's last name.
     * @property null|string $last_name_kana The Kana variation of the person's last name (Japan only).
     * @property null|string $last_name_kanji The Kanji variation of the person's last name (Japan only).
     * @property null|string $maiden_name The person's maiden name.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string $nationality The country where the person is a national.
     * @property null|string $phone The person's phone number.
     * @property string $political_exposure Indicates if the person or any of their representatives, family members, or other closely related persons, declares that they hold or have held an important public job or function, in any jurisdiction.
     * @property \Stripe\StripeObject $relationship
     * @property null|\Stripe\StripeObject $requirements Information about the requirements for this person, including what information needs to be collected, and by when.
     * @property bool $ssn_last_4_provided Whether the last four digits of the person's Social Security number have been provided (U.S. only).
     * @property \Stripe\StripeObject $verification
     */
    class Person extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'person';
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Update;
        const GENDER_FEMALE = 'female';
        const GENDER_MALE = 'male';
        const POLITICAL_EXPOSURE_EXISTING = 'existing';
        const POLITICAL_EXPOSURE_NONE = 'none';
        const VERIFICATION_STATUS_PENDING = 'pending';
        const VERIFICATION_STATUS_UNVERIFIED = 'unverified';
        const VERIFICATION_STATUS_VERIFIED = 'verified';
        /**
         * @return string the API URL for this Stripe account reversal
         */
        public function instanceUrl()
        {
        }
        /**
         * @param array|string $_id
         * @param null|array|string $_opts
         *
         * @throws \Stripe\Exception\BadMethodCallException
         */
        public static function retrieve($_id, $_opts = null)
        {
        }
        /**
         * @param string $_id
         * @param null|array $_params
         * @param null|array|string $_options
         *
         * @throws \Stripe\Exception\BadMethodCallException
         */
        public static function update($_id, $_params = null, $_options = null)
        {
        }
    }
}
namespace Stripe\Terminal {
    /**
     * A Connection Token is used by the Stripe Terminal SDK to connect to a reader.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/terminal/creating-locations">Fleet Management</a>.
     *
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property string $location The id of the location that this connection token is scoped to. Note that location scoping only applies to internet-connected readers. For more details, see <a href="https://stripe.com/docs/terminal/readers/fleet-management#connection-tokens">the docs on scoping connection tokens</a>.
     * @property string $secret Your application should pass this token to the Stripe Terminal SDK.
     */
    class ConnectionToken extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'terminal.connection_token';
        use \Stripe\ApiOperations\Create;
    }
    /**
     * A Reader represents a physical device for accepting payment details.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/terminal/readers/connecting">Connecting to a
     * Reader</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|string $device_sw_version The current software version of the reader.
     * @property string $device_type Type of reader, one of <code>bbpos_chipper2x</code> or <code>verifone_P400</code>.
     * @property null|string $ip_address The local IP address of the reader.
     * @property string $label Custom label given to the reader for easier identification.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|string|\Stripe\Terminal\Location $location The location identifier of the reader.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property string $serial_number Serial number of the reader.
     * @property null|string $status The networking status of the reader.
     */
    class Reader extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'terminal.reader';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
    /**
     * A Location represents a grouping of readers.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/terminal/creating-locations">Fleet Management</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property \Stripe\StripeObject $address
     * @property string $display_name The display name of the location.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    class Location extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'terminal.location';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
}
namespace Stripe {
    /**
     * Class SourceTransaction.
     *
     * @property string $id
     * @property string $object
     * @property \Stripe\StripeObject $ach_credit_transfer
     * @property int $amount
     * @property int $created
     * @property string $customer_data
     * @property string $currency
     * @property string $type
     */
    class SourceTransaction extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'source_transaction';
    }
    /**
     * Subscription items allow you to create customer subscriptions with more than one
     * plan, making it easy to represent complex billing relationships.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|\Stripe\StripeObject $billing_thresholds Define thresholds at which an invoice will be sent, and the related subscription advanced to a new billing period
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property \Stripe\Plan $plan <p>You can now model subscriptions more flexibly using the <a href="https://stripe.com/docs/api#prices">Prices API</a>. It replaces the Plans API and is backwards compatible to simplify your migration.</p><p>Plans define the base price, currency, and billing cycle for recurring purchases of products. <a href="https://stripe.com/docs/api#products">Products</a> help you track inventory or provisioning, and plans help you track pricing. Different physical goods or levels of service should be represented by products, and pricing options should be represented by plans. This approach lets you change prices without having to change your provisioning scheme.</p><p>For example, you might have a single &quot;gold&quot; product that has plans for $10/month, $100/year, €9/month, and €90/year.</p><p>Related guides: <a href="https://stripe.com/docs/billing/subscriptions/set-up-subscription">Set up a subscription</a> and more about <a href="https://stripe.com/docs/billing/prices-guide">products and prices</a>.</p>
     * @property \Stripe\Price $price <p>Prices define the unit cost, currency, and (optional) billing cycle for both recurring and one-time purchases of products. <a href="https://stripe.com/docs/api#products">Products</a> help you track inventory or provisioning, and prices help you track payment terms. Different physical goods or levels of service should be represented by products, and pricing options should be represented by prices. This approach lets you change prices without having to change your provisioning scheme.</p><p>For example, you might have a single &quot;gold&quot; product that has prices for $10/month, $100/year, and €9 once.</p><p>Related guides: <a href="https://stripe.com/docs/billing/subscriptions/set-up-subscription">Set up a subscription</a>, <a href="https://stripe.com/docs/billing/invoices/create">create an invoice</a>, and more about <a href="https://stripe.com/docs/billing/prices-guide">products and prices</a>.</p>
     * @property int $quantity The <a href="https://stripe.com/docs/subscriptions/quantities">quantity</a> of the plan to which the customer should be subscribed.
     * @property string $subscription The <code>subscription</code> this <code>subscription_item</code> belongs to.
     * @property null|\Stripe\TaxRate[] $tax_rates The tax rates which apply to this <code>subscription_item</code>. When set, the <code>default_tax_rates</code> on the subscription do not apply to this <code>subscription_item</code>.
     */
    class SubscriptionItem extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'subscription_item';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\NestedResource;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const PATH_USAGE_RECORDS = '/usage_records';
        /**
         * @param null|string $id the ID of the subscription item on which to create the usage record
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\UsageRecord
         */
        public static function createUsageRecord($id, $params = null, $opts = null)
        {
        }
        /**
         * @deprecated usageRecordSummaries is deprecated. Please use SubscriptionItem::allUsageRecordSummaries instead.
         *
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of usage record summaries
         */
        public function usageRecordSummaries($params = null, $opts = null)
        {
        }
        const PATH_USAGE_RECORD_SUMMARIES = '/usage_record_summaries';
        /**
         * @param string $id the ID of the subscription item on which to retrieve the usage record summaries
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of usage record summaries
         */
        public static function allUsageRecordSummaries($id, $params = null, $opts = null)
        {
        }
    }
    /**
     * A dispute occurs when a customer questions your charge with their card issuer.
     * When this happens, you're given the opportunity to respond to the dispute with
     * evidence that shows that the charge is legitimate. You can find more information
     * about the dispute process in our <a href="/docs/disputes">Disputes and Fraud</a>
     * documentation.
     *
     * Related guide: <a href="https://stripe.com/docs/disputes">Disputes and
     * Fraud</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Disputed amount. Usually the amount of the charge, but can differ (usually because of currency fluctuation or because only part of the order is disputed).
     * @property \Stripe\BalanceTransaction[] $balance_transactions List of zero, one, or two balance transactions that show funds withdrawn and reinstated to your Stripe account as a result of this dispute.
     * @property string|\Stripe\Charge $charge ID of the charge that was disputed.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property \Stripe\StripeObject $evidence
     * @property \Stripe\StripeObject $evidence_details
     * @property bool $is_charge_refundable If true, it is still possible to refund the disputed payment. Once the payment has been fully refunded, no further funds will be withdrawn from your Stripe account as a result of this dispute.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string $network_reason_code Network-dependent reason code for the dispute.
     * @property null|string|\Stripe\PaymentIntent $payment_intent ID of the PaymentIntent that was disputed.
     * @property string $reason Reason given by cardholder for dispute. Possible values are <code>bank_cannot_process</code>, <code>check_returned</code>, <code>credit_not_processed</code>, <code>customer_initiated</code>, <code>debit_not_authorized</code>, <code>duplicate</code>, <code>fraudulent</code>, <code>general</code>, <code>incorrect_account_details</code>, <code>insufficient_funds</code>, <code>product_not_received</code>, <code>product_unacceptable</code>, <code>subscription_canceled</code>, or <code>unrecognized</code>. Read more about <a href="https://stripe.com/docs/disputes/categories">dispute reasons</a>.
     * @property string $status Current status of dispute. Possible values are <code>warning_needs_response</code>, <code>warning_under_review</code>, <code>warning_closed</code>, <code>needs_response</code>, <code>under_review</code>, <code>charge_refunded</code>, <code>won</code>, or <code>lost</code>.
     */
    class Dispute extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'dispute';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const REASON_BANK_CANNOT_PROCESS = 'bank_cannot_process';
        const REASON_CHECK_RETURNED = 'check_returned';
        const REASON_CREDIT_NOT_PROCESSED = 'credit_not_processed';
        const REASON_CUSTOMER_INITIATED = 'customer_initiated';
        const REASON_DEBIT_NOT_AUTHORIZED = 'debit_not_authorized';
        const REASON_DUPLICATE = 'duplicate';
        const REASON_FRAUDULENT = 'fraudulent';
        const REASON_GENERAL = 'general';
        const REASON_INCORRECT_ACCOUNT_DETAILS = 'incorrect_account_details';
        const REASON_INSUFFICIENT_FUNDS = 'insufficient_funds';
        const REASON_PRODUCT_NOT_RECEIVED = 'product_not_received';
        const REASON_PRODUCT_UNACCEPTABLE = 'product_unacceptable';
        const REASON_SUBSCRIPTION_CANCELED = 'subscription_canceled';
        const REASON_UNRECOGNIZED = 'unrecognized';
        const STATUS_CHARGE_REFUNDED = 'charge_refunded';
        const STATUS_LOST = 'lost';
        const STATUS_NEEDS_RESPONSE = 'needs_response';
        const STATUS_UNDER_REVIEW = 'under_review';
        const STATUS_WARNING_CLOSED = 'warning_closed';
        const STATUS_WARNING_NEEDS_RESPONSE = 'warning_needs_response';
        const STATUS_WARNING_UNDER_REVIEW = 'warning_under_review';
        const STATUS_WON = 'won';
        /**
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Dispute the closed dispute
         */
        // TODO: add $params to standardize signature
        public function close($opts = null)
        {
        }
    }
    /**
     * Sometimes you want to add a charge or credit to a customer, but actually charge
     * or credit the customer's card only at the end of a regular billing cycle. This
     * is useful for combining several charges (to minimize per-transaction fees), or
     * for having Stripe tabulate your usage-based billing totals.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/billing/invoices/subscription#adding-upcoming-invoice-items">Subscription
     * Invoices</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Amount (in the <code>currency</code> specified) of the invoice item. This should always be equal to <code>unit_amount * quantity</code>.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property string|\Stripe\Customer $customer The ID of the customer who will be billed when this invoice item is billed.
     * @property int $date Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property bool $discountable If true, discounts will apply to this invoice item. Always false for prorations.
     * @property null|(string|\Stripe\Discount)[] $discounts The discounts which apply to the invoice item. Item discounts are applied before invoice discounts. Use <code>expand[]=discounts</code> to expand each discount.
     * @property null|string|\Stripe\Invoice $invoice The ID of the invoice this invoice item belongs to.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property \Stripe\StripeObject $period
     * @property null|\Stripe\Plan $plan If the invoice item is a proration, the plan of the subscription that the proration was computed for.
     * @property null|\Stripe\Price $price The price of the invoice item.
     * @property bool $proration Whether the invoice item was created automatically as a proration adjustment when the customer switched plans.
     * @property int $quantity Quantity of units for the invoice item. If the invoice item is a proration, the quantity of the subscription that the proration was computed for.
     * @property null|string|\Stripe\Subscription $subscription The subscription that this invoice item has been created for, if any.
     * @property string $subscription_item The subscription item that this invoice item has been created for, if any.
     * @property null|\Stripe\TaxRate[] $tax_rates The tax rates which apply to the invoice item. When set, the <code>default_tax_rates</code> on the invoice do not apply to this invoice item.
     * @property null|int $unit_amount Unit amount (in the <code>currency</code> specified) of the invoice item.
     * @property null|string $unit_amount_decimal Same as <code>unit_amount</code>, but contains a decimal value with at most 12 decimal places.
     */
    class InvoiceItem extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'invoiceitem';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
    /**
     * Class ApiRequestor.
     */
    class ApiRequestor
    {
        /**
         * ApiRequestor constructor.
         *
         * @param null|string $apiKey
         * @param null|string $apiBase
         */
        public function __construct($apiKey = null, $apiBase = null)
        {
        }
        /**
         * @param string     $method
         * @param string     $url
         * @param null|array $params
         * @param null|array $headers
         *
         * @throws Exception\ApiErrorException
         *
         * @return array tuple containing (ApiReponse, API key)
         */
        public function request($method, $url, $params = null, $headers = null)
        {
        }
        /**
         * @param string     $method
         * @param string     $url
         * @param callable $readBodyChunkCallable
         * @param null|array $params
         * @param null|array $headers
         *
         * @throws Exception\ApiErrorException
         *
         * @return array tuple containing (ApiReponse, API key)
         */
        public function requestStream($method, $url, $readBodyChunkCallable, $params = null, $headers = null)
        {
        }
        /**
         * @param string $rbody a JSON string
         * @param int $rcode
         * @param array $rheaders
         * @param array $resp
         *
         * @throws Exception\UnexpectedValueException
         * @throws Exception\ApiErrorException
         */
        public function handleErrorResponse($rbody, $rcode, $rheaders, $resp)
        {
        }
        /**
         * @static
         *
         * @param HttpClient\ClientInterface $client
         */
        public static function setHttpClient($client)
        {
        }
        /**
         * @static
         *
         * @param HttpClient\StreamingClientInterface $client
         */
        public static function setStreamingHttpClient($client)
        {
        }
        /**
         * @static
         *
         * Resets any stateful telemetry data
         */
        public static function resetTelemetry()
        {
        }
    }
    /**
     * A SetupIntent guides you through the process of setting up and saving a
     * customer's payment credentials for future payments. For example, you could use a
     * SetupIntent to set up and save your customer's card without immediately
     * collecting a payment. Later, you can use <a
     * href="https://stripe.com/docs/api#payment_intents">PaymentIntents</a> to drive
     * the payment flow.
     *
     * Create a SetupIntent as soon as you're ready to collect your customer's payment
     * credentials. Do not maintain long-lived, unconfirmed SetupIntents as they may no
     * longer be valid. The SetupIntent then transitions through multiple <a
     * href="https://stripe.com/docs/payments/intents#intent-statuses">statuses</a> as
     * it guides you through the setup process.
     *
     * Successful SetupIntents result in payment credentials that are optimized for
     * future payments. For example, cardholders in <a
     * href="/guides/strong-customer-authentication">certain regions</a> may need to be
     * run through <a
     * href="https://stripe.com/docs/strong-customer-authentication">Strong Customer
     * Authentication</a> at the time of payment method collection in order to
     * streamline later <a
     * href="https://stripe.com/docs/payments/setup-intents">off-session payments</a>.
     * If the SetupIntent is used with a <a
     * href="https://stripe.com/docs/api#setup_intent_object-customer">Customer</a>,
     * upon success, it will automatically attach the resulting payment method to that
     * Customer. We recommend using SetupIntents or <a
     * href="https://stripe.com/docs/api#payment_intent_object-setup_future_usage">setup_future_usage</a>
     * on PaymentIntents to save payment methods in order to prevent saving invalid or
     * unoptimized payment methods.
     *
     * By using SetupIntents, you ensure that your customers experience the minimum set
     * of required friction, even as regulations change over time.
     *
     * Related guide: <a href="https://stripe.com/docs/payments/setup-intents">Setup
     * Intents API</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|string|\Stripe\StripeObject $application ID of the Connect application that created the SetupIntent.
     * @property null|string $cancellation_reason Reason for cancellation of this SetupIntent, one of <code>abandoned</code>, <code>requested_by_customer</code>, or <code>duplicate</code>.
     * @property null|string $client_secret <p>The client secret of this SetupIntent. Used for client-side retrieval using a publishable key.</p><p>The client secret can be used to complete payment setup from your frontend. It should not be stored, logged, embedded in URLs, or exposed to anyone other than the customer. Make sure that you have TLS enabled on any page that includes the client secret.</p>
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string|\Stripe\Customer $customer <p>ID of the Customer this SetupIntent belongs to, if one exists.</p><p>If present, the SetupIntent's payment method will be attached to the Customer on successful setup. Payment methods attached to other Customers cannot be used with this SetupIntent.</p>
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property null|\Stripe\ErrorObject $last_setup_error The error encountered in the previous SetupIntent confirmation.
     * @property null|string|\Stripe\SetupAttempt $latest_attempt The most recent SetupAttempt for this SetupIntent.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|string|\Stripe\Mandate $mandate ID of the multi use Mandate generated by the SetupIntent.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|\Stripe\StripeObject $next_action If present, this property tells you what actions you need to take in order for your customer to continue payment setup.
     * @property null|string|\Stripe\Account $on_behalf_of The account (if any) for which the setup is intended.
     * @property null|string|\Stripe\PaymentMethod $payment_method ID of the payment method used with this SetupIntent.
     * @property null|\Stripe\StripeObject $payment_method_options Payment-method-specific configuration for this SetupIntent.
     * @property string[] $payment_method_types The list of payment method types (e.g. card) that this SetupIntent is allowed to set up.
     * @property null|string|\Stripe\Mandate $single_use_mandate ID of the single_use Mandate generated by the SetupIntent.
     * @property string $status <a href="https://stripe.com/docs/payments/intents#intent-statuses">Status</a> of this SetupIntent, one of <code>requires_payment_method</code>, <code>requires_confirmation</code>, <code>requires_action</code>, <code>processing</code>, <code>canceled</code>, or <code>succeeded</code>.
     * @property string $usage <p>Indicates how the payment method is intended to be used in the future.</p><p>Use <code>on_session</code> if you intend to only reuse the payment method when the customer is in your checkout flow. Use <code>off_session</code> if your customer may or may not be in your checkout flow. If not provided, this value defaults to <code>off_session</code>.</p>
     */
    class SetupIntent extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'setup_intent';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const STATUS_CANCELED = 'canceled';
        const STATUS_PROCESSING = 'processing';
        const STATUS_REQUIRES_ACTION = 'requires_action';
        const STATUS_REQUIRES_CONFIRMATION = 'requires_confirmation';
        const STATUS_REQUIRES_PAYMENT_METHOD = 'requires_payment_method';
        const STATUS_SUCCEEDED = 'succeeded';
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SetupIntent the canceled setup intent
         */
        public function cancel($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SetupIntent the confirmed setup intent
         */
        public function confirm($params = null, $opts = null)
        {
        }
    }
    /**
     * <a href="https://stripe.com/docs/connect">Stripe Connect</a> platforms can
     * reverse transfers made to a connected account, either entirely or partially, and
     * can also specify whether to refund any related application fees. Transfer
     * reversals add to the platform's balance and subtract from the destination
     * account's balance.
     *
     * Reversing a transfer that was made for a <a
     * href="/docs/connect/destination-charges">destination charge</a> is allowed only
     * up to the amount of the charge. It is possible to reverse a <a
     * href="https://stripe.com/docs/connect/charges-transfers#transfer-options">transfer_group</a>
     * transfer only if the destination account has enough balance to cover the
     * reversal.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/connect/charges-transfers#reversing-transfers">Reversing
     * Transfers</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Amount, in %s.
     * @property null|string|\Stripe\BalanceTransaction $balance_transaction Balance transaction that describes the impact on your account balance.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string|\Stripe\Refund $destination_payment_refund Linked payment refund for the transfer reversal.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string|\Stripe\Refund $source_refund ID of the refund responsible for the transfer reversal.
     * @property string|\Stripe\Transfer $transfer ID of the transfer that was reversed.
     */
    class TransferReversal extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'transfer_reversal';
        use \Stripe\ApiOperations\Update {
            save as protected _save;
        }
        /**
         * @return string the API URL for this Stripe transfer reversal
         */
        public function instanceUrl()
        {
        }
        /**
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return TransferReversal the saved reversal
         */
        public function save($opts = null)
        {
        }
    }
    /**
     * A <code>Transfer</code> object is created when you move funds between Stripe
     * accounts as part of Connect.
     *
     * Before April 6, 2017, transfers also represented movement of funds from a Stripe
     * account to a card or bank account. This behavior has since been split out into a
     * <a href="https://stripe.com/docs/api#payout_object">Payout</a> object, with
     * corresponding payout endpoints. For more information, read about the <a
     * href="https://stripe.com/docs/transfer-payout-split">transfer/payout split</a>.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/connect/charges-transfers">Creating Separate
     * Charges and Transfers</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Amount in %s to be transferred.
     * @property int $amount_reversed Amount in %s reversed (can be less than the amount attribute on the transfer if a partial reversal was issued).
     * @property null|string|\Stripe\BalanceTransaction $balance_transaction Balance transaction that describes the impact of this transfer on your account balance.
     * @property int $created Time that this record of the transfer was first created.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property null|string|\Stripe\Account $destination ID of the Stripe account the transfer was sent to.
     * @property string|\Stripe\Charge $destination_payment If the destination is a Stripe account, this will be the ID of the payment that the destination account received for the transfer.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property \Stripe\Collection $reversals A list of reversals that have been applied to the transfer.
     * @property bool $reversed Whether the transfer has been fully reversed. If the transfer is only partially reversed, this attribute will still be false.
     * @property null|string|\Stripe\Charge $source_transaction ID of the charge or payment that was used to fund the transfer. If null, the transfer was funded from the available balance.
     * @property null|string $source_type The source balance this transfer came from. One of <code>card</code>, <code>fpx</code>, or <code>bank_account</code>.
     * @property null|string $transfer_group A string that identifies this transaction as part of a group. See the <a href="https://stripe.com/docs/connect/charges-transfers#transfer-options">Connect documentation</a> for details.
     */
    class Transfer extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'transfer';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\NestedResource;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const SOURCE_TYPE_ALIPAY_ACCOUNT = 'alipay_account';
        const SOURCE_TYPE_BANK_ACCOUNT = 'bank_account';
        const SOURCE_TYPE_CARD = 'card';
        const SOURCE_TYPE_FINANCING = 'financing';
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Transfer the canceled transfer
         */
        public function cancel($params = null, $opts = null)
        {
        }
        const PATH_REVERSALS = '/reversals';
        /**
         * @param string $id the ID of the transfer on which to retrieve the transfer reversals
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of transfer reversals
         */
        public static function allReversals($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the transfer on which to create the transfer reversal
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TransferReversal
         */
        public static function createReversal($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the transfer to which the transfer reversal belongs
         * @param string $reversalId the ID of the transfer reversal to retrieve
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TransferReversal
         */
        public static function retrieveReversal($id, $reversalId, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the transfer to which the transfer reversal belongs
         * @param string $reversalId the ID of the transfer reversal to update
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TransferReversal
         */
        public static function updateReversal($id, $reversalId, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\BillingPortal {
    /**
     * The Billing customer portal is a Stripe-hosted UI for subscription and billing
     * management.
     *
     * A portal configuration describes the functionality and features that you want to
     * provide to your customers through the portal.
     *
     * A portal session describes the instantiation of the customer portal for a
     * particular customer. By visiting the session's URL, the customer can manage
     * their subscriptions and billing details. For security reasons, sessions are
     * short-lived and will expire if the customer does not visit the URL. Create
     * sessions on-demand when customers intend to manage their subscriptions and
     * billing details.
     *
     * Learn more in the <a
     * href="https://stripe.com/docs/billing/subscriptions/customer-portal">product
     * overview</a> and <a
     * href="https://stripe.com/docs/billing/subscriptions/integrating-customer-portal">integration
     * guide</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property string|\Stripe\BillingPortal\Configuration $configuration The configuration used by this session, describing the features available.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $customer The ID of the customer for this session.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|string $on_behalf_of The account for which the session was created on behalf of. When specified, only subscriptions and invoices with this <code>on_behalf_of</code> account appear in the portal. For more information, see the <a href="https://stripe.com/docs/connect/charges-transfers#on-behalf-of">docs</a>. Use the <a href="https://stripe.com/docs/api/accounts/object#account_object-settings-branding">Accounts API</a> to modify the <code>on_behalf_of</code> account's branding settings, which the portal displays.
     * @property string $return_url The URL to redirect customers to when they click on the portal's link to return to your website.
     * @property string $url The short-lived URL of the session that gives customers access to the customer portal.
     */
    class Session extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'billing_portal.session';
        use \Stripe\ApiOperations\Create;
    }
    /**
     * A portal configuration describes the functionality and behavior of a portal
     * session.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property bool $active Whether the configuration is active and can be used to create portal sessions.
     * @property null|string $application ID of the Connect Application that created the configuration.
     * @property \Stripe\StripeObject $business_profile
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string $default_return_url The default URL to redirect customers to when they click on the portal's link to return to your website. This can be <a href="https://stripe.com/docs/api/customer_portal/sessions/create#create_portal_session-return_url">overriden</a> when creating the session.
     * @property \Stripe\StripeObject $features
     * @property bool $is_default Whether the configuration is the default. If <code>true</code>, this configuration can be managed in the Dashboard and portal sessions will use this configuration unless it is overriden when creating the session.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property int $updated Time at which the object was last updated. Measured in seconds since the Unix epoch.
     */
    class Configuration extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'billing_portal.configuration';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
}
namespace Stripe {
    /**
     * Issue a credit note to adjust an invoice's amount after the invoice is
     * finalized.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/billing/invoices/credit-notes">Credit Notes</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount The integer amount in %s representing the total amount of the credit note, including tax.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property string|\Stripe\Customer $customer ID of the customer.
     * @property null|string|\Stripe\CustomerBalanceTransaction $customer_balance_transaction Customer balance transaction related to this credit note.
     * @property int $discount_amount The integer amount in %s representing the total amount of discount that was credited.
     * @property \Stripe\StripeObject[] $discount_amounts The aggregate amounts calculated per discount for all line items.
     * @property string|\Stripe\Invoice $invoice ID of the invoice.
     * @property \Stripe\Collection $lines Line items that make up the credit note
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|string $memo Customer-facing text that appears on the credit note PDF.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property string $number A unique number that identifies this particular credit note and appears on the PDF of the credit note and its associated invoice.
     * @property null|int $out_of_band_amount Amount that was credited outside of Stripe.
     * @property string $pdf The link to download the PDF of the credit note.
     * @property null|string $reason Reason for issuing this credit note, one of <code>duplicate</code>, <code>fraudulent</code>, <code>order_change</code>, or <code>product_unsatisfactory</code>
     * @property null|string|\Stripe\Refund $refund Refund related to this credit note.
     * @property string $status Status of this credit note, one of <code>issued</code> or <code>void</code>. Learn more about <a href="https://stripe.com/docs/billing/invoices/credit-notes#voiding">voiding credit notes</a>.
     * @property int $subtotal The integer amount in %s representing the amount of the credit note, excluding tax and invoice level discounts.
     * @property \Stripe\StripeObject[] $tax_amounts The aggregate amounts calculated per tax rate for all line items.
     * @property int $total The integer amount in %s representing the total amount of the credit note, including tax and all discount.
     * @property string $type Type of this credit note, one of <code>pre_payment</code> or <code>post_payment</code>. A <code>pre_payment</code> credit note means it was issued when the invoice was open. A <code>post_payment</code> credit note means it was issued when the invoice was paid.
     * @property null|int $voided_at The time that the credit note was voided.
     */
    class CreditNote extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'credit_note';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\NestedResource;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const REASON_DUPLICATE = 'duplicate';
        const REASON_FRAUDULENT = 'fraudulent';
        const REASON_ORDER_CHANGE = 'order_change';
        const REASON_PRODUCT_UNSATISFACTORY = 'product_unsatisfactory';
        const STATUS_ISSUED = 'issued';
        const STATUS_VOID = 'void';
        const TYPE_POST_PAYMENT = 'post_payment';
        const TYPE_PRE_PAYMENT = 'pre_payment';
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CreditNote the previewed credit note
         */
        public static function preview($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CreditNote the voided credit note
         */
        public function voidCreditNote($params = null, $opts = null)
        {
        }
        const PATH_LINES = '/lines';
        /**
         * @param string $id the ID of the credit note on which to retrieve the credit note line items
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of credit note line items
         */
        public static function allLines($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Checkout {
    /**
     * A Checkout Session represents your customer's session as they pay for one-time
     * purchases or subscriptions through <a
     * href="https://stripe.com/docs/payments/checkout">Checkout</a>. We recommend
     * creating a new Session each time your customer attempts to pay.
     *
     * Once payment is successful, the Checkout Session will contain a reference to the
     * <a href="https://stripe.com/docs/api/customers">Customer</a>, and either the
     * successful <a
     * href="https://stripe.com/docs/api/payment_intents">PaymentIntent</a> or an
     * active <a href="https://stripe.com/docs/api/subscriptions">Subscription</a>.
     *
     * You can create a Checkout Session on your server and pass its ID to the client
     * to begin Checkout.
     *
     * Related guide: <a href="https://stripe.com/docs/payments/checkout/api">Checkout
     * Server Quickstart</a>.
     *
     * @property string $id Unique identifier for the object. Used to pass to <code>redirectToCheckout</code> in Stripe.js.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|bool $allow_promotion_codes Enables user redeemable promotion codes.
     * @property null|int $amount_subtotal Total of all items before discounts or taxes are applied.
     * @property null|int $amount_total Total of all items after discounts and taxes are applied.
     * @property \Stripe\StripeObject $automatic_tax
     * @property null|string $billing_address_collection Describes whether Checkout should collect the customer's billing address.
     * @property string $cancel_url The URL the customer will be directed to if they decide to cancel payment and return to your website.
     * @property null|string $client_reference_id A unique string to reference the Checkout Session. This can be a customer ID, a cart ID, or similar, and can be used to reconcile the Session with your internal systems.
     * @property null|string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string|\Stripe\Customer $customer The ID of the customer for this Session. For Checkout Sessions in <code>payment</code> or <code>subscription</code> mode, Checkout will create a new customer object based on information provided during the payment flow unless an existing customer was provided when the Session was created.
     * @property null|\Stripe\StripeObject $customer_details The customer details including the customer's tax exempt status and the customer's tax IDs. Only present on Sessions in <code>payment</code> or <code>subscription</code> mode.
     * @property null|string $customer_email If provided, this value will be used when the Customer object is created. If not provided, customers will be asked to enter their email address. Use this parameter to prefill customer data if you already have an email on file. To access information about the customer once the payment flow is complete, use the <code>customer</code> attribute.
     * @property \Stripe\Collection $line_items The line items purchased by the customer.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|string $locale The IETF language tag of the locale Checkout is displayed in. If blank or <code>auto</code>, the browser's locale is used.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property string $mode The mode of the Checkout Session.
     * @property null|string|\Stripe\PaymentIntent $payment_intent The ID of the PaymentIntent for Checkout Sessions in <code>payment</code> mode.
     * @property null|\Stripe\StripeObject $payment_method_options Payment-method-specific configuration for the PaymentIntent or SetupIntent of this CheckoutSession.
     * @property string[] $payment_method_types A list of the types of payment methods (e.g. card) this Checkout Session is allowed to accept.
     * @property string $payment_status The payment status of the Checkout Session, one of <code>paid</code>, <code>unpaid</code>, or <code>no_payment_required</code>. You can use this value to decide when to fulfill your customer's order.
     * @property null|string|\Stripe\SetupIntent $setup_intent The ID of the SetupIntent for Checkout Sessions in <code>setup</code> mode.
     * @property null|\Stripe\StripeObject $shipping Shipping information for this Checkout Session.
     * @property null|\Stripe\StripeObject $shipping_address_collection When set, provides configuration for Checkout to collect a shipping address from a customer.
     * @property null|string $submit_type Describes the type of transaction being performed by Checkout in order to customize relevant text on the page, such as the submit button. <code>submit_type</code> can only be specified on Checkout Sessions in <code>payment</code> mode, but not Checkout Sessions in <code>subscription</code> or <code>setup</code> mode.
     * @property null|string|\Stripe\Subscription $subscription The ID of the subscription for Checkout Sessions in <code>subscription</code> mode.
     * @property string $success_url The URL the customer will be directed to after the payment or subscription creation is successful.
     * @property \Stripe\StripeObject $tax_id_collection
     * @property null|\Stripe\StripeObject $total_details Tax and discount details for the computed total amount.
     * @property null|string $url The URL to the Checkout Session.
     */
    class Session extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'checkout.session';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\NestedResource;
        use \Stripe\ApiOperations\Retrieve;
        const BILLING_ADDRESS_COLLECTION_AUTO = 'auto';
        const BILLING_ADDRESS_COLLECTION_REQUIRED = 'required';
        const MODE_PAYMENT = 'payment';
        const MODE_SETUP = 'setup';
        const MODE_SUBSCRIPTION = 'subscription';
        const PAYMENT_STATUS_NO_PAYMENT_REQUIRED = 'no_payment_required';
        const PAYMENT_STATUS_PAID = 'paid';
        const PAYMENT_STATUS_UNPAID = 'unpaid';
        const SUBMIT_TYPE_AUTO = 'auto';
        const SUBMIT_TYPE_BOOK = 'book';
        const SUBMIT_TYPE_DONATE = 'donate';
        const SUBMIT_TYPE_PAY = 'pay';
        const PATH_LINE_ITEMS = '/line_items';
        /**
         * @param string $id the ID of the session on which to retrieve the items
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of items
         */
        public static function allLineItems($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe {
    /**
     * Class ErrorObject.
     *
     * @property string $charge For card errors, the ID of the failed charge.
     * @property string $code For some errors that could be handled
     *    programmatically, a short string indicating the error code reported.
     * @property string $decline_code For card errors resulting from a card issuer
     *    decline, a short string indicating the card issuer's reason for the
     *    decline if they provide one.
     * @property string $doc_url A URL to more information about the error code
     *    reported.
     * @property string $message A human-readable message providing more details
     *    about the error. For card errors, these messages can be shown to your
     *    users.
     * @property string $param If the error is parameter-specific, the parameter
     *    related to the error. For example, you can use this to display a message
     *    near the correct form field.
     * @property PaymentIntent $payment_intent The PaymentIntent object for errors
     *    returned on a request involving a PaymentIntent.
     * @property PaymentMethod $payment_method The PaymentMethod object for errors
     *    returned on a request involving a PaymentMethod.
     * @property string $payment_method_type If the error is specific to the type
     *    of payment method, the payment method type that had a problem. This
     *    field is only populated for invoice-related errors.
     * @property SetupIntent $setup_intent The SetupIntent object for errors
     *    returned on a request involving a SetupIntent.
     * @property StripeObject $source The source object for errors returned on a
     *    request involving a source.
     * @property string $type The type of error returned. One of `api_error`,
     *   `card_error`, `idempotency_error`, or `invalid_request_error`.
     */
    class ErrorObject extends \Stripe\StripeObject
    {
        /**
         * Possible string representations of an error's code.
         *
         * @see https://stripe.com/docs/error-codes
         */
        const CODE_ACCOUNT_ALREADY_EXISTS = 'account_already_exists';
        const CODE_ACCOUNT_COUNTRY_INVALID_ADDRESS = 'account_country_invalid_address';
        const CODE_ACCOUNT_INVALID = 'account_invalid';
        const CODE_ACCOUNT_NUMBER_INVALID = 'account_number_invalid';
        const CODE_ALIPAY_UPGRADE_REQUIRED = 'alipay_upgrade_required';
        const CODE_AMOUNT_TOO_LARGE = 'amount_too_large';
        const CODE_AMOUNT_TOO_SMALL = 'amount_too_small';
        const CODE_API_KEY_EXPIRED = 'api_key_expired';
        const CODE_BALANCE_INSUFFICIENT = 'balance_insufficient';
        const CODE_BANK_ACCOUNT_EXISTS = 'bank_account_exists';
        const CODE_BANK_ACCOUNT_UNUSABLE = 'bank_account_unusable';
        const CODE_BANK_ACCOUNT_UNVERIFIED = 'bank_account_unverified';
        const CODE_BITCOIN_UPGRADE_REQUIRED = 'bitcoin_upgrade_required';
        const CODE_CARD_DECLINED = 'card_declined';
        const CODE_CHARGE_ALREADY_CAPTURED = 'charge_already_captured';
        const CODE_CHARGE_ALREADY_REFUNDED = 'charge_already_refunded';
        const CODE_CHARGE_DISPUTED = 'charge_disputed';
        const CODE_CHARGE_EXCEEDS_SOURCE_LIMIT = 'charge_exceeds_source_limit';
        const CODE_CHARGE_EXPIRED_FOR_CAPTURE = 'charge_expired_for_capture';
        const CODE_COUNTRY_UNSUPPORTED = 'country_unsupported';
        const CODE_COUPON_EXPIRED = 'coupon_expired';
        const CODE_CUSTOMER_MAX_SUBSCRIPTIONS = 'customer_max_subscriptions';
        const CODE_EMAIL_INVALID = 'email_invalid';
        const CODE_EXPIRED_CARD = 'expired_card';
        const CODE_IDEMPOTENCY_KEY_IN_USE = 'idempotency_key_in_use';
        const CODE_INCORRECT_ADDRESS = 'incorrect_address';
        const CODE_INCORRECT_CVC = 'incorrect_cvc';
        const CODE_INCORRECT_NUMBER = 'incorrect_number';
        const CODE_INCORRECT_ZIP = 'incorrect_zip';
        const CODE_INSTANT_PAYOUTS_UNSUPPORTED = 'instant_payouts_unsupported';
        const CODE_INVALID_CARD_TYPE = 'invalid_card_type';
        const CODE_INVALID_CHARGE_AMOUNT = 'invalid_charge_amount';
        const CODE_INVALID_CVC = 'invalid_cvc';
        const CODE_INVALID_EXPIRY_MONTH = 'invalid_expiry_month';
        const CODE_INVALID_EXPIRY_YEAR = 'invalid_expiry_year';
        const CODE_INVALID_NUMBER = 'invalid_number';
        const CODE_INVALID_SOURCE_USAGE = 'invalid_source_usage';
        const CODE_INVOICE_NO_CUSTOMER_LINE_ITEMS = 'invoice_no_customer_line_items';
        const CODE_INVOICE_NO_SUBSCRIPTION_LINE_ITEMS = 'invoice_no_subscription_line_items';
        const CODE_INVOICE_NOT_EDITABLE = 'invoice_not_editable';
        const CODE_INVOICE_PAYMENT_INTENT_REQUIRES_ACTION = 'invoice_payment_intent_requires_action';
        const CODE_INVOICE_UPCOMING_NONE = 'invoice_upcoming_none';
        const CODE_LIVEMODE_MISMATCH = 'livemode_mismatch';
        const CODE_LOCK_TIMEOUT = 'lock_timeout';
        const CODE_MISSING = 'missing';
        const CODE_NOT_ALLOWED_ON_STANDARD_ACCOUNT = 'not_allowed_on_standard_account';
        const CODE_ORDER_CREATION_FAILED = 'order_creation_failed';
        const CODE_ORDER_REQUIRED_SETTINGS = 'order_required_settings';
        const CODE_ORDER_STATUS_INVALID = 'order_status_invalid';
        const CODE_ORDER_UPSTREAM_TIMEOUT = 'order_upstream_timeout';
        const CODE_OUT_OF_INVENTORY = 'out_of_inventory';
        const CODE_PARAMETER_INVALID_EMPTY = 'parameter_invalid_empty';
        const CODE_PARAMETER_INVALID_INTEGER = 'parameter_invalid_integer';
        const CODE_PARAMETER_INVALID_STRING_BLANK = 'parameter_invalid_string_blank';
        const CODE_PARAMETER_INVALID_STRING_EMPTY = 'parameter_invalid_string_empty';
        const CODE_PARAMETER_MISSING = 'parameter_missing';
        const CODE_PARAMETER_UNKNOWN = 'parameter_unknown';
        const CODE_PARAMETERS_EXCLUSIVE = 'parameters_exclusive';
        const CODE_PAYMENT_INTENT_AUTHENTICATION_FAILURE = 'payment_intent_authentication_failure';
        const CODE_PAYMENT_INTENT_INCOMPATIBLE_PAYMENT_METHOD = 'payment_intent_incompatible_payment_method';
        const CODE_PAYMENT_INTENT_INVALID_PARAMETER = 'payment_intent_invalid_parameter';
        const CODE_PAYMENT_INTENT_PAYMENT_ATTEMPT_FAILED = 'payment_intent_payment_attempt_failed';
        const CODE_PAYMENT_INTENT_UNEXPECTED_STATE = 'payment_intent_unexpected_state';
        const CODE_PAYMENT_METHOD_UNACTIVATED = 'payment_method_unactivated';
        const CODE_PAYMENT_METHOD_UNEXPECTED_STATE = 'payment_method_unexpected_state';
        const CODE_PAYOUTS_NOT_ALLOWED = 'payouts_not_allowed';
        const CODE_PLATFORM_API_KEY_EXPIRED = 'platform_api_key_expired';
        const CODE_POSTAL_CODE_INVALID = 'postal_code_invalid';
        const CODE_PROCESSING_ERROR = 'processing_error';
        const CODE_PRODUCT_INACTIVE = 'product_inactive';
        const CODE_RATE_LIMIT = 'rate_limit';
        const CODE_RESOURCE_ALREADY_EXISTS = 'resource_already_exists';
        const CODE_RESOURCE_MISSING = 'resource_missing';
        const CODE_ROUTING_NUMBER_INVALID = 'routing_number_invalid';
        const CODE_SECRET_KEY_REQUIRED = 'secret_key_required';
        const CODE_SEPA_UNSUPPORTED_ACCOUNT = 'sepa_unsupported_account';
        const CODE_SETUP_ATTEMPT_FAILED = 'setup_attempt_failed';
        const CODE_SETUP_INTENT_AUTHENTICATION_FAILURE = 'setup_intent_authentication_failure';
        const CODE_SETUP_INTENT_UNEXPECTED_STATE = 'setup_intent_unexpected_state';
        const CODE_SHIPPING_CALCULATION_FAILED = 'shipping_calculation_failed';
        const CODE_SKU_INACTIVE = 'sku_inactive';
        const CODE_STATE_UNSUPPORTED = 'state_unsupported';
        const CODE_TAX_ID_INVALID = 'tax_id_invalid';
        const CODE_TAXES_CALCULATION_FAILED = 'taxes_calculation_failed';
        const CODE_TESTMODE_CHARGES_ONLY = 'testmode_charges_only';
        const CODE_TLS_VERSION_UNSUPPORTED = 'tls_version_unsupported';
        const CODE_TOKEN_ALREADY_USED = 'token_already_used';
        const CODE_TOKEN_IN_USE = 'token_in_use';
        const CODE_TRANSFERS_NOT_ALLOWED = 'transfers_not_allowed';
        const CODE_UPSTREAM_ORDER_CREATION_FAILED = 'upstream_order_creation_failed';
        const CODE_URL_INVALID = 'url_invalid';
        /**
         * Refreshes this object using the provided values.
         *
         * @param array $values
         * @param null|array|string|Util\RequestOptions $opts
         * @param bool $partial defaults to false
         */
        public function refreshFrom($values, $opts, $partial = false)
        {
        }
    }
    /**
     * <code>Customer</code> objects allow you to perform recurring charges, and to
     * track multiple charges, that are associated with the same customer. The API
     * allows you to create, delete, and update your customers. You can retrieve
     * individual customers as well as a list of all your customers.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/payments/save-during-payment">Save a card during
     * payment</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|\Stripe\StripeObject $address The customer's address.
     * @property int $balance Current balance, if any, being stored on the customer. If negative, the customer has credit to apply to their next invoice. If positive, the customer has an amount owed that will be added to their next invoice. The balance does not refer to any unpaid invoices; it solely takes into account amounts that have yet to be successfully applied to any invoice. This balance is only taken into account as invoices are finalized.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string $currency Three-letter <a href="https://stripe.com/docs/currencies">ISO code for the currency</a> the customer can be charged in for recurring billing purposes.
     * @property null|string|\Stripe\Account|\Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source $default_source <p>ID of the default payment source for the customer.</p><p>If you are using payment methods created via the PaymentMethods API, see the <a href="https://stripe.com/docs/api/customers/object#customer_object-invoice_settings-default_payment_method">invoice_settings.default_payment_method</a> field instead.</p>
     * @property null|bool $delinquent <p>When the customer's latest invoice is billed by charging automatically, <code>delinquent</code> is <code>true</code> if the invoice's latest charge failed. When the customer's latest invoice is billed by sending an invoice, <code>delinquent</code> is <code>true</code> if the invoice isn't paid by its due date.</p><p>If an invoice is marked uncollectible by <a href="https://stripe.com/docs/billing/automatic-collection">dunning</a>, <code>delinquent</code> doesn't get reset to <code>false</code>.</p>
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property null|\Stripe\Discount $discount Describes the current discount active on the customer, if there is one.
     * @property null|string $email The customer's email address.
     * @property null|string $invoice_prefix The prefix for the customer used to generate unique invoice numbers.
     * @property \Stripe\StripeObject $invoice_settings
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string $name The customer's full name or business name.
     * @property int $next_invoice_sequence The suffix of the customer's next invoice number, e.g., 0001.
     * @property null|string $phone The customer's phone number.
     * @property null|string[] $preferred_locales The customer's preferred locales (languages), ordered by preference.
     * @property null|\Stripe\StripeObject $shipping Mailing and shipping address for the customer. Appears on invoices emailed to this customer.
     * @property \Stripe\Collection $sources The customer's payment sources, if any.
     * @property \Stripe\Collection $subscriptions The customer's current subscriptions, if any.
     * @property \Stripe\StripeObject $tax
     * @property null|string $tax_exempt Describes the customer's tax exemption status. One of <code>none</code>, <code>exempt</code>, or <code>reverse</code>. When set to <code>reverse</code>, invoice and receipt PDFs include the text <strong>&quot;Reverse charge&quot;</strong>.
     * @property \Stripe\Collection $tax_ids The customer's tax IDs.
     */
    class Customer extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'customer';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\NestedResource;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const TAX_EXEMPT_EXEMPT = 'exempt';
        const TAX_EXEMPT_NONE = 'none';
        const TAX_EXEMPT_REVERSE = 'reverse';
        public static function getSavedNestedResources()
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @return \Stripe\Customer the updated customer
         */
        public function deleteDiscount($params = null, $opts = null)
        {
        }
        const PATH_BALANCE_TRANSACTIONS = '/balance_transactions';
        /**
         * @param string $id the ID of the customer on which to retrieve the customer balance transactions
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of customer balance transactions
         */
        public static function allBalanceTransactions($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the customer on which to create the customer balance transaction
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CustomerBalanceTransaction
         */
        public static function createBalanceTransaction($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the customer to which the customer balance transaction belongs
         * @param string $balanceTransactionId the ID of the customer balance transaction to retrieve
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CustomerBalanceTransaction
         */
        public static function retrieveBalanceTransaction($id, $balanceTransactionId, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the customer to which the customer balance transaction belongs
         * @param string $balanceTransactionId the ID of the customer balance transaction to update
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CustomerBalanceTransaction
         */
        public static function updateBalanceTransaction($id, $balanceTransactionId, $params = null, $opts = null)
        {
        }
        const PATH_SOURCES = '/sources';
        /**
         * @param string $id the ID of the customer on which to retrieve the payment sources
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of payment sources (AlipayAccount, BankAccount, BitcoinReceiver, Card or Source)
         */
        public static function allSources($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the customer on which to create the payment source
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source
         */
        public static function createSource($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the customer to which the payment source belongs
         * @param string $sourceId the ID of the payment source to delete
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source
         */
        public static function deleteSource($id, $sourceId, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the customer to which the payment source belongs
         * @param string $sourceId the ID of the payment source to retrieve
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source
         */
        public static function retrieveSource($id, $sourceId, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the customer to which the payment source belongs
         * @param string $sourceId the ID of the payment source to update
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source
         */
        public static function updateSource($id, $sourceId, $params = null, $opts = null)
        {
        }
        const PATH_TAX_IDS = '/tax_ids';
        /**
         * @param string $id the ID of the customer on which to retrieve the tax ids
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of tax ids
         */
        public static function allTaxIds($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the customer on which to create the tax id
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TaxId
         */
        public static function createTaxId($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the customer to which the tax id belongs
         * @param string $taxIdId the ID of the tax id to delete
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TaxId
         */
        public static function deleteTaxId($id, $taxIdId, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the customer to which the tax id belongs
         * @param string $taxIdId the ID of the tax id to retrieve
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TaxId
         */
        public static function retrieveTaxId($id, $taxIdId, $params = null, $opts = null)
        {
        }
    }
    /**
     * <code>Application Fee Refund</code> objects allow you to refund an application
     * fee that has previously been created but not yet refunded. Funds will be
     * refunded to the Stripe account from which the fee was originally collected.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/connect/destination-charges#refunding-app-fee">Refunding
     * Application Fees</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Amount, in %s.
     * @property null|string|\Stripe\BalanceTransaction $balance_transaction Balance transaction that describes the impact on your account balance.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property string|\Stripe\ApplicationFee $fee ID of the application fee that was refunded.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    class ApplicationFeeRefund extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'fee_refund';
        use \Stripe\ApiOperations\Update {
            save as protected _save;
        }
        /**
         * @return string the API URL for this Stripe refund
         */
        public function instanceUrl()
        {
        }
        /**
         * @param null|array|string $opts
         *
         * @return ApplicationFeeRefund the saved refund
         */
        public function save($opts = null)
        {
        }
    }
}
namespace Stripe\Sigma {
    /**
     * If you have <a href="https://stripe.com/docs/sigma/scheduled-queries">scheduled
     * a Sigma query</a>, you'll receive a
     * <code>sigma.scheduled_query_run.created</code> webhook each time the query runs.
     * The webhook contains a <code>ScheduledQueryRun</code> object, which you can use
     * to retrieve the query results.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property int $data_load_time When the query was run, Sigma contained a snapshot of your Stripe data at this time.
     * @property \Stripe\StripeObject $error
     * @property null|\Stripe\File $file The file object representing the results of the query.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property int $result_available_until Time at which the result expires and is no longer available for download.
     * @property string $sql SQL for the query.
     * @property string $status The query's execution status, which will be <code>completed</code> for successful runs, and <code>canceled</code>, <code>failed</code>, or <code>timed_out</code> otherwise.
     * @property string $title Title of the query.
     */
    class ScheduledQueryRun extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'scheduled_query_run';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
        public static function classUrl()
        {
        }
    }
}
namespace Stripe {
    /**
     * This is an object representing a capability for a Stripe account.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/connect/account-capabilities">Account
     * capabilities</a>.
     *
     * @property string $id The identifier for the capability.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property string|\Stripe\Account $account The account for which the capability enables functionality.
     * @property bool $requested Whether the capability has been requested.
     * @property null|int $requested_at Time at which the capability was requested. Measured in seconds since the Unix epoch.
     * @property \Stripe\StripeObject $requirements
     * @property string $status The status of the capability. Can be <code>active</code>, <code>inactive</code>, <code>pending</code>, or <code>unrequested</code>.
     */
    class Capability extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'capability';
        use \Stripe\ApiOperations\Update;
        const STATUS_ACTIVE = 'active';
        const STATUS_INACTIVE = 'inactive';
        const STATUS_PENDING = 'pending';
        const STATUS_UNREQUESTED = 'unrequested';
        /**
         * @return string the API URL for this Stripe account reversal
         */
        public function instanceUrl()
        {
        }
        /**
         * @param array|string $_id
         * @param null|array|string $_opts
         *
         * @throws \Stripe\Exception\BadMethodCallException
         */
        public static function retrieve($_id, $_opts = null)
        {
        }
        /**
         * @param string $_id
         * @param null|array $_params
         * @param null|array|string $_options
         *
         * @throws \Stripe\Exception\BadMethodCallException
         */
        public static function update($_id, $_params = null, $_options = null)
        {
        }
    }
    /**
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount The amount, in %s.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property null|\Stripe\StripeObject[] $discount_amounts The amount of discount calculated per discount for this line item.
     * @property bool $discountable If true, discounts will apply to this line item. Always false for prorations.
     * @property null|(string|\Stripe\Discount)[] $discounts The discounts applied to the invoice line item. Line item discounts are applied before invoice discounts. Use <code>expand[]=discounts</code> to expand each discount.
     * @property string $invoice_item The ID of the <a href="https://stripe.com/docs/api/invoiceitems">invoice item</a> associated with this line item if any.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Note that for line items with <code>type=subscription</code> this will reflect the metadata of the subscription that caused the line item to be created.
     * @property \Stripe\StripeObject $period
     * @property null|\Stripe\Plan $plan The plan of the subscription, if the line item is a subscription or a proration.
     * @property null|\Stripe\Price $price The price of the line item.
     * @property bool $proration Whether this is a proration.
     * @property null|int $quantity The quantity of the subscription, if the line item is a subscription or a proration.
     * @property null|string $subscription The subscription that the invoice item pertains to, if any.
     * @property string $subscription_item The subscription item that generated this invoice item. Left empty if the line item is not an explicit result of a subscription.
     * @property \Stripe\StripeObject[] $tax_amounts The amount of tax calculated per tax rate for this line item
     * @property \Stripe\TaxRate[] $tax_rates The tax rates which apply to the line item.
     * @property string $type A string identifying the type of the source of this line item, either an <code>invoiceitem</code> or a <code>subscription</code>.
     */
    class InvoiceLineItem extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'line_item';
    }
    /**
     * Prices define the unit cost, currency, and (optional) billing cycle for both
     * recurring and one-time purchases of products. <a
     * href="https://stripe.com/docs/api#products">Products</a> help you track
     * inventory or provisioning, and prices help you track payment terms. Different
     * physical goods or levels of service should be represented by products, and
     * pricing options should be represented by prices. This approach lets you change
     * prices without having to change your provisioning scheme.
     *
     * For example, you might have a single &quot;gold&quot; product that has prices
     * for $10/month, $100/year, and €9 once.
     *
     * Related guides: <a
     * href="https://stripe.com/docs/billing/subscriptions/set-up-subscription">Set up
     * a subscription</a>, <a
     * href="https://stripe.com/docs/billing/invoices/create">create an invoice</a>,
     * and more about <a href="https://stripe.com/docs/billing/prices-guide">products
     * and prices</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property bool $active Whether the price can be used for new purchases.
     * @property string $billing_scheme Describes how to compute the price per period. Either <code>per_unit</code> or <code>tiered</code>. <code>per_unit</code> indicates that the fixed amount (specified in <code>unit_amount</code> or <code>unit_amount_decimal</code>) will be charged per unit in <code>quantity</code> (for prices with <code>usage_type=licensed</code>), or per unit of total usage (for prices with <code>usage_type=metered</code>). <code>tiered</code> indicates that the unit pricing will be computed using a tiering strategy as defined using the <code>tiers</code> and <code>tiers_mode</code> attributes.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|string $lookup_key A lookup key used to retrieve prices dynamically from a static string.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string $nickname A brief description of the price, hidden from customers.
     * @property string|\Stripe\Product $product The ID of the product this price is associated with.
     * @property null|\Stripe\StripeObject $recurring The recurring components of a price such as <code>interval</code> and <code>usage_type</code>.
     * @property null|string $tax_behavior Specifies whether the price is considered inclusive of taxes or exclusive of taxes. One of <code>inclusive</code>, <code>exclusive</code>, or <code>unspecified</code>. Once specified as either <code>inclusive</code> or <code>exclusive</code>, it cannot be changed.
     * @property \Stripe\StripeObject[] $tiers Each element represents a pricing tier. This parameter requires <code>billing_scheme</code> to be set to <code>tiered</code>. See also the documentation for <code>billing_scheme</code>.
     * @property null|string $tiers_mode Defines if the tiering price should be <code>graduated</code> or <code>volume</code> based. In <code>volume</code>-based tiering, the maximum quantity within a period determines the per unit price. In <code>graduated</code> tiering, pricing can change as the quantity grows.
     * @property null|\Stripe\StripeObject $transform_quantity Apply a transformation to the reported usage or set quantity before computing the amount billed. Cannot be combined with <code>tiers</code>.
     * @property string $type One of <code>one_time</code> or <code>recurring</code> depending on whether the price is for a one-time purchase or a recurring (subscription) purchase.
     * @property null|int $unit_amount The unit amount in %s to be charged, represented as a whole integer if possible. Only set if <code>billing_scheme=per_unit</code>.
     * @property null|string $unit_amount_decimal The unit amount in %s to be charged, represented as a decimal string with at most 12 decimal places. Only set if <code>billing_scheme=per_unit</code>.
     */
    class Price extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'price';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const BILLING_SCHEME_PER_UNIT = 'per_unit';
        const BILLING_SCHEME_TIERED = 'tiered';
        const TAX_BEHAVIOR_EXCLUSIVE = 'exclusive';
        const TAX_BEHAVIOR_INCLUSIVE = 'inclusive';
        const TAX_BEHAVIOR_UNSPECIFIED = 'unspecified';
        const TIERS_MODE_GRADUATED = 'graduated';
        const TIERS_MODE_VOLUME = 'volume';
        const TYPE_ONE_TIME = 'one_time';
        const TYPE_RECURRING = 'recurring';
    }
    abstract class Webhook
    {
        const DEFAULT_TOLERANCE = 300;
        /**
         * Returns an Event instance using the provided JSON payload. Throws an
         * Exception\UnexpectedValueException if the payload is not valid JSON, and
         * an Exception\SignatureVerificationException if the signature
         * verification fails for any reason.
         *
         * @param string $payload the payload sent by Stripe
         * @param string $sigHeader the contents of the signature header sent by
         *  Stripe
         * @param string $secret secret used to generate the signature
         * @param int $tolerance maximum difference allowed between the header's
         *  timestamp and the current time
         *
         * @throws Exception\UnexpectedValueException if the payload is not valid JSON,
         * @throws Exception\SignatureVerificationException if the verification fails
         *
         * @return Event the Event instance
         */
        public static function constructEvent($payload, $sigHeader, $secret, $tolerance = self::DEFAULT_TOLERANCE)
        {
        }
    }
    /**
     * Class ApiResponse.
     */
    class ApiResponse
    {
        /**
         * @var null|array|CaseInsensitiveArray
         */
        public $headers;
        /**
         * @var string
         */
        public $body;
        /**
         * @var null|array
         */
        public $json;
        /**
         * @var int
         */
        public $code;
        /**
         * @param string $body
         * @param int $code
         * @param null|array|CaseInsensitiveArray $headers
         * @param null|array $json
         */
        public function __construct($body, $code, $headers, $json)
        {
        }
    }
    /**
     * A Quote is a way to model prices that you'd like to provide to a customer. Once
     * accepted, it will automatically create an invoice, subscription or subscription
     * schedule.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount_subtotal Total before any discounts or taxes are applied.
     * @property int $amount_total Total after discounts and taxes are applied.
     * @property null|int $application_fee_amount The amount of the application fee (if any) that will be requested to be applied to the payment and transferred to the application owner's Stripe account. Only applicable if there are no line items with recurring prices on the quote.
     * @property null|float $application_fee_percent A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice subtotal that will be transferred to the application owner's Stripe account. Only applicable if there are line items with recurring prices on the quote.
     * @property \Stripe\StripeObject $automatic_tax
     * @property string $collection_method Either <code>charge_automatically</code>, or <code>send_invoice</code>. When charging automatically, Stripe will attempt to pay invoices at the end of the subscription cycle or on finalization using the default payment method attached to the subscription or customer. When sending an invoice, Stripe will email your customer an invoice with payment instructions. Defaults to <code>charge_automatically</code>.
     * @property \Stripe\StripeObject $computed
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string|\Stripe\Customer $customer The customer which this quote belongs to. A customer is required before finalizing the quote. Once specified, it cannot be changed.
     * @property (string|\Stripe\TaxRate)[] $default_tax_rates The tax rates applied to this quote.
     * @property null|string $description A description that will be displayed on the quote PDF.
     * @property (string|\Stripe\Discount)[] $discounts The discounts applied to this quote.
     * @property int $expires_at The date on which the quote will be canceled if in <code>open</code> or <code>draft</code> status. Measured in seconds since the Unix epoch.
     * @property null|string $footer A footer that will be displayed on the quote PDF.
     * @property null|\Stripe\StripeObject $from_quote Details of the quote that was cloned. See the <a href="https://stripe.com/docs/quotes/clone">cloning documentation</a> for more details.
     * @property null|string $header A header that will be displayed on the quote PDF.
     * @property null|string|\Stripe\Invoice $invoice The invoice that was created from this quote.
     * @property null|\Stripe\StripeObject $invoice_settings All invoices will be billed using the specified settings.
     * @property \Stripe\Collection $line_items A list of items the customer is being quoted for.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string $number A unique number that identifies this particular quote. This number is assigned once the quote is <a href="https://stripe.com/docs/quotes/overview#finalize">finalized</a>.
     * @property null|string|\Stripe\Account $on_behalf_of The account on behalf of which to charge. See the <a href="https://support.stripe.com/questions/sending-invoices-on-behalf-of-connected-accounts">Connect documentation</a> for details.
     * @property string $status The status of the quote.
     * @property \Stripe\StripeObject $status_transitions
     * @property null|string|\Stripe\Subscription $subscription The subscription that was created or updated from this quote.
     * @property \Stripe\StripeObject $subscription_data
     * @property null|string|\Stripe\SubscriptionSchedule $subscription_schedule The subscription schedule that was created or updated from this quote.
     * @property \Stripe\StripeObject $total_details
     * @property null|\Stripe\StripeObject $transfer_data The account (if any) the payments will be attributed to for tax reporting, and where funds from each payment will be transferred to for each of the invoices.
     */
    class Quote extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'quote';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const COLLECTION_METHOD_CHARGE_AUTOMATICALLY = 'charge_automatically';
        const COLLECTION_METHOD_SEND_INVOICE = 'send_invoice';
        const STATUS_ACCEPTED = 'accepted';
        const STATUS_CANCELED = 'canceled';
        const STATUS_DRAFT = 'draft';
        const STATUS_OPEN = 'open';
        /**
         * @param callable $readBodyChunkCallable
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\File the created file
         */
        public function pdf($readBodyChunkCallable, $params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Quote the accepted quote
         */
        public function accept($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Quote the canceled quote
         */
        public function cancel($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Quote the finalized quote
         */
        public function finalizeQuote($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         * @param mixed $id
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection list of LineItems
         */
        public static function allComputedUpfrontLineItems($id, $params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         * @param mixed $id
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection list of LineItems
         */
        public static function allLineItems($id, $params = null, $opts = null)
        {
        }
    }
    /**
     * You can configure <a href="https://stripe.com/docs/webhooks/">webhook
     * endpoints</a> via the API to be notified about events that happen in your Stripe
     * account or connected accounts.
     *
     * Most users configure webhooks from <a
     * href="https://dashboard.stripe.com/webhooks">the dashboard</a>, which provides a
     * user interface for registering and testing your webhook endpoints.
     *
     * Related guide: <a href="https://stripe.com/docs/webhooks/configure">Setting up
     * Webhooks</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|string $api_version The API version events are rendered as for this webhook endpoint.
     * @property null|string $application The ID of the associated Connect application.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string $description An optional description of what the webhook is used for.
     * @property string[] $enabled_events The list of events to enable for this endpoint. <code>['*']</code> indicates that all events are enabled, except those that require explicit selection.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property string $secret The endpoint's secret, used to generate <a href="https://stripe.com/docs/webhooks/signatures">webhook signatures</a>. Only returned at creation.
     * @property string $status The status of the webhook. It can be <code>enabled</code> or <code>disabled</code>.
     * @property string $url The URL of the webhook endpoint.
     */
    class WebhookEndpoint extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'webhook_endpoint';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
    /**
     * Invoices are statements of amounts owed by a customer, and are either generated
     * one-off, or generated periodically from a subscription.
     *
     * They contain <a href="https://stripe.com/docs/api#invoiceitems">invoice
     * items</a>, and proration adjustments that may be caused by subscription
     * upgrades/downgrades (if necessary).
     *
     * If your invoice is configured to be billed through automatic charges, Stripe
     * automatically finalizes your invoice and attempts payment. Note that finalizing
     * the invoice, <a
     * href="https://stripe.com/docs/billing/invoices/workflow/#auto_advance">when
     * automatic</a>, does not happen immediately as the invoice is created. Stripe
     * waits until one hour after the last webhook was successfully sent (or the last
     * webhook timed out after failing). If you (and the platforms you may have
     * connected to) have no webhooks configured, Stripe waits one hour after creation
     * to finalize the invoice.
     *
     * If your invoice is configured to be billed by sending an email, then based on
     * your <a href="https://dashboard.stripe.com/account/billing/automatic'">email
     * settings</a>, Stripe will email the invoice to your customer and await payment.
     * These emails can contain a link to a hosted page to pay the invoice.
     *
     * Stripe applies any customer credit on the account before determining the amount
     * due for the invoice (i.e., the amount that will be actually charged). If the
     * amount due for the invoice is less than Stripe's <a
     * href="/docs/currencies#minimum-and-maximum-charge-amounts">minimum allowed
     * charge per currency</a>, the invoice is automatically marked paid, and we add
     * the amount due to the customer's credit balance which is applied to the next
     * invoice.
     *
     * More details on the customer's credit balance are <a
     * href="https://stripe.com/docs/billing/customer/balance">here</a>.
     *
     * Related guide: <a href="https://stripe.com/docs/billing/invoices/sending">Send
     * Invoices to Customers</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|string $account_country The country of the business associated with this invoice, most often the business creating the invoice.
     * @property null|string $account_name The public name of the business associated with this invoice, most often the business creating the invoice.
     * @property null|(string|\Stripe\TaxId)[] $account_tax_ids The account tax IDs associated with the invoice. Only editable when the invoice is a draft.
     * @property int $amount_due Final amount due at this time for this invoice. If the invoice's total is smaller than the minimum charge amount, for example, or if there is account credit that can be applied to the invoice, the <code>amount_due</code> may be 0. If there is a positive <code>starting_balance</code> for the invoice (the customer owes money), the <code>amount_due</code> will also take that into account. The charge that gets generated for the invoice will be for the amount specified in <code>amount_due</code>.
     * @property int $amount_paid The amount, in %s, that was paid.
     * @property int $amount_remaining The amount remaining, in %s, that is due.
     * @property null|int $application_fee_amount The fee in %s that will be applied to the invoice and transferred to the application owner's Stripe account when the invoice is paid.
     * @property int $attempt_count Number of payment attempts made for this invoice, from the perspective of the payment retry schedule. Any payment attempt counts as the first attempt, and subsequently only automatic retries increment the attempt count. In other words, manual payment attempts after the first attempt do not affect the retry schedule.
     * @property bool $attempted Whether an attempt has been made to pay the invoice. An invoice is not attempted until 1 hour after the <code>invoice.created</code> webhook, for example, so you might not want to display that invoice as unpaid to your users.
     * @property bool $auto_advance Controls whether Stripe will perform <a href="https://stripe.com/docs/billing/invoices/workflow/#auto_advance">automatic collection</a> of the invoice. When <code>false</code>, the invoice's state will not automatically advance without an explicit action.
     * @property \Stripe\StripeObject $automatic_tax
     * @property null|string $billing_reason Indicates the reason why the invoice was created. <code>subscription_cycle</code> indicates an invoice created by a subscription advancing into a new period. <code>subscription_create</code> indicates an invoice created due to creating a subscription. <code>subscription_update</code> indicates an invoice created due to updating a subscription. <code>subscription</code> is set for all old invoices to indicate either a change to a subscription or a period advancement. <code>manual</code> is set for all invoices unrelated to a subscription (for example: created via the invoice editor). The <code>upcoming</code> value is reserved for simulated invoices per the upcoming invoice endpoint. <code>subscription_threshold</code> indicates an invoice created due to a billing threshold being reached.
     * @property null|string|\Stripe\Charge $charge ID of the latest charge generated for this invoice, if any.
     * @property null|string $collection_method Either <code>charge_automatically</code>, or <code>send_invoice</code>. When charging automatically, Stripe will attempt to pay this invoice using the default source attached to the customer. When sending an invoice, Stripe will email this invoice to the customer with payment instructions.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|\Stripe\StripeObject[] $custom_fields Custom fields displayed on the invoice.
     * @property null|string|\Stripe\Customer $customer The ID of the customer who will be billed.
     * @property null|\Stripe\StripeObject $customer_address The customer's address. Until the invoice is finalized, this field will equal <code>customer.address</code>. Once the invoice is finalized, this field will no longer be updated.
     * @property null|string $customer_email The customer's email. Until the invoice is finalized, this field will equal <code>customer.email</code>. Once the invoice is finalized, this field will no longer be updated.
     * @property null|string $customer_name The customer's name. Until the invoice is finalized, this field will equal <code>customer.name</code>. Once the invoice is finalized, this field will no longer be updated.
     * @property null|string $customer_phone The customer's phone number. Until the invoice is finalized, this field will equal <code>customer.phone</code>. Once the invoice is finalized, this field will no longer be updated.
     * @property null|\Stripe\StripeObject $customer_shipping The customer's shipping information. Until the invoice is finalized, this field will equal <code>customer.shipping</code>. Once the invoice is finalized, this field will no longer be updated.
     * @property null|string $customer_tax_exempt The customer's tax exempt status. Until the invoice is finalized, this field will equal <code>customer.tax_exempt</code>. Once the invoice is finalized, this field will no longer be updated.
     * @property null|\Stripe\StripeObject[] $customer_tax_ids The customer's tax IDs. Until the invoice is finalized, this field will contain the same tax IDs as <code>customer.tax_ids</code>. Once the invoice is finalized, this field will no longer be updated.
     * @property null|string|\Stripe\PaymentMethod $default_payment_method ID of the default payment method for the invoice. It must belong to the customer associated with the invoice. If not set, defaults to the subscription's default payment method, if any, or to the default payment method in the customer's invoice settings.
     * @property null|string|\Stripe\Account|\Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source $default_source ID of the default payment source for the invoice. It must belong to the customer associated with the invoice and be in a chargeable state. If not set, defaults to the subscription's default source, if any, or to the customer's default source.
     * @property \Stripe\TaxRate[] $default_tax_rates The tax rates applied to this invoice, if any.
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users. Referenced as 'memo' in the Dashboard.
     * @property null|\Stripe\Discount $discount Describes the current discount applied to this invoice, if there is one. Not populated if there are multiple discounts.
     * @property null|(string|\Stripe\Discount)[] $discounts The discounts applied to the invoice. Line item discounts are applied before invoice discounts. Use <code>expand[]=discounts</code> to expand each discount.
     * @property null|int $due_date The date on which payment for this invoice is due. This value will be <code>null</code> for invoices where <code>collection_method=charge_automatically</code>.
     * @property null|int $ending_balance Ending customer balance after the invoice is finalized. Invoices are finalized approximately an hour after successful webhook delivery or when payment collection is attempted for the invoice. If the invoice has not been finalized yet, this will be null.
     * @property null|string $footer Footer displayed on the invoice.
     * @property null|string $hosted_invoice_url The URL for the hosted invoice page, which allows customers to view and pay an invoice. If the invoice has not been finalized yet, this will be null.
     * @property null|string $invoice_pdf The link to download the PDF for the invoice. If the invoice has not been finalized yet, this will be null.
     * @property null|\Stripe\ErrorObject $last_finalization_error The error encountered during the previous attempt to finalize the invoice. This field is cleared when the invoice is successfully finalized.
     * @property \Stripe\Collection $lines The individual line items that make up the invoice. <code>lines</code> is sorted as follows: invoice items in reverse chronological order, followed by the subscription, if any.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|int $next_payment_attempt The time at which payment will next be attempted. This value will be <code>null</code> for invoices where <code>collection_method=send_invoice</code>.
     * @property null|string $number A unique, identifying string that appears on emails sent to the customer for this invoice. This starts with the customer's unique invoice_prefix if it is specified.
     * @property null|string|\Stripe\Account $on_behalf_of The account (if any) for which the funds of the invoice payment are intended. If set, the invoice will be presented with the branding and support information of the specified account. See the <a href="https://stripe.com/docs/billing/invoices/connect">Invoices with Connect</a> documentation for details.
     * @property bool $paid Whether payment was successfully collected for this invoice. An invoice can be paid (most commonly) with a charge or with credit from the customer's account balance.
     * @property null|string|\Stripe\PaymentIntent $payment_intent The PaymentIntent associated with this invoice. The PaymentIntent is generated when the invoice is finalized, and can then be used to pay the invoice. Note that voiding an invoice will cancel the PaymentIntent.
     * @property \Stripe\StripeObject $payment_settings
     * @property int $period_end End of the usage period during which invoice items were added to this invoice.
     * @property int $period_start Start of the usage period during which invoice items were added to this invoice.
     * @property int $post_payment_credit_notes_amount Total amount of all post-payment credit notes issued for this invoice.
     * @property int $pre_payment_credit_notes_amount Total amount of all pre-payment credit notes issued for this invoice.
     * @property null|string|\Stripe\Quote $quote The quote this invoice was generated from.
     * @property null|string $receipt_number This is the transaction number that appears on email receipts sent for this invoice.
     * @property int $starting_balance Starting customer balance before the invoice is finalized. If the invoice has not been finalized yet, this will be the current customer balance.
     * @property null|string $statement_descriptor Extra information about an invoice for the customer's credit card statement.
     * @property null|string $status The status of the invoice, one of <code>draft</code>, <code>open</code>, <code>paid</code>, <code>uncollectible</code>, or <code>void</code>. <a href="https://stripe.com/docs/billing/invoices/workflow#workflow-overview">Learn more</a>
     * @property \Stripe\StripeObject $status_transitions
     * @property null|string|\Stripe\Subscription $subscription The subscription that this invoice was prepared for, if any.
     * @property int $subscription_proration_date Only set for upcoming invoices that preview prorations. The time used to calculate prorations.
     * @property int $subtotal Total of all subscriptions, invoice items, and prorations on the invoice before any invoice level discount or tax is applied. Item discounts are already incorporated
     * @property null|int $tax The amount of tax on this invoice. This is the sum of all the tax amounts on this invoice.
     * @property \Stripe\StripeObject $threshold_reason
     * @property int $total Total after discounts and taxes.
     * @property null|\Stripe\StripeObject[] $total_discount_amounts The aggregate amounts calculated per discount across all line items.
     * @property \Stripe\StripeObject[] $total_tax_amounts The aggregate amounts calculated per tax rate for all line items.
     * @property null|int $webhooks_delivered_at Invoices are automatically paid or sent 1 hour after webhooks are delivered, or until all webhook delivery attempts have <a href="https://stripe.com/docs/billing/webhooks#understand">been exhausted</a>. This field tracks the time when webhooks for this invoice were successfully delivered. If the invoice had no webhooks to deliver, this will be set while the invoice is being created.
     */
    class Invoice extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'invoice';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const BILLING_CHARGE_AUTOMATICALLY = 'charge_automatically';
        const BILLING_SEND_INVOICE = 'send_invoice';
        const BILLING_REASON_MANUAL = 'manual';
        const BILLING_REASON_QUOTE_ACCEPT = 'quote_accept';
        const BILLING_REASON_SUBSCRIPTION = 'subscription';
        const BILLING_REASON_SUBSCRIPTION_CREATE = 'subscription_create';
        const BILLING_REASON_SUBSCRIPTION_CYCLE = 'subscription_cycle';
        const BILLING_REASON_SUBSCRIPTION_THRESHOLD = 'subscription_threshold';
        const BILLING_REASON_SUBSCRIPTION_UPDATE = 'subscription_update';
        const BILLING_REASON_UPCOMING = 'upcoming';
        const COLLECTION_METHOD_CHARGE_AUTOMATICALLY = 'charge_automatically';
        const COLLECTION_METHOD_SEND_INVOICE = 'send_invoice';
        const STATUS_DELETED = 'deleted';
        const STATUS_DRAFT = 'draft';
        const STATUS_OPEN = 'open';
        const STATUS_PAID = 'paid';
        const STATUS_UNCOLLECTIBLE = 'uncollectible';
        const STATUS_VOID = 'void';
        use \Stripe\ApiOperations\NestedResource;
        const PATH_LINES = '/lines';
        /**
         * @param string $id the ID of the invoice on which to retrieve the lines
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws StripeExceptionApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of lines (InvoiceLineItem)
         */
        public static function allLines($id, $params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice the finalized invoice
         */
        public function finalizeInvoice($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice the uncollectible invoice
         */
        public function markUncollectible($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice the paid invoice
         */
        public function pay($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice the sent invoice
         */
        public function sendInvoice($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice the upcoming invoice
         */
        public static function upcoming($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice the voided invoice
         */
        public function voidInvoice($params = null, $opts = null)
        {
        }
    }
    /**
     * This is an object representing your Stripe balance. You can retrieve it to see
     * the balance currently on your Stripe account.
     *
     * You can also retrieve the balance history, which contains a list of <a
     * href="https://stripe.com/docs/reporting/balance-transaction-types">transactions</a>
     * that contributed to the balance (charges, payouts, and so forth).
     *
     * The available and pending amounts for each currency are broken down further by
     * payment source types.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/connect/account-balances">Understanding Connect
     * Account Balances</a>.
     *
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property \Stripe\StripeObject[] $available Funds that are available to be transferred or paid out, whether automatically by Stripe or explicitly via the <a href="https://stripe.com/docs/api#transfers">Transfers API</a> or <a href="https://stripe.com/docs/api#payouts">Payouts API</a>. The available balance for each currency and payment type can be found in the <code>source_types</code> property.
     * @property \Stripe\StripeObject[] $connect_reserved Funds held due to negative balances on connected Custom accounts. The connect reserve balance for each currency and payment type can be found in the <code>source_types</code> property.
     * @property \Stripe\StripeObject[] $instant_available Funds that can be paid out using Instant Payouts.
     * @property \Stripe\StripeObject $issuing
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject[] $pending Funds that are not yet available in the balance, due to the 7-day rolling pay cycle. The pending balance for each currency, and for each payment type, can be found in the <code>source_types</code> property.
     */
    class Balance extends \Stripe\SingletonApiResource
    {
        const OBJECT_NAME = 'balance';
        /**
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Balance
         */
        public static function retrieve($opts = null)
        {
        }
    }
    /**
     * A Promotion Code represents a customer-redeemable code for a coupon. It can be
     * used to create multiple codes for a single coupon.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property bool $active Whether the promotion code is currently active. A promotion code is only active if the coupon is also valid.
     * @property string $code The customer-facing code. Regardless of case, this code must be unique across all active promotion codes for each customer.
     * @property \Stripe\Coupon $coupon A coupon contains information about a percent-off or amount-off discount you might want to apply to a customer. Coupons may be applied to <a href="https://stripe.com/docs/api#invoices">invoices</a> or <a href="https://stripe.com/docs/api#create_order-coupon">orders</a>. Coupons do not work with conventional one-off <a href="https://stripe.com/docs/api#create_charge">charges</a>.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string|\Stripe\Customer $customer The customer that this promotion code can be used by.
     * @property null|int $expires_at Date at which the promotion code can no longer be redeemed.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|int $max_redemptions Maximum number of times this promotion code can be redeemed.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property \Stripe\StripeObject $restrictions
     * @property int $times_redeemed Number of times this promotion code has been used.
     */
    class PromotionCode extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'promotion_code';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
    /**
     * Usage records allow you to report customer usage and metrics to Stripe for
     * metered billing of subscription prices.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/billing/subscriptions/metered-billing">Metered
     * Billing</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property int $quantity The usage quantity for the specified date.
     * @property string $subscription_item The ID of the subscription item this usage record contains data for.
     * @property int $timestamp The timestamp when this usage occurred.
     */
    class UsageRecord extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'usage_record';
    }
    /**
     * A line item.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount_subtotal Total before any discounts or taxes are applied.
     * @property int $amount_total Total after discounts and taxes.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property string $description An arbitrary string attached to the object. Often useful for displaying to users. Defaults to product name.
     * @property \Stripe\StripeObject[] $discounts The discounts applied to the line item.
     * @property null|\Stripe\Price $price The price used to generate the line item.
     * @property null|int $quantity The quantity of products being purchased.
     * @property \Stripe\StripeObject[] $taxes The taxes applied to the line item.
     */
    class LineItem extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'item';
        use \Stripe\ApiOperations\All;
    }
    /**
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount The integer amount in %s representing the gross amount being credited for this line item, excluding (exclusive) tax and discounts.
     * @property null|string $description Description of the item being credited.
     * @property int $discount_amount The integer amount in %s representing the discount being credited for this line item.
     * @property \Stripe\StripeObject[] $discount_amounts The amount of discount calculated per discount for this line item
     * @property string $invoice_line_item ID of the invoice line item being credited
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|int $quantity The number of units of product being credited.
     * @property \Stripe\StripeObject[] $tax_amounts The amount of tax calculated per tax rate for this line item
     * @property \Stripe\TaxRate[] $tax_rates The tax rates which apply to the line item.
     * @property string $type The type of the credit note line item, one of <code>invoice_line_item</code> or <code>custom_line_item</code>. When the type is <code>invoice_line_item</code> there is an additional <code>invoice_line_item</code> property on the resource the value of which is the id of the credited line item on the invoice.
     * @property null|int $unit_amount The cost of each unit of product being credited.
     * @property null|string $unit_amount_decimal Same as <code>unit_amount</code>, but contains a decimal value with at most 12 decimal places.
     */
    class CreditNoteLineItem extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'credit_note_line_item';
    }
    /**
     * Class Collection.
     *
     * @property string $object
     * @property string $url
     * @property bool $has_more
     * @property \Stripe\StripeObject[] $data
     */
    class Collection extends \Stripe\StripeObject implements \Countable, \IteratorAggregate
    {
        const OBJECT_NAME = 'list';
        use \Stripe\ApiOperations\Request;
        /** @var array */
        protected $filters = [];
        /**
         * @return string the base URL for the given class
         */
        public static function baseUrl()
        {
        }
        /**
         * Returns the filters.
         *
         * @return array the filters
         */
        public function getFilters()
        {
        }
        /**
         * Sets the filters, removing paging options.
         *
         * @param array $filters the filters
         */
        public function setFilters($filters)
        {
        }
        public function offsetGet($k)
        {
        }
        public function all($params = null, $opts = null)
        {
        }
        public function create($params = null, $opts = null)
        {
        }
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * @return int the number of objects in the current page
         */
        public function count()
        {
        }
        /**
         * @return \ArrayIterator an iterator that can be used to iterate
         *    across objects in the current page
         */
        public function getIterator()
        {
        }
        /**
         * @return \ArrayIterator an iterator that can be used to iterate
         *    backwards across objects in the current page
         */
        public function getReverseIterator()
        {
        }
        /**
         * @return \Generator|StripeObject[] A generator that can be used to
         *    iterate across all objects across all pages. As page boundaries are
         *    encountered, the next page will be fetched automatically for
         *    continued iteration.
         */
        public function autoPagingIterator()
        {
        }
        /**
         * Returns an empty collection. This is returned from {@see nextPage()}
         * when we know that there isn't a next page in order to replicate the
         * behavior of the API when it attempts to return a page beyond the last.
         *
         * @param null|array|string $opts
         *
         * @return Collection
         */
        public static function emptyCollection($opts = null)
        {
        }
        /**
         * Returns true if the page object contains no element.
         *
         * @return bool
         */
        public function isEmpty()
        {
        }
        /**
         * Fetches the next page in the resource list (if there is one).
         *
         * This method will try to respect the limit of the current page. If none
         * was given, the default limit will be fetched again.
         *
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @return Collection
         */
        public function nextPage($params = null, $opts = null)
        {
        }
        /**
         * Fetches the previous page in the resource list (if there is one).
         *
         * This method will try to respect the limit of the current page. If none
         * was given, the default limit will be fetched again.
         *
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @return Collection
         */
        public function previousPage($params = null, $opts = null)
        {
        }
        /**
         * Gets the first item from the current page. Returns `null` if the current page is empty.
         *
         * @return null|\Stripe\StripeObject
         */
        public function first()
        {
        }
        /**
         * Gets the last item from the current page. Returns `null` if the current page is empty.
         *
         * @return null|\Stripe\StripeObject
         */
        public function last()
        {
        }
    }
    /**
     * Each customer has a <a
     * href="https://stripe.com/docs/api/customers/object#customer_object-balance"><code>balance</code></a>
     * value, which denotes a debit or credit that's automatically applied to their
     * next invoice upon finalization. You may modify the value directly by using the
     * <a href="https://stripe.com/docs/api/customers/update">update customer API</a>,
     * or by creating a Customer Balance Transaction, which increments or decrements
     * the customer's <code>balance</code> by the specified <code>amount</code>.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/billing/customer/balance">Customer Balance</a> to
     * learn more.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount The amount of the transaction. A negative value is a credit for the customer's balance, and a positive value is a debit to the customer's <code>balance</code>.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string|\Stripe\CreditNote $credit_note The ID of the credit note (if any) related to the transaction.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property string|\Stripe\Customer $customer The ID of the customer the transaction belongs to.
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property int $ending_balance The customer's <code>balance</code> after the transaction was applied. A negative value decreases the amount due on the customer's next invoice. A positive value increases the amount due on the customer's next invoice.
     * @property null|string|\Stripe\Invoice $invoice The ID of the invoice (if any) related to the transaction.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property string $type Transaction type: <code>adjustment</code>, <code>applied_to_invoice</code>, <code>credit_note</code>, <code>initial</code>, <code>invoice_too_large</code>, <code>invoice_too_small</code>, <code>unspent_receiver_credit</code>, or <code>unapplied_from_invoice</code>. See the <a href="https://stripe.com/docs/billing/customer/balance#types">Customer Balance page</a> to learn more about transaction types.
     */
    class CustomerBalanceTransaction extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'customer_balance_transaction';
        const TYPE_ADJUSTMENT = 'adjustment';
        const TYPE_APPLIED_TO_INVOICE = 'applied_to_invoice';
        const TYPE_CREDIT_NOTE = 'credit_note';
        const TYPE_INITIAL = 'initial';
        const TYPE_INVOICE_TOO_LARGE = 'invoice_too_large';
        const TYPE_INVOICE_TOO_SMALL = 'invoice_too_small';
        const TYPE_UNSPENT_RECEIVER_CREDIT = 'unspent_receiver_credit';
        const TYPE_ADJUSTEMENT = 'adjustment';
        /**
         * @return string the API URL for this balance transaction
         */
        public function instanceUrl()
        {
        }
        /**
         * @param array|string $_id
         * @param null|array|string $_opts
         *
         * @throws \Stripe\Exception\BadMethodCallException
         */
        public static function retrieve($_id, $_opts = null)
        {
        }
        /**
         * @param string $_id
         * @param null|array $_params
         * @param null|array|string $_options
         *
         * @throws \Stripe\Exception\BadMethodCallException
         */
        public static function update($_id, $_params = null, $_options = null)
        {
        }
    }
    /**
     * @deprecated Bitcoin receivers are deprecated. Please use the sources API instead.
     * @see https://stripe.com/docs/sources/bitcoin
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property bool $active True when this bitcoin receiver has received a non-zero amount of bitcoin.
     * @property int $amount The amount of <code>currency</code> that you are collecting as payment.
     * @property int $amount_received The amount of <code>currency</code> to which <code>bitcoin_amount_received</code> has been converted.
     * @property int $bitcoin_amount The amount of bitcoin that the customer should send to fill the receiver. The <code>bitcoin_amount</code> is denominated in Satoshi: there are 10^8 Satoshi in one bitcoin.
     * @property int $bitcoin_amount_received The amount of bitcoin that has been sent by the customer to this receiver.
     * @property string $bitcoin_uri This URI can be displayed to the customer as a clickable link (to activate their bitcoin client) or as a QR code (for mobile wallets).
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://stripe.com/docs/currencies">ISO code for the currency</a> to which the bitcoin will be converted.
     * @property null|string $customer The customer ID of the bitcoin receiver.
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property null|string $email The customer's email address, set by the API call that creates the receiver.
     * @property bool $filled This flag is initially false and updates to true when the customer sends the <code>bitcoin_amount</code> to this receiver.
     * @property string $inbound_address A bitcoin address that is specific to this receiver. The customer can send bitcoin to this address to fill the receiver.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string $payment The ID of the payment created from the receiver, if any. Hidden when viewing the receiver with a publishable key.
     * @property null|string $refund_address The refund address of this bitcoin receiver.
     * @property \Stripe\Collection $transactions A list with one entry for each time that the customer sent bitcoin to the receiver. Hidden when viewing the receiver with a publishable key.
     * @property bool $uncaptured_funds This receiver contains uncaptured funds that can be used for a payment or refunded.
     * @property null|bool $used_for_payment Indicate if this source is used for payment.
     */
    class BitcoinReceiver extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'bitcoin_receiver';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
        /**
         * @return string The class URL for this resource. It needs to be special
         *    cased because it doesn't fit into the standard resource pattern.
         */
        public static function classUrl()
        {
        }
        /**
         * @return string The instance URL for this resource. It needs to be special
         *    cased because it doesn't fit into the standard resource pattern.
         */
        public function instanceUrl()
        {
        }
    }
    /**
     * <code>Exchange Rate</code> objects allow you to determine the rates that Stripe
     * is currently using to convert from one currency to another. Since this number is
     * variable throughout the day, there are various reasons why you might want to
     * know the current rate (for example, to dynamically price an item for a user with
     * a default payment in a foreign currency).
     *
     * If you want a guarantee that the charge is made with a certain exchange rate you
     * expect is current, you can pass in <code>exchange_rate</code> to charges
     * endpoints. If the value is no longer up to date, the charge won't go through.
     * Please refer to our <a href="https://stripe.com/docs/exchange-rates">Exchange
     * Rates API</a> guide for more details.
     *
     * @property string $id Unique identifier for the object. Represented as the three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a> in lowercase.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property \Stripe\StripeObject $rates Hash where the keys are supported currencies and the values are the exchange rate at which the base id currency converts to the key currency.
     */
    class ExchangeRate extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'exchange_rate';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
    }
    /**
     * <code>Source</code> objects allow you to accept a variety of payment methods.
     * They represent a customer's payment instrument, and can be used with the Stripe
     * API just like a <code>Card</code> object: once chargeable, they can be charged,
     * or can be attached to customers.
     *
     * Related guides: <a href="https://stripe.com/docs/sources">Sources API</a> and <a
     * href="https://stripe.com/docs/sources/customers">Sources &amp; Customers</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property \Stripe\StripeObject $ach_credit_transfer
     * @property \Stripe\StripeObject $ach_debit
     * @property \Stripe\StripeObject $acss_debit
     * @property \Stripe\StripeObject $alipay
     * @property null|int $amount A positive integer in the smallest currency unit (that is, 100 cents for $1.00, or 1 for ¥1, Japanese Yen being a zero-decimal currency) representing the total amount associated with the source. This is the amount for which the source will be chargeable once ready. Required for <code>single_use</code> sources.
     * @property \Stripe\StripeObject $au_becs_debit
     * @property \Stripe\StripeObject $bancontact
     * @property \Stripe\StripeObject $card
     * @property \Stripe\StripeObject $card_present
     * @property string $client_secret The client secret of the source. Used for client-side retrieval using a publishable key.
     * @property \Stripe\StripeObject $code_verification
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string $currency Three-letter <a href="https://stripe.com/docs/currencies">ISO code for the currency</a> associated with the source. This is the currency for which the source will be chargeable once ready. Required for <code>single_use</code> sources.
     * @property string $customer The ID of the customer to which this source is attached. This will not be present when the source has not been attached to a customer.
     * @property \Stripe\StripeObject $eps
     * @property string $flow The authentication <code>flow</code> of the source. <code>flow</code> is one of <code>redirect</code>, <code>receiver</code>, <code>code_verification</code>, <code>none</code>.
     * @property \Stripe\StripeObject $giropay
     * @property \Stripe\StripeObject $ideal
     * @property \Stripe\StripeObject $klarna
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property \Stripe\StripeObject $multibanco
     * @property null|\Stripe\StripeObject $owner Information about the owner of the payment instrument that may be used or required by particular source types.
     * @property \Stripe\StripeObject $p24
     * @property \Stripe\StripeObject $receiver
     * @property \Stripe\StripeObject $redirect
     * @property \Stripe\StripeObject $sepa_credit_transfer
     * @property \Stripe\StripeObject $sepa_debit
     * @property \Stripe\StripeObject $sofort
     * @property \Stripe\StripeObject $source_order
     * @property null|string $statement_descriptor Extra information about a source. This will appear on your customer's statement every time you charge the source.
     * @property string $status The status of the source, one of <code>canceled</code>, <code>chargeable</code>, <code>consumed</code>, <code>failed</code>, or <code>pending</code>. Only <code>chargeable</code> sources can be used to create a charge.
     * @property \Stripe\StripeObject $three_d_secure
     * @property string $type The <code>type</code> of the source. The <code>type</code> is a payment method, one of <code>ach_credit_transfer</code>, <code>ach_debit</code>, <code>alipay</code>, <code>bancontact</code>, <code>card</code>, <code>card_present</code>, <code>eps</code>, <code>giropay</code>, <code>ideal</code>, <code>multibanco</code>, <code>klarna</code>, <code>p24</code>, <code>sepa_debit</code>, <code>sofort</code>, <code>three_d_secure</code>, or <code>wechat</code>. An additional hash is included on the source with a name matching this value. It contains additional information specific to the <a href="https://stripe.com/docs/sources">payment method</a> used.
     * @property null|string $usage Either <code>reusable</code> or <code>single_use</code>. Whether this source should be reusable or not. Some source types may or may not be reusable by construction, while others may leave the option at creation. If an incompatible value is passed, an error will be returned.
     * @property \Stripe\StripeObject $wechat
     */
    class Source extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'source';
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const FLOW_CODE_VERIFICATION = 'code_verification';
        const FLOW_NONE = 'none';
        const FLOW_RECEIVER = 'receiver';
        const FLOW_REDIRECT = 'redirect';
        const STATUS_CANCELED = 'canceled';
        const STATUS_CHARGEABLE = 'chargeable';
        const STATUS_CONSUMED = 'consumed';
        const STATUS_FAILED = 'failed';
        const STATUS_PENDING = 'pending';
        const USAGE_REUSABLE = 'reusable';
        const USAGE_SINGLE_USE = 'single_use';
        use \Stripe\ApiOperations\NestedResource;
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\UnexpectedValueException if the source is not attached to a customer
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Source the detached source
         */
        public function detach($params = null, $opts = null)
        {
        }
        /**
         * @deprecated sourceTransactions is deprecated. Please use Source::allSourceTransactions instead.
         *
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of source transactions
         */
        public function sourceTransactions($params = null, $opts = null)
        {
        }
        /**
         * @param string $id
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of source transactions
         */
        public static function allSourceTransactions($id, $params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Source the verified source
         */
        public function verify($params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service {
    /**
     * Abstract base class for all services.
     */
    abstract class AbstractService
    {
        /**
         * @var \Stripe\StripeClientInterface
         */
        protected $client;
        /**
         * @var \Stripe\StripeStreamingClientInterface
         */
        protected $streamingClient;
        /**
         * Initializes a new instance of the {@link AbstractService} class.
         *
         * @param \Stripe\StripeClientInterface $client
         */
        public function __construct($client)
        {
        }
        /**
         * Gets the client used by this service to send requests.
         *
         * @return \Stripe\StripeClientInterface
         */
        public function getClient()
        {
        }
        /**
         * Gets the client used by this service to send requests.
         *
         * @return \Stripe\StripeStreamingClientInterface
         */
        public function getStreamingClient()
        {
        }
        protected function request($method, $path, $params, $opts)
        {
        }
        protected function requestStream($method, $path, $readBodyChunkCallable, $params, $opts)
        {
        }
        protected function requestCollection($method, $path, $params, $opts)
        {
        }
        protected function buildPath($basePath, ...$ids)
        {
        }
    }
    class TopupService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of top-ups.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Cancels a top-up. Only pending top-ups can be canceled.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Topup
         */
        public function cancel($id, $params = null, $opts = null)
        {
        }
        /**
         * Top up the balance of an account.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Topup
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of a top-up that has previously been created. Supply the
         * unique top-up ID that was returned from your previous request, and Stripe will
         * return the corresponding top-up information.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Topup
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the metadata of a top-up. Other top-up details are not editable by
         * design.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Topup
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class PriceService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your prices.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a new price for an existing product. The price can be recurring or
         * one-time.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Price
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the price with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Price
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified price by setting the values of the parameters passed. Any
         * parameters not provided are left unchanged.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Price
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class OrderService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your orders. The orders are returned sorted by creation date,
         * with the most recently created orders appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a new order object.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Order
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Pay an order by providing a <code>source</code> to create a payment.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Order
         */
        public function pay($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an existing order. Supply the unique order ID from
         * either an order creation request or the order list, and Stripe will return the
         * corresponding order information.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Order
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Return all or part of an order. The order must have a status of
         * <code>paid</code> or <code>fulfilled</code> before it can be returned. Once all
         * items have been returned, the order will become <code>canceled</code> or
         * <code>returned</code> depending on which status the order started in.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Order
         */
        public function returnOrder($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specific order by setting the values of the parameters passed. Any
         * parameters not provided will be left unchanged.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Order
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service\Reporting {
    class ReportRunService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of Report Runs, with the most recent appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a new object and begin running the report. (Certain report types require
         * a <a href="https://stripe.com/docs/keys#test-live-modes">live-mode API key</a>.).
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Reporting\ReportRun
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an existing Report Run.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Reporting\ReportRun
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service {
    /**
     * Abstract base class for all service factories used to expose service
     * instances through {@link \Stripe\StripeClient}.
     *
     * Service factories serve two purposes:
     *
     * 1. Expose properties for all services through the `__get()` magic method.
     * 2. Lazily initialize each service instance the first time the property for
     *    a given service is used.
     */
    abstract class AbstractServiceFactory
    {
        /**
         * @param \Stripe\StripeClientInterface $client
         */
        public function __construct($client)
        {
        }
        /**
         * @param string $name
         *
         * @return null|string
         */
        protected abstract function getServiceClass($name);
        /**
         * @param string $name
         *
         * @return null|AbstractService|AbstractServiceFactory
         */
        public function __get($name)
        {
        }
    }
}
namespace Stripe\Service\Reporting {
    /**
     * Service factory class for API resources in the Reporting namespace.
     *
     * @property ReportRunService $reportRuns
     * @property ReportTypeService $reportTypes
     */
    class ReportingServiceFactory extends \Stripe\Service\AbstractServiceFactory
    {
        protected function getServiceClass($name)
        {
        }
    }
    class ReportTypeService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a full list of Report Types.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of a Report Type. (Certain report types require a <a
         * href="https://stripe.com/docs/keys#test-live-modes">live-mode API key</a>.).
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Reporting\ReportType
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service {
    class OAuthService extends \Stripe\Service\AbstractService
    {
        /**
         * Sends a request to Stripe's Connect API.
         *
         * @param string $method the HTTP method
         * @param string $path the path of the request
         * @param array $params the parameters of the request
         * @param array|\Stripe\Util\RequestOptions $opts the special modifiers of the request
         *
         * @return \Stripe\StripeObject the object returned by Stripe's Connect API
         */
        protected function requestConnect($method, $path, $params, $opts)
        {
        }
        /**
         * Generates a URL to Stripe's OAuth form.
         *
         * @param null|array $params
         * @param null|array $opts
         *
         * @return string the URL to Stripe's OAuth form
         */
        public function authorizeUrl($params = null, $opts = null)
        {
        }
        /**
         * Use an authoriztion code to connect an account to your platform and
         * fetch the user's credentials.
         *
         * @param null|array $params
         * @param null|array $opts
         *
         * @throws \Stripe\Exception\OAuth\OAuthErrorException if the request fails
         *
         * @return \Stripe\StripeObject object containing the response from the API
         */
        public function token($params = null, $opts = null)
        {
        }
        /**
         * Disconnects an account from your platform.
         *
         * @param null|array $params
         * @param null|array $opts
         *
         * @throws \Stripe\Exception\OAuth\OAuthErrorException if the request fails
         *
         * @return \Stripe\StripeObject object containing the response from the API
         */
        public function deauthorize($params = null, $opts = null)
        {
        }
    }
    class DisputeService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your disputes.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Closing the dispute for a charge indicates that you do not have any evidence to
         * submit and are essentially dismissing the dispute, acknowledging it as lost.
         *
         * The status of the dispute will change from <code>needs_response</code> to
         * <code>lost</code>. <em>Closing a dispute is irreversible</em>.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Dispute
         */
        public function close($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the dispute with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Dispute
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * When you get a dispute, contacting your customer is always the best first step.
         * If that doesn’t work, you can submit evidence to help us resolve the dispute in
         * your favor. You can do this in your <a
         * href="https://dashboard.stripe.com/disputes">dashboard</a>, but if you prefer,
         * you can use the API to submit evidence programmatically.
         *
         * Depending on your dispute type, different evidence fields will give you a better
         * chance of winning your dispute. To figure out which evidence fields to provide,
         * see our <a href="/docs/disputes/categories">guide to dispute types</a>.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Dispute
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class PaymentIntentService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of PaymentIntents.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * A PaymentIntent object can be canceled when it is in one of these statuses:
         * <code>requires_payment_method</code>, <code>requires_capture</code>,
         * <code>requires_confirmation</code>, or <code>requires_action</code>.
         *
         * Once canceled, no additional charges will be made by the PaymentIntent and any
         * operations on the PaymentIntent will fail with an error. For PaymentIntents with
         * <code>status=’requires_capture’</code>, the remaining
         * <code>amount_capturable</code> will automatically be refunded.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentIntent
         */
        public function cancel($id, $params = null, $opts = null)
        {
        }
        /**
         * Capture the funds of an existing uncaptured PaymentIntent when its status is
         * <code>requires_capture</code>.
         *
         * Uncaptured PaymentIntents will be canceled exactly seven days after they are
         * created.
         *
         * Learn more about <a href="/docs/payments/capture-later">separate authorization
         * and capture</a>.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentIntent
         */
        public function capture($id, $params = null, $opts = null)
        {
        }
        /**
         * Confirm that your customer intends to pay with current or provided payment
         * method. Upon confirmation, the PaymentIntent will attempt to initiate a payment.
         *
         * If the selected payment method requires additional authentication steps, the
         * PaymentIntent will transition to the <code>requires_action</code> status and
         * suggest additional actions via <code>next_action</code>. If payment fails, the
         * PaymentIntent will transition to the <code>requires_payment_method</code>
         * status. If payment succeeds, the PaymentIntent will transition to the
         * <code>succeeded</code> status (or <code>requires_capture</code>, if
         * <code>capture_method</code> is set to <code>manual</code>).
         *
         * If the <code>confirmation_method</code> is <code>automatic</code>, payment may
         * be attempted using our <a
         * href="/docs/stripe-js/reference#stripe-handle-card-payment">client SDKs</a> and
         * the PaymentIntent’s <a
         * href="#payment_intent_object-client_secret">client_secret</a>. After
         * <code>next_action</code>s are handled by the client, no additional confirmation
         * is required to complete the payment.
         *
         * If the <code>confirmation_method</code> is <code>manual</code>, all payment
         * attempts must be initiated using a secret key. If any actions are required for
         * the payment, the PaymentIntent will return to the
         * <code>requires_confirmation</code> state after those actions are completed. Your
         * server needs to then explicitly re-confirm the PaymentIntent to initiate the
         * next payment attempt. Read the <a
         * href="/docs/payments/payment-intents/web-manual">expanded documentation</a> to
         * learn more about manual confirmation.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentIntent
         */
        public function confirm($id, $params = null, $opts = null)
        {
        }
        /**
         * Creates a PaymentIntent object.
         *
         * After the PaymentIntent is created, attach a payment method and <a
         * href="/docs/api/payment_intents/confirm">confirm</a> to continue the payment.
         * You can read more about the different payment flows available via the Payment
         * Intents API <a href="/docs/payments/payment-intents">here</a>.
         *
         * When <code>confirm=true</code> is used during creation, it is equivalent to
         * creating and confirming the PaymentIntent in the same call. You may use any
         * parameters available in the <a href="/docs/api/payment_intents/confirm">confirm
         * API</a> when <code>confirm=true</code> is supplied.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentIntent
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of a PaymentIntent that has previously been created.
         *
         * Client-side retrieval using a publishable key is allowed when the
         * <code>client_secret</code> is provided in the query string.
         *
         * When retrieved with a publishable key, only a subset of properties will be
         * returned. Please refer to the <a href="#payment_intent_object">payment
         * intent</a> object reference for more details.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentIntent
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates properties on a PaymentIntent object without confirming.
         *
         * Depending on which properties you update, you may need to confirm the
         * PaymentIntent again. For example, updating the <code>payment_method</code> will
         * always require you to confirm the PaymentIntent again. If you prefer to update
         * and confirm at the same time, we recommend updating properties via the <a
         * href="/docs/api/payment_intents/confirm">confirm API</a> instead.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentIntent
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class AccountService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of accounts connected to your platform via <a
         * href="/docs/connect">Connect</a>. If you’re not a platform, the list is empty.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Returns a list of capabilities associated with the account. The capabilities are
         * returned sorted by creation date, with the most recent capability appearing
         * first.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allCapabilities($parentId, $params = null, $opts = null)
        {
        }
        /**
         * List external accounts for an account.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allExternalAccounts($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Returns a list of people associated with the account’s legal entity. The people
         * are returned sorted by creation date, with the most recent people appearing
         * first.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allPersons($parentId, $params = null, $opts = null)
        {
        }
        /**
         * With <a href="/docs/connect">Connect</a>, you can create Stripe accounts for
         * your users. To do this, you’ll first need to <a
         * href="https://dashboard.stripe.com/account/applications/settings">register your
         * platform</a>.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Account
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Create an external account for a given account.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BankAccount|\Stripe\Card
         */
        public function createExternalAccount($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Creates a single-use login link for an Express account to access their Stripe
         * dashboard.
         *
         * <strong>You may only create login links for <a
         * href="/docs/connect/express-accounts">Express accounts</a> connected to your
         * platform</strong>.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\LoginLink
         */
        public function createLoginLink($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Creates a new person.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Person
         */
        public function createPerson($parentId, $params = null, $opts = null)
        {
        }
        /**
         * With <a href="/docs/connect">Connect</a>, you can delete accounts you manage.
         *
         * Accounts created using test-mode keys can be deleted at any time. Custom or
         * Express accounts created using live-mode keys can only be deleted once all
         * balances are zero.
         *
         * If you want to delete your own account, use the <a
         * href="https://dashboard.stripe.com/account">account information tab in your
         * account settings</a> instead.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Account
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Delete a specified external account for a given account.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BankAccount|\Stripe\Card
         */
        public function deleteExternalAccount($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Deletes an existing person’s relationship to the account’s legal entity. Any
         * person with a relationship for an account can be deleted through the API, except
         * if the person is the <code>account_opener</code>. If your integration is using
         * the <code>executive</code> parameter, you cannot delete the only verified
         * <code>executive</code> on file.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Person
         */
        public function deletePerson($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * With <a href="/docs/connect">Connect</a>, you may flag accounts as suspicious.
         *
         * Test-mode Custom and Express accounts can be rejected at any time. Accounts
         * created using live-mode keys may only be rejected once all balances are zero.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Account
         */
        public function reject($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves information about the specified Account Capability.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Capability
         */
        public function retrieveCapability($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieve a specified external account for a given account.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BankAccount|\Stripe\Card
         */
        public function retrieveExternalAccount($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves an existing person.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Person
         */
        public function retrievePerson($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Updates a <a href="/docs/connect/accounts">connected account</a> by setting the
         * values of the parameters passed. Any parameters not provided are left unchanged.
         * Most parameters can be changed only for Custom accounts. (These are marked
         * <strong>Custom Only</strong> below.) Parameters marked <strong>Custom and
         * Express</strong> are not supported for Standard accounts.
         *
         * To update your own account, use the <a
         * href="https://dashboard.stripe.com/account">Dashboard</a>. Refer to our <a
         * href="/docs/connect/updating-accounts">Connect</a> documentation to learn more
         * about updating accounts.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Account
         */
        public function update($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates an existing Account Capability.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Capability
         */
        public function updateCapability($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the metadata, account holder name, account holder type of a bank account
         * belonging to a <a href="/docs/connect/custom-accounts">Custom account</a>, and
         * optionally sets it as the default for its currency. Other bank account details
         * are not editable by design.
         *
         * You can re-enable a disabled bank account by performing an update call without
         * providing any arguments or changes.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BankAccount|\Stripe\Card
         */
        public function updateExternalAccount($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Updates an existing person.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Person
         */
        public function updatePerson($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an account.
         *
         * @param null|string $id
         * @param null|array $params
         * @param null|array|StripeUtilRequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Account
         */
        public function retrieve($id = null, $params = null, $opts = null)
        {
        }
    }
    class TransferService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of existing transfers sent to connected accounts. The transfers
         * are returned in sorted order, with the most recently created transfers appearing
         * first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * You can see a list of the reversals belonging to a specific transfer. Note that
         * the 10 most recent reversals are always available by default on the transfer
         * object. If you need more than those 10, you can use this API method and the
         * <code>limit</code> and <code>starting_after</code> parameters to page through
         * additional reversals.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allReversals($parentId, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Transfer
         */
        public function cancel($id, $params = null, $opts = null)
        {
        }
        /**
         * To send funds from your Stripe account to a connected account, you create a new
         * transfer object. Your <a href="#balance">Stripe balance</a> must be able to
         * cover the transfer amount, or you’ll receive an “Insufficient Funds” error.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Transfer
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * When you create a new reversal, you must specify a transfer to create it on.
         *
         * When reversing transfers, you can optionally reverse part of the transfer. You
         * can do so as many times as you wish until the entire transfer has been reversed.
         *
         * Once entirely reversed, a transfer can’t be reversed again. This method will
         * return an error when called on an already-reversed transfer, or when trying to
         * reverse more money than is left on a transfer.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TransferReversal
         */
        public function createReversal($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an existing transfer. Supply the unique transfer ID
         * from either a transfer creation request or the transfer list, and Stripe will
         * return the corresponding transfer information.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Transfer
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * By default, you can see the 10 most recent reversals stored directly on the
         * transfer object, but you can also retrieve details about a specific reversal
         * stored on the transfer.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TransferReversal
         */
        public function retrieveReversal($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified transfer by setting the values of the parameters passed.
         * Any parameters not provided will be left unchanged.
         *
         * This request accepts only metadata as an argument.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Transfer
         */
        public function update($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified reversal by setting the values of the parameters passed.
         * Any parameters not provided will be left unchanged.
         *
         * This request only accepts metadata and description as arguments.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TransferReversal
         */
        public function updateReversal($parentId, $id, $params = null, $opts = null)
        {
        }
    }
    class AccountLinkService extends \Stripe\Service\AbstractService
    {
        /**
         * Creates an AccountLink object that includes a single-use Stripe URL that the
         * platform can redirect their user to in order to take them through the Connect
         * Onboarding flow.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\AccountLink
         */
        public function create($params = null, $opts = null)
        {
        }
    }
    class FileLinkService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of file links.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a new file link object.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\FileLink
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the file link with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\FileLink
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates an existing file link object. Expired links can no longer be updated.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\FileLink
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class TaxCodeService extends \Stripe\Service\AbstractService
    {
        /**
         * A list of <a href="https://stripe.com/docs/tax/tax-codes">all tax codes
         * available</a> to add to Products in order to allow specific tax calculations.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an existing tax code. Supply the unique tax code ID and
         * Stripe will return the corresponding tax code information.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TaxCode
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
    class ApplicationFeeService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of application fees you’ve previously collected. The application
         * fees are returned in sorted order, with the most recent fees appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * You can see a list of the refunds belonging to a specific application fee. Note
         * that the 10 most recent refunds are always available by default on the
         * application fee object. If you need more than those 10, you can use this API
         * method and the <code>limit</code> and <code>starting_after</code> parameters to
         * page through additional refunds.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allRefunds($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Refunds an application fee that has previously been collected but not yet
         * refunded. Funds will be refunded to the Stripe account from which the fee was
         * originally collected.
         *
         * You can optionally refund only part of an application fee. You can do so
         * multiple times, until the entire fee has been refunded.
         *
         * Once entirely refunded, an application fee can’t be refunded again. This method
         * will raise an error when called on an already-refunded application fee, or when
         * trying to refund more money than is left on an application fee.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\ApplicationFeeRefund
         */
        public function createRefund($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an application fee that your account has collected. The
         * same information is returned when refunding the application fee.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\ApplicationFee
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * By default, you can see the 10 most recent refunds stored directly on the
         * application fee object, but you can also retrieve details about a specific
         * refund stored on the application fee.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\ApplicationFeeRefund
         */
        public function retrieveRefund($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified application fee refund by setting the values of the
         * parameters passed. Any parameters not provided will be left unchanged.
         *
         * This request only accepts metadata as an argument.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\ApplicationFeeRefund
         */
        public function updateRefund($parentId, $id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service\Identity {
    class VerificationSessionService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of VerificationSessions.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * A VerificationSession object can be canceled when it is in
         * <code>requires_input</code> <a
         * href="/docs/identity/how-sessions-work">status</a>.
         *
         * Once canceled, future submission attempts are disabled. This cannot be undone.
         * <a href="/docs/identity/verification-sessions#cancel">Learn more</a>.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Identity\VerificationSession
         */
        public function cancel($id, $params = null, $opts = null)
        {
        }
        /**
         * Creates a VerificationSession object.
         *
         * After the VerificationSession is created, display a verification modal using the
         * session <code>client_secret</code> or send your users to the session’s
         * <code>url</code>.
         *
         * If your API key is in test mode, verification checks won’t actually process,
         * though everything else will occur as if in live mode.
         *
         * Related guide: <a href="/docs/identity/verify-identity-documents">Verify your
         * users’ identity documents</a>.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Identity\VerificationSession
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Redact a VerificationSession to remove all collected information from Stripe.
         * This will redact the VerificationSession and all objects related to it,
         * including VerificationReports, Events, request logs, etc.
         *
         * A VerificationSession object can be redacted when it is in
         * <code>requires_input</code> or <code>verified</code> <a
         * href="/docs/identity/how-sessions-work">status</a>. Redacting a
         * VerificationSession in <code>requires_action</code> state will automatically
         * cancel it.
         *
         * The redaction process may take up to four days. When the redaction process is in
         * progress, the VerificationSession’s <code>redaction.status</code> field will be
         * set to <code>processing</code>; when the process is finished, it will change to
         * <code>redacted</code> and an <code>identity.verification_session.redacted</code>
         * event will be emitted.
         *
         * Redaction is irreversible. Redacted objects are still accessible in the Stripe
         * API, but all the fields that contain personal data will be replaced by the
         * string <code>[redacted]</code> or a similar placeholder. The
         * <code>metadata</code> field will also be erased. Redacted objects cannot be
         * updated or used for any purpose.
         *
         * <a href="/docs/identity/verification-sessions#redact">Learn more</a>.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Identity\VerificationSession
         */
        public function redact($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of a VerificationSession that was previously created.
         *
         * When the session status is <code>requires_input</code>, you can use this method
         * to retrieve a valid <code>client_secret</code> or <code>url</code> to allow
         * re-submission.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Identity\VerificationSession
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates a VerificationSession object.
         *
         * When the session status is <code>requires_input</code>, you can use this method
         * to update the verification check and options.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Identity\VerificationSession
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    /**
     * Service factory class for API resources in the Identity namespace.
     *
     * @property VerificationReportService $verificationReports
     * @property VerificationSessionService $verificationSessions
     */
    class IdentityServiceFactory extends \Stripe\Service\AbstractServiceFactory
    {
        protected function getServiceClass($name)
        {
        }
    }
    class VerificationReportService extends \Stripe\Service\AbstractService
    {
        /**
         * List all verification reports.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Retrieves an existing VerificationReport.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Identity\VerificationReport
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service {
    class SubscriptionScheduleService extends \Stripe\Service\AbstractService
    {
        /**
         * Retrieves the list of your subscription schedules.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Cancels a subscription schedule and its associated subscription immediately (if
         * the subscription schedule has an active subscription). A subscription schedule
         * can only be canceled if its status is <code>not_started</code> or
         * <code>active</code>.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SubscriptionSchedule
         */
        public function cancel($id, $params = null, $opts = null)
        {
        }
        /**
         * Creates a new subscription schedule object. Each customer can have up to 500
         * active or scheduled subscriptions.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SubscriptionSchedule
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Releases the subscription schedule immediately, which will stop scheduling of
         * its phases, but leave any existing subscription in place. A schedule can only be
         * released if its status is <code>not_started</code> or <code>active</code>. If
         * the subscription schedule is currently associated with a subscription, releasing
         * it will remove its <code>subscription</code> property and set the subscription’s
         * ID to the <code>released_subscription</code> property.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SubscriptionSchedule
         */
        public function release($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an existing subscription schedule. You only need to
         * supply the unique subscription schedule identifier that was returned upon
         * subscription schedule creation.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SubscriptionSchedule
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates an existing subscription schedule.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SubscriptionSchedule
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class ApplePayDomainService extends \Stripe\Service\AbstractService
    {
        /**
         * List apple pay domains.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Create an apple pay domain.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\ApplePayDomain
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Delete an apple pay domain.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\ApplePayDomain
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieve an apple pay domain.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\ApplePayDomain
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
    class BalanceService extends \Stripe\Service\AbstractService
    {
        /**
         * Retrieves the current account balance, based on the authentication that was used
         * to make the request.  For a sample request, see <a
         * href="/docs/connect/account-balances#accounting-for-negative-balances">Accounting
         * for negative balances</a>.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Balance
         */
        public function retrieve($params = null, $opts = null)
        {
        }
    }
    class PromotionCodeService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your promotion codes.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * A promotion code points to a coupon. You can optionally restrict the code to a
         * specific customer, redemption limit, and expiration date.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PromotionCode
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the promotion code with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PromotionCode
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified promotion code by setting the values of the parameters
         * passed. Most fields are, by design, not editable.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PromotionCode
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class SubscriptionService extends \Stripe\Service\AbstractService
    {
        /**
         * By default, returns a list of subscriptions that have not been canceled. In
         * order to list canceled subscriptions, specify <code>status=canceled</code>.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Cancels a customer’s subscription immediately. The customer will not be charged
         * again for the subscription.
         *
         * Note, however, that any pending invoice items that you’ve created will still be
         * charged for at the end of the period, unless manually <a
         * href="#delete_invoiceitem">deleted</a>. If you’ve set the subscription to cancel
         * at the end of the period, any pending prorations will also be left in place and
         * collected at the end of the period. But if the subscription is set to cancel
         * immediately, pending prorations will be removed.
         *
         * By default, upon subscription cancellation, Stripe will stop automatic
         * collection of all finalized invoices for the customer. This is intended to
         * prevent unexpected payment attempts after the customer has canceled a
         * subscription. However, you can resume automatic collection of the invoices
         * manually after subscription cancellation to have us proceed. Or, you could check
         * for unpaid invoices before allowing the customer to cancel the subscription at
         * all.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Subscription
         */
        public function cancel($id, $params = null, $opts = null)
        {
        }
        /**
         * Creates a new subscription on an existing customer. Each customer can have up to
         * 500 active or scheduled subscriptions.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Subscription
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Removes the currently applied discount on a subscription.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Subscription
         */
        public function deleteDiscount($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the subscription with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Subscription
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates an existing subscription on a customer to match the specified
         * parameters. When changing plans or quantities, we will optionally prorate the
         * price we charge next month to make up for any price changes. To preview how the
         * proration will be calculated, use the <a href="#upcoming_invoice">upcoming
         * invoice</a> endpoint.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Subscription
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class EventService extends \Stripe\Service\AbstractService
    {
        /**
         * List events, going back up to 30 days. Each event data is rendered according to
         * Stripe API version at its creation time, specified in <a
         * href="/docs/api/events/object">event object</a> <code>api_version</code>
         * attribute (not according to your current Stripe API version or
         * <code>Stripe-Version</code> header).
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an event. Supply the unique identifier of the event,
         * which you might have received in a webhook.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Event
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
    class FileService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of the files that your account has access to. The files are
         * returned sorted by creation date, with the most recently created files appearing
         * first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an existing file object. Supply the unique file ID from
         * a file, and Stripe will return the corresponding file object. To access file
         * contents, see the <a href="/docs/file-upload#download-file-contents">File Upload
         * Guide</a>.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\File
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Create a file.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @return \Stripe\File
         */
        public function create($params = null, $opts = null)
        {
        }
    }
    class BalanceTransactionService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of transactions that have contributed to the Stripe account
         * balance (e.g., charges, transfers, and so forth). The transactions are returned
         * in sorted order, with the most recent transactions appearing first.
         *
         * Note that this endpoint was previously called “Balance history” and used the
         * path <code>/v1/balance/history</code>.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the balance transaction with the given ID.
         *
         * Note that this endpoint previously used the path
         * <code>/v1/balance/history/:id</code>.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BalanceTransaction
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service\Issuing {
    class DisputeService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of Issuing <code>Dispute</code> objects. The objects are sorted
         * in descending order by creation date, with the most recently created object
         * appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates an Issuing <code>Dispute</code> object. Individual pieces of evidence
         * within the <code>evidence</code> object are optional at this point. Stripe only
         * validates that required evidence is present during submission. Refer to <a
         * href="/docs/issuing/purchases/disputes#dispute-reasons-and-evidence">Dispute
         * reasons and evidence</a> for more details about evidence requirements.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Dispute
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves an Issuing <code>Dispute</code> object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Dispute
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Submits an Issuing <code>Dispute</code> to the card network. Stripe validates
         * that all evidence fields required for the dispute’s reason are present. For more
         * details, see <a
         * href="/docs/issuing/purchases/disputes#dispute-reasons-and-evidence">Dispute
         * reasons and evidence</a>.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Dispute
         */
        public function submit($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified Issuing <code>Dispute</code> object by setting the values
         * of the parameters passed. Any parameters not provided will be left unchanged.
         * Properties on the <code>evidence</code> object can be unset by passing in an
         * empty string.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Dispute
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class CardService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of Issuing <code>Card</code> objects. The objects are sorted in
         * descending order by creation date, with the most recently created object
         * appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates an Issuing <code>Card</code> object.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Card
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves an Issuing <code>Card</code> object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Card
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified Issuing <code>Card</code> object by setting the values of
         * the parameters passed. Any parameters not provided will be left unchanged.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Card
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    /**
     * Service factory class for API resources in the Issuing namespace.
     *
     * @property AuthorizationService $authorizations
     * @property CardholderService $cardholders
     * @property CardService $cards
     * @property DisputeService $disputes
     * @property TransactionService $transactions
     */
    class IssuingServiceFactory extends \Stripe\Service\AbstractServiceFactory
    {
        protected function getServiceClass($name)
        {
        }
    }
    class TransactionService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of Issuing <code>Transaction</code> objects. The objects are
         * sorted in descending order by creation date, with the most recently created
         * object appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Retrieves an Issuing <code>Transaction</code> object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Transaction
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified Issuing <code>Transaction</code> object by setting the
         * values of the parameters passed. Any parameters not provided will be left
         * unchanged.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Transaction
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class CardholderService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of Issuing <code>Cardholder</code> objects. The objects are
         * sorted in descending order by creation date, with the most recently created
         * object appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a new Issuing <code>Cardholder</code> object that can be issued cards.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Cardholder
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves an Issuing <code>Cardholder</code> object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Cardholder
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified Issuing <code>Cardholder</code> object by setting the
         * values of the parameters passed. Any parameters not provided will be left
         * unchanged.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Cardholder
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class AuthorizationService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of Issuing <code>Authorization</code> objects. The objects are
         * sorted in descending order by creation date, with the most recently created
         * object appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Approves a pending Issuing <code>Authorization</code> object. This request
         * should be made within the timeout window of the <a
         * href="/docs/issuing/controls/real-time-authorizations">real-time
         * authorization</a> flow.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Authorization
         */
        public function approve($id, $params = null, $opts = null)
        {
        }
        /**
         * Declines a pending Issuing <code>Authorization</code> object. This request
         * should be made within the timeout window of the <a
         * href="/docs/issuing/controls/real-time-authorizations">real time
         * authorization</a> flow.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Authorization
         */
        public function decline($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves an Issuing <code>Authorization</code> object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Authorization
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified Issuing <code>Authorization</code> object by setting the
         * values of the parameters passed. Any parameters not provided will be left
         * unchanged.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Issuing\Authorization
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service {
    class ReviewService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of <code>Review</code> objects that have <code>open</code> set to
         * <code>true</code>. The objects are sorted in descending order by creation date,
         * with the most recently created object appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Approves a <code>Review</code> object, closing it and removing it from the list
         * of reviews.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Review
         */
        public function approve($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves a <code>Review</code> object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Review
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
    class SourceService extends \Stripe\Service\AbstractService
    {
        /**
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Source
         */
        public function allTransactions($id, $params = null, $opts = null)
        {
        }
        /**
         * Creates a new source object.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Source
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Delete a specified source for a given customer.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Source
         */
        public function detach($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves an existing source object. Supply the unique source ID from a source
         * creation request and Stripe will return the corresponding up-to-date source
         * object information.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Source
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified source by setting the values of the parameters passed. Any
         * parameters not provided will be left unchanged.
         *
         * This request accepts the <code>metadata</code> and <code>owner</code> as
         * arguments. It is also possible to update type specific information for selected
         * payment methods. Please refer to our <a href="/docs/sources">payment method
         * guides</a> for more detail.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Source
         */
        public function update($id, $params = null, $opts = null)
        {
        }
        /**
         * Verify a given source.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Source
         */
        public function verify($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service\Terminal {
    class ConnectionTokenService extends \Stripe\Service\AbstractService
    {
        /**
         * To connect to a reader the Stripe Terminal SDK needs to retrieve a short-lived
         * connection token from Stripe, proxied through your server. On your backend, add
         * an endpoint that creates and returns a connection token.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Terminal\ConnectionToken
         */
        public function create($params = null, $opts = null)
        {
        }
    }
    class LocationService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of <code>Location</code> objects.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a new <code>Location</code> object.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Terminal\Location
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Deletes a <code>Location</code> object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Terminal\Location
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves a <code>Location</code> object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Terminal\Location
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates a <code>Location</code> object by setting the values of the parameters
         * passed. Any parameters not provided will be left unchanged.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Terminal\Location
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    /**
     * Service factory class for API resources in the Terminal namespace.
     *
     * @property ConnectionTokenService $connectionTokens
     * @property LocationService $locations
     * @property ReaderService $readers
     */
    class TerminalServiceFactory extends \Stripe\Service\AbstractServiceFactory
    {
        protected function getServiceClass($name)
        {
        }
    }
    class ReaderService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of <code>Reader</code> objects.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a new <code>Reader</code> object.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Terminal\Reader
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Deletes a <code>Reader</code> object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Terminal\Reader
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves a <code>Reader</code> object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Terminal\Reader
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates a <code>Reader</code> object by setting the values of the parameters
         * passed. Any parameters not provided will be left unchanged.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Terminal\Reader
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service {
    class WebhookEndpointService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your webhook endpoints.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * A webhook endpoint must have a <code>url</code> and a list of
         * <code>enabled_events</code>. You may optionally specify the Boolean
         * <code>connect</code> parameter. If set to true, then a Connect webhook endpoint
         * that notifies the specified <code>url</code> about events from all connected
         * accounts is created; otherwise an account webhook endpoint that notifies the
         * specified <code>url</code> only about events from your account is created. You
         * can also create webhook endpoints in the <a
         * href="https://dashboard.stripe.com/account/webhooks">webhooks settings</a>
         * section of the Dashboard.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\WebhookEndpoint
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * You can also delete webhook endpoints via the <a
         * href="https://dashboard.stripe.com/account/webhooks">webhook endpoint
         * management</a> page of the Stripe dashboard.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\WebhookEndpoint
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the webhook endpoint with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\WebhookEndpoint
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the webhook endpoint. You may edit the <code>url</code>, the list of
         * <code>enabled_events</code>, and the status of your endpoint.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\WebhookEndpoint
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class SetupAttemptService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of SetupAttempts associated with a provided SetupIntent.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service\BillingPortal {
    class ConfigurationService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of configurations that describe the functionality of the customer
         * portal.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a configuration that describes the functionality and behavior of a
         * PortalSession.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BillingPortal\Configuration
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves a configuration that describes the functionality of the customer
         * portal.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BillingPortal\Configuration
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates a configuration that describes the functionality of the customer portal.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BillingPortal\Configuration
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    /**
     * Service factory class for API resources in the BillingPortal namespace.
     *
     * @property ConfigurationService $configurations
     * @property SessionService $sessions
     */
    class BillingPortalServiceFactory extends \Stripe\Service\AbstractServiceFactory
    {
        protected function getServiceClass($name)
        {
        }
    }
    class SessionService extends \Stripe\Service\AbstractService
    {
        /**
         * Creates a session of the customer portal.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\BillingPortal\Session
         */
        public function create($params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service\Checkout {
    class SessionService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of Checkout Sessions.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * When retrieving a Checkout Session, there is an includable
         * <strong>line_items</strong> property containing the first handful of those
         * items. There is also a URL where you can retrieve the full (paginated) list of
         * line items.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allLineItems($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Creates a Session object.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Checkout\Session
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves a Session object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Checkout\Session
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
    /**
     * Service factory class for API resources in the Checkout namespace.
     *
     * @property SessionService $sessions
     */
    class CheckoutServiceFactory extends \Stripe\Service\AbstractServiceFactory
    {
        protected function getServiceClass($name)
        {
        }
    }
}
namespace Stripe\Service {
    class TokenService extends \Stripe\Service\AbstractService
    {
        /**
         * Creates a single-use token that represents a bank account’s details. This token
         * can be used with any API method in place of a bank account dictionary. This
         * token can be used only once, by attaching it to a <a href="#accounts">Custom
         * account</a>.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Token
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the token with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Token
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
    class CreditNoteService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of credit notes.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * When retrieving a credit note, you’ll get a <strong>lines</strong> property
         * containing the the first handful of those items. There is also a URL where you
         * can retrieve the full (paginated) list of line items.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allLines($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Issue a credit note to adjust the amount of a finalized invoice. For a
         * <code>status=open</code> invoice, a credit note reduces its
         * <code>amount_due</code>. For a <code>status=paid</code> invoice, a credit note
         * does not affect its <code>amount_due</code>. Instead, it can result in any
         * combination of the following:.
         *
         * <ul> <li>Refund: create a new refund (using <code>refund_amount</code>) or link
         * an existing refund (using <code>refund</code>).</li> <li>Customer balance
         * credit: credit the customer’s balance (using <code>credit_amount</code>) which
         * will be automatically applied to their next invoice when it’s finalized.</li>
         * <li>Outside of Stripe credit: record the amount that is or will be credited
         * outside of Stripe (using <code>out_of_band_amount</code>).</li> </ul>
         *
         * For post-payment credit notes the sum of the refund, credit and outside of
         * Stripe amounts must equal the credit note total.
         *
         * You may issue multiple credit notes for an invoice. Each credit note will
         * increment the invoice’s <code>pre_payment_credit_notes_amount</code> or
         * <code>post_payment_credit_notes_amount</code> depending on its
         * <code>status</code> at the time of credit note creation.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CreditNote
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Get a preview of a credit note without creating it.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CreditNote
         */
        public function preview($params = null, $opts = null)
        {
        }
        /**
         * When retrieving a credit note preview, you’ll get a <strong>lines</strong>
         * property containing the first handful of those items. This URL you can retrieve
         * the full (paginated) list of line items.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function previewLines($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the credit note object with the given identifier.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CreditNote
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates an existing credit note.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CreditNote
         */
        public function update($id, $params = null, $opts = null)
        {
        }
        /**
         * Marks a credit note as void. Learn more about <a
         * href="/docs/billing/invoices/credit-notes#voiding">voiding credit notes</a>.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CreditNote
         */
        public function voidCreditNote($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service\Sigma {
    /**
     * Service factory class for API resources in the Sigma namespace.
     *
     * @property ScheduledQueryRunService $scheduledQueryRuns
     */
    class SigmaServiceFactory extends \Stripe\Service\AbstractServiceFactory
    {
        protected function getServiceClass($name)
        {
        }
    }
    class ScheduledQueryRunService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of scheduled query runs.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an scheduled query run.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Sigma\ScheduledQueryRun
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service {
    class RefundService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of all refunds you’ve previously created. The refunds are
         * returned in sorted order, with the most recent refunds appearing first. For
         * convenience, the 10 most recent refunds are always available by default on the
         * charge object.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Create a refund.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Refund
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an existing refund.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Refund
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified refund by setting the values of the parameters passed. Any
         * parameters not provided will be left unchanged.
         *
         * This request only accepts <code>metadata</code> as an argument.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Refund
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class QuoteService extends \Stripe\Service\AbstractService
    {
        /**
         * Accepts the specified quote.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Quote
         */
        public function accept($id, $params = null, $opts = null)
        {
        }
        /**
         * Returns a list of your quotes.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * When retrieving a quote, there is an includable
         * <strong>upfront.line_items</strong> property containing the first handful of
         * those items. There is also a URL where you can retrieve the full (paginated)
         * list of upfront line items.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allComputedUpfrontLineItems($id, $params = null, $opts = null)
        {
        }
        /**
         * When retrieving a quote, there is an includable <strong>line_items</strong>
         * property containing the first handful of those items. There is also a URL where
         * you can retrieve the full (paginated) list of line items.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allLineItems($id, $params = null, $opts = null)
        {
        }
        /**
         * Cancels the quote.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Quote
         */
        public function cancel($id, $params = null, $opts = null)
        {
        }
        /**
         * A quote models prices and services for a customer. Default options for
         * <code>header</code>, <code>description</code>, <code>footer</code>, and
         * <code>expires_at</code> can be set in the dashboard via the <a
         * href="https://dashboard.stripe.com/settings/billing/quote">quote template</a>.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Quote
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Finalizes the quote.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Quote
         */
        public function finalizeQuote($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the quote with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Quote
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * A quote models prices and services for a customer.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Quote
         */
        public function update($id, $params = null, $opts = null)
        {
        }
        /**
         * Download the PDF for a finalized quote.
         *
         * @param string $id
         * @param callable $readBodyChunkCallable
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         */
        public function pdf($id, $readBodyChunkCallable, $params = null, $opts = null)
        {
        }
    }
    class CouponService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your coupons.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * You can create coupons easily via the <a
         * href="https://dashboard.stripe.com/coupons">coupon management</a> page of the
         * Stripe dashboard. Coupon creation is also accessible via the API if you need to
         * create coupons on the fly.
         *
         * A coupon has either a <code>percent_off</code> or an <code>amount_off</code> and
         * <code>currency</code>. If you set an <code>amount_off</code>, that amount will
         * be subtracted from any invoice’s subtotal. For example, an invoice with a
         * subtotal of <currency>100</currency> will have a final total of
         * <currency>0</currency> if a coupon with an <code>amount_off</code> of
         * <amount>200</amount> is applied to it and an invoice with a subtotal of
         * <currency>300</currency> will have a final total of <currency>100</currency> if
         * a coupon with an <code>amount_off</code> of <amount>200</amount> is applied to
         * it.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Coupon
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * You can delete coupons via the <a
         * href="https://dashboard.stripe.com/coupons">coupon management</a> page of the
         * Stripe dashboard. However, deleting a coupon does not affect any customers who
         * have already applied the coupon; it means that new customers can’t redeem the
         * coupon. You can also delete coupons via the API.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Coupon
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the coupon with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Coupon
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the metadata of a coupon. Other coupon details (currency, duration,
         * amount_off) are, by design, not editable.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Coupon
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class ProductService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your products. The products are returned sorted by creation
         * date, with the most recently created products appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a new product object.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Product
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Delete a product. Deleting a product is only possible if it has no prices
         * associated with it. Additionally, deleting a product with <code>type=good</code>
         * is only possible if it has no SKUs associated with it.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Product
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an existing product. Supply the unique product ID from
         * either a product creation request or the product list, and Stripe will return
         * the corresponding product information.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Product
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specific product by setting the values of the parameters passed. Any
         * parameters not provided will be left unchanged.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Product
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class OrderReturnService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your order returns. The returns are returned sorted by
         * creation date, with the most recently created return appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an existing order return. Supply the unique order ID
         * from either an order return creation request or the order return list, and
         * Stripe will return the corresponding order information.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\OrderReturn
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
    class SubscriptionItemService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your subscription items for a given subscription.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * For the specified subscription item, returns a list of summary objects. Each
         * object in the list provides usage information that’s been summarized from
         * multiple usage records and over a subscription billing period (e.g., 15 usage
         * records in the month of September).
         *
         * The list is sorted in reverse-chronological order (newest first). The first list
         * item represents the most current usage period that hasn’t ended yet. Since new
         * usage records can still be added, the returned summary information for the
         * subscription item’s ID should be seen as unstable until the subscription billing
         * period ends.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allUsageRecordSummaries($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Adds a new item to an existing subscription. No existing items will be changed
         * or replaced.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SubscriptionItem
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Creates a usage record for a specified subscription item and date, and fills it
         * with a quantity.
         *
         * Usage records provide <code>quantity</code> information that Stripe uses to
         * track how much a customer is using your service. With usage information and the
         * pricing model set up by the <a
         * href="https://stripe.com/docs/billing/subscriptions/metered-billing">metered
         * billing</a> plan, Stripe helps you send accurate invoices to your customers.
         *
         * The default calculation for usage is to add up all the <code>quantity</code>
         * values of the usage records within a billing period. You can change this default
         * behavior with the billing plan’s <code>aggregate_usage</code> <a
         * href="/docs/api/plans/create#create_plan-aggregate_usage">parameter</a>. When
         * there is more than one usage record with the same timestamp, Stripe adds the
         * <code>quantity</code> values together. In most cases, this is the desired
         * resolution, however, you can change this behavior with the <code>action</code>
         * parameter.
         *
         * The default pricing model for metered billing is <a
         * href="/docs/api/plans/object#plan_object-billing_scheme">per-unit pricing</a>.
         * For finer granularity, you can configure metered billing to have a <a
         * href="https://stripe.com/docs/billing/subscriptions/tiers">tiered pricing</a>
         * model.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\UsageRecord
         */
        public function createUsageRecord($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Deletes an item from the subscription. Removing a subscription item from a
         * subscription will not cancel the subscription.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SubscriptionItem
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the subscription item with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SubscriptionItem
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the plan or quantity of an item on a current subscription.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SubscriptionItem
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class InvoiceItemService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your invoice items. Invoice items are returned sorted by
         * creation date, with the most recently created invoice items appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates an item to be added to a draft invoice (up to 250 items per invoice). If
         * no invoice is specified, the item will be on the next invoice created for the
         * customer specified.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\InvoiceItem
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Deletes an invoice item, removing it from an invoice. Deleting invoice items is
         * only possible when they’re not attached to invoices, or if it’s attached to a
         * draft invoice.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\InvoiceItem
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the invoice item with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\InvoiceItem
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the amount or description of an invoice item on an upcoming invoice.
         * Updating an invoice item is only possible before the invoice it’s attached to is
         * closed.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\InvoiceItem
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    /**
     * Service factory class for API resources in the root namespace.
     *
     * @property AccountLinkService $accountLinks
     * @property AccountService $accounts
     * @property ApplePayDomainService $applePayDomains
     * @property ApplicationFeeService $applicationFees
     * @property BalanceService $balance
     * @property BalanceTransactionService $balanceTransactions
     * @property BillingPortal\BillingPortalServiceFactory $billingPortal
     * @property ChargeService $charges
     * @property Checkout\CheckoutServiceFactory $checkout
     * @property CountrySpecService $countrySpecs
     * @property CouponService $coupons
     * @property CreditNoteService $creditNotes
     * @property CustomerService $customers
     * @property DisputeService $disputes
     * @property EphemeralKeyService $ephemeralKeys
     * @property EventService $events
     * @property ExchangeRateService $exchangeRates
     * @property FileLinkService $fileLinks
     * @property FileService $files
     * @property Identity\IdentityServiceFactory $identity
     * @property InvoiceItemService $invoiceItems
     * @property InvoiceService $invoices
     * @property Issuing\IssuingServiceFactory $issuing
     * @property MandateService $mandates
     * @property OAuthService $oauth
     * @property OrderReturnService $orderReturns
     * @property OrderService $orders
     * @property PaymentIntentService $paymentIntents
     * @property PaymentMethodService $paymentMethods
     * @property PayoutService $payouts
     * @property PlanService $plans
     * @property PriceService $prices
     * @property ProductService $products
     * @property PromotionCodeService $promotionCodes
     * @property QuoteService $quotes
     * @property Radar\RadarServiceFactory $radar
     * @property RefundService $refunds
     * @property Reporting\ReportingServiceFactory $reporting
     * @property ReviewService $reviews
     * @property SetupAttemptService $setupAttempts
     * @property SetupIntentService $setupIntents
     * @property Sigma\SigmaServiceFactory $sigma
     * @property SkuService $skus
     * @property SourceService $sources
     * @property SubscriptionItemService $subscriptionItems
     * @property SubscriptionService $subscriptions
     * @property SubscriptionScheduleService $subscriptionSchedules
     * @property TaxCodeService $taxCodes
     * @property TaxRateService $taxRates
     * @property Terminal\TerminalServiceFactory $terminal
     * @property TokenService $tokens
     * @property TopupService $topups
     * @property TransferService $transfers
     * @property WebhookEndpointService $webhookEndpoints
     */
    class CoreServiceFactory extends \Stripe\Service\AbstractServiceFactory
    {
        protected function getServiceClass($name)
        {
        }
    }
    class MandateService extends \Stripe\Service\AbstractService
    {
        /**
         * Retrieves a Mandate object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Mandate
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
    class PlanService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your plans.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * You can now model subscriptions more flexibly using the <a href="#prices">Prices
         * API</a>. It replaces the Plans API and is backwards compatible to simplify your
         * migration.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Plan
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Deleting plans means new subscribers can’t be added. Existing subscribers aren’t
         * affected.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Plan
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the plan with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Plan
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified plan by setting the values of the parameters passed. Any
         * parameters not provided are left unchanged. By design, you cannot change a
         * plan’s ID, amount, currency, or billing cycle.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Plan
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class SetupIntentService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of SetupIntents.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * A SetupIntent object can be canceled when it is in one of these statuses:
         * <code>requires_payment_method</code>, <code>requires_confirmation</code>, or
         * <code>requires_action</code>.
         *
         * Once canceled, setup is abandoned and any operations on the SetupIntent will
         * fail with an error.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SetupIntent
         */
        public function cancel($id, $params = null, $opts = null)
        {
        }
        /**
         * Confirm that your customer intends to set up the current or provided payment
         * method. For example, you would confirm a SetupIntent when a customer hits the
         * “Save” button on a payment method management page on your website.
         *
         * If the selected payment method does not require any additional steps from the
         * customer, the SetupIntent will transition to the <code>succeeded</code> status.
         *
         * Otherwise, it will transition to the <code>requires_action</code> status and
         * suggest additional actions via <code>next_action</code>. If setup fails, the
         * SetupIntent will transition to the <code>requires_payment_method</code> status.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SetupIntent
         */
        public function confirm($id, $params = null, $opts = null)
        {
        }
        /**
         * Creates a SetupIntent object.
         *
         * After the SetupIntent is created, attach a payment method and <a
         * href="/docs/api/setup_intents/confirm">confirm</a> to collect any required
         * permissions to charge the payment method later.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SetupIntent
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of a SetupIntent that has previously been created.
         *
         * Client-side retrieval using a publishable key is allowed when the
         * <code>client_secret</code> is provided in the query string.
         *
         * When retrieved with a publishable key, only a subset of properties will be
         * returned. Please refer to the <a href="#setup_intent_object">SetupIntent</a>
         * object reference for more details.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SetupIntent
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates a SetupIntent object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SetupIntent
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class ExchangeRateService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of objects that contain the rates at which foreign currencies are
         * converted to one another. Only shows the currencies for which Stripe supports.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the exchange rates from the given currency to every supported
         * currency.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\ExchangeRate
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
    class CustomerService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your customers. The customers are returned sorted by creation
         * date, with the most recent customers appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Returns a list of transactions that updated the customer’s <a
         * href="/docs/billing/customer/balance">balances</a>.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allBalanceTransactions($parentId, $params = null, $opts = null)
        {
        }
        /**
         * List sources for a specified customer.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allSources($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Returns a list of tax IDs for a customer.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allTaxIds($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Creates a new customer object.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Customer
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Creates an immutable transaction that updates the customer’s credit <a
         * href="/docs/billing/customer/balance">balance</a>.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CustomerBalanceTransaction
         */
        public function createBalanceTransaction($parentId, $params = null, $opts = null)
        {
        }
        /**
         * When you create a new credit card, you must specify a customer or recipient on
         * which to create it.
         *
         * If the card’s owner has no default card, then the new card will become the
         * default. However, if the owner already has a default, then it will not change.
         * To change the default, you should <a href="/docs/api#update_customer">update the
         * customer</a> to have a new <code>default_source</code>.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source
         */
        public function createSource($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Creates a new <code>TaxID</code> object for a customer.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TaxId
         */
        public function createTaxId($parentId, $params = null, $opts = null)
        {
        }
        /**
         * Permanently deletes a customer. It cannot be undone. Also immediately cancels
         * any active subscriptions on the customer.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Customer
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Removes the currently applied discount on a customer.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Customer
         */
        public function deleteDiscount($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source
         */
        public function deleteSource($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Deletes an existing <code>TaxID</code> object.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TaxId
         */
        public function deleteTaxId($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an existing customer. You need only supply the unique
         * customer identifier that was returned upon customer creation.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Customer
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves a specific customer balance transaction that updated the customer’s <a
         * href="/docs/billing/customer/balance">balances</a>.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CustomerBalanceTransaction
         */
        public function retrieveBalanceTransaction($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieve a specified source for a given customer.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source
         */
        public function retrieveSource($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the <code>TaxID</code> object with the given identifier.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TaxId
         */
        public function retrieveTaxId($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified customer by setting the values of the parameters passed.
         * Any parameters not provided will be left unchanged. For example, if you pass the
         * <strong>source</strong> parameter, that becomes the customer’s active source
         * (e.g., a card) to be used for all charges in the future. When you update a
         * customer to a new valid card source by passing the <strong>source</strong>
         * parameter: for each of the customer’s current subscriptions, if the subscription
         * bills automatically and is in the <code>past_due</code> state, then the latest
         * open invoice for the subscription with automatic collection enabled will be
         * retried. This retry will not count as an automatic retry, and will not affect
         * the next regularly scheduled payment for the invoice. Changing the
         * <strong>default_source</strong> for a customer will not trigger this behavior.
         *
         * This request accepts mostly the same arguments as the customer creation call.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Customer
         */
        public function update($id, $params = null, $opts = null)
        {
        }
        /**
         * Most credit balance transaction fields are immutable, but you may update its
         * <code>description</code> and <code>metadata</code>.
         *
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CustomerBalanceTransaction
         */
        public function updateBalanceTransaction($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source
         */
        public function updateSource($parentId, $id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $parentId
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\AlipayAccount|\Stripe\BankAccount|\Stripe\BitcoinReceiver|\Stripe\Card|\Stripe\Source
         */
        public function verifySource($parentId, $id, $params = null, $opts = null)
        {
        }
    }
    class EphemeralKeyService extends \Stripe\Service\AbstractService
    {
        /**
         * Invalidates a short-lived API key for a given resource.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\EphemeralKey
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Creates a short-lived API key for a given resource.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\EphemeralKey
         */
        public function create($params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Service\Radar {
    class EarlyFraudWarningService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of early fraud warnings.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an early fraud warning that has previously been
         * created.
         *
         * Please refer to the <a href="#early_fraud_warning_object">early fraud
         * warning</a> object reference for more details.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Radar\EarlyFraudWarning
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
    class ValueListService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of <code>ValueList</code> objects. The objects are sorted in
         * descending order by creation date, with the most recently created object
         * appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a new <code>ValueList</code> object, which can then be referenced in
         * rules.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Radar\ValueList
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Deletes a <code>ValueList</code> object, also deleting any items contained
         * within the value list. To be deleted, a value list must not be referenced in any
         * rules.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Radar\ValueList
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves a <code>ValueList</code> object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Radar\ValueList
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates a <code>ValueList</code> object by setting the values of the parameters
         * passed. Any parameters not provided will be left unchanged. Note that
         * <code>item_type</code> is immutable.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Radar\ValueList
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class ValueListItemService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of <code>ValueListItem</code> objects. The objects are sorted in
         * descending order by creation date, with the most recently created object
         * appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a new <code>ValueListItem</code> object, which is added to the specified
         * parent value list.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Radar\ValueListItem
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Deletes a <code>ValueListItem</code> object, removing it from its parent value
         * list.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Radar\ValueListItem
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves a <code>ValueListItem</code> object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Radar\ValueListItem
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
    /**
     * Service factory class for API resources in the Radar namespace.
     *
     * @property EarlyFraudWarningService $earlyFraudWarnings
     * @property ValueListItemService $valueListItems
     * @property ValueListService $valueLists
     */
    class RadarServiceFactory extends \Stripe\Service\AbstractServiceFactory
    {
        protected function getServiceClass($name)
        {
        }
    }
}
namespace Stripe\Service {
    class TaxRateService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your tax rates. Tax rates are returned sorted by creation
         * date, with the most recently created tax rates appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a new tax rate.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TaxRate
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves a tax rate with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TaxRate
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates an existing tax rate.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\TaxRate
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class InvoiceService extends \Stripe\Service\AbstractService
    {
        /**
         * You can list all invoices, or list the invoices for a specific customer. The
         * invoices are returned sorted by creation date, with the most recently created
         * invoices appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * When retrieving an invoice, you’ll get a <strong>lines</strong> property
         * containing the total count of line items and the first handful of those items.
         * There is also a URL where you can retrieve the full (paginated) list of line
         * items.
         *
         * @param string $parentId
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function allLines($parentId, $params = null, $opts = null)
        {
        }
        /**
         * This endpoint creates a draft invoice for a given customer. The draft invoice
         * created pulls in all pending invoice items on that customer, including
         * prorations. The invoice remains a draft until you <a
         * href="#finalize_invoice">finalize</a> the invoice, which allows you to <a
         * href="#pay_invoice">pay</a> or <a href="#send_invoice">send</a> the invoice to
         * your customers.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Permanently deletes a one-off invoice draft. This cannot be undone. Attempts to
         * delete invoices that are no longer in a draft state will fail; once an invoice
         * has been finalized or if an invoice is for a subscription, it must be <a
         * href="#void_invoice">voided</a>.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Stripe automatically finalizes drafts before sending and attempting payment on
         * invoices. However, if you’d like to finalize a draft invoice manually, you can
         * do so using this method.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice
         */
        public function finalizeInvoice($id, $params = null, $opts = null)
        {
        }
        /**
         * Marking an invoice as uncollectible is useful for keeping track of bad debts
         * that can be written off for accounting purposes.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice
         */
        public function markUncollectible($id, $params = null, $opts = null)
        {
        }
        /**
         * Stripe automatically creates and then attempts to collect payment on invoices
         * for customers on subscriptions according to your <a
         * href="https://dashboard.stripe.com/account/billing/automatic">subscriptions
         * settings</a>. However, if you’d like to attempt payment on an invoice out of the
         * normal collection schedule or for some other reason, you can do so.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice
         */
        public function pay($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the invoice with the given ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Stripe will automatically send invoices to customers according to your <a
         * href="https://dashboard.stripe.com/account/billing/automatic">subscriptions
         * settings</a>. However, if you’d like to manually send an invoice to your
         * customer out of the normal schedule, you can do so. When sending invoices that
         * have already been paid, there will be no reference to the payment in the email.
         *
         * Requests made in test-mode result in no emails being sent, despite sending an
         * <code>invoice.sent</code> event.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice
         */
        public function sendInvoice($id, $params = null, $opts = null)
        {
        }
        /**
         * At any time, you can preview the upcoming invoice for a customer. This will show
         * you all the charges that are pending, including subscription renewal charges,
         * invoice item charges, etc. It will also show you any discounts that are
         * applicable to the invoice.
         *
         * Note that when you are viewing an upcoming invoice, you are simply viewing a
         * preview – the invoice has not yet been created. As such, the upcoming invoice
         * will not show up in invoice listing calls, and you cannot use the API to pay or
         * edit the invoice. If you want to change the amount that your customer will be
         * billed, you can add, remove, or update pending invoice items, or update the
         * customer’s discount.
         *
         * You can preview the effects of updating a subscription, including a preview of
         * what proration will take place. To ensure that the actual proration is
         * calculated exactly the same as the previewed proration, you should pass a
         * <code>proration_date</code> parameter when doing the actual subscription update.
         * The value passed in should be the same as the
         * <code>subscription_proration_date</code> returned on the upcoming invoice
         * resource. The recommended way to get only the prorations being previewed is to
         * consider only proration line items where <code>period[start]</code> is equal to
         * the <code>subscription_proration_date</code> on the upcoming invoice resource.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice
         */
        public function upcoming($params = null, $opts = null)
        {
        }
        /**
         * When retrieving an upcoming invoice, you’ll get a <strong>lines</strong>
         * property containing the total count of line items and the first handful of those
         * items. There is also a URL where you can retrieve the full (paginated) list of
         * line items.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function upcomingLines($params = null, $opts = null)
        {
        }
        /**
         * Draft invoices are fully editable. Once an invoice is <a
         * href="/docs/billing/invoices/workflow#finalized">finalized</a>, monetary values,
         * as well as <code>collection_method</code>, become uneditable.
         *
         * If you would like to stop the Stripe Billing engine from automatically
         * finalizing, reattempting payments on, sending reminders for, or <a
         * href="/docs/billing/invoices/reconciliation">automatically reconciling</a>
         * invoices, pass <code>auto_advance=false</code>.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice
         */
        public function update($id, $params = null, $opts = null)
        {
        }
        /**
         * Mark a finalized invoice as void. This cannot be undone. Voiding an invoice is
         * similar to <a href="#delete_invoice">deletion</a>, however it only applies to
         * finalized invoices and maintains a papertrail where the invoice can still be
         * found.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Invoice
         */
        public function voidInvoice($id, $params = null, $opts = null)
        {
        }
    }
    class ChargeService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of charges you’ve previously created. The charges are returned in
         * sorted order, with the most recent charges appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Capture the payment of an existing, uncaptured, charge. This is the second half
         * of the two-step payment flow, where first you <a href="#create_charge">created a
         * charge</a> with the capture option set to false.
         *
         * Uncaptured payments expire exactly seven days after they are created. If they
         * are not captured by that point in time, they will be marked as refunded and will
         * no longer be capturable.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Charge
         */
        public function capture($id, $params = null, $opts = null)
        {
        }
        /**
         * To charge a credit card or other payment source, you create a
         * <code>Charge</code> object. If your API key is in test mode, the supplied
         * payment source (e.g., card) won’t actually be charged, although everything else
         * will occur as if in live mode. (Stripe assumes that the charge would have
         * completed successfully).
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Charge
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of a charge that has previously been created. Supply the
         * unique charge ID that was returned from your previous request, and Stripe will
         * return the corresponding charge information. The same information is returned
         * when creating or refunding the charge.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Charge
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified charge by setting the values of the parameters passed. Any
         * parameters not provided will be left unchanged.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Charge
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class SkuService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of your SKUs. The SKUs are returned sorted by creation date, with
         * the most recently created SKUs appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Creates a new SKU associated with a product.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SKU
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Delete a SKU. Deleting a SKU is only possible until it has been used in an
         * order.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SKU
         */
        public function delete($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an existing SKU. Supply the unique SKU identifier from
         * either a SKU creation request or from the product, and Stripe will return the
         * corresponding SKU information.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SKU
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specific SKU by setting the values of the parameters passed. Any
         * parameters not provided will be left unchanged.
         *
         * Note that a SKU’s <code>attributes</code> are not editable. Instead, you would
         * need to deactivate the existing SKU and create a new one with the new attribute
         * values.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SKU
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class PayoutService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of existing payouts sent to third-party bank accounts or that
         * Stripe has sent you. The payouts are returned in sorted order, with the most
         * recently created payouts appearing first.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * A previously created payout can be canceled if it has not yet been paid out.
         * Funds will be refunded to your available balance. You may not cancel automatic
         * Stripe payouts.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Payout
         */
        public function cancel($id, $params = null, $opts = null)
        {
        }
        /**
         * To send funds to your own bank account, you create a new payout object. Your <a
         * href="#balance">Stripe balance</a> must be able to cover the payout amount, or
         * you’ll receive an “Insufficient Funds” error.
         *
         * If your API key is in test mode, money won’t actually be sent, though everything
         * else will occur as if in live mode.
         *
         * If you are creating a manual payout on a Stripe account that uses multiple
         * payment source types, you’ll need to specify the source type balance that the
         * payout should draw from. The <a href="#balance_object">balance object</a>
         * details available and pending amounts by source type.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Payout
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Retrieves the details of an existing payout. Supply the unique payout ID from
         * either a payout creation request or the payout list, and Stripe will return the
         * corresponding payout information.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Payout
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Reverses a payout by debiting the destination bank account. Only payouts for
         * connected accounts to US bank accounts may be reversed at this time. If the
         * payout is in the <code>pending</code> status,
         * <code>/v1/payouts/:id/cancel</code> should be used instead.
         *
         * By requesting a reversal via <code>/v1/payouts/:id/reverse</code>, you confirm
         * that the authorized signatory of the selected bank account has authorized the
         * debit on the bank account and that no other authorization is required.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Payout
         */
        public function reverse($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates the specified payout by setting the values of the parameters passed. Any
         * parameters not provided will be left unchanged. This request accepts only the
         * metadata as arguments.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Payout
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class PaymentMethodService extends \Stripe\Service\AbstractService
    {
        /**
         * Returns a list of PaymentMethods for a given Customer.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Attaches a PaymentMethod object to a Customer.
         *
         * To attach a new PaymentMethod to a customer for future payments, we recommend
         * you use a <a href="/docs/api/setup_intents">SetupIntent</a> or a PaymentIntent
         * with <a
         * href="/docs/api/payment_intents/create#create_payment_intent-setup_future_usage">setup_future_usage</a>.
         * These approaches will perform any necessary steps to ensure that the
         * PaymentMethod can be used in a future payment. Using the
         * <code>/v1/payment_methods/:id/attach</code> endpoint does not ensure that future
         * payments can be made with the attached PaymentMethod. See <a
         * href="/docs/payments/payment-intents#future-usage">Optimizing cards for future
         * payments</a> for more information about setting up future payments.
         *
         * To use this PaymentMethod as the default for invoice or subscription payments,
         * set <a
         * href="/docs/api/customers/update#update_customer-invoice_settings-default_payment_method"><code>invoice_settings.default_payment_method</code></a>,
         * on the Customer to the PaymentMethod’s ID.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentMethod
         */
        public function attach($id, $params = null, $opts = null)
        {
        }
        /**
         * Creates a PaymentMethod object. Read the <a
         * href="/docs/stripe-js/reference#stripe-create-payment-method">Stripe.js
         * reference</a> to learn how to create PaymentMethods via Stripe.js.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentMethod
         */
        public function create($params = null, $opts = null)
        {
        }
        /**
         * Detaches a PaymentMethod object from a Customer.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentMethod
         */
        public function detach($id, $params = null, $opts = null)
        {
        }
        /**
         * Retrieves a PaymentMethod object.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentMethod
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
        /**
         * Updates a PaymentMethod object. A PaymentMethod must be attached a customer to
         * be updated.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\PaymentMethod
         */
        public function update($id, $params = null, $opts = null)
        {
        }
    }
    class CountrySpecService extends \Stripe\Service\AbstractService
    {
        /**
         * Lists all Country Spec objects available in the API.
         *
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection
         */
        public function all($params = null, $opts = null)
        {
        }
        /**
         * Returns a Country Spec for a given Country code.
         *
         * @param string $id
         * @param null|array $params
         * @param null|array|\Stripe\Util\RequestOptions $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\CountrySpec
         */
        public function retrieve($id, $params = null, $opts = null)
        {
        }
    }
}
namespace Stripe {
    /**
     * A return represents the full or partial return of a number of <a
     * href="https://stripe.com/docs/api#order_items">order items</a>. Returns always
     * belong to an order, and may optionally contain a refund.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/orders/guide#handling-returns">Handling
     * Returns</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount A positive integer in the smallest currency unit (that is, 100 cents for $1.00, or 1 for ¥1, Japanese Yen being a zero-decimal currency) representing the total amount for the returned line item.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property \Stripe\OrderItem[] $items The items included in this order return.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|string|\Stripe\Order $order The order that this return includes items from.
     * @property null|string|\Stripe\Refund $refund The ID of the refund issued for this return.
     */
    class OrderReturn extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'order_return';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
    }
    /**
     * Balance transactions represent funds moving through your Stripe account. They're
     * created for every type of transaction that comes into or flows out of your
     * Stripe account balance.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/reports/balance-transaction-types">Balance
     * Transaction Types</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount Gross amount of the transaction, in %s.
     * @property int $available_on The date the transaction's net funds will become available in the Stripe balance.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
     * @property null|float $exchange_rate The exchange rate used, if applicable, for this transaction. Specifically, if money was converted from currency A to currency B, then the <code>amount</code> in currency A, times <code>exchange_rate</code>, would be the <code>amount</code> in currency B. For example, suppose you charged a customer 10.00 EUR. Then the PaymentIntent's <code>amount</code> would be <code>1000</code> and <code>currency</code> would be <code>eur</code>. Suppose this was converted into 12.34 USD in your Stripe account. Then the BalanceTransaction's <code>amount</code> would be <code>1234</code>, <code>currency</code> would be <code>usd</code>, and <code>exchange_rate</code> would be <code>1.234</code>.
     * @property int $fee Fees (in %s) paid for this transaction.
     * @property \Stripe\StripeObject[] $fee_details Detailed breakdown of fees (in %s) paid for this transaction.
     * @property int $net Net amount of the transaction, in %s.
     * @property string $reporting_category <a href="https://stripe.com/docs/reports/reporting-categories">Learn more</a> about how reporting categories can help you understand balance transactions from an accounting perspective.
     * @property null|string|\Stripe\StripeObject $source The Stripe object to which this transaction is related.
     * @property string $status If the transaction's net funds are available in the Stripe balance yet. Either <code>available</code> or <code>pending</code>.
     * @property string $type Transaction type: <code>adjustment</code>, <code>advance</code>, <code>advance_funding</code>, <code>anticipation_repayment</code>, <code>application_fee</code>, <code>application_fee_refund</code>, <code>charge</code>, <code>connect_collection_transfer</code>, <code>contribution</code>, <code>issuing_authorization_hold</code>, <code>issuing_authorization_release</code>, <code>issuing_dispute</code>, <code>issuing_transaction</code>, <code>payment</code>, <code>payment_failure_refund</code>, <code>payment_refund</code>, <code>payout</code>, <code>payout_cancel</code>, <code>payout_failure</code>, <code>refund</code>, <code>refund_failure</code>, <code>reserve_transaction</code>, <code>reserved_funds</code>, <code>stripe_fee</code>, <code>stripe_fx_fee</code>, <code>tax_fee</code>, <code>topup</code>, <code>topup_reversal</code>, <code>transfer</code>, <code>transfer_cancel</code>, <code>transfer_failure</code>, or <code>transfer_refund</code>. <a href="https://stripe.com/docs/reports/balance-transaction-types">Learn more</a> about balance transaction types and what they represent. If you are looking to classify transactions for accounting purposes, you might want to consider <code>reporting_category</code> instead.
     */
    class BalanceTransaction extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'balance_transaction';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
        const TYPE_ADJUSTMENT = 'adjustment';
        const TYPE_ADVANCE = 'advance';
        const TYPE_ADVANCE_FUNDING = 'advance_funding';
        const TYPE_ANTICIPATION_REPAYMENT = 'anticipation_repayment';
        const TYPE_APPLICATION_FEE = 'application_fee';
        const TYPE_APPLICATION_FEE_REFUND = 'application_fee_refund';
        const TYPE_CHARGE = 'charge';
        const TYPE_CONNECT_COLLECTION_TRANSFER = 'connect_collection_transfer';
        const TYPE_CONTRIBUTION = 'contribution';
        const TYPE_ISSUING_AUTHORIZATION_HOLD = 'issuing_authorization_hold';
        const TYPE_ISSUING_AUTHORIZATION_RELEASE = 'issuing_authorization_release';
        const TYPE_ISSUING_DISPUTE = 'issuing_dispute';
        const TYPE_ISSUING_TRANSACTION = 'issuing_transaction';
        const TYPE_PAYMENT = 'payment';
        const TYPE_PAYMENT_FAILURE_REFUND = 'payment_failure_refund';
        const TYPE_PAYMENT_REFUND = 'payment_refund';
        const TYPE_PAYOUT = 'payout';
        const TYPE_PAYOUT_CANCEL = 'payout_cancel';
        const TYPE_PAYOUT_FAILURE = 'payout_failure';
        const TYPE_REFUND = 'refund';
        const TYPE_REFUND_FAILURE = 'refund_failure';
        const TYPE_RESERVE_TRANSACTION = 'reserve_transaction';
        const TYPE_RESERVED_FUNDS = 'reserved_funds';
        const TYPE_STRIPE_FEE = 'stripe_fee';
        const TYPE_STRIPE_FX_FEE = 'stripe_fx_fee';
        const TYPE_TAX_FEE = 'tax_fee';
        const TYPE_TOPUP = 'topup';
        const TYPE_TOPUP_REVERSAL = 'topup_reversal';
        const TYPE_TRANSFER = 'transfer';
        const TYPE_TRANSFER_CANCEL = 'transfer_cancel';
        const TYPE_TRANSFER_FAILURE = 'transfer_failure';
        const TYPE_TRANSFER_REFUND = 'transfer_refund';
    }
    /**
     * Tax rates can be applied to <a
     * href="https://stripe.com/docs/billing/invoices/tax-rates">invoices</a>, <a
     * href="https://stripe.com/docs/billing/subscriptions/taxes">subscriptions</a> and
     * <a
     * href="https://stripe.com/docs/payments/checkout/set-up-a-subscription#tax-rates">Checkout
     * Sessions</a> to collect tax.
     *
     * Related guide: <a href="https://stripe.com/docs/billing/taxes/tax-rates">Tax
     * Rates</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property bool $active Defaults to <code>true</code>. When set to <code>false</code>, this tax rate cannot be used with new applications or Checkout Sessions, but will still work for subscriptions and invoices that already have it set.
     * @property null|string $country Two-letter country code (<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>).
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string $description An arbitrary string attached to the tax rate for your internal use only. It will not be visible to your customers.
     * @property string $display_name The display name of the tax rates as it will appear to your customer on their receipt email, PDF, and the hosted invoice page.
     * @property bool $inclusive This specifies if the tax rate is inclusive or exclusive.
     * @property null|string $jurisdiction The jurisdiction for the tax rate. You can use this label field for tax reporting purposes. It also appears on your customer’s invoice.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property float $percentage This represents the tax rate percent out of 100.
     * @property null|string $state <a href="https://en.wikipedia.org/wiki/ISO_3166-2:US">ISO 3166-2 subdivision code</a>, without country prefix. For example, &quot;NY&quot; for New York, United States.
     * @property null|string $tax_type The high-level tax type, such as <code>vat</code> or <code>sales_tax</code>.
     */
    class TaxRate extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'tax_rate';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        const TAX_TYPE_GST = 'gst';
        const TAX_TYPE_HST = 'hst';
        const TAX_TYPE_PST = 'pst';
        const TAX_TYPE_QST = 'qst';
        const TAX_TYPE_SALES_TAX = 'sales_tax';
        const TAX_TYPE_VAT = 'vat';
    }
    /**
     * These bank accounts are payment methods on <code>Customer</code> objects.
     *
     * On the other hand <a
     * href="https://stripe.com/docs/api#external_accounts">External Accounts</a> are
     * transfer destinations on <code>Account</code> objects for <a
     * href="https://stripe.com/docs/connect/custom-accounts">Custom accounts</a>. They
     * can be bank accounts or debit cards as well, and are documented in the links
     * above.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/payments/bank-debits-transfers">Bank Debits and
     * Transfers</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|string|\Stripe\Account $account The ID of the account that the bank account is associated with.
     * @property null|string $account_holder_name The name of the person or business that owns the bank account.
     * @property null|string $account_holder_type The type of entity that holds the account. This can be either <code>individual</code> or <code>company</code>.
     * @property null|string $account_type The bank account type. This can only be <code>checking</code> or <code>savings</code> in most countries. In Japan, this can only be <code>futsu</code> or <code>toza</code>.
     * @property null|string[] $available_payout_methods A set of available payout methods for this bank account. Only values from this set should be passed as the <code>method</code> when creating a payout.
     * @property null|string $bank_name Name of the bank associated with the routing number (e.g., <code>WELLS FARGO</code>).
     * @property string $country Two-letter ISO code representing the country the bank account is located in.
     * @property string $currency Three-letter <a href="https://stripe.com/docs/payouts">ISO code for the currency</a> paid out to the bank account.
     * @property null|string|\Stripe\Customer $customer The ID of the customer that the bank account is associated with.
     * @property null|bool $default_for_currency Whether this bank account is the default external account for its currency.
     * @property null|string $fingerprint Uniquely identifies this particular bank account. You can use this attribute to check whether two bank accounts are the same.
     * @property string $last4 The last four digits of the bank account number.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string $routing_number The routing transit number for the bank account.
     * @property string $status <p>For bank accounts, possible values are <code>new</code>, <code>validated</code>, <code>verified</code>, <code>verification_failed</code>, or <code>errored</code>. A bank account that hasn't had any activity or validation performed is <code>new</code>. If Stripe can determine that the bank account exists, its status will be <code>validated</code>. Note that there often isn’t enough information to know (e.g., for smaller credit unions), and the validation is not always run. If customer bank account verification has succeeded, the bank account status will be <code>verified</code>. If the verification failed for any reason, such as microdeposit failure, the status will be <code>verification_failed</code>. If a transfer sent to this bank account fails, we'll set the status to <code>errored</code> and will not continue to send transfers until the bank details are updated.</p><p>For external accounts, possible values are <code>new</code> and <code>errored</code>. Validations aren't run against external accounts because they're only used for payouts. This means the other statuses don't apply. If a transfer fails, the status is set to <code>errored</code> and transfers are stopped until account details are updated.</p>
     */
    class BankAccount extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'bank_account';
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Update;
        /**
         * Possible string representations of the bank verification status.
         *
         * @see https://stripe.com/docs/api/external_account_bank_accounts/object#account_bank_account_object-status
         */
        const STATUS_NEW = 'new';
        const STATUS_VALIDATED = 'validated';
        const STATUS_VERIFIED = 'verified';
        const STATUS_VERIFICATION_FAILED = 'verification_failed';
        const STATUS_ERRORED = 'errored';
        /**
         * @return string The instance URL for this resource. It needs to be special
         *    cased because it doesn't fit into the standard resource pattern.
         */
        public function instanceUrl()
        {
        }
        /**
         * @param array|string $_id
         * @param null|array|string $_opts
         *
         * @throws \Stripe\Exception\BadMethodCallException
         */
        public static function retrieve($_id, $_opts = null)
        {
        }
        /**
         * @param string $_id
         * @param null|array $_params
         * @param null|array|string $_options
         *
         * @throws \Stripe\Exception\BadMethodCallException
         */
        public static function update($_id, $_params = null, $_options = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return BankAccount the verified bank account
         */
        public function verify($params = null, $opts = null)
        {
        }
    }
}
namespace Stripe\Radar {
    /**
     * Value list items allow you to add specific values to a given Radar value list,
     * which can then be used in rules.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/radar/lists#managing-list-items">Managing List
     * Items</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $created_by The name or email address of the user who added this item to the value list.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property string $value The value of the item.
     * @property string $value_list The identifier of the value list this item belongs to.
     */
    class ValueListItem extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'radar.value_list_item';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
    }
    /**
     * Value lists allow you to group values together which can then be referenced in
     * rules.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/radar/lists#managing-list-items">Default Stripe
     * Lists</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property string $alias The name of the value list for use in rules.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $created_by The name or email address of the user who created this value list.
     * @property string $item_type The type of items in the value list. One of <code>card_fingerprint</code>, <code>card_bin</code>, <code>email</code>, <code>ip_address</code>, <code>country</code>, <code>string</code>, or <code>case_sensitive_string</code>.
     * @property \Stripe\Collection $list_items List of items contained within this value list.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property string $name The name of the value list.
     */
    class ValueList extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'radar.value_list';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
    /**
     * An early fraud warning indicates that the card issuer has notified us that a
     * charge may be fraudulent.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/disputes/measuring#early-fraud-warnings">Early
     * Fraud Warnings</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property bool $actionable An EFW is actionable if it has not received a dispute and has not been fully refunded. You may wish to proactively refund a charge that receives an EFW, in order to avoid receiving a dispute later.
     * @property string|\Stripe\Charge $charge ID of the charge this early fraud warning is for, optionally expanded.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $fraud_type The type of fraud labelled by the issuer. One of <code>card_never_received</code>, <code>fraudulent_card_application</code>, <code>made_with_counterfeit_card</code>, <code>made_with_lost_card</code>, <code>made_with_stolen_card</code>, <code>misc</code>, <code>unauthorized_use_of_card</code>.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property string|\Stripe\PaymentIntent $payment_intent ID of the Payment Intent this early fraud warning is for, optionally expanded.
     */
    class EarlyFraudWarning extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'radar.early_fraud_warning';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Retrieve;
        const FRAUD_TYPE_CARD_NEVER_RECEIVED = 'card_never_received';
        const FRAUD_TYPE_FRAUDULENT_CARD_APPLICATION = 'fraudulent_card_application';
        const FRAUD_TYPE_MADE_WITH_COUNTERFEIT_CARD = 'made_with_counterfeit_card';
        const FRAUD_TYPE_MADE_WITH_LOST_CARD = 'made_with_lost_card';
        const FRAUD_TYPE_MADE_WITH_STOLEN_CARD = 'made_with_stolen_card';
        const FRAUD_TYPE_MISC = 'misc';
        const FRAUD_TYPE_UNAUTHORIZED_USE_OF_CARD = 'unauthorized_use_of_card';
    }
}
namespace Stripe {
    /**
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $url The URL for the login link.
     */
    class LoginLink extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'login_link';
    }
    /**
     * Class Stripe.
     */
    class Stripe
    {
        /** @var string The Stripe API key to be used for requests. */
        public static $apiKey;
        /** @var string The Stripe client_id to be used for Connect requests. */
        public static $clientId;
        /** @var string The base URL for the Stripe API. */
        public static $apiBase = 'https://api.stripe.com';
        /** @var string The base URL for the OAuth API. */
        public static $connectBase = 'https://connect.stripe.com';
        /** @var string The base URL for the Stripe API uploads endpoint. */
        public static $apiUploadBase = 'https://files.stripe.com';
        /** @var null|string The version of the Stripe API to use for requests. */
        public static $apiVersion = null;
        /** @var null|string The account ID for connected accounts requests. */
        public static $accountId = null;
        /** @var string Path to the CA bundle used to verify SSL certificates */
        public static $caBundlePath = null;
        /** @var bool Defaults to true. */
        public static $verifySslCerts = true;
        /** @var array The application's information (name, version, URL) */
        public static $appInfo = null;
        /**
         * @var null|Util\LoggerInterface the logger to which the library will
         *   produce messages
         */
        public static $logger = null;
        /** @var int Maximum number of request retries */
        public static $maxNetworkRetries = 0;
        /** @var bool Whether client telemetry is enabled. Defaults to true. */
        public static $enableTelemetry = true;
        const VERSION = '7.92.0';
        /**
         * @return string the API key used for requests
         */
        public static function getApiKey()
        {
        }
        /**
         * @return string the client_id used for Connect requests
         */
        public static function getClientId()
        {
        }
        /**
         * @return Util\LoggerInterface the logger to which the library will
         *   produce messages
         */
        public static function getLogger()
        {
        }
        /**
         * @param Util\LoggerInterface $logger the logger to which the library
         *   will produce messages
         */
        public static function setLogger($logger)
        {
        }
        /**
         * Sets the API key to be used for requests.
         *
         * @param string $apiKey
         */
        public static function setApiKey($apiKey)
        {
        }
        /**
         * Sets the client_id to be used for Connect requests.
         *
         * @param string $clientId
         */
        public static function setClientId($clientId)
        {
        }
        /**
         * @return string The API version used for requests. null if we're using the
         *    latest version.
         */
        public static function getApiVersion()
        {
        }
        /**
         * @param string $apiVersion the API version to use for requests
         */
        public static function setApiVersion($apiVersion)
        {
        }
        /**
         * @return string
         */
        public static function getCABundlePath()
        {
        }
        /**
         * @param string $caBundlePath
         */
        public static function setCABundlePath($caBundlePath)
        {
        }
        /**
         * @return bool
         */
        public static function getVerifySslCerts()
        {
        }
        /**
         * @param bool $verify
         */
        public static function setVerifySslCerts($verify)
        {
        }
        /**
         * @return string | null The Stripe account ID for connected account
         *   requests
         */
        public static function getAccountId()
        {
        }
        /**
         * @param string $accountId the Stripe account ID to set for connected
         *   account requests
         */
        public static function setAccountId($accountId)
        {
        }
        /**
         * @return array | null The application's information
         */
        public static function getAppInfo()
        {
        }
        /**
         * @param string $appName The application's name
         * @param null|string $appVersion The application's version
         * @param null|string $appUrl The application's URL
         * @param null|string $appPartnerId The application's partner ID
         */
        public static function setAppInfo($appName, $appVersion = null, $appUrl = null, $appPartnerId = null)
        {
        }
        /**
         * @return int Maximum number of request retries
         */
        public static function getMaxNetworkRetries()
        {
        }
        /**
         * @param int $maxNetworkRetries Maximum number of request retries
         */
        public static function setMaxNetworkRetries($maxNetworkRetries)
        {
        }
        /**
         * @return float Maximum delay between retries, in seconds
         */
        public static function getMaxNetworkRetryDelay()
        {
        }
        /**
         * @return float Maximum delay between retries, in seconds, that will be respected from the Stripe API
         */
        public static function getMaxRetryAfter()
        {
        }
        /**
         * @return float Initial delay between retries, in seconds
         */
        public static function getInitialNetworkRetryDelay()
        {
        }
        /**
         * @return bool Whether client telemetry is enabled
         */
        public static function getEnableTelemetry()
        {
        }
        /**
         * @param bool $enableTelemetry Enables client telemetry.
         *
         * Client telemetry enables timing and request metrics to be sent back to Stripe as an HTTP Header
         * with the current request. This enables Stripe to do latency and metrics analysis without adding extra
         * overhead (such as extra network calls) on the client.
         */
        public static function setEnableTelemetry($enableTelemetry)
        {
        }
    }
    /**
     * A coupon contains information about a percent-off or amount-off discount you
     * might want to apply to a customer. Coupons may be applied to <a
     * href="https://stripe.com/docs/api#invoices">invoices</a> or <a
     * href="https://stripe.com/docs/api#create_order-coupon">orders</a>. Coupons do
     * not work with conventional one-off <a
     * href="https://stripe.com/docs/api#create_charge">charges</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|int $amount_off Amount (in the <code>currency</code> specified) that will be taken off the subtotal of any invoices for this customer.
     * @property \Stripe\StripeObject $applies_to
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|string $currency If <code>amount_off</code> has been set, the three-letter <a href="https://stripe.com/docs/currencies">ISO code for the currency</a> of the amount to take off.
     * @property string $duration One of <code>forever</code>, <code>once</code>, and <code>repeating</code>. Describes how long a customer who applies this coupon will get the discount.
     * @property null|int $duration_in_months If <code>duration</code> is <code>repeating</code>, the number of months the coupon applies. Null if coupon <code>duration</code> is <code>forever</code> or <code>once</code>.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|int $max_redemptions Maximum number of times this coupon can be redeemed, in total, across all customers, before it is no longer valid.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string $name Name of the coupon displayed to customers on for instance invoices or receipts.
     * @property null|float $percent_off Percent that will be taken off the subtotal of any invoices for this customer for the duration of the coupon. For example, a coupon with percent_off of 50 will make a %s100 invoice %s50 instead.
     * @property null|int $redeem_by Date after which the coupon can no longer be redeemed.
     * @property int $times_redeemed Number of times this coupon has been applied to a customer.
     * @property bool $valid Taking account of the above properties, whether this coupon can still be applied to a customer.
     */
    class Coupon extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'coupon';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
}
namespace Stripe\Exception {
    /**
     * The base interface for all Stripe exceptions.
     */
    interface ExceptionInterface extends \Throwable
    {
    }
    /**
     * Implements properties and methods common to all (non-SPL) Stripe exceptions.
     */
    abstract class ApiErrorException extends \Exception implements \Stripe\Exception\ExceptionInterface
    {
        protected $error;
        protected $httpBody;
        protected $httpHeaders;
        protected $httpStatus;
        protected $jsonBody;
        protected $requestId;
        protected $stripeCode;
        /**
         * Creates a new API error exception.
         *
         * @param string $message the exception message
         * @param null|int $httpStatus the HTTP status code
         * @param null|string $httpBody the HTTP body as a string
         * @param null|array $jsonBody the JSON deserialized body
         * @param null|array|\Stripe\Util\CaseInsensitiveArray $httpHeaders the HTTP headers array
         * @param null|string $stripeCode the Stripe error code
         *
         * @return static
         */
        public static function factory($message, $httpStatus = null, $httpBody = null, $jsonBody = null, $httpHeaders = null, $stripeCode = null)
        {
        }
        /**
         * Gets the Stripe error object.
         *
         * @return null|\Stripe\ErrorObject
         */
        public function getError()
        {
        }
        /**
         * Sets the Stripe error object.
         *
         * @param null|\Stripe\ErrorObject $error
         */
        public function setError($error)
        {
        }
        /**
         * Gets the HTTP body as a string.
         *
         * @return null|string
         */
        public function getHttpBody()
        {
        }
        /**
         * Sets the HTTP body as a string.
         *
         * @param null|string $httpBody
         */
        public function setHttpBody($httpBody)
        {
        }
        /**
         * Gets the HTTP headers array.
         *
         * @return null|array|\Stripe\Util\CaseInsensitiveArray
         */
        public function getHttpHeaders()
        {
        }
        /**
         * Sets the HTTP headers array.
         *
         * @param null|array|\Stripe\Util\CaseInsensitiveArray $httpHeaders
         */
        public function setHttpHeaders($httpHeaders)
        {
        }
        /**
         * Gets the HTTP status code.
         *
         * @return null|int
         */
        public function getHttpStatus()
        {
        }
        /**
         * Sets the HTTP status code.
         *
         * @param null|int $httpStatus
         */
        public function setHttpStatus($httpStatus)
        {
        }
        /**
         * Gets the JSON deserialized body.
         *
         * @return null|array<string, mixed>
         */
        public function getJsonBody()
        {
        }
        /**
         * Sets the JSON deserialized body.
         *
         * @param null|array<string, mixed> $jsonBody
         */
        public function setJsonBody($jsonBody)
        {
        }
        /**
         * Gets the Stripe request ID.
         *
         * @return null|string
         */
        public function getRequestId()
        {
        }
        /**
         * Sets the Stripe request ID.
         *
         * @param null|string $requestId
         */
        public function setRequestId($requestId)
        {
        }
        /**
         * Gets the Stripe error code.
         *
         * Cf. the `CODE_*` constants on {@see \Stripe\ErrorObject} for possible
         * values.
         *
         * @return null|string
         */
        public function getStripeCode()
        {
        }
        /**
         * Sets the Stripe error code.
         *
         * @param null|string $stripeCode
         */
        public function setStripeCode($stripeCode)
        {
        }
        /**
         * Returns the string representation of the exception.
         *
         * @return string
         */
        public function __toString()
        {
        }
        protected function constructErrorObject()
        {
        }
    }
    /**
     * UnknownApiErrorException is thrown when the client library receives an
     * error from the API it doesn't know about. Receiving this error usually
     * means that your client library is outdated and should be upgraded.
     */
    class UnknownApiErrorException extends \Stripe\Exception\ApiErrorException
    {
    }
}
namespace Stripe\Exception\OAuth {
    /**
     * Implements properties and methods common to all (non-SPL) Stripe OAuth
     * exceptions.
     */
    abstract class OAuthErrorException extends \Stripe\Exception\ApiErrorException
    {
        protected function constructErrorObject()
        {
        }
    }
    /**
     * UnsupportedResponseTypeException is thrown when an unsupported response type
     * parameter is specified.
     */
    class UnsupportedResponseTypeException extends \Stripe\Exception\OAuth\OAuthErrorException
    {
    }
    /**
     * The base interface for all Stripe OAuth exceptions.
     */
    interface ExceptionInterface extends \Stripe\Exception\ExceptionInterface
    {
    }
    /**
     * UnknownApiErrorException is thrown when the client library receives an
     * error from the OAuth API it doesn't know about. Receiving this error usually
     * means that your client library is outdated and should be upgraded.
     */
    class UnknownOAuthErrorException extends \Stripe\Exception\OAuth\OAuthErrorException
    {
    }
    /**
     * InvalidClientException is thrown when the client_id does not belong to you,
     * the stripe_user_id does not exist or is not connected to your application,
     * or the API key mode (live or test mode) does not match the client_id mode.
     */
    class InvalidClientException extends \Stripe\Exception\OAuth\OAuthErrorException
    {
    }
    /**
     * InvalidScopeException is thrown when an invalid scope parameter is provided.
     */
    class InvalidScopeException extends \Stripe\Exception\OAuth\OAuthErrorException
    {
    }
    /**
     * UnsupportedGrantTypeException is thrown when an unuspported grant type
     * parameter is specified.
     */
    class UnsupportedGrantTypeException extends \Stripe\Exception\OAuth\OAuthErrorException
    {
    }
    /**
     * InvalidRequestException is thrown when a code, refresh token, or grant
     * type parameter is not provided, but was required.
     */
    class InvalidRequestException extends \Stripe\Exception\OAuth\OAuthErrorException
    {
    }
    /**
     * InvalidGrantException is thrown when a specified code doesn't exist, is
     * expired, has been used, or doesn't belong to you; a refresh token doesn't
     * exist, or doesn't belong to you; or if an API key's mode (live or test)
     * doesn't match the mode of a code or refresh token.
     */
    class InvalidGrantException extends \Stripe\Exception\OAuth\OAuthErrorException
    {
    }
}
namespace Stripe\Exception {
    /**
     * PermissionException is thrown in cases where access was attempted on a
     * resource that wasn't allowed.
     */
    class PermissionException extends \Stripe\Exception\ApiErrorException
    {
    }
    class UnexpectedValueException extends \UnexpectedValueException implements \Stripe\Exception\ExceptionInterface
    {
    }
    class InvalidArgumentException extends \InvalidArgumentException implements \Stripe\Exception\ExceptionInterface
    {
    }
    class BadMethodCallException extends \BadMethodCallException implements \Stripe\Exception\ExceptionInterface
    {
    }
    /**
     * SignatureVerificationException is thrown when the signature verification for
     * a webhook fails.
     */
    class SignatureVerificationException extends \Exception implements \Stripe\Exception\ExceptionInterface
    {
        protected $httpBody;
        protected $sigHeader;
        /**
         * Creates a new SignatureVerificationException exception.
         *
         * @param string $message the exception message
         * @param null|string $httpBody the HTTP body as a string
         * @param null|string $sigHeader the `Stripe-Signature` HTTP header
         *
         * @return SignatureVerificationException
         */
        public static function factory($message, $httpBody = null, $sigHeader = null)
        {
        }
        /**
         * Gets the HTTP body as a string.
         *
         * @return null|string
         */
        public function getHttpBody()
        {
        }
        /**
         * Sets the HTTP body as a string.
         *
         * @param null|string $httpBody
         */
        public function setHttpBody($httpBody)
        {
        }
        /**
         * Gets the `Stripe-Signature` HTTP header.
         *
         * @return null|string
         */
        public function getSigHeader()
        {
        }
        /**
         * Sets the `Stripe-Signature` HTTP header.
         *
         * @param null|string $sigHeader
         */
        public function setSigHeader($sigHeader)
        {
        }
    }
    /**
     * InvalidRequestException is thrown when a request is initiated with invalid
     * parameters.
     */
    class InvalidRequestException extends \Stripe\Exception\ApiErrorException
    {
        protected $stripeParam;
        /**
         * Creates a new InvalidRequestException exception.
         *
         * @param string $message the exception message
         * @param null|int $httpStatus the HTTP status code
         * @param null|string $httpBody the HTTP body as a string
         * @param null|array $jsonBody the JSON deserialized body
         * @param null|array|\Stripe\Util\CaseInsensitiveArray $httpHeaders the HTTP headers array
         * @param null|string $stripeCode the Stripe error code
         * @param null|string $stripeParam the parameter related to the error
         *
         * @return InvalidRequestException
         */
        public static function factory($message, $httpStatus = null, $httpBody = null, $jsonBody = null, $httpHeaders = null, $stripeCode = null, $stripeParam = null)
        {
        }
        /**
         * Gets the parameter related to the error.
         *
         * @return null|string
         */
        public function getStripeParam()
        {
        }
        /**
         * Sets the parameter related to the error.
         *
         * @param null|string $stripeParam
         */
        public function setStripeParam($stripeParam)
        {
        }
    }
    /**
     * RateLimitException is thrown in cases where an account is putting too much
     * load on Stripe's API servers (usually by performing too many requests).
     * Please back off on request rate.
     */
    class RateLimitException extends \Stripe\Exception\InvalidRequestException
    {
    }
    /**
     * IdempotencyException is thrown in cases where an idempotency key was used
     * improperly.
     */
    class IdempotencyException extends \Stripe\Exception\ApiErrorException
    {
    }
    /**
     * AuthenticationException is thrown when invalid credentials are used to
     * connect to Stripe's servers.
     */
    class AuthenticationException extends \Stripe\Exception\ApiErrorException
    {
    }
    /**
     * ApiConnection is thrown in the event that the SDK can't connect to Stripe's
     * servers. That can be for a variety of different reasons from a downed
     * network to a bad TLS certificate.
     */
    class ApiConnectionException extends \Stripe\Exception\ApiErrorException
    {
    }
    /**
     * CardException is thrown when a user enters a card that can't be charged for
     * some reason.
     */
    class CardException extends \Stripe\Exception\ApiErrorException
    {
        protected $declineCode;
        protected $stripeParam;
        /**
         * Creates a new CardException exception.
         *
         * @param string $message the exception message
         * @param null|int $httpStatus the HTTP status code
         * @param null|string $httpBody the HTTP body as a string
         * @param null|array $jsonBody the JSON deserialized body
         * @param null|array|\Stripe\Util\CaseInsensitiveArray $httpHeaders the HTTP headers array
         * @param null|string $stripeCode the Stripe error code
         * @param null|string $declineCode the decline code
         * @param null|string $stripeParam the parameter related to the error
         *
         * @return CardException
         */
        public static function factory($message, $httpStatus = null, $httpBody = null, $jsonBody = null, $httpHeaders = null, $stripeCode = null, $declineCode = null, $stripeParam = null)
        {
        }
        /**
         * Gets the decline code.
         *
         * @return null|string
         */
        public function getDeclineCode()
        {
        }
        /**
         * Sets the decline code.
         *
         * @param null|string $declineCode
         */
        public function setDeclineCode($declineCode)
        {
        }
        /**
         * Gets the parameter related to the error.
         *
         * @return null|string
         */
        public function getStripeParam()
        {
        }
        /**
         * Sets the parameter related to the error.
         *
         * @param null|string $stripeParam
         */
        public function setStripeParam($stripeParam)
        {
        }
    }
}
namespace Stripe {
    /**
     * A Mandate is a record of the permission a customer has given you to debit their
     * payment method.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property \Stripe\StripeObject $customer_acceptance
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $multi_use
     * @property string|\Stripe\PaymentMethod $payment_method ID of the payment method associated with this mandate.
     * @property \Stripe\StripeObject $payment_method_details
     * @property \Stripe\StripeObject $single_use
     * @property string $status The status of the mandate, which indicates whether it can be used to initiate a payment.
     * @property string $type The type of the mandate.
     */
    class Mandate extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'mandate';
        use \Stripe\ApiOperations\Retrieve;
    }
    /**
     * A subscription schedule allows you to create and manage the lifecycle of a
     * subscription by predefining expected changes.
     *
     * Related guide: <a
     * href="https://stripe.com/docs/billing/subscriptions/subscription-schedules">Subscription
     * Schedules</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|int $canceled_at Time at which the subscription schedule was canceled. Measured in seconds since the Unix epoch.
     * @property null|int $completed_at Time at which the subscription schedule was completed. Measured in seconds since the Unix epoch.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property null|\Stripe\StripeObject $current_phase Object representing the start and end dates for the current phase of the subscription schedule, if it is <code>active</code>.
     * @property string|\Stripe\Customer $customer ID of the customer who owns the subscription schedule.
     * @property \Stripe\StripeObject $default_settings
     * @property string $end_behavior Behavior of the subscription schedule and underlying subscription when it ends. Possible values are <code>release</code> and <code>cancel</code>.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property \Stripe\StripeObject[] $phases Configuration for the subscription schedule's phases.
     * @property null|int $released_at Time at which the subscription schedule was released. Measured in seconds since the Unix epoch.
     * @property null|string $released_subscription ID of the subscription once managed by the subscription schedule (if it is released).
     * @property string $status The present status of the subscription schedule. Possible values are <code>not_started</code>, <code>active</code>, <code>completed</code>, <code>released</code>, and <code>canceled</code>. You can read more about the different states in our <a href="https://stripe.com/docs/billing/subscriptions/subscription-schedules">behavior guide</a>.
     * @property null|string|\Stripe\Subscription $subscription ID of the subscription managed by the subscription schedule.
     */
    class SubscriptionSchedule extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'subscription_schedule';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SubscriptionSchedule the canceled subscription schedule
         */
        public function cancel($params = null, $opts = null)
        {
        }
        /**
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\SubscriptionSchedule the released subscription schedule
         */
        public function release($params = null, $opts = null)
        {
        }
    }
    /**
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property null|string $invoice The invoice in which this usage period has been billed for.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $period
     * @property string $subscription_item The ID of the subscription item this summary is describing.
     * @property int $total_usage The total usage within this usage period.
     */
    class UsageRecordSummary extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'usage_record_summary';
    }
    /**
     * You can now model subscriptions more flexibly using the <a
     * href="https://stripe.com/docs/api#prices">Prices API</a>. It replaces the Plans
     * API and is backwards compatible to simplify your migration.
     *
     * Plans define the base price, currency, and billing cycle for recurring purchases
     * of products. <a href="https://stripe.com/docs/api#products">Products</a> help
     * you track inventory or provisioning, and plans help you track pricing. Different
     * physical goods or levels of service should be represented by products, and
     * pricing options should be represented by plans. This approach lets you change
     * prices without having to change your provisioning scheme.
     *
     * For example, you might have a single &quot;gold&quot; product that has plans for
     * $10/month, $100/year, €9/month, and €90/year.
     *
     * Related guides: <a
     * href="https://stripe.com/docs/billing/subscriptions/set-up-subscription">Set up
     * a subscription</a> and more about <a
     * href="https://stripe.com/docs/billing/prices-guide">products and prices</a>.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property bool $active Whether the plan can be used for new purchases.
     * @property null|string $aggregate_usage Specifies a usage aggregation strategy for plans of <code>usage_type=metered</code>. Allowed values are <code>sum</code> for summing up all usage during a period, <code>last_during_period</code> for using the last usage record reported within a period, <code>last_ever</code> for using the last usage record ever (across period bounds) or <code>max</code> which uses the usage record with the maximum reported usage during a period. Defaults to <code>sum</code>.
     * @property null|int $amount The unit amount in %s to be charged, represented as a whole integer if possible. Only set if <code>billing_scheme=per_unit</code>.
     * @property null|string $amount_decimal The unit amount in %s to be charged, represented as a decimal string with at most 12 decimal places. Only set if <code>billing_scheme=per_unit</code>.
     * @property string $billing_scheme Describes how to compute the price per period. Either <code>per_unit</code> or <code>tiered</code>. <code>per_unit</code> indicates that the fixed amount (specified in <code>amount</code>) will be charged per unit in <code>quantity</code> (for plans with <code>usage_type=licensed</code>), or per unit of total usage (for plans with <code>usage_type=metered</code>). <code>tiered</code> indicates that the unit pricing will be computed using a tiering strategy as defined using the <code>tiers</code> and <code>tiers_mode</code> attributes.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property string $interval The frequency at which a subscription is billed. One of <code>day</code>, <code>week</code>, <code>month</code> or <code>year</code>.
     * @property int $interval_count The number of intervals (specified in the <code>interval</code> attribute) between subscription billings. For example, <code>interval=month</code> and <code>interval_count=3</code> bills every 3 months.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string $nickname A brief description of the plan, hidden from customers.
     * @property null|string|\Stripe\Product $product The product whose pricing this plan determines.
     * @property \Stripe\StripeObject[] $tiers Each element represents a pricing tier. This parameter requires <code>billing_scheme</code> to be set to <code>tiered</code>. See also the documentation for <code>billing_scheme</code>.
     * @property null|string $tiers_mode Defines if the tiering price should be <code>graduated</code> or <code>volume</code> based. In <code>volume</code>-based tiering, the maximum quantity within a period determines the per unit price. In <code>graduated</code> tiering, pricing can change as the quantity grows.
     * @property null|\Stripe\StripeObject $transform_usage Apply a transformation to the reported usage or set quantity before computing the amount billed. Cannot be combined with <code>tiers</code>.
     * @property null|int $trial_period_days Default number of trial days when subscribing a customer to this plan using <a href="https://stripe.com/docs/api#create_subscription-trial_from_plan"><code>trial_from_plan=true</code></a>.
     * @property string $usage_type Configures how the quantity per period should be determined. Can be either <code>metered</code> or <code>licensed</code>. <code>licensed</code> automatically bills the <code>quantity</code> set when adding it to a subscription. <code>metered</code> aggregates the total usage based on usage records. Defaults to <code>licensed</code>.
     */
    class Plan extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'plan';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
    /**
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property string|\Stripe\Account $account ID of the Stripe account this fee was taken from.
     * @property int $amount Amount earned, in %s.
     * @property int $amount_refunded Amount in %s refunded (can be less than the amount attribute on the fee if a partial refund was issued)
     * @property string|\Stripe\StripeObject $application ID of the Connect application that earned the fee.
     * @property null|string|\Stripe\BalanceTransaction $balance_transaction Balance transaction that describes the impact of this collected application fee on your account balance (not including refunds).
     * @property string|\Stripe\Charge $charge ID of the charge that the application fee was taken from.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property null|string|\Stripe\Charge $originating_transaction ID of the corresponding charge on the platform account, if this fee was the result of a charge using the <code>destination</code> parameter.
     * @property bool $refunded Whether the fee has been fully refunded. If the fee is only partially refunded, this attribute will still be false.
     * @property \Stripe\Collection $refunds A list of refunds that have been applied to the fee.
     */
    class ApplicationFee extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'application_fee';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\NestedResource;
        use \Stripe\ApiOperations\Retrieve;
        const PATH_REFUNDS = '/refunds';
        /**
         * @param string $id the ID of the application fee on which to retrieve the fee refunds
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\Collection the list of fee refunds
         */
        public static function allRefunds($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the application fee on which to create the fee refund
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\ApplicationFeeRefund
         */
        public static function createRefund($id, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the application fee to which the fee refund belongs
         * @param string $refundId the ID of the fee refund to retrieve
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\ApplicationFeeRefund
         */
        public static function retrieveRefund($id, $refundId, $params = null, $opts = null)
        {
        }
        /**
         * @param string $id the ID of the application fee to which the fee refund belongs
         * @param string $refundId the ID of the fee refund to update
         * @param null|array $params
         * @param null|array|string $opts
         *
         * @throws \Stripe\Exception\ApiErrorException if the request fails
         *
         * @return \Stripe\ApplicationFeeRefund
         */
        public static function updateRefund($id, $refundId, $params = null, $opts = null)
        {
        }
    }
    /**
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $domain_name
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     */
    class ApplePayDomain extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'apple_pay_domain';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Delete;
        use \Stripe\ApiOperations\Retrieve;
        /**
         * @return string The class URL for this resource. It needs to be special
         *    cased because it doesn't fit into the standard resource pattern.
         */
        public static function classUrl()
        {
        }
    }
    /**
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $amount The amount of <code>currency</code> that the transaction was converted to in real-time.
     * @property int $bitcoin_amount The amount of bitcoin contained in the transaction.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property string $currency Three-letter <a href="https://stripe.com/docs/currencies">ISO code for the currency</a> to which this transaction was converted.
     * @property string $receiver The receiver to which this transaction was sent.
     */
    class BitcoinTransaction extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'bitcoin_transaction';
    }
    /**
     * To share the contents of a <code>File</code> object with non-Stripe users, you
     * can create a <code>FileLink</code>. <code>FileLink</code>s contain a URL that
     * can be used to retrieve the contents of the file without authentication.
     *
     * @property string $id Unique identifier for the object.
     * @property string $object String representing the object's type. Objects of the same type share the same value.
     * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
     * @property bool $expired Whether this link is already expired.
     * @property null|int $expires_at Time at which the link expires.
     * @property string|\Stripe\File $file The file object this link points to.
     * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     * @property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     * @property null|string $url The publicly accessible URL to download the file.
     */
    class FileLink extends \Stripe\ApiResource
    {
        const OBJECT_NAME = 'file_link';
        use \Stripe\ApiOperations\All;
        use \Stripe\ApiOperations\Create;
        use \Stripe\ApiOperations\Retrieve;
        use \Stripe\ApiOperations\Update;
    }
}
namespace {
    class acfe_payment_hooks
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Stripe Cart
         */
        function stripe_cart($args, $field, $gateway, $post_id)
        {
        }
        /*
         * PayPal Cart
         */
        function paypal_cart($args, $field, $gateway, $post_id)
        {
        }
        /*
         * Payment Object
         */
        function payment_object($response, $field, $gateway, $post_id)
        {
        }
        function ajax_get_payment_field()
        {
        }
        function ajax_get_payment_field_results($options)
        {
        }
        function ajax_get_payment_field_choices($choices, $fields, $field_group)
        {
        }
        function get_field_label($field)
        {
        }
    }
    class acfe_location extends \acf_location
    {
        function initialize()
        {
        }
        function location_rules_types($groups)
        {
        }
        function compare_advanced($value, $rule, $allow_all = \false)
        {
        }
    }
    class acfe_location_post_author_role extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_post_title extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_operators($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_settings
    {
        function __construct()
        {
        }
        function load_options()
        {
        }
        function current_screen()
        {
        }
        function in_admin_header()
        {
        }
        function location_types($choices)
        {
        }
        function location_values($choices)
        {
        }
        function location_match($match, $rule, $screen)
        {
        }
    }
    class acfe_location_taxonomy_term_type extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_attachment_list
    {
        // vars
        var $post_id;
        var $field_groups = array();
        function __construct()
        {
        }
        function load_attachments()
        {
        }
        function add_attachments_meta_boxes()
        {
        }
        function render_meta_box($post_type, $metabox)
        {
        }
        function rule_values($choices)
        {
        }
        function rule_match($match, $rule, $screen)
        {
        }
    }
    class acfe_location_post_slug extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_operators($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_menu_item_type extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_user_list
    {
        // vars
        var $post_id;
        var $field_groups = array();
        function __construct()
        {
        }
        function load_users()
        {
        }
        function add_users_meta_boxes()
        {
        }
        function render_meta_box($post_type, $metabox)
        {
        }
        function rule_values($choices)
        {
        }
        function rule_match($match, $rule, $screen)
        {
        }
    }
    class acfe_location_post_date_time extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_operators($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_post_date extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_operators($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_menu_item_depth extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_operators($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_post_path extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_operators($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_taxonomy_term extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_taxonomy_term_slug extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_operators($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_post_author extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_taxonomy_term_parent extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_post_screen extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_post_time extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_operators($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_location_taxonomy_term_name extends \acfe_location
    {
        function initialize()
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_operators($choices, $rule)
        {
        }
        function rule_match($result, $rule, $screen)
        {
        }
    }
    class acfe_pro_instructions
    {
        function __construct()
        {
        }
        /*
         * Admin Head
         */
        function admin_head()
        {
        }
        /*
         * Render Field Instructions Settings
         */
        function render_field_instructions_settings($field)
        {
        }
        function field_wrapper_attributes($wrapper, $field)
        {
        }
    }
    class acfe_field_visibility
    {
        function __construct()
        {
        }
        /*
         * Admin Head
         */
        function admin_head()
        {
        }
        /*
         * Render Field Visibility Settings
         */
        function render_field_visibility_settings($field)
        {
        }
    }
    class acfe_field_required
    {
        function __construct()
        {
        }
        function field_settings($field)
        {
        }
        function validate_value($valid, $value, $field, $input)
        {
        }
    }
    class acfe_field_min_max
    {
        var $allowed_field_types = array();
        function __construct()
        {
        }
        function field_settings($field)
        {
        }
        function validate_value($valid, $value, $field, $input)
        {
        }
    }
    class acfe_pro_field_fc_grid
    {
        function __construct()
        {
        }
        function before_template($field, $layout, $is_preview)
        {
        }
        function defaults_field($field)
        {
        }
        function defaults_layout($layout)
        {
        }
        function render_field_settings($field)
        {
        }
        function render_layout_settings($field, $layout, $prefix)
        {
        }
        function field_wrapper($wrapper, $field)
        {
        }
        function div_values($div, $field)
        {
        }
        function load_fields($fields, $field)
        {
        }
        function prepare_layout($layout, $field, $i, $value, $prefix)
        {
        }
        function layout_div($div, $layout, $field, $i, $value, $prefix)
        {
        }
        function layout_icons($icons, $layout, $field)
        {
        }
        function render_field($field)
        {
        }
        function get_allowed_col($layout)
        {
        }
    }
    class acfe_field_image_selector extends \acf_field
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Validate Field
         */
        function validate_field($field)
        {
        }
        /*
         * Render Field Settings
         */
        function render_field_settings($field)
        {
        }
        /*
         * Update Field
         */
        function update_field($field)
        {
        }
        /*
         * Render Field
         */
        function render_field($field)
        {
        }
        /*
         * Format Value
         */
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_wysiwyg
    {
        function __construct()
        {
        }
        /*
         * Field Settings
         */
        function field_settings($field)
        {
        }
        /*
         * Field Wrapper
         */
        function field_wrapper($wrapper, $field)
        {
        }
        /*
         * Add Basic Enhanced Toolbar
         */
        function toolbars($toolbars)
        {
        }
        /*
         * WP Editor: Load Source Code plugin
         */
        function mce_plugins($plugins)
        {
        }
        /*
         * Source Code iFrame
         */
        function source_code_iframe()
        {
        }
        /*
         * WP TinyMCE: Force Buttons
         */
        function mce_buttons($buttons)
        {
        }
        /*
         * WP TinyMCE: Force Save onChange
         * This allow the source code button to correctly get latest value
         */
        function mce_init($init, $editor_id)
        {
        }
        /*
         * WP TinyMCE: Disable Tab / Add Media
         */
        function mce_settings($settings)
        {
        }
        /*
         * Prepare Toolsbars
         */
        function prepare_toolbars()
        {
        }
    }
    class acfe_field_image_sizes extends \acf_field
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Get Pretty Image Sizes
         */
        function get_pretty_image_sizes($allowed = array())
        {
        }
        /*
         * Render Field Settings
         */
        function render_field_settings($field)
        {
        }
        /*
         * Update Field
         */
        function update_field($field)
        {
        }
        /*
         * Prepare Field
         */
        function prepare_field($field)
        {
        }
        /*
         * Format Value
         */
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_relationship
    {
        function __construct()
        {
        }
        function field_settings($field)
        {
        }
        function field_wrapper($wrapper, $field)
        {
        }
        function render($field)
        {
        }
        function get_add_new_button_href($post_type)
        {
        }
        function relationship_ajax()
        {
        }
    }
    class acfe_currencies extends \acf_field
    {
        function __construct()
        {
        }
        /*
         * Render Field Settings
         */
        function render_field_settings($field)
        {
        }
        /*
         * Update Field
         */
        function update_field($field)
        {
        }
        /*
         * Prepare Field
         */
        function prepare_field($field)
        {
        }
        /*
         * Format Value
         */
        function format_value($value, $post_id, $field)
        {
        }
        /*
         * Get Choices
         */
        function get_choices($field)
        {
        }
    }
    class acfe_field_google_map
    {
        function __construct()
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
        function validate_field($field)
        {
        }
        function prepare_zoom($field)
        {
        }
        function field_group_settings_before($field)
        {
        }
        function field_group_settings($field)
        {
        }
        function field_group_wrapper($wrapper, $field)
        {
        }
        function render_field($field)
        {
        }
    }
    class acfe_block_types extends \acf_field
    {
        function __construct()
        {
        }
        function get_pretty_block_types($allowed = array())
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_pro_field_checkbox
    {
        public $instance;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Render Field
         */
        function render_field($field)
        {
        }
        /*
         * Render Field Toggle
         */
        function render_field_toggle($field)
        {
        }
        /*
         * Render Field Choices
         */
        function render_field_choices($field)
        {
        }
        /*
         * Walk Choices
         */
        function walk($choices = array(), $args = array(), $depth = 0)
        {
        }
        /*
         * Get Checkbox Input
         * Modified from acf_get_checkbox_input()
         */
        function get_checkbox_input($atts, $field)
        {
        }
    }
    class acfe_fields_field extends \acf_field
    {
        function __construct()
        {
        }
        function get_pretty_fields($allowed = array())
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_groups_field extends \acf_field
    {
        function __construct()
        {
        }
        function get_pretty_field_groups($allowed = array())
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_pro_field_radio
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Render Field
         */
        function render_field($field)
        {
        }
    }
    class acfe_payment_selector extends \acf_field
    {
        public $payment_field = \false;
        function initialize()
        {
        }
        function render_field_settings($field)
        {
        }
        function prepare_field($field)
        {
        }
        function render_field($field)
        {
        }
        function update_value($value, $post_id, $field)
        {
        }
        function get_payment_field($field)
        {
        }
        function find_payment_field($fields)
        {
        }
        function get_field_label($field)
        {
        }
    }
    class acfe_field_color_picker
    {
        // ACF 5.10 version
        var $is_old_acf = \false;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Enqueue Scripts
         */
        function input_admin_enqueue_scripts()
        {
        }
        /*
         * Validate Field
         */
        function validate_field($field)
        {
        }
        /*
         * Render Field Settings
         */
        function render_field_settings($field)
        {
        }
        function prepare_return_format($field)
        {
        }
        /*
         * Update Field
         */
        function update_field($field)
        {
        }
        /*
         * Render Field
         */
        function render_field($field)
        {
        }
        /*
         * Format Value
         */
        function format_value($value, $post_id, $field)
        {
        }
        /*
         * Get Colors
         */
        function get_colors($field)
        {
        }
    }
    class acfe_payment extends \acf_field
    {
        var $sub_fields;
        function initialize()
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function input_admin_enqueue_scripts()
        {
        }
        function prepare_field($field)
        {
        }
        function render_field($field)
        {
        }
        function render_value($field)
        {
        }
        function render_input($field)
        {
        }
        function render_gateways($field)
        {
        }
        function render_button($field)
        {
        }
        function payment_create()
        {
        }
        function stripe_create($args, $field, $post_id, $acf)
        {
        }
        function stripe_confirm()
        {
        }
        function paypal_create($args, $field, $post_id, $acf)
        {
        }
        function paypal_confirm()
        {
        }
        function payment_confirm($response, $field, $post_id, $acf)
        {
        }
        function validate_value($valid, $value, $field, $input)
        {
        }
        function update_value($value, $post_id, $field)
        {
        }
        function load_value($value, $post_id, $field)
        {
        }
        function is_payment_object($value = array())
        {
        }
        function validate_payment_object($value)
        {
        }
        function format_payment_object($value, $field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
        function format_single_value($value, $post_id, $field, $sub_field)
        {
        }
        function form_format_value($value, $_value, $post_id, $field)
        {
        }
        function delete_value($post_id, $field_name, $field)
        {
        }
        function include_stripe($field)
        {
        }
        function include_paypal()
        {
        }
        function has_gateway($field, $gateway, $only = \false)
        {
        }
        function get_gateway_api($field, $gateway, $name)
        {
        }
        function get_gateway_amount($amount, $currency, $gateway)
        {
        }
        function get_pretty_amount($amount, $currency, $gateway)
        {
        }
        function is_zero_decimal($currency)
        {
        }
        function is_sub_field($field)
        {
        }
    }
    class acfe_field_post_field extends \acf_field
    {
        function __construct()
        {
        }
        function render_field_settings($field)
        {
        }
        function field_wrapper_attributes($wrapper, $field)
        {
        }
        function load_field($field)
        {
        }
        function prepare_field($field)
        {
        }
    }
    class acfe_field_types extends \acf_field
    {
        function __construct()
        {
        }
        function get_pretty_field_types($allowed = array())
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_countries extends \acf_field
    {
        function __construct()
        {
        }
        /*
         * Render Field Settings
         */
        function render_field_settings($field)
        {
        }
        /*
         * Update Field
         */
        function update_field($field)
        {
        }
        /*
         * Prepare Field
         */
        function prepare_field($field)
        {
        }
        /*
         * Format Value
         */
        function format_value($value, $post_id, $field)
        {
        }
        /*
         * Get Choices
         */
        function get_choices($field)
        {
        }
    }
    class acfe_payment_cart extends \acf_field
    {
        public $payment_field = \false;
        function initialize()
        {
        }
        function render_field_settings($field)
        {
        }
        function prepare_field($field)
        {
        }
        function render_field($field)
        {
        }
        /*
         * Update Field
         */
        function update_field($field)
        {
        }
        /*
         * Validate Value
         */
        function validate_value($valid, $value, $field, $input)
        {
        }
        /*
         * Update Value
         */
        function update_value($value, $post_id, $field)
        {
        }
        function set_cart_data($value, $field)
        {
        }
        function validate_item($item, $field)
        {
        }
        function get_item_price($item, $field)
        {
        }
        function get_payment_field($field)
        {
        }
        function find_payment_field($fields)
        {
        }
        function get_field_label($field)
        {
        }
    }
    class acfe_field_flexible_content_layout_locations
    {
        function __construct()
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
        function validate_value($valid, $value, $field, $input)
        {
        }
        function ajax_render_location_rule()
        {
        }
        function defaults_field($field)
        {
        }
        function defaults_layout($layout)
        {
        }
        function render_field_settings($field)
        {
        }
        function render_layout_settings($flexible, $layout, $prefix)
        {
        }
        function render_location_group($layout, $l_prefix)
        {
        }
        function render_location_rule($rule, $prefix)
        {
        }
    }
    class acfe_options_pages extends \acf_field
    {
        function __construct()
        {
        }
        function get_pretty_options_pages($allowed = array())
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_tab
    {
        function __construct()
        {
        }
        function field_settings($field)
        {
        }
        function field_wrapper($wrapper, $field)
        {
        }
    }
    class acfe_languages extends \acf_field
    {
        function __construct()
        {
        }
        /*
         * Render Field Settings
         */
        function render_field_settings($field)
        {
        }
        /*
         * Update Field
         */
        function update_field($field)
        {
        }
        /*
         * Prepare Field
         */
        function prepare_field($field)
        {
        }
        /*
         * Format Value
         */
        function format_value($value, $post_id, $field)
        {
        }
        /*
         * Get Choices
         */
        function get_choices($field)
        {
        }
    }
    class acfe_field_date_range_picker extends \acf_field
    {
        var $sub_fields;
        function initialize()
        {
        }
        function render_field_settings($field)
        {
        }
        function input_admin_enqueue_scripts()
        {
        }
        function render_field($field)
        {
        }
        function update_value($value, $post_id, $field)
        {
        }
        function load_value($value, $post_id, $field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
        function delete_value($post_id, $field_name, $field)
        {
        }
        /*
         * Convert PHP Date to MomentJS format
         * https://stackoverflow.com/a/55173613
         */
        function convert_php_to_momentjs_format($php_date)
        {
        }
        function is_sub_field($field)
        {
        }
    }
    class acfe_field_menu_locations extends \acf_field
    {
        function __construct()
        {
        }
        function get_pretty_locations($allowed = array())
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
    }
    class acfe_templates extends \acf_field
    {
        function __construct()
        {
        }
        function get_pretty_templates($allowed = array())
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_menus extends \acf_field
    {
        function __construct()
        {
        }
        function get_pretty_menus($allowed = array())
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_pro_field_column
    {
        function __construct()
        {
        }
        function prepare_columns($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function field_wrapper_attributes($wrapper, $field)
        {
        }
    }
    class acfe_field_phone_number extends \acf_field
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Render Field Settings
         */
        function render_field_settings($field)
        {
        }
        /*
         * Register Scripts
         */
        function input_admin_enqueue_scripts()
        {
        }
        /*
         * Render Field
         */
        function render_field($field)
        {
        }
        function validate_value($valid, $value, $field, $input)
        {
        }
        function update_value($value, $post_id, $field)
        {
        }
        /*
         * Format Value
         */
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_pro_field_select
    {
        function __construct()
        {
        }
        function render_field_settings($field)
        {
        }
        function field_wrapper_attributes($wrapper, $field)
        {
        }
    }
    class acfe_pro_field_file
    {
        public $files = array();
        function __construct()
        {
        }
        function save_files($post_id = 0)
        {
        }
        function upload_files($ancestors = array())
        {
        }
        function update_nested_array(&$array, $ancestors, $value)
        {
        }
        /*
         * File Upload Dir
         */
        function upload_dir($uploads, $field)
        {
        }
        function field_settings($field)
        {
        }
        function render_field($field)
        {
        }
        function update_value($value, $post_id, $field)
        {
        }
        function validate_value($valid, $value, $field, $input)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_post_formats extends \acf_field
    {
        function __construct()
        {
        }
        /*
         * Render Field Settings
         */
        function render_field_settings($field)
        {
        }
        /*
         * Update Field
         */
        function update_field($field)
        {
        }
        /*
         * Prepare Field
         */
        function prepare_field($field)
        {
        }
        /*
         * Get Choices
         */
        function get_choices($field = array())
        {
        }
    }
    class acfe_field_date_picker
    {
        function __construct()
        {
        }
        function date_render_field_settings($field)
        {
        }
        function date_field_wrapper_attributes($wrapper, $field)
        {
        }
        function date_time_render_field_settings($field)
        {
        }
        function date_time_field_wrapper_attributes($wrapper, $field)
        {
        }
        function time_render_field_settings($field)
        {
        }
        function time_field_wrapper_attributes($wrapper, $field)
        {
        }
    }
    /**
     * Allows plugins to use their own update API.
     *
     * @author Easy Digital Downloads
     * @version 1.7.1
     */
    class ACFE_Updater
    {
        /**
         * Class constructor.
         *
         * @uses plugin_basename()
         * @uses hook()
         *
         * @param string  $_api_url     The URL pointing to the custom API endpoint.
         * @param string  $_plugin_file Path to the plugin file.
         * @param array   $_api_data    Optional data to send with API calls.
         */
        public function __construct($_api_url, $_plugin_file, $_api_data = \null)
        {
        }
        /**
         * Set up WordPress filters to hook into WP's update process.
         *
         * @uses add_filter()
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Check for Updates at the defined API endpoint and modify the update array.
         *
         * This function dives into the update API just when WordPress creates its update array,
         * then adds a custom API call and injects the custom plugin data retrieved from the API.
         * It is reassembled from parts of the native WordPress plugin update code.
         * See wp-includes/update.php line 121 for the original wp_update_plugins() function.
         *
         * @uses api_request()
         *
         * @param array   $_transient_data Update array build by WordPress.
         * @return array Modified update array with custom plugin data.
         */
        public function check_update($_transient_data)
        {
        }
        /**
         * Get repo API data from store.
         * Save to cache.
         *
         * @return \stdClass
         */
        public function get_repo_api_data()
        {
        }
        /**
         * show update nofication row -- needed for multisite subsites, because WP won't tell you otherwise!
         *
         * @param string  $file
         * @param array   $plugin
         */
        public function show_update_notification($file, $plugin)
        {
        }
        /**
         * Updates information on the "View version x.x details" page with custom data.
         *
         * @uses api_request()
         *
         * @param mixed   $_data
         * @param string  $_action
         * @param object  $_args
         * @return object $_data
         */
        public function plugins_api_filter($_data, $_action = '', $_args = \null)
        {
        }
        /**
         * Disable SSL verification in order to prevent download update failures
         *
         * @param array   $args
         * @param string  $url
         * @return object $array
         */
        public function http_request_args($args, $url)
        {
        }
        /**
         * If available, show the changelog for sites in a multisite install.
         */
        public function show_changelog()
        {
        }
        /**
         * Gets the plugin's cached version information from the database.
         *
         * @param string $cache_key
         * @return boolean|string
         */
        public function get_cached_version_info($cache_key = '')
        {
        }
        /**
         * Adds the plugin version information to the database.
         *
         * @param string $value
         * @param string $cache_key
         */
        public function set_version_info_cache($value = '', $cache_key = '')
        {
        }
    }
    class ACFE_Updates
    {
        public $license = '';
        public $url = 'https://www.acf-extended.com';
        public $item = 'ACF Extended Pro';
        public $updater = \false;
        /*
         * Construct
         */
        public function __construct()
        {
        }
        /*
         * Admin Menu
         */
        function admin_menu()
        {
        }
        /*
         * Admin Init
         */
        function admin_init()
        {
        }
        /*
         * Load
         */
        function load()
        {
        }
        /*
         * Admin Body Class
         */
        function admin_body_class($classes)
        {
        }
        /*
         * Activate
         */
        function activate()
        {
        }
        /*
         * Deactivate
         */
        function deactivate()
        {
        }
        /*
         * Check
         */
        function check()
        {
        }
        /*
         * Update License
         */
        function update_license($key = '')
        {
        }
        /*
         * Refresh
         */
        function refresh()
        {
        }
        /*
         * HTML
         */
        function html()
        {
        }
        function get_error_message($error)
        {
        }
    }
    class acfe_form_option
    {
        function __construct()
        {
        }
        function load($form, $current_post_id, $action)
        {
        }
        function make($form, $current_post_id, $action)
        {
        }
        function submit($_option_id, $form, $action)
        {
        }
        /*
         *  Option: Select2 Choices
         */
        function prepare_choices($field)
        {
        }
        function add_action($layouts)
        {
        }
    }
    class acfe_pro_global_field_condition
    {
        public $fields = \false;
        public $match = \false;
        function __construct()
        {
        }
        function admin_footer()
        {
        }
        function field_settings($field)
        {
        }
        function get_any_fields(&$fields, $field)
        {
        }
        function get_fields()
        {
        }
        function rule_types($choices)
        {
        }
        function rule_values($choices, $rule)
        {
        }
        function rule_match($match, $rule, $screen)
        {
        }
        function validate_field_group($field_group)
        {
        }
        function load_fields($fields, $parent)
        {
        }
        function get_field_group_conditions($field_group)
        {
        }
    }
    class acfe_dynamic_module
    {
        // vars
        public $active = \false, $settings = '', $post_type = '', $label = '', $textdomain = '', $tool = '', $columns = array(), $tools = array();
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Initialize
         */
        function initialize()
        {
        }
        /*
         * Init
         */
        function actions()
        {
        }
        /*
         * Get Name
         */
        function get_name($post_id)
        {
        }
        /*
         * Init
         */
        function init()
        {
        }
        /*
         * Current Screen
         */
        function _current_screen()
        {
        }
        function current_screen()
        {
        }
        function post_screen()
        {
        }
        function post_load()
        {
        }
        function post_new_load()
        {
        }
        function submenu_file($submenu_file)
        {
        }
        function edit_screen()
        {
        }
        function edit_load()
        {
        }
        function bulk_actions($actions)
        {
        }
        function handle_bulk_actions($redirect, $action, $post_ids)
        {
        }
        /*
         * Post Head
         */
        function _post_head()
        {
        }
        function post_head()
        {
        }
        /*
         * Post Submit Box
         */
        function _post_submitbox_misc_actions($post)
        {
        }
        function post_submitbox_misc_actions($post)
        {
        }
        /*
         * Post Enter Title Here
         */
        function post_enter_title_here($placeholder, $post)
        {
        }
        /*
         * Post Footer
         */
        function _post_footer()
        {
        }
        function post_footer()
        {
        }
        /*
         * Edit Columns
         */
        function _edit_columns($columns)
        {
        }
        function edit_columns($columns)
        {
        }
        /*
         * Edit Columns HTML
         */
        function edit_columns_html($column, $post_id)
        {
        }
        /*
         * Display Post States
         */
        function display_post_states($post_states, $post)
        {
        }
        /*
         * Edit Row Actions
         */
        function _edit_row_actions($actions, $post)
        {
        }
        function edit_row_actions($actions, $post)
        {
        }
        function edit_row_actions_view($post, $name)
        {
        }
        /*
         * Edit Foot
         */
        function edit_footer()
        {
        }
        /*
         * ACF Save post
         */
        function _save_post($post_id)
        {
        }
        function save_post($post_id)
        {
        }
        /*
         * Trashed Post Type
         */
        function _trashed_post($post_id)
        {
        }
        function trashed_post($post_id)
        {
        }
        /*
         * Untrashed Post Type
         */
        function _untrashed_post($post_id)
        {
        }
        function untrashed_post($post_id)
        {
        }
        /*
         * Import
         */
        function import($name, $args)
        {
        }
        /*
         * Export
         */
        function export_choices()
        {
        }
        function export_data($name)
        {
        }
        function export_php($data)
        {
        }
        /*
         * Reset
         */
        function reset()
        {
        }
        /*
         * Exclude Post Type
         */
        function get_post_types($post_types, $args)
        {
        }
        /*
         * Get Field Labels Recursive
         */
        function get_fields_labels_recursive(&$array, $field)
        {
        }
        /*
         * Add Local Field Group
         */
        function add_local_field_group()
        {
        }
    }
    class acfe_dynamic_templates extends \acfe_dynamic_module
    {
        /*
         * Initialize
         */
        function initialize()
        {
        }
        /*
         * Actions
         */
        function actions()
        {
        }
        /*
         * Get Name
         */
        function get_name($post_id)
        {
        }
        /*
         * Init
         */
        function init()
        {
        }
        /*
         * Validate Values
         */
        function validate_values($valid, $value, $field, $input)
        {
        }
        /*
         * Post New Load
         */
        function post_new_load()
        {
        }
        /*
         * Post Load
         */
        function post_load()
        {
        }
        /*
         * Post Metaboxes
         */
        function add_post_metaboxes()
        {
        }
        /*
         * Edit Form After Title
         */
        function edit_form_after_title()
        {
        }
        /*
         * Add Metaboxes
         */
        function add_metaboxes($post_type, $post, $field_groups)
        {
        }
        /*
         * Render Metabox: Rules
         */
        function render_meta_box_rules($post, $metabox)
        {
        }
        /*
         * Render Metabox Instructions
         */
        function render_meta_box_instructions($post, $metabox)
        {
        }
        /*
         * Edit Columns HTML
         */
        function edit_columns_html($column, $post_id)
        {
        }
        /*
         * ACF Save post
         */
        function save_post($post_id)
        {
        }
        /*
         * Save
         */
        function save($name, $post_id)
        {
        }
        /*
         * Import
         */
        function import($name, $args)
        {
        }
        /*
         * Import Fields
         */
        function import_fields($name, $args, $post_id)
        {
        }
        /*
         * Export: Choices
         */
        function export_choices()
        {
        }
        /*
         * Export: Data
         */
        function export_data($name)
        {
        }
        /*
         * Export: PHP
         */
        function export_php($data)
        {
        }
        /*
         * Location: Type
         */
        function location_types($choices)
        {
        }
        /*
         * Location: Operators
         */
        function location_operators($operators, $rule)
        {
        }
        /*
         * Location: Values
         */
        function location_values($choices)
        {
        }
        /*
         * Match: Post | Term | User Target Screen
         */
        function location_match_target($match, $rule, $screen, $field_group)
        {
        }
        /*
         * Match: Template
         */
        function location_match_template($match, $rule, $screen, $field_group)
        {
        }
        /*
         * Local Template: Load Post | Term | User Target Screen
         */
        function local_template_load_target()
        {
        }
        /*
         * Apply Values
         */
        function apply_values($template)
        {
        }
        /*
         * Get Target Locations
         */
        function get_target_locations($field_groups, $post_id)
        {
        }
        /*
         * Validate Post ID
         */
        function validate_post_id($post_id)
        {
        }
        /*
         * Validate Field Group Conditions
         */
        function validate_field_group($field_group)
        {
        }
        /*
         * Add Local Field Group
         */
        function add_local_field_group()
        {
        }
    }
    class acfe_pro_scripts
    {
        // vars
        var $script;
        var $has_fields = \false;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Admin Menu
         */
        function admin_menu()
        {
        }
        /*
         * HTML
         */
        function html()
        {
        }
        /*
         * Load
         */
        function load()
        {
        }
        /*
         * Post Enqueue Scripts
         */
        function post_enqueue_scripts()
        {
        }
        /*
         * Post Head
         */
        function post_head()
        {
        }
        function postbox_submitdiv()
        {
        }
        function postbox_events()
        {
        }
        function postbox_acf($post, $metabox)
        {
        }
        function post_html()
        {
        }
        function edit_html()
        {
        }
        function is_post()
        {
        }
        function is_edit()
        {
        }
        /*
         * Ajax Query
         */
        function ajax_query()
        {
        }
        /*
         * Ajax Default Response
         */
        function ajax_response($script)
        {
        }
        /*
         * Validate Data
         */
        function validate_data($data, $script)
        {
        }
        /*
         * Validate Confirm
         */
        function validate_confirm($confirm, $script)
        {
        }
        /*
         * Validate Save Post
         */
        function validate_save_post()
        {
        }
    }
    class acfe_pro_rewrite_rules
    {
        var $rewrite_rules;
        var $rewrite_rules_ui;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Admin Menu
         */
        function admin_menu()
        {
        }
        /*
         * Load
         */
        function load()
        {
        }
        /*
         * HTML
         */
        function html()
        {
        }
        /*
         * Print Regex
         */
        function print_regex($regex, $idx, $is_target = \false)
        {
        }
        /*
         * Wrap Repeater
         */
        function wrap_repeater($regex, $value)
        {
        }
        /*
         * Collect Groups
         */
        function collect_groups($regex_tree)
        {
        }
        /*
         * Parse Substitution
         */
        function parse_substitution($substitution)
        {
        }
        /*
         * Parse
         */
        function parse($regex)
        {
        }
    }
    /*
     * ACFE Regex Exception
     */
    class ACFE_Regex_Exception extends \Exception
    {
        protected $idx = \null;
        protected $regex = \null;
        public function __construct($message, $idx, $regex)
        {
        }
        public function __toString()
        {
        }
    }
    /*
     * ACFE Regex Group
     */
    class ACFE_Regex_Group extends \ArrayObject
    {
        public $counter = \null;
        public $repeater = \null;
        public function __construct($counter = 0)
        {
        }
        public function __toString()
        {
        }
    }
    /*
     * ACFE Regex Price
     */
    class ACFE_Regex_Piece
    {
        public $repeater = \null;
        public $value = \null;
        public function __toString()
        {
        }
    }
    /*
     * ACFE Regex String
     */
    class ACFE_Regex_String extends \ACFE_Regex_Piece
    {
        public function __construct($value = '')
        {
        }
    }
    /*
     * ACFE Regex Char
     */
    class ACFE_Regex_Char extends \ACFE_Regex_Piece
    {
        public function __construct($value = '')
        {
        }
    }
    /*
     * ACFE Regex Escape
     */
    class ACFE_Regex_Escape extends \ACFE_Regex_Piece
    {
        public function __construct($value = '')
        {
        }
        public function __toString()
        {
        }
    }
    /*
     * ACFE Regex Special
     */
    class ACFE_Regex_Special extends \ACFE_Regex_Piece
    {
        public $desc = \null;
        public function __construct($value = '', $desc = '')
        {
        }
    }
    /*
     * ACFE Regex Any
     */
    class ACFE_Regex_Any extends \ACFE_Regex_Special
    {
        public function __construct()
        {
        }
    }
    /*
     * ACFE Regex End
     */
    class ACFE_Regex_End extends \ACFE_Regex_Special
    {
        public function __construct()
        {
        }
    }
    /*
     * ACFE Regex Repeater
     */
    class ACFE_Regex_Repeater extends \ACFE_Regex_Piece
    {
        public $min_len = \null;
        public $max_len = \null;
        public $is_greedy_switched = \null;
        public function __construct($value = '', $min_len = \null, $max_len = \null, $is_greedy_switched = \false)
        {
        }
    }
    /*
     * ACFE Regex Range
     */
    class ACFE_Regex_Range extends \ACFE_Regex_Piece
    {
        public function __construct($value = '')
        {
        }
    }
    class acfe_pro_force_sync
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Current Screen
         */
        function current_screen()
        {
        }
        /*
         * Sync Field Groups
         */
        function sync_field_groups($silent = \false)
        {
        }
        /*
         * Sync Deleted Field Groups
         */
        function sync_deleted_field_groups($silent = \false)
        {
        }
        /*
         * Get Desync Field Groups
         */
        function get_desync_field_groups()
        {
        }
        /*
         * Remove Desync
         */
        function remove_desync($field_groups = array())
        {
        }
        /*
         * Add Admin Sync Notice
         */
        function add_admin_sync_notice($field_groups)
        {
        }
        /*
         * Add Admin Deleted Notice
         */
        function add_admin_deleted_notice($field_groups)
        {
        }
    }
    class acfe_pro_screen_layouts
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        function load()
        {
        }
        function admin_head()
        {
        }
        function body_class($classes)
        {
        }
        function postbox($post)
        {
        }
    }
    class acfe_pro_dev
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        function post_submitbox_misc_actions($post)
        {
        }
        function term_submitbox_misc_actions($term)
        {
        }
        function user_submitbox_misc_actions($user)
        {
        }
        function settings_submitbox_misc_actions($page)
        {
        }
        function options_page_submitbox_misc_actions($page)
        {
        }
        function posts_submitbox_misc_actions($post_type)
        {
        }
        function terms_submitbox_misc_actions($taxonomy)
        {
        }
        function attachments_submitbox_misc_actions()
        {
        }
        function users_submitbox_misc_actions()
        {
        }
        function add_list_meta_boxes()
        {
        }
        function render_metabox_submit($object, $metabox)
        {
        }
    }
    class acfe_script
    {
        var $active = \true, $name = '', $title = '', $description = '', $recursive = \false, $category = \false, $author = \false, $link = \false, $version = \false, $capability = \null, $field_groups = array();
        var $index = -1, $data = array(), $type = 'request', $confirm = \null, $stats = array('total' => 0, 'left' => 0);
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Initialize
         */
        function initialize()
        {
        }
        /*
         * Validate
         */
        function validate()
        {
        }
        /*
         * Start
         */
        function start()
        {
        }
        /*
         * Request
         */
        function request()
        {
        }
        /*
         * Stop
         */
        function stop()
        {
        }
        /*
         * Admin Load
         */
        function admin_load()
        {
        }
        /*
         * Admin Head
         */
        function admin_head()
        {
        }
        /*
         * Admin Enqueue Scripts
         */
        function admin_enqueue_scripts()
        {
        }
        /*
         * Send Response
         */
        function send_response($args = array())
        {
        }
        /*
         * Parse Message
         */
        function parse_message(&$args)
        {
        }
        /*
         * Parse Link
         */
        function parse_link(&$args)
        {
        }
        /*
         * Parse Debug
         */
        function parse_debug(&$args)
        {
        }
        /*
         * Parse Event
         */
        function parse_event(&$args)
        {
        }
    }
    class acfe_script_export_posts extends \acfe_script
    {
        /*
         * Init
         */
        function initialize()
        {
        }
        /*
         * Start
         */
        function start()
        {
        }
        /*
         *
         */
        function stop()
        {
        }
        /*
         * Request
         */
        function request()
        {
        }
        /*
         * Count Posts
         */
        function count_posts($post_type)
        {
        }
    }
    class acfe_script_count_posts extends \acfe_script
    {
        /*
         * Init
         */
        function initialize()
        {
        }
        /*
         * Start
         */
        function start()
        {
        }
        /*
         * Stop
         */
        function stop()
        {
        }
        /*
         * Request
         */
        function request()
        {
        }
    }
    class acfe_script_single_meta_converter extends \acfe_script
    {
        /*
         * Init
         */
        function initialize()
        {
        }
        /*
         * Admin Head
         */
        function admin_head()
        {
        }
        /*
         * Validate
         */
        function validate()
        {
        }
        /*
         * Start
         */
        function start()
        {
        }
        /*
         *
         */
        function stop()
        {
        }
        /*
         * Request
         */
        function request()
        {
        }
        /*
         * Process: Post Types
         */
        function process_post_types()
        {
        }
        /*
         * Process: Taxonomies
         */
        function process_taxonomies()
        {
        }
        /*
         * Process: Users
         */
        function process_users()
        {
        }
        /*
         * Process: Options Pages
         */
        function process_options_pages()
        {
        }
        /*
         * Convert Meta
         */
        function convert_meta($post_id, $confirm = \false)
        {
        }
        /*
         * Convert: Normal > Single
         */
        function convert_to_single($post_id, $confirm)
        {
        }
        /*
         * Convert: Single > Normal
         */
        function convert_to_normal($post_id, $confirm)
        {
        }
        /*
         * Count Posts
         */
        function count_posts($post_type)
        {
        }
        /*
         * Count Terms
         */
        function count_terms($taxonomy)
        {
        }
        /*
         * Count Users
         */
        function count_users($user_role)
        {
        }
    }
    class acfe_script_import_posts extends \acfe_script
    {
        /*
         * Init
         */
        function initialize()
        {
        }
        /*
         * Validate
         */
        function validate()
        {
        }
        /*
         * Start
         */
        function start()
        {
        }
        /*
         *
         */
        function stop()
        {
        }
        /*
         * Request
         */
        function request()
        {
        }
    }
    class acfe_script_orphan_meta_cleaner extends \acfe_script
    {
        /*
         * Init
         */
        function initialize()
        {
        }
        /*
         * Admin Head
         */
        function admin_head()
        {
        }
        /*
         * Validate
         */
        function validate()
        {
        }
        /*
         * Start
         */
        function start()
        {
        }
        /*
         * Stop
         */
        function stop()
        {
        }
        /*
         * Request
         */
        function request()
        {
        }
        /*
         * Process: Post Types
         */
        function process_post_types()
        {
        }
        /*
         * Process: Taxonomies
         */
        function process_taxonomies()
        {
        }
        /*
         * Process: Users
         */
        function process_users()
        {
        }
        /*
         * Process: Options Pages
         */
        function process_options_pages()
        {
        }
        /*
         * Clean Meta
         */
        function clean_meta($post_id, $confirm = \false)
        {
        }
        /*
         * Count Posts
         */
        function count_posts($post_type)
        {
        }
        /*
         * Count Terms
         */
        function count_terms($taxonomy)
        {
        }
        /*
         * Count Users
         */
        function count_users($user_role)
        {
        }
    }
    class acfe_pro_dynamic_options_pages
    {
        public $post_type;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Register
         */
        function register($args, $name)
        {
        }
        /*
         * Save Args
         */
        function save_args($args, $name, $post_id)
        {
        }
        /*
         * Save
         */
        function save($name, $args, $post_id)
        {
        }
        /*
         * Import Fields
         */
        function import_fields($name, $args, $post_id)
        {
        }
        /*
         * Add Local Field Group
         */
        function add_local_field_group()
        {
        }
    }
    class acfe_pro_dynamic_post_types
    {
        public $post_type;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Register
         */
        function register($args, $name)
        {
        }
        /*
         * Save Args
         */
        function save_args($args, $name, $post_id)
        {
        }
        /*
         * Save
         */
        function save($name, $args, $post_id)
        {
        }
        /*
         * Import Fields
         */
        function import_fields($name, $args, $post_id)
        {
        }
        /*
         * Add Local Field Group
         */
        function add_local_field_group()
        {
        }
    }
    class acfe_pro_dynamic_block_types
    {
        public $post_type;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Register
         */
        function register($args, $name)
        {
        }
        /*
         * Save Args
         */
        function save_args($args, $name, $post_id)
        {
        }
        /*
         * Save
         */
        function save($name, $args, $post_id)
        {
        }
        /*
         * Import Fields
         */
        function import_fields($name, $args, $post_id)
        {
        }
        /*
         * Add Local Field Group
         */
        function add_local_field_group()
        {
        }
    }
    class acfe_pro_scripts_list extends \WP_List_Table
    {
        /**
         * Constructor
         *
         */
        public function __construct()
        {
        }
        /**
         * Retrieve data from the database
         *
         * @param int $per_page
         * @param int $page_number
         *
         * @return mixed
         */
        public static function get_options($per_page = 100, $page_number = 1, $search = '')
        {
        }
        /**
         * Returns the count of records in the database.
         *
         * @return null|string
         */
        public static function record_count($search = '')
        {
        }
        /** Text displayed when no data is available */
        public function no_items()
        {
        }
        protected function get_views()
        {
        }
        /**
         * Render a column when no column specific method exist.
         *
         * @param array $item
         * @param string $column_name
         *
         * @return mixed
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Method for name column
         *
         * @param array $item an array of DB data
         *
         * @return string
         */
        public function column_title($item)
        {
        }
        public function column_description($item)
        {
        }
        /**
         *  Associative array of columns
         *
         * @return array
         */
        public function get_columns()
        {
        }
        /**
         * Columns to make sortable.
         *
         * @return array
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Handles data query and filter, sorting, and pagination.
         */
        public function prepare_items()
        {
        }
    }
    class acfe_pro_dynamic_forms
    {
        public $post_type;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * TinyMCE CSS
         */
        function mce_css($css)
        {
        }
        /*
         * Shortcode
         */
        function ajax_shortcode()
        {
        }
        /*
         * Register
         */
        function register($register, $name, $id)
        {
        }
        /*
         * Save
         */
        function save($name, $post_id)
        {
        }
        /*
         * Add Local Field Group
         */
        function add_local_field_group()
        {
        }
    }
    class acfe_pro_classic_editor
    {
        function __construct()
        {
        }
        /*
         * WP Enqueue Scripts
         */
        function wp_enqueue_scripts()
        {
        }
        function remove_gutenberg_hooks()
        {
        }
    }
    class acfe_pro_dynamic_taxonomies
    {
        public $post_type;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Register
         */
        function register($args, $name)
        {
        }
        /*
         * Save Args
         */
        function save_args($args, $name, $post_id)
        {
        }
        /*
         * Save
         */
        function save($name, $args, $post_id)
        {
        }
        /*
         * Import Fields
         */
        function import_fields($name, $args, $post_id)
        {
        }
        /*
         * Add Local Field Group
         */
        function add_local_field_group()
        {
        }
    }
    class acfe_pro_compatibility
    {
        function __construct()
        {
        }
        function init()
        {
        }
        /*
         * ACF Extended: Settings
         */
        function update_settings()
        {
        }
        /*
         * ACF Extended: 0.8.8.1 - Change Forms Field category to 'ACF'
         */
        function form_field_type_category($category)
        {
        }
        /*
         * ACF Extended: 0.8.8.2
         * WP GraphQL ACF Supported Fields
         */
        function wpgraphql_supported_fields($fields)
        {
        }
        /*
         * ACF Extended: 0.8.8.4
         * WP GraphQL ACF Register Field
         */
        function wpgraphql_register_field($field_config, $type_name, $field_name, $config)
        {
        }
    }
    class acfe_pro_assets
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Init
         */
        function init()
        {
        }
        /*
         * WP Admin Enqueue Scripts
         */
        function wp_admin_enqueue_scripts()
        {
        }
        /*
         * ACF Admin Enqueue Scripts
         */
        function acf_admin_enqueue_scripts()
        {
        }
    }
    class ACFE_Pro
    {
        function __construct()
        {
        }
        /*
         * Init
         */
        function init()
        {
        }
        /*
         * Include Field Types
         */
        function include_field_types()
        {
        }
        /*
         * Include Form Actions
         */
        function include_form_actions()
        {
        }
        /*
         * Include Admin Tools
         */
        function include_admin_tools()
        {
        }
    }
    class ACFE
    {
        // Vars
        var $version = '0.8.8.7';
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Initialize
         */
        function initialize()
        {
        }
        /*
         * Load
         */
        function load()
        {
        }
        /*
         * Init
         */
        function init()
        {
        }
        /*
         * Incldude Fields
         */
        function include_fields()
        {
        }
        /*
         * Include Field Types
         */
        function include_field_types()
        {
        }
        /*
         * Include Admin Tools
         */
        function include_admin_tools()
        {
        }
        /*
         * Include Admin Tools Late
         */
        function include_admin_tools_late()
        {
        }
        /*
         * Set Constants
         */
        function constants($array = array())
        {
        }
        /*
         * Set Settings
         */
        function settings($array = array())
        {
        }
        /*
         * ACF
         */
        function acf()
        {
        }
    }
    class acfe_hooks
    {
        public $field_group;
        public $upload_field = \false;
        function __construct()
        {
        }
        function set_form_data()
        {
        }
        function pre_save_post($post_id = 0)
        {
        }
        function save_post($post_id = 0)
        {
        }
        function do_save_post($post_id = 0, $pre = \false)
        {
        }
        function validate_save_post()
        {
        }
        function decode_object($post_id)
        {
        }
        /*
         * Load Field Groups
         */
        function load_field_groups($field_groups)
        {
        }
        /*
         * Pre Render Fields
         */
        function pre_render_fields($fields, $post_id)
        {
        }
        /*
         * Pre Render Fields
         */
        function render_fields($fields, $post_id)
        {
        }
        /*
         *  Field Wrapper Attributes
         */
        function field_wrapper_attributes($wrapper, $field)
        {
        }
        /*
         *  Load Fields
         */
        function load_fields($fields, $parent)
        {
        }
        /*
         *  Load Field
         */
        function load_field($field)
        {
        }
        function location_screen($screen)
        {
        }
        function form_data()
        {
        }
        /*
         * Attachment Upload
         */
        function attachment_upload($errors, $file, $field)
        {
        }
        function handle_upload_dir($uploads)
        {
        }
        function handle_upload_file($file)
        {
        }
    }
    class acfe_screen_options_page
    {
        // vars
        var $page;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Load
         */
        function load()
        {
        }
        /*
         * Admin Head
         */
        function admin_head()
        {
        }
    }
    class acfe_screen_attachment
    {
        // vars
        var $post_id;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Attachments: Load
         */
        function attachments_load()
        {
        }
        /*
         * Attachments: Footer
         */
        function attachments_footer()
        {
        }
        /*
         * Attachments: Do Meta Boxes
         */
        function attachments_do_meta_boxes()
        {
        }
    }
    class acfe_screen_user
    {
        // vars
        var $user_id;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * User New: Load
         */
        function user_new_load()
        {
        }
        /*
         * User New: Meta Boxes
         */
        function user_new_meta_boxes($user)
        {
        }
        /*
         * User: Load
         */
        function user_load()
        {
        }
        /*
         * User: Meta Boxes
         */
        function user_meta_boxes($user)
        {
        }
        /*
         * Users: Load
         */
        function users_load()
        {
        }
        /*
         * Users: Footer
         */
        function users_footer()
        {
        }
        /*
         * Users: Do Meta Boxes
         */
        function users_do_meta_boxes()
        {
        }
    }
    class acfe_screen_post
    {
        // vars
        var $post_type;
        var $post_id;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Post: Load
         */
        function post_load()
        {
        }
        /*
         * Post: Meta Boxes
         */
        function add_post_meta_boxes($post_type, $post)
        {
        }
        /*
         * Posts: Load
         */
        function posts_load()
        {
        }
        /*
         * Posts: Admin Footer
         */
        function posts_footer()
        {
        }
        /*
         * Posts: Do Meta Boxes
         */
        function posts_do_meta_boxes()
        {
        }
    }
    class acfe_screen_settings
    {
        // vars
        var $page;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Load
         */
        function load()
        {
        }
        /*
         * Admin Footer
         */
        function admin_footer()
        {
        }
    }
    class acfe_screen_taxonomy
    {
        // vars
        var $taxonomy;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Term: Load
         */
        function term_load()
        {
        }
        /*
         * Term: Meta Boxes
         */
        function add_term_meta_boxes($term, $taxonomy)
        {
        }
        /*
         * Term: Do Meta Boxes
         */
        function do_term_meta_boxes($term, $taxonomy)
        {
        }
        /*
         * Terms: Load
         */
        function terms_load()
        {
        }
        /*
         * Terms: Admin Footer
         */
        function terms_footer()
        {
        }
        /*
         * Terms: Do Meta Boxes
         */
        function terms_do_meta_boxes()
        {
        }
    }
    class acfe_settings
    {
        public $settings = array();
        /*
         * Construct
         */
        function __construct()
        {
        }
        function get($selector = \null, $default = \null)
        {
        }
        function set($selector = \null, $value = \null, $append = \false)
        {
        }
        function clear($selector = \null)
        {
        }
        function delete($selector = \null)
        {
        }
        function append($selector = \null, $value = \null)
        {
        }
        function array_get($array, $key, $default = \null)
        {
        }
        function array_set(&$array, $key, $value)
        {
        }
        function array_append(&$array, $key, $value)
        {
        }
        function array_clear(&$array, $key)
        {
        }
        function array_remove(&$array, $keys)
        {
        }
        function update()
        {
        }
    }
    class acfe_field_group_advanced
    {
        function __construct()
        {
        }
        /*
         * Admin Head
         */
        function admin_head()
        {
        }
        /*
         * Advanced Settings
         */
        function render_settings($field_group)
        {
        }
    }
    class acfe_field_group_hide_on_screen
    {
        function __construct()
        {
        }
        function admin_head()
        {
        }
        /*
         * Hide on screen: Settings
         */
        function prepare_hide_on_screen($field)
        {
        }
        /*
         * Add Metaboxes: Apply all Field Groups styles
         * Fix ACF only which only use the first Field Group style
         */
        function acf_add_meta_boxes($post_type, $post, $field_groups)
        {
        }
        /*
         * Ajax Check Screen
         * Merge hide on screen settings instead of using the first field group style only
         */
        function ajax_check_screen()
        {
        }
        /*
         * Hide Block Editor
         */
        function hide_block_editor()
        {
        }
    }
    class acfe_field_group_instruction_placement
    {
        function __construct()
        {
        }
        function admin_head()
        {
        }
        /*
         * Instruction Placement: Settings
         */
        function prepare_instruction_placement($field)
        {
        }
        /*
         * Instruction Placement: Tooltip 0.8.7.5 Compatibility
         */
        function validate_tooltip_compatibility($field_group)
        {
        }
    }
    class ACFE_Field_Group
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Reorder Field Types
         */
        function reorder_field_types($groups)
        {
        }
        /*
         * Admin Head
         */
        function admin_head()
        {
        }
        /*
         * Submit Box
         */
        function submitbox($post)
        {
        }
        /*
         * Render Sidebar
         */
        function render_sidebar_metabox()
        {
        }
        /**
         * Default AutoSync
         */
        function validate_default_autosync($field_group)
        {
        }
    }
    class acfe_field_group_meta
    {
        function __construct()
        {
        }
        /**
         * Admin Head
         */
        function admin_head()
        {
        }
        /*
         * Render Metabox
         */
        function render_metabox()
        {
        }
        /*
         * Render: Data button
         */
        function render_data($field)
        {
        }
        /*
         * Prepare Meta
         */
        function prepare_meta()
        {
        }
    }
    class ACFE_Field_Groups_Local
    {
        var $view = '';
        var $local_field_groups = array();
        var $autosync_field_groups = array();
        var $old_version = \false;
        var $acfe_admin_field_groups = '';
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Current Screen
         */
        function current_screen()
        {
        }
        /*
         * Views
         */
        function views($views)
        {
        }
        /*
         * Admin Footer
         */
        function admin_footer()
        {
        }
        /*
         * Bulk Actions
         */
        function bulk_actions($actions)
        {
        }
        /*
         * Handle Bulk Actions
         */
        function handle_bulk_actions($redirect, $action, $post_ids)
        {
        }
        function get_local_field_groups()
        {
        }
    }
    class acfe_field_group_permissions
    {
        function __construct()
        {
        }
        /*
         * Prepare Field Group
         */
        function prepare_field_group($field_group)
        {
        }
    }
    class ACFE_Field_Groups
    {
        var $view = '';
        var $sync = '';
        var $old_version = \false;
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Current Screen
         */
        function current_screen()
        {
        }
        /*
         * Table Columns
         */
        function table_columns($columns)
        {
        }
        /*
         * Table Columns HTML
         */
        function table_columns_html($column, $post_id)
        {
        }
        function render_table_column($column, $field_group)
        {
        }
        /*
         * Column: Source
         */
        function render_admin_table_column_source_html($field_group)
        {
        }
        /*
         * Column: Load
         */
        function render_admin_table_column_load_html($field_group)
        {
        }
        /*
         * Column: PHP Sync HTML
         */
        function render_admin_table_column_php_html($field_group)
        {
        }
        function get_php_data($field_group)
        {
        }
        /*
         * Column: Json Sync HTML
         */
        function render_admin_table_column_json_html($field_group)
        {
        }
        function get_json_data($field_group)
        {
        }
        /*
         * Hide Default Columns
         */
        function default_hidden_columns($hidden, $screen)
        {
        }
        /*
         * Posts Per Page
         */
        function posts_per_page()
        {
        }
        /*
         * Row Actions
         */
        function row_actions($actions, $post)
        {
        }
        /*
         * Post States
         */
        function post_states($states, $post)
        {
        }
        /*
         * Admin Footer
         */
        function admin_footer()
        {
        }
        /*
         * Bulk Actions
         */
        function bulk_actions($actions)
        {
        }
        /*
         * Handle Bulk Actions
         */
        function handle_bulk_actions($redirect, $action, $post_ids)
        {
        }
        /*
         * Helper: Human Readable File
         */
        function get_human_readable_file_location($file, $found = \true, $br = \true, $prefix = \true)
        {
        }
        /*
         * Seamless Metabox
         */
        function seamless_metabox($post_type, $post, $field_groups)
        {
        }
        function get_sync_compatibility()
        {
        }
    }
    class acfe_field_group_category
    {
        function __construct()
        {
        }
        /*
         * Register Taxonomy
         */
        function init()
        {
        }
        /*
         * Admin Menu
         */
        function admin_menu()
        {
        }
        /*
         * Menu Parent File
         */
        function parent_file($parent_file)
        {
        }
        /*
         * ACF Field Group: Columns
         */
        function columns($columns)
        {
        }
        /*
         * ACF Field Group: Column HTML
         */
        function column_html($column, $post_id)
        {
        }
        /*
         * ACF Field Group: Views
         */
        function views($views)
        {
        }
        /*
         * ACF Exclude Field Group Category from available taxonomies
         */
        function acf_get_taxonomies($taxonomies, $args)
        {
        }
        /*
         * Prepare Export
         */
        function prepare_for_export($field_group)
        {
        }
        /*
         * Prepare Import
         */
        function prepare_for_import($field_group)
        {
        }
    }
    class acfe_field_group_display_title
    {
        function __construct()
        {
        }
        /*
         * Prepare Field Group
         */
        function prepare_field_group($field_group)
        {
        }
    }
    class acfe_dynamic_taxonomies_import extends \acfe_module_import
    {
        function initialize()
        {
        }
    }
    class acfe_dynamic_forms_export extends \acfe_module_export
    {
        function initialize()
        {
        }
    }
    class acfe_dynamic_block_types_import extends \acfe_module_import
    {
        function initialize()
        {
        }
    }
    class acfe_dynamic_post_types_import extends \acfe_module_import
    {
        function initialize()
        {
        }
    }
    class acfe_dynamic_options_pages_import extends \acfe_module_import
    {
        function initialize()
        {
        }
    }
    class acfe_dynamic_options_pages_export extends \acfe_module_export
    {
        function initialize()
        {
        }
    }
    class acfe_dynamic_forms_import extends \acfe_module_import
    {
        function initialize()
        {
        }
    }
    class acfe_dynamic_block_types_export extends \acfe_module_export
    {
        function initialize()
        {
        }
    }
    class acfe_dynamic_post_types_export extends \acfe_module_export
    {
        function initialize()
        {
        }
    }
    class acfe_field_groups_export extends \ACF_Admin_Tool
    {
        function initialize()
        {
        }
        function load()
        {
        }
        function get_action()
        {
        }
    }
    class acfe_dynamic_taxonomies_export extends \acfe_module_export
    {
        function initialize()
        {
        }
    }
    class acfe_field_groups_local_export extends \ACF_Admin_Tool
    {
        function initialize()
        {
        }
        function load()
        {
        }
        function html()
        {
        }
        function get_data()
        {
        }
        function get_keys()
        {
        }
        function get_action()
        {
        }
    }
    class acfe_admin_settings
    {
        public $defaults = array();
        public $updated = array();
        public $fields = array();
        function __construct()
        {
        }
        /*
         * Pre Init
         */
        function acf_pre_init()
        {
        }
        /*
         * Post Init
         */
        function acf_post_init()
        {
        }
        /*
         * Register Fields
         */
        function register_fields()
        {
        }
    }
    class acfe_admin_settings_ui
    {
        public $defaults = array();
        public $updated = array();
        public $fields = array();
        function __construct()
        {
        }
        /*
         * Admin Menu
         */
        function admin_menu()
        {
        }
        /*
         * Menu Load
         */
        function menu_load()
        {
        }
        /*
         * Menu HTML
         */
        function menu_html()
        {
        }
        /*
         * Load
         */
        function load()
        {
        }
        /*
         * Prepare Setting
         */
        function prepare_setting($setting)
        {
        }
        /*
         * HTML
         */
        function html()
        {
        }
        function render_fields()
        {
        }
    }
    class acfe_admin_plugins
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Install Plugins Tabs
         */
        function install_plugins_tabs($tabs)
        {
        }
        /*
         * Install Plugins Table API Args
         */
        function install_plugins_table_api_args($args)
        {
        }
        /*
         * Install Plugins
         */
        function install_plugins()
        {
        }
    }
    class acfe_admin_menu
    {
        /**
         * Construct
         */
        function __construct()
        {
        }
        /**
         * current_screen
         *
         * @param $screen
         */
        function current_screen($screen)
        {
        }
        /**
         * admin_menu
         *
         * Swap menu items to the correct order
         */
        function admin_menu()
        {
        }
    }
    class acfe_upgrades
    {
        public $upgrades = array('do_0_8_5' => '0.8.5', 'do_0_8_6' => '0.8.6', 'do_0_8_8' => '0.8.8', 'do_reset' => '0.0');
        public $model = array('version' => \ACFE_VERSION, 'modules' => array('block_types' => array(), 'options_pages' => array(), 'post_types' => array(), 'taxonomies' => array()));
        function __construct()
        {
        }
        /*
         * Reset Modules
         */
        function do_reset()
        {
        }
        /*
         * ACF Extended: 0.8.8
         */
        function do_0_8_8()
        {
        }
        /*
         * ACF Extended: 0.8.6
         */
        function do_0_8_6()
        {
        }
        /*
         * ACF Extended: 0.8.5
         */
        function do_0_8_5()
        {
        }
        function parse_args_r(&$a, $b)
        {
        }
    }
    class ACFE_Local_Meta
    {
        // Vars
        var $meta = array();
        var $curr_id = array();
        var $main_id = array();
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Add
         */
        function add($meta = array(), $post_id = 0, $is_main = \false)
        {
        }
        /*
         * Remove
         */
        function remove()
        {
        }
        /*
         * Preload Post ID
         */
        function pre_load_post_id($null, $post_id)
        {
        }
        /*
         * Is Request
         */
        function is_request($meta = array())
        {
        }
        /*
         * Capture
         */
        function capture($values = array(), $post_id = 0)
        {
        }
        /*
         * Capture Update Metadata
         */
        function capture_update_metadata($null, $post_id, $name, $value, $hidden)
        {
        }
        /*
         * Preload Meta
         */
        function pre_load_meta($null, $post_id)
        {
        }
        /*
         * Preload Metadata
         */
        function pre_load_metadata($null, $post_id, $name, $hidden)
        {
        }
    }
    class acfe_location_post_type_list
    {
        // vars
        var $post_id;
        var $post_type;
        var $field_groups = array();
        function __construct()
        {
        }
        function load_posts($post_type)
        {
        }
        function add_posts_meta_boxes()
        {
        }
        function render_meta_box($post_type, $metabox)
        {
        }
        function rule_types($choices)
        {
        }
        function rule_values($choices)
        {
        }
        function rule_match($match, $rule, $screen)
        {
        }
    }
    class acfe_location_post_type_archive
    {
        public $post_type = \false;
        public $post_types = array();
        function __construct()
        {
        }
        function init()
        {
        }
        function current_screen()
        {
        }
        function location_screen($screen)
        {
        }
        function admin_footer()
        {
        }
        function admin_bar_menu($wp_admin_bar)
        {
        }
        function get_options_pages($pages)
        {
        }
        function location_types($choices)
        {
        }
        function location_values($choices)
        {
        }
        function location_match($match, $rule, $screen)
        {
        }
    }
    class acfe_location_post_type_all
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Rule Values
         */
        function rule_values($choices)
        {
        }
        /*
         * Rule Match
         */
        function rule_match($match, $rule, $options)
        {
        }
    }
    class acfe_location_taxonomy_list
    {
        // vars
        var $post_id;
        var $taxonomy;
        var $field_groups = array();
        function __construct()
        {
        }
        function load_terms($taxonomy)
        {
        }
        function add_terms_meta_boxes()
        {
        }
        function render_meta_box($post_type, $metabox)
        {
        }
        function rule_types($choices)
        {
        }
        function rule_values($choices)
        {
        }
        function rule_match($match, $rule, $screen)
        {
        }
    }
    class acfe_field_settings
    {
        function __construct()
        {
        }
        /*
         * Admin Head
         */
        function load()
        {
        }
        /*
         * Ajax Load
         */
        function load_ajax()
        {
        }
        /*
         * Add Settings
         */
        function add_settings()
        {
        }
        /*
         * Render Settings
         */
        function render_field_settings($field)
        {
        }
        /*
         * Load field
         */
        function load_field($field)
        {
        }
        function load_field_additional($field)
        {
        }
        /*
         * Prepare Field
         */
        function prepare_field($field)
        {
        }
        /*
         * Prepare Settings
         */
        function prepare_settings()
        {
        }
    }
    class acfe_instructions
    {
        function __construct()
        {
        }
        function pre_render_field_group($field_group, $fields, $post_id)
        {
        }
        function field_wrapper_attributes($wrapper, $field)
        {
        }
    }
    class acfe_permissions
    {
        function __construct()
        {
        }
        function render_field_settings($field)
        {
        }
        function prepare_field($field)
        {
        }
    }
    class acfe_bidirectional
    {
        var $allowed_types = array('relationship', 'post_object', 'user', 'taxonomy');
        function __construct()
        {
        }
        /*
         * Field Settings
         */
        function field_settings_render($field)
        {
        }
        /*
         * Field Settings: Ajax Query
         */
        function ajax_query()
        {
        }
        /*
         * Field Settings: Ajax Results
         */
        function ajax_results($options = array())
        {
        }
        /*
         * Field Setting: Get Related Settings
         */
        function get_related_settings($r_field, $r_field_group, &$choices)
        {
        }
        /*
         * Field Setting: Default Value
         */
        function field_settings_default_value($field)
        {
        }
        /*
         * Field Setting Update
         */
        function field_settings_update($field)
        {
        }
        /*
         * Field Setting: Delete
         */
        function field_settings_delete($field)
        {
        }
        /*
         * Update Value
         */
        function update_value($value, $post_id, $field)
        {
        }
        /**
         * Establish Relationship
         *
         * $type: add|remove
         * $r_id: the post_id to add the relationship to
         * $p_field: the parent field
         * $p_id: the relationship to add
         */
        function relationship($type, $r_id, $p_field, $p_value)
        {
        }
        function get_value_from_ancestor($r_ref_values, $r_field)
        {
        }
        function is_field_bidirectional($field)
        {
        }
        function has_field_bidirectional($field)
        {
        }
        function get_field_bidirectional($field)
        {
        }
    }
    class acfe_field_data
    {
        function __construct()
        {
        }
        function render_field_settings($field)
        {
        }
        function render_field($field)
        {
        }
    }
    class acfe_field_validation
    {
        function __construct()
        {
        }
        /*
         * Admin Head
         */
        function load()
        {
        }
        /*
         * Ajax Load
         */
        function load_ajax()
        {
        }
        /*
         * Add Settings
         */
        function add_settings()
        {
        }
        /*
         * Render Settings
         */
        function render_field_settings($field)
        {
        }
        /*
         * Validate Value
         */
        function validate_value($valid, $value, $field, $input)
        {
        }
        function get_user_by_id($value)
        {
        }
        function get_user_by_slug($value)
        {
        }
        function get_user_by_email($value)
        {
        }
        function get_user_by_login($value)
        {
        }
        function value($value)
        {
        }
        function get_post_by_id($value)
        {
        }
        function get_post_by_slug($value)
        {
        }
        function get_post_by_title($value)
        {
        }
        /*
         * Prepare Settings
         */
        function prepare_settings()
        {
        }
    }
    class acfe_field_slug extends \acf_field
    {
        function __construct()
        {
        }
        function render_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function validate_value($valid, $value, $field, $input)
        {
        }
        function update_value($value, $post_id, $field)
        {
        }
    }
    class acfe_free_field_wysiwyg
    {
        function __construct()
        {
        }
        /*
         * Field Wrapper
         */
        function field_wrapper($wrapper, $field)
        {
        }
    }
    class acfe_field_dynamic_render extends \acf_field
    {
        function initialize()
        {
        }
        function render_field($field)
        {
        }
    }
    class acfe_field_clone
    {
        /*
         * Cosntruct
         */
        function __construct()
        {
        }
        /*
         * Render Field Settings
         */
        function render_field_settings($field)
        {
        }
        /*
         * Field Wrapper Attributes
         */
        function field_wrapper_attributes($wrapper, $field)
        {
        }
        /*
         * Prepare Field
         */
        function prepare_field($field)
        {
        }
        /*
         * Ajax Query
         */
        function ajax_query()
        {
        }
        /*
         * Load Field Groups
         */
        function load_field_groups($field_groups)
        {
        }
    }
    class acfe_field_checkbox
    {
        function __construct()
        {
        }
        function prepare_field_group_choices($field)
        {
        }
        function prepare_checkbox($field)
        {
        }
        function walk($choices = array(), $depth = 1, $labels = array())
        {
        }
        function prepare_radio($field)
        {
        }
        function field_wrapper($wrapper, $field)
        {
        }
    }
    class acfe_field_post_object
    {
        function __construct()
        {
        }
        function field_settings($field)
        {
        }
        function field_wrapper($wrapper, $field)
        {
        }
        function update_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_hidden extends \acf_field
    {
        function __construct()
        {
        }
        function prepare_field($field)
        {
        }
        function render_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
    }
    class acfe_field_flexible_content_state
    {
        function __construct()
        {
        }
        function defaults_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function validate_state($field)
        {
        }
        function wrapper_attributes($wrapper, $field)
        {
        }
        function layout_div($div, $layout, $field)
        {
        }
        function layout_placeholder($placeholder, $layout, $field)
        {
        }
        function layout_handle($handle, $layout, $field)
        {
        }
        function layout_icons($icons, $layout, $field)
        {
        }
    }
    class acfe_field_flexible_content_controls
    {
        function __construct()
        {
        }
        function action_wrapper($wrapper, $field)
        {
        }
        function action_button($button, $field)
        {
        }
        function action_button_secondary($button, $field)
        {
        }
        function defaults_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function wrapper_attributes($wrapper, $field)
        {
        }
        function prepare_layout($layout, $field, $i, $value, $prefix)
        {
        }
        function no_value_message($message, $field)
        {
        }
    }
    class acfe_field_group_field
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Render Field Settings
         */
        function render_field_settings($field)
        {
        }
        /*
         * Field Wrapper Attributes
         */
        function field_wrapper_attributes($wrapper, $field)
        {
        }
        /*
         * Prepare Field
         */
        function prepare_field($field)
        {
        }
    }
    class acfe_field_flexible_content_select
    {
        function __construct()
        {
        }
        function defaults_field($field)
        {
        }
        function defaults_layout($layout)
        {
        }
        function render_field_settings($field)
        {
        }
        function render_layout_settings($field, $layout, $prefix)
        {
        }
        function wrapper_attributes($wrapper, $field)
        {
        }
        function label_atts($atts, $layout, $field)
        {
        }
    }
    class acfe_field_advanced_link extends \acf_field
    {
        public $post_object = '';
        function __construct()
        {
        }
        function post_object_render_field($field)
        {
        }
        function ajax_query()
        {
        }
        function render_field_settings($field)
        {
        }
        function get_value($value = array())
        {
        }
        function render_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
        function validate_value($valid, $value, $field, $input)
        {
        }
    }
    class acfe_field_flexible_content_async
    {
        function __construct()
        {
        }
        function defaults_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function validate_async($field)
        {
        }
        function wrapper_attributes($wrapper, $field)
        {
        }
        function layout_model($return, $field, $layout)
        {
        }
        function ajax_layout_model()
        {
        }
    }
    class acfe_field_flexible_content
    {
        var $instance;
        function __construct()
        {
        }
        /*
         *  Field Settings
         */
        function render_field_settings($field)
        {
        }
        /*
         *  Layout Settings Label
         */
        function render_field_layouts_settings_label($field)
        {
        }
        /*
         *  Layout Settings
         */
        function render_field_layouts_settings($field)
        {
        }
        /*
         *  Validate Field
         */
        function validate_field($field)
        {
        }
        /*
         *  Prepare Field
         */
        function prepare_field($field)
        {
        }
        /*
         *  Load Fields
         */
        function load_fields($fields, $field)
        {
        }
        /*
         *  Wrapper Attributes
         */
        function wrapper_attributes($wrapper, $field)
        {
        }
        /*
         *  Render Field
         */
        function render_field($field)
        {
        }
        /*
         *  Render Layout
         */
        function render_layout($field, $layout, $i, $value)
        {
        }
        /*
         *  Render Layout Fields
         */
        function render_layout_fields($layout, $field, $i, $value, $prefix)
        {
        }
        /*
         *  Prepare Layout Editor
         */
        function prepare_layout_editor($field)
        {
        }
        /*
         * Prepare Layout Title
         */
        function prepare_layout_title($title, $field, $layout, $i)
        {
        }
    }
    class acfe_field_flexible_content_hide
    {
        function __construct()
        {
        }
        function defaults_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function validate_hide($field)
        {
        }
        function remove_actions($return, $field)
        {
        }
        function layout_icons($icons, $layout, $field)
        {
        }
    }
    class acfe_field_taxonomy_terms extends \acf_field
    {
        // vars
        var $save_post_terms = array();
        function __construct()
        {
        }
        function ajax_query_allowed_terms()
        {
        }
        function get_ajax_query_allowed_terms($options = array())
        {
        }
        function get_terms($field, $args = array())
        {
        }
        function filter_terms($all_terms, $field)
        {
        }
        function convert_terms_to_choices($terms, $field)
        {
        }
        function ajax_query()
        {
        }
        function get_ajax_query($options = array())
        {
        }
        function prepare_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function load_value($value, $post_id, $field)
        {
        }
        function update_value($value, $post_id, $field)
        {
        }
        function save_post($post_id)
        {
        }
        function update_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_flexible_content_thumbnail
    {
        function __construct()
        {
        }
        function defaults_field($field)
        {
        }
        function defaults_layout($layout)
        {
        }
        function render_field_settings($field)
        {
        }
        function render_layout_settings($flexible, $layout, $prefix)
        {
        }
        function validate_thumbnail($field)
        {
        }
        function wrapper_attributes($wrapper, $field)
        {
        }
        function label_prepend($prepend, $layout, $field)
        {
        }
        function label_atts($atts, $layout, $field)
        {
        }
        function layout_title($title, $field, $layout, $i)
        {
        }
    }
    class acfe_field_post_statuses extends \acf_field
    {
        function __construct()
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_flexible_content_preview
    {
        function __construct()
        {
        }
        function defaults_field($field)
        {
        }
        function defaults_layout($layout)
        {
        }
        function render_field_settings($field)
        {
        }
        function render_layout_settings($flexible, $layout, $prefix)
        {
        }
        function render_field($field)
        {
        }
        function wrapper_attributes($wrapper, $field)
        {
        }
        function prepare_layout($layout, $field, $i, $value, $prefix)
        {
        }
        function layout_preview($options = array())
        {
        }
        function return_or_die()
        {
        }
    }
    class acfe_field_flexible_content_actions
    {
        function __construct()
        {
        }
        function defaults_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function validate_actions($field)
        {
        }
        function wrapper_attributes($wrapper, $field)
        {
        }
        function load_fields($fields, $field)
        {
        }
        function prepare_layout($layout, $field, $i, $value, $prefix)
        {
        }
        function layout_icons($icons, $layout, $field)
        {
        }
        function secondary_actions($actions, $field)
        {
        }
        function layout_title($title, $field, $layout, $i)
        {
        }
        function load_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_flexible_content_settings
    {
        function __construct()
        {
        }
        function defaults_field($field)
        {
        }
        function defaults_layout($layout)
        {
        }
        function render_field_settings($field)
        {
        }
        function render_layout_settings($flexible, $layout, $prefix)
        {
        }
        function load_fields($fields, $field)
        {
        }
        function prepare_layout($layout, $field, $i, $value, $prefix)
        {
        }
        function layout_icons($icons, $layout, $field)
        {
        }
    }
    class acfe_field_flexible_content_edit
    {
        //
        function __construct()
        {
        }
        function defaults_field($field)
        {
        }
        function defaults_layout($layout)
        {
        }
        function render_field_settings($field)
        {
        }
        function render_layout_settings($field, $layout, $prefix)
        {
        }
        function validate_edit($field)
        {
        }
        function wrapper_attributes($wrapper, $field)
        {
        }
        function pre_render_layout($layout, $field, $i, $value, $prefix)
        {
        }
        function render_layout($layout, $field, $i, $value, $prefix)
        {
        }
        function layout_div($div, $layout, $field)
        {
        }
        function layout_icons($icons, $layout, $field)
        {
        }
        function layout_handle($handle, $layout, $field)
        {
        }
    }
    class acfe_field_recaptcha extends \acf_field
    {
        function __construct()
        {
        }
        function render_field_settings($field)
        {
        }
        function prepare_field($field)
        {
        }
        function render_field($field)
        {
        }
        function validate_value($valid, $value, $field, $input)
        {
        }
        function update_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_forms extends \acf_field
    {
        function __construct()
        {
        }
        function prepare_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_image
    {
        function __construct()
        {
        }
        function prepare_library($field)
        {
        }
        function gettext($translated_text, $text, $domain)
        {
        }
        function validate_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function prepare_field($field)
        {
        }
        function update_value($value, $post_id, $field)
        {
        }
        function load_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_user_roles extends \acf_field
    {
        function __construct()
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
    }
    class acfe_field_column extends \acf_field
    {
        function __construct()
        {
        }
        function new_validate_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function field_wrapper_attributes($wrapper, $field)
        {
        }
        function render_field($field)
        {
        }
        function load_field($field)
        {
        }
        function prepare_field($field)
        {
        }
    }
    class acfe_field_post_types extends \acf_field
    {
        function __construct()
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_select
    {
        function __construct()
        {
        }
        function current_screen()
        {
        }
        function prepare_field_choices($field)
        {
        }
        function field_settings($field)
        {
        }
        function prepare_field($field)
        {
        }
        function field_wrapper($wrapper, $field)
        {
        }
    }
    class acfe_field_button extends \acf_field
    {
        function __construct()
        {
        }
        function ajax_request()
        {
        }
        function render_field_settings($field)
        {
        }
        function render_field($field)
        {
        }
    }
    class acfe_field_file
    {
        function __construct()
        {
        }
        function prepare_min_max_size($field)
        {
        }
        function prepare_library($field)
        {
        }
        function acf_admin_tools()
        {
        }
        function gettext($translated_text, $text, $domain)
        {
        }
        function validate_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function prepare_field($field)
        {
        }
    }
    class acfe_field_taxonomies extends \acf_field
    {
        function __construct()
        {
        }
        function render_field_settings($field)
        {
        }
        function update_field($field)
        {
        }
        function prepare_field($field)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_field_code_editor extends \acf_field
    {
        function __construct()
        {
        }
        function render_field($field)
        {
        }
        function render_field_settings($field)
        {
        }
        function input_admin_enqueue_scripts()
        {
        }
        function validate_value($valid, $value, $field, $input)
        {
        }
        function format_value($value, $post_id, $field)
        {
        }
    }
    class acfe_form_user
    {
        function __construct()
        {
        }
        function load($form, $current_post_id, $action)
        {
        }
        function validation($form, $current_post_id, $action)
        {
        }
        function validate_user_login($type, $login, $pass, $errors)
        {
        }
        function make($form, $current_post_id, $action)
        {
        }
        function submit($_user_id, $user_action, $args, $form, $action)
        {
        }
        /**
         *  User: Select2 Choices
         */
        function prepare_choices($field)
        {
        }
        function add_action($layouts)
        {
        }
    }
    class acfe_enhanced_ui
    {
        function __construct()
        {
        }
        function initialize()
        {
        }
        function enqueue_scripts()
        {
        }
        /*
         * Add Field Groups Metaboxes
         */
        function add_metaboxes($field_groups, $post_id, $screen)
        {
        }
        /*
         * Render Metabox
         */
        function render_metabox($post, $metabox)
        {
        }
        /*
         * Render Metabox Submit
         */
        function render_metabox_submit($object, $metabox)
        {
        }
    }
    class acfe_enhanced_ui_user extends \acfe_enhanced_ui
    {
        function initialize()
        {
        }
        /*
         * Load User
         */
        function load_user()
        {
        }
        /*
         * Load User New
         */
        function load_user_new()
        {
        }
        /*
         * User: Screen
         */
        function add_user_meta_boxes($user)
        {
        }
        /*
         * User New: Screen
         */
        function add_user_new_meta_boxes()
        {
        }
        /*
         * User: Add Metaboxes
         */
        function user_add_metaboxes($args = array())
        {
        }
        /*
         * User: Footer
         */
        function user_footer()
        {
        }
        /*
         * User New: Footer
         */
        function user_new_footer()
        {
        }
    }
    class acfe_form_front
    {
        function __construct()
        {
        }
        function ajax_shortcode()
        {
        }
        function validate_save_post()
        {
        }
        function save_post()
        {
        }
        function validate_form($param)
        {
        }
        /*
         * ACFE Form: render_form
         *
         */
        function render_form($args = array())
        {
        }
        function form_success($args)
        {
        }
        function form_success_hide($args)
        {
        }
        function prepare_fields($args)
        {
        }
        function form_uploader($args)
        {
        }
        function form_wrapper($args, $open = \true)
        {
        }
        function fields_wrapper($args, $open = \true)
        {
        }
        function form_data($args)
        {
        }
        function render_fields($args, $fields)
        {
        }
        function render_shortcode($atts)
        {
        }
        function disable_fields($field)
        {
        }
        function get_form($param)
        {
        }
    }
    class acfe_enhanced_ui_term extends \acfe_enhanced_ui
    {
        var $taxonomy;
        var $term_id;
        function initialize()
        {
        }
        /*
         * Term: Load
         */
        function load_term($taxonomy)
        {
        }
        /*
         * Terms: Load
         */
        function load_terms($taxonomy)
        {
        }
        /*
         * Term: Add Metaboxes
         */
        function add_term_meta_boxes($taxonomy, $term)
        {
        }
        /*
         * Term: Enqueue Scripts
         */
        function term_enqueue_scripts()
        {
        }
        /*
         * Term: Footer
         */
        function term_footer()
        {
        }
        /*
         * Terms: Footer
         */
        function terms_footer()
        {
        }
    }
    class acfe_form_redirect
    {
        function __construct()
        {
        }
        function make($form, $current_post_id, $action)
        {
        }
        function add_action($layouts)
        {
        }
    }
    class acfe_form_term
    {
        function __construct()
        {
        }
        function load($form, $current_post_id, $action)
        {
        }
        function make($form, $current_post_id, $action)
        {
        }
        function submit($_term_id, $term_action, $args, $form, $action)
        {
        }
        /**
         *  Term: Select2 Choices
         */
        function prepare_choices($field)
        {
        }
        function add_action($layouts)
        {
        }
    }
    class acfe_enhanced_ui_settings extends \acfe_enhanced_ui
    {
        function initialize()
        {
        }
        /*
         * Load
         */
        function load_settings()
        {
        }
        /*
         * Add Meta Boxes
         */
        function add_settings_meta_boxes()
        {
        }
        /*
         * Settings: Footer
         */
        function settings_footer()
        {
        }
    }
    class acfe_form_post
    {
        function __construct()
        {
        }
        function load($form, $current_post_id, $action)
        {
        }
        function make($form, $current_post_id, $action)
        {
        }
        function submit($_post_id, $post_action, $args, $form, $action)
        {
        }
        /**
         *  Post: Select2 Choices
         */
        function prepare_choices($field)
        {
        }
        /**
         *  User: Select2 Choices
         */
        function prepare_choices_users($field)
        {
        }
        function add_action($layouts)
        {
        }
    }
    class acfe_form_custom
    {
        function __construct()
        {
        }
        function make($form, $current_post_id, $action)
        {
        }
        function validate_action($valid, $value, $field, $input)
        {
        }
        function add_action($layouts)
        {
        }
    }
    class acfe_dev
    {
        public $wp_meta = array();
        public $acf_meta = array();
        function __construct()
        {
        }
        /*
         * Enqueue Scripts
         */
        function admin_enqueue_scripts()
        {
        }
        /*
         * Load Post
         */
        function load_post()
        {
        }
        /*
         * Clean Meta
         */
        function clean_meta()
        {
        }
        /*
         * Post Meta Boxes
         */
        function add_post_meta_boxes($post_type, $post)
        {
        }
        /*
         * Post Type List
         */
        function add_posts_meta_boxes($post_type)
        {
        }
        /*
         * Term Meta Boxes
         */
        function add_term_meta_boxes($taxonomy, $term)
        {
        }
        /*
         * Taxonomy List
         */
        function add_terms_meta_boxes($taxonomy)
        {
        }
        /*
         * User Meta Boxes
         */
        function add_user_meta_boxes($user)
        {
        }
        /*
         * Options Page
         */
        function add_option_meta_boxes($page)
        {
        }
        /*
         * Settings Page
         */
        function add_settings_meta_boxes($page)
        {
        }
        /*
         * Attachment List
         */
        function add_attachments_meta_boxes()
        {
        }
        /*
         * User List
         */
        function add_users_meta_boxes()
        {
        }
        function render_clean_metabox($post, $metabox)
        {
        }
        /*
         * Add Meta Boxes
         */
        function add_meta_boxes($post_id, $object_type)
        {
        }
        function render_meta_box($post, $metabox)
        {
        }
        function render_meta_value($value)
        {
        }
        function get_meta($post_id = 0)
        {
        }
        function ajax_delete_meta()
        {
        }
        function ajax_bulk_delete_meta()
        {
        }
    }
    class acfe_dynamic_forms_helpers
    {
        function get_field_groups($post_id = 0)
        {
        }
        function get_field_groups_front($post_id = 0)
        {
        }
        function map_fields_deep_no_custom($field)
        {
        }
        function map_fields_deep($field)
        {
        }
        function map_fields($field)
        {
        }
        function get_fields_choices($deep = \false, $original_field = array())
        {
        }
        function get_fields_choices_recursive(&$choices, $field, $original_field)
        {
        }
        function render_fields($content, $post_id, $args)
        {
        }
        function map_fields_values(&$data = array(), $array = array())
        {
        }
        function map_field_value($content, $post_id = 0, $form = array())
        {
        }
        function map_field_value_load($content, $post_id = 0, $form = array())
        {
        }
        function filter_meta($meta, $acf)
        {
        }
        function format_value_array($value)
        {
        }
        function format_value($value, $field)
        {
        }
    }
    class acfe_single_meta
    {
        public $restricted = array();
        public $post_types = array();
        public $taxonomies = array();
        public $users = array();
        public $options = array();
        function __construct()
        {
        }
        /*
         * ACF Get Meta
         * Function: acf_get_meta()
         */
        function acf_get_meta($return, $post_id)
        {
        }
        /*
         * ACF Get Metadata
         * Function: acf_get_metadata()
         */
        function acf_get_metadata($return, $post_id, $name, $hidden)
        {
        }
        /*
         * ACF Update Metadata
         * Function: acf_update_metadata()
         */
        function acf_update_metadata($return, $post_id, $name, $value, $hidden)
        {
        }
        /*
         * ACF Delete Metadata
         * Function: acf_delete_metadata()
         */
        function acf_delete_metadata($return, $post_id, $name, $hidden)
        {
        }
        /*
         * ACF Update Value
         * Function: acf_update_value()
         */
        function acf_update_value($value, $post_id, $field)
        {
        }
        /*
         * Pre Save Post
         * Hook: acf/save_post:0
         */
        function pre_save_post($post_id = 0)
        {
        }
        /*
         * Save Post
         * Hook: acf/save_post:999
         */
        function save_post($post_id = 0)
        {
        }
        function get_store($post_id)
        {
        }
        function get_meta($post_id)
        {
        }
        function update_meta($value, $post_id)
        {
        }
        function delete_meta($post_id)
        {
        }
        /*
         * Field Setting
         */
        function render_field_settings($field)
        {
        }
        /*
         * Revision Pre Update
         */
        function revision_pre_update($null, $revision_id, $name, $value, $hidden)
        {
        }
        /*
         * Revision Fields
         */
        function revision_fields($fields, $post = \null)
        {
        }
        /*
         * Revision Field (acf)
         */
        function revision_field($value, $field_name, $post = \null, $direction = \false)
        {
        }
        function is_enabled($post_id = \null)
        {
        }
        function validate_post_id($post_id)
        {
        }
    }
    class ACFE_AutoSync
    {
        function __construct()
        {
        }
        /*
         * Override: Json
         */
        function override_json($value)
        {
        }
        /*
         * Override: Json Save
         */
        function override_json_save($path)
        {
        }
        /*
         * Override: Json Load
         */
        function override_json_load($paths)
        {
        }
        /*
         * Json Enabled
         */
        function is_json_enabled()
        {
        }
        /*
         * Json: Setup
         */
        function setup_json()
        {
        }
        /*
         * Json: Scan
         */
        function scan_json_folders()
        {
        }
        /*
         * Json: Scan - Compatibility (ACF < 5.9)
         */
        function scan_json_folders_compatibility()
        {
        }
        /*
         * Json: Get Files
         */
        function get_json_files()
        {
        }
        /*
         * PHP Enabled
         */
        function is_php_enabled()
        {
        }
        /*
         * PHP: Setup
         */
        function setup_php()
        {
        }
        /*
         * PHP: Scan
         */
        function scan_php_folders()
        {
        }
        /*
         * PHP: Get Files
         */
        public function get_php_files()
        {
        }
        /*
         * PHP: Update Field Group
         */
        function update_field_group($field_group)
        {
        }
        /*
         * PHP: Delete Field Group
         */
        function delete_field_group($field_group)
        {
        }
        /*
         * PHP: Save File
         */
        function save_file($key, $field_group)
        {
        }
        /*
         * PHP: Delete File
         */
        function delete_file($key)
        {
        }
        /*
         * Json: Pre update Field Group
         */
        function pre_update_field_group_json($field_group)
        {
        }
        /*
         * Json: Post Update Field Group
         */
        function post_update_field_group_json($field_group)
        {
        }
        /*
         * Custom Return False
         */
        function __return_false()
        {
        }
    }
    class acfe_module_options
    {
        var $action = 'list';
        /*
         * Construct
         */
        function __construct()
        {
        }
        function acfe_options_screen($status, $option, $value)
        {
        }
        /*
         * Admin menu
         */
        function admin_menu()
        {
        }
        /*
         * Admin load
         */
        function admin_load()
        {
        }
        /*
         * Admin html
         */
        function admin_html()
        {
        }
        /*
         * Load: List
         */
        function load_list()
        {
        }
        /*
         * Load: Edit
         */
        function load_edit()
        {
        }
        /*
         * Load: Delete
         */
        function load_delete()
        {
        }
        /*
         * Load: Bulk Delete
         */
        function load_bulk_delete()
        {
        }
        /*
         * HTML: List
         */
        function html_list()
        {
        }
        /*
         * HTML: Edit
         */
        function html_edit()
        {
        }
        /*
         * Save Post
         */
        function save_post($post_id)
        {
        }
        /*
         * Delete Option
         */
        function delete_option($id)
        {
        }
        /*
         * Add Metaboxes
         */
        function add_metaboxes()
        {
        }
    }
    class acfe_dynamic_options_pages extends \acfe_dynamic_module
    {
        /*
         * Initialize
         */
        function initialize()
        {
        }
        /*
         * Actions
         */
        function actions()
        {
        }
        /*
         * Get Name
         */
        function get_name($post_id)
        {
        }
        /*
         * Init
         */
        function init()
        {
        }
        /*
         * Register Post Type
         */
        function register_post_type()
        {
        }
        /*
         * Register User Options Pages
         */
        function register_user_options_pages()
        {
        }
        /*
         * Post Head
         */
        function post_head()
        {
        }
        /*
         * Metabox Render
         */
        function metabox_render($array, $data)
        {
        }
        /*
         * Edit Columns HTML
         */
        function edit_columns_html($column, $post_id)
        {
        }
        /*
         * Edit Row Actions View
         */
        function edit_row_actions_view($post, $name)
        {
        }
        /*
         * Admin Config Button
         */
        function admin_config()
        {
        }
        /*
         * Admin: Archive Posts
         */
        function admin_archive_posts($query)
        {
        }
        /*
         * Validate Name
         */
        function validate_name($valid, $value, $field, $input)
        {
        }
        /*
         * Update Name
         */
        function update_name($value, $post_id, $field)
        {
        }
        /*
         * Prepare Register
         */
        function prepare_register($settings)
        {
        }
        /*
         * ACF Save post
         */
        function save_post($post_id)
        {
        }
        /*
         * Save Args
         */
        function save_args($args, $name, $post_id)
        {
        }
        /*
         * Save
         */
        function save($name, $args, $post_id)
        {
        }
        /*
         * Trashed Post Type
         */
        function trashed_post($post_id)
        {
        }
        /*
         * Import
         */
        function import($name, $args)
        {
        }
        function import_fields($name, $args, $post_id)
        {
        }
        /*
         * After Import
         */
        function after_import($ids, $data)
        {
        }
        /*
         * Export: Choices
         */
        function export_choices()
        {
        }
        /*
         * Export: Data
         */
        function export_data($name)
        {
        }
        /*
         * Export: PHP
         */
        function export_php($data)
        {
        }
        /*
         * Reset
         */
        function reset()
        {
        }
        /*
         * Multilang Save
         */
        function l10n_save($name, $args, $post_id)
        {
        }
        /*
         * Multilang Register
         */
        function l10n_register($args, $name)
        {
        }
        /*
         * Add Local Field Group
         */
        function add_local_field_group()
        {
        }
    }
    class acfe_dynamic_post_types extends \acfe_dynamic_module
    {
        /*
         * Initialize
         */
        function initialize()
        {
        }
        /*
         * Actions
         */
        function actions()
        {
        }
        /*
         * Get Name
         */
        function get_name($post_id)
        {
        }
        /*
         * Init
         */
        function init()
        {
        }
        /*
         * Register Post Type
         */
        function register_post_type()
        {
        }
        /*
         * Register User Post Types
         */
        function register_user_post_types()
        {
        }
        /*
         * Post Screen
         */
        function post_screen()
        {
        }
        /*
         * Edit Row Actions View
         */
        function edit_row_actions_view($post, $name)
        {
        }
        /*
         * Edit Columns HTML
         */
        function edit_columns_html($column, $post_id)
        {
        }
        /*
         * Admin Config Button
         */
        function admin_config()
        {
        }
        /*
         * Admin: Archive
         */
        function admin_archive_posts($query)
        {
        }
        /*
         * Admin: Posts Per Page
         */
        function admin_archive_ppp($ppp, $post_type)
        {
        }
        /*
         * Front: Archive
         */
        function front_archive_posts($query)
        {
        }
        /*
         * Front: Template
         */
        function front_template($template)
        {
        }
        /*
         * Validate Name
         */
        function validate_name($valid, $value, $field, $input)
        {
        }
        /*
         * Update Name
         */
        function update_name($value, $post_id, $field)
        {
        }
        /*
         * ACF Save post
         */
        function save_post($post_id)
        {
        }
        /*
         * Save Args
         */
        function save_args($args, $name, $post_id)
        {
        }
        /*
         * Save
         */
        function save($name, $args, $post_id)
        {
        }
        /*
         * Trashed Post Type
         */
        function trashed_post($post_id)
        {
        }
        /*
         * Import
         */
        function import($name, $args)
        {
        }
        /*
         * Import Fields
         */
        function import_fields($name, $args, $post_id)
        {
        }
        /*
         * After Import
         */
        function after_import($ids, $data)
        {
        }
        /*
         * Export: Choices
         */
        function export_choices()
        {
        }
        /*
         * Export: Data
         */
        function export_data($name)
        {
        }
        /*
         * Export: PHP
         */
        function export_php($data)
        {
        }
        /*
         * Reset
         */
        function reset()
        {
        }
        /*
         * Multilang Save
         */
        function l10n_save($name, $args, $post_id)
        {
        }
        /*
         * Multilang Register
         */
        function l10n_register($args, $name)
        {
        }
        /*
         * Add Local Field Group
         */
        function add_local_field_group()
        {
        }
    }
    class acfe_dynamic_block_types extends \acfe_dynamic_module
    {
        /*
         * Initialize
         */
        function initialize()
        {
        }
        /*
         * Actions
         */
        function actions()
        {
        }
        /*
         * Get Name
         */
        function get_name($post_id)
        {
        }
        /*
         * Init
         */
        function init()
        {
        }
        /*
         * Register Post Type
         */
        function register_post_type()
        {
        }
        /*
         * Register User Block Types
         */
        function register_user_block_types()
        {
        }
        /*
         * Post Head
         */
        function post_head()
        {
        }
        /*
         * Metabox Render
         */
        function metabox_render($array, $data)
        {
        }
        /*
         * Edit Columns HTML
         */
        function edit_columns_html($column, $post_id)
        {
        }
        /*
         * Validate Name
         */
        function validate_name($valid, $value, $field, $input)
        {
        }
        /*
         * Update Name
         */
        function update_name($value, $post_id, $field)
        {
        }
        /*
         * Register
         */
        function register($args, $name)
        {
        }
        /*
         * ACF Save post
         */
        function save_post($post_id)
        {
        }
        /*
         * Save Args
         */
        function save_args($args, $name, $post_id)
        {
        }
        /*
         * Save
         */
        function save($name, $args, $post_id)
        {
        }
        /*
         * Trashed Post Type
         */
        function trashed_post($post_id)
        {
        }
        /*
         * Import: Data
         */
        function import($name, $args)
        {
        }
        /*
         * Import: Fields
         */
        function import_fields($name, $args, $post_id)
        {
        }
        /*
         * Export: Choices
         */
        function export_choices()
        {
        }
        /*
         * Export: Data
         */
        function export_data($name)
        {
        }
        /*
         * Export: PHP
         */
        function export_php($data)
        {
        }
        /*
         * Reset
         */
        function reset()
        {
        }
        /*
         * Multilang Save
         */
        function l10n_save($name, $args, $post_id)
        {
        }
        /*
         * Multilang Register
         */
        function l10n_register($args, $name)
        {
        }
        /*
         * Add Local Field Group
         */
        function add_local_field_group()
        {
        }
    }
    class acfe_form_email
    {
        function __construct()
        {
        }
        function make($form, $current_post_id, $action)
        {
        }
        function submit($args, $form, $action)
        {
        }
        function add_action($layouts)
        {
        }
    }
    class acfe_author
    {
        public $post_types = array();
        function __construct()
        {
        }
        /*
         * Add Post Meta Boxes
         */
        function add_post_meta_boxes($post_type, $post)
        {
        }
        /*
         * Render Meta Box
         */
        function render_meta_box($post, $metabox)
        {
        }
        /*
         * WP Insert Post Data
         */
        function wp_insert_post_data($data, $post_array)
        {
        }
        /*
         * Get Field Group Style
         */
        function get_field_group_style($style, $field_group)
        {
        }
        /*
         * Get Roles
         */
        function get_roles()
        {
        }
    }
    class ACFE_Admin_Options_List extends \WP_List_Table
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Retrieve data from the database
         *
         * @param int $per_page
         * @param int $page_number
         *
         * @return mixed
         */
        public static function get_options($per_page = 100, $page_number = 1, $search = '')
        {
        }
        /**
         * Returns the count of records in the database.
         *
         * @return null|string
         */
        public static function record_count($search = '')
        {
        }
        /** Text displayed when no data is available */
        public function no_items()
        {
        }
        /**
         * Render a column when no column specific method exist.
         *
         * @param array $item
         * @param string $column_name
         *
         * @return mixed
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Render the bulk edit checkbox
         *
         * @param array $item
         *
         * @return string
         */
        public function column_cb($item)
        {
        }
        /**
         * Method for name column
         *
         * @param array $item an array of DB data
         *
         * @return string
         */
        public function column_option_name($item)
        {
        }
        /**
         *  Associative array of columns
         *
         * @return array
         */
        public function get_columns()
        {
        }
        /**
         * Columns to make sortable.
         *
         * @return array
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Returns an associative array containing the bulk action
         *
         * @return array
         */
        public function get_bulk_actions()
        {
        }
        /**
         * Handles data query and filter, sorting, and pagination.
         */
        public function prepare_items()
        {
        }
    }
    class acfe_dynamic_forms_hooks
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        function prepare_custom_html($value, $post_id, $field)
        {
        }
        function prepare_actions($field)
        {
        }
        /*
         * Field Groups Choices
         */
        function field_groups_choices($field)
        {
        }
        function form_return_deprecated($field)
        {
        }
        // Post Object & Relationship
        function format_value_post_object($value, $_value, $post_id, $field)
        {
        }
        // User
        function format_value_user($value, $_value, $post_id, $field)
        {
        }
        // Taxonomy
        function format_value_taxonomy($value, $_value, $post_id, $field)
        {
        }
        // Image / File
        function format_value_file($value, $_value, $post_id, $field)
        {
        }
        // Select / Checkbox / Radio
        function format_value_select($value, $_value, $post_id, $field)
        {
        }
        // Google Map
        function format_value_google_map($value, $_value, $post_id, $field)
        {
        }
        // Repeater
        function format_value_repeater($value, $_value, $post_id, $field)
        {
        }
    }
    class acfe_dynamic_forms extends \acfe_dynamic_module
    {
        // vars
        public $field_groups = array();
        /*
         * Initialize
         */
        function initialize()
        {
        }
        /*
         * Actions
         */
        function actions()
        {
        }
        /*
         * TinyMCE Plugin JS
         */
        function mce_plugins($plugins)
        {
        }
        /*
         * Get Name
         */
        function get_name($post_id)
        {
        }
        /*
         * Init
         */
        function init()
        {
        }
        /*
         * Post Head
         */
        function post_head()
        {
        }
        /*
         * Metabox: Sidebar
         */
        function meta_box_side($post)
        {
        }
        /*
         * Metabox: Field Groups
         */
        function meta_box_field_groups()
        {
        }
        /*
         * Edit Columns HTML
         */
        function edit_columns_html($column, $post_id)
        {
        }
        /*
         * ACF Save post
         */
        function save_post($post_id)
        {
        }
        /*
         * Save
         */
        function save($name, $post_id)
        {
        }
        /*
         * Validate Name
         */
        function validate_name($valid, $value, $field, $input)
        {
        }
        /*
         * Import
         */
        function import($name, $args)
        {
        }
        /*
         * Import Fields
         */
        function import_fields($name, $args, $post_id)
        {
        }
        /*
         * Export: Choices
         */
        function export_choices()
        {
        }
        /*
         * Export: Data
         */
        function export_data($name)
        {
        }
        /*
         * Add Local Field Group
         */
        function add_local_field_group()
        {
        }
    }
    class acfe_dynamic_forms_cheatsheet
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        function field($field)
        {
        }
        function fields($field)
        {
        }
        function get_field($field)
        {
        }
        function get_option($field)
        {
        }
        function query_var($field)
        {
        }
        function actions_post($field)
        {
        }
        function actions_term($field)
        {
        }
        function actions_user($field)
        {
        }
        function actions_email($field)
        {
        }
        function request($field)
        {
        }
        function current_post($field)
        {
        }
        function current_term($field)
        {
        }
        function current_user($field)
        {
        }
        function current_author($field)
        {
        }
        function current_form($field)
        {
        }
    }
    class acfe_dynamic_taxonomies extends \acfe_dynamic_module
    {
        /*
         * Initialize
         */
        function initialize()
        {
        }
        /*
         * Actions
         */
        function actions()
        {
        }
        /*
         * Get Name
         */
        function get_name($post_id)
        {
        }
        /*
         * Init
         */
        function init()
        {
        }
        /*
         * Register Post Type
         */
        function register_post_type()
        {
        }
        /*
         * Register User Taxonomies
         */
        function register_user_taxonomies()
        {
        }
        /*
         * Post Screen
         */
        function post_screen()
        {
        }
        /*
         * Edit Columns HTML
         */
        function edit_columns_html($column, $post_id)
        {
        }
        /*
         * Edit Row Actions View
         */
        function edit_row_actions_view($post, $name)
        {
        }
        /*
         * Admin Config Button
         */
        function admin_config()
        {
        }
        /*
         * Admin: Archive Posts
         */
        function admin_archive_posts($args, $taxonomies)
        {
        }
        /*
         * Admin: Archive Posts Per Page
         */
        function admin_archive_ppp($ppp)
        {
        }
        /*
         * Front: Archive Posts
         */
        function front_archive_posts($query)
        {
        }
        /*
         * Front: Template
         */
        function front_template($template)
        {
        }
        /*
         * Validate Name
         */
        function validate_name($valid, $value, $field, $input)
        {
        }
        /*
         * Update Name
         */
        function update_name($value, $post_id, $field)
        {
        }
        /*
         * ACF Save post
         */
        function save_post($post_id)
        {
        }
        /*
         * Save Args
         */
        function save_args($args, $name, $post_id)
        {
        }
        /*
         * Save
         */
        function save($name, $args, $post_id)
        {
        }
        /*
         * Trashed Post Type
         */
        function trashed_post($post_id)
        {
        }
        /*
         * Import
         */
        function import($name, $args)
        {
        }
        function import_fields($name, $args, $post_id)
        {
        }
        /*
         * After Import
         */
        function after_import($ids, $data)
        {
        }
        /*
         * Export: Choices
         */
        function export_choices()
        {
        }
        /*
         * Export: Data
         */
        function export_data($name)
        {
        }
        /*
         * Export: PHP
         */
        function export_php($data)
        {
        }
        /*
         * Reset
         */
        function reset()
        {
        }
        /*
         * Multilang Save
         */
        function l10n_save($name, $args, $post_id)
        {
        }
        /*
         * Multilang Register
         */
        function l10n_register($args, $name)
        {
        }
        /*
         * Add Local Field Group
         */
        function add_local_field_group()
        {
        }
    }
    class acfe_multilang
    {
        var $is_wpml = \false;
        var $is_polylang = \false;
        var $is_multilang = \false;
        var $options_pages = \false;
        function __construct()
        {
        }
        function init()
        {
        }
        function polylang_preload_reference($null, $field_name, $post_id)
        {
        }
        function polylang_preload_value($null, $post_id, $field)
        {
        }
        function polylang_validate_preload_post_id($post_id)
        {
        }
        /**
         * WPML
         * https://wpml.org/documentation/support/wpml-coding-api/wpml-hooks-reference/
         */
        function wpml_get_languages($pluck = '', $type = 'all')
        {
        }
        /**
         * PolyLang
         * https://polylang.pro/doc/filter-reference/
         * https://polylang.pro/doc/developpers-how-to/
         * https://polylang.pro/doc-category/developers/
         * https://polylang.wordpress.com/documentation/documentation-for-developers/general/
         * https://polylang.wordpress.com/documentation/documentation-for-developers/functions-reference/
         */
        function polylang_get_languages($pluck = '', $type = 'all')
        {
        }
        /**
         * ACF Options Post ID
         */
        function set_options_post_id($post_id, $original_post_id)
        {
        }
        function is_localized($post_id)
        {
        }
        function is_options_page($post_id)
        {
        }
        function get_languages($pluck = '', $type = '', $plugin = '')
        {
        }
        function options_page_message()
        {
        }
    }
    class acfe_compatibility
    {
        function __construct()
        {
        }
        function plugin_row($plugin_file, $plugin_data, $status)
        {
        }
        function init()
        {
        }
        /**
         * ACF Extended: Settings
         */
        function update_settings()
        {
        }
        /**
         * ACF Extended: 0.8
         * Field Group Location: Archive renamed to List
         */
        function field_group_location_list($field_group)
        {
        }
        /**
         * ACF Extended: 0.8
         * Field Filter Value: Removed from this version
         */
        function field_acfe_update($field)
        {
        }
        /**
         * ACF Extended: 0.8.5
         * Field Group/Clone: Fixed typo "Seamless"
         */
        function field_seamless_style($field)
        {
        }
        /**
         * ACF Extended: 0.8.8.5
         * Renamed Dynamic Message to Dynamic Render
         */
        function field_dynamic_message($field)
        {
        }
        /**
         * ACF Extended: 0.8.4.5
         * Field Flexible Content: Fix duplicated "layout_settings" & "layout_title"
         */
        function field_flexible_settings_title($fields, $parent)
        {
        }
        /**
         * ACF Extended: 0.8.6.7
         * Field Flexible Content: Compatibility for Layout Categories
         */
        function field_flexible_layout_categories($field)
        {
        }
        /**
         * ACF Extended: 0.8.5
         * Module Dynamic Forms: Upgrade previous versions
         */
        function acfe_form_import_compatibility($args, $name, $post_id)
        {
        }
        /**
         * Plugin: Post Types Order
         * https://wordpress.org/plugins/post-types-order/
         * The plugin apply custom order to ACF Field Group Post Type. We have to fix this
         */
        function pto_acf_field_group($ignore, $orderby, $query)
        {
        }
        /**
         * Plugin: Post Types Order
         * https://wordpress.org/plugins/post-types-order/
         * The plugin apply a drag & drop UI on ACF Field Group UI. We have to fix this
         */
        function pto_options_acf_field_group($options)
        {
        }
        /**
         * Plugin: Category Order and Taxonomy Terms Order
         * https://wordpress.org/plugins/taxonomy-terms-order/
         * The plugin add a submenu to 'Custom Fields' to order Field Group Categories. It's unecessary
         */
        function cotto_submenu()
        {
        }
        /**
         * Plugin: Rank Math SEO
         * https://wordpress.org/plugins/seo-by-rank-math/
         * Fix the plugin post metabox which is always above ACF metaboxes
         */
        function rankmath_metaboxes_priority()
        {
        }
        /**
         * Plugin: YOAST SEO
         * https://wordpress.org/plugins/wordpress-seo/
         * Fix the plugin post metabox which is always above ACF metaboxes
         */
        function yoast_metaboxes_priority()
        {
        }
        /**
         * ACF Extended: 0.8.3
         * Modules: Enable PolyLang Translation for ACFE Form Module
         * https://polylang.pro/doc/filter-reference/
         */
        function polylang($post_types, $is_settings)
        {
        }
        /*
         * ACF Extended: 0.8.8
         * Elementor Pro
         * Fix Elementor listing all private ACF Extended Field Groups in Dynamic ACF Tags options list
         */
        function elementor()
        {
        }
        /*
         * ACF Extended: 0.8.8.2
         * WP GraphQL ACF Supported Fields
         */
        function wpgraphql_supported_fields($fields)
        {
        }
        /*
         * ACF Extended: 0.8.8.4
         * WP GraphQL ACF Register Field
         */
        function wpgraphql_register_field($field_config, $type_name, $field_name, $config)
        {
        }
    }
    class acfe_assets
    {
        /*
         * Construct
         */
        function __construct()
        {
        }
        /*
         * Init
         */
        function init()
        {
        }
        /*
         * WP Admin Enqueue Scripts
         */
        function wp_admin_enqueue_scripts()
        {
        }
        /*
         * ACF Admin Enqueue Scripts
         */
        function acf_admin_enqueue_scripts()
        {
        }
    }
}
namespace {
    /*
     * Get Local Templates
     */
    function acfe_get_local_templates()
    {
    }
    /*
     * Get Local Template
     */
    function acfe_get_local_template($name = '')
    {
    }
    /*
     * Remove Local Template
     */
    function acfe_remove_local_template($name = '')
    {
    }
    /*
     * Have Local Templates
     */
    function acfe_have_local_templates()
    {
    }
    /*
     * Is Local Template
     */
    function acfe_is_local_template($name = '')
    {
    }
    /*
     * Count Local Template
     */
    function acfe_count_local_templates()
    {
    }
    /*
     * Add Local Template
     */
    function acfe_add_local_template($args = array())
    {
    }
    function has_flexible_grid($name, $post_id = \false)
    {
    }
    function get_flexible_grid($name, $post_id = \false)
    {
    }
    function get_flexible_grid_class($name, $post_id = \false)
    {
    }
    function get_layout_col()
    {
    }
    /*
     * Get Countries
     */
    function acfe_get_countries($args = array())
    {
    }
    /*
     * Get Country
     */
    function acfe_get_country($code, $field = '')
    {
    }
    /*
     * Get Languages
     */
    function acfe_get_languages($args = array())
    {
    }
    /*
     * Get Language
     */
    function acfe_get_language($locale, $field = '')
    {
    }
    /*
     * Get Currencies
     */
    function acfe_get_currencies($args = array())
    {
    }
    /*
     * Get Currency
     */
    function acfe_get_currency($code, $field = '')
    {
    }
    /*
     * acfe_force_sync
     */
    function acfe_force_sync()
    {
    }
    /*
     * acfe_force_sync_delete
     */
    function acfe_force_sync_delete()
    {
    }
    /*
     * Get Scripts
     */
    function acfe_get_scripts()
    {
    }
    /*
     * Get Script
     */
    function acfe_get_script($name = '')
    {
    }
    /*
     * Remove Script
     */
    function acfe_remove_script($name = '')
    {
    }
    /*
     * Have Scripts
     */
    function acfe_have_scripts()
    {
    }
    /*
     * Is Script
     */
    function acfe_is_script($name = '')
    {
    }
    /*
     * Count Script
     */
    function acfe_count_scripts()
    {
    }
    /*
     * Get Script Categories
     */
    function acfe_get_scripts_categories()
    {
    }
    /*
     * Register Script
     */
    function acfe_register_script($class)
    {
    }
    function acfe()
    {
    }
    /**
     * acfe_get_post_id_field_groups
     *
     * Get all field groups for a specific Post ID
     *
     * @param int $post_id
     *
     * @return array
     */
    function acfe_get_post_id_field_groups($post_id = 0)
    {
    }
    /**
     * acfe_get_locations_array
     *
     * Legacy way to retrieve Field Groups Locations data in ACF 5.8
     *
     * @param $locations
     *
     * @return array
     */
    function acfe_get_locations_array($locations)
    {
    }
    /**
     * acfe_render_field_group_locations_html
     *
     * Legacy way to display Field Groups Locations in ACF 5.8
     *
     * @param $field_group
     */
    function acfe_render_field_group_locations_html($field_group)
    {
    }
    /**
     * acfe_get_pretty_forms
     *
     * Similar to acf_get_pretty_post_types() but for ACFE Forms
     *
     * @param array $forms
     *
     * @return array
     */
    function acfe_get_pretty_forms($forms = array())
    {
    }
    /**
     * acfe_form_decrypt_args
     *
     * Wrapper to decrypt ACF & ACFE Forms arguments
     *
     * @return false|mixed
     */
    function acfe_form_decrypt_args()
    {
    }
    /**
     * acfe_is_form_success
     *
     * Check if the current page is a success form page
     *
     * @param false $form_name
     *
     * @return bool
     */
    function acfe_is_form_success($form_name = \false)
    {
    }
    /**
     * acfe_form_is_submitted
     *
     * check if the current page is a success form page
     *
     * @param false $form_name
     *
     * @return bool
     *
     * @deprecated
     */
    function acfe_form_is_submitted($form_name = \false)
    {
    }
    /**
     * acfe_form_unique_action_id
     *
     * Make actions names unique
     *
     * @param $form
     * @param $type
     *
     * @return string
     */
    function acfe_form_unique_action_id($form, $type)
    {
    }
    /**
     * acfe_form_get_actions
     *
     * Retrieve all actions output
     *
     * @return mixed
     */
    function acfe_form_get_actions()
    {
    }
    /**
     * acfe_form_get_action
     *
     * Retrieve the latest action output
     *
     * @param false $name
     * @param false $key
     *
     * @return false|mixed|null
     */
    function acfe_form_get_action($name = \false, $key = \false)
    {
    }
    /**
     * acfe_form_is_admin
     *
     * Check if current screen is back-end
     *
     * @return bool
     *
     * @deprecated
     */
    function acfe_form_is_admin()
    {
    }
    /**
     * acfe_form_is_front
     *
     * Check if current screen is front-end
     *
     * @return bool
     *
     * @deprecated
     */
    function acfe_form_is_front()
    {
    }
    /**
     * acfe_is_admin
     *
     * Check if current screen is back-end
     *
     * @return bool
     */
    function acfe_is_admin()
    {
    }
    /**
     * acfe_is_front
     *
     * Check if current screen is front-end
     *
     * @return bool
     */
    function acfe_is_front()
    {
    }
    /**
     * acfe_get_acf_screen_id
     *
     * Check if the current admin screen is ACF Field Group UI, ACF Tools, ACF Updates screens etc...
     *
     * @param string $page
     *
     * @return string
     */
    function acfe_get_acf_screen_id($page = '')
    {
    }
    /**
     * acfe_is_admin_screen
     *
     * Check if the current admin screen is ACF Field Group UI, ACF tools, ACF Updates screens etc...
     *
     * @param false $modules
     *
     * @return bool
     */
    function acfe_is_admin_screen($modules = \false)
    {
    }
    /**
     * acfe_match_location_rules
     *
     * Match screen data against an array of location
     *
     * @param $location
     * @param $screen
     *
     * @return bool
     */
    function acfe_match_location_rules($location, $screen)
    {
    }
    /**
     * acfe_is_dynamic_preview
     *
     * Check if currently in ACFE FlexibleContent Preview or ACF Block Type Preview
     *
     * @return bool
     */
    function acfe_is_dynamic_preview()
    {
    }
    /**
     * acfe_is_block_editor
     *
     * An enhanced version of acf_is_block_editor that also check if currently in a block type
     *
     * @return bool
     */
    function acfe_is_block_editor()
    {
    }
    /**
     * acfe_is_gutenberg
     *
     * Check if current screen is block editor
     *
     * @return bool
     * @deprecated
     */
    function acfe_is_gutenberg()
    {
    }
    /**
     * acfe_include
     *
     * Includes a file within the plugin
     *
     * @param string $filename
     */
    function acfe_include($filename = '')
    {
    }
    /**
     * acfe_get_path
     *
     * Returns the plugin path
     *
     * @param string $filename
     *
     * @return string
     */
    function acfe_get_path($filename = '')
    {
    }
    /**
     * acfe_get_url
     *
     * Returns the plugin url
     *
     * @param string $filename
     *
     * @return string
     */
    function acfe_get_url($filename = '')
    {
    }
    /**
     * acfe_get_view
     *
     * Load in a file from the 'admin/views' folder and allow variables to be passed through
     * Based on acf_get_view()
     *
     * @param string $path
     * @param array  $args
     */
    function acfe_get_view($path = '', $args = array())
    {
    }
    /**
     * acfe_load_textdomain
     *
     * Load textdomain files based on acf_load_textdomain()
     *
     * @param string $domain
     *
     * @return bool
     */
    function acfe_load_textdomain($domain = 'acfe')
    {
    }
    /**
     * acfe_get_post_type_objects
     *
     * Query & retrieve post types objects
     *
     * @param array $args
     *
     * @return array
     */
    function acfe_get_post_type_objects($args = array())
    {
    }
    /**
     * acfe_get_pretty_post_statuses
     *
     * Similar to acf_get_pretty_post_types() but for Post Statuses
     *
     * @param array $posts_statuses
     *
     * @return array
     */
    function acfe_get_pretty_post_statuses($posts_statuses = array())
    {
    }
    /**
     * acfe_get_registered_image_sizes
     *
     * Clone of wp_get_registered_image_subsizes. Available since WP 5.3
     * https://developer.wordpress.org/reference/functions/wp_get_registered_image_subsizes/
     *
     * @param false $filter
     *
     * @return array|mixed
     */
    function acfe_get_registered_image_sizes($filter = \false)
    {
    }
    /**
     * acfe_remove_class_filter
     *
     * Remove hook from inaccessible PHP class
     * https://gist.github.com/tripflex/c6518efc1753cf2392559866b4bd1a53
     *
     * @param        $tag
     * @param string $class_name
     * @param string $method_name
     * @param int    $priority
     *
     * @return bool
     */
    function acfe_remove_class_filter($tag, $class_name = '', $method_name = '', $priority = 10)
    {
    }
    /**
     * acfe_remove_class_action
     *
     * @param        $tag
     * @param string $class_name
     * @param string $method_name
     * @param int    $priority
     *
     * @return bool
     */
    function acfe_remove_class_action($tag, $class_name = '', $method_name = '', $priority = 10)
    {
    }
    function acfe_get_settings($selector = \null, $default = \null)
    {
    }
    function acfe_update_settings($selector = \null, $value = \null)
    {
    }
    function acfe_delete_settings($selector = \null)
    {
    }
    /**
     * acfe_get_taxonomy_objects
     *
     * Query & retrieve taxonomies objects
     *
     * @param array $args
     *
     * @return array
     */
    function acfe_get_taxonomy_objects($args = array())
    {
    }
    /**
     * acfe_get_taxonomy_terms_ids
     *
     * Similar to acf_get_taxonomy_terms()
     * Returns "array('256' => 'Category name')" instead of "array('category:category_name' => 'Category name')"
     *
     * @param array $taxonomies
     *
     * @return array
     */
    function acfe_get_taxonomy_terms_ids($taxonomies = array())
    {
    }
    /**
     * acfe_get_term_level
     *
     * Retrive the Term Level number
     *
     * @param $term
     * @param $taxonomy
     *
     * @return int
     */
    function acfe_get_term_level($term, $taxonomy)
    {
    }
    function acfe_get_desync_php_field_groups()
    {
    }
    /**
     * acfe_get_field_group_from_field
     *
     * Retrieve the Field Group, starting from any field or sub field
     *
     * @param $field
     *
     * @return array|false|mixed|void|null
     */
    function acfe_get_field_group_from_field($field)
    {
    }
    /**
     * acfe_get_field_descendants
     *
     * Similar to acf_get_field_ancestors but retrieve all descendants instead
     *
     * @param $field
     *
     * @return array
     */
    function acfe_get_field_descendants($field)
    {
    }
    /**
     * acfe_extract_sub_field
     *
     * Extract Sub Field form Layout & Set Value
     *
     * @param $layout
     * @param $name
     * @param $value
     *
     * @return false|mixed
     */
    function acfe_extract_sub_field(&$layout, $name, $value)
    {
    }
    /**
     * acfe_map_any_field
     *
     * @param $fields
     * @param $type
     * @param $callback
     *
     * @return mixed
     */
    function acfe_map_any_field($fields, $type, $callback)
    {
    }
    /**
     * acfe_get_fields
     *
     * This function will return an array containing all the custom field values for a specific post_id.
     * Similar to get_fields(), but but allow to output dataset identical to a $_POST dataset
     *
     * Unformatted:
     * array(
     *     'field_60ed19d658ce1' => array(
     *         'field_60eaeee6e6fa4' => 'Value',
     *     )
     * )
     *
     * Formatted:
     * array(
     *     'my_field' => array(
     *         'my_field_subfield' => 'Value',
     *     )
     * )
     *
     * @param false $post_id
     * @param false $format_value
     *
     * @return array|false
     */
    function acfe_get_fields($post_id = \false, $format_value = \false)
    {
    }
    /**
     * acfe_get_meta
     *
     * Retrieve all meta details of a given object in the following format
     *
     * array(
     *     'key'   => 'field_abcd1234',
     *     'name'  => 'repeater_0_my_field',
     *     'value' => 'Text value',
     *     'field' => array(
     *         'key'  => 'field_abcd1234',
     *         'name' => 'My Field',
     *         'type' => 'text',
     *     ),
     *     'field_group' => array(
     *         'key'   => 'group_abcd1234',
     *         'title' => 'Field Group',
     *     )
     * )
     *
     * @param false $post_id
     *
     * @return array
     */
    function acfe_get_meta($post_id = \false)
    {
    }
    /**
     * acfe_delete_orphan_meta
     *
     * Delete orphan meta from a post id
     *
     * @param int $post_id
     */
    function acfe_delete_orphan_meta($post_id = 0, $confirm = \true)
    {
    }
    /**
     * acfe_get_orphan_meta
     *
     * Retrieve a list of orphan meta from a post id
     *
     * @param int $post_id
     *
     * @return array
     */
    function acfe_get_orphan_meta($post_id = 0)
    {
    }
    /**
     * acfe_get_roles
     *
     * Retrieve all available roles (working with WPMU)
     *
     * @param array $filtered_user_roles
     *
     * @return array
     */
    function acfe_get_roles($filtered_user_roles = array())
    {
    }
    /**
     * acfe_get_current_user_roles
     *
     * Retrieve currently logged user roles
     *
     * @return false|string[]
     */
    function acfe_get_current_user_roles()
    {
    }
    /**
     * acfe_get_abs_path_to_url
     *
     * Convert "/url" to "https://www.domain.com/url"
     *
     * @param string $path
     *
     * @return string
     */
    function acfe_get_abs_path_to_url($path = '')
    {
    }
    /**
     * acfe_locate_file_url
     *
     * Similar to locate_template(), but locate File URL instead
     * Check if file exists locally and return URL (supports parent/child theme)
     *
     * @param $filenames
     *
     * @return mixed|string
     */
    function acfe_locate_file_url($filenames)
    {
    }
    /**
     * acfe_locate_file_path
     *
     * Similar to locate_template(), but locate File Path instead
     * Based on wp-includes\template.php:653
     *
     * @param $filenames
     *
     * @return mixed|string
     */
    function acfe_locate_file_path($filenames)
    {
    }
    function get_flexible($selector, $post_id = \false)
    {
    }
    function the_flexible($selector, $post_id = \false)
    {
    }
    function has_flexible($selector, $post_id = \false)
    {
    }
    /**
     * acfe_flexible_render_layout_template
     *
     * Find & include the Flexible Content Layouts PHP files
     *
     * @param $layout
     * @param $field
     */
    function acfe_flexible_render_layout_template($layout, $field)
    {
    }
    /**
     * acfe_flexible_render_layout_enqueue
     *
     * Find & Enqueue Scripts & Styles files for the Flexible Content
     *
     * @param $layout
     * @param $field
     */
    function acfe_flexible_render_layout_enqueue($layout, $field)
    {
    }
    function have_settings()
    {
    }
    function the_setting()
    {
    }
    function have_archive($_post_type = \false)
    {
    }
    function the_archive()
    {
    }
    /**
     * acfe_the_archive_post_id
     *
     * Dynamic Post Type: Archive Page helper
     *
     * @param $null
     * @param $post_id
     *
     * @return mixed|void
     */
    function acfe_the_archive_post_id($null, $post_id)
    {
    }
    /**
     * acfe_get_post_id
     *
     * Universal way to always retrieve the correct ACF Post ID on front-end and back-end
     * Returns ACF formatted Post ID. ie: 12|term_24|user_56|my-options
     *
     * @param bool $format
     *
     * @return mixed|void
     */
    function acfe_get_post_id($format = \true)
    {
    }
    /**
     * acfe_maybe_get
     *
     * Similar to acf_maybe_get() but also works with OBJECTS
     *
     * @param array $array
     * @param int   $key
     * @param null  $default
     *
     * @return mixed|null
     */
    function acfe_maybe_get($array = array(), $key = 0, $default = \null)
    {
    }
    /**
     * acfe_maybe_get_REQUEST
     *
     * Similar to acf_maybe_get_POST() but works with $_REQUEST
     *
     * @param string $key
     * @param null   $default
     *
     * @return mixed|null
     */
    function acfe_maybe_get_REQUEST($key = '', $default = \null)
    {
    }
    /**
     * acfe_is_json
     *
     * Check if the string is a json input
     * https://stackoverflow.com/a/6041773
     *
     * @param $string
     *
     * @return bool
     */
    function acfe_is_json($string)
    {
    }
    /**
     * acfe_array_keys_r
     *
     * Array Keys Recursive
     *
     * @param $array
     *
     * @return int[]|string[]
     */
    function acfe_array_keys_r($array)
    {
    }
    /**
     * acfe_starts_with
     *
     * Check if a strings starts with something
     *
     * @param $haystack
     * @param $needle
     *
     * @return bool
     */
    function acfe_starts_with($haystack, $needle)
    {
    }
    /**
     * acfe_ends_with
     *
     * Check if a strings ends with something
     *
     * @param $haystack
     * @param $needle
     *
     * @return bool
     */
    function acfe_ends_with($haystack, $needle)
    {
    }
    /**
     * acfe_array_insert_before
     *
     * Insert data before a specific array key
     *
     * @param       $key
     * @param array $array
     * @param       $new_key
     * @param       $new_value
     *
     * @return array
     */
    function acfe_array_insert_before($key, array &$array, $new_key, $new_value)
    {
    }
    /**
     * acfe_array_insert_after
     *
     * Insert data after a specific array key
     *
     * @param       $key
     * @param array $array
     * @param       $new_key
     * @param       $new_value
     *
     * @return array
     */
    function acfe_array_insert_after($key, array &$array, $new_key, $new_value)
    {
    }
    /**
     * acfe_array_move
     *
     * Move the array key from position $a to $b
     *
     * @param $array
     * @param $a
     * @param $b
     */
    function acfe_array_move(&$array, $a, $b)
    {
    }
    /**
     * acfe_add_validation_error
     *
     * Similar to acf_add_validation_error() but allows to use field name or field key
     *
     * @param string $selector
     * @param string $message
     *
     * @return mixed
     */
    function acfe_add_validation_error($selector = '', $message = '')
    {
    }
    /**
     * acfe_number_suffix
     *
     * Adds 1"st", 2"nd", 3"rd" to number
     *
     * @param $num
     *
     * @return string
     */
    function acfe_number_suffix($num)
    {
    }
    /**
     * acfe_array_to_string
     *
     * Convert an array to string
     *
     * @param array $array
     *
     * @return array|false|mixed|string
     */
    function acfe_array_to_string($array = array())
    {
    }
    /**
     * acfe_is_dev
     *
     * Check if the developer mode is enabled
     *
     * @return bool
     */
    function acfe_is_dev()
    {
    }
    /**
     * acfe_is_super_dev
     *
     * Only for awesome developers!
     *
     * @return bool
     */
    function acfe_is_super_dev()
    {
    }
    /**
     * acfe_is_post_type_reserved
     *
     * Check if the post type is reserved
     *
     * @param $post_type
     *
     * @return bool
     */
    function acfe_is_post_type_reserved($post_type)
    {
    }
    /**
     * acfe_is_post_type_reserved_dev
     *
     * Check if the post type is reserved in dev mode
     *
     * @param $post_type
     *
     * @return bool
     */
    function acfe_is_post_type_reserved_dev($post_type)
    {
    }
    /**
     * acfe_is_taxonomy_reserved
     *
     * Check if the taxonomy is reserved
     *
     * @param $taxonomy
     *
     * @return bool
     */
    function acfe_is_taxonomy_reserved($taxonomy)
    {
    }
    /**
     * acfe_is_taxonomy_reserved_dev
     *
     * Check if the taxonomy is reserved in dev mode
     *
     * @param $taxonomy
     *
     * @return bool
     */
    function acfe_is_taxonomy_reserved_dev($taxonomy)
    {
    }
    /**
     * acfe_update_setting
     *
     * Similar to acf_update_setting() but with the 'acfe' prefix
     *
     * @param $name
     * @param $value
     *
     * @return bool|true
     */
    function acfe_update_setting($name, $value)
    {
    }
    /**
     * acfe_append_setting
     *
     * Similar to acf_append_setting() but with the 'acfe' prefix
     *
     * @param $name
     * @param $value
     *
     * @return bool|true
     */
    function acfe_append_setting($name, $value)
    {
    }
    /**
     * acfe_get_setting
     *
     * Similar to acf_get_setting() but with the 'acfe' prefix
     *
     * @param      $name
     * @param null $value
     *
     * @return mixed|void
     */
    function acfe_get_setting($name, $value = \null)
    {
    }
    /**
     * acfe_unset
     *
     * Safely remove an array key
     *
     * @param $array
     * @param $key
     */
    function acfe_unset(&$array, $key)
    {
    }
    /**
     * acfe_unarray
     *
     * Retrieve and return only the first value of an array
     *
     * @param $val
     *
     * @return false|mixed
     */
    function acfe_unarray($val)
    {
    }
    /**
     * acfe_get_ip
     * @return mixed
     */
    function acfe_get_ip()
    {
    }
    /*
     * acfe_setup_meta
     */
    function acfe_setup_meta($meta = array(), $post_id = 0, $is_main = \false)
    {
    }
    /*
     * acfe_reset_meta
     */
    function acfe_reset_meta($post_id = \null)
    {
    }
    /*
     * acfe_get_local_post_ids
     */
    function acfe_get_local_post_ids()
    {
    }
    /*
     * acfe_get_local_post_id
     */
    function acfe_get_local_post_id()
    {
    }
    /*
     * acfe_is_local_post_id
     */
    function acfe_is_local_post_id($post_id)
    {
    }
    /*
     * acfe_is_local_meta
     */
    function acfe_is_local_meta()
    {
    }
    function acfe_prepare_checkbox_labels($field)
    {
    }
    function acfe_field_textarea_settings($field)
    {
    }
    function acfe_field_textarea_wrapper($wrapper, $field)
    {
    }
    function acfe_field_textarea_new_lines($field)
    {
    }
    function acfe_repeater_settings($field)
    {
    }
    function acfe_repeater_wrapper($wrapper, $field)
    {
    }
    function acfe_form($args = array())
    {
    }
    function acfe_dev_get_wp_meta()
    {
    }
    function acfe_dev_get_acf_meta()
    {
    }
    function acfe_dev_count_meta()
    {
    }
    function acfe_form_render_fields($content, $post_id, $args)
    {
    }
    function acfe_form_map_field_value($field, $post_id = 0, $form = array())
    {
    }
    function acfe_form_map_field_value_load($field, $post_id = 0, $form = array())
    {
    }
    function acfe_form_filter_meta($meta, $acf)
    {
    }
    function acfe_form_format_value($value, $field, $deprecated = \null)
    {
    }
    // Match field_abcdef123456
    function acfe_form_map_field_key($content)
    {
    }
    function acfe_form_map_current($content, $post_id = 0, $form = array())
    {
    }
    // Match {query_var:name} {query_var:name:key}
    function acfe_form_map_query_var($content)
    {
    }
    // Match {action:field}
    function acfe_form_map_action($content)
    {
    }
    // Match {request:name} {request:name:key}
    function acfe_form_map_request($content)
    {
    }
    // Match {get_field:name} {get_field:name:123}
    function acfe_form_map_get_field($content, $post_id = 0)
    {
    }
    // Match {get_option:name} {get_option:name:key}
    function acfe_form_map_get_option($content)
    {
    }
    // Match {field:name} {field:key}
    function acfe_form_map_field($content)
    {
    }
    // Match {fields}
    function acfe_form_map_fields($content, $post_id, $form)
    {
    }
    function acfe_form_map_current_value($name, $post, $form = \false)
    {
    }
    function acfe_form_map_vs_fields($map, $fields, $post_id = 0, $form = array())
    {
    }
    function acfe_is_single_meta_enabled($post_id = \null)
    {
    }
    function acfe_single_meta_validate_post_id($post_id)
    {
    }
    function acfe_get_single_meta($post_id)
    {
    }
    function acfe_delete_single_meta($post_id)
    {
    }
    /*
     * Helper: Get PHP Files
     */
    function acfe_get_local_php_files()
    {
    }
    function acf_get_local_json_files()
    {
    }
    /**
     * Helper: Sync available
     */
    function acfe_is_sync_available($field_group)
    {
    }
    function acfe_has_json_sync($field_group)
    {
    }
    function acfe_has_php_sync($field_group)
    {
    }
    function acfe_get_local_php_file($field_group)
    {
    }
    function acfe_get_local_json_file($field_group)
    {
    }
    /*
     * ACFE: Import Form
     */
    function acfe_import_form($args)
    {
    }
    /*
     * Deprecated ACFE: Import Forms
     */
    function acfe_import_forms($forms)
    {
    }
    /*
     * Deprecated ACFE: Import Dynamic Form
     */
    function acfe_import_dynamic_form($forms = \false)
    {
    }
    /*
     * Is Multilang Enabled
     */
    function acfe_is_multilang()
    {
    }
    /*
     * Get Multilang Data
     */
    function acfe_get_multilang()
    {
    }
    /*
     * Get Languages
     */
    function acfe_get_multilang_languages($pluck = '', $type = '', $plugin = '')
    {
    }
    /*
     * Is Polylang
     */
    function acfe_is_polylang()
    {
    }
    /*
     * Is WPML
     */
    function acfe_is_wpml()
    {
    }
    /*
     * Get Post Language
     */
    function acfe_get_post_lang($post_id, $field = \false)
    {
    }
    /*
     * Get Post Translated
     */
    function acfe_get_post_translated($post_id, $lang = \false)
    {
    }
    /*
     * Get Default Post Translated
     */
    function acfe_get_post_translated_default($post_id)
    {
    }
    /*
     * Translate String
     */
    function acfe_translate($string, $name = \false, $textdomain = 'acfe')
    {
    }
    /*
     * Deprecated Translate String
     */
    function acfe__($string, $name = \false, $textdomain = 'acfe')
    {
    }
    /*
     * Deprecated Translate String (echo)
     */
    function acfe__e($string, $name = \false, $textdomain = 'acfe')
    {
    }
}