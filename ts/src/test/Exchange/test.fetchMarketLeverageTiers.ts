
import assert from 'assert';
import testLeverageTier from './test.leverageTier';

async function testFetchMarketLeverageTiers (exchange, symbol) {
    const method = 'fetchMarketLeverageTiers';
    const tiers = await exchange[method] (symbol);
    assert (Array.isArray(tiers), exchange.id + ' ' + method + ' ' + symbol + ' must return an array. ' + exchange.json(tiers));
    const arrayLength = tiers.length;
    assert (arrayLength >= 1, exchange.id + ' ' + method + ' ' + symbol + ' must return an array with at least one entry. ' + exchange.json(tiers));
    console.log (exchange.id, method, 'fetched', arrayLength, 'entries, asserting each ...');
    for (let j=0; j < tiers.length; j++) {
        testLeverageTier (exchange, method, tiers[j]);
    }
}

export default testFetchMarketLeverageTiers;