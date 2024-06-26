<?php

namespace ccxt\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class indodax extends \ccxt\Exchange {
    public function public_get_api_server_time($params = array()) {
        return $this->request('api/server_time', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_api_pairs($params = array()) {
        return $this->request('api/pairs', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_api_price_increments($params = array()) {
        return $this->request('api/price_increments', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_api_summaries($params = array()) {
        return $this->request('api/summaries', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_api_ticker_pair($params = array()) {
        return $this->request('api/ticker/{pair}', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_api_ticker_all($params = array()) {
        return $this->request('api/ticker_all', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_api_trades_pair($params = array()) {
        return $this->request('api/trades/{pair}', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_api_depth_pair($params = array()) {
        return $this->request('api/depth/{pair}', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_tradingview_history_v2($params = array()) {
        return $this->request('tradingview/history_v2', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_post_getinfo($params = array()) {
        return $this->request('getInfo', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function private_post_transhistory($params = array()) {
        return $this->request('transHistory', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function private_post_trade($params = array()) {
        return $this->request('trade', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_tradehistory($params = array()) {
        return $this->request('tradeHistory', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function private_post_openorders($params = array()) {
        return $this->request('openOrders', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function private_post_orderhistory($params = array()) {
        return $this->request('orderHistory', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function private_post_getorder($params = array()) {
        return $this->request('getOrder', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function private_post_cancelorder($params = array()) {
        return $this->request('cancelOrder', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function private_post_withdrawfee($params = array()) {
        return $this->request('withdrawFee', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function private_post_withdrawcoin($params = array()) {
        return $this->request('withdrawCoin', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function private_post_listdownline($params = array()) {
        return $this->request('listDownline', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function private_post_checkdownline($params = array()) {
        return $this->request('checkDownline', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function private_post_createvoucher($params = array()) {
        return $this->request('createVoucher', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function publicGetApiServerTime($params = array()) {
        return $this->request('api/server_time', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetApiPairs($params = array()) {
        return $this->request('api/pairs', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetApiPriceIncrements($params = array()) {
        return $this->request('api/price_increments', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetApiSummaries($params = array()) {
        return $this->request('api/summaries', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetApiTickerPair($params = array()) {
        return $this->request('api/ticker/{pair}', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetApiTickerAll($params = array()) {
        return $this->request('api/ticker_all', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetApiTradesPair($params = array()) {
        return $this->request('api/trades/{pair}', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetApiDepthPair($params = array()) {
        return $this->request('api/depth/{pair}', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetTradingviewHistoryV2($params = array()) {
        return $this->request('tradingview/history_v2', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privatePostGetInfo($params = array()) {
        return $this->request('getInfo', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function privatePostTransHistory($params = array()) {
        return $this->request('transHistory', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function privatePostTrade($params = array()) {
        return $this->request('trade', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostTradeHistory($params = array()) {
        return $this->request('tradeHistory', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function privatePostOpenOrders($params = array()) {
        return $this->request('openOrders', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function privatePostOrderHistory($params = array()) {
        return $this->request('orderHistory', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function privatePostGetOrder($params = array()) {
        return $this->request('getOrder', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function privatePostCancelOrder($params = array()) {
        return $this->request('cancelOrder', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function privatePostWithdrawFee($params = array()) {
        return $this->request('withdrawFee', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function privatePostWithdrawCoin($params = array()) {
        return $this->request('withdrawCoin', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function privatePostListDownline($params = array()) {
        return $this->request('listDownline', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function privatePostCheckDownline($params = array()) {
        return $this->request('checkDownline', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
    public function privatePostCreateVoucher($params = array()) {
        return $this->request('createVoucher', 'private', 'POST', $params, null, null, array("cost" => 4));
    }
}
