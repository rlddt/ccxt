
import testMarket from './test.market';

async function testLoadMarkets (exchange) {
    const method = 'loadMarkets';
    const markets = await exchange[method] ();
    const marketValues = Object.values (markets);
    console.log (exchange.id, method, 'fetched', marketValues.length, 'entries, asserting each ...');
    for (let i = 0; i < marketValues.length; i++) {
        testMarket (exchange, method, marketValues[i]);
    }
}

export default testLoadMarkets;