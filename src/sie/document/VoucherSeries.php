<?php

namespace sie\parser;

/*
class Sie::Document
  class VoucherSeries
    DEBTOR_INVOICE   = "KF"
    DEBTOR_PAYMENT   = "KI"
    SUPPLIER_INVOICE = "LF"
    SUPPLIER_PAYMENT = "KB"
    OTHER            = "LV"

   private function self.for(creditor, type) {
      case type
      when :invoice
        creditor ? SUPPLIER_INVOICE : DEBTOR_INVOICE
      when :payment
        creditor ? SUPPLIER_PAYMENT : DEBTOR_PAYMENT
      else
        OTHER
      }
    }
  }
}
