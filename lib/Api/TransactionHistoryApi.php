<?php
/**
 * TransactionHistoryApi
 * PHP version 5
 *
 * @category Class
 * @package  iimmpact
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * IIMMPACT API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2020-09-14T13:01:14Z
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace iimmpact\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use iimmpact\ApiException;
use iimmpact\Configuration;
use iimmpact\HeaderSelector;
use iimmpact\ObjectSerializer;

/**
 * TransactionHistoryApi Class Doc Comment
 *
 * @category Class
 * @package  iimmpact
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionHistoryApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation v1BalanceStatementGet
     *
     * @param  string $date date (required)
     * @param  string $limit limit (optional)
     * @param  string $remarks remarks (optional)
     * @param  string $sort sort (optional)
     * @param  string $type type (optional)
     * @param  string $direction direction (optional)
     * @param  string $page page (optional)
     * @param  string $amount amount (optional)
     *
     * @throws \iimmpact\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \iimmpact\Model\BalanceStatementResponse
     */
    public function v1BalanceStatementGet($date, $limit = null, $remarks = null, $sort = null, $type = null, $direction = null, $page = null, $amount = null)
    {
        list($response) = $this->v1BalanceStatementGetWithHttpInfo($date, $limit, $remarks, $sort, $type, $direction, $page, $amount);
        return $response;
    }

    /**
     * Operation v1BalanceStatementGetWithHttpInfo
     *
     * @param  string $date (required)
     * @param  string $limit (optional)
     * @param  string $remarks (optional)
     * @param  string $sort (optional)
     * @param  string $type (optional)
     * @param  string $direction (optional)
     * @param  string $page (optional)
     * @param  string $amount (optional)
     *
     * @throws \iimmpact\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \iimmpact\Model\BalanceStatementResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1BalanceStatementGetWithHttpInfo($date, $limit = null, $remarks = null, $sort = null, $type = null, $direction = null, $page = null, $amount = null)
    {
        $returnType = '\iimmpact\Model\BalanceStatementResponse';
        $request = $this->v1BalanceStatementGetRequest($date, $limit, $remarks, $sort, $type, $direction, $page, $amount);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\iimmpact\Model\BalanceStatementResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\iimmpact\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1BalanceStatementGetAsync
     *
     * 
     *
     * @param  string $date (required)
     * @param  string $limit (optional)
     * @param  string $remarks (optional)
     * @param  string $sort (optional)
     * @param  string $type (optional)
     * @param  string $direction (optional)
     * @param  string $page (optional)
     * @param  string $amount (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1BalanceStatementGetAsync($date, $limit = null, $remarks = null, $sort = null, $type = null, $direction = null, $page = null, $amount = null)
    {
        return $this->v1BalanceStatementGetAsyncWithHttpInfo($date, $limit, $remarks, $sort, $type, $direction, $page, $amount)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1BalanceStatementGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $date (required)
     * @param  string $limit (optional)
     * @param  string $remarks (optional)
     * @param  string $sort (optional)
     * @param  string $type (optional)
     * @param  string $direction (optional)
     * @param  string $page (optional)
     * @param  string $amount (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1BalanceStatementGetAsyncWithHttpInfo($date, $limit = null, $remarks = null, $sort = null, $type = null, $direction = null, $page = null, $amount = null)
    {
        $returnType = '\iimmpact\Model\BalanceStatementResponse';
        $request = $this->v1BalanceStatementGetRequest($date, $limit, $remarks, $sort, $type, $direction, $page, $amount);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1BalanceStatementGet'
     *
     * @param  string $date (required)
     * @param  string $limit (optional)
     * @param  string $remarks (optional)
     * @param  string $sort (optional)
     * @param  string $type (optional)
     * @param  string $direction (optional)
     * @param  string $page (optional)
     * @param  string $amount (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v1BalanceStatementGetRequest($date, $limit = null, $remarks = null, $sort = null, $type = null, $direction = null, $page = null, $amount = null)
    {
        // verify the required parameter 'date' is set
        if ($date === null || (is_array($date) && count($date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date when calling v1BalanceStatementGet'
            );
        }

        $resourcePath = '/v1/balance-statement';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($remarks !== null) {
            $queryParams['remarks'] = ObjectSerializer::toQueryValue($remarks);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type);
        }
        // query params
        if ($direction !== null) {
            $queryParams['direction'] = ObjectSerializer::toQueryValue($direction);
        }
        // query params
        if ($date !== null) {
            $queryParams['date'] = ObjectSerializer::toQueryValue($date);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($amount !== null) {
            $queryParams['amount'] = ObjectSerializer::toQueryValue($amount);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v1TransactionsGet
     *
     * @param  string $date date (required)
     * @param  string $refid refid (optional)
     * @param  string $limit limit (optional)
     * @param  string $sort sort (optional)
     * @param  string $offset offset (optional)
     * @param  string $direction direction (optional)
     * @param  string $status status (optional)
     * @param  string $account account (optional)
     * @param  string $accept_encoding accept_encoding (optional)
     * @param  string $sn sn (optional)
     * @param  string $product product (optional)
     *
     * @throws \iimmpact\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \iimmpact\Model\TransactionsResponse
     */
    public function v1TransactionsGet($date, $refid = null, $limit = null, $sort = null, $offset = null, $direction = null, $status = null, $account = null, $accept_encoding = null, $sn = null, $product = null)
    {
        list($response) = $this->v1TransactionsGetWithHttpInfo($date, $refid, $limit, $sort, $offset, $direction, $status, $account, $accept_encoding, $sn, $product);
        return $response;
    }

    /**
     * Operation v1TransactionsGetWithHttpInfo
     *
     * @param  string $date (required)
     * @param  string $refid (optional)
     * @param  string $limit (optional)
     * @param  string $sort (optional)
     * @param  string $offset (optional)
     * @param  string $direction (optional)
     * @param  string $status (optional)
     * @param  string $account (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $sn (optional)
     * @param  string $product (optional)
     *
     * @throws \iimmpact\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \iimmpact\Model\TransactionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1TransactionsGetWithHttpInfo($date, $refid = null, $limit = null, $sort = null, $offset = null, $direction = null, $status = null, $account = null, $accept_encoding = null, $sn = null, $product = null)
    {
        $returnType = '\iimmpact\Model\TransactionsResponse';
        $request = $this->v1TransactionsGetRequest($date, $refid, $limit, $sort, $offset, $direction, $status, $account, $accept_encoding, $sn, $product);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\iimmpact\Model\TransactionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\iimmpact\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1TransactionsGetAsync
     *
     * 
     *
     * @param  string $date (required)
     * @param  string $refid (optional)
     * @param  string $limit (optional)
     * @param  string $sort (optional)
     * @param  string $offset (optional)
     * @param  string $direction (optional)
     * @param  string $status (optional)
     * @param  string $account (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $sn (optional)
     * @param  string $product (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1TransactionsGetAsync($date, $refid = null, $limit = null, $sort = null, $offset = null, $direction = null, $status = null, $account = null, $accept_encoding = null, $sn = null, $product = null)
    {
        return $this->v1TransactionsGetAsyncWithHttpInfo($date, $refid, $limit, $sort, $offset, $direction, $status, $account, $accept_encoding, $sn, $product)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1TransactionsGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $date (required)
     * @param  string $refid (optional)
     * @param  string $limit (optional)
     * @param  string $sort (optional)
     * @param  string $offset (optional)
     * @param  string $direction (optional)
     * @param  string $status (optional)
     * @param  string $account (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $sn (optional)
     * @param  string $product (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1TransactionsGetAsyncWithHttpInfo($date, $refid = null, $limit = null, $sort = null, $offset = null, $direction = null, $status = null, $account = null, $accept_encoding = null, $sn = null, $product = null)
    {
        $returnType = '\iimmpact\Model\TransactionsResponse';
        $request = $this->v1TransactionsGetRequest($date, $refid, $limit, $sort, $offset, $direction, $status, $account, $accept_encoding, $sn, $product);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1TransactionsGet'
     *
     * @param  string $date (required)
     * @param  string $refid (optional)
     * @param  string $limit (optional)
     * @param  string $sort (optional)
     * @param  string $offset (optional)
     * @param  string $direction (optional)
     * @param  string $status (optional)
     * @param  string $account (optional)
     * @param  string $accept_encoding (optional)
     * @param  string $sn (optional)
     * @param  string $product (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v1TransactionsGetRequest($date, $refid = null, $limit = null, $sort = null, $offset = null, $direction = null, $status = null, $account = null, $accept_encoding = null, $sn = null, $product = null)
    {
        // verify the required parameter 'date' is set
        if ($date === null || (is_array($date) && count($date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date when calling v1TransactionsGet'
            );
        }

        $resourcePath = '/v1/transactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($refid !== null) {
            $queryParams['refid'] = ObjectSerializer::toQueryValue($refid);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($direction !== null) {
            $queryParams['direction'] = ObjectSerializer::toQueryValue($direction);
        }
        // query params
        if ($date !== null) {
            $queryParams['date'] = ObjectSerializer::toQueryValue($date);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        // query params
        if ($account !== null) {
            $queryParams['account'] = ObjectSerializer::toQueryValue($account);
        }
        // query params
        if ($sn !== null) {
            $queryParams['sn'] = ObjectSerializer::toQueryValue($sn);
        }
        // query params
        if ($product !== null) {
            $queryParams['product'] = ObjectSerializer::toQueryValue($product);
        }
        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = ObjectSerializer::toHeaderValue($accept_encoding);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
