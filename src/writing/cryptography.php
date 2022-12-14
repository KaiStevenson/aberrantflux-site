<?php
$title = "Principles of Crytography for Data Security";
require($_SERVER["DOCUMENT_ROOT"] . "/head.php");
require($_SERVER["DOCUMENT_ROOT"] . "/header.php");
?>
<p>As the amount of life spent online continues to increase, a great deal of private information is naturally
    being transmitted: banking details, medical records, business correspondences. Where once these exchanges of
    data would have occured between a small set of individuals in a shared space, they now happen between
    continents, through hundreds of servers and over complex network infrastructures. It is a system that cannot
    be fully accounted for by any individual, and so the means of transmission are insecure--much like having a
    letter transmitted by a series of couriers, the data is liable to be intercepted or modified. And so both
    parties in the exchange take on a risk that may prohibit especially critical data from being sent.
    Cryptography is the study of data obfuscation--a means of making a message readable only by some. It is the
    answer to the question "when the means of transmission cannot be trusted, how can information be conveyed
    securely?</p>
<p>There are two classes of encryption: symmetric and asymmetric. Symmetric encryption allows a message to be
    encoded and decoded with the same piece of information, or key. The ancient Caesar cipher is an example of
    this; an arbitrary number acting as the key was agreed upon by both parties, and every letter in the message
    was shifted through the alphabet by that amount. It could easily be decoded by anyone who knew the key by
    simply shifting the letters backward through the alphabet. Simple algorithms such as the Caesar cipher are
    vulnerable to various attacks due to the patterns that they create in the ciphertext. A given letter may
    always be encoded in the same way, meaning that the key could be compromised if the attacker gained access
    to the plaintext and ciphertext forms of the same message. And a message could be decrypted without the key
    by recognizing repeated patterns in the ciphertext representing common words. More advanced symmetric
    encryption methods--like the Advanced Encryption Standard (AES) algorithm, developed for the US National
    Institute of Standards and Technologies--disrupt patterns in the message to prevent these types of attacks.
</p>
<p>Symmetric encryption is an imperfect solution in the internet age. Because it requires both parties to know
    the same secret key, those parties must have a secure form of communication already established. In the days
    of Caesar, this key exchange could be performed confidentially by two individuals in close proximity. When
    encryption is used on the internet, it cannot be assumed that the communicating parties will have had any
    physical interactions--and it would be impractical to expect every new customer of an online banking service
    to perform a physical key exchange. Asymmetric encryption solves this problem by removing the key exchange.
    Instead of encrypting and decrypting a message with the same key, an asymmetric encryption algorithm has a
    keypair, comprising a public key, used for encrypting a message, and a private key, used for decrypting a
    message. The keys are so named because the private key is never shared, while the public key can be
    broadcast widely. </p>
<p>Typically, it demands more processing power to encrypt and decrypt messages with an asymmetric encryption
    implementation than a comparable symmetric one. For this reason, it is desirable to use symmetric encryption
    for most communications. An asymmetric implementation such as the Rivest--Shamir--Adleman (RSA) system is
    used to perform the key exchange. One of the devices will broadcast its public RSA key to the other, which
    will respond by generating an AES key, encrypting it with that RSA key, and returning it. This method of key
    exchange is secure, even if every network packet is intercepted. Once the devices share an AES key, they can
    communicate with the more efficient symmetric encryption method.</p>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>