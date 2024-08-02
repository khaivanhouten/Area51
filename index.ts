import { Client, GatewayIntentBits } from 'discord.js';
import { config } from 'dotenv';
import { commandHandler } from './handlers/commandHandler';

config();

const client = new Client({ intents: [GatewayIntentBits.Guilds, GatewayIntentBits.GuildMessages, GatewayIntentBits.MessageContent] });

client.once('ready', () => {
    console.log(`Logged in as ${client.user?.tag}!`);
});

client.on('messageCreate', async (message) => {
    if (message.author.bot) return;
    if (message.content.startsWith('!')) {
        await commandHandler(message);
    }
});

client.login(token kalean);
