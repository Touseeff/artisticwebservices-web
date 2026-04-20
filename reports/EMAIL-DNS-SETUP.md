# Email Deliverability — DNS Setup Guide
## Artastic Web Services — Hostinger SMTP

### Step 1: SPF Record
Add TXT record to artasticwebservices.com DNS:
Name: @ (or artasticwebservices.com)
Type: TXT
Value: v=spf1 include:_spf.hostinger.com ~all

### Step 2: DKIM Record
1. Log in to Hostinger hPanel
2. Go to Email → Email Accounts → your email → DKIM
3. Copy the DKIM public key
4. Add TXT record:
   Name: default._domainkey (or as shown in hPanel)
   Type: TXT
   Value: [paste DKIM key from hPanel]

### Step 3: DMARC Record
Add TXT record:
Name: _dmarc
Type: TXT
Value: v=DMARC1; p=quarantine; rua=mailto:info@artasticwebservices.com; ruf=mailto:info@artasticwebservices.com; fo=1

### Step 4: GitHub Actions Secrets
Add these secrets in GitHub repo → Settings → Secrets → Actions:
- FTP_HOST: your Hostinger FTP host
- FTP_USERNAME: your FTP username
- FTP_PASSWORD: your FTP password
- SMTP_HOST: smtp.hostinger.com
- SMTP_PORT: 465
- SMTP_SECURE: ssl
- SMTP_USERNAME: info@artasticwebservices.com
- SMTP_PASSWORD: [your SMTP password]
- SMTP_FROM_EMAIL: info@artasticwebservices.com
- SMTP_FROM_NAME: Artastic Web Services
- MAIL_TO: info@artasticwebservices.com

### Verification
After setting up DNS records (allow 24-48h propagation):
1. Test SPF: https://mxtoolbox.com/spf.aspx
2. Test DKIM: https://mxtoolbox.com/dkim.aspx
3. Test DMARC: https://mxtoolbox.com/dmarc.aspx
4. Send test email and check spam score: https://mail-tester.com
